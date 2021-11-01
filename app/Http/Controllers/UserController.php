<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        //$users = User::all();
        $users = User::where('name','LIKE','%'.$keyword.'%')
                ->orWhere('gender','LIKE','%'.$keyword.'%')
                ->orWhere('no_hp','LIKE','%'.$keyword.'%')
                ->orWhere('tanggal_lahir','LIKE','%'.$keyword.'%')
                ->orWhere('level','LIKE','%'.$keyword.'%')
                ->orWhere('email','LIKE','%'.$keyword.'%')
                ->paginate(5);
        return view('Admin.users', compact('users','keyword'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model= new User;

        return view ('Admin.tambah_users', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new User;
        $model->name = $request->name;
        $model->no_hp = $request->no_hp;
        $model->gender = $request->gender;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->level = $request->level;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->save();
        
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect('users');
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
        $model = User::where('id', $id)->first();
        return view('Admin.edit_users', compact('model'));
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
        $model = User::where('id', $id)->first();
        $model->name = $request->name;
        $model->no_hp = $request->no_hp;
        $model->gender = $request->gender;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->level = $request->level;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->save();
        
        Alert::success('Berhasil', 'Data Berhasil Diupdate');
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::where('id', $id)->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect('users');
    }
}
