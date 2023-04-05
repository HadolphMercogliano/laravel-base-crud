<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $songs = Song::paginate(8);
      return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      
$song = new Song;

      $song->fill($data);
      $song->save();

      return redirect()->route('songs.show', $song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
      return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
     return view('songs.edit',compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {

      $data = $this->validation($request->all());
      $song->update($data);
      return redirect()->route('songs.show', $song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }
    private function validation($data) {
     $validator = Validator::make(
        $data,
        [
          'title' =>'required|string',
          'album' =>'required|string',
          'author' =>'required|string',
          'editor' =>'required|string',
          'lenght' =>'required|float',
          
        ],
        [
          'title.required' => 'Il nome del brano è obbligatorio',
          'title.string' => 'Il nome del brano deve essere una stringa',

          'album.required' => 'Il nome del brano è obbligatorio',
          'album.string' => 'Il nome del brano deve essere una stringa',

          'author.required' => 'Il nome del brano è obbligatorio',
          'author.string' => 'Il nome del brano deve essere una stringa',

          'editor.required' => 'Il nome del brano è obbligatorio',
          'editor.string' => 'Il nome del brano deve essere una stringa',

          'lenght.required' => 'Il nome del brano è obbligatorio',
          'lenght.float' => 'Il nome del brano deve essere un numero con la virgola'
        ]
        )->validate();
        return $validator;
    }
}