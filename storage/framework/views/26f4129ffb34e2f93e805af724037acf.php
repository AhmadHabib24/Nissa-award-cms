<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['teamMembers' => collect()]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['teamMembers' => collect()]); ?>
<?php foreach (array_filter((['teamMembers' => collect()]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<section class="py-24 bg-nissa-dark relative overflow-hidden text-white">
    <!-- Geometric Background Pattern -->
    <div class="absolute inset-0 z-0 opacity-5 pointer-events-none">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <pattern id="polygons" width="80" height="80" patternUnits="userSpaceOnUse">
                <polygon points="40,0 80,20 80,60 40,80 0,60 0,20" fill="none" stroke="currentColor" stroke-width="1"/>
            </pattern>
            <rect width="100%" height="100%" fill="url(#polygons)" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-4 tracking-tight">Core Team</h2>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($teamMembers->count() > 0): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $teamMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl bg-white text-nissa-dark border border-white/10 <?php echo e($loop->iteration % 2 == 0 ? 'mt-0 lg:mt-8' : ''); ?>">
                    <!-- Accent borders -->
                    <div class="absolute top-6 left-6 w-12 h-1.5 <?php echo e(['bg-nissa-magenta', 'bg-nissa-pink', 'bg-nissa-sage'][$loop->index % 3]); ?> z-20 transition-all duration-300 group-hover:w-16 rounded-full"></div>
                    <div class="absolute top-6 right-6 w-1.5 h-12 <?php echo e(['bg-nissa-sage', 'bg-nissa-magenta', 'bg-nissa-pink'][$loop->index % 3]); ?> z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    <div class="absolute bottom-20 right-6 w-1.5 h-12 <?php echo e(['bg-nissa-pink', 'bg-nissa-sage', 'bg-nissa-magenta'][$loop->index % 3]); ?> z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    
                    <img src="<?php echo e($member->image ? Storage::url($member->image) : 'https://ui-avatars.com/api/?name='.urlencode($member->name).'&background=f3f4f6&color=9D2254'); ?>" alt="<?php echo e($member->name); ?>" class="w-full h-96 object-cover object-top filter grayscale group-hover:grayscale-0 transition duration-500 scale-100 group-hover:scale-105">
                    
                    <div class="absolute bottom-0 left-0 w-full bg-nissa-dark bg-opacity-95 backdrop-blur-md p-6 transform translate-y-2 group-hover:translate-y-0 transition duration-300">
                        <h4 class="text-xl font-bold text-white"><?php echo e($member->name); ?></h4>
                        <p class="text-nissa-pink text-sm font-semibold mt-1"><?php echo e($member->role); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php else: ?>
                <!-- Team Member 1 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl bg-white text-nissa-dark border border-white/10">
                    <div class="absolute top-6 left-6 w-12 h-1.5 bg-nissa-magenta z-20 transition-all duration-300 group-hover:w-16 rounded-full"></div>
                    <div class="absolute top-6 right-6 w-1.5 h-12 bg-nissa-sage z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    <div class="absolute bottom-20 right-6 w-1.5 h-12 bg-nissa-pink z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400" alt="Omer Mubeen" class="w-full h-96 object-cover object-top filter grayscale group-hover:grayscale-0 transition duration-500 scale-100 group-hover:scale-105">
                    
                    <div class="absolute bottom-0 left-0 w-full bg-nissa-dark bg-opacity-95 backdrop-blur-md p-6 transform translate-y-2 group-hover:translate-y-0 transition duration-300">
                        <h4 class="text-xl font-bold text-white">Omer Mubeen</h4>
                        <p class="text-nissa-pink text-sm font-semibold mt-1">Founder & CEO</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl bg-white text-nissa-dark border border-white/10 mt-0 lg:mt-8">
                    <div class="absolute top-6 left-6 w-12 h-1.5 bg-nissa-pink z-20 transition-all duration-300 group-hover:w-16 rounded-full"></div>
                    <div class="absolute top-6 right-6 w-1.5 h-12 bg-nissa-sage z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    <div class="absolute bottom-20 right-6 w-1.5 h-12 bg-nissa-magenta z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400" alt="Sehrish Ali" class="w-full h-96 object-cover object-top filter grayscale group-hover:grayscale-0 transition duration-500 scale-100 group-hover:scale-105">
                    
                    <div class="absolute bottom-0 left-0 w-full bg-nissa-dark bg-opacity-95 backdrop-blur-md p-6 transform translate-y-2 group-hover:translate-y-0 transition duration-300">
                        <h4 class="text-xl font-bold text-white">Sehrish Ali</h4>
                        <p class="text-nissa-pink text-sm font-semibold mt-1">Managing Director</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl bg-white text-nissa-dark border border-white/10">
                    <div class="absolute top-6 left-6 w-12 h-1.5 bg-nissa-sage z-20 transition-all duration-300 group-hover:w-16 rounded-full"></div>
                    <div class="absolute top-6 right-6 w-1.5 h-12 bg-nissa-magenta z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    <div class="absolute bottom-20 right-6 w-1.5 h-12 bg-nissa-pink z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400" alt="Haider Ahmed" class="w-full h-96 object-cover object-top filter grayscale group-hover:grayscale-0 transition duration-500 scale-100 group-hover:scale-105">
                    
                    <div class="absolute bottom-0 left-0 w-full bg-nissa-dark bg-opacity-95 backdrop-blur-md p-6 transform translate-y-2 group-hover:translate-y-0 transition duration-300">
                        <h4 class="text-xl font-bold text-white">Haider Ahmed</h4>
                        <p class="text-nissa-pink text-sm font-semibold mt-1">Creative Director</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl bg-white text-nissa-dark border border-white/10 mt-0 lg:mt-8">
                    <div class="absolute top-6 left-6 w-12 h-1.5 bg-nissa-magenta z-20 transition-all duration-300 group-hover:w-16 rounded-full"></div>
                    <div class="absolute top-6 right-6 w-1.5 h-12 bg-nissa-pink z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    <div class="absolute bottom-20 right-6 w-1.5 h-12 bg-nissa-sage z-20 transition-all duration-300 group-hover:h-16 rounded-full"></div>
                    
                    <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&q=80&w=400" alt="Obaid Arshad" class="w-full h-96 object-cover object-top filter grayscale group-hover:grayscale-0 transition duration-500 scale-100 group-hover:scale-105">
                    
                    <div class="absolute bottom-0 left-0 w-full bg-nissa-dark bg-opacity-95 backdrop-blur-md p-6 transform translate-y-2 group-hover:translate-y-0 transition duration-300">
                        <h4 class="text-xl font-bold text-white">Obaid Arshad</h4>
                        <p class="text-nissa-pink text-sm font-semibold mt-1">Event Lead</p>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/components/core-team.blade.php ENDPATH**/ ?>