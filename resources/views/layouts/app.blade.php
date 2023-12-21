@extends('layouts.base')

@section('body')

    <livewire:components.navbar />
    


    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
