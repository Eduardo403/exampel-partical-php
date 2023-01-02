
@extends('layouts.app')
@section('title','blog-detail')
@section('meta-description-default','blog description')

@section('content')

<h1>{{ $post->title }}</h1>
<p>{{ $post->description }}</p>
<span>{{ $post->price }}</span>
<a href="{{ route('posts.index') }}">regresar</a>
@endforeach
@endsection
