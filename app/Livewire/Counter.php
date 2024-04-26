<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function click(){
       dump('click'); 
    }

    public function create(){
        $item = ['sample','sample2'];
        
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
