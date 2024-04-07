@extends('layouts.block')

@section('title', 'История статусов')
@section('name', 'История статусов')

@section ('content')
    <div class="mb-3">
        <div>
            <a href="/">На главную</a>
        </div>
    </div>
    <div>
        <livewire:history-task-status :fields="$fields"/>
    </div>
    
    @vite('resources/js/history-task-status.js')
@endsection
