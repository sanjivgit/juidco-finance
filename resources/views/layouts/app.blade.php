@extends('layouts.base')

@section('body')
<div class="flex" >
    <livewire:side-bar />
    <div class="w-lvw">
        <header>
            <livewire:header />
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</div>

@isset($slot)
{{ $slot }}
@endisset
@endsection