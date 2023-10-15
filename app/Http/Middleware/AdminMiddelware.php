<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::check()) {

            if(Auth::user()->role=='administrateur') {
                return $next($request);

            }
            else {
                return redirect('/')->with('status','Access Denied! as you are not as admin');
            }

        }

        else {
            return redirect()->route('/')->with('message' , 'Connectez-vous d\'abord');
           }



    }
}
