@extends('layouts.main')

@section('content')
    <section class="container my-5">
            <div class="row m-5 p-5">
                <div class="col-4">
                    <h4><strong>Title: </strong>{{ $comic->title }}</h4>
                    <p><strong>Description: </strong>{{ $comic->description }}</p>
                    <div><strong>Price: </strong>{{ $comic->price }}$ </div>
                    <div><strong>Series: </strong>{{ $comic->series }} </div>
                    <div><strong>Sale Date: </strong>{{ $comic->sale_date }} </div>
                    <div><strong>Type: </strong>{{ $comic->type }}</div>
                </div>
                <div class="col">
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
            </div>
            
            <button class="btn btn-dark">
                <a href="{{ route('comics.index') }}" class="text-decoration-none">
                    Back to Comics
                </a>
            </button>
    </section>
@endsection