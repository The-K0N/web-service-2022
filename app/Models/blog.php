<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $table= 'blog';
    protected $primarykey = 'id';
    public $timestamps = true;

    protected $fillable = ['author', 'title', 'body', 'keyword'];
    
}
