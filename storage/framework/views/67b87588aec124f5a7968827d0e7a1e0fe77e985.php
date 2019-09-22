<?php
/**
 * @var $metaTagContent \App\Models\MetaTag\MetaTag
 * @var $bannerImage \App\Models\BannerImage\BannerImage
 */
?>

<!doctype html>
<html class="no-js" lang="en">

<?php echo $__env->make('layouts.components.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ==================================================
Body: Classes
header-shadow - Set shadow for header & menu
dark-menu - Change menu to dark [Don't use with light-header]
light-header - Set light background to header [Don't use with dark-menu]
dark-header - Set dark background to header
bold-menu - For bolder links
semi-trans-header - set transparency to header [Use with 'light-header' or 'dark-header']
center-logo - Logo at center
small-header - For lesser height
nav-hidden - Open nav on icon click
================================================== -->
<body class="header-shadow dark-header">

<!-- ========== LOADER ========== -->
<?php echo $__env->make('layouts.components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ========== MAIN ========== -->
<!-- ========== HOME SECTION ========== -->
<!-- ========== ANIMATED PAGE TITLE ========== -->
<div class="slider-container rev_slider_wrapper">
    <div id="pageTitleHero" class="slider rev_slider pageTitleHero" data-plugin-revolution-slider data-plugin-options=''>
        <ul>
            <!-- SLIDE  -->
            <li data-index="rs-226" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off"
                data-title="Intro">
                <!-- MAIN IMAGE -->
                <img src="<?php echo e($bannerImage->getImageUrl(), false); ?>" alt="<?php echo e($metaTagContent->getTitle(), false); ?>" width="1920" height="980" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper" id="slide-226-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                     data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;" data-start="750" data-basealign="slide" data-responsive_offset="on"
                     data-responsive="off" style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 0.40);"> </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-226-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-22','-29']" data-fontsize="['50','50','50','30']"
                     data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                     style="z-index: 7; white-space: nowrap;text-transform:left;color:#fff;">
                        
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-center" id="slide-226-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','28','13']" data-width="none"
                     data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;text-transform:left;color:#fff;">
                    <h1 class="underline" style="color: white; text-align: center"><?php echo e($metaTagContent->getH1(), false); ?></h1>
                    <?php if($bannerImage->getSmallText()): ?>
                        <p style="color: white; text-align: center; font-size: 16px"><?php echo e($bannerImage->getSmallText(), false); ?></p>
                    <?php endif; ?>
                </div>

                <!-- LAYER NR. 3 -->

            </li> <!-- end slide -->
        </ul>
    </div> <!-- end pageTitleHero -->
</div> <!-- end slider-container -->

<?php echo $__env->yieldContent('content'); ?>

<!-- ==================================================
Footer: Classes
footer - Default footer
dark-footer - Dark footer [Use with .footer]
sticky-footer - Reveal footer on scroll
================================================== -->

<?php echo $__env->make('layouts.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.components.helpers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.components.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH D:\programming\OSPanel\OSPanel\domains\turboPush\resources\views/layouts/staticPage.blade.php ENDPATH**/ ?>