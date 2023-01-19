<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class User {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {	

    	$userSess = Session::get('userSess');

    	if (!empty($userSess)) {
    		return $next($request);	
    	} else {
    		return redirect('/');
    	}
    	
    }
}