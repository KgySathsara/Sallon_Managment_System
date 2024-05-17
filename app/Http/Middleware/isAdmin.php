<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\appoinment;
use Carbon\Carbon;
class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check())
        {
            if(auth()->user()->is_admin == 1){
                return $next($request);
            }
            elseif(auth()->user()->is_admin == 2){
                return to_route('display.home');
            }
            else{
               
                return to_route('user.home');
            }
        }
        
    }
}
