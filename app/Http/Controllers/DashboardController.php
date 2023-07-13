<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Design;
use App\Models\Record;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function contactanos(Request $request)
    {
        $data = $request;
        /*  dd($request); */
        /* $correo = ; */
        Mail::to('aantiinoo@gmail.com')->send(new ContactanosMailable($data));
        return back()->with('messagecontactanos', 'ok');
    }
    public function get_designs_by_subcategory(Request $request)
    {
        $designs = Design::where('subcategory_id', $request->subcategory)->with('records')->paginate(15);
        if (isset($request->page)) {

            return $designs;
        } else {
            return $designs;
        }
    }
    public function get_subcategories_by_category_unique(Request $request)
    {
        $subcategories =  Category::find($request->category)->subcategories;
        return $subcategories;
    }

    public function get_detail_all(Request $request)
    {

        $view = $request->view == null ? 0 : $request->view;

        /*  dd($view); */
        $designsweb = Design::paginate(15);
        /*  $view->with('designsweb', $designsweb); */
        return view('web.disenos', compact('designsweb', 'view'));
    }
    public function redessociales(Request $request)
    {
        $configuration = Configuration::find(1);
        $configuration->update([
            'facebook' => $request->Facebook,
            'instagram' => $request->Instagram,
            'whatsapp' => $request->Whatsapp,
        ]);
        return back()->with('info', 'Configuración se actualizo');
    }
    public function renewpass(Request $request)
    {
        /*   dd($request); */

        $iduser = Auth()->user();
        $user = User::find($iduser->id);
        /* dd($user); */
        if (Hash::check($request['old_pass'], $user->password) == true) {
            if ($request['new_pass'] == $request['repeat_new_pass']) {
                $user->update([
                    'password' => Hash::make($request->new_pass),
                ]);
            } else {
                return back()->with('info', 'contraseña no conincide');
            }
            return back()->with('info', 'contraseña se actualizo');
        } else {
            return back()->with('info', 'contraseña anterior no coincide');
        }

        /* dd($request); */
        /*  Hash::check($request['old_pass'], $user->password); */
        /*  dd(Hash::check($request['old_pass'], $user->password)); */
    }
    public function get_by_name(Request $request)
    {
        /* dd($request); */
        $busqueda = $request->search;
        $view = $request->view == null ? 0 : $request->view;
        $designsweb = Design::where('name', 'LIKE', '%' . $busqueda . '%')->paginate(15);

        /* dd($request); */
        return view('web.disenos', compact('designsweb', 'busqueda', 'view'));
    }
    public function get_designs_by_category(Request $request, $category)
    {
        $categoryselect = Category::find($category);

        $designsbycategorys = Design::where('category_id', $categoryselect->id)->paginate(15);
        return view('web.disenos', compact('designsbycategorys', 'categoryselect'));
    }
    public function get_detail_design(Request $request, $design)
    {
        $designdetail = Design::find($design);
        return view('web.diseno-detail', compact('designdetail'));
    }
    public function get_designs_by_categories_prueba(Request $request)
    {
        $categoryselect = $request->category;
        $designsbycategory = Design::where('category_id', $request->category)->with('records')->paginate(15);
        /*  dd($designs); */
        return view('web.disenos', compact('designsbycategory', 'categoryselect'));
    }
    public function get_designs_by_categories(Request $request)
    {
        $designs = Design::where('category_id', $request->category)->with('records')->paginate(15);
        if (isset($request->page)) {

            return $designs;
        } else {
            return $designs;
        }
    }
    public function categories_desactivate($idcat, $idsub)
    {
        $category = Category::find($idcat);
        $category->subcategories()->detach($idsub);
        return back()->with('success', 'category disabled successfully.');
    }
    public function subcategories_desactivate($idcat, $idsub)
    {
        $subcategory = Subcategory::find($idsub);
        $subcategory->categories()->detach($idcat);
        /*  dd($idcat ,$idsub , $subcategory, $subcategory->categories ); */

        return back()->with('success', 'category disabled successfully.');
    }
    public function upload_image(Request $request, $id)
    {
        if ($request->ajax()) {
            $design = Design::find($id);
            $urlimages = [];
            $filesLink = [];
            if ($request->hasFile('files')) {
                $images = $request->file('files');
                foreach ($images as $key => $image) {
                    $image_name = time() . '_' . $image->getClientOriginalName();
                    $ruta = public_path('image/');
                    $imagePath = $ruta . $image_name;

                    // Guardar la imagen original
                    $image->move($ruta, $image_name);

                    // Verificar si la imagen es legible
                    if (File::isReadable($imagePath)) {
                        // Convertir la imagen al formato WebP
                        $webpPath = $ruta . pathinfo($image_name, PATHINFO_FILENAME) . '.webp';
                        Image::make($imagePath)->encode('webp', 75)->save($webpPath);

                        // Guardar la URL de la imagen convertida
                        $urlimages[]['url'] = '/image/' . pathinfo($webpPath, PATHINFO_BASENAME);
                        $url = '/image/' . pathinfo($webpPath, PATHINFO_BASENAME);
                        array_push($filesLink, $url);
                    } else {
                        // La imagen no es legible, realizar acciones de manejo de errores si es necesario
                    }
                }
            }
            $design->records()->createMany($urlimages);
            return $filesLink;
        }
    }

    public function upload_image_category(Request $request, $id)
    {
        if ($request->ajax()) {
            $category = Category::find($id);
            $urlimages = [];
            $filesLink = [];
            if ($request->hasFile('files')) {
                $images = $request->file('files');
                foreach ($images as $key => $image) {
                    $image_name = time() . '_' . $image->getClientOriginalName();
                    $ruta = public_path('image/');
                    $imagePath = $ruta . $image_name;

                    // Guardar la imagen original
                    $image->move($ruta, $image_name);

                    // Verificar si la imagen es legible
                    if (File::isReadable($imagePath)) {
                        // Convertir la imagen al formato WebP
                        $webpPath = $ruta . pathinfo($image_name, PATHINFO_FILENAME) . '.webp';
                        Image::make($imagePath)->encode('webp', 75)->save($webpPath);

                        // Guardar la URL de la imagen convertida
                        $urlimages[]['url'] = '/image/' . pathinfo($webpPath, PATHINFO_BASENAME);
                        $url = '/image/' . pathinfo($webpPath, PATHINFO_BASENAME);
                        array_push($filesLink, $url);
                    } else {
                        // La imagen no es legible, realizar acciones de manejo de errores si es necesario
                    }
                }
            }
            $category->records()->createMany($urlimages);
            return $filesLink;
        }
    }
    public function file_delete(Request $request)
    {
        $image = Record::find($request->key);
        $image->delete();
        return true;
    }


    public function get_subcategories_by_category(Request $request)
    {
        $categories = collect(Category::find($request->categories[0])->subcategories);
        for ($i = 1; $i < count($request->categories); $i++) {
            $categories = $categories->concat(Category::find($request->categories[$i])->subcategories);
        }
        return $categories;
    }
    public function get_designs_by_categories_or_subcategories(Request $request)
    {
        if (!isset($request->subcategories)) {
            $designs = collect([]);
            for ($i = 0; $i < count($request->categories); $i++) {
                $designs = $designs->concat(Design::where('category_id', $request->categories[$i])->with('records')->get());
            }
            return $designs;
        } else {
            $designs = collect([]);
            for ($i = 0; $i < count($request->subcategories); $i++) {
                $designs = $designs->concat(Design::where('subcategory_id', $request->subcategories[$i])->with('records')->get());
            }
            return $designs;
        }
        /*  $designs = Design::where */
    }
}
