<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Store;

class MenuSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu= Menu::select('menu_foods.id_menu as id_menu','menu_foods.name_food as name_food', 'menu_foods.image as image',
        'menu_foods.price as price', 'menu_foods.deskripsif as deskripsif', 'stores.name_store as name_store')
       ->join('stores', 'menu_foods.id_store', '=', 'stores.id_store')
       ->get();
        return view('Seller.food-seller',compact('menu'));
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
        return view('Seller.tambah_menu',compact('model','stores'));
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
        $model->id_store ="25";
        $model->save();
        $resorce->move(\base_path() ."/public/images", $namefile);

        return redirect('food-seller');
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
        //$stores= Store::all();
        return view('Seller.edit_menu', compact('model'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
