<?php $__env->startSection('content'); ?>
<style>
    .submitBtn {
        border: 2px solid #3771fe;
        padding: 6px 39px 6px 40px;
        border-radius: 0.25rem;
    }

    .submitBtn:hover {
        background: transparent;
        border: 2px solid #3771fe;
    }

    footer {
        bottom: -15px !important;
    }

    .settings_container {
        margin-top: 80px;
    }
</style>
<section class="blog__area pb-100 pt-0">
    
    <div class="container settings_container">
        <div class="row">
            <?php echo $__env->make('frontend.common.frontmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-xxl-8 col-lg-8">
                <div class="blog__wrapper" style="padding-top: 0px;">
                    <article class="postbox__item format-image mb-40 transition-3">
                        <div class="blog__grid-tag">
                            <a href="javascript:void(0);"><?php echo e(__('frontend/user.settings')); ?></a>
                        </div>
                    </article>


                    <div class="postbox__comment-form">
                        <h3 class="postbox__comment-form-title"><?php echo e(__('frontend/user.settings_change_password')); ?></h3>
                        <form method="post" action="<?php echo e(route('settings-password-change')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="postbox__comment-input-box">
                                    <h4><?php echo e(__('frontend/user.settings_current_password')); ?> <span>*</span></h4>
                                    <div class="postbox__comment-input">
                                        <input id="settings_current_password" type="password"
                                            class="<?php echo e($errors->has('settings_current_password') ? ' is-invalid' : ''); ?>"
                                            name="settings_current_password"
                                            value="<?php echo e(old('settings_current_password')); ?>" required>

                                        <?php if($errors->has('settings_current_password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('settings_current_password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="postbox__comment-input-box">
                                    <h4><?php echo e(__('frontend/user.settings_new_password')); ?> <span>*</span></h4>
                                    <div class="postbox__comment-input">
                                        <input id="settings_new_password" type="password"
                                            class="<?php echo e($errors->has('settings_new_password') ? ' is-invalid' : ''); ?>"
                                            name="settings_new_password" value="<?php echo e(old('settings_new_password')); ?>"
                                            required>

                                        <?php if($errors->has('settings_new_password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('settings_new_password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="postbox__comment-input-box">
                                    <h4><?php echo e(__('frontend/user.settings_new_password_confirm')); ?> <span>*</span></h4>
                                    <div class="postbox__comment-input">
                                        <input id="settings_new_password_confirm" type="password"
                                            class="<?php echo e($errors->has('settings_new_password_confirm') ? ' is-invalid' : ''); ?>"
                                            name="settings_new_password_confirm"
                                            value="<?php echo e(old('settings_new_password_confirm')); ?>" required>

                                        <?php if($errors->has('settings_new_password_confirm')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('settings_new_password_confirm')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary submitBtn">
                                        <?php echo e(__('frontend/user.settings_save_submit')); ?>

                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo e(url('./assets/newdesign/assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/frontend/userpanel/newsettings.blade.php ENDPATH**/ ?>