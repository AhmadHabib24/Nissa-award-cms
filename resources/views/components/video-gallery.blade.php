@props(['videos' => collect()])
@php
    if (!isset($videos) || $videos->isEmpty()) {
        $videos = \App\Models\VideoGallery::where('is_active', true)->orderBy('sort_order', 'asc')->get();
    }
@endphp

@if($videos->count() > 0)
<section class="py-24 bg-nissa-dark relative overflow-hidden" x-data="{ videoModalOpen: false, activeVideoUrl: '', activeVideoTitle: '', isEmbed: false }">
    <!-- Background Glow -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-nissa-magenta/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-nissa-pink/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
            <div>
                <div class="inline-flex items-center space-x-2 text-nissa-pink font-bold tracking-widest text-xs uppercase mb-3">
                    <i class="fa-solid fa-circle-play text-nissa-magenta"></i>
                    <span>Watch Highlights</span>
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight">
                    Video <span class="text-nissa-magenta">Gallery</span>
                </h2>
            </div>
            <p class="text-gray-400 text-sm md:text-base max-w-md mt-4 md:mt-0 leading-relaxed">
                Relive the most empowering speeches, runway moments, and celebrations from the Nissa Awards.
            </p>
        </div>

        <!-- Video Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($videos as $video)
            @php
                $videoSource = $video->type === 'url' ? $video->embed_url : Storage::url($video->video_file);
                $isEmbed = $video->type === 'url';
            @endphp
            <div class="group relative rounded-2xl overflow-hidden bg-gray-900 border border-gray-800 shadow-xl transition-all duration-300 hover:-translate-y-2 hover:border-nissa-magenta/50">
                <!-- Video Thumbnail Container -->
                <div class="relative aspect-video w-full overflow-hidden cursor-pointer"
                     @click="videoModalOpen = true; activeVideoUrl = '{{ $videoSource }}'; activeVideoTitle = '{{ addslashes($video->title ?? 'Nissa Awards Video') }}'; isEmbed = {{ $isEmbed ? 'true' : 'false' }}">
                    <img src="{{ $video->display_thumbnail }}" 
                         alt="{{ $video->title ?? 'Nissa Video' }}" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300"></div>
                    
                    <!-- Play Button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-nissa-magenta/90 text-white flex items-center justify-center shadow-lg transform transition-all duration-300 group-hover:scale-125 group-hover:bg-nissa-magenta">
                            <i class="fa-solid fa-play text-xl ml-1"></i>
                        </div>
                    </div>

                    <!-- Type Badge -->
                    <div class="absolute top-3 left-3 bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider border border-white/10">
                        <i class="{{ $video->type === 'url' ? 'fa-brands fa-youtube text-red-500' : 'fa-solid fa-film text-nissa-pink' }} mr-1"></i>
                        {{ $video->type === 'url' ? 'Online' : 'HD Video' }}
                    </div>
                </div>

                <!-- Info -->
                <div class="p-5 flex flex-col justify-between">
                    <h3 class="text-white font-bold text-lg leading-snug line-clamp-2 group-hover:text-nissa-pink transition-colors">
                        {{ $video->title ?? 'Nissa Awards Highlight' }}
                    </h3>
                    <div class="mt-4 flex items-center justify-between text-xs text-gray-400">
                        <span class="flex items-center">
                            <i class="fa-regular fa-calendar mr-1.5 text-nissa-magenta"></i>
                            {{ $video->created_at ? $video->created_at->format('M Y') : 'Nissa Awards' }}
                        </span>
                        <button type="button" 
                                @click="videoModalOpen = true; activeVideoUrl = '{{ $videoSource }}'; activeVideoTitle = '{{ addslashes($video->title ?? 'Nissa Awards Video') }}'; isEmbed = {{ $isEmbed ? 'true' : 'false' }}"
                                class="text-nissa-pink hover:text-white font-semibold transition flex items-center">
                            Play Now <i class="fa-solid fa-arrow-right text-[10px] ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Video Player Modal -->
    <div x-show="videoModalOpen" 
         x-cloak 
         class="fixed inset-0 z-[120] flex items-center justify-center p-4 sm:p-6 bg-black/90 backdrop-blur-md"
         style="display: none;"
         @keydown.escape.window="videoModalOpen = false; activeVideoUrl = ''">
        
        <!-- Backdrop -->
        <div class="fixed inset-0" @click="videoModalOpen = false; activeVideoUrl = ''"></div>

        <!-- Modal Dialog -->
        <div class="relative w-full max-w-4xl bg-gray-950 rounded-3xl shadow-2xl overflow-hidden border border-gray-800 z-10"
             @click.stop
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-800 bg-gray-900/60">
                <h4 class="text-white font-bold text-base md:text-lg truncate max-w-xl" x-text="activeVideoTitle"></h4>
                <button type="button" 
                        @click="videoModalOpen = false; activeVideoUrl = ''" 
                        class="text-gray-400 hover:text-white transition p-2 rounded-full hover:bg-gray-800">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Modal Video Body -->
            <div class="aspect-video w-full bg-black relative">
                <!-- If embed (YouTube/Vimeo) -->
                <template x-if="videoModalOpen && isEmbed">
                    <iframe :src="activeVideoUrl" 
                            class="w-full h-full border-0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                </template>

                <!-- If manual video file (MP4) -->
                <template x-if="videoModalOpen && !isEmbed">
                    <video :src="activeVideoUrl" 
                           class="w-full h-full" 
                           controls 
                           autoplay></video>
                </template>
            </div>
        </div>
    </div>
</section>
@endif
