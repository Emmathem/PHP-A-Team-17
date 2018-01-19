<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $users
 */
class Posts extends Model
{
    //
    //Table name
    protected $table = "posts";
    //The primary key
    public $primaryKey = "id";
    //Timestamps
    public $timestamps = true;

    public function users() {
        return $this->belongsTo('App\Users');
    }
}