<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $currentRoute = request()->route() ? request()->route()->getName() : null;
        $currentUrl = '/'.request()->path();
        $seo = \App\Models\SeoSetting::where(function($query) use ($currentRoute, $currentUrl) {
            if ($currentRoute) {
                $query->where('route_name', $currentRoute);
            }
            $query->orWhere('url', $currentUrl);
        })->first();
    ?>

    <title><?php echo e($seo ? $seo->title : View::yieldContent('title', 'Nissa Awards')); ?></title>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->description): ?><meta name="description" content="<?php echo e($seo->description); ?>"><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->keywords): ?><meta name="keywords" content="<?php echo e($seo->keywords); ?>"><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->robots): ?><meta name="robots" content="<?php echo e($seo->robots); ?>"><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->canonical_url): ?><link rel="canonical" href="<?php echo e($seo->canonical_url); ?>"><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
        <!-- Open Graph -->
        <meta property="og:title" content="<?php echo e($seo->og_title ?? $seo->title); ?>">
        <meta property="og:description" content="<?php echo e($seo->og_description ?? $seo->description); ?>">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->og_image): ?><meta property="og:image" content="<?php echo e(asset('storage/'.$seo->og_image)); ?>"><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <meta property="og:url" content="<?php echo e(url()->current()); ?>">
        <meta property="og:type" content="website">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="<?php echo e($seo->twitter_card ?? 'summary_large_image'); ?>">
        <meta name="twitter:title" content="<?php echo e($seo->og_title ?? $seo->title); ?>">
        <meta name="twitter:description" content="<?php echo e($seo->og_description ?? $seo->description); ?>">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->og_image): ?><meta name="twitter:image" content="<?php echo e(asset('storage/'.$seo->og_image)); ?>"><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->schema_markup): ?>
            <script type="application/ld+json">
                <?php echo $seo->schema_markup; ?>

            </script>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/nisaalogo.png')); ?>">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        .clip-logo {
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
        }
        .clip-nav {
            clip-path: polygon(5% 0, 100% 0, 100% 100%, 0% 100%);
        }
    </style>
