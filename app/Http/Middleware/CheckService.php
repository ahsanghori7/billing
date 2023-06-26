<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\Interfaces\SubServiceInterface;
use App\Enums\ErrorCodesEnum;
use App\Models\Landing;
use App\Repository\Interfaces\LandingInterface;

class CheckService
{
    public function __construct(protected SubServiceInterface $subService, protected LandingInterface $landing)
    {
        $this->subService = $subService;
        $this->landing = $landing;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isBlocked = $this->subService->findOne(
            ['id' => $request->subservice_id, 'is_blocked' => true],
            ['is_blocked']
        );
        if ($isBlocked) {
            return response()->json([
                'status' => false,
                'message' => ErrorCodesEnum::message('E05'),
                'errorCode' => 'E05'
                ]);
        }

        $landing = $this->landing->checkLimit($request);
        if ($landing) {
            return response()->json([
                'status' => false,
                'message' => ErrorCodesEnum::message('E06'),
                'errorCode' => 'E06'
                ]);
        }

        return $next($request);
    }
}
