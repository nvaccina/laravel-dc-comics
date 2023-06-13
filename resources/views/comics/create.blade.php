@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">
        <h1 class="pb-2">Create a new Comic</h1>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('comics.store')}}" method="POST" class="p-4 rounded bg-secondary-subtle
        ">
            @csrf

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Title (*)</label>
                <input
                    type="text"
                    class="form-control"
                    id="formGroupExampleInput"
                    placeholder="Title"
                    name="title"
                    value="{{old('title')}}"
                >
                @error('title')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Poster image (*)</label>
                <input type="text" class="form-control" id="thumb" placeholder="Poster image" name="thumb" value="{{old('thumb')}}">
                @error('thumb')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (*)</label>
                <input type="text" class="form-control" id="price" placeholder="es. 10.20" name="price" value="{{old('price')}}">
                @error('price')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series (*)</label>
                <input type="text" class="form-control" id="series" placeholder="Series" name="series" value="{{old('series')}}">
                @error('series')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date (*)</label>
                <input type="text" class="form-control" id="sale_date" placeholder="YYYY-MM-DD" name="sale_date" defaul value="{{old('sale_date')}}">
                @error('sale_date')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type (*)</label>
                <input type="text" class="form-control" id="type" placeholder="Type" name="type" value="{{old('type')}}">
                @error('type')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="10" placeholder="Description" name="description">
                    {{old('description')}}
                </textarea>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists (*)</label>
                <input type="text" class="form-control" id="artists" placeholder="es. Mario Primo - Giovanni Secondo - Claudio Terzo" name="artists" value="{{old('artists')}}">
                @error('artists')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers (*)</label>
                <input type="text" class="form-control" id="writers" placeholder="es. Mario Primo - Giovanni Secondo - Claudio Terzo" name="writers" value="{{old('writers')}}">
                @error('writers')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>

    </div>
</main>

@endsection
