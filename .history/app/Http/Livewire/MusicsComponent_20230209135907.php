<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MusicsComponent extends Component
{
    public $music_id, $artist_name, $
    public function storeMusicData()
    {
        # code...
    }

    public function render()
    {
        return view('livewire.musics-component')->layout('livewire.layouts.base');
    }
}
