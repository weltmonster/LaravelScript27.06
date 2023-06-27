<?php use App\Classes\LangHelper; ?>

<?php $__env->startSection('pageTitle', __('backend/management.faqs.categories.title') ); ?>

<?php $__env->startSection('content'); ?>

    <style>
        
        
        
        table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
        }
        
                .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1920px;
}
        
        [data-theme=dark] body#kt_body {
          background-color: rgba(0, 0, 0, 1);
        }
        
        
        [data-theme=dark] .card {
        background-color: rgba(29, 29, 29, 1)!important;
        }
        
        h2.kt-portlet__head-title.edit-category {
        font-weight: 600;
        font-size: 28px;
        line-height: 34px;
        padding-bottom:20px;
        }
        
        label.name {
        font-size: 20px;
        font-weight: 400;
        line-height: 24px;
        letter-spacing: 0em;
        color:rgba(125, 125, 125, 1);
        }
        input#faq_category_edit_name {
   
        font-size: 20px;
        font-weight: 400;
        text-align: left;
        margin-top: 6px;
        padding-bottom: 10px;
        }
        
        [data-theme=dark] input#faq_category_edit_name {
        background-color: rgba(29, 29, 29, 1)!important;
        }
        
        button.btn.btn-primary.edit-submit {
            background-color: #D3F56A !important;
            color: #172C00 !important;
            font-weight: 500 !important;
            font-size: 16px;
            line-height: 16px !important;
            padding: 15px 15px !important;
            margin-top :20px;
        }
        
        :root a.btn.btn-primary {
    background-color: #D3F56A !important;
    color: #172C00 !important;
    font-weight: 500 !important;
    font-size: 16px;
    line-height: 16px !important;
    padding: 15px 15px !important;
    height:50px;
}
        i.fas.fa-edit{
            font-size:18px;
        }
        
        button.btn.btn-primary.edit-submit:hover:not(.btn-active), button.btn.btn-primary.edit-submit:hover {
        background-color: #D3F56A!important;
        }
        
        button.btn.btn-primary.edit-submit:active:not(.btn-active){
        background-color: #D3F56A!important;
        }
        
         a.btn.btn-wide.btn-bold.btn-primary.btn-upper:hover:not(.btn-active), a.btn.btn-wide.btn-bold.btn-primary.btn-upper:hover {
        background-color: #D3F56A!important;
        }
        
        a.btn.btn-wide.btn-bold.btn-primary.btn-upper:active:not(.btn-active){
        background-color: #D3F56A!important;
        }
        
        a.btn.btn-primary:hover:not(.btn-active), a.btn.btn-primary:hover {
        background-color: #D3F56A!important;
        }
        
        a.btn.btn-primary:active:not(.btn-active){
        background-color: #D3F56A!important;
        }
       

        
        
        @media  screen and (min-width: 1440px) {
        p.uname {
        display: none;
    }
        }
        
        @media  screen and (min-width: 1366px) {
        p.uname {
        display: none;
    }
        }
        
        @media  screen and (min-width: 1920px) {
        p.uname {
        display: block;
    }
        }  
        
        
        @media  only screen and (max-width: 1440px) {
        :root a.btn.btn-primary {
        background-color: #D3F56A !important;
        color: #172C00 !important;
        font-weight: 500 !important;
        font-size: 14px;
        line-height: 16px !important;
        padding: 10px 15px !important;
        height:38px;
    }
        
        
        @media  only screen and (max-width: 1440px) {
        h2.kt-portlet__head-title.edit-category {
        font-size:1.25rem;
    }
    
    
    
     @media  only screen and (max-width: 1440px) {
    [data-theme=dark] label.name  {
    font-size: 13px;
    color: #7D7D7D;
    }
    
    
         @media  only screen and (max-width: 1440px) {
    [data-theme=dark] input#faq_category_edit_name{
    background-color: rgba(29, 29, 29, 1)!important;
    border: 2px solid #303030;
    border-radius: 10px;
    font-size:13px;
}
    

     @media  only screen and (max-width: 1440px) {
   
            button.btn.btn-primary.edit-submit {
        background-color: #D3F56A !important;
        color: #172C00 !important;
        font-weight: 500 !important;
        font-size: 14px;
        line-height: 16px !important;
        padding: 10px 15px !important;
        height:35px;
        }
        @media  only screen and (max-width: 1440px) {
        i.fas.fa-edit{
            font-size:15px;
        }
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
                            <?php echo e(App\Classes\LangHelper::getLangSelector('lang-edit-faq-category', $faqCategory->id, $lang ?? null)); ?>


                            <div class="kt-portlet">
                                <div class="kt-portlet__head mt-5">
                                    <div class="kt-portlet__head-label">
                                        <h2 class="kt-portlet__head-title edit-category"><?php echo e(__('backend/management.faqs.categories.edit.title')); ?></h2>
                                    </div>
                                </div>
                                <form method="post" class="kt-form"
                                      action="<?php echo e(route('backend-management-faq-category-edit-form')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <?php if($lang != null): ?>
                                        <input type="hidden" name="translation_lng" value="<?php echo e(strtolower($lang)); ?>"/>
                                    <?php endif; ?>

                                    <input type="hidden" name="faq_category_edit_id" value="<?php echo e($faqCategory->id); ?>"/>

                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="form-group mt-5">
                                                <label class="name"
                                                    for="faq_category_edit_name"><?php echo e(__('backend/management.faqs.categories.name')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('faq_category_edit_name')): ?> is-invalid <?php endif; ?>"
                                                       id="faq_category_edit_name" name="faq_category_edit_name"
                                                       placeholder="<?php echo e(__('backend/management.faqs.categories.name')); ?>"
                                                       value="<?php echo e(LangHelper::getValue($lang, 'faq-category', null, $faqCategory->id) ?? $faqCategory->name); ?>"/>

                                                <?php if($errors->has('faq_category_edit_name')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('faq_category_edit_name')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot mt-5">
                                        <div class="kt-form__actions">
                                            <button type="submit"
                                                    class="btn btn-primary edit-submit"><?php echo e(__('backend/management.faqs.categories.edit.submit_button')); ?></button>
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

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/management/faqs/categories/edit.blade.php ENDPATH**/ ?>