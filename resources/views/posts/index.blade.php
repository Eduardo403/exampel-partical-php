
@extends('layouts.app')
@section('title','blog')
@section('meta-description-default','blog description')

@section('content')
<h1>blog</h1>

<a href="{{ route('posts.create') }}">Create new post</a>
<br>
@foreach ($posts as $post )
<div>
<a href="{{ route('posts.show',$post->id ) }} ">{{ $post->title }}</a>
 <br>
 <a href="{{ route('posts.edit',$post) }}">Edit</a>
</div>

@endforeach
@endsection
