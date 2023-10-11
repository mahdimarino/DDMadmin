<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();
        
        if ($user && in_array($user->user_role, $roles)) {
            return $next($request);
        }

        abort(403, 'Unauthorized.');
    }
}
