@extends('layouts.app')
@section('title','blog-detail')
@section('meta-description-default','blog description')

@section('content')
<h1>Edit form</h1>
<form action="{{ route('posts.update', $post->id) }}" >
    @method('PATCH')
    @csrf
    <label for="title">

    <input type="text" name="title" placeholder="title" value="{{ old('title',$post->title) }}" required>
    @error('title')
        <small>{{ $message }}</small>
    @enderror
</label>
<br>
<label for="descrintion">
    <textarea name="descrintion" placeholder="description" cols="30" rows="10" required>{{ old('descrintion',$post->descrintion) }}</textarea>
     @error('descrintion')
        <small>{{ $message }}</small>
    @enderror
</label>
<br>
<label for="price">
    <input type="number" name="price" placeholder="price"  value="{{ old('title',$post->price) }}" required>
     @error('price')
        <small>{{ $message }}</small>
    @enderror
</label>
<br>
<input type="submit" value="Create">
</form>
<br>
<a href="{{ route('posts.index') }}">regresar</a>

@endsection
