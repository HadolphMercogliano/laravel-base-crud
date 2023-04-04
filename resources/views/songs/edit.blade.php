@extends('layouts.app')

@section('title', 'Modifica brano ' . $song->title)

@section('main-content')

<div class="container">
  <h2 class="my-3">Modifica un brano</h2>

  <form action="{{ route('songs.update', $song) }}" method="POST" class="row gy-3 gx-4 d-flex justify-content-center">
    @csrf
    @method('PUT')

    <div class="col-4">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title') ?? $song->title }}">
    </div>
    <div class="col-4">
      <label for="album" class="form-label">Album</label>
      <input type="text" class="form-control" id="album" name="album" value="{{old('album') ?? $song->album}}">
    </div>
    <div class="col-4">
      <label for="author" class="form-label">Autore</label>
      <input type="text" class="form-control" id="author" name="author" value="{{old('author') ?? $song->author}}">
    </div>
    <div class="col-4">
      <label for="editor" class="form-label">Editore</label>
      <input type="text" class="form-control" id="editor" name="editor" value="{{old('editor') ?? $song->editor}}">
    </div>
    <div class="col-4">
      <label for="lenght" class="form-label">Durata</label>
      <input type="text" class="form-control" id="lenght" name="lenght" value="{{old('lenght') ?? $song->lenght}}">
    </div>
    <div class="col-4">
      <label for="poster" class="form-label">Percorso immagine</label>
      <input type="text" class="form-control" id="poster" name="poster" value="{{old('poster') ?? $song->poster}}">
    </div>
    <div class="col-12 d-flex">
      <button type="submit" class="btn btn-outline-success ms-auto">Salva</button>
    </div>
  </form>
</div>

@endsection