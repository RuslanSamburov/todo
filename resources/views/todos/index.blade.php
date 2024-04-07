@extends('layouts.block')

@section('title', 'Список задач')
@section('name', 'Список задач')

@section ('content')
    <div class="mb-3">
        <div>
            <a href="/add" class="btn btn-success">+ Добавить задачу</a>
        </div>
        <div>
            <a href="/history">История статусов</a>
        </div>
    </div>
    <div>
        <livewire:todo-list :filter="$filter" :fields="$fields"/>
    </div>
    
    @vite('resources/js/list.js')
@endsection
