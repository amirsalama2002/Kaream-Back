<?php

namespace App\Http\Controllers;

use App\Models\Novels;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class NovelsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Novels::all();
        return view('novels.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('novels.create');
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

        Novels::create($data);

        return redirect()->route('novels.index')->with('success', 'Date added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Novels $novel)
    {
        //
        return view('novels.show', compact('novel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novels $novel)
    {
        //
        return view('novels.edit', compact('novel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Novels $dateController)
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

        $dateController->update($data);

        return redirect()->route('novels.index')->with('success', 'Book updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Novels $dateController)
    {
        {
            $dateController->delete();
            return redirect()->route('novels.index')->with('success', 'Book deleted!');
        }
    }
}
