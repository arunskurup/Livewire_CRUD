<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserDetails;
class UserList extends Component
{   
    public $data;
    // $this->getData();
    public function mount(){
        $this->getData();
    }
    public function render()
    {
        return view('livewire.user-list');
    }
    public function getdata()
    {
        $this->data = UserDetails::orderBy('created_at','DESC')->get();
    }
    public function deleteUser($id)
    {
        $delete= UserDetails::find($id)->delete();
        if (!$delete){
            return;
        }
        $this->getdata();
    }

}
