@extends('layouts.app')


@section('content')
<div class="container">
    <h1 class="header">Gallery Aid & Deya</h1>

    <form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data" class="upload-form">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

    <div class="gallery-grid">
        @foreach($photos as $photo)
            <div class="gallery-item">
                <img src="{{ asset('storage/' . $photo->image) }}" alt="Photo">
                <form action="{{ route('gallery.delete', $photo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
