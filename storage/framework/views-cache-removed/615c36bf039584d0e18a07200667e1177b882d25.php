<?php $__env->startSection('pageTitle', __('backend/system.payments.title') ); ?>

<?php $__env->startSection('content'); ?>

    <style>
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            <div class="kt-portlet">
                                <form method="post" class="kt-form"
                                      action="<?php echo e(route('backend-system-payments-submit')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="form-group mt-5">
                                                <div style="font-size: 24px; font-weight:bold;">Available
                                                    Balance: <?php echo e($balance * $conversion_rate ?? "0.00"); ?> USD
                                                </div>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="destination_address"><?php echo e(__('backend/system.payments.destination_address')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('destination_address')): ?> is-invalid <?php endif; ?>"
                                                       id="destination_address" name="destination_address"
                                                       placeholder="abcdefghijklmnopqrstuvwxyz01234567890abcde"
                                                       value=""/>

                                                <?php if($errors->has('destination_address')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('destination_address')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label for="amount"><?php echo e(__('backend/system.payments.amount')); ?></label>
                                                <div class="input-group">
                                                    <input type="number"
                                                           step="0.01"
                                                           min="<?php echo e($minimum); ?>"
                                                           max="<?php echo e($balance * $conversion_rate - $fee_rate * $conversion_rate * 0.00000001); ?>"
                                                           class="form-control <?php if($errors->has('amount')): ?> is-invalid <?php endif; ?>"
                                                           id="amount"
                                                           name="amount"
                                                           placeholder="0.04"
                                                           <?php if(($balance * $conversion_rate) < $minimum): ?>
                                                               disabled
                                                           title="Minimum amount is 50 USD/EUR"
                                                           <?php endif; ?>
                                                           value="<?php echo e($minimum); ?>"/>
                                                    <span class="input-group-text form-control"
                                                          style="max-width: 150px;"><?php echo e($currency ?? "USD"); ?></span>

                                                </div>

                                                <?php if($errors->has('amount')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('amount')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="fee"><?php echo e(__('backend/system.payments.fee')); ?></label>
                                                <div class="input-group">
                                                    <input type="number"
                                                           step="0.000000001"
                                                           min="0.000000500"
                                                           name="feerate"
                                                           id="feerate"
                                                           class="form-control <?php if($errors->has('fee')): ?> is-invalid <?php endif; ?>"
                                                           value="<?php echo e(round($conversion_rate * ($fee_rate/100_000_000),8)); ?>"/>
                                                    <span class="input-group-text form-control"
                                                          style="max-width: 150px;"><?php echo e($currency ?? "USD"); ?></span>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot mt-5">
                                        <div class="kt-form__actions">
                                            <button type="submit"
                                                    class="btn btn-primary"><?php echo e(__('backend/system.payments.request_transfer')); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/system/payments.blade.php ENDPATH**/ ?>