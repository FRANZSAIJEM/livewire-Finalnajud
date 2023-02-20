<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MusicsComponent extends Component
{
    public function storeMusicData(Type $var = null)
    {
        # code...
    }

    public function render()
    {
        return view('livewire.musics-component')->layout('livewire.layouts.base');
    }
}
