@extends('layouts.block')

@section('title', 'Изменение задачи')
@section('name', 'Изменение задачи')

@section ('content')
    <div class="mb-3">
        <div>
            <a href="/">На главную</a>
        </div>
    </div>
    <div>
        <form id="todo-edit" data-id="{{ $todo->id }}">
            @csrf
            @foreach ($fields as $key => $field)
                <x-input :label="$field['name']" name="{{ $key }}" id="{{ $key }}" :value="$todo->$key">
                    <div data-error="{{ $key }}" class="visually-hidden mt-1 p-1 text-primary-emphasis bg-danger-subtle border border-primary-subtle rounded-3"></div>
                </x-input>
            @endforeach
            <div data-success="success" class="visually-hidden my-1 p-1 text-primary-emphasis bg-success-subtle border border-primary-subtle rounded-3"></div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>        
    </div>
    
    @vite('resources/js/edit.js')
@endsection
