<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

/**
 * Class LabelController
 * @package App\Http\Controllers
 */
class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labels = Label::paginate();

        return view('label.index', compact('labels'))
            ->with('i', (request()->input('page', 1) - 1) * $labels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $label = new Label();
        return view('label.create', compact('label'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Label::$rules);

        $label = Label::create($request->all());

        return redirect()->route('labels.index')
            ->with('success', 'Label created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $label = Label::find($id);

        return view('label.show', compact('label'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $label = Label::find($id);

        return view('label.edit', compact('label'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Label $label
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Label $label)
    {
        request()->validate(Label::$rules);

        $label->update($request->all());

        return redirect()->route('labels.index')
            ->with('success', 'Label updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $label = Label::find($id)->delete();

        return redirect()->route('labels.index')
            ->with('success', 'Label deleted successfully');
    }
}
