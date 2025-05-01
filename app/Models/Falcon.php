<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falcon extends Model
{
    protected $fillable = [
        'title',
        'author',
        'cover_image',
        'pdf_file',
    ];
}
