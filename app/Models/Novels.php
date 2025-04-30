<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novels extends Model
{
    protected $fillable = [
        'title',
        'author',
        'cover_image',
        'pdf_file',
    ];
}
