@extends('layouts.main')

@section('content')
<section class="container my-5">
    <h1 class="text-center">Edit: {{ $comic->title }}</h1>

    <div class="row">
        <div class="col">
             <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                 {{-- cross_site request forgery --}}
                 @csrf
                 @method('PATCH')

                 <div class="mb-3">
                     <label for="title" class="form-label">Title</label>
                     <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"
                 </div>

                 <div class="mb-3">
                     <label for="description" class="form-label">Description</label>
                     <textarea type="text" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
                 </div>

                 <div class="mb-3">
                     <label for="thumb" class="form-label">Thumb</label>
                     <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                 </div>

                 <div class="mb-3">
                     <label for="price" class="form-label">Price</label>
                     <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                 </div>

                 <div class="mb-3">
                     <label for="series" class="form-label">Series</label>
                     <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                 </div>

                 <div class="mb-3">
                     <label for="sale_date" class="form-label">Sale Date</label>
                     <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                 </div>

                 <div class="mb-3">
                     <label for="type" class="form-label">Type</label>
                     <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                 </div>

                 <button type="submit" class="btn btn-primary">Edit Comic</button>
             </form>
        </div>
    </div>
@endsection