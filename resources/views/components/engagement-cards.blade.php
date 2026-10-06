@php
    $cards = \App\Models\EngagementCard::orderBy('order')->get();
@endphp
<section class="py-24 relative bg-[#fdfaf6] overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute right-0 top-0 opacity-80 pointer-events-none">
        <div class="w-64 h-64 bg-nissa-magenta opacity-10 rotate-45 transform translate-x-1/2 -translate-y-1/4 absolute rounded-3xl"></div>
        <div class="w-48 h-48 bg-nissa-pink opacity-20 rotate-12 transform translate-x-1/4 translate-y-1/4 absolute rounded-xl"></div>
        <div class="w-32 h-32 bg-nissa-sage opacity-20 -rotate-12 transform -translate-x-1/4 translate-y-1/2 absolute rounded-full"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-4xl md:text-6xl font-extrabold text-nissa-dark mb-16 max-w-4xl leading-tight">
            From Recognition to Runways.<br>
            <span class="text-nissa-magenta">Engage, Elevate, Empower</span>
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($cards as $card)
                @if($card->is_highlighted)
                    <!-- Highlighted Card -->
                    <div class="bg-white rounded-3xl p-8 shadow-2xl transition duration-300 relative overflow-hidden group flex flex-col h-full">
                        <!-- Background swoosh using CSS -->
                        <div class="absolute right-0 bottom-0 w-48 h-full bg-gradient-to-t from-nissa-magenta to-nissa-pink opacity-10 rounded-tl-full transform translate-x-10 translate-y-10 group-hover:scale-110 transition duration-500"></div>
                        <div class="absolute right-0 bottom-0 w-32 h-2/3 bg-gradient-to-t from-nissa-pink to-nissa-sage opacity-20 rounded-tl-full transform translate-x-5 translate-y-5"></div>
                        
                        <h3 class="text-xl font-bold mb-4 text-nissa-dark relative z-10">{{ $card->title }}</h3>
                        <p class="text-gray-600 text-sm mb-8 relative z-10 leading-relaxed">
                            {{ $card->description }}
                        </p>
                        <div class="mt-auto relative z-10">
                            <a href="{{ $card->link_url ?? '#' }}" class="text-nissa-magenta font-bold flex items-center space-x-2">
                                @if($card->link_text)
                                    <span>{{ $card->link_text }}</span> 
                                @endif
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @else
                    <!-- Normal Card -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition duration-300 relative overflow-hidden group flex flex-col h-full">
                        <h3 class="text-xl font-bold mb-4 text-nissa-dark group-hover:text-nissa-magenta transition">{{ $card->title }}</h3>
                        <p class="text-gray-600 text-sm mb-8 relative z-10 leading-relaxed">
                            {{ $card->description }}
                        </p>
                        <div class="mt-auto">
                            <a href="{{ $card->link_url ?? '#' }}" class="text-nissa-magenta group-hover:text-nissa-pink font-bold text-lg">
                                @if($card->link_text)
                                    <span class="text-sm mr-2">{{ $card->link_text }}</span>
                                @endif
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
