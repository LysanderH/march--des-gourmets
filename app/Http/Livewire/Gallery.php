<?php

namespace App\Http\Livewire;

use EricLagarda\NovaGallery\Models\Album;
use Livewire\Component;

class Gallery extends Component
{
    public $year;

    public function render()
    {
        $albums = Album::with('photos')->where('name', 'like', '%' . $this->year . '%')->get();
        $years = Album::all();

        // dd($albums);

        return view('livewire.gallery', ['albums' => $albums, 'years' => $years]);
    }
}
