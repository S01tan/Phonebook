<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{


    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }



    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
