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
        $payload = request()->all();
        \Log::info($payload);
        $reportedAt = Carbon::createFromTimestamp($payload['created']);

        unset($payload['created']);

        $exception = Exception::create(['reported_at' => $reportedAt] + $payload);

        \Log::info($exception);
    }
}
