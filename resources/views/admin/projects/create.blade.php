@extends('layouts.admin')

@section('content')

<h1>Crea Un Nuovo Progetto</h1>

    <form action="" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Inserisci Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Inserisci Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Inserisci URL Img</label>
            <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection