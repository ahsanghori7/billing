<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\GeneralTrait;

class LogRequests
{
    use GeneralTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->start = microtime(true);
        return $next($request);
    }

    public function terminate($request, $response)
    {
        $request->end = microtime(true);
        $this->logRequest($request, $response);
    }

    private function logRequest($request, $response)
    {
        $duration = $request->end - $request->start;
        $url = $request->fullUrl();
        $method = $request->getMethod();
        $ip = $request->getClientIp();
        $request = json_encode($request->all());
        $log = "{$ip}: {$method}@{$url} - {$duration}ms \n" .
        "Request : {[$request]} \n" .
        "Response : {$response->getContent()} \n";

        $this->log(array('log' => json_encode($log)), 'request_life_cycle');
    }
}
