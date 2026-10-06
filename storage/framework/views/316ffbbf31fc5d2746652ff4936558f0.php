<section class="py-24 bg-white relative overflow-hidden">
    <!-- Faint Triangle Pattern Background (Left Side) -->
    <div class="absolute left-0 top-0 bottom-0 w-1/3 opacity-5 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, #9D2254 1px, transparent 0); background-size: 32px 32px;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center md:text-left mb-12">
            <div class="inline-flex items-center space-x-2 text-nissa-magenta font-bold tracking-widest text-sm uppercase mb-4">
                <i class="fa-solid fa-microphone-lines"></i>
                <span>Event Schedule</span>
                <i class="fa-solid fa-microphone-lines"></i>
            </div>
            <h2 class="text-5xl md:text-7xl font-black text-nissa-dark tracking-tight uppercase">The Nissa Experience</h2>
        </div>

        <div class="flex flex-col lg:flex-row gap-16 items-center">
            
            <!-- Left Side: Image with Polygon Clip -->
            <div class="w-full lg:w-1/2 relative">
                <!-- Decorative background polygon -->
                <div class="w-full aspect-[4/5] bg-nissa-dark" style="clip-path: polygon(0% 0%, 85% 0%, 100% 50%, 85% 100%, 0% 100%);">
                    <!-- The actual image inside with a slight margin to create a border effect -->
                    <div class="absolute inset-2 bg-gray-200" style="clip-path: polygon(0% 0%, 84% 0%, 99% 50%, 84% 100%, 0% 100%);">
                        <img src="https://images.unsplash.com/photo-1541845157-a6d2d100c931?auto=format&fit=crop&q=80&w=800" alt="Nissa Awards Event" class="w-full h-full object-cover">
                        <!-- Dark overlay at the bottom for dramatic effect -->
                        <div class="absolute bottom-0 w-full h-1/3 bg-gradient-to-t from-nissa-dark to-transparent opacity-80"></div>
                        <div class="absolute bottom-8 left-8 border border-nissa-magenta p-4 backdrop-blur-sm bg-black/40">
                            <h3 class="text-white font-bold text-2xl uppercase leading-tight">Nissa<br>Awards<br><span class="text-nissa-pink">2026</span></h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Event Breakdown -->
            <div class="w-full lg:w-1/2">
                <div class="mb-8">
                    <h3 class="text-nissa-dark text-xl uppercase tracking-widest font-bold opacity-70">Event</h3>
                    <h2 class="text-4xl font-black text-nissa-dark uppercase">Breakdown</h2>
                </div>

<?php
    $schedules = collect();
    if(isset($currentEdition)) {
        $schedules = \App\Models\EventSchedule::where('edition_id', $currentEdition->id)->orderBy('order', 'asc')->get();
    }
?>
                <div class="flex flex-col">
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php
                        $colors = ['nissa-magenta', 'nissa-sage', 'nissa-pink'];
                        $colorClass = $colors[$index % count($colors)];
                    ?>
                    <div class="flex items-start group <?php echo e($index > 0 ? 'mt-8' : ''); ?>">
                        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-nissa-light flex items-center justify-center text-<?php echo e($colorClass); ?> text-2xl group-hover:bg-<?php echo e($colorClass); ?> group-hover:text-white transition duration-300 shadow-sm">
                            <i class="<?php echo e($schedule->icon); ?>"></i>
                        </div>
                        <div class="ml-6 <?php echo e($loop->last ? 'pb-2' : 'pb-8 border-b border-gray-200 group-hover:border-' . $colorClass); ?> w-full transition duration-300">
                            <p class="text-nissa-dark font-bold text-sm mb-1"><?php echo e($schedule->time_range); ?></p>
                            <h4 class="text-xl font-bold text-nissa-dark mb-2"><?php echo e($schedule->title); ?></h4>
                            <p class="text-gray-500 text-sm leading-relaxed"><?php echo e($schedule->description); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-500 italic">No event schedule available for this edition yet.</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>
            </div>
            
        </div>
    </div>
</section>
<?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/components/event-schedule.blade.php ENDPATH**/ ?>