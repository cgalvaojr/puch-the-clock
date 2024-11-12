<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlatformResource;
use App\Services\PlatformService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function __construct(private readonly PlatformService $service)
    {}
    public function store(Request $request): PlatformResource|JsonResponse
    {
        try {
            $platformData = $this->service->store($request->all());
            return new PlatformResource((object)$platformData->platform);
        } catch(\RuntimeException $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], 400);
        }

    }
}
