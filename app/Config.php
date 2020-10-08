<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "configurazioni";

    protected $fillable = [
        "title",
        "description"
    ];
}
