<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['partners' => collect()]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['partners' => collect()]); ?>
<?php foreach (array_filter((['partners' => collect()]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<section class="py-24 bg-nissa-light relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-black text-nissa-dark mb-12 text-center md:text-left tracking-tight">Event Partners</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 border-t border-l border-gray-200">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($partners->count() > 0): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($partner->link ?? '#'); ?>" <?php echo e($partner->link ? 'target="_blank" rel="noopener"' : ''); ?> class="border-b border-r border-gray-200 p-8 flex items-center justify-center hover:shadow-2xl transition duration-500 bg-white z-10 hover:z-20 relative cursor-pointer filter grayscale hover:grayscale-0 block">
                    <img src="<?php echo e($partner->logo ? Storage::url($partner->logo) : 'https://ui-avatars.com/api/?name='.urlencode($partner->name).'&background=ffffff&color=9D2254&size=200&font-size=0.33&bold=true'); ?>" alt="<?php echo e($partner->name); ?>" class="max-h-16 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity">
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php else: ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 1; $i <= 12; $i++): ?>
                <div class="border-b border-r border-gray-200 p-8 flex items-center justify-center hover:shadow-2xl transition duration-500 bg-white z-10 hover:z-20 relative cursor-pointer filter grayscale hover:grayscale-0">
                    <img src="https://ui-avatars.com/api/?name=Partner+<?php echo e($i); ?>&background=ffffff&color=9D2254&size=200&font-size=0.33&bold=true" alt="Partner <?php echo e($i); ?>" class="max-h-16 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>
                <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/components/event-partners.blade.php ENDPATH**/ ?>