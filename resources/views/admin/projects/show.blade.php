@extends('layouts/admin')

@section('content')

<div class="main pt-5">
    <h1 class="">Visualizzazione progetto</h1>

    <hr class="mb-4">

    <div class="py-3">
        <h2 class="text-center">
            {{$project->title}}
            <br>
            <small>
                <pre class="fs-5">
                    ({{$project->slug}})
                </pre>
            </small>
        </h2>  
    </div>

    <hr>

    <p>
        {{$project->content}}
    </p>

</div>

<div class="d-flex justify-content-around">
    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary">Modifica il progetto</a>
</div>



@endsection