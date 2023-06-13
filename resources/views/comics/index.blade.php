@extends('layout.main')

@section('content')

<main>

    <div class="container py-5">
        <h1>Comics</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <th scope="col">
                            <a class="btn btn-primary" href="{{route('comics.show', $comic)}}">
                                <i class="fa-solid fa-info p-1"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('comics.edit', $comic)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form
                                action=""
                                method="POST"
                                class="d-inline"
                            >
                                <buttun type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash-can"></i>
                                </buttun>
                            </form>

                        </th>
                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</main>

@endsection
