@extends('layouts/admin')

@section('content')

<div class="main pt-5">
    <h1 class="">Visualizzazione progetto</h1>

    <hr class="mb-4">

    <h2 class="text-center">
        {{$project->title}}
        <br>
        <small>
            <pre class="fs-5">
                ({{$project->slug}})
            </pre>
        </small>
    </h2>    
   
    <hr>

    <p>
        {{$project->content}}
    </p>
</div>



@endsection