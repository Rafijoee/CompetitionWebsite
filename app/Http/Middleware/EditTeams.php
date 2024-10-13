<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EditTeams
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            // Memeriksa apakah properti path_1 dari team_submission kosong
            if (empty($user->teams->team_submission->first()->path_1)) {
                // Jika tidak kosong, lanjutkan ke request berikutnya
                return $next($request);
            } else {
                // Jika kosong, arahkan kembali dengan pesan error
                return redirect()->route('dashboard')->with('success', 'You do not have access to edit profile.');
            }
        }

        // Jika tidak kosong, lanjutkan ke request berikutnya
        return $next($request);
    }
}
