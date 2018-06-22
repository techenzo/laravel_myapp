@extends('layouts.app')

@section('content')
        <h1>Posts</h1>
        {{-- if there is a data in table post --}}
        @if(count($displayallposts) > 0 )
                {{-- looping statement from table posts --}}
                @foreach($displayallposts as $post)
                        {{-- bootstrap class well adds rounded border with gray background --}}
                        <div class ="well">
                                <div class ="row">
                                        <div class="col-md-4 col-sm-4">
                                                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                                {{-- url display the id from table posts and display the title --}}
                                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                                                {{-- display the  column created at from the table posts --}}
                                                <small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
                                        </div>
                                </div>
                        </div>
                @endforeach
               
                {{$displayallposts->links()}}

        @else
                <p>No posts found</p>
        @endif
@endsection