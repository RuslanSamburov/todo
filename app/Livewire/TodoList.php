<?php

namespace App\Livewire;

use App\Facades\TodoFilterFacade;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TodoList extends Component
{
    #[Locked]
    public Collection $todos;
    
    #[Locked]
    public array $fields;

    public ?string $filter = null;

    public function mount(?string $filter, array $fields)
    {
        $this->filter = $filter;
        $this->fields = $fields;
    }

    public function boot()
    {
        $this->todos = TodoFilterFacade::search($this->filter)->get();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
