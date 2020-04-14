<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Exception;

class ExceptionController extends Controller
{
    /**
     * Store the exception.
     *
     * @return void
     */
    public function store()
    {
        try {
            $payload = request()->all();
            $reportedAt = Carbon::createFromTimestamp($payload['created']);
            $headers = json_encode($payload['headers']);

            unset($payload['created']);

            Exception::create(['reported_at' => $reportedAt, 'headers' => $headers] + $payload);
        } catch (\Exception $e) {
            \Log::info($e);
        }
    }
}
