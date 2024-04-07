<?php

namespace App\Todos;
use App\Services\FormatData;

class HistoryTaskStatus extends FormatData
{
    public const DEFAULT = [
        'hidden' => false,
        'class' => [],
        'href' => false,
    ];

    protected array $fields = [
        'id' => [
            'name' => '#',
        ],
        'before' => [
            'name' => 'До',
        ],
        'after' => [
            'name' => 'После',
        ],
        'created_at' => [
            'name' => 'Дата создания',
        ],
    ];
}
