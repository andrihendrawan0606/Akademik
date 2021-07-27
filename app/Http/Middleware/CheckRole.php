<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(request $request, Closure $next, $roles)
{
    //jika akun yang login sesuai dengan role 
    //maka silahkan akses
    //jika tidak sesuai akan diarahkan ke home

    // if (!Auth::check()) {
    //     return redirect('login');
    // }
    // $user = Auth::user()->level;

    // if($user == $roles)
    //     return $next($request);


    // return redirect('login')->with('error',"kamu gak punya akses");

    // $roles = array_slice(func_get_args(), 2);

    // foreach ($roles as $role) { 
    //     $user = \Auth::user()->level;
    //     if( $user == $role){
    //         return $next($request);
    //     }
    // }

    // return redirect('/');
}
}
