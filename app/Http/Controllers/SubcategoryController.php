<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

/**
 * Class SubcategoryController
 * @package App\Http\Controllers
 */
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::get();

        return view('subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory = new Subcategory();
        return view('subcategory.create', compact('subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subcategory::$rules);
        $subcategory = Subcategory::create([
            'name' => $request->name,
        ]);
        if (isset($request->category)) {
            $category = Category::find($request->category);
            $subcategory->categories()->attach($category->id);
            return redirect()->route('categories.edit', compact('category'))
            ->with('success', 'Subcategory created successfully.');
        }
       

        return redirect()->route('subcategories.edit', compact('subcategory'))
            ->with('success', 'Subcategory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = Subcategory::find($id);

        return view('subcategory.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Category::get();

        return view('subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        if (isset($request->category_id)) {
            for ($i = 0; $i < count($request->category_id); $i++) {
                $subcategory->Categories()->attach($request->category_id[$i]);
            }
        }
        /* request()->validate(Category::$rules); */
        if (isset($request->name)) {
            $subcategory->update([
                'name' => $request->name,
            ]);
        }

        return redirect()->route('subcategories.edit', compact('subcategory'))
            ->with('success', 'Subcategory updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id)->delete();

        return back()->with('success', 'Subcategory deleted successfully');
    }
}
