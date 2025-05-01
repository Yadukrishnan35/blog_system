<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Posttag extends Model
{   protected $table = 'post_tag';
    use HasFactory;
    protected $fillable = ['post_id','tag_id'];
}
