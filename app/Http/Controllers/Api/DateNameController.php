<?php

namespace App\Http\Controllers\Api;

use App\Models\DateController;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DateNameController extends Controller
{
    //
     // استرجاع جميع الكتب
     public function index()
     {
         $books = DateController::all();
         return response()->json($books);
     }
 
     // استرجاع كتاب معين بناءً على الـ ID
     public function show($id)
     {
         $book = DateController::find($id);
 
         if (!$book) {
             return response()->json(['message' => 'Book not found'], 404);
         }
 
         return response()->json($book);
     }
}
