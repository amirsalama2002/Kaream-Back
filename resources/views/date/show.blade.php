@extends('layouts.app')

@section('content')
    <h1 class="mb-3">{{ $date->title }}</h1>

    <p><strong>Author:</strong> {{ $date->author }}</p>

    @if($date->cover_image)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $date->cover_image) }}" width="200" class="img-thumbnail">
        </div>
    @endif

    @if($date->pdf_file)
        <div class="mb-3">
            <a href="{{ asset('storage/' . $date->pdf_file) }}" class="btn btn-outline-primary" target="_blank">View PDF</a>
        </div>
    @endif

    <a href="{{ route('date.edit', $date->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('date.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
