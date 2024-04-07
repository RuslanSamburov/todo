<?php

namespace App\Services;

use App\Models\Todo;
use Illuminate\Contracts\Database\Eloquent\Builder;

class TodoFilter
{
    private Todo|Builder $todo;

    public function search(?string $search): self
    {
        $this->todo = Todo::whereAll(Todo::SEARCH, 'LIKE', '%' . $search . '%');
        return $this;
    }

    public function get()
    {
        return $this->todo->get();
    }
}
