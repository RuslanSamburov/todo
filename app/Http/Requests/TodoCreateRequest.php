<?php

namespace App\Http\Requests;

use App\Todos\TodoCreate;
use Illuminate\Foundation\Http\FormRequest;

class TodoCreateRequest extends FormRequest
{

    public function __construct(
        public TodoCreate $todoCreate,
    ) {
    }

    public function rules(): array
    {
        return TodoCreate::getRules();
    }
}
