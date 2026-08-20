<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject_area',
        'preferred_intake',
        'preferred_campus',
        'message',
    ];
}
