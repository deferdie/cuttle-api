<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Exception;
use App\Application;

class ExceptionController extends Controller
{
    /**
     * Store the exception.
     *
     * @return void
     */
    public function store(string $appId)
    {
        $application = Application::where('app_id', $appId)->first();

        if (!$application) {
            return;
        }

        try {
            $payload = request()->all();
            $reportedAt = Carbon::createFromTimestamp($payload['created']);
            $headers = json_encode($payload['headers']);

            unset($payload['created']);

            Exception::create([
                'headers' => $headers,
                'reported_at' => $reportedAt,
                'application_id' => $application->id,
            ] + $payload);
        } catch (\Exception $e) {
            \Log::info($e);
        }
    }
}
