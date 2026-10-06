@extends('layouts.app')
@section('title', $category->name . ' - Nissa Awards')
@section('content')
<div class="py-32 bg-nissa-light min-h-screen relative" x-data="{ votingModalOpen: false, selectedNomineeId: null, selectedNomineeName: '' }">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <a href="{{ route('vote.index') }}" class="inline-flex items-center text-nissa-magenta hover:text-nissa-pink transition mb-8 font-medium">
            <i class="fa-solid fa-arrow-left mr-2"></i> Back to Categories
        </a>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8" role="alert">
                <p class="font-bold">Success</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8" role="alert">
                <p class="font-bold">Error</p>
                <p>{{ session('error') }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8" role="alert">
                <p class="font-bold">Validation Error</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-black text-nissa-dark tracking-tight mb-4 uppercase">{{ $category->name }}</h1>
            @if($category->description)
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">{{ $category->description }}</p>
            @endif
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($nominees as $nominee)
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <img src="{{ $nominee->profile_photo ? Storage::url($nominee->profile_photo) : 'https://ui-avatars.com/api/?name='.urlencode($nominee->name).'&background=f3f4f6&color=9D2254' }}" alt="{{ $nominee->name }}" class="w-full h-72 object-cover" />
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="font-bold text-2xl text-nissa-dark">{{ $nominee->name }}</h3>
                    <p class="text-nissa-sage text-sm font-medium mb-4 uppercase tracking-wide">{{ $nominee->profession ?? 'Nominee' }}</p>
                    
                    @if($nominee->bio)
                        <p class="text-gray-600 text-sm mb-6 line-clamp-3 flex-grow">{{ $nominee->bio }}</p>
                    @endif

                    <button @click="votingModalOpen = true; selectedNomineeId = '{{ $nominee->id }}'; selectedNomineeName = '{{ addslashes($nominee->name) }}'" class="mt-auto w-full bg-nissa-magenta text-white py-3 rounded-full font-bold uppercase tracking-widest hover:bg-nissa-pink transition shadow-lg">
                        Vote Now
                    </button>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 bg-white rounded-xl shadow-sm border border-gray-100 text-center">
                <p class="text-gray-500">Nominees for this category will be announced soon.</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- AlpineJS Modal -->
    <div x-show="votingModalOpen" class="fixed inset-0 z-[100] flex items-center justify-center overflow-y-auto overflow-x-hidden bg-black bg-opacity-50 backdrop-blur-sm" style="display: none;">
        <div @click.away="votingModalOpen = false" class="relative w-full max-w-md p-4 bg-white rounded-3xl shadow-2xl m-4 transform transition-all">
            <button @click="votingModalOpen = false" class="absolute top-4 right-4 text-gray-400 hover:text-nissa-dark">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
            
            <div class="p-6 text-center">
                <div class="w-16 h-16 rounded-full bg-nissa-pink/20 flex items-center justify-center mx-auto mb-4 text-nissa-magenta text-2xl">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <h3 class="mb-2 text-2xl font-bold text-nissa-dark">Verify Your Vote</h3>
                <p class="text-gray-500 text-sm mb-6">You are voting for <strong class="text-nissa-magenta" x-text="selectedNomineeName"></strong>. Please enter your email address to confirm.</p>
                
                <form :action="'/vote/' + selectedNomineeId" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input type="email" name="voter_email" required placeholder="Enter your email address" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta outline-none transition">
                    </div>
                    <div class="mb-4">
                        <input type="tel" name="voter_phone" required placeholder="Enter your phone number" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta outline-none transition">
                    </div>
                    <button type="submit" class="w-full text-white bg-nissa-magenta hover:bg-nissa-pink font-bold rounded-xl text-lg px-5 py-3 text-center transition shadow-md">
                        Submit Vote
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
