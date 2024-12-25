<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPeriod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data = $request->all();
        if (empty($data['start_date'])) {
            $data['start_date'] = '';
            if ($data['start_date'] == null) {
                $data['start_date'] = date('Y-m-d');
            }
        }
        if (empty($data['end_date'])) {
            $data['end_date'] = '';
            if ($data['end_date'] == null) {
                $data['end_date'] = date('Y-m-d');
            }
        }
        $request->merge($data);

        return $next($request);
    }
}
