@extends('layouts.app')

@section('content')
        <a href="/posts" class="btn btn-default">Go Back</a>
        <h1>{{$displayeachpost->title}}</h1>
        <div>
                {{-- Parsing the html --}}
                {!!$displayeachpost->body!!}

                {{-- Is not parsed the html
                {{$displayeachpost-->body}} --}}
        </div>
        <hr>
        <small>Written on {{$displayeachpost->created_at}} by {{$displayeachpost->user->name}}</small>
        <hr>
        @if(!Auth::guest())
                @if(Auth::user()-id == $post->user_id)
                <a href="/posts/{{$displayeachpost->id}}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
        @endif
@endsection     