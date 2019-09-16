<?php
    /**
     * @var $navBarElements \App\Models\NavBarElement\NavBarElement[]
     * @var $childElement \App\Models\NavBarElement\NavBarElement
     */
?>
<div class="header menu-style-2">

    <div class="container-fluid">
        <div class="menu" id="menu">

            <!-- ========== Logo ========== -->
            <div class="logo">
                <a href="/"><img src="<?php echo e(asset('frontEnd'), false); ?>/images/logo-dark.png" alt="Salt" class="logo-img"></a>
            </div> <!-- end logo -->

            <!-- ========== main-menu ========== -->
            <ul class="main-menu">
                <?php $__currentLoopData = $navBarElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navBarElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!$navBarElement->hasParent()): ?>
                        <li class="menu-item"><a href="<?php echo e($navBarElement->getLink(), false); ?>" <?php echo e($navBarElement->hasChildren() ? 'data-scroll' : '', false); ?>><i class="menu-icon fa <?php echo e($navBarElement->getIcon(), false); ?>"></i> <?php echo e($navBarElement->getText(), false); ?></a>
                        <?php if($navBarElement->hasChildren()): ?>
                            <ul class="mega-submenu normal-sub">
                                <?php $__currentLoopData = $navBarElement->getChild()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($childElement->getLink(), false); ?>"><i class="fa <?php echo e($childElement->getIcon(), false); ?>"></i> <?php echo e($childElement->getText(), false); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class=" menu-item left-separator"><a href="#"><i class="menu-icon fa fa-facebook"></i> Facebook</a></li>
                <li class="menu-item"><a href="#"><i class="menu-icon fa fa-twitter"></i> Twitter</a></li>
            </ul> <!-- end main-menu -->

        </div> <!-- end menu -->
    </div> <!-- end container-fluid -->
</div> <!-- end header --><?php /**PATH C:\OSPanel\domains\turboPush\resources\views/layouts/components/navbar.blade.php ENDPATH**/ ?>