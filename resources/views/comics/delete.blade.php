@extends('layouts.app')

@section('content')

<h1>
    Are you sure you want to delete this element?
    <span class="text-danger">
        {{ $comic->title }}
    </span>
</h1>
    
<form 
action="{{ route('comics.destroy', $comic) }}" method="POST"
class="row g-3">
    @csrf
    @method('DELETE')

    <div class="col-auto">
        <input type="submit" value="delete" class="btn btn-danger"> 
    </div>

    <div class="col-auto">
        <a href="{{ route('comics.index') }}" class="btn btn-warning">
            Go back to list
        </a>
    </div>

    
</form>

@endsection