</head>
<body class="font-sans antialiased text-nissa-dark bg-nissa-light relative" x-data="{ searchOpen: false }">
    
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fixed Left Social Bar -->
    <div class="hidden md:flex fixed left-0 top-1/2 transform -translate-y-1/2 z-50 bg-nissa-dark text-white rounded-r-3xl py-6 px-3 flex-col space-y-6 shadow-xl">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($socialLinks)): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($link->url); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-nissa-pink transition"><i class="<?php echo e($link->icon); ?> text-lg"></i></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <!-- Fancy Absolute Header (Top only) -->
    <header class="absolute top-0 w-full z-40 pt-4 px-4 md:px-8">
        <div class="max-w-7xl mx-auto flex items-stretch h-20 md:h-24">
            <!-- Logo Area (White with angled cut & radius) -->
            <div class="bg-white w-1/3 md:w-1/4 clip-logo rounded-l-2xl flex items-center justify-start pl-6 md:pl-10 z-20 shadow-lg relative">
                <a href="/" class="flex flex-col">
                    <span class="text-xl md:text-3xl font-extrabold text-nissa-magenta leading-none">NISSA</span>
                    <span class="text-sm md:text-md font-bold text-nissa-sage tracking-widest leading-none mt-1">AWARDS</span>
                </a>
            </div>
            <!-- Navigation Area (Magenta with angled cut & radius) -->
            <div class="bg-nissa-magenta flex-grow clip-nav rounded-r-2xl flex items-center justify-between px-8 md:px-16 -ml-8 z-10 shadow-lg relative">
                <nav class="hidden lg:flex space-x-6 text-white font-medium text-sm">
                    <a href="/" class="hover:text-nissa-pink transition">Home</a>
                    <a href="<?php echo e(route('about')); ?>" class="hover:text-nissa-pink transition">About Us</a>
                    <a href="<?php echo e(route('editions.index')); ?>" class="hover:text-nissa-pink transition">Previous Editions</a>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($currentEdition)): ?>
                        <a href="<?php echo e(route('edition.detail', $currentEdition->year)); ?>" class="hover:text-nissa-pink transition">Nissa <?php echo e($currentEdition->year); ?></a>
                    <?php else: ?>
                        <a href="#" class="hover:text-nissa-pink transition">Nissa Awards</a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <a href="<?php echo e(route('partners.index')); ?>" class="hover:text-nissa-pink transition">Partners</a>
                </nav>
                <div class="flex items-center space-x-4 ml-auto">
                    <button @click="searchOpen = true" class="text-white hover:text-nissa-pink"><i class="fa-solid fa-search"></i></button>
                    <a href="<?php echo e(route('vote.index')); ?>" class="bg-white text-nissa-magenta font-bold px-6 py-2 rounded-full text-sm hover:bg-nissa-pink hover:text-white transition shadow-md">VOTE NOW</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Sticky Full-Width Header (Appears on scroll) -->
    <header x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 200)"
            :class="scrolled ? 'translate-y-0' : '-translate-y-full'"
            class="fixed top-0 w-full z-50 bg-white shadow-md transition-transform duration-500 ease-in-out">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="/" class="flex flex-col">
                <span class="text-xl md:text-2xl font-extrabold text-nissa-magenta leading-none">NISSA</span>
                <span class="text-xs md:text-sm font-bold text-nissa-sage tracking-widest leading-none mt-1">AWARDS</span>
            </a>
            <!-- Nav -->
            <nav class="hidden lg:flex space-x-8 text-nissa-dark font-medium text-sm">
                <a href="/" class="hover:text-nissa-magenta transition">Home</a>
                <a href="<?php echo e(route('about')); ?>" class="hover:text-nissa-magenta transition">About Us</a>
                <a href="<?php echo e(route('editions.index')); ?>" class="hover:text-nissa-magenta transition">Previous Editions</a>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($currentEdition)): ?>
                    <a href="<?php echo e(route('edition.detail', $currentEdition->year)); ?>" class="hover:text-nissa-magenta transition">Nissa <?php echo e($currentEdition->year); ?></a>
                <?php else: ?>
                    <a href="#" class="hover:text-nissa-magenta transition">Nissa Awards</a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <a href="<?php echo e(route('partners.index')); ?>" class="hover:text-nissa-magenta transition">Partners</a>
            </nav>
            <div class="flex items-center space-x-4">
                <button @click="searchOpen = true" class="text-nissa-dark hover:text-nissa-magenta"><i class="fa-solid fa-search"></i></button>
                <a href="<?php echo e(route('vote.index')); ?>" class="bg-nissa-magenta text-white font-bold px-6 py-2 rounded-full text-sm hover:bg-nissa-pink transition shadow-md">VOTE NOW</a>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Pre-Footer CTA -->
    <div class="bg-white py-12 relative z-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-nissa-dark rounded-[3rem] py-16 px-8 text-center shadow-2xl overflow-hidden border-4 border-nissa-magenta">
                <!-- Decorative splash behind -->
                <div class="absolute -top-10 -left-10 w-64 h-64 bg-nissa-pink rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-nissa-sage rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
                
                <h2 class="relative z-10 text-3xl md:text-5xl font-black text-white mb-8 tracking-tight">Join the Celebration of Women's Excellence</h2>
                <div class="relative z-10 flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="<?php echo e(route('sponsor')); ?>" class="bg-nissa-magenta text-white hover:bg-nissa-pink px-10 py-4 rounded-full font-bold transition shadow-lg w-full sm:w-auto uppercase tracking-wider text-sm">Become a Sponsor</a>
                    <a href="<?php echo e(route('vote.index')); ?>" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-nissa-dark px-10 py-4 rounded-full font-bold transition shadow-lg w-full sm:w-auto uppercase tracking-wider text-sm">Nominate Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-nissa-dark text-white pt-24 pb-0 relative overflow-hidden -mt-24 z-10">
        <!-- Abstract wave background -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="w-full h-full">
                <path d="M0,50 C30,80 70,20 100,50 L100,100 L0,100 Z" fill="currentColor"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-16 pb-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Column 1: Logo & About -->
                <div class="col-span-1 md:col-span-1">
                    <a href="/" class="flex flex-col mb-6">
                        <span class="text-3xl font-extrabold text-nissa-magenta leading-none">NISSA</span>
                        <span class="text-sm font-bold text-nissa-sage tracking-widest leading-none mt-1">AWARDS</span>
                    </a>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                        The Nissa Awards is an annual celebration honoring visionary women who are shaping the future and empowering communities worldwide.
                    </p>
                    <div class="flex space-x-4">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($socialLinks)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($link->url); ?>" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-gray-600 flex items-center justify-center hover:bg-nissa-magenta hover:border-nissa-magenta transition"><i class="<?php echo e($link->icon); ?>"></i></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-span-1">
                    <h3 class="text-xl font-bold mb-6 border-b-2 border-nissa-magenta inline-block pb-2">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="<?php echo e(route('home')); ?>" class="text-gray-400 hover:text-nissa-pink transition flex items-center"><i class="fa-solid fa-angles-right text-xs mr-2 text-nissa-magenta"></i> Home</a></li>
                        <li><a href="<?php echo e(route('about')); ?>" class="text-gray-400 hover:text-nissa-pink transition flex items-center"><i class="fa-solid fa-angles-right text-xs mr-2 text-nissa-magenta"></i> About Nissa</a></li>
                        <li><a href="<?php echo e(route('sponsor')); ?>" class="text-gray-400 hover:text-nissa-pink transition flex items-center"><i class="fa-solid fa-angles-right text-xs mr-2 text-nissa-magenta"></i> Become a Sponsor</a></li>
                        <li><a href="<?php echo e(route('vote.index')); ?>" class="text-gray-400 hover:text-nissa-pink transition flex items-center"><i class="fa-solid fa-angles-right text-xs mr-2 text-nissa-magenta"></i> Vote Now</a></li>
                        <li><a href="<?php echo e(route('vote.index')); ?>" class="text-gray-400 hover:text-nissa-pink transition flex items-center"><i class="fa-solid fa-angles-right text-xs mr-2 text-nissa-magenta"></i> Nomination</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>" class="text-gray-400 hover:text-nissa-pink transition flex items-center"><i class="fa-solid fa-angles-right text-xs mr-2 text-nissa-magenta"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3 & 4: Gallery & Information -->
                <div class="col-span-1 md:col-span-2 flex flex-col md:flex-row gap-8 md:gap-12">
                    
                    
                    <div class="flex-1">
                        <h3 class="text-xl font-bold mb-6 border-b-2 border-nissa-magenta inline-block pb-2">Information</h3>
                        <div class="flex flex-col space-y-4 text-sm text-gray-400">
                            <div class="flex items-start space-x-3">
                                <i class="fa-solid fa-envelope text-nissa-magenta mt-1"></i>
                                <span><?php echo e($settings['email'] ?? 'contact@nissaawards.com'); ?></span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fa-solid fa-phone text-nissa-magenta mt-1"></i>
                                <span><?php echo e($settings['phone'] ?? '+92 309 7961212'); ?></span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fa-solid fa-location-dot text-nissa-magenta mt-1"></i>
                                <span>Event Venue: <?php echo isset($currentEdition) && $currentEdition->venue ? nl2br(e($currentEdition->venue)) : 'To be announced'; ?></span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fa-solid fa-calendar text-nissa-magenta mt-1"></i>
                                <span>Event Date: <?php echo e(isset($currentEdition) && $currentEdition->date ? \Carbon\Carbon::parse($currentEdition->date)->format('jS F Y') : 'To be announced'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="bg-nissa-magenta text-white py-4 mt-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center text-xs md:text-sm">
                <div class="mb-4 md:mb-0 font-bold">
                    Nissa Awards 2026 &copy; All rights reserved.
                </div>
                <div class="flex space-x-4">
                    <a href="<?php echo e(route('policy.shipping')); ?>" class="hover:text-nissa-dark transition">Shipping Policy</a>
                    <span class="text-white/50">|</span>
                    <a href="<?php echo e(route('policy.privacy')); ?>" class="hover:text-nissa-dark transition">Privacy & Refund Policy</a>
                    <span class="text-white/50">|</span>
                    <a href="<?php echo e(route('terms')); ?>" class="hover:text-nissa-dark transition">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Search Overlay -->
    <div x-show="searchOpen" class="fixed inset-0 z-[100] flex items-start justify-center pt-32 px-4" x-cloak style="display: none;">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-nissa-dark/90 backdrop-blur-sm" @click="searchOpen = false"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"></div>
        
        <!-- Search Box -->
        <div class="relative w-full max-w-3xl bg-white rounded-3xl shadow-2xl overflow-hidden" @click.stop
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 -translate-y-4 scale-95">
            <form action="<?php echo e(route('vote.index')); ?>" method="GET" class="flex items-center p-4">
                <i class="fa-solid fa-search text-2xl text-gray-400 ml-4"></i>
                <input type="text" name="query" placeholder="Search for nominees, categories..." class="w-full text-xl md:text-2xl border-none focus:ring-0 px-6 py-4 text-nissa-dark placeholder-gray-300" autofocus>
                <button type="button" @click="searchOpen = false" class="text-gray-400 hover:text-nissa-magenta p-4 text-2xl transition">
                    <i class="fa-solid fa-times"></i>
                </button>
            </form>
        </div>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($activeAnnouncement) && $activeAnnouncement): ?>
    <!-- Announcement Modal -->
    <div x-data="{ showAnnouncement: true }" x-show="showAnnouncement" class="fixed inset-0 z-[110] flex items-center justify-center p-4" x-cloak style="display: none;">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-nissa-dark/80 backdrop-blur-sm" @click="showAnnouncement = false"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"></div>
        
        <!-- Modal Content -->
        <div class="relative w-full max-w-lg bg-white rounded-3xl shadow-2xl p-8 md:p-12 text-center" @click.stop
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-y-8 scale-90"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 -translate-y-4 scale-95">
             
            <!-- Close Button -->
            <button @click="showAnnouncement = false" class="absolute top-4 right-4 text-gray-400 hover:text-nissa-magenta transition p-2">
                <i class="fa-solid fa-times text-xl"></i>
            </button>

            <!-- Icon -->
            <div class="w-16 h-16 bg-nissa-pink/10 text-nissa-pink rounded-full flex items-center justify-center text-3xl mx-auto mb-6 shadow-inner">
                <i class="fa-solid fa-bullhorn"></i>
            </div>
            
            <h3 class="text-2xl md:text-3xl font-black text-nissa-dark mb-4 leading-tight"><?php echo e($activeAnnouncement->title); ?></h3>
            <p class="text-gray-600 mb-8 leading-relaxed">
                <?php echo e($activeAnnouncement->content); ?>

            </p>
            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($activeAnnouncement->link): ?>
            <a href="<?php echo e($activeAnnouncement->link); ?>" target="_blank" rel="noopener noreferrer" class="inline-block w-full bg-nissa-magenta text-white font-bold py-4 rounded-full hover:bg-nissa-pink transition shadow-lg uppercase tracking-wider text-sm">
                <?php echo e($activeAnnouncement->link_text ?? 'Learn More'); ?>

            </a>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Mobile Bottom Navigation (App-like) -->
    <div class="lg:hidden fixed bottom-0 left-0 w-full bg-nissa-dark border-t border-gray-800 z-[100] pb-4 pt-3 px-4 flex justify-between items-center text-xs text-gray-400 shadow-[0_-4px_10px_-1px_rgba(0,0,0,0.3)] rounded-t-3xl">
        <a href="<?php echo e(route('home')); ?>" class="flex flex-col items-center justify-center w-1/5 hover:text-nissa-pink <?php echo e(request()->routeIs('home') ? 'text-nissa-magenta' : ''); ?> transition">
            <i class="fa-solid fa-home text-xl mb-1"></i>
            <span class="text-[10px] mt-1 font-medium">Home</span>
        </a>
        <a href="<?php echo e(route('about')); ?>" class="flex flex-col items-center justify-center w-1/5 hover:text-nissa-pink <?php echo e(request()->routeIs('about') ? 'text-nissa-magenta' : ''); ?> transition">
            <i class="fa-solid fa-info-circle text-xl mb-1"></i>
            <span class="text-[10px] mt-1 font-medium">About</span>
        </a>
        <a href="<?php echo e(route('vote.index')); ?>" class="flex flex-col items-center justify-center w-1/5 hover:text-nissa-pink <?php echo e(request()->routeIs('vote.*') ? 'text-nissa-magenta' : ''); ?> transition relative">
            <div class="absolute -top-10 bg-nissa-magenta text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg border-4 border-nissa-light">
                <i class="fa-solid fa-check-to-slot text-2xl"></i>
            </div>
            <span class="mt-6 font-bold text-[10px] <?php echo e(request()->routeIs('vote.*') ? 'text-nissa-magenta' : ''); ?>">Vote</span>
        </a>
        <a href="<?php echo e(route('sponsor')); ?>" class="flex flex-col items-center justify-center w-1/5 hover:text-nissa-pink <?php echo e(request()->routeIs('sponsor') ? 'text-nissa-magenta' : ''); ?> transition">
            <i class="fa-solid fa-handshake text-xl mb-1"></i>
            <span class="text-[10px] mt-1 font-medium">Sponsor</span>
        </a>
        <a href="<?php echo e(route('contact')); ?>" class="flex flex-col items-center justify-center w-1/5 hover:text-nissa-pink <?php echo e(request()->routeIs('contact') ? 'text-nissa-magenta' : ''); ?> transition">
            <i class="fa-solid fa-envelope text-xl mb-1"></i>
            <span class="text-[10px] mt-1 font-medium">Contact</span>
        </a>
    </div>

    <style>
        @media (max-width: 1024px) {
            body { padding-bottom: 5.5rem !important; }
        }
    </style>
</body>
</html>
<?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>