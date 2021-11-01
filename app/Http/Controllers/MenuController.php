<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Store;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
    //$menu = Menu::all();
        $menu= Menu::select('menu_foods.id_menu as id_menu','menu_foods.name_food as name_food', 'menu_foods.image as image',
        'menu_foods.price as price', 'menu_foods.deskripsif as deskripsif', 'stores.name_store as name_store')
       ->join('stores', 'menu_foods.id_store', '=', 'stores.id_store')
       ->where('name_food','LIKE','%'.$keyword.'%')
       ->orWhere('price','LIKE','%'.$keyword.'%')
       ->orWhere('deskripsif','LIKE','%'.$keyword.'%')
       ->orWhere('stores.name_store','LIKE','%'.$keyword.'%')
       ->paginate(2);
        return view('Admin.food-admin',compact('menu','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Menu;
        $stores= Store::all();
        return view('Admin.tambah_menu-admin',compact('model','stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resorce       = $request->file('image');
        
        $namefile =  $resorce->getClientOriginalName();
            
        $model = new Menu;
        $model->name_food = $request->name_food;
        $model->image = $namefile;
        $model->price = $request->price;
        $model->deskripsif = $request->deskripsif;
        $model->id_store = $request->name_store;
        $model->save();
        $resorce->move(\base_path() ."/public/images", $namefile);

        return redirect('food-admin');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Menu::where('id_menu', $id)->first();
        $stores= Store::all();
        return view('Admin.detail_menu', compact('model','stores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Menu::where('id_menu', $id)->first();
        // pengecekan apakah ada data yang di upload atau tidak
        if($request->hasFile('image')){
            $resorce = $request->file('image');
            $namefile =  $resorce->getClientOriginalName();// mengambil nama file original yang diupload
            $resorce->move(\base_path() ."/public/images", $namefile);// upload ke directory ke public/images
            $path = public_path().'\\images\\';// buat directory baru
            $file_old = $path.$model->image;// menggabung string dari alamat file yang lama
            if(file_exists($path) && $model->image != null) { // pengecekan apakah directory file yang lama ada atau data kolom image di database sudah ada
                unlink($file_old);
            }
            // edit database sesuai dengan data
            $update = Menu::where('id_menu', $id)->update([
                "name_food" => $request->name_food,
                "image" => $namefile,
                "price" => $request->price,
                "deskripsif" => $request->deskripsif,
                "id_store" => $request->name_store,
            ]);
        }else {
            $update = Menu::where('id_menu', $id)->update([
                "name_food" => $request->name_food,
                "price" => $request->price,
                "deskripsif" => $request->deskripsif,
                "id_store" => $request->name_store,
            ]);
        }
        
        return redirect('food-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Menu::where('id_menu', $id)->delete();

        //Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect('food-admin');
    }
}
