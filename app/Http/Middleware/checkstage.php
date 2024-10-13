<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class checkstage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
    
        if ($user && $user->teams) {
            $stage_id = $user->teams->stage_id;
            Log::info('Stage ID:', ['stage_id' => $stage_id, 'requested_path' => $request->path()]);
    
            if (in_array($stage_id, [1, 4, 7, 10]) && $request->path() !== 'submissions1') {
                Log::info('Redirecting to submissions1');
                return redirect('/submissions1');
            } elseif (in_array($stage_id, [2, 5, 8, 11]) && $request->path() !== 'submissions2') {
                Log::info('Redirecting to submissions2');
                return redirect('/submissions2');
            } elseif (in_array($stage_id, [3, 6, 9, 12]) && $request->path() !== 'final-submission') {
                Log::info('Redirecting to final-submission');
                return redirect('/final-submission');
            }
        }
    
        Log::info('Continuing to requested page', ['path' => $request->path()]);
        return $next($request);
    }
}
