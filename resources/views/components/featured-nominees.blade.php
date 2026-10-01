@props(['nominees' => collect()])
<section class="py-20 bg-nissa-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-nissa-magenta mb-12">Featured Nominees</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @if($nominees->count() > 0)
                @foreach($nominees as $nominee)
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <img src="{{ $nominee->profile_photo ? Storage::url($nominee->profile_photo) : 'https://ui-avatars.com/api/?name='.urlencode($nominee->name).'&background=f3f4f6&color=9D2254' }}" alt="{{ $nominee->name }}" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg">{{ $nominee->name }}</h3>
                        <p class="text-nissa-sage text-sm font-medium mb-4">{{ $nominee->category->name ?? 'Nominee' }}</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-sm text-nissa-magenta font-medium hover:underline">View Profile</a>
                            <button class="bg-nissa-magenta text-white px-4 py-1 rounded-full text-xs hover:bg-nissa-pink transition">Vote</button>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <!-- Static Fallback Nominee Cards -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=300" alt="Jane Doe" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg">Jane Doe</h3>
                        <p class="text-nissa-sage text-sm font-medium mb-4">Business Leadership</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-sm text-nissa-magenta font-medium hover:underline">View Profile</a>
                            <button class="bg-nissa-magenta text-white px-4 py-1 rounded-full text-xs hover:bg-nissa-pink transition">Vote</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=300" alt="Sarah Smith" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg">Sarah Smith</h3>
                        <p class="text-nissa-sage text-sm font-medium mb-4">Tech Innovator</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-sm text-nissa-magenta font-medium hover:underline">View Profile</a>
                            <button class="bg-nissa-magenta text-white px-4 py-1 rounded-full text-xs hover:bg-nissa-pink transition">Vote</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1531123897727-8f129e1bf98c?auto=format&fit=crop&q=80&w=300" alt="Emily Chen" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg">Emily Chen</h3>
                        <p class="text-nissa-sage text-sm font-medium mb-4">Social Impact</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-sm text-nissa-magenta font-medium hover:underline">View Profile</a>
                            <button class="bg-nissa-magenta text-white px-4 py-1 rounded-full text-xs hover:bg-nissa-pink transition">Vote</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1598550874175-4d0ef436c909?auto=format&fit=crop&q=80&w=300" alt="Aisha Khan" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg">Aisha Khan</h3>
                        <p class="text-nissa-sage text-sm font-medium mb-4">Emerging Talent</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-sm text-nissa-magenta font-medium hover:underline">View Profile</a>
                            <button class="bg-nissa-magenta text-white px-4 py-1 rounded-full text-xs hover:bg-nissa-pink transition">Vote</button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
