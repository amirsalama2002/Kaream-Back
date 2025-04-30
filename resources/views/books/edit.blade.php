@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Book Title</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Cover Image</label><br>
            @if($book->cover_image)
                <img src="{{ asset('storage/' . $book->cover_image) }}" width="120" class="mb-2">
            @else
                <p>No cover image</p>
            @endif
            <input type="file" name="cover_image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Current PDF</label><br>
            @if($book->pdf_file)
                <a href="{{ asset('storage/' . $book->pdf_file) }}" class="btn btn-outline-secondary btn-sm" target="_blank">View Current PDF</a>
            @else
                <p>No PDF uploaded</p>
            @endif
            <input type="file" name="pdf_file" class="form-control mt-2">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
