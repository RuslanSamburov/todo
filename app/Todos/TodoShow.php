<?php

namespace App\Todos;

use App\Services\FormatData;

class TodoShow extends FormatData
{
    public const DEFAULT = [];

    protected array $fields = [
        'id' => [
            'name' => 'Айди',
        ],
        'title' => [
            'name' => 'Название',
        ],
        'description' => [
            'name' => 'Описание',
        ],
        'status' => [
            'name' => 'Статус',
        ],
        'created_at' => [
            'name' => 'Дата создания',
        ]
    ];
}
