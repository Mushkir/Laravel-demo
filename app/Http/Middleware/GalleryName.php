<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GalleryName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->path());
        $path = $request->path();

        if ($path !== 'gallery/photos' && $path !== "gallery/videos") {
            return redirect('/');
        }

        return $next($request);
    }
}
