<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('pageTitle', __('backend/jabber.title')); ?>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bold"><?php echo e(__('backend/jabber.newsletter.title')); ?></div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Form-->
                <form method="POST" action="<?php echo e(route('backend-jabber-newsletter-form')); ?>" id="kt_project_settings_form"
                      class="form">
                    <?php echo csrf_field(); ?>
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--end::Row-->
                        <?php if($errors->has('jabber_message')): ?>
                            <span class="invalid-feedback" style="display:block" role="alert">
                        <strong><?php echo e($errors->first('jabber_message')); ?></strong>
                    </span>
                        <?php endif; ?>
                        <!--end::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div
                                    class="fs-6 fw-semibold mt-2 mb-3"><?php echo e(__('backend/jabber.newsletter.message')); ?></div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row">
                                <textarea class="form-control <?php if($errors->has('jabber_message')): ?> is-invalid <?php endif; ?>"
                                          name="jabber_message" id="jabber_message"
                                          placeholder="<?php echo e(__('backend/jabber.newsletter.type_here')); ?>"><?php echo e(old('jabber_message')); ?></textarea>

                            </div>
                            <!--begin::Col-->
                        </div>
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
    <!-- ---------------------------------------------------------------------------------------- -->
    <?php if(Auth::user()->hasPermission('jabber_login')): ?>
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title fs-3 fw-bold"> <?php echo e(__('backend/jabber.login.title')); ?></div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Form-->
                    <form method="POST" action="<?php echo e(route('backend-jabber-login-form')); ?>" class="form">
                        <?php echo csrf_field(); ?>

                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <div class="row mb-8">
                                <div class="col-xl-3">
                                    <div
                                        class="fs-6 fw-semibold mt-2 mb-3"> <?php echo e(__('backend/jabber.login.address')); ?></div>
                                </div>
                                <div class="col-xl-9 fv-row">
                                    <input type="text"
                                           class=" form-control-solid form-control <?php if($errors->has('jabber_address')): ?> is-invalid <?php endif; ?>"
                                           name="jabber_address" id="jabber_address"
                                           placeholder="<?php echo e(__('backend/jabber.login.address_placeholder')); ?>"
                                           value="<?php echo e(App\Models\Setting::get('jabber.address')); ?>"/>
                                </div>
                                <?php if($errors->has('jabber_address')): ?>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                            <strong><?php echo e($errors->first('jabber_address')); ?></strong>
                        </span>
                                <?php endif; ?>
                            </div>
                            <div class="row mb-8">
                                <div class="col-xl-3">
                                    <div
                                        class="fs-6 fw-semibold mt-2 mb-3"> <?php echo e(__('backend/jabber.login.username')); ?></div>
                                </div>
                                <div class="col-xl-9 fv-row">
                                    <input type="text"
                                           class="form-control-solid form-control <?php if($errors->has('jabber_username')): ?> is-invalid <?php endif; ?>"
                                           name="jabber_username" id="jabber_username"
                                           placeholder="<?php echo e(__('backend/jabber.login.username')); ?>"
                                           value="<?php echo e(App\Models\Setting::get('jabber.username')); ?>"/>
                                </div>
                                <?php if($errors->has('jabber_username')): ?>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                            <strong><?php echo e($errors->first('jabber_username')); ?></strong>
                        </span>
                                <?php endif; ?>
                            </div>
                            <div class="row mb-8">
                                <div class="col-xl-3">
                                    <div
                                        class="fs-6 fw-semibold mt-2 mb-3"> <?php echo e(__('backend/jabber.login.password')); ?> </div>
                                </div>
                                <div class="col-xl-9 fv-row">
                                    <input type="text"
                                           class="form-control-solid form-control <?php if($errors->has('jabber_password')): ?> is-invalid <?php endif; ?>"
                                           name="jabber_password" id="jabber_password"
                                           placeholder="<?php echo e(__('backend/jabber.login.password')); ?>"
                                           value="<?php echo e(App\Models\Setting::get('jabber.password')); ?>"/>

                                </div>
                                <?php if($errors->has('jabber_password')): ?>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                            <strong><?php echo e($errors->first('jabber_password')); ?></strong>
                        </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/jabber.blade.php ENDPATH**/ ?>