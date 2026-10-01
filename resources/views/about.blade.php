@extends('layouts.app')

@section('title', 'About Us - Nissa Awards')

@section('content')
<!-- Hero Section -->
<div class="relative bg-nissa-dark pt-32 pb-20 lg:pt-40 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=2000" alt="Nissa Awards Event" class="w-full h-full object-cover opacity-20 filter grayscale">
        <div class="absolute inset-0 bg-gradient-to-r from-nissa-dark via-nissa-dark/90 to-transparent"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center space-x-2 text-nissa-pink font-bold tracking-widest text-sm uppercase mb-6">
                <span class="w-8 h-0.5 bg-nissa-pink"></span>
                <span>Discover Our Story</span>
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight mb-8 leading-tight">
                Celebrating <span class="text-transparent bg-clip-text bg-gradient-to-r from-nissa-magenta to-nissa-pink">Excellence</span> & Empowering Leaders.
            </h1>
            <p class="text-xl text-gray-300 font-light leading-relaxed">
                The Nissa Awards is the premier platform dedicated to recognizing the outstanding achievements of women across all sectors, driving meaningful change in our communities.
            </p>
        </div>
    </div>
</div>

<!-- Who We Are Section -->
<div class="py-24 bg-white relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-sm font-bold text-nissa-magenta uppercase tracking-widest mb-3">Who We Are</h2>
        <h3 class="text-3xl md:text-4xl font-black text-nissa-dark mb-6 leading-tight">The Vision Behind Nissa Awards</h3>
        
        <div class="prose prose-lg text-gray-600 mb-8 mx-auto space-y-5">
            <p>
                "Nissa" translates to women, and at our core, we believe that empowering women leads to the empowerment of entire communities. The Nissa Awards were established to provide a distinguished platform that amplifies voices, breaks barriers, and showcases monumental contributions to society.
            </p>
            <p>
                From groundbreaking entrepreneurs and visionary creatives to dedicated philanthropists and corporate leaders, we honor those who redefine excellence. Through our annual summit and awards gala, we foster a dynamic network of professionals who inspire the next generation to dream bigger and achieve more.
            </p>
        </div>

        <ul class="space-y-4 mb-10 text-left max-w-lg mx-auto">
            <li class="flex items-center">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-nissa-sage/20 text-nissa-sage flex items-center justify-center">
                    <i class="fa-solid fa-check text-xs"></i>
                </div>
                <span class="ml-3 text-gray-700 font-medium">Nationwide recognition of outstanding talent.</span>
            </li>
            <li class="flex items-center">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-nissa-sage/20 text-nissa-sage flex items-center justify-center">
                    <i class="fa-solid fa-check text-xs"></i>
                </div>
                <span class="ml-3 text-gray-700 font-medium">Fostering a supportive network of female leaders.</span>
            </li>
            <li class="flex items-center">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-nissa-sage/20 text-nissa-sage flex items-center justify-center">
                    <i class="fa-solid fa-check text-xs"></i>
                </div>
                <span class="ml-3 text-gray-700 font-medium">Inspiring future generations through visible role models.</span>
            </li>
        </ul>
        
        <a href="{{ route('vote.index') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-bold rounded-full text-white bg-nissa-dark hover:bg-nissa-magenta transition duration-300 shadow-md">
            View Nominees
            <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
    </div>
</div>

<!-- Core Values Section -->
<div class="py-24 bg-nissa-light border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-sm font-bold text-nissa-magenta uppercase tracking-widest mb-3">Our Core Values</h2>
            <h3 class="text-3xl md:text-4xl font-black text-nissa-dark mb-6">The Pillars of Our Mission</h3>
            <p class="text-lg text-gray-600">Everything we do is guided by these three fundamental principles designed to elevate women in every sphere of life.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-100 hover:shadow-xl transition duration-300 group">
                <div class="w-14 h-14 bg-nissa-magenta/10 rounded-xl flex items-center justify-center text-nissa-magenta text-2xl mb-6 group-hover:bg-nissa-magenta group-hover:text-white transition duration-300">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <h4 class="text-xl font-bold text-nissa-dark mb-4">Amplify</h4>
                <p class="text-gray-600 leading-relaxed">
                    We actively amplify the stories, struggles, and triumphs of extraordinary women, ensuring their voices reach a global audience and inspire positive, lasting change.
                </p>
            </div>
            
            <!-- Value 2 -->
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-100 hover:shadow-xl transition duration-300 group">
                <div class="w-14 h-14 bg-nissa-sage/10 rounded-xl flex items-center justify-center text-nissa-sage text-2xl mb-6 group-hover:bg-nissa-sage group-hover:text-white transition duration-300">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h4 class="text-xl font-bold text-nissa-dark mb-4">Connect</h4>
                <p class="text-gray-600 leading-relaxed">
                    We curate spaces and events that build meaningful, high-impact connections among leaders, fostering collaboration, mentorship, and unprecedented growth.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-100 hover:shadow-xl transition duration-300 group">
                <div class="w-14 h-14 bg-nissa-pink/10 rounded-xl flex items-center justify-center text-nissa-pink text-2xl mb-6 group-hover:bg-nissa-pink group-hover:text-white transition duration-300">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <h4 class="text-xl font-bold text-nissa-dark mb-4">Elevate</h4>
                <p class="text-gray-600 leading-relaxed">
                    We continuously strive to elevate the standards of excellence in every industry by honoring outstanding achievements and setting new benchmarks for success.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
