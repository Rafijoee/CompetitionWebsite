<?php

namespace App\Http\Middleware;

use App\Models\Payments;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class payment2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
    
        if ($user && $user->teams) {
            $team_id = $user->teams->id;
            $paymentStatus = Payments::where('team_id', $team_id)
                ->whereIn('stage_id', [2, 5, 8, 11])
                ->orderBy('created_at', 'desc')
                ->pluck('status')
                ->first();
    
            Log::info('Payment Status:', ['status' => $paymentStatus]);
    
            if ($paymentStatus === 'verified') {
                return $next($request);
            } elseif ($paymentStatus === 'unverified' || $paymentStatus === null) {
                Log::info('Redirecting to payment');
                return redirect('/payment');
            }
        }
    
        Log::info('Redirecting to login');
        return redirect('/login');
    }
}
