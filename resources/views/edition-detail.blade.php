@extends('layouts.app')

@section('title', 'Nissa Awards ' . $edition->year)

@section('content')
<!-- Hero Section -->
<div class="relative bg-nissa-dark pt-32 pb-20 lg:pt-40 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=2000" alt="Nissa Awards Event" class="w-full h-full object-cover opacity-20 filter grayscale">
        <div class="absolute inset-0 bg-gradient-to-r from-nissa-dark via-nissa-dark/90 to-transparent"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center space-x-2 text-nissa-pink font-bold tracking-widest text-sm uppercase mb-6 bg-white/10 px-4 py-2 rounded-full">
            <span class="w-2 h-2 rounded-full bg-nissa-pink animate-pulse"></span>
            <span>{{ ucfirst($edition->status) }} Edition</span>
        </div>
        <h1 class="text-5xl md:text-6xl lg:text-8xl font-black text-white tracking-tight mb-8 leading-tight">
            Nissa Awards <span class="text-transparent bg-clip-text bg-gradient-to-r from-nissa-magenta to-nissa-pink">{{ $edition->year }}</span>
        </h1>
        <p class="text-xl text-gray-300 font-light leading-relaxed max-w-2xl mx-auto">
            Join us in celebrating extraordinary women breaking barriers and redefining excellence.
        </p>
        
        @if($edition->status === 'active')
            <div class="mt-12">
                <a href="{{ route('vote.index') }}" class="inline-block bg-nissa-magenta text-white font-bold px-10 py-4 rounded-full hover:bg-nissa-pink transition shadow-xl text-lg uppercase tracking-wider">
                    Participate Now
                </a>
            </div>
        @endif
    </div>
</div>

<!-- Edition Details -->
<div class="py-24 bg-white relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl p-10 md:p-16 border border-gray-100 -mt-32 relative z-20 flex flex-col md:flex-row gap-12 items-center justify-between">
            <div class="flex-1 text-center md:text-left">
                <h3 class="text-sm font-bold text-nissa-sage uppercase tracking-widest mb-2">When</h3>
                <p class="text-3xl font-black text-nissa-dark">
                    @if($edition->date)
                        {{ \Carbon\Carbon::parse($edition->date)->format('F jS, Y') }}
                    @else
                        To be announced
                    @endif
                </p>
            </div>
            
            <div class="hidden md:block w-px h-24 bg-gray-200"></div>
            
            <div class="flex-1 text-center md:text-left">
                <h3 class="text-sm font-bold text-nissa-magenta uppercase tracking-widest mb-2">Where</h3>
                <p class="text-3xl font-black text-nissa-dark">
                    @if($edition->venue)
                        {{ $edition->venue }}
                    @else
                        To be announced
                    @endif
                </p>
            </div>
        </div>
        
        <div class="mt-20 text-center">
            <h2 class="text-sm font-bold text-nissa-magenta uppercase tracking-widest mb-3">About This Edition</h2>
            <h3 class="text-3xl md:text-4xl font-black text-nissa-dark mb-6 leading-tight">Setting New Benchmarks for Excellence</h3>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                The {{ $edition->year }} Nissa Awards is dedicated to recognizing the phenomenal achievements of female leaders. Whether you are nominating a trailblazer or casting a vote for your favorite nominee, your participation shapes the legacy of this edition.
            </p>
        </div>
    </div>
</div>
@endsection
