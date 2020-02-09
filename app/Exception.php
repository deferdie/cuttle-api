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
        'laravel_version',
        'laravel_config_cached',
    ];
}
