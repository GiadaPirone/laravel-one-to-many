@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($types as $type)
            <div class="card p-0 mb-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $type->name }}</h5>

                    {{-- <button type="button" class="btn btn-warning">
                        <a href="{{route("admin.projects.edit", $project)}}">Modifica Project</a>
                    </button> --}}

                </div>
            </div>
        @endforeach
    </div>
</div>



@endforeach