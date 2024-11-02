<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ExternalApiService;

class ApiController extends Controller
{
    protected $externalApiService;

    public function __construct(ExternalApiService $externalApiService)
    {
        $this->externalApiService = $externalApiService;
    }

    public function getCachedData()
    {
        return response()->json($this->externalApiService->fetchCachedData());
    }
}
