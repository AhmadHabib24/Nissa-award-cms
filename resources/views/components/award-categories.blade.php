@props(['categories' => collect()])
<section class="py-24 bg-nissa-light relative overflow-hidden">
    <!-- Faint Triangle Pattern Background (Left Side) -->
    <div class="absolute left-0 top-0 bottom-0 w-1/3 opacity-5 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, #9D2254 1px, transparent 0); background-size: 32px 32px;"></div>
    
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <!-- Section Header -->
        <div class="inline-flex items-center space-x-2 text-nissa-magenta font-bold tracking-widest text-sm uppercase mb-4">
            <i class="fa-solid fa-microphone-lines"></i>
            <span>Icons in the Making</span>
            <i class="fa-solid fa-microphone-lines"></i>
        </div>
        <h2 class="text-4xl md:text-6xl font-black text-nissa-dark tracking-tight mb-16 leading-tight">
            Recognizing excellence across categories that shape women's future.
        </h2>

        <div class="flex flex-wrap justify-center gap-6 md:gap-8">
            @if($categories->count() > 0)
                @foreach($categories as $category)
                <a href="{{ route('vote.show', $category->id) }}" class="relative group cursor-pointer w-full md:w-[calc(50%-1rem)] lg:w-[calc(50%-1.5rem)] block">
                    <div class="absolute inset-0 bg-nissa-dark translate-x-2 translate-y-2 transition-transform duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                    <div class="relative {{ $loop->iteration % 2 == 0 ? 'bg-nissa-pink' : 'bg-nissa-magenta' }} text-white py-8 px-4 border border-nissa-dark flex flex-col items-center justify-center transition-transform duration-300 group-hover:-translate-x-1 group-hover:-translate-y-1 h-full">
                        <h3 class="font-bold text-lg md:text-xl tracking-wider uppercase text-center">{{ $category->name }}</h3>
                        @if($category->description)
                            <p class="text-sm mt-2 text-white/80 line-clamp-2 text-center max-w-sm">{{ Str::limit($category->description, 60) }}</p>
                        @endif
                    </div>
                </a>
                @endforeach
            @else
                <!-- Category Block 1 -->
                <div class="relative group cursor-pointer w-full md:w-[calc(50%-1rem)] lg:w-[calc(50%-1.5rem)]">
                    <!-- Drop shadow block -->
                    <div class="absolute inset-0 bg-nissa-dark translate-x-2 translate-y-2 transition-transform duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                    <!-- Main block -->
                    <div class="relative bg-nissa-magenta text-white py-8 px-4 border border-nissa-dark flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-1 group-hover:-translate-y-1">
                        <h3 class="font-bold text-lg md:text-xl tracking-wider uppercase text-center">Business Leadership</h3>
                    </div>
                </div>

                <!-- Category Block 2 -->
                <div class="relative group cursor-pointer w-full md:w-[calc(50%-1rem)] lg:w-[calc(50%-1.5rem)]">
                    <div class="absolute inset-0 bg-nissa-dark translate-x-2 translate-y-2 transition-transform duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                    <div class="relative bg-nissa-pink text-white py-8 px-4 border border-nissa-dark flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-1 group-hover:-translate-y-1">
                        <h3 class="font-bold text-lg md:text-xl tracking-wider uppercase text-center">Tech Innovator</h3>
                    </div>
                </div>

                <!-- Category Block 3 -->
                <div class="relative group cursor-pointer w-full md:w-[calc(50%-1rem)] lg:w-[calc(50%-1.5rem)]">
                    <div class="absolute inset-0 bg-nissa-dark translate-x-2 translate-y-2 transition-transform duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                    <div class="relative bg-nissa-sage text-white py-8 px-4 border border-nissa-dark flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-1 group-hover:-translate-y-1">
                        <h3 class="font-bold text-lg md:text-xl tracking-wider uppercase text-center">Social Impact</h3>
                    </div>
                </div>

                <!-- Category Block 4 -->
                <div class="relative group cursor-pointer w-full md:w-[calc(50%-1rem)] lg:w-[calc(50%-1.5rem)]">
                    <div class="absolute inset-0 bg-nissa-dark translate-x-2 translate-y-2 transition-transform duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                    <div class="relative bg-nissa-magenta text-white py-8 px-4 border border-nissa-dark flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-1 group-hover:-translate-y-1">
                        <h3 class="font-bold text-lg md:text-xl tracking-wider uppercase text-center">Emerging Talent</h3>
                    </div>
                </div>
                
                <!-- Category Block 5 (Centered) -->
                <div class="relative group cursor-pointer w-full md:w-2/3 lg:w-1/2 mx-auto mt-4">
                    <div class="absolute inset-0 bg-nissa-dark translate-x-2 translate-y-2 transition-transform duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                    <div class="relative bg-nissa-pink text-white py-8 px-4 border border-nissa-dark flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-1 group-hover:-translate-y-1">
                        <h3 class="font-bold text-lg md:text-xl tracking-wider uppercase text-center">Star of the Year</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
