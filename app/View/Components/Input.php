<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string $id,
        public string $label,
        public string $name,
        public ?string $value = null,
        public string $type = 'text',
        public bool $deny = false,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
