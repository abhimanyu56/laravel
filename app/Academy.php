<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $table = 'academy';
    public $timestamps = false;
    protected $primaryKey = "academy_id";
}
