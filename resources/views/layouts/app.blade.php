@extends('layouts.base')

@section('body')
<div class="flex">
    <livewire:side-bar />
    <div>
        <header>
            Header Content
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