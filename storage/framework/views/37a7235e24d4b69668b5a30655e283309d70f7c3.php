

<?php $__env->startSection('content'); ?>
<style>
    .breadcrumb__area{
        display: none;
    }
</style>
    <section class="error__area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="error__content text-center">
                        <div class="error__thumb m-img mb-20">
                            <img src="<?php echo e(asset_dir('newdesign/assets/img/error/404-error.png')); ?>" alt="404"/>
                        </div>

                        <div class="error__content">
                            <h3 class="error__title"><?php echo e(__('error.404.title')); ?></h3>

                            <p><?php echo e(__('error.404.message')); ?></p>

                            <a href="<?php echo e(App\Models\Setting::get('app.url')); ?>" class="tp-btn-3">
                                <?php echo e(__('error.404.button')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\work\Figma-Laravel\LaravelScript27.06\resources\views/errors/404.blade.php ENDPATH**/ ?>