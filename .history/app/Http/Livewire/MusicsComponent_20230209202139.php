<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MusicsComponent extends Component
{
    public $music_id, $artist_name ,$music_title, $label, $genre, $tempo;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'music_id' => 'required|unique:musics',
            'artist_name' => 'required',
            'music_title' => 'required',
            'label' => 'required',
            'genre' => 'required',
            'tempo' => 'required|numeric',

        ]);
    }

    public function storeMusicData()
    {
        $this->validate([
            'music_id' => 'required|unique:musics',
            'artist_name' => 'required',
            'music_title' => 'required',
            'label' => 'required',
            'genre' => 'required',
            'tempo' => 'required|numeric',

        ]);

        $music = new Musics();
        $music->music_id = $this->music_id;
        $music->artist_name = $this->artist_name;
        $music->music_title = $this->music_title;
        $music->label = $this->label;
        $music->genre = $this->genre;
        $music->tempo = $this->tempo;

        $music->save();

        session()->




    }

    public function render()
    {
        return view('livewire.musics-component')->layout('livewire.layouts.base');
    }
}
