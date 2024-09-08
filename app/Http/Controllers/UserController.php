<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }
    
    public function tambahUser()
    {
        return view('user.create');
    }
    public function simpanUser(Request $request)
    {
        $this->validate($request, [
            'ktp' => 'required|numeric|unique:users,ktp',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'hp' => 'required|numeric|unique:users,hp',
            'peran' => 'required',
        ]);
        $simpan = new User();
        $simpan->ktp = $request->ktp;
        $simpan->name = $request->name;
        $simpan->email = $request->email;
        $simpan->password = bcrypt($request->password);
        $simpan->hp = $request->hp;
        $simpan->peran = $request->peran;
        $simpan->save();
        return redirect()->route('users.index');
    }

    public function editUser($id)
    {
        $edit = User::find($id);
        return view('user.edit', compact('edit'));
    }
    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'ktp' => 'required|numeric|unique:users,ktp,' . $id,
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'hp' => 'required|numeric|unique:users,hp,' . $id,
            'peran' => 'required',
        ]);
        $simpan = User::find($id);
        $simpan->ktp = $request->ktp;
        $simpan->name = $request->name;
        $simpan->email = $request->email;
        if ($request->password !=null){
        $simpan->password = bcrypt($request->password);
        }
        $simpan->hp = $request->hp;
        $simpan->peran = $request->peran;
        $simpan->save();
        return redirect()->route('users.index');
    }


    public function hapusUser($id)
    {
        $hapus = User::find($id);
        $hapus->delete();
        return redirect()->route('users.index');
    }
}
