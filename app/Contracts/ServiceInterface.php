<?php

namespace App\Contracts;

interface ServiceInterface
{
    public function handle(array $data): void;
}
