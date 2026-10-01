@props(['images' => collect()])
<section class="w-full">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-0 w-full">
        @if($images->count() > 0)
            @foreach($images as $image)
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="{{ Storage::url($image->image) }}" alt="{{ $image->title ?? 'Event Gallery' }}" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 {{ ['bg-nissa-magenta', 'bg-nissa-sage', 'bg-nissa-pink', 'bg-nissa-dark'][$loop->index % 4] }} opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            @endforeach
        @else
            <!-- Gallery Image 1 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-magenta opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 2 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-sage opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 3 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1475721025505-1112ffb82143?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-pink opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 4 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-dark opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 5 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-dark opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 6 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-pink opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 7 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522158637959-30385a09e0da?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-sage opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 8 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-magenta opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
        @endif
    </div>
</section>
