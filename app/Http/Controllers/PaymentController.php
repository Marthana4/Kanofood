<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PaymentExport;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $keyword = $request->keyword;
        $payments= Payment::select('payments.id_pay as id_pay',
        'payments.payment_status as payment_status','order_menus.id_order as id_order','order_menus.total_order as total_order',
        'order_menus.user_cost as user_cost','order_menus.user_cost_remaining as user_cost_remaining',
        'order_menus.order_date as order_date','users.id as id','users.name as name','users.level as level')
        ->join('order_menus', 'payments.id_order', '=', 'order_menus.id_order')
        ->join('users', 'payments.id', '=', 'users.id')
        ->where('order_menus.id_order','LIKE','%'.$keyword.'%')
        ->orwhere('users.name','LIKE','%'.$keyword.'%')
        ->orwhere('users.level','LIKE','%'.$keyword.'%')
        ->orWhere('order_menus.total_order','LIKE','%'.$keyword.'%')
        ->orWhere('payments.payment_status','LIKE','%'.$keyword.'%')
        ->orWhere('order_menus.user_cost','LIKE','%'.$keyword.'%')
        ->orWhere('order_menus.user_cost_remaining','LIKE','%'.$keyword.'%')
        ->orWhere('order_date','LIKE','%'.$keyword.'%')
        ->paginate(10);
        return view('Admin.payment', compact('payments','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function cetak_pdf()
    {
    	$payments= Payment::select('payments.id_pay as id_pay',
        'payments.payment_status as payment_status','order_menus.id_order as id_order','order_menus.total_order as total_order',
        'order_menus.user_cost as user_cost','order_menus.user_cost_remaining as user_cost_remaining',
        'order_menus.order_date as order_date','users.id as id','users.name as name','users.level as level')
        ->join('order_menus', 'payments.id_order', '=', 'order_menus.id_order')
        ->join('users', 'payments.id', '=', 'users.id')
        ->get();
    	$pdf = PDF::loadview('Admin.payment_pdf',['payments'=>$payments]);
    	return $pdf->stream();
    }

    public function export_excel()
	{
		$nama_file = 'laporan_payment_'.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new PaymentExport, $nama_file);
	}

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
        //
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

    public function date(Request $request){
        // $fromDate = $request->input('fromDate');
        // $toDate = $request->input('toDate');

        $fromDate ="2021-09-06";
        $toDate ="2021-09-06";
        //"order_date >= ? AND order_date <= ?"
        $query=DB::table('order_menus')->select()
        ->Where('order_date','>=',$fromDate)
        ->And('order_date','<=',$toDate)
        ->get();
        dd($query);

        $payments= Payment::select('payments.id_pay as id_pay',
        'payments.payment_status as payment_status','order_menus.id_order as id_order','order_menus.total_order as total_order',
        'order_menus.user_cost as user_cost','order_menus.user_cost_remaining as user_cost_remaining',
        'order_menus.order_date as order_date','users.id as id','users.name as name','users.level as level')
        ->join('order_menus', 'payments.id_order', '=', 'order_menus.id_order')
        ->join('users', 'payments.id', '=', 'users.id')
        ->get();

        return view('Admin.payment', compact('payments','query'));
    }
}
