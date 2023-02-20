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
