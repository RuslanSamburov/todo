<?php

namespace App\Todos;

use App\Services\FormatData;

class TodoCreate extends FormatData
{
    public const DEFAULT = [
        'rules' => '',
    ];

    protected array $fields = [
        'title' => [
            'name' => 'Название',
            'rules' => 'required|max:255',
        ],
        'description' => [
            'name' => 'Описание',
            'rules' => 'required|max:255',
        ],
        'status' => [
            'name' => 'Статус',
            'rules' => 'required|max:255',
        ]
    ];

    public static function getRules(): array
    {
        $todo = new self();
        $data = [];
        foreach ($todo->fields as $key => $value) {
            $data[$key] = $value['rules'];
        }
        return $data;
    }
}
