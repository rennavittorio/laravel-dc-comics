@extends('layouts.app')

@section('content')
    
    <div class="">
        
        <ul>
            <li>{{ $comic['title'] }}</li>
        </ul>

        <div>
            <a href="{{ route('comic.index') }}">
                Go back to list
            </a>
        </div>

    </div>

@endsection