<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }


    public function setImagesAttribute($images)
    {
        $this->attributes['images'] = implode(',', (array) $images);
    }

}
