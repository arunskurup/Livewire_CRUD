<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserDetails;
class UserUpdate extends Component
{   
    public string $email = '';
    public string $address = '';
    public string $name = '';
    public string $phone = '';
    public $data1;
    protected $rules = [
        'name' => ['required', 'min:2'],
        'address' => ['required', 'min:2'],
        'email' => ['required', 'email'],
        'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
        
    ]; 
    public function mount($id){
        $data1=$id;
        $this->data($data1);
        
    }
    public function data($id)
    { $data1=$id;
        
        $data = UserDetails::find($id);
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->name =  $data->name;
        $this->address = $data->address;
        $this->data1=$data->id;
    }
    public function render()
    {
        return view('livewire.user-update');
    }
    public function submit()
    {
        $this->validate();
        
        session()->flash('message', 'User was Updated.');
        $create = UserDetails::find($this->data1);
        $create->name =  $this->name;
        $create->email = $this->email;
        $create->phone = $this->phone;
        $create->address = $this->address;
        $create->save();

        $this->data($this->data1);
    }
}
