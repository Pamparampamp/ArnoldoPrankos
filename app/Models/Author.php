<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
        public $fillable = ['name', 'surname'];
public function book(){
return $this->hasMany('App\Models\book');
}
}
