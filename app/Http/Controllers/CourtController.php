<?php

namespace App\Http\Controllers;

use App\Models\Court;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourtController extends Controller
{
    public function show(){
        $courts = Court::all();
        //$courts = DB::table('courts')->get();
        return view('admin.lapangan', compact('courts')); 
    }

    public function showUser(){
        $courts = DB::table('courts')->get();
        return view('user.lapangan', compact('courts')); 
    }

    public function add(){
        $employees = Employee::all();
        return view('admin.lapanganAdd',  compact('employees'));
    }

    public function addProcess(Request $request){
        $validate=$request->validate([
            'pegawai_id' => 'required',
            'nama_lap' => 'required',
            'kategori' => 'required',
            'image' => 'required',
            'harga' => 'required',
            
        ]);

        if($request->file('image')){
            $validate['image']=$request->file('image')->store('post-image');
        }

        Court::create($validate);
        return redirect('court')->with('status', 'Data lapangan berhasil ditambah!');
    }

    public function edit($id){
        $employees = Employee::all();
        $courts = DB::table('courts')->where('id', $id)->first();
        return view('admin.lapanganEdit', compact('courts', 'employees'));
    }

    public function editProcess(Request $request, $id){
        $validate=$request->validate([
            'pegawai_id' => 'required',
            'nama_lap' => 'required',
            'kategori' => 'required',
            'image' => 'required',
            'harga' => 'required',
            
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validate['image']=$request->file('image')->store('post-image');
        }

        $courts = DB::table('courts')->where('id', $id)
        ->update($validate);
        return redirect('court')->with('status', 'Data lapangan berhasil diedit!');
    }

    public function delete(Court $courts, $id){
        if($courts->image){
            Storage::delete($courts->image);
        }
        $deleted = DB::table('courts')->where('id', $id)->delete();
        
        return redirect('court')->with('status', 'Data lapangan berhasil dihapus!');
    }
}
