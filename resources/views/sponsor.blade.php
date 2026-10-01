@extends('layouts.app')

@section('title', 'Become a Sponsor - Nissa Awards')

@section('content')
<!-- Hero Section -->
<div class="relative bg-nissa-dark pt-32 pb-20 lg:pt-40 lg:pb-24 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/nissabanner.jpeg') }}" alt="Sponsor Nissa Awards" class="w-full h-full object-cover opacity-20">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center space-x-2 text-nissa-magenta font-bold tracking-widest text-sm uppercase mb-4">
            <i class="fa-solid fa-handshake"></i>
            <span>Partnership Opportunities</span>
            <i class="fa-solid fa-handshake"></i>
        </div>
        <h1 class="text-5xl md:text-7xl font-black text-white tracking-tight uppercase mb-6">
            Become a Sponsor
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
            Align your brand with excellence. Partner with the Nissa Awards to celebrate and empower top professionals and innovators.
        </p>
    </div>
</div>

<!-- Main Form Section -->
<div class="py-24 bg-[#fdfaf6]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 relative overflow-hidden">
            <!-- Decorative corner -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-nissa-magenta opacity-10 rounded-bl-full pointer-events-none"></div>
            
            <h2 class="text-3xl font-black text-nissa-dark mb-8 text-center uppercase">Sponsorship Inquiry</h2>
            
            @livewire('sponsor-form')
        </div>
    </div>
</div>
@endsection
