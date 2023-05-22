@extends('layouts.admin')

@section('content')


<div class="container">
    <h1 class="mb-3">Crea un progetto</h1>
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="content">Contenuto del progetto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Aggiungi</button>
    </form>
</div>

@endsection