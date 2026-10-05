<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['images' => collect()]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['images' => collect()]); ?>
<?php foreach (array_filter((['images' => collect()]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<section class="w-full">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-0 w-full">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($images->count() > 0): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="<?php echo e(Storage::url($image->image)); ?>" alt="<?php echo e($image->title ?? 'Event Gallery'); ?>" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 <?php echo e(['bg-nissa-magenta', 'bg-nissa-sage', 'bg-nissa-pink', 'bg-nissa-dark'][$loop->index % 4]); ?> opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php else: ?>
            <!-- Gallery Image 1 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-magenta opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 2 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-sage opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 3 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1475721025505-1112ffb82143?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-pink opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 4 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-dark opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 5 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-dark opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 6 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-pink opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 7 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522158637959-30385a09e0da?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-sage opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
            <!-- Gallery Image 8 -->
            <div class="w-full aspect-square relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&q=80&w=600" alt="Event Gallery" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-nissa-magenta opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/components/image-gallery.blade.php ENDPATH**/ ?>