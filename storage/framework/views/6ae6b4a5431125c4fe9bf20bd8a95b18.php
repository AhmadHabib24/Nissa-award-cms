<?php $__env->startSection('title', 'Our Partners - Nissa Awards'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<div class="relative bg-nissa-dark pt-32 pb-20 lg:pt-40 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=2000" alt="Partners" class="w-full h-full object-cover opacity-20 filter grayscale">
        <div class="absolute inset-0 bg-gradient-to-r from-nissa-dark via-nissa-dark/90 to-transparent"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center space-x-2 text-nissa-pink font-bold tracking-widest text-sm uppercase mb-6 bg-white/10 px-4 py-2 rounded-full">
            <i class="fa-solid fa-handshake"></i>
            <span>Collaborators & Sponsors</span>
        </div>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight mb-8 leading-tight">
            Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-nissa-magenta to-nissa-pink">Partners</span>
        </h1>
        <p class="text-xl text-gray-300 font-light leading-relaxed max-w-2xl mx-auto">
            We are proud to collaborate with brands that share our vision of empowering and celebrating women's excellence.
        </p>
    </div>
</div>

<!-- Partners Grid -->
<div class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($partners->count() > 0): ?>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 md:gap-12">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($partner->link ?? '#'); ?>" target="_blank" rel="noopener noreferrer" class="group block p-8 rounded-2xl bg-nissa-light border border-gray-100 hover:shadow-xl transition duration-300 flex flex-col items-center justify-center">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($partner->logo): ?>
                            <img src="<?php echo e(Storage::url($partner->logo)); ?>" alt="<?php echo e($partner->name); ?>" class="max-h-20 max-w-full object-contain filter grayscale group-hover:grayscale-0 transition duration-500">
                        <?php else: ?>
                            <div class="w-20 h-20 bg-nissa-magenta/10 rounded-full flex items-center justify-center text-nissa-magenta font-bold text-2xl mb-4 group-hover:bg-nissa-magenta group-hover:text-white transition duration-300">
                                <?php echo e(substr($partner->name, 0, 1)); ?>

                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <h3 class="text-lg font-bold text-nissa-dark mt-4 group-hover:text-nissa-magenta transition"><?php echo e($partner->name); ?></h3>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php else: ?>
            <!-- Placeholder if no partners exist -->
            <div class="py-20 bg-nissa-light rounded-3xl shadow-sm border border-gray-100">
                <div class="w-24 h-24 bg-nissa-magenta/10 text-nissa-magenta rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <h3 class="text-3xl font-black text-nissa-dark mb-4">Partner With Us</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">We are currently welcoming new sponsors for the upcoming Nissa Awards. Join us in making a difference and showcasing your brand's commitment to empowering leaders.</p>
                <a href="#" class="mt-8 inline-block bg-nissa-dark text-white font-bold px-8 py-3 rounded-full hover:bg-nissa-magenta transition shadow-lg">Become a Sponsor</a>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/partners.blade.php ENDPATH**/ ?>