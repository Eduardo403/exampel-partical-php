
@extends('layouts.app')
@section('title','blog')
@section('meta-description-default','blog description')

@section('content')
<h1>blog</h1>
@foreach ($posts as $post )
<h2>{{ $post->title }}</h2>
@endforeach
@endsection
