@extends('layouts.master')

@section('title','MyPosts')
@section('my','actived')
@section('main')
<main>
    @foreach($myPosts as $post)
        <div class="container">
            <h2>{{$post->title}}</h2>
            <p>{{$post->content}}</p>
            <a href="{{route('post.show',$post->id)}}">Read more ...</a>
        </div>
    @endforeach
    {{$myPosts->links()}}
</main>
@endsection

@section('script')

@endsection