<?php
    $sliders = \App\Models\Slider::where('is_active', true)->get();
    
    $showTimer = false;
    $targetDate = null;
    if(isset($currentEdition) && $currentEdition->date) {
        $eventDate = \Carbon\Carbon::parse($currentEdition->date);
        if($eventDate->isFuture()) {
            $showTimer = true;
            // E.g., "Oct 15, 2026 00:00:00"
            $targetDate = $eventDate->format('M d, Y H:i:s');
        }
    }
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sliders->count() > 0): ?>
<section x-data="{ currentSlide: 0, totalSlides: <?php echo e($sliders->count()); ?> }" 
         x-init="setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides }, 5000)"
         class="relative w-full h-screen bg-nissa-dark overflow-hidden flex items-center">
    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div x-show="currentSlide === <?php echo e($index); ?>"
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-105"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-1000 absolute inset-0"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute inset-0 z-0 w-full h-full">
         
        <!-- Background Image & Overlay -->
        <img src="<?php echo e($slider->image ? asset('storage/' . $slider->image) : asset('images/nissabanner.jpeg')); ?>" alt="Hero Banner" class="absolute inset-0 w-full h-full object-cover opacity-70" />
        <div class="absolute inset-0 bg-gradient-to-r from-nissa-dark via-nissa-dark/80 to-transparent"></div>
        
        <!-- Abstract SVG decorative shape -->
        <div class="absolute top-0 left-0 h-full w-1/3 z-0 pointer-events-none opacity-40">
            <svg viewBox="0 0 500 1000" preserveAspectRatio="none" class="h-full w-full">
                <path d="M0,0 C150,300 350,700 0,1000 L0,0 Z" fill="#9D2254" />
                <path d="M0,0 C300,400 150,800 0,1000 L0,0 Z" fill="#DE8B9E" opacity="0.5" />
            </svg>
        </div>

        <div class="absolute inset-0 z-10 pointer-events-none flex items-center justify-center">
            <div class="w-full max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between mt-16">
                <!-- Left Side: Main Text -->
                <div class="max-w-3xl text-white pointer-events-auto">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-4 tracking-tight leading-tight">
                        <?php echo nl2br(e($slider->title)); ?>

                    </h1>
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($slider->subtitle): ?>
                    <div class="flex items-center space-x-2 text-lg md:text-xl font-light mb-8 text-gray-200">
                        <span><?php echo e($slider->subtitle); ?></span>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($slider->button_text): ?>
                    <a href="<?php echo e($slider->button_link ?? '#'); ?>" class="inline-block bg-nissa-magenta text-white font-bold px-8 py-3 rounded-full hover:bg-nissa-pink transition shadow-lg text-lg">
                        <?php echo e($slider->button_text); ?>

                    </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Right Side: Fixed Countdown Timer on top of all slides -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($showTimer): ?>
    <div class="absolute inset-0 z-20 pointer-events-none flex items-center justify-center">
        <div class="w-full max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-end mt-16">
            <div x-data="countdown('<?php echo e($targetDate); ?>')" class="hidden lg:flex flex-col space-y-4 pointer-events-auto">
                <div class="bg-black/40 backdrop-blur-md border border-white/10 rounded-xl p-4 text-center text-white w-28 shadow-2xl">
                    <div class="text-3xl font-extrabold text-white" x-text="days">00</div>
                    <div class="text-xs font-bold tracking-wider text-nissa-pink uppercase mt-1">Days</div>
                </div>
                <div class="bg-black/40 backdrop-blur-md border border-white/10 rounded-xl p-4 text-center text-white w-28 shadow-2xl">
                    <div class="text-3xl font-extrabold text-white" x-text="hours">00</div>
                    <div class="text-xs font-bold tracking-wider text-nissa-pink uppercase mt-1">Hours</div>
                </div>
                <div class="bg-black/40 backdrop-blur-md border border-white/10 rounded-xl p-4 text-center text-white w-28 shadow-2xl">
                    <div class="text-3xl font-extrabold text-white" x-text="minutes">00</div>
                    <div class="text-xs font-bold tracking-wider text-nissa-pink uppercase mt-1">Minutes</div>
                </div>
                <div class="bg-black/40 backdrop-blur-md border border-white/10 rounded-xl p-4 text-center text-white w-28 shadow-2xl">
                    <div class="text-3xl font-extrabold text-nissa-magenta" x-text="seconds">00</div>
                    <div class="text-xs font-bold tracking-wider text-nissa-pink uppercase mt-1">Seconds</div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Slide Indicators -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sliders->count() > 1): ?>
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3 pointer-events-auto">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button @click="currentSlide = <?php echo e($index); ?>" 
                :class="currentSlide === <?php echo e($index); ?> ? 'bg-nissa-magenta w-8' : 'bg-white/50 w-3 hover:bg-white'"
                class="h-3 rounded-full transition-all duration-300"></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</section>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($showTimer): ?>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('countdown', (targetDate) => ({
            days: '00',
            hours: '00',
            minutes: '00',
            seconds: '00',
            init() {
                const countDownDate = new Date(targetDate).getTime();
                setInterval(() => {
                    const now = new Date().getTime();
                    const distance = countDownDate - now;
                    if (distance < 0) return;
                    this.days = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, '0');
                    this.hours = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
                    this.minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                    this.seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');
                }, 1000);
            }
        }));
    });
</script>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/components/hero-banner.blade.php ENDPATH**/ ?>