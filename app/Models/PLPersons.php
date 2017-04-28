<?php

namespace App\Models;


class PLPersons extends CoreModel
{
    protected $table = 'pl_persons';

    protected $fillable = ['name', 'gender', 'age', 'city_id'];
}
