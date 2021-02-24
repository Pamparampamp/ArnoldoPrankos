<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

        public $fillable = ['title', 'pages', 'isbn', 'short_description', 'author_id'];
public function author(){
return $this->belongsTo('App\Models\author');
}
}
