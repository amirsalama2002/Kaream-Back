@extends('layouts.app')

@section('content')
    <h1 class="mb-3">{{ $book->title }}</h1>

    <p><strong>Author:</strong> {{ $book->author }}</p>

    @if($book->cover_image)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $book->cover_image) }}" width="200" class="img-thumbnail">
        </div>
    @endif

    @if($book->pdf_file)
        <div class="mb-3">
            <a href="{{ asset('storage/' . $book->pdf_file) }}" class="btn btn-outline-primary" target="_blank">View PDF</a>
        </div>
    @endif

    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
