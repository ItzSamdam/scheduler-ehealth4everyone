<?php

namespace App\Interface;

interface ApiLogRepositoryInterface
{
    public function createLog(array $data);

    public function deleteOldLogs();
}
