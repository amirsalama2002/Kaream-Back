<?php

namespace App\Http\Controllers\Api;

use App\Models\Falcon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FalconController extends Controller
{
    //
     // استرجاع جميع الكتب
     public function index()
     {
         $books = Falcon::all();
         return response()->json($books);
     }
 
     // استرجاع كتاب معين بناءً على الـ ID
     public function show($id)
     {
         $book = Falcon::find($id);
 
         if (!$book) {
             return response()->json(['message' => 'Book not found'], 404);
         }
 
         return response()->json($book);
     }
}
