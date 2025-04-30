<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // إضافة الحقول المسموح بتعيينها
    protected $fillable = [
        'title',
        'author',
        'cover_image',
        'pdf_file',
    ];
}
