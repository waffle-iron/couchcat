<?php

namespace Couchcat;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    public function vendor()
    {
        return $this->belongsTo('CouchCat\Vendor');
    }
}
