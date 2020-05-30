<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $table = 'aboutme';

    protected $fillable = ['paragraf_one', 'paragraf_two'];
}
