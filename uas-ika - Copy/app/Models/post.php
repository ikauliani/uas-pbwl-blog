<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "tb_post";
    protected $primaryKey = "id";
    protected $fillable = ['date', 'slug', 'title', 'text', 'cat_id'];
    use HasFactory;
}