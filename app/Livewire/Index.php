<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class Index extends Component
{
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $data = Item::all();
        return view('livewire.index')->with(compact('data'));
    }
}
