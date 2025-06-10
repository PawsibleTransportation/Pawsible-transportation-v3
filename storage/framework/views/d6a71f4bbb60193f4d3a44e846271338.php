    <ul <?php echo e($attributes->class(["menu w-full"])); ?> >
        <?php if($title): ?>
            <li class="menu-title text-inherit uppercase">
                <div class="flex items-center gap-2">

                    <?php if($icon): ?>
                        <?php if (isset($component)) { $__componentOriginalce0070e6ae017cca68172d0230e44821 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce0070e6ae017cca68172d0230e44821 = $attributes; } ?>
<?php $component = Mary\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mary-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Mary\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['inline-flex', $iconClasses]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce0070e6ae017cca68172d0230e44821)): ?>
<?php $attributes = $__attributesOriginalce0070e6ae017cca68172d0230e44821; ?>
<?php unset($__attributesOriginalce0070e6ae017cca68172d0230e44821); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0070e6ae017cca68172d0230e44821)): ?>
<?php $component = $__componentOriginalce0070e6ae017cca68172d0230e44821; ?>
<?php unset($__componentOriginalce0070e6ae017cca68172d0230e44821); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php echo e($title); ?>

                </div>
            </li>
        <?php endif; ?>

        <?php if($separator): ?>
            <hr class="mb-3 border-t-[length:var(--border)] border-base-content/10" />
        <?php endif; ?>

        <?php echo e($slot); ?>

    </ul><?php /**PATH /home/itsmenewbie03/Desktop/WareHouse/PHP/Laravel/pawsible-transportation-v2/storage/framework/views/ee435d5062a18670e6accdeab52cd617.blade.php ENDPATH**/ ?>