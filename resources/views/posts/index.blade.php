
@extends('layouts.app')
@section('title','blog')
@section('meta-description-default','blog description')

@section('content')
<h1>blog</h1>
@foreach ($posts as $post )
<a href="/{{ route(posts.show) $post->id }}">{{ $post->title }}</a>
@endforeach
@endsection
