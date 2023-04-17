<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;

/**
 * Class AttributeController
 * @package App\Http\Controllers
 */
class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::paginate();

        return view('attribute.index', compact('attributes'))
            ->with('i', (request()->input('page', 1) - 1) * $attributes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attribute = new Attribute();
        return view('attribute.create', compact('attribute'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Attribute::$rules);

        $attribute = Attribute::create($request->all());

        return redirect()->route('attributes.index')
            ->with('success', 'Attribute created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attribute = Attribute::find($id);

        return view('attribute.show', compact('attribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute = Attribute::find($id);

        return view('attribute.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Attribute $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attribute $attribute)
    {
        request()->validate(Attribute::$rules);

        $attribute->update($request->all());

        return redirect()->route('attributes.index')
            ->with('success', 'Attribute updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $attribute = Attribute::find($id)->delete();

        return redirect()->route('attributes.index')
            ->with('success', 'Attribute deleted successfully');
    }
}
