@extends('layouts.app')

@section('title', 'Aggiungi')

@section('main-content')

<div class="container">
  <h2 class="my-3">Aggiungi un brano</h2>

  <form action="{{ route('songs.store')}}" method="POST" class="row gy-3 gx-4 d-flex justify-content-center">
    @csrf
    <div class="col-4">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
    </div>
    <div class="col-4">
      <label for="album" class="form-label">Album</label>
      <input type="text" class="form-control" id="album" name="album" value="{{ old('album')}}">
    </div>
    <div class="col-4">
      <label for="author" class="form-label">Autore</label>
      <input type="text" class="form-control" id="author" name="author" value="{{ old('author')}}">
    </div>
    <div class="col-4">
      <label for="editor" class="form-label">Editore</label>
      <input type="text" class="form-control" id="editor" name="editor" value="{{ old('editor')}}">
    </div>
    <div class="col-4">
      <label for="lenght" class="form-label">Durata</label>
      <input type="text" class="form-control" id="lenght" name="lenght" value="{{ old('lenght')}}">
    </div>
    <div class="col-4">
      <label for="poster" class="form-label">Percorso immagine</label>
      <input type="text" class="form-control" id="poster" name="poster" value="{{ old('poster')}}">
    </div>
    <div class="col-12 d-flex">
      <button type="submit" class="btn btn-outline-success ms-auto">Salva</button>
    </div>
  </form>
</div>

@endsection