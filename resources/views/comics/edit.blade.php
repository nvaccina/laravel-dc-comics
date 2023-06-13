@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">
        <h1 class="pb-2">Edit Comic</h1>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('comics.update', $comic)}}" method="POST" class="p-4 rounded bg-secondary-subtle
        ">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control"
                    id="formGroupExampleInput"
                    placeholder="Title"
                    name="title"
                    value="{{old('title', $comic->title)}}"
                >
                @error('title')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Poster image</label>
                <input
                    type="text"
                    class="form-control"
                    id="thumb"
                    placeholder="Poster image"
                    name="thumb"
                    value="{{old('thumb', $comic->thumb)}}"
                >
                @error('thumb')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                    type="text"
                    class="form-control"
                    id="price"
                    placeholder="Price"
                    name="price"
                    value="{{old('price', $comic->price)}}"
                >
                @error('price')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Series" name="series" value="{{old('series', $comic->series)}}">
                @error('series')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale_date" placeholder="Sale date" name="sale_date" defaul value="{{old('sale_date', $comic->sale_date)}}">
                @error('sale_date')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" placeholder="Type" name="type" value="{{old('type', $comic->type)}}">
                @error('type')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="10" placeholder="Description" name="description">
                    {{old('description', $comic->description)}}
                </textarea>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" placeholder="Artists" name="artists" value="{{old('artists', $comic->artists)}}">
                @error('artists')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" placeholder="Writers" name="writers" value="{{old('writers', $comic->writers)}}">
                @error('writers')
                    <p class="text-danger py-1">{{$message}}</p>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>

    </div>
</main>

@endsection
