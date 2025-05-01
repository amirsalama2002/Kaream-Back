@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Date</h1>

    <form action="{{ route('falcon.update', $falcon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Date Title</label>
            <input type="text" name="title" class="form-control" value="{{ $falcon->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input type="text" name="author" class="form-control" value="{{ $falcon->author }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Cover Image</label><br>
            @if($falcon->cover_image)
                <img src="{{ asset('storage/' . $falcon->cover_image) }}" width="120" class="mb-2">
            @else
                <p>No cover image</p>
            @endif
            <input type="file" name="cover_image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Current PDF</label><br>
            @if($falcon->pdf_file)
                <a href="{{ asset('storage/' . $falcon->pdf_file) }}" class="btn btn-outline-secondary btn-sm" target="_blank">View Current PDF</a>
            @else
                <p>No PDF uploaded</p>
            @endif
            <input type="file" name="pdf_file" class="form-control mt-2">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('falcon.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
