<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Returns User associated with post
     *
     */
    public function user() {
      return $this->belongsTo('App\User');
    }
}
