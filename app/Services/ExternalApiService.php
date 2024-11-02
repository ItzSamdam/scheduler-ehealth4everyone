<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\Http;

class ExternalApiService
{
    public function fetchCachedData()
    {
        $cacheKey = 'external_api_data';
        return Cache::remember($cacheKey, now()->addHour(), function () {
            $response = Http::get('https://api.weatherapi.com/v1/current.json', [
                // get token from env
                'key' => env('WEATHER_API_KEY'),
                'q' => 'london',
            ]);
            return $response->json();
        });
    }
}
