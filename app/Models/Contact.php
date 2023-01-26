<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone','message'];
}
