<?php

namespace Couchcat;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function licenses()
    {
    	$this->hasMany('Couchcat\License');
    }
}
