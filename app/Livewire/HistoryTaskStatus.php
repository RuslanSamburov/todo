<?php

namespace App\Livewire;

use App\Models\HistoryStatus;
use Livewire\Component;

class HistoryTaskStatus extends Component
{
    public array $fields;
    public $histories;

    public function mount(array $fields)
    {
        $this->fields = $fields;
    }

    public function boot()
    {
        $this->histories = HistoryStatus::orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.history-task-status');
    }
}
