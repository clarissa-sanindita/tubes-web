<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function show(){
        $employees = Employee::all();
       // $employees = DB::table('employees')->get();
        return view('admin.pegawai', compact('employees')); 
    }

    public function add(){
        $users = User::all();
        return view('admin.pegawaiAdd');
    }

    public function addProcess(Request $request){
        $request->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
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

        Employee::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('employee')->with('status', 'Data Pegawai berhasil di tambah!');
    }

    public function edit($id){
        $employees = DB::table('employees')->where('id', $id)->first();
        $users = DB::table('users')->where('id', $employees->user_id)->first();
        return view('admin.pegawaiEdit', compact('employees', 'users'));
    }

    public function editProcess(Request $request, $id){
        $validate=$request->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
            'telp' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'status' => ['required'],
        ]);
        $employees = DB::table('employees')->where('id', $id)->first();
        DB::table('users')->where('id', $employees->user_id)->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status' => $request->status,
        ]);

        DB::table('employees')->where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);
        
        return redirect('employee')->with('status', 'Data pelanggan berhasil diedit!');
    }

    public function delete($id){
        $deleted = DB::table('employees')->where('id', $id)->delete();
        return redirect('employee')->with('status', 'Data pegawai berhasil dihapus!');
    }
}
