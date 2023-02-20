<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Musics;



class MusicsComponent extends Component
{
    public $artist_name ,$music_title, $label, $genre, $music_key, $tempo, $music_edit_id;


    public function updated($fields)
    {
        $this->validateOnly($fields,[

            'artist_name' => 'required',
            'music_title' => 'required',
            'label' => 'required',
            'genre' => 'required',
            'music_key' => 'required',
            'tempo' => 'required|numeric',

        ]);
    }

    public function storeMusicData()
    {
        $this->validate([

            'artist_name' => 'required',
            'music_title' => 'required',
            'label' => 'required',
            'genre' => 'required',
            'music_key' => 'required',
            'tempo' => 'required|numeric',

        ]);

        $music = new Musics();

        $music->artist_name = $this->artist_name;
        $music->music_title = $this->music_title;
        $music->label = $this->label;
        $music->genre = $this->genre;
        $music->music_key = $this->music_key;
        $music->tempo = $this->tempo;

        $music->save();

        session()->flash('message', 'New Music has been added Successfully');

        

        $this->artist_name = "";
        $this->music_title = "";
        $this->label = "";
        $this->genre = "";
        $this->music_key = "";
        $this->tempo = "";

    }

    public function editMusics($id)
    {
        $music = Musics::where('id', $id)->first();

        $this->music_edit_id = $music->id;
        $this->music_id = $music->music_id;
        $this->artist_name = $music->artist_name;
        $this->music_title = $music->music_title;
        $this->label = $music->label;
        $this->genre = $music->genre;
        $this->music_key = $music->music_key;
        $this->tempo = $music->tempo;

    }

    public function editMusicData()
    {

    }

    public function render()
    {

        $musics = Musics::all();
        return view('livewire.musics-component',['musics'=>$musics])->layout('livewire.layouts.base');


    }
}
