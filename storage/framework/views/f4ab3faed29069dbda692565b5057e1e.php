<?php $__env->startSection('title', 'Contact Us - Nissa Awards'); ?>

<?php $__env->startSection('content'); ?>
<div class="relative bg-nissa-dark pt-32 pb-20 lg:pt-40 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo e(asset('images/nissabanner.jpeg')); ?>" alt="Contact Nissa Awards" class="w-full h-full object-cover opacity-20">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center space-x-2 text-nissa-magenta font-bold tracking-widest text-sm uppercase mb-4">
            <i class="fa-solid fa-envelope"></i>
            <span>Get in Touch</span>
            <i class="fa-solid fa-envelope"></i>
        </div>
        <h1 class="text-5xl md:text-7xl font-black text-white tracking-tight uppercase mb-6">
            Contact Us
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
            Have questions about nominations, sponsorships, or the upcoming event? We're here to help. Reach out to the Nissa Awards team.
        </p>
    </div>
</div>

<div class="py-24 bg-[#fdfaf6]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Contact Info -->
            <div class="space-y-12">
                <div>
                    <h2 class="text-4xl font-black text-nissa-dark mb-6 uppercase">Let's Talk</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">Whether you are a potential partner, a nominee, or simply want to learn more about our mission, our dedicated team is always ready to assist you.</p>
                </div>
                
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="w-16 h-16 rounded-full bg-nissa-magenta/10 flex items-center justify-center text-nissa-magenta text-2xl flex-shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="ml-6">
                            <h4 class="text-xl font-bold text-nissa-dark mb-2">Office Location</h4>
                            <p class="text-gray-600">Nishat Hotel, Emporium Mall<br>Lahore, Pakistan</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-16 h-16 rounded-full bg-nissa-sage/10 flex items-center justify-center text-nissa-sage text-2xl flex-shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="ml-6">
                            <h4 class="text-xl font-bold text-nissa-dark mb-2">Email Us</h4>
                            <p class="text-gray-600"><?php echo e($settings['email'] ?? 'contact@nissaawards.com'); ?></p>
                            <p class="text-sm text-gray-400 mt-1">We typically reply within 24 hours.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-16 h-16 rounded-full bg-nissa-pink/10 flex items-center justify-center text-nissa-pink text-2xl flex-shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="ml-6">
                            <h4 class="text-xl font-bold text-nissa-dark mb-2">Call Us</h4>
                            <p class="text-gray-600"><?php echo e($settings['phone'] ?? '+92 309 7961212'); ?></p>
                            <p class="text-sm text-gray-400 mt-1">Mon-Fri from 9am to 6pm.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form Area -->
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-nissa-magenta opacity-10 rounded-bl-full pointer-events-none"></div>
                
                <h3 class="text-2xl font-bold text-nissa-dark mb-8">Send a Message</h3>
                
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('contact-form');

$__key = null;

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1584068057-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key);

echo $__html;

unset($__html);
unset($__key);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/contact.blade.php ENDPATH**/ ?>