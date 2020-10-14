<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dinas extends Model
{
    //
    protected $table = 'dinas';
    
    protected $fillable = ['email','nama','subject','pengaduan','status','gambar']; 
}
