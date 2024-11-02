<?php

use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\Http;

class ExternalApiService
{
    public function fetchCachedData()
    {
        $cacheKey = 'external_api_data';
        return Cache::remember($cacheKey, now()->addHour(), function () {
            $response = Http::get('https://api.example.com/data');
            return $response->json();
        });
    }
}
