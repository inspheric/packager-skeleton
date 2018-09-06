<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Database\Eloquent\Model;

class :ucs:package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description',
    ];
}
