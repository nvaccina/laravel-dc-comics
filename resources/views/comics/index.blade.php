@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">
        <h1>Comics</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->title}}</th>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <th scope="col"><a class="btn btn-primary" href="#">Dettagli</a>
                        <a class="btn btn-secondary" href="#">Modifica</a></th>
                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</main>

@endsection
