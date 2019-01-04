<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    public function blogs()
    {
        return $this->belongsTo('App\Blog');
    }
}
