<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function show(){
        $customers = Customer::all();
        return view('admin.pelanggan', compact('customers')); 
    }

    public function add(){
        $users = User::all();
        return view('admin.pelangganAdd');
    }

    public function addProcess(Request $request){
        $request->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
            'email' => ['required'],
            'telp' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'status' => ['required'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status' => $request->status,
        ]);

        Customer::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telp' => $request->telp,
            
        ]);

        return redirect('customer')->with('status', 'Data Pelanggan berhasil di tambah!');
    }
    public function edit($id){
        $customers = DB::table('customers')->where('id', $id)->first();
        $users = DB::table('users')->where('id', $customers->user_id)->first();
        return view('admin.pelangganEdit', compact('customers', 'users'));
    }

    public function editProcess(Request $request, $id){
        $validate=$request->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
            'email' => ['required'],
            'telp' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'status' => ['required'],
            
        ]);
        $customers = DB::table('customers')->where('id', $id)->first();
        DB::table('customers')->where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);
        DB::table('users')->where('id', $customers->user_id)->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status' => $request->status,
        ]);

        
        
        return redirect('customer')->with('status', 'Data pelanggan berhasil diedit!');
    }

    public function delete($id){
        $deleted = DB::table('customers')->where('id', $id)->delete();
        return redirect('customer')->with('status', 'Data lapangan berhasil dihapus!');
    }
}
