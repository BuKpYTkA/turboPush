<?php
/**
 * @var \App\Models\CarInfoPage\CarInfoPage[] $carInfoPages
 */
?>



<?php $__env->startSection('content'); ?>
    <section class="content-section">
        <div class="container">
            <div class="row">

                <!-- ========== SECTION HEADER ========== -->
                <div class="col-md-12 section-header text-center">
                    <h3 class="section-title underline">Features</h3>
                    <p class="section-subtitle">What you need is what we give!</p>
                </div> <!-- end section-header -->

                <div class="col-md-4 mb50">
                    <div class="feature-box-4">
                        <div class="icon">
                            <i class="ion-ios-list-outline"></i>
                        </div>
                        <h5 class="feature-title">Well coded</h5>
                        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- end feature-box-4 -->
                </div> <!-- end col-md-4 -->
                <div class="col-md-4 mb50">
                    <div class="feature-box-4">
                        <div class="icon">
                            <i class="ion-ios-speedometer-outline"></i>
                        </div>
                        <h5 class="feature-title">SEO Friendly</h5>
                        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- end feature-box-4 -->
                </div> <!-- end col-md-4 -->
                <div class="col-md-4 mb50">
                    <div class="feature-box-4">
                        <div class="icon">
                            <i class="ion-ios-bolt"></i>
                        </div>
                        <h5 class="feature-title">Fast Performance</h5>
                        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- end feature-box-4 -->
                </div> <!-- end col-md-4 -->

                <div class="col-md-4 mb50">
                    <div class="feature-box-4">
                        <div class="icon">
                            <i class="ion-ios-checkmark-outline"></i>
                        </div>
                        <h5 class="feature-title">Professional Design</h5>
                        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- end feature-box-4 -->
                </div> <!-- end col-md-4 -->
                <div class="col-md-4 mb50">
                    <div class="feature-box-4">
                        <div class="icon">
                            <i class="ion-android-hand"></i>
                        </div>
                        <h5 class="feature-title">Dedicated Support</h5>
                        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- end feature-box-4 -->
                </div> <!-- end col-md-4 -->
                <div class="col-md-4 mb50">
                    <div class="feature-box-4">
                        <div class="icon">
                            <i class="ion-image"></i>
                        </div>
                        <h5 class="feature-title">Parallax Background</h5>
                        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- end feature-box-4 -->
                </div> <!-- end col-md-4 -->

            </div> <!-- end row -->
            <div class="text-center">
                <?php $__currentLoopData = $carInfoPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carInfoPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="a-flash" href="/brand/<?php echo e($carInfoPage->getPageAlias(), false); ?>"><img class="mb10" width="100px" height="100px"
                                src="/uploads/<?php echo e($carInfoPage->getImagePath(), false); ?>" alt="<?php echo e($carInfoPage->getBrand(), false); ?> | Twin Turbo"></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div> <!-- end container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-center">
                    <h3 class="section-title underline">Default Panels</h3>
                    <p class="section-subtitle">После бесплатной диагностики мастера предложат подходящий вид ремонтных
                        работ:</p>
                </div> <!-- end section-header -->

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title capitalize">Panel Heading</h3>
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.
                        </div> <!-- end panel-body -->
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div> <!-- end panel -->
                </div> <!-- end col-md-3 -->
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title capitalize">Panel Heading</h3>
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.
                        </div> <!-- end panel-body -->
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div> <!-- end panel -->
                </div> <!-- end col-md-3 -->
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title capitalize"></h3>
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.
                        </div> <!-- end panel-body -->
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div> <!-- end panel -->
                </div> <!-- end col-md-3 -->
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title capitalize">Panel Heading</h3>
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.
                        </div> <!-- end panel-body -->
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div> <!-- end panel -->
                </div> <!-- end col-md-3 -->

            </div> <!-- end row -->
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\turboPush\resources\views/welcome.blade.php ENDPATH**/ ?>