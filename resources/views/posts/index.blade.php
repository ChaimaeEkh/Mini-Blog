@extends('layouts.app')
@section('title', 'Liste des articles')
@section('content')
<h1 class="mb-4">Articles du blog</h1>
@foreach ($posts as $post)<div class="card mb-3">
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Lire la suite</a>
    </div>
</div>
@endforeach
@endsection