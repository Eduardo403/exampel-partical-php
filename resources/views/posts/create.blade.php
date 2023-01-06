@extends('layouts.app')
@section('title','blog-detail')
@section('meta-description-default','blog description')

@section('content')
<h2>create new post</h2>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">

    <input type="text" name="title" placeholder="title" value="{{ old('title') }}" required>
    @error('title')
        <small>{{ $message }}</small>
    @enderror
</label>
<br>
<label for="descrintion">
    <textarea name="descrintion" placeholder="description" cols="30" rows="10" required>{{ old('descrintion') }}</textarea>
     @error('descrintion')
        <small>{{ $message }}</small>
    @enderror
</label>
<br>
<label for="price">
    <input type="number" name="price" placeholder="price" required>
     @error('price')
        <small>{{ $message }}</small>
    @enderror
</label>
<br>
<input type="submit" value="Create">
</form>

<a href="{{ route('posts.index') }}">regresar</a>

@endsection
