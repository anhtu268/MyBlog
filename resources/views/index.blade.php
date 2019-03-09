@extends('layouts.master')

@section('title','Index')
@section('home','actived')
@section('main')
<main>
    @foreach($posts as $post)
        <div class="container">
            <h2>{{$post->title}}</h2>
            <small>{{$post->author->name}}</small>
            <p>{{$post->content}}</p>
            <a href="{{route('post.show',$post->id)}}">Read more ...</a>
        </div>
    @endforeach
    {{$posts->links()}}
</main>
@endsection

@section('script')

@endsection