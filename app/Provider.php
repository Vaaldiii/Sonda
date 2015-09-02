<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name',
        'address',
        'contact_name',
        'contact_phone',
        'contact_email',
        'provider_type'
    ];
}
