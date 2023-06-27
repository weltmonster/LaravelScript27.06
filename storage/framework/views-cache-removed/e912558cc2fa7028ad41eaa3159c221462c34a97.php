<?php $__env->startSection('content'); ?>
    <div class="k-content__head	k-grid__item">
        <div class="k-content__head-main">
            <h3 class="k-content__head-title">Datenbankeintrag bearbeiten</h3>
            <div class="k-content__head-breadcrumbs">
                <a href="#" class="k-content__head-breadcrumb-home"><i class="flaticon-home-2"></i></a>
                <span class="k-content__head-breadcrumb-separator"></span>
                <a href="javascript:" class="k-content__head-breadcrumb-link"><?php echo e(__('backend/management.title')); ?></a>
                <span class="k-content__head-breadcrumb-separator"></span>
                <a href="<?php echo e(route('backend-management-products')); ?>"
                   class="k-content__head-breadcrumb-link"><?php echo e(__('backend/management.products.title')); ?></a>
                <span class="k-content__head-breadcrumb-separator"></span>
                <a href="javascript:" class="k-content__head-breadcrumb-link"><?php if($product != null): ?>
                        <?php echo e($product->name); ?>

                    <?php else: ?>
                        Datenbankeintrag bearbeiten
                    <?php endif; ?></a>
            </div>
        </div>
    </div>
    <div class="k-content__body	k-grid__item k-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title"><?php if($product != null): ?>
                                    <?php echo e($product->name); ?>

                                <?php else: ?>
                                    Datenbankeintrag bearbeiten
                                <?php endif; ?></h3>
                        </div>
                    </div>
                    <form method="post" class="kt-form"
                          action="<?php echo e(route('backend-management-product-database-edit-form', $productItem->id)); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label for="productitem_content">Inhalt</label>
                                    <label for="productitem_content">Inhalt</label>
                                    <?php
                                        try {
                                            $value = decrypt($productItem->content);
                                        } catch (Exception $e) {
                                            $value =  $productItem->content;
                                        }
                                    ?>
                                    <textarea
                                        class="form-control <?php if($errors->has('productitem_content')): ?> is-invalid <?php endif; ?>"
                                        id="productitem_content" name="productitem_content"
                                        placeholder="Inhalt"><?php echo e($value); ?></textarea>

                                    <?php if($errors->has('productitem_content')): ?>
                                        <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('productitem_content')); ?></strong>
																	</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-wide btn-bold btn-danger">Speichern</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backend/management/products/database_edit.blade.php ENDPATH**/ ?>