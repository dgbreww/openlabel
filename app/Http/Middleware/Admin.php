<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Admin {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {	

    	$adminSess = Session::get('adminSess');

    	if (!empty($adminSess)) {
    		return $next($request);	
    	} else {
    		return redirect('/admin');
    	}
    	
    }
}