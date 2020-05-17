<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roleKey)
    {
        $loggedInUser = Auth::user();
        $permission   = Role::where('key', $roleKey)->first()->permission;

        if ($loggedInUser->permission === $permission) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
