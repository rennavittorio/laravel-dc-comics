@extends('layouts.app')

@section('content')
    
    <div class="grid-layout">

        <div class="btn-create btn btn-primary mb-5">
            <a href="{{ route('comics.create') }}">
                create new comic
            </a>
        </div>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                {{-- <th scope="col">description</th> --}}
                {{-- <th scope="col">thumb</th> --}}
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $key=>$comic)
                    <tr>
                        <th scope="row">{{ $key }}</th>
                        <td><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></td>
                        {{-- <td>{{ $comic->description }}</td> --}}
                        {{-- <td>{{ $comic->thumb }}</td> --}}
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

    </div>

@endsection