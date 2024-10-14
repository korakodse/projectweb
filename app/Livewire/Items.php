<?php

namespace App\Livewire;
use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($id){

        try{
            Item::find($id)->delete();

            return redirect()->to(route('items'));
        }catch(\Exception $e){
            dd($e);
        }

    }
    public function render()
    {
        $data = Item::paginate(2);
        return view('livewire.items')->with(compact('data'));
    }
}
