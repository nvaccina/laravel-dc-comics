@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">
        <h1 class="pb-2">Create a new Comic</h1>

        <form action="{{route('comics.store')}}" method="POST">

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" placeholder="Thumb image" name="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Price" name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale_date" placeholder="Sale date" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Title</label>
                <input type="text" class="form-control" id="type" placeholder="Type" name="type">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" cols="20" rows="10" placeholder="Description" name="description"></textarea>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" placeholder="Artists" name="artists">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" placeholder="Writers" name="writers">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>

    </div>
</main>

@endsection
