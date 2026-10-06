<?php $__env->startSection('title', 'Previous Editions - Nissa Awards'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<div class="relative bg-nissa-dark pt-32 pb-20 lg:pt-40 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=2000" alt="Previous Editions Event" class="w-full h-full object-cover opacity-20 filter grayscale">
        <div class="absolute inset-0 bg-gradient-to-r from-nissa-dark via-nissa-dark/90 to-transparent"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center space-x-2 text-nissa-pink font-bold tracking-widest text-sm uppercase mb-6">
                <span class="w-8 h-0.5 bg-nissa-pink"></span>
                <span>A Legacy of Greatness</span>
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight mb-8 leading-tight">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-nissa-magenta to-nissa-pink">Previous</span> Editions.
            </h1>
            <p class="text-xl text-gray-300 font-light leading-relaxed">
                Take a look back at the incredible moments, inspiring leaders, and monumental milestones from our past ceremonies.
            </p>
        </div>
    </div>
</div>

<!-- Editions Timeline / Grid -->
<div class="py-24 bg-nissa-light relative min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($editions->count() > 0): ?>
            <div class="space-y-24">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $editions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 relative">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-nissa-magenta rounded-bl-full opacity-10"></div>
                    <div class="p-8 md:p-12">
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="text-4xl md:text-5xl font-black text-nissa-dark tracking-tight">Nissa Awards <?php echo e($edition->year); ?></h2>
                            <span class="px-6 py-2 bg-nissa-sage text-white text-sm font-bold rounded-full shadow-md">Completed</span>
                        </div>
                        <p class="text-lg text-gray-600 mb-12 max-w-3xl">The <?php echo e($edition->year); ?> edition was a spectacular celebration honoring the phenomenal women who shaped industries and broke barriers throughout the year.</p>

                        <!-- Winners of this edition -->
                        <?php
                            $editionKey = 'Nissa Awards ' . $edition->year;
                            $winners = $pastWinners->get($editionKey) ?? collect();
                        ?>
                        
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($winners->count() > 0): ?>
                            <h3 class="text-2xl font-bold text-nissa-magenta mb-6">Hall of Fame - <?php echo e($edition->year); ?></h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $winners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $winner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-nissa-light rounded-xl overflow-hidden border border-gray-200 group relative">
                                    <img src="<?php echo e($winner->image ? Storage::url($winner->image) : 'https://ui-avatars.com/api/?name='.urlencode($winner->name).'&background=f3f4f6&color=9D2254'); ?>" alt="<?php echo e($winner->name); ?>" class="w-full aspect-square object-cover group-hover:scale-105 transition duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-nissa-dark/90 to-transparent opacity-80"></div>
                                    <div class="absolute bottom-0 left-0 p-4 w-full">
                                        <h4 class="text-white font-bold text-lg leading-tight"><?php echo e($winner->name); ?></h4>
                                        <p class="text-nissa-pink text-sm"><?php echo e($winner->category_name); ?></p>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        <?php else: ?>
                            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-8 text-center text-gray-500">
                                <i class="fa-solid fa-hourglass-empty text-3xl mb-3 text-gray-300"></i>
                                <p>Winners for this edition will be updated soon.</p>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php else: ?>
            <!-- Placeholder if no previous editions exist -->
            <div class="text-center py-20 bg-white rounded-3xl shadow-sm border border-gray-100">
                <div class="w-24 h-24 bg-nissa-magenta/10 text-nissa-magenta rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                    <i class="fa-solid fa-calendar-star"></i>
                </div>
                <h3 class="text-3xl font-black text-nissa-dark mb-4">Awaiting Our First Legacy</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">We are currently building our history. As soon as the current edition concludes, its highlights and winners will be beautifully showcased here.</p>
                <a href="<?php echo e(route('vote.index')); ?>" class="mt-8 inline-block bg-nissa-magenta text-white font-bold px-8 py-3 rounded-full hover:bg-nissa-pink transition shadow-lg">View Current Edition</a>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/editions.blade.php ENDPATH**/ ?>