<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function loginView(){
        return view('user.login');
    }
    public function registerView(){
        return view('user.register');
    }
    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $status = User::where('username',$request->username)->first()->status;
            $request->session()->regenerate();
            if($status=='user'){
                return redirect('/');
            }
            else{
                return redirect('/admin');
            }
            
        }
 
        return back()->with('loginError', 'Login Failed!');
    }

    public function registerProcess(Request $request){
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
        
        //$request->Session::flash('success', 'Registration succesfull! Please Login!');
        return redirect('/login');
        
    }

    public function logoutProcess(Request $request){
        Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
