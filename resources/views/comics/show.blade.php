@extends('layout.main')

@section('content')

<main>
    <div class="container mt-5 p-5 rounded bg-secondary-subtle">
        <h2 class="pb-2">{{$comic->title}}</h2>
        <div>
            <img class="pb-2" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="card-body">
                <p class="card-title"><strong>Price: </strong>{{$comic->price}}</p>
                <p class="card-text"><strong>Description: </strong>{{$comic->description}}</p>
                <p><strong>Series: </strong>{{$comic->series}}</p>
                <p><strong>Type: </strong>{{$comic->type}}</p>
                <p><strong>Sale date: </strong>{{$comic->sale_date}}</p>
                <p><strong>Artists: </strong>{{$comic->artists}}</p>
                <p><strong>Writers: </strong>{{$comic->writers}}</p>
            </div>
            <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">
                <i class="fa-solid fa-pen"></i>
                <strong>Edit</strong>
            </a>
            <form
                action="{{route('comics.destroy', $comic)}}"
                method="POST"
                class="d-inline ms-2"
                onsubmit="return confirm ('Sei sicuro di voler eliminare il fumetto {{$comic->title}}?')"
            >
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="btn btn-danger"
                    title="Elimina"
                >
                    <i class="fa-solid fa-trash-can"></i> <strong>Delete</strong>
                </button>
            </form>
        </div>

    </div>
</main>

@endsection
