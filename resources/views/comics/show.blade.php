@extends('layouts.main')

@section('content')
    <section class="container h-100 my-5 d-flex flex-column justify-content-center align-items-center">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-8">
                    <h4><strong>Title: </strong>{{ $comic->title }}</h4>
                    <p><strong>Description: </strong>{{ $comic->description }}</p>
                    <div><strong>Price: </strong>{{ $comic->price }}$ </div>
                    <div><strong>Series: </strong>{{ $comic->series }} </div>
                    <div><strong>Sale Date: </strong>{{ $comic->sale_date }} </div>
                    <div><strong>Type: </strong>{{ $comic->type }}</div>
                </div>
                <div class="col-2">
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
            </div>

            <div class="my-5">
                <button class="btn btn-primary me-5">
                    <a href="{{ route('comics.index') }}" class="text-decoration-none text-light">
                        Back to Comics
                    </a>
                </button>
    
                <button class="btn btn-primary me-5">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="text-decoration-none text-light">
                        Edit Comic
                    </a>
                </button>

                <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" class="btn btn-danger" value="Delete (BE CAREFUL)" onclick="return confirm('Are you serious?')">
                </form>
            </div>
    </section>
@endsection