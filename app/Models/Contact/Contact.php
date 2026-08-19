<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'subject_area',
        'earliest_start_year',
        'preferred_intake',
        'currentsituation',
    ];
}
