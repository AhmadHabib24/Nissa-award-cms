<?php $__env->startSection('title', 'Nissa Awards 2026 - Apply Now'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginalcc976e4d6da565a9a99c34acb03c2bd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc976e4d6da565a9a99c34acb03c2bd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hero-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc976e4d6da565a9a99c34acb03c2bd5)): ?>
<?php $attributes = $__attributesOriginalcc976e4d6da565a9a99c34acb03c2bd5; ?>
<?php unset($__attributesOriginalcc976e4d6da565a9a99c34acb03c2bd5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc976e4d6da565a9a99c34acb03c2bd5)): ?>
<?php $component = $__componentOriginalcc976e4d6da565a9a99c34acb03c2bd5; ?>
<?php unset($__componentOriginalcc976e4d6da565a9a99c34acb03c2bd5); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalfc391635b2ed9dec9765647051b1f2f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc391635b2ed9dec9765647051b1f2f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.engagement-cards','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('engagement-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc391635b2ed9dec9765647051b1f2f6)): ?>
<?php $attributes = $__attributesOriginalfc391635b2ed9dec9765647051b1f2f6; ?>
<?php unset($__attributesOriginalfc391635b2ed9dec9765647051b1f2f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc391635b2ed9dec9765647051b1f2f6)): ?>
<?php $component = $__componentOriginalfc391635b2ed9dec9765647051b1f2f6; ?>
<?php unset($__componentOriginalfc391635b2ed9dec9765647051b1f2f6); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal94478ed7c577213ae343fdb46511df34 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94478ed7c577213ae343fdb46511df34 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.event-schedule','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('event-schedule'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94478ed7c577213ae343fdb46511df34)): ?>
<?php $attributes = $__attributesOriginal94478ed7c577213ae343fdb46511df34; ?>
<?php unset($__attributesOriginal94478ed7c577213ae343fdb46511df34); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94478ed7c577213ae343fdb46511df34)): ?>
<?php $component = $__componentOriginal94478ed7c577213ae343fdb46511df34; ?>
<?php unset($__componentOriginal94478ed7c577213ae343fdb46511df34); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal1446d8c6d92ef292046237c6e60530d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1446d8c6d92ef292046237c6e60530d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image-gallery','data' => ['images' => $galleryImages]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image-gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($galleryImages)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1446d8c6d92ef292046237c6e60530d8)): ?>
<?php $attributes = $__attributesOriginal1446d8c6d92ef292046237c6e60530d8; ?>
<?php unset($__attributesOriginal1446d8c6d92ef292046237c6e60530d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1446d8c6d92ef292046237c6e60530d8)): ?>
<?php $component = $__componentOriginal1446d8c6d92ef292046237c6e60530d8; ?>
<?php unset($__componentOriginal1446d8c6d92ef292046237c6e60530d8); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginald9a447e9795324aafc0432c4de52a882 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9a447e9795324aafc0432c4de52a882 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.core-team','data' => ['teamMembers' => $teamMembers]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-team'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['teamMembers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($teamMembers)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9a447e9795324aafc0432c4de52a882)): ?>
<?php $attributes = $__attributesOriginald9a447e9795324aafc0432c4de52a882; ?>
<?php unset($__attributesOriginald9a447e9795324aafc0432c4de52a882); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9a447e9795324aafc0432c4de52a882)): ?>
<?php $component = $__componentOriginald9a447e9795324aafc0432c4de52a882; ?>
<?php unset($__componentOriginald9a447e9795324aafc0432c4de52a882); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalcdd7802330f4c8f88889dfb9ce0653e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdd7802330f4c8f88889dfb9ce0653e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.award-categories','data' => ['categories' => $categories]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('award-categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcdd7802330f4c8f88889dfb9ce0653e9)): ?>
<?php $attributes = $__attributesOriginalcdd7802330f4c8f88889dfb9ce0653e9; ?>
<?php unset($__attributesOriginalcdd7802330f4c8f88889dfb9ce0653e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcdd7802330f4c8f88889dfb9ce0653e9)): ?>
<?php $component = $__componentOriginalcdd7802330f4c8f88889dfb9ce0653e9; ?>
<?php unset($__componentOriginalcdd7802330f4c8f88889dfb9ce0653e9); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginaled83d276d0ed0615cdde5838e1f92248 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled83d276d0ed0615cdde5838e1f92248 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.featured-nominees','data' => ['nominees' => $featuredNominees]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('featured-nominees'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['nominees' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($featuredNominees)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled83d276d0ed0615cdde5838e1f92248)): ?>
<?php $attributes = $__attributesOriginaled83d276d0ed0615cdde5838e1f92248; ?>
<?php unset($__attributesOriginaled83d276d0ed0615cdde5838e1f92248); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled83d276d0ed0615cdde5838e1f92248)): ?>
<?php $component = $__componentOriginaled83d276d0ed0615cdde5838e1f92248; ?>
<?php unset($__componentOriginaled83d276d0ed0615cdde5838e1f92248); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal0c5a9ecde6d2e52263d79c3c90a736da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c5a9ecde6d2e52263d79c3c90a736da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hall-of-fame','data' => ['pastWinners' => $pastWinners]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hall-of-fame'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pastWinners' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pastWinners)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c5a9ecde6d2e52263d79c3c90a736da)): ?>
<?php $attributes = $__attributesOriginal0c5a9ecde6d2e52263d79c3c90a736da; ?>
<?php unset($__attributesOriginal0c5a9ecde6d2e52263d79c3c90a736da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c5a9ecde6d2e52263d79c3c90a736da)): ?>
<?php $component = $__componentOriginal0c5a9ecde6d2e52263d79c3c90a736da; ?>
<?php unset($__componentOriginal0c5a9ecde6d2e52263d79c3c90a736da); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal60f564c913e63257caa72df307437b9a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60f564c913e63257caa72df307437b9a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.event-partners','data' => ['partners' => $partners]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('event-partners'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['partners' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partners)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60f564c913e63257caa72df307437b9a)): ?>
<?php $attributes = $__attributesOriginal60f564c913e63257caa72df307437b9a; ?>
<?php unset($__attributesOriginal60f564c913e63257caa72df307437b9a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60f564c913e63257caa72df307437b9a)): ?>
<?php $component = $__componentOriginal60f564c913e63257caa72df307437b9a; ?>
<?php unset($__componentOriginal60f564c913e63257caa72df307437b9a); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u515053719/domains/nissaawards.com/public_html/resources/views/welcome.blade.php ENDPATH**/ ?>