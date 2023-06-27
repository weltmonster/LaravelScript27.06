<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('breadcrumb'); ?>

        <style>

            footer {
                bottom: -15px !important;
            }

        </style>


        <div class="container">
            <div class="row" style="margin-top: 5%;">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content text-center">
                        <h3 class="breadcrumb__title">Support</h3>
                        <div class="breadcrumb__list">
                            <span><a href="<?php echo e(route('home')); ?>">Home</a></span>
                            <span class="dvdr tp-dot"><i class="fa-solid fa-period"></i></span>
                            <span>Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <section class="faq__area pb-110 pt-60">
        <div class="container tp-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq__tab-content">
                        <div class="accordion" id="sale-accordion">
                            <?php if(isset($faq)): ?>
                                <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading<?php echo e($key); ?>">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($key); ?>"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                <?php echo e($value->question); ?>

                                            </button>
                                        </h2>
                                        <div id="collapse<?php echo e($key); ?>" class="accordion-collapse collapse"
                                             aria-labelledby="heading<?php echo e($key); ?>" data-bs-parent="#sale-accordion">
                                            <div class="accordion-body">

                                                <p><?php echo e($value->answer); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/frontend/faq/newfaq.blade.php ENDPATH**/ ?>