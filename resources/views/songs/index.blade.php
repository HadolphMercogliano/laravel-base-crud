@extends('layouts.app')

@section('title', 'Tutti i brani')

@section('main-content')

<div class="container">
  <h2 class="my-3">Lista Brani</h2>

  
    <table class="table table-dark table-striped mt-5">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">TITLE</th>
            <th scope="col">AUTHOR</th>
            <th scope="col">LENGTH</th>
            <th scope="col">details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $song)
            <tr>
            <th scope="row">{{$song->id}}</th>
            <td>{{$song->title}}</td>
            <td>{{$song->author}}</td>
            <td>{{$song->lenght}}</td>
            <td><a href="{{ route('songs.show', ['song' => $song]) }}">details</a></td>
            </tr>
            @endforeach
        </tbody>
  </table>
</div>
    
@endsection 