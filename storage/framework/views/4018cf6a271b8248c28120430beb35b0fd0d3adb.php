<?php use App\Classes\LangHelper; ?>

<?php $__env->startSection('pageTitle', __('backend/management.products.categories.title') ); ?>

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
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg> -->
                        </span>
                            <!--end::Svg Icon-->
                            <!-- <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" /> -->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <!--begin::Menu 1-->
                            <a href="<?php echo e(route('index-with-pageNumber')); ?>"
                               class="btn btn-primary"><?php echo e(__('backend/management.tickets.go_to_shop')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">


                            <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title"><?php echo e(__('backend/management.products.categories.edit.title')); ?></h3>
                                    </div>
                                </div>
                                <form method="post" class="kt-form"
                                      action="<?php echo e(route('backend-management-product-category-edit-form')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <?php if($lang != null): ?>
                                        <input type="hidden" name="translation_lng" value="<?php echo e(strtolower($lang)); ?>"/>
                                    <?php endif; ?>

                                    <input type="hidden" name="product_category_edit_id"
                                           value="<?php echo e($productCategory->id); ?>"/>

                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="form-group mt-5">
                                                <label
                                                    for="product_category_edit_name"><?php echo e(__('backend/management.products.categories.name')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('product_category_edit_name')): ?> is-invalid <?php endif; ?>"
                                                       id="product_category_edit_name" name="product_category_edit_name"
                                                       placeholder="<?php echo e(__('backend/management.products.categories.name')); ?>"
                                                       value="<?php echo e(LangHelper::getValue($lang, 'product-category', null, $productCategory->id) ?? $productCategory->name); ?>"/>

                                                <?php if($errors->has('product_category_edit_name')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
                                                        <strong><?php echo e($errors->first('product_category_edit_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                            <?php if($lang == null): ?>
                                                <div class="form-group mt-5">
                                                    <label
                                                        for="product_category_edit_slug"><?php echo e(__('backend/management.products.categories.slug')); ?></label>
                                                    <input type="text"
                                                           class="form-control <?php if($errors->has('product_category_edit_slug')): ?> is-invalid <?php endif; ?>"
                                                           id="product_category_edit_slug"
                                                           name="product_category_edit_slug"
                                                           placeholder="<?php echo e(__('backend/management.products.categories.slug')); ?>"
                                                           value="<?php echo e($productCategory->slug); ?>"/>

                                                    <?php if($errors->has('product_category_edit_slug')): ?>
                                                        <span class="invalid-feedback" style="display:block"
                                                              role="alert">
																		<strong><?php echo e($errors->first('product_category_edit_slug')); ?></strong>
																	</span>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="form-group mt-5">
                                                    <label
                                                        for="product_category_edit_keywords"><?php echo e(__('backend/management.products.categories.keywords')); ?></label>
                                                    <input type="text"
                                                           class="form-control <?php if($errors->has('product_category_edit_keywords')): ?> is-invalid <?php endif; ?>"
                                                           id="product_category_edit_keywords"
                                                           name="product_category_edit_keywords"
                                                           placeholder="<?php echo e(__('backend/management.products.categories.keywords')); ?>"
                                                           value="<?php echo e($productCategory->keywords); ?>"/>

                                                    <?php if($errors->has('product_category_edit_keywords')): ?>
                                                        <span class="invalid-feedback" style="display:block"
                                                              role="alert">
																		<strong><?php echo e($errors->first('product_category_edit_keywords')); ?></strong>
																	</span>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="form-group mt-5">
                                                    <label
                                                        for="product_category_edit_meta_tags_desc"><?php echo e(__('backend/management.products.categories.meta_tags_desc')); ?></label>
                                                    <input type="text"
                                                           class="form-control <?php if($errors->has('product_category_edit_meta_tags_desc')): ?> is-invalid <?php endif; ?>"
                                                           id="product_category_edit_meta_tags_desc"
                                                           name="product_category_edit_meta_tags_desc"
                                                           placeholder="<?php echo e(__('backend/management.products.categories.meta_tags_desc')); ?>"
                                                           value="<?php echo e($productCategory->meta_tags_desc); ?>"/>

                                                    <?php if($errors->has('product_category_edit_meta_tags_desc')): ?>
                                                        <span class="invalid-feedback" style="display:block"
                                                              role="alert">
																		<strong><?php echo e($errors->first('product_category_edit_meta_tags_desc')); ?></strong>
																	</span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot mt-5">
                                        <div class="kt-form__actions">
                                            <button type="submit"
                                                    class="btn btn-primary"><?php echo e(__('backend/management.products.categories.edit.submit_button')); ?></button>
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

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\work\Figma-Laravel\LaravelScript27.06\resources\views/backendV2/management/products/categories/edit.blade.php ENDPATH**/ ?>