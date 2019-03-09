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
        <form action="{{route('comment.update',$comment->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="article_id" value="{{$comment->article_id}}">
            <label for="content">Content:</label><textarea name="content">{{$comment->content}}</textarea>
            <input class="submit" type="submit" style="color: black; font-weight: bolder;" value="Submit">
        </form>
        <form action="{{route('comment.destroy',$comment->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="article_id" value="{{$comment->article_id}}">
            <input type="submit" class="submit" style="color: red; font-weight: bolder;" value="Delete">
        </form>
    </div>   
</main>
@endsection

@section('script')

@endsection