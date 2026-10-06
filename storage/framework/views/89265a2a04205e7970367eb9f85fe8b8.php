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
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition duration-300 relative overflow-hidden group flex flex-col h-full">
                <h3 class="text-xl font-bold mb-4 text-nissa-dark group-hover:text-nissa-magenta transition">Public Choice Awards</h3>
                <p class="text-gray-600 text-sm mb-8 relative z-10 leading-relaxed">
                    🏆 Your Voice, Their Victory. Cast your vote to help crown the most loved brands, creators, and digital leaders chosen by the people.
                </p>
                <div class="mt-auto">
                    <a href="<?php echo e(route('vote.index')); ?>" class="text-nissa-magenta group-hover:text-nissa-pink font-bold text-lg"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Card 2 (Active/Swoosh style) -->
            <div class="bg-white rounded-3xl p-8 shadow-2xl transition duration-300 relative overflow-hidden group flex flex-col h-full">
                <!-- Background swoosh using CSS -->
                <div class="absolute right-0 bottom-0 w-48 h-full bg-gradient-to-t from-nissa-magenta to-nissa-pink opacity-10 rounded-tl-full transform translate-x-10 translate-y-10 group-hover:scale-110 transition duration-500"></div>
                <div class="absolute right-0 bottom-0 w-32 h-2/3 bg-gradient-to-t from-nissa-pink to-nissa-sage opacity-20 rounded-tl-full transform translate-x-5 translate-y-5"></div>
                
                <h3 class="text-xl font-bold mb-4 text-nissa-dark relative z-10">Jury Awards</h3>
                <p class="text-gray-600 text-sm mb-8 relative z-10 leading-relaxed">
                    🏆 Recognized by Industry Experts. Celebrate the highest standards of innovation, leadership, and performance selected by our expert jury panel.
                </p>
                <div class="mt-auto relative z-10">
                    <a href="<?php echo e(route('about')); ?>" class="text-nissa-magenta font-bold flex items-center space-x-2"><span>Read More</span> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition duration-300 relative overflow-hidden group flex flex-col h-full">
                <h3 class="text-xl font-bold mb-4 text-nissa-dark group-hover:text-nissa-magenta transition">Panel Discussions</h3>
                <p class="text-gray-600 text-sm mb-8 relative z-10 leading-relaxed">
                    👗 Where Ideas Meet Action. Witness an exclusive showcase featuring emerging leaders at the intersection of creativity and commerce.
                </p>
                <div class="mt-auto">
                    <a href="<?php echo e(route('about')); ?>" class="text-nissa-magenta group-hover:text-nissa-pink font-bold text-lg"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition duration-300 relative overflow-hidden group flex flex-col h-full">
                <h3 class="text-xl font-bold mb-4 text-nissa-dark group-hover:text-nissa-magenta transition">Become a Sponsor</h3>
                <p class="text-gray-600 text-sm mb-8 relative z-10 leading-relaxed">
                    🤝 Partner with a Premier Platform. Get unmatched visibility, media exposure, and networking opportunities by sponsoring the Nissa Awards 2026.
                </p>
                <div class="mt-auto">
                    <a href="<?php echo e(route('sponsor')); ?>" class="text-nissa-magenta group-hover:text-nissa-pink font-bold text-lg"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/components/engagement-cards.blade.php ENDPATH**/ ?>