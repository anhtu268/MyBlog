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
        <form action="{{route('post')}}" method="POST">
            @csrf
            <label for="title">Title:</label><input type="text" name="title" placeholder="Title">
            <label for="content">Content:</label><textarea name="content"></textarea>
            <input class="submit" type="submit" style="color: black; font-weight: bolder;" value="Submit">
        </form>
    </div>   
</main>
@endsection

@section('script')

@endsection