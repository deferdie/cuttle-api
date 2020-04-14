<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * The fillable attributes for this model.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'app_id',
        'active'
    ];
}
