<div>
    @if (session()->has('message'))
        <div class="mb-6 p-4 text-green-700 bg-green-100 rounded-lg text-center font-bold shadow-sm">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-bold text-nissa-dark mb-2">Your Name *</label>
                <input type="text" wire:model="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark" placeholder="John Doe">
                @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block text-sm font-bold text-nissa-dark mb-2">Your Email *</label>
                <input type="email" wire:model="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark" placeholder="john@example.com">
                @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>
        </div>
        
        <div>
            <label class="block text-sm font-bold text-nissa-dark mb-2">Subject *</label>
            <input type="text" wire:model="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark" placeholder="How can we help?">
            @error('subject') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label class="block text-sm font-bold text-nissa-dark mb-2">Message *</label>
            <textarea rows="5" wire:model="message" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-nissa-magenta focus:border-nissa-magenta transition shadow-sm bg-white text-nissa-dark resize-none" placeholder="Write your message here..."></textarea>
            @error('message') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="w-full bg-nissa-dark text-white font-bold py-4 rounded-lg hover:bg-black transition shadow-lg uppercase tracking-wider">
            Send Message
        </button>
    </form>
</div>
