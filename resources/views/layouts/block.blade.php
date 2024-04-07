@extends('layouts.app')

@section('body')
    <div class="position-absolute top-50 start-50 translate-middle todos">
        <div class="text-bg-light p-3 rounded">
            @hasSection ('name')
                <h2 class="mb-3 text-center">@yield('name')</h2>
            @endif
            @yield('content')
        </div>
    </div>
@endsection