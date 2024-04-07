<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoShow extends Component
{
    public Todo $todo;
    public array $fields;

    public function mount(Todo $todo, array $fields)
    {
        $this->todo = $todo;
        $this->fields = $fields;
    }
    
    public function render()
    {
        return view('livewire.todo-show');
    }
}
