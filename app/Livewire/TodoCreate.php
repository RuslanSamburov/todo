<?php

namespace App\Livewire;

use Livewire\Component;

class TodoCreate extends Component
{

    #[Locked]
    public array $fields;

    public function mount(array $fields)
    {
        $this->fields = $fields;
    }

    public function create()
    {
        $this->form->create();
    }

    public function render()
    {
        return view('livewire.todo-create');
    }
}
