<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyBio extends Model
{
    protected $table = 'mybio';

    protected $fillable = ['study', 'photo_profile', 'photo_background', 'hobby', 'ig', 'twitter'];
}
