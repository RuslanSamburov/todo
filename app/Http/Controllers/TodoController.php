<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\HistoryStatus;
use App\Models\Todo;
use App\Todos\{TodoCreate, TodoList, TodoShow};
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct(
        public TodoList $todoList,
        public TodoCreate $todoCreate,
        public TodoShow $todoShow,
    ) {
    }

    public function index(Request $request)
    {
        return view('todos.index', [
            'fields' => $this->todoList->fields,
            'filter' => $request->get('filter'),
        ]);
    }

    public function create()
    {
        return view('todos.create', [
            'fields' => $this->todoCreate->fields,
        ]);
    }

    public function store(TodoCreateRequest $request)
    {
        $todo = new Todo($request->all());
        $todo->save();
    }

    public function show(Todo $todo)
    {
        return view('todos.show', [
            'todo' => $todo,
            'fields' => $this->todoShow->fields,
        ]);
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', [
            'todo' => $todo,
            'fields' => $this->todoCreate->fields,
        ]);
    }

    public function update(Request $request, Todo $todo)
    {
        if ($todo->status != $request->input('status')) {
            HistoryStatus::create(['before' => $todo->status, 'after' => $request->input('status')]);
        }
        $todo->update($request->all());
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
    }
}
