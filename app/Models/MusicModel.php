<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicModel extends Model
{
    use HasFactory;
    protected $table = 'musics';
    protected $guarded = [];
}
