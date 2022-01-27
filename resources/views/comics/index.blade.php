@extends('layouts.main')

@section('content')
    <section class="container mt-5 d-flex flex-column">
        <div class="row">
            @if (session('deleted-comic'))
                <div class="alert alert-success">
                    <strong>{{ session('deleted-comic') }}</strong>
                    Bye bye Comic
                </div>
            @endif
            @foreach ($comics as $comic)
            <div class="card col-3 m-5 p-5 rounded-pill text-center border border-5 border-primary">
                <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none text-dark my-5">
                    <h4><strong>{{ $comic->title }}</strong></h4>
                    <div>
                        <img src="{{ $comic->thumb }}" alt="" class="img-fluid">
                    </div>
                </a>
            </div>    
            @endforeach
        </div>
        <div class="align-self-center my-4">
            {{ $comics->links() }}
        </div>
    </section>
@endsection