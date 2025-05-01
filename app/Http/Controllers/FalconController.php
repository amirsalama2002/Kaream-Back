<?php

namespace App\Http\Controllers;

use App\Models\Falcon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FalconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $falcon = Falcon::all();
        return view('falcon.index', compact('falcon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('falcon.create');
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

        Falcon::create($data);

        return redirect()->route('falcon.index')->with('success', 'Date added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Falcon $falcon)
    {
        //
 
        return view('falcon.show', compact('falcon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Falcon $falcon)
    {
        //
       
    return view('falcon.edit', compact('falcon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Falcon $falcon)
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

        $falcon->update($data);

        return redirect()->route('falcon.index')->with('success', 'Book updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Falcon $falcon)
    {
        {
            $falcon->delete();
            return redirect()->route('falcon.index')->with('success', 'Book deleted!');
        }
    }
}
