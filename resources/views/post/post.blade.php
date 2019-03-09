@extends('layouts.master')

@section('title')
	{{$post->title}}
@endsection

@if($post->author_id===Auth::id())
	@section('my','actived')
@else
	@section('home','actived')
@endif

@section('main')
<main>
    <div class="container" style="flex:100%;">
    	@if($post->author_id===Auth::id())
    		<a href="{{route('post.edit',$post->id)}}">Sửa</a>
    	@endif
        <h2>{{$post->title}}</h2>
        <p style="height: auto;">{{$post->content}}</p>
        <a href="{{route('comment.create',['post_id' => $post->id])}}">Comment</a>
    </div>

    @php
        function showComments($comments,$post)
        {
            echo '<ul style="margin-left:40px;">' ;
                foreach ($comments as $comment) 
                {
                    echo '<li>' ;
                        echo '<div class="container" style="flex:100%;">' ;
                            if($comment->user->id===Auth::id())
                            {
                                echo "<a href=" ;
                                echo route('comment.edit',$comment->id);
                                echo ">Sửa</a>" ;
                            }
                            echo '<h2>'.$comment->user->name.'</h2>' ;
                            echo '<p>'.$comment->content.'</p>' ;
                            echo "<a href=" ;
                            echo route('comment.create',['current_id' => $comment->id,'post_id' => $post->id]);
                            echo ">Reply</a>" ;     
                        echo '</div>' ;
                        showComments($comment->childs,$post);
                    echo '</li>' ;
                }
            echo '</ul>' ;
        }
        showComments($comments,$post);
    @endphp
</main>
@endsection

@section('script')

@endsection