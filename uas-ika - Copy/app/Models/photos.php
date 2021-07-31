<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    protected $table = "tb_photos";
    protected $primaryKey = "id";
    protected $fillable = ['date', 'title', 'text','photo_id'];
    use HasFactory;
}
