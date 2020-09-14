@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">

            <div>
                <h3>Author</h3>

                <ul>
                <li>Nome: {{ $post->user->name}}</li>
                <li>Email: {{$post->user->email}}</li>
                </ul>
            </div>

            <div>
                <h2> {{ $post->title }}</h2>
            </div>

            <div>
                <img src="{{ $post->image_path }}" alt="{{ $post->title}}">
            </div>

            <div>
                {{ $post->content}}
            </div>
        </div>
    </div>
</div>
@endsection