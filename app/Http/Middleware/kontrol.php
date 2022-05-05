<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class kontrol
{
    public function handle(Request $request, Closure $next)
    {
       if(!Auth::guard("kullanici")->check())
       {
           return redirect()->route("girisyap");
       }
        return $next($request);
    }
}
