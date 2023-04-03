@extends('layouts.app')

@section('title', 'Show')

@section('main-content')

<div class="container">
  <div class="row justify-content-center align-items-center g-2">
  
  <div class="card col-6  bg-dark p-4 m-3">
    <div class="row align-items-center">
      <div class="col-6">
        <img src="{{ $song->poster }}" class="img-fluid rounded" alt="poster">
      </div>
      <div class="col-6">
        <div class="card-body">
            <h5 class="card-title"> {{ $song->title }} - {{ $song->author }} </h5>
            <p class="">Durata: {{$song->lenght}} min</p>
            <p class="card-text mt-3"> Album: {{ $song->album }} </p>
            <p class="card-text"> Editore: {{ $song->editor }} </p>
        </div>
      </div>
      </div>
  </div>

    </div>
    </div>
@endsection