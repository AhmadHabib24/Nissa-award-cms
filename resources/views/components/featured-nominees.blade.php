@props(['nominees' => collect(), 'categories' => collect()])
<section class="py-20 bg-nissa-light" x-data="{ selectedCategory: 'all', votingModalOpen: false, selectedNomineeId: null, selectedNomineeName: '' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-nissa-magenta mb-8">Featured Nominees</h2>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 text-left rounded shadow-sm" role="alert">
                <p class="font-bold">Success</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 text-left rounded shadow-sm" role="alert">
                <p class="font-bold">Error</p>
                <p>{{ session('error') }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 text-left rounded shadow-sm" role="alert">
                <p class="font-bold">Validation Error</p>
                <ul class="list-disc ml-5 mt-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Category Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button @click="selectedCategory = 'all'" 
                :class="{'bg-nissa-magenta text-white': selectedCategory === 'all', 'bg-white text-nissa-dark': selectedCategory !== 'all'}" 
                class="px-5 py-2 rounded-full font-bold text-sm shadow-sm transition border border-gray-200">
                All
            </button>
            @if(isset($categories))
                @foreach($categories as $category)
                <button @click="selectedCategory = '{{ $category->id }}'" 
                    :class="{'bg-nissa-magenta text-white': selectedCategory === '{{ $category->id }}', 'bg-white text-nissa-dark': selectedCategory !== '{{ $category->id }}'}" 
                    class="px-5 py-2 rounded-full font-bold text-sm shadow-sm transition border border-gray-200">
                    {{ $category->name }}
                </button>
                @endforeach
            @endif
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @if($nominees->count() > 0)
                @foreach($nominees as $nominee)
                <div x-show="selectedCategory === 'all' || selectedCategory === '{{ $nominee->category_id }}'" class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition flex flex-col">
                    <img src="{{ $nominee->profile_photo ? Storage::url($nominee->profile_photo) : 'https://ui-avatars.com/api/?name='.urlencode($nominee->name).'&background=f3f4f6&color=9D2254' }}" alt="{{ $nominee->name }}" class="w-full h-64 object-cover" />
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-bold text-lg">{{ $nominee->name }}</h3>
                        <p class="text-nissa-sage text-sm font-medium mb-4">{{ $nominee->category->name ?? 'Nominee' }}</p>
                        <div class="mt-auto flex justify-between items-center">
                            <span class="inline-flex items-center bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-bold">
                                <i class="fa-solid fa-check-to-slot mr-1 text-nissa-magenta"></i> {{ $nominee->votes_count ?? 0 }} Votes
                            </span>
                            <button @click="votingModalOpen = true; selectedNomineeId = '{{ $nominee->id }}'; selectedNomineeName = '{{ addslashes($nominee->name) }}'" class="bg-nissa-magenta text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide hover:bg-nissa-pink transition">Vote</button>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-span-full py-12 bg-white rounded-xl shadow-sm border border-gray-100 text-center">
                    <p class="text-gray-500">Nominees will be announced soon.</p>
                </div>
            @endif
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
                <p class="text-gray-500 text-sm mb-6">You are voting for <strong class="text-nissa-magenta" x-text="selectedNomineeName"></strong>. Please enter your email and phone number to confirm.</p>
                
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
</section>
