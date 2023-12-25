@extends('layouts.app')

@section('content')

<div class="grid gap-16 container mx-auto mb-28 mt-[85px] relative">
   <livewire:components.hero />

   <livewire:components.partner />
   
   <livewire:components.services />

   <livewire:components.destination />

   <livewire:components.travel-point />
   
   <livewire:components.features />

   <livewire:components.testimony />

   <livewire:components.subscribe />
</div>

@endsection