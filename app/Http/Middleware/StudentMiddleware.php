<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle(Request $request, Closure $next)
     {
         if(Auth::user()->role != "student") {
            return redirect()->to('logout');
            
             
             /* 
             silahkan modifikasi pada bagian ini
             apa yang ingin kamu lakukan jika rolenya tidak sesuai
             */
         } elseif(Auth::user()->status != "active"){
                return redirect()->to('waiting');
        } 
         return $next($request);
         
         
     }
}
