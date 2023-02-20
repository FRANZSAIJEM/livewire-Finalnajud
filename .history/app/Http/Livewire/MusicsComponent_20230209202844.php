<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\

class MusicsComponent extends Component
{
    public $artist_name ,$music_title, $label, $genre, $tempo;


    public function updated($fields)
    {
        $this->validateOnly($fields,[

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

            'artist_name' => 'required',
            'music_title' => 'required',
            'label' => 'required',
            'genre' => 'required',
            'tempo' => 'required|numeric',

        ]);

        $music = new Musics();

        $music->artist_name = $this->artist_name;
        $music->music_title = $this->music_title;
        $music->label = $this->label;
        $music->genre = $this->genre;
        $music->tempo = $this->tempo;

        $music->save();

        session()->flash('message', 'New Music has been added');




    }

    public function render()
    {
        return view('livewire.musics-component')->layout('livewire.layouts.base');
    }
}
