<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('pageTitle', __('backend/design.title') ); ?>
    <style>
        .CodeMirror-sizer {
            margin-left: 0px !important
        }
    </style>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bold"><?php echo e(__('backend/design.title')); ?></div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Form-->
                <form method="POST" action="<?php echo e(route('backend-design-form')); ?>" id="kt_project_settings_form"
                      class="form">
                    <?php echo csrf_field(); ?>
                    <!--begin::Card body-->
                    <div class="card-body p-9">

                        <div class="row mb-8">
                            <div class="col-xl-3">
                                <div class="fs-6 fw-semibold mt-2 mb-3"><?php echo e(__('backend/design.logo')); ?></div>
                            </div>
                            <div class="col-xl-9 fv-row">
                                <input id="logo" name="logo" class=" form-control-solid form-control"
                                       value="<?php echo e(App\Models\Setting::get('theme.logo')); ?>"/>

                            </div>
                            <?php if($errors->has('logo')): ?>
                                <span class="invalid-feedback" style="display:block;" role="alert">
                            <strong><?php echo e($errors->first('logo')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>

                        <div class="row mb-8">
                            <div class="col-xl-3">
                                <div class="fs-6 fw-semibold mt-2 mb-3"><?php echo e(__('backend/design.favicon')); ?></div>
                            </div>
                            <div class="col-xl-9 fv-row">
                                <input id="favicon" name="favicon" class=" form-control-solid form-control"
                                       value="<?php echo e(App\Models\Setting::get('theme.favicon')); ?>"/>
                            </div>
                            <?php if($errors->has('favicon')): ?>
                                <span class="invalid-feedback" style="display:block;" role="alert">
                            <strong><?php echo e($errors->first('favicon')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>
                        <div class="row mb-8">
                            <div class="col-xl-3">
                                <div class="fs-6 fw-semibold mt-2 mb-3"><?php echo e(__('backend/design.background')); ?></div>
                            </div>
                            <div class="col-xl-9 fv-row">
                                <input id="background" name="background" class=" form-control-solid form-control"
                                       value="<?php echo e(App\Models\Setting::get('theme.background')); ?>"/>

                            </div>
                            <?php if($errors->has('background')): ?>
                                <span class="invalid-feedback" style="display:block;" role="alert">
                            <strong><?php echo e($errors->first('background')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>

                        <div class="row mb-8">
                            <div class="col-xl-3">
                                <div class="fs-6 fw-semibold mt-2 mb-3"><?php echo e(__('backend/design.pattern')); ?></div>
                            </div>
                            <div class="col-xl-9 fv-row">
                                <input id="pattern" name="pattern" class=" form-control-solid form-control"
                                       value="<?php echo e(App\Models\Setting::get('theme.color1')); ?>"/>

                            </div>
                            <?php if($errors->has('pattern')): ?>
                                <span class="invalid-feedback" style="display:block;" role="alert">
                            <strong><?php echo e($errors->first('pattern')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>

                        <!--<div class="row mb-8">-->
                        <!--begin::Col-->
                        <!--    <div class="col-xl-3">-->
                        <!--        <div class="fs-6 fw-semibold mt-2 mb-3"> <?php echo e(__('backend/design.custom_css')); ?> </div>-->
                        <!--    </div>-->

                        <!--end::Col-->
                        <!--begin::Col-->
                        <!--    <div class="col-xl-9 fv-row">-->
                        <!--        <textarea id="custom_css" name="custom_css"><?php echo e(App\Models\Setting::get('theme.custom.css')); ?></textarea>-->

                        <!--    </div>-->
                        <!--    <?php if($errors->has('custom_css')): ?>-->
                        <!--    <span class="invalid-feedback" style="display:block;" role="alert">-->
                        <!--        <strong><?php echo e($errors->first('custom_css')); ?></strong>-->
                        <!--    </span>-->
                        <!--    <?php endif; ?>-->
                        <!--begin::Col-->
                        <!--</div>-->
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary"
                                id="kt_project_settings_submit"> <?php echo e(__('backend/jabber.newsletter.submit_button')); ?></button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/addon/hint/show-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/addon/hint/css-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/mode/htmlmixed/htmlmixed.min.js"></script>
    <script src=""></script>
    <script>
        CodeMirror.fromTextArea(document.getElementById('custom_css'), {
            lineNumbers: true,
            mode: 'css',
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/design/design.blade.php ENDPATH**/ ?>