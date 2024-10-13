<?php

namespace App\Http\Middleware;

use App\Models\Payments;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class payment3
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Memastikan pengguna sudah login dan memiliki relasi dengan Team
        if ($user && $user->teams) {
            $team_id = $user->teams->id;
            $paymentStatus = Payments::where('team_id', $team_id)
                ->whereIn('stage_id', [3, 6, 9, 12])
                ->orderBy('created_at', 'desc')
                ->pluck('status')
                ->first();

            // Redirect berdasarkan status pembayaran
            if ($paymentStatus === 'verified') {
                return $next($request);
            } elseif ($paymentStatus === 'unverified' || $paymentStatus === null) {
                return redirect('/payment');
            }
        }
    }
}
