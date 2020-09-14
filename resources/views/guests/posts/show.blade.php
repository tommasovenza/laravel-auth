@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{$post->title}}</h2>

                <div>
                    creato il: {{ $post->created_at->format('d-m-Y')}}
                </div>

                <img src="{{ $post->image_path}}" alt="{{ $post->title}}">

                <div>
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection