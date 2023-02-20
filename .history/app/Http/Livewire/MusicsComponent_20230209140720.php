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
        $this->validateOnly([
            'music_id' => 'required|unique:musics',
            'artist_name' => 'required',
            'music_title' => 'required',
            'label' => 'required',
            'genre' => 'required',
            'tempo' => 'required|numeric',

        ]);
    }

    public function render()
    {
        return view('livewire.musics-component')->layout('livewire.layouts.base');
    }
}
