<?php

namespace App\Livewire;
use App\Models\User;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;

class Userdata extends Component
{
    use WithFileUploads;
    public $name,$email,$photo;
    public function update()
    {

        if($this->photo){
            $fullpath = $this->photo->store('photo','public');
            $model = user::find(auth()->user()->id);
            $model->profile_photo_path = $fullpath;
            $model->save();
        }

        $this->name;
        $this->email;
        User::where('id',auth()->user()->id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }

    public function render()
    {
        return view('livewire.userdata');
    }
}
