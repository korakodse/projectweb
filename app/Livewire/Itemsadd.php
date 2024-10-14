<?php

namespace App\Livewire;

use App\Models\Item;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;

class Itemsadd extends Component
{
    use WithFileUploads;
    public $name,$description,$quantity,$photo;

    public function insert()
    {
        try{
            $model = Item::create([
                'name' => $this->name,
                'description' => $this->description,
                'quantity' => $this->quantity,

            ]);

            if($this->photo){
                $fullpath = $this->photo->store('photo','public');
                $model->profile_photo_path = $fullpath;
                $model->save();
            }

            return redirect()->to(route('items'));
            }catch(Exception $e){
                dd($e);
            }
    }
    public function render()
    {
        return view('livewire.itemsadd');
    }
}
