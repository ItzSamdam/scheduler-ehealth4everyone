<?php

namespace App\Repository;

use App\Models\ApiLog;
use App\Interface\ApiLogRepositoryInterface;

class ApiLogRepository implements ApiLogRepositoryInterface
{
    public function createLog(array $data)
    {
        return ApiLog::create($data);
    }

    public function deleteOldLogs()
    {
        return ApiLog::where('created_at', '<', now()->subDays(30))->delete();
    }
}
