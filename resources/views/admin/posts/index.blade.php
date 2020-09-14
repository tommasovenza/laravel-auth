@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>La lista dei post di {{ $user->name }}</h1>

            
            <ul>
                @foreach ($posts as $post)
                    <li> <strong>{{$post->title}}</strong> - di: {{ $post->user->name}} </li>
                    <li>{{ $post->content}}</li>
                    <a href="{{route('admin.posts.show', $post)}}">vedi dettaglio</a>

                    
                @endforeach

                
            </ul>
        </div>
    </div>
</div>
@endsection