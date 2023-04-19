@extends('layouts.app')

@section('content')

<h1>
    Edit comic: {{ $comic->title }}
</h1>
    
<form 
action="{{ route('comics.update', $comic->id) }}" method="POST"
class="row g-3">
    @csrf
    @method('PUT')

    <div class="col-12">
        <label for="title" class="form-label">Title</label>
        <input 
        type="text" 
        class="form-control @error('title') is-invalid @enderror" 
        id="title" name="title" value="{{ old('title', $comic->title) }}">
        {{-- old('title') è una helper func che ci permette di recuperare l'ultimo value --}}
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" 
        id="description" name="description">{{ old('description', $comic->description) }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <label for="thumb" class="form-label">thumb</label>
        <input 
        type="text" 
        class="form-control @error('thumb') is-invalid @enderror" 
        id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
        @error('thumb')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-6">
        <label for="price" class="form-label">price</label>
        <input 
        type="number" step="0.01" 
        class="form-control @error('price') is-invalid @enderror" 
        id="price" name="price"
        value="{{ old('price', $comic->price) }}">
        @error('price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-6">
        <label for="series" class="form-label">series</label>
        <input 
        type="text" 
        class="form-control @error('series') is-invalid @enderror" 
        id="series" name="series"
        value="{{ old('series', $comic->series) }}">
        @error('series')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-6">
        <label for="sale_date" class="form-label">sale date</label>
        <input 
        type="date" 
        class="form-control @error('sale_date') is-invalid @enderror" 
        id="sale_date" name="sale_date"
        value="{{ old('sale_date', $comic->sale_date) }}">
        @error('sale_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-6">
        <label for="type" class="form-label">type</label>
        <select class="form-select @error('type') is-invalid @enderror" 
        aria-label="Default select example" id="type" name="type" value="">
            <option>Open this select menu</option>
            {{-- <option @selected(old('type') == 'comic book') value="comic book">comic book</option>
            <option @selected(old('type') == 'graphic novel') value="graphic novel">graphic novel</option> --}}
            @foreach($types as $key=>$value)
                <option @selected(old('type') == $key) value="{{ $key }}"> {{ $value }} </option>
            @endforeach
        </select>
        @error('type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- to show error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                {{-- $error->all() ci restituisce un array/collection, che cicla --}}
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- end show error --}}


    {{-- btn --}}
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <div class="btn btn-warning">
            <a href="{{ route('comics.index') }}">
                Go back to list
            </a>
        </div>
    </div>
  </form>

@endsection