@extends('layouts.master')

@section('title','CreatePost')

@section('main')
@section('new','actived')
<main>
    <div class="container" style="flex: 100%;">
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('post.update',$post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label><input type="text" name="title" placeholder="Title" value="{{$post->title}}">
            <label for="content">Content:</label><textarea name="content">{{$post->content}}</textarea>
            <input class="submit" type="submit" style="color: black; font-weight: bolder;" value="Submit">
        </form>
        <form action="{{route('post.destroy',$post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="submit" style="color: red; font-weight: bolder;" value="Delete">
        </form>
    </div>   
</main>
@endsection

@section('script')

@endsection