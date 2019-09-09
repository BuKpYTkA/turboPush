<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('adminPanel.pageContent')); ?>" method="post">
            <textarea name="content" id="input" cols="30" rows="10"><?php echo e($content); ?></textarea>
            <?php echo e(csrf_field()); ?>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="<?php echo e(URL::to('src/js/vendor/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>
    <script>
        var editor_config = {
            path_absolute: "<?php echo e(URL::to('/')); ?>/",
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.grtElementByTagName('body')[0].clientHeight;
                var cmsURL = editor_config.path_absolute + 'laravel-filemanaget?field_name' + field_name;
                if (type = 'image') {
                    cmsURL = cmsURL + '&type=Images';
                } else {
                    cmsUrl = cmsURL + '&type=Files';
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizeble: 'yes',
                    close_previous: 'no'
                });
            }
        };

        tinymce.init(editor_config);
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\turboPush\resources\views/adminPanel/pageContent/pageContent.blade.php ENDPATH**/ ?>