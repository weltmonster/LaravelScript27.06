<?php $__env->startSection('pageTitle', __('backend/management.faqs.add.title') ); ?>

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
                                <div class="kt-portlet__head mt-5">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title"><?php echo e(__('backend/management.faqs.add.title')); ?></h3>
                                    </div>
                                </div>
                                <form method="post" class="kt-form"
                                      action="<?php echo e(route('backend-management-faq-add-form')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="form-group mt-5">
                                                <label
                                                    for="faq_add_question"><?php echo e(__('backend/management.faqs.question')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('faq_add_question')): ?> is-invalid <?php endif; ?>"
                                                       id="faq_add_question" name="faq_add_question"
                                                       placeholder="<?php echo e(__('backend/management.faqs.question')); ?>"
                                                       value="<?php echo e(old('faq_add_question')); ?>"/>

                                                <?php if($errors->has('faq_add_question')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('faq_add_question')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group mt-5">
                                                <label
                                                    for="faq_add_category"><?php echo e(__('backend/management.faqs.category')); ?></label>
                                                <select name="faq_add_category" id="faq_add_category"
                                                        class="form-control <?php if($errors->has('faq_add_category')): ?> is-invalid <?php endif; ?>">
                                                    <option value="0"><?php echo e(__('backend/main.please_choose')); ?></option>
                                                    <?php $__currentLoopData = App\Models\FAQCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($faqCategory->id); ?>"
                                                                <?php if(old('faq_add_category') == $faqCategory->id): ?> selected <?php endif; ?>><?php echo e($faqCategory->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                                <?php if($errors->has('faq_add_category')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('faq_add_category')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group mt-5">
                                                <label
                                                    for="faq_add_answer"><?php echo e(__('backend/management.faqs.answer')); ?></label>
                                                <textarea
                                                    class="text-editor form-control <?php if($errors->has('faq_add_answer')): ?> is-invalid <?php endif; ?>"
                                                    id="faq_add_answer" name="faq_add_answer"
                                                    placeholder="<?php echo e(__('backend/management.faqs.answer')); ?>"><?php echo e(old('faq_add_answer')); ?></textarea>

                                                <?php if($errors->has('faq_add_answer')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('faq_add_answer')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group mt-5">
                                                <label for="faq_add_ordering">Reihenfolge</label>
                                                <input type="number"
                                                       class="form-control <?php if($errors->has('faq_add_ordering')): ?> is-invalid <?php endif; ?>"
                                                       id="faq_add_ordering" name="faq_add_ordering"
                                                       placeholder=""><?php echo e(old('faq_add_ordering')); ?></textarea>

                                                <?php if($errors->has('faq_add_ordering')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('faq_add_ordering')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot mt-5">
                                        <div class="kt-form__actions">
                                            <button type="submit"
                                                    class="btn btn-primary"><?php echo e(__('backend/management.faqs.add.submit_button')); ?></button>
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

<?php $__env->startSection('page_scripts'); ?>
    <script type="text/javascript">
        $(function () {
            $('textarea.text-editor').froalaEditor({
                toolbarSticky: false,
                language: 'de',
                theme: 'gray',
                toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'align', '|', 'fontFamily', 'fontSize', 'color', '|', 'emoticons', '|', 'insertLink', 'insertImage', '|', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html']
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/management/faqs/add.blade.php ENDPATH**/ ?>