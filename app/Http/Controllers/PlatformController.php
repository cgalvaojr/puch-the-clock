<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlatformRequest;
use App\Http\Resources\PlatformResource;
use App\Services\PlatformService;
use Illuminate\Http\JsonResponse;

class PlatformController extends Controller
{
    public function __construct(private readonly PlatformService $service)
    {}
    public function store(StorePlatformRequest $request): PlatformResource|JsonResponse
    {
        $validatedData = $request->validated();

        try {
            $platformData = $this->service->store($validatedData);
            return new PlatformResource((object)$platformData->platform);
        } catch(\RuntimeException $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], 400);
        }

    }
}
