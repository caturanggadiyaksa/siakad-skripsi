<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AksesController extends Controller
{
    //
    public function index(Request $request){

        $data = ['title' => 'Manajemen Akses'];
        
        if ($request->user()->role == 'admin') {
            // tampilkan dashboard admin
            $user = User::all();
            return view('dashboard.admin.akses', $data, ['user' => $user]);
        } else {
            // tampilkan halaman umum jika user tidak memiliki role yang sesuai
            return redirect('/login');
            

        }

      

    }

    public function tambah() {
        $data = ['title' => 'Add New user'];
        return view('dashboard.admin.crud.akses.create', $data);

    }
    public function store(Request $request) {
        

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role']
        ]);

        return redirect('/akses');
    }

    public function edit($id) {
        $data = ['title' => 'Edit Data user'];
        $user = User::find($id);
        return view('dashboard.admin.crud.akses.edit', ['user' => $user], $data);
    }

    public function update($id, Request $request) {
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        // $user->password = Hash::make($request->password);
      
        $user->save();
        // dd( $guru->nomor_telepon);
        return redirect('/akses');
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/akses');
    }

    public function show($id) {
        $data = ['title' => 'Show Data user'];
        $user = User::find($id);
        return view('dashboard.admin.crud.akses.show', ['user' => $user], $data);
    }
}
