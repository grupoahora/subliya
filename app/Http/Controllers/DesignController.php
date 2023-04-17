<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesignRequest;
use App\Http\Requests\UpdateDesignRequest;
use App\Models\Attribute;
use App\Models\Catalog;
use App\Models\Design;
use App\Models\Category;
use App\Models\Label;
use App\Models\Status;
use App\Models\Subcategory;
use Illuminate\Http\Request;

/**
 * Class DesignController
 * @package App\Http\Controllers
 */
class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = Design::get();

        return view('design.index', compact('designs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributes = Attribute::pluck('name', 'id');
        $design = new Design();
        $categories = Category::get();
        $subcategories = Subcategory::get();
        $statuses = Status::pluck('name', 'id');
        $catalogs = Catalog::all();/* 
        dd($labels); */
        return view('design.create', compact('design', 'categories',  'subcategories', 'statuses', 'attributes', 'catalogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesignRequest $request)
    {
       /*  dd($request); */
        

        /* dd($request->file('photo')); */
        
       /*  request()->validate(Design::$rules); */

        $design = Design::create([
            'name' => $request['name'],
            'reference' => $request['reference'],
            'description' => $request['description'],
            
        ]);
        /* $countAttributes = count($request->attributos); */
        
       /*  dd($countLabels); */
        /* $attributes = [];
        for ($i=0; $i < $countAttributes; $i++) {
          
           $design->attributes()->attach(Attribute::where('name',  $request->attributos[$i])->get('id'), ['attroptions'=> $request->attroptions[$i]]);
        } */
       /*  dd($design->attributes); */
       /*  for ($i = 0; $i < $countLabels; $i++) {
           
            $design->labels()->attach(Label::where('id', $request->label_id[$i])->get('id'));
        } */
      
       /*  
        $urlimages = [];
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            
                $nombre = $image->getClientOriginalName();
              
                $ruta = public_path().'/designs';
                $image->move($ruta, $nombre);
                $urlimages[]['url']='/designs/'.$nombre;
            
        }
        $design->records()->createMany($urlimages);
        if (isset($request->catalog_id)) {
            for ($i = 0; $i < count($request->catalog_id); $i++) {
                $design->catalogs()->attach($request->catalog_id[$i]);
         
                $catalog = Catalog::find($request->catalog_id[$i]);
                $designs = Catalog::find($request->catalog_id[$i])->designs;
                $ownerscategories = array();
                $ownerssubcategories = array();
                foreach ($designs as $key => $design) {
                    $ownerscategories = array_merge($ownerscategories, [$design->category->name]);
                    $ownerssubcategories = array_merge($ownerssubcategories, [$design->subcategory->name]);
                }

                $catalog->update([
                    'ownerscategories' => $ownerscategories,
                    'ownerssubcategories' => $ownerssubcategories,
                ]);
            }
        } */
        
        /* dd($design->records); */
        return redirect()->route('designs.edit', compact('design'))
            ->with('success', 'Design created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $design = Design::find($id);

        return view('design.show', compact('design'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Design $design)
    {
        /* dd($design->attributes); */
        $attributes = Attribute::pluck('name', 'id');
        /* $design = new Design(); */
        $categories = Category::get();
        $catalogs = Catalog::get();
        $subcategories = Subcategory::get();
      /*   $statuses = Status::pluck('name', 'id');
        $labels = Label::all(); */
        return view('design.edit', compact('design', 'categories',  'subcategories', 'attributes',  'catalogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Design $design
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesignRequest $request, Design $design)
    {

       /*  request()->validate(Design::$rules); */

        $asd = $design->update([
            'name' => $request['name'],
            'reference' => $request['reference'],
            'description' => $request['description'],
            'category_id' => $request['category_id'],
            'subcategory_id' => $request['subcategory_id'],
        ]);
        if (isset($request->attributos)) {
            $countAttributes = count($request->attributos);

            /*  dd($countLabels); */
            $attributes = [];
            $design->attributes()->sync([]);
            for ($i = 0; $i < $countAttributes; $i++) {
                /*  $attributes[] = Attribute::where('name',  $request->attributos[$i])->get(); */
                $design->attributes()->attach(Attribute::where('name',  $request->attributos[$i])->get('id'), ['attroptions' => $request->attroptions[$i]]);
            }
        }
       
        $design->catalogs()->sync([]);

        if (isset($request->catalog_id)) {
            for ($i = 0; $i < count($request->catalog_id); $i++) {
                $design->catalogs()->attach($request->catalog_id[$i]);
            }
        }
    
        return redirect()->route('designs.edit', compact('design'))
            ->with('success', 'Design updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $design = Design::find($id)->delete();

        return redirect()->route('designs.index')
            ->with('success', 'Design deleted successfully');
    }
}
