<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        return view('category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        request()->validate(Category::$rules);

        $category = Category::create([
            'name' => $request->name,
        ]);
        if (isset($request->subcategory)) {
            $subcategory = Subcategory::find($request->subcategory);
            $category->subcategories()->attach($subcategory->id);
            return redirect()->route('subcategories.edit', compact('subcategory'))
                ->with('success', 'Subcategory created successfully.');
        }
        return redirect()->route('categories.edit', compact('category'))
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $subcategories = Subcategory::get();
        return view('category.edit', compact('category', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        /* dd($category); */
        if (isset($request->subcategory_id)) {
            for ($i=0; $i < count($request->subcategory_id); $i++) { 
                $category->Subcategories()->attach($request->subcategory_id[$i]);
            }
        }
        /* request()->validate(Category::$rules); */
        if (isset($request->name)) {
            $category->update([
                'name' => $request->name,
            ]);
        }
        

        return redirect()->route('categories.edit', compact('category'))
            ->with('success', 'Category updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();

        return back()->with('success', 'Category deleted successfully');
    }
}
