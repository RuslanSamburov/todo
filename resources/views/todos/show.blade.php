@extends('layouts.block')

@section('title', 'Просмотр задачи')
@section('name', 'Просмотр задачи')

@section ('content')
    <div class="mb-3">
        <div>
            <a href="/">На главную</a>
        </div>
    </div>
    <div>
        <livewire:todo-show :todo="$todo" :fields="$fields"/>
    </div>
    
    @vite('resources/js/show.js')
@endsection
