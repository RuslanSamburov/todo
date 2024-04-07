<?php

namespace App\Http\Controllers;

use App\Todos\HistoryTaskStatus;
use Illuminate\Http\Request;

class HistoryTaskStatusController extends Controller
{

    public function __construct(
        public HistoryTaskStatus $historyTaskStatus,
    )
    {
    }

    public function __invoke()
    {
        return view('todos.history-task-status', [
            'fields' => $this->historyTaskStatus->fields,
        ]);
    }
}
