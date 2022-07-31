<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserCreate extends Component
{   
    public string $email = '';
    public string $address = '';
    public string $name = '';
    public string $phone = '';

    protected $rules = [
        'name' => ['required', 'min:2'],
        'address' => ['required', 'min:2'],
        'email' => ['required', 'email'],
        'phone' => ['required', 'min:10'],
        
    ]; 

    public function render()
    {
        return view('livewire.user-create');
    }
    public function submit()
    {
        $this->validate();

        // Register customer
        session()->flash('message', 'Customer was created.');

        $this->email = '';
        $this->phone = '';
        $this->name = '';
        $this->address = '';
       
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}
