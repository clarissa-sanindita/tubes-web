<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\Court;

class TransactionController extends Controller
{
    public function show(){
        $transaction = Transaction::all();
        return view('admin.transaction', compact('transaction')); 
    }

    public function add(){
        $employee = Employee::all();
        $customer = Customer::all();
        $court = Court::all();
        return view('admin.transactionAdd',compact('employee','customer','court'));
    }

    public function addProcess(Request $request){
        $validate=$request->validate([
            'pelanggan_id' => ['required'],
            'lapangan_id' => ['required'],
            'tgl_book' => ['required'],
            'waktu_book' => ['required'],
            'jumlah_jam' => ['required'],
            'total' => ['required'],
            'pegawai_id' => ['required'],
        ]);

        Transaction::create($validate);
        return redirect('transaction')->with('status', 'Transaksi berhasil!');
    }
}
