<?php

namespace App\Todos;

use App\Services\FormatData;

class TodoList extends FormatData
{
    public const DEFAULT = [
        'hidden' => false,
        'class' => [],
        'href' => false,
    ];

    protected array $fields = [
        'id' => [
            'name' => '#',
            'class' => ['h5'],
        ],
        'title' => [
            'name' => 'Название',
            'href' => '/',
        ],
        'status' => [
            'name' => 'Статус',
        ],
        'actions' => [
            'name' => 'Действия',
            'hidden' => true,
        ]
    ];
}
