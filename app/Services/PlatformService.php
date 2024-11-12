<?php

namespace App\Services;

use App\Models\Platform;
use App\Models\PlatformOption;
use Illuminate\Support\Facades\DB;

class PlatformService
{
    public function __construct(
        private readonly Platform $platformModel,
        private readonly PlatformOption $platformOptionModel
    )
    {
    }

    public function store(array $data): object
    {
        $storedData = [];
        $platformName = $data['platform'];
        $options = $data['options'];

        return DB::transaction(function () use ($storedData, $platformName, $options) {
            $platform = $this->platformModel->create(['name' => $platformName]);
            $storedData['platform'] = $platform->toArray();
            foreach ($options as $key => $option) {
                $optionData = [
                    'platform_id' => $platform->id,
                    'option_name' => $key,
                    'option_value' => $option
                ];
                $platformOptions[] = $this->platformOptionModel->create($optionData);
            }
            $storedData['platform']['options'] = $platformOptions;
            return (object)$storedData;
        });

    }
}
