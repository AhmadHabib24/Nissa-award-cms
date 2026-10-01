<div>
    @if (session()->has('message'))
        <div class="mb-6 p-4 text-green-700 bg-green-100 rounded-lg text-center font-bold shadow-sm">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6 text-left">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-bold text-nissa-dark mb-2">Full Name *</label>
                <input type="text" wire:model="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark" placeholder="John Doe">
                @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block text-sm font-bold text-nissa-dark mb-2">Company / Organization</label>
                <input type="text" wire:model="company" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark" placeholder="Acme Corp">
                @error('company') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-bold text-nissa-dark mb-2">Email Address *</label>
                <input type="email" wire:model="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark" placeholder="john@example.com">
                @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block text-sm font-bold text-nissa-dark mb-2">Phone Number</label>
                <input type="text" wire:model="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark" placeholder="+1 234 567 890">
                @error('phone') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-bold text-nissa-dark mb-2">How would you like to sponsor? *</label>
            <textarea wire:model="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark resize-none" placeholder="Let us know how you'd like to collaborate..."></textarea>
            @error('message') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-nissa-magenta text-white font-bold py-4 rounded-lg hover:bg-nissa-pink transition shadow-lg uppercase tracking-wider">
            Submit Sponsorship Request
        </button>
    </form>
</div>
