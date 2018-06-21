@extends('layouts.app')

@section('content')
        <h1>{{$servicetitle}}</h1>
        @if(count($servicesoffered) > 0)
            <ul class="list-group">
                @foreach($servicesoffered as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif

      
@endsection

