<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author','isbn','file','description'];

    public function ebook(){
        return $this->belongsTo('App\Ebook','file');
    }
}

