@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/posts/" class="btn btn-outline-secondary btn-sm" style="margin-left:1rem !important">&laquo; НАЗАД</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="card-text p-3">{{$post->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="card-text p-3">{{$post->content}}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
{{--                <p class="card-text">{{$author->name}}</p>--}}
                <p class="card-text p-3">{{date('d.m.Y', strtotime($post->created_at))}}</p>
            </div>
        </div>
    </div>
@endsection
