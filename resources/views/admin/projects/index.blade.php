@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($projects as $project)
            <div class="card p-0 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ $project->image }}" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p>{{$project->description}}</p>

                    <button type="button" class="btn btn-light">
                        <a href="{{route("admin.projects.show", $project)}}">Seleziona Project</a>                       
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection