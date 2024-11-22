<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticateJWT
{
    public function handle($request, Closure $next)
    {
        try {
            // verificar el token(validez)
            $user = JWTAuth::parseToken()->authenticate();
        } catch (JWTException $e) {
            return response()->json(['message' => 'Token inválido o expirado'], 401);
        }

        // permitir acceso si es exitosa la verificación
        return $next($request);
    }
}
