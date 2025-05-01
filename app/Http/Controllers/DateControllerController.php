<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DateController;
use Illuminate\Routing\Controller;

class DateControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = DateController::all();
        return view('date.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('date.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'cover_image' => 'nullable|image',
            'pdf_file' => 'nullable|mimes:pdf',
        ]);

        $data = $request->only(['title', 'author']);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('covers', 'public');
        }

        if ($request->hasFile('pdf_file')) {
            $data['pdf_file'] = $request->file('pdf_file')->store('pdfs', 'public');
        }

        DateController::create($data);

        return redirect()->route('date.index')->with('success', 'Date added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DateController $date)
    {
        //
 
        return view('date.show', compact('date'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DateController $date)
    {
        //
       
    return view('date.edit', compact('date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DateController $date)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'cover_image' => 'nullable|image',
            'pdf_file' => 'nullable|mimes:pdf',
        ]);

        $data = $request->only(['title', 'author']);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('covers', 'public');
        }

        if ($request->hasFile('pdf_file')) {
            $data['pdf_file'] = $request->file('pdf_file')->store('pdfs', 'public');
        }

        $date->update($data);

        return redirect()->route('date.index')->with('success', 'Book updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DateController $date)
    {
        {
            $date->delete();
            return redirect()->route('date.index')->with('success', 'Book deleted!');
        }
    }
}
