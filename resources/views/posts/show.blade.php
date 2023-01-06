
@extends('layouts.app')
@section('title','blog-detail')
@section('meta-description-default','blog description')

@section('content')

<h1>{{ $post->title }}</h1>
<br>
<p>{{ $post->descrintion }}</p>
<br>
<span>{{ $post->price }}</span>
<br>
<a href="{{ route('posts.index') }}">regresar</a>

@endsection
