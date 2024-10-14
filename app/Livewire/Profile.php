<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Profile extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

        public function delete($id){

        try{
            User::find($id)->delete();

            return redirect()->to(route('profile'));
        }catch(\Exception $e){
            dd($e);
        }

    }

    public function render()
    {
        $data = User::paginate(2);
        return view('livewire.profile')->with(compact('data'));

    }
}
