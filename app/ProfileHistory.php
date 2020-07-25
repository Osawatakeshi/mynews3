<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{ß
    //
    protected $guarded = array('id');
    
    public static $rule = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
