@props(['pastWinners' => collect()])
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16">
        <div class="inline-flex items-center space-x-2 text-nissa-magenta font-bold tracking-widest text-sm uppercase mb-4">
            <i class="fa-solid fa-trophy"></i>
            <span>Hall of Fame</span>
            <i class="fa-solid fa-trophy"></i>
        </div>
        <h2 class="text-4xl md:text-6xl font-black text-nissa-dark tracking-tight">Celebrating Past Winners</h2>
    </div>

    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @if($pastWinners->count() > 0)
                @foreach($pastWinners as $winner)
                <div class="relative group rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square bg-nissa-light">
                    <img src="{{ $winner->image ? Storage::url($winner->image) : 'https://ui-avatars.com/api/?name='.urlencode($winner->name).'&background=f3f4f6&color=9D2254' }}" alt="{{ $winner->name }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-nissa-dark via-nissa-dark/40 to-transparent opacity-90 transition duration-300 group-hover:opacity-100"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 text-center">
                        <p class="text-white font-bold text-sm md:text-base leading-snug">
                            {{ $winner->name }} Wins "{{ $winner->category_name }}"<br>
                            <span class="text-nissa-pink">at {{ $winner->edition_name }}</span>
                        </p>
                    </div>
                </div>
                @endforeach
            @else
                @for ($i = 1; $i <= 8; $i++)
                @php
                    $unsplash_ids = ['1522158637959-30385a09e0da', '1505373877841-8d25f7d46678', '1540575467063-178a50c2df87', '1511578314322-379afb476865', '1492684223066-81342ee5ff30', '1475721025505-1112ffb82143', '1515162816999-a0c47dc192f7', '1528605248644-14dd04022da1'];
                    $bg = $unsplash_ids[$i-1];
                @endphp
                <div class="relative group rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="https://images.unsplash.com/photo-{{ $bg }}?auto=format&fit=crop&q=80&w=400" alt="Past Winner" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-nissa-dark via-nissa-dark/40 to-transparent opacity-90 transition duration-300 group-hover:opacity-100"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 text-center">
                        <p class="text-white font-bold text-sm md:text-base leading-snug">
                            Brand {{$i}} Wins "Best Brand of the Year"<br>
                            <span class="text-nissa-pink">at Nissa Awards 2025</span>
                        </p>
                    </div>
                </div>
                @endfor
            @endif
        </div>
    </div>
</section>
