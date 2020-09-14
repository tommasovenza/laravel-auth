@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Benvenuto, ecco i nostri post</h1>

                <ul>
                    @foreach ($posts as $post)
              
                         <li>{{$post->title}}</li>
                         <li>{{ $post->content}}</li>
                         <a href="{{route('posts.show', $post)}}">vedi post</a>   
                    @endforeach
                </ul>
               
            </div>
        </div>
    </div>
@endsection