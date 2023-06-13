@extends('layout.main')

@section('content')

<main>
    <div class="container py-3">
        <h1>CONTACTS</h1>

        <form class="row g-3 my-5">
            <div class="col-md-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName">
            </div>
            <div class="col-md-3">
                <label for="inputSurname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="inputSurname">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</main>
@endsection
