<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $ip = $request->ip();
        $rota = $request->getRequestUri();

        LogAcesso::create([
            'log' => "O IP: $ip requisitou a rota $rota",
            'ip' => $ip
        ]);
        // return response('Você está logado')->setStatusCode(Response::HTTP_OK);
        return $next($request);
    }
}
