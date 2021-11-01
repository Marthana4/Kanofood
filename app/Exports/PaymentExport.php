<?php

namespace App\Exports;

use App\Models\Payment;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PaymentExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('Admin.payment_xlsx', [
            'payments' => Payment::select('order_menus.id_order as id_order',
            'users.name as name','users.level as level',
            'order_menus.total_order as total_order',
            'payments.payment_status as payment_status',
            'order_menus.user_cost as user_cost','order_menus.user_cost_remaining as user_cost_remaining',
            'order_menus.order_date as order_date')
            ->join('order_menus', 'payments.id_order', '=', 'order_menus.id_order')
            ->join('users', 'payments.id', '=', 'users.id')
            ->get()
        ]);
    }
}
