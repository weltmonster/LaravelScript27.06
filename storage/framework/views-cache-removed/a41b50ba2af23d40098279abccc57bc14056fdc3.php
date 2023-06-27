<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('pageTitle', __('backend/orders.show.title', ['id' => $order->id]) ); ?>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bold"><?php echo e(__('backend/orders.title')); ?></div>
                    <br>
                    <!--end::Card title-->


                </div>
                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex flex-stack position-relative mt-6">
                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                        <div class="fw-semibold ms-5">
                            <div class="fs-7 mb-1"><?php echo e($note->getDateTime()); ?>

                            </div>
                            <a href="#"
                               class="fs-5 fw-bold text-dark text-hover-primary mb-2"> <?php echo e(strlen($note->note) > 0 ? decrypt($note->note) : ''); ?>

                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="<?php echo e(route('backend-orders-add-note-form', ['id' => $order->id])); ?>"
                      id="kt_project_settings_form" class="form">
                    <?php echo csrf_field(); ?>
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-semibold mt-2 mb-3"><?php echo e(__('backend/orders.note_input')); ?></div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row">
                                <textarea class="form-control <?php if($errors->has('order_note')): ?> is-invalid <?php endif; ?>"
                                          name="order_note" id="order_note"
                                          placeholder=""><?php echo e(old('order_note')); ?></textarea>
                                <?php if($errors->has('order_note')): ?>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                <strong><?php echo e($errors->first('order_note')); ?></strong>
                            </span>
                                <?php endif; ?>
                            </div>
                            <!--begin::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary"
                                id="kt_project_settings_submit"><?php echo e(__('backend/orders.add_note')); ?></button>
                    </div>
                    <!--end::Card footer-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/orders/show.blade.php ENDPATH**/ ?>