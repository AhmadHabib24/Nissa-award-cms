@extends('layouts.app')

@section('title', 'Our Partners - Nissa Awards')

@section('content')
<!-- Hero Section -->
<div class="relative bg-nissa-dark pt-32 pb-20 lg:pt-40 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=2000" alt="Partners" class="w-full h-full object-cover opacity-20 filter grayscale">
        <div class="absolute inset-0 bg-gradient-to-r from-nissa-dark via-nissa-dark/90 to-transparent"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center space-x-2 text-nissa-pink font-bold tracking-widest text-sm uppercase mb-6 bg-white/10 px-4 py-2 rounded-full">
            <i class="fa-solid fa-handshake"></i>
            <span>Collaborators & Sponsors</span>
        </div>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight mb-8 leading-tight">
            Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-nissa-magenta to-nissa-pink">Partners</span>
        </h1>
        <p class="text-xl text-gray-300 font-light leading-relaxed max-w-2xl mx-auto">
            We are proud to collaborate with brands that share our vision of empowering and celebrating women's excellence.
        </p>
    </div>
</div>

<!-- Partners Grid -->
<div class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        @if($partners->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 md:gap-12">
                @foreach($partners as $partner)
                    <a href="{{ $partner->link ?? '#' }}" target="_blank" rel="noopener noreferrer" class="group block p-8 rounded-2xl bg-nissa-light border border-gray-100 hover:shadow-xl transition duration-300 flex flex-col items-center justify-center">
                        @if($partner->logo)
                            <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}" class="h-24 md:h-32 w-auto max-w-full object-contain filter grayscale group-hover:grayscale-0 transition duration-500">
                        @else
                            <div class="w-20 h-20 bg-nissa-magenta/10 rounded-full flex items-center justify-center text-nissa-magenta font-bold text-2xl mb-4 group-hover:bg-nissa-magenta group-hover:text-white transition duration-300">
                                {{ substr($partner->name, 0, 1) }}
                            </div>
                        @endif
                        <h3 class="text-lg font-bold text-nissa-dark mt-4 group-hover:text-nissa-magenta transition">{{ $partner->name }}</h3>
                    </a>
                @endforeach
            </div>
        @else
            <!-- Placeholder if no partners exist -->
            <div class="py-20 bg-nissa-light rounded-3xl shadow-sm border border-gray-100">
                <div class="w-24 h-24 bg-nissa-magenta/10 text-nissa-magenta rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <h3 class="text-3xl font-black text-nissa-dark mb-4">Partner With Us</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">We are currently welcoming new sponsors for the upcoming Nissa Awards. Join us in making a difference and showcasing your brand's commitment to empowering leaders.</p>
                <a href="#" class="mt-8 inline-block bg-nissa-dark text-white font-bold px-8 py-3 rounded-full hover:bg-nissa-magenta transition shadow-lg">Become a Sponsor</a>
            </div>
        @endif
    </div>
</div>
@endsection
