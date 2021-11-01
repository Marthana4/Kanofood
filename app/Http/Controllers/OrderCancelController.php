<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class OrderCancelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_order = DB::table('order_menus')->count();
        $process_order = DB::table('order_menus')
        ->Where('order_status','process by agent')
        ->orWhere('order_status','process by seller')
        ->count();
        $done_order = DB::table('order_menus')
        ->Where('order_status','done')
        ->count();
        $cancel_order = DB::table('order_menus')
        ->Where('order_status','cancel by agent')
        ->orWhere('order_status','cancel by seller')
        ->count();
        $ordercancel= Order::select('order_menus.id_order as id_order','order_menus.total_order as total_order', 
        'order_menus.order_date as order_date',
        'order_menus.order_status as order_status', 'users.name as name')
        ->join('users', 'order_menus.id', '=', 'users.id')
        ->Where('order_status','cancel by agent')
        ->orWhere('order_status','cancel by seller')
        ->paginate(10);
        return view('Admin.order_cancel',compact('ordercancel','total_order','done_order','process_order','cancel_order'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       
        $orderdetail= Orderdetail::select('order_details.id_detail as id_detail',
        'order_details.quantity as quantity', 'order_details.total as total', 
        'order_menus.id_order as id_order', 'menu_foods.id_menu as id_menu', 'menu_foods.name_food as name_food',
        'menu_foods.price as price', 'order_menus.user_cost as cost', 'order_menus.user_cost_remaining as cost_remaining',
        'order_menus.message as message', 'order_menus.order_status as status','order_menus.total_order as total_order',
        'users.id as id','users.name as name')
        ->join('order_menus', 'order_details.id_order', '=', 'order_menus.id_order')
        ->join('menu_foods', 'order_details.id_menu', '=', 'menu_foods.id_menu')
        ->join('users', 'order_details.id', '=', 'users.id')
        ->where('order_menus.id_order',$id)
        ->get();
        $order = Order::select('users.id as id','users.name as aname')
        ->join('users', 'order_menus.id', '=', 'users.id')
        ->get();
        $menu = Menu::all();
        return view('Admin.detail-order-admin', compact('orderdetail','order','menu'));
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
        $order = Order::where('id_order', $id)->delete();

        //Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return $order;
    }

}
