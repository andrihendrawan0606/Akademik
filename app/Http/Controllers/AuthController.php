<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


// use Auth;
// use Validator;
// use Hash;
// use Session;
// use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    use AuthenticatesUsers;
    public function login(Request $request)
    {
        $request->validate([
        'username' => 'required',
        'password' => 'required',
        ]);
        $username = $request->username;
		$password = $request->password;

        $credentials = $request->only(['username','password']);
        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }else if (auth()->guard('siswa')->attempt($credentials)) {
            return redirect()->route('siswa');
        }else{
            return back()->with('error','Username atau Password enggak cocok');    
        }

    //     // $credentials = $request->only(['username', 'password']);
    //     // if (Auth::attempt($credentials)) {
    //     //     $user = Auth::user();
    //     //     if ($user->level == 'admin') {
    //     //         return redirect()->intended('admin');
    //     //     } elseif ($user->level == 'siswa') {
    //     //         return redirect()->intended('siswa');
    //     //     }
    //     //     return redirect()->route('/');
    //     // }
    //     // return redirect('login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    // }
    // public function logout(Request $request) {
    //     $request->session()->flush();
    //     Auth::logout();
    //     return Redirect('login');
    }
    public function logout()
    {
    	if (Auth::guard('siswa')->check()) {
    		Auth::guard('siswa')->logout();
    	} else if(Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    	}
    	return redirect()->route('login');    	
    }
 
 
}
