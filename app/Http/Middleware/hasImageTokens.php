<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class hasImageTokens
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->remaining_images == -1 or Auth::user()->remaining_images > 0) {
            return $next($request);
        }

        return back()->with(['message' => 'Créditos insuficientes para criar. Para acessar esse recurso, atualize seu plano e garanta mais créditos!', 'type' => 'error']);
    }
}
