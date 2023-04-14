@extends('layouts.app')

@section('content')
    
    <div class="d-flex flex-column justify-content-center align-items-center">
        
        <div class="card text-center">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $comic['title'] }}</h5>
              <p class="card-text description">{{ $comic['description'] }}</p>
              <div class="text-wrapper d-flex justify-content-center gap-3">
                  <p class="card-text">{{ $comic['price'] }} €</p>
                  <p class="card-text">{{ $comic['series'] }}</p>
                  <p class="card-text">{{ $comic['sale_date'] }}</p>
                  <p class="card-text">{{ $comic['type'] }}</p>
              </div>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('comic.index') }}">
                Go back to list
            </a>
        </div>

    </div>

@endsection