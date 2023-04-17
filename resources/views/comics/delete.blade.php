@extends('layouts.app')

@section('content')

<h1>
    Are you sure you want to delete this element? {{ $comic->title }}
</h1>
    
<form 
action="{{ route('comics.destroy', $comic) }}" method="POST"
class="row g-3">
    @csrf
    @method('DELETE')

    <div class="col-auto">
        <input type="submit" value="delete" class="btn btn-danger"> 

    </div>

    
</form>

@endsection