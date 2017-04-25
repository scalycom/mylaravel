<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable=['title','body','published'];
    public $timestamps = false;

    

    public function archive(){
        return $this->update(['title'=>111]);
    }
}
