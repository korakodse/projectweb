<?php

namespace App\Livewire;
use App\Models\User;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Edituser extends Component
{
    use WithFileUploads;
    public $uid,$name,$email,$password,$photo,$tmp_user;

    //life cycle hook
    public function mount($id){

        $tmp_user = User::find($id);
        $this->name = $tmp_user->name;
        $this->email = $tmp_user->email;
        $this->uid = $id;
        // $this->password = $tmp_user->password;
    }

    public function insert()
    {
        try{
            $model = User::where('id',$this->uid)->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password)
            ]);

            if($this->photo){
                $fullpath = $this->photo->store('photo','public');
                $model = user::find($this->uid);
                $model->profile_photo_path = $fullpath;
                $model->save();
            }

            return redirect()->to(route('profile'));
            }catch(Exception $e){
                dd($e);
            }
    }

    public function render()
    {

        return view('livewire.edituser');
    }
}
