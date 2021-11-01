<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $store = Store::all();
        $store= Store::select('stores.id_store as id_store', 'stores.name_store as name_store', 'stores.jam_buka as jam_buka', 'stores.jam_tutup as jam_tutup', 'stores.alamat as alamat', 
        'stores.deskripsi as deskripsi','stores.is_active as is_active', 'users.name as name')
        ->join('users', 'stores.id', '=', 'users.id')
        ->where('name_store','LIKE','%'.$keyword.'%')
        ->orWhere('jam_buka','LIKE','%'.$keyword.'%')
        ->orWhere('jam_tutup','LIKE','%'.$keyword.'%')
        ->orWhere('alamat','LIKE','%'.$keyword.'%')
        ->orWhere('deskripsi','LIKE','%'.$keyword.'%')
        ->orWhere('users.name','LIKE','%'.$keyword.'%')
        ->paginate(10);

        return view('Admin.store-admin', compact('store','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model= new Store;
        $users= User::where('level','seller')->get();

        return view ('Admin.tambah_store-admin', compact('model','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Store;
        $model->name_store = $request->name_store;
        $model->jam_buka = $request->jam_buka;
        $model->jam_tutup = $request->jam_tutup;
        $model->is_active = $request->is_active;
        $model->alamat = $request->alamat;
        $model->deskripsi = $request->deskripsi;
        $model->id = $request->name;
        $model->save();
        
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect('store-admin');
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
        $model = Store::where('id_store', $id)->first();
        $users= User::where('level','seller')->get();

        return view('Admin.edit_store-admin', compact('model','users'));
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
        $model = Store::where('id_store', $id)->first();
        $model->name_store = $request->name_store;
        $model->jam_buka = $request->jam_buka;
        $model->jam_tutup = $request->jam_tutup;
        $model->is_active = $request->is_active;
        $model->alamat = $request->alamat;
        $model->deskripsi = $request->deskripsi;
        $model->id = $request->name;
        $model->save();

        Alert::success('Berhasil', 'Data Berhasil Diupdate');
        return redirect('store-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Store::where('id_store', $id)->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect('store-admin');
    }
}
