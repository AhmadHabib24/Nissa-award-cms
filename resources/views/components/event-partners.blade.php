@props(['partners' => collect()])
<section class="py-24 bg-nissa-light relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-black text-nissa-dark mb-12 text-center md:text-left tracking-tight">Event Partners</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 border-t border-l border-gray-200">
            @if($partners->count() > 0)
                @foreach($partners as $partner)
                <a href="{{ $partner->link ?? '#' }}" {{ $partner->link ? 'target="_blank" rel="noopener"' : '' }} class="border-b border-r border-gray-200 p-8 flex items-center justify-center hover:shadow-2xl transition duration-500 bg-white z-10 hover:z-20 relative cursor-pointer filter grayscale hover:grayscale-0 block">
                    <img src="{{ $partner->logo ? Storage::url($partner->logo) : 'https://ui-avatars.com/api/?name='.urlencode($partner->name).'&background=ffffff&color=9D2254&size=200&font-size=0.33&bold=true' }}" alt="{{ $partner->name }}" class="max-h-16 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity">
                </a>
                @endforeach
            @else
                @for ($i = 1; $i <= 12; $i++)
                <div class="border-b border-r border-gray-200 p-8 flex items-center justify-center hover:shadow-2xl transition duration-500 bg-white z-10 hover:z-20 relative cursor-pointer filter grayscale hover:grayscale-0">
                    <img src="https://ui-avatars.com/api/?name=Partner+{{ $i }}&background=ffffff&color=9D2254&size=200&font-size=0.33&bold=true" alt="Partner {{ $i }}" class="max-h-16 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>
                @endfor
            @endif
        </div>
    </div>
</section>
