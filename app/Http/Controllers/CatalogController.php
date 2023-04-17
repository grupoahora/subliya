<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Design;
use App\Models\Subcategory;
use Illuminate\Http\Request;

/**
 * Class CatalogController
 * @package App\Http\Controllers
 */
class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::paginate();

        return view('catalog.index', compact('catalogs'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        /* $catone = Category::find(1)->subcategories;
        $cattwo = Category::find(2)->subcategories;
        $array = $catone->concat($cattwo);
        dd($array->concat()); */
        $catalog = new Catalog();
        $designs = Design::all();
        $categories = Category::pluck('name', 'id');
        $subcategories = Subcategory::pluck('name', 'id');
        return view('catalog.create', compact('catalog', 'designs', 'categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*  dd($request->designs); */
        request()->validate(Catalog::$rules);

        $catalog = Catalog::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        if (isset($request->designs)) {
            $design = [];
            for ($i = 0; $i < count($request->designs); $i++) {
                $design[$i] = Design::find($request->designs[$i]);
                # code...
                $catalog->designs()->attach($design[$i]);
            }
        } 
        
        
        /* dd($catalog->designs); */

       
        return redirect()->route('catalogs.index')
            ->with('success', 'Catalog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catalog = Catalog::find($id);

        return view('catalog.show', compact('catalog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalog = Catalog::find($id);
        $categories = Category::pluck('name', 'id');
        $subcategories = Subcategory::pluck('name', 'id');
        return view('catalog.edit', compact('catalog', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Catalog $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog)
    {

        /* dd($request); */
        request()->validate(Catalog::$rules);

       

        /* $designsactual = []; */
        /* dd($catalog->designs->count()); */

        if (!isset($request->designsactual) == true) {
            $designsactual = [];

            for ($i = 0; $i < $catalog->designs->count(); $i++) {
                $designsactual[] = $catalog->designs[$i]->id;
            }
            $catalog->designs()->detach($designsactual);
            if (isset($request->designsnew) == true) {
                for ($i = 0; $i < count($request->designsnew); $i++) {
                    $catalog->designs()->attach($request->designsnew[$i]);
                }
            }
        } else {

            /* dd($request->designsactual); */
            $idsActualizacion = array();
            for ($i = 0; $i < count($request->designsactual); $i++) {
                $idsActualizacion = array_merge($idsActualizacion, [intVal($request->designsactual[$i])]);
            }
            $idsActuales = $catalog->get_ids();
            $ondelete = array_diff($idsActuales, $idsActualizacion);
            foreach ($ondelete as $key => $value) {
                $catalog->designs()->detach($value);
            }
            if (isset($request->designsnew) == true) {
                for ($i = 0; $i < count($request->designsnew); $i++) {
                    $catalog->designs()->attach($request->designsnew[$i]);
                }
            }
        }
        /* dd(!isset($request->designsactual)); */

        $designs = $catalog->designs;
        
        $catalog->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);


        
        return redirect()->route('catalogs.edit', compact('catalog'))
            ->with('success', 'Catalog updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $catalog = Catalog::find($id)->delete();

        return redirect()->route('catalogs.index')
            ->with('success', 'Catalog deleted successfully');
    }
}
