<?php

namespace App\Facades;

use App\Services\TodoFilter;
use Illuminate\Support\Facades\Facade;

class TodoFilterFacade extends Facade
{

    public static function getFacadeAccessor(): string
    {
        return TodoFilter::class;
    }
}
