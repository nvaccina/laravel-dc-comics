@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">
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
            <a href="#" class="btn btn-secondary"><i class="fa-solid fa-pen"></i> Edit</a>
        </div>

    </div>
</main>

@endsection
