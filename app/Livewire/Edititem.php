<?php

namespace App\Livewire;
use App\Models\Item;
use Exception;
use Livewire\Component;

use Livewire\WithFileUploads;

class Edititem extends Component
{
    use WithFileUploads;
    public $uid,$name,$description,$photo,$tmp_item;

    public function mount($id){

        $tmp_item = Item::find($id);
        $this->name = $tmp_item->name;
        $this->description = $tmp_item->description;
        $this->uid = $id;
        // $this->password = $tmp_item->password;
    }

    public function insert()
    {
        try{
            $model = Item::where('id',$this->uid)->update([
                'name' => $this->name,
                'description' => $this->description,
            ]);

            if($this->photo){
                $fullpath = $this->photo->store('photo','public');
                $model = Item::find($this->uid);
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
        return view('livewire.edititem');
    }
}
