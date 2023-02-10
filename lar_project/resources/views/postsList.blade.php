@extends('layouts.main')
@section('content')
    @foreach($posts as $post)
        <div class="card">
{{--            <img src="..." class="card-img-top" alt="...">--}}

            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <a href="#" class="btn btn-primary">Посмотреть полностью</a>
            </div>
        </div>
    @endforeach
@endsection
