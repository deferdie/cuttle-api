<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exception extends Model
{
    /**
     * The fillable attributes for the model.
     *
     * @var array
     */
    protected $fillable = [
        'uri',
        'file',
        'host',
        'port',
        'method',
        'user_id',
        'message',
        'headers',
        'message',
        'git_hash',
        'severity',
        'protocol',
        'git_branch',
        'line_number',
        'environment',
        'reported_at',
        'http_status',
        'php_version',
        'stack_trace',
        'exception_name',
        'application_id',
        'laravel_version',
        'laravel_config_cached',
    ];

    /**
     * The items to be eagerloaded.
     *
     * @var array
     */
    protected $with = [
        'application'
    ];

    /**
     * An exception belongs to an application.
     *
     * @return void
     */
    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
