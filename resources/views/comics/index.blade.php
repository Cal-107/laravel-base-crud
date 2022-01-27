@extends('layouts.main')

@section('content')
    <section class="container mt-5">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="card col-3 m-5 p-5 rounded-pill text-center border border-5 border-primary">
                <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none text-dark my-5">
                    <h4><strong>Title: </strong>{{ $comic->title }}</h4>
                    <div>
                        <img src="{{ $comic->thumb }}" alt="" class="img-fluid">
                    </div>
                    <div><strong>Price: </strong>{{ $comic->price }}$ </div>
                    <div><strong>Series: </strong>{{ $comic->series }} </div>
                    <div><strong>Sale Date: </strong>{{ $comic->sale_date }} </div>
                    <div><strong>Type: </strong>{{ $comic->type }}</div>
                </a>
            </div>    
            @endforeach
        </div>
    </section>
@endsection