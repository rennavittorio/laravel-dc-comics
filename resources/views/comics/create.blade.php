@extends('layouts.app')

@section('content')

<h1>
    Insert new comic
</h1>
    
<form class="row g-3">

    <div class="col-12">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>

    <div class="col-12">
        <label for="src" class="form-label">src</label>
        <input type="text" class="form-control" id="src" name="src">
    </div>

    <div class="col-6">
        <label for="price" class="form-label">price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price">
    </div>

    <div class="col-6">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>

    <div class="col-6">
        <label for="sale_date" class="form-label">sale date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date">
    </div>

    <div class="col-6">
        <label for="type" class="form-label">type</label>
        <select class="form-select" aria-label="Default select example" id="type" name="type">
            <option selected>Open this select menu</option>
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
    </div>

    {{-- btn --}}
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <div class="btn btn-warning">
            <a href="{{ route('comics.index') }}">
                Go back to list
            </a>
        </div>
    </div>
  </form>

@endsection