@extends('layouts.app')
@section('title', 'Vote for Categories - Nissa Awards')
@section('content')
<div class="py-32 bg-nissa-light min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-black text-nissa-dark tracking-tight mb-8">Select a Category</h1>
        <p class="text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Choose a category below to view the nominees and cast your vote for the Nissa Awards 2026.</p>
        
        <div class="flex flex-wrap justify-center gap-6 md:gap-8">
            @forelse($categories as $category)
            <a href="{{ route('vote.show', $category->id) }}" class="relative group cursor-pointer w-full md:w-[calc(50%-1rem)] lg:w-[calc(50%-1.5rem)] block">
                <div class="absolute inset-0 bg-nissa-dark translate-x-2 translate-y-2 transition-transform duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                <div class="relative {{ $loop->iteration % 2 == 0 ? 'bg-nissa-pink' : 'bg-nissa-magenta' }} text-white py-12 px-6 border border-nissa-dark flex flex-col items-center justify-center transition-transform duration-300 group-hover:-translate-x-1 group-hover:-translate-y-1 h-full">
                    <h3 class="font-bold text-xl md:text-2xl tracking-wider uppercase text-center">{{ $category->name }}</h3>
                    @if($category->description)
                        <p class="text-sm mt-4 text-white/80 line-clamp-3 text-center">{{ $category->description }}</p>
                    @endif
                </div>
            </a>
            @empty
            <div class="w-full py-12 bg-white rounded-xl shadow-sm border border-gray-100 text-center">
                <p class="text-gray-500">Categories will be announced soon!</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
