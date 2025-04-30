<?php

namespace App\Http\Controllers\Api;

use App\Models\Novels;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class novelsController extends Controller
{
    //
     // استرجاع جميع الكتب
     public function index()
     {
         $books = Novels::all();
         return response()->json($books);
     }
 
     // استرجاع كتاب معين بناءً على الـ ID
     public function show($id)
     {
         $book = Novels::find($id);
 
         if (!$book) {
             return response()->json(['message' => 'Book not found'], 404);
         }
 
         return response()->json($book);
     }
}
