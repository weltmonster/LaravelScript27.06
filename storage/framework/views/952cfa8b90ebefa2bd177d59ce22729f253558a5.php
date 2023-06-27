<?php $__env->startSection('pageTitle', __('backend/management.products.title') ); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('shopButton'); ?>
    <p><a href="https://laravel-site.net/shop" class="btn btn-primary">Go to Shop</a></p>
<?php $__env->stopSection(); ?>


    <style>
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
        
        /*-------------------------------Products-categories-------------------------------*/
        
        
        .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1920px;
}

        .page-title.d-flex.flex-column.align-items-start.justify-content-center.flex-wrap.me-lg-2.pb-5.pb-lg-0 h1 {
    flex-direction: row !important;
    text-align: center;
    align-items: center;
}
    h1 p {
    margin: 0px 0px 0px 15px !important;
}
.card-title {
    width: 100%;
    justify-content: space-between;
}
.card-heading h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
}

[data-theme=dark]:root .table td, [data-theme=dark]:root .table td a {
    color: white !important;
}
[data-theme=dark]:root tbody th {
    color: white !important;
}
:root .table th, :root .table td {
    font-family: 'Inter';
    font-weight: 400 !important;
    font-style: normal;
    line-height: 23px;
    font-size: 19px !important;
    padding-right: 105px !important;
    padding: 5px 5px;
}

:root i.la.la-database, :root i.la.la-edit, :root i.la.la-trash {
    font-size: 20px;
}

@media  only screen and (max-width: 1440px){
    
    .card-heading h2 {
        font-size: 20px;
    }
    :root .Search-btn input.form-control.form-control-solid.w-250px.ps-14 {
        font-size: 16px;
    }
    :root .table th, :root .table td, :root .text-end .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon), .pages, .page-no {
        font-size: 12px !important;
    }
    :root .table th, :root .table td {
    padding: 5px 5px !important;
}
:root i.la.la-database, :root i.la.la-edit, :root i.la.la-trash {
    font-size: 16px;
}
:root .table td a {
    margin-right: 5px;
}
 p.uname {
        display: none;
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
                        
                        <div class="card-heading"> <h2>Customers </h2></div>
                        
                        
                        
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            
                            <a href="<?php echo e(route('backend-management-product-category-add')); ?>"
                       class="btn btn-wide btn-bold btn-primary btn-upper"
                       style="margin-bottom:15px"><?php echo e(__('backend/main.add')); ?></a>
                       
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
                            <!--<a href="<?php echo e(route('index-with-pageNumber')); ?>"-->
                            <!--   class="btn btn-primary"><?php echo e(__('backend/management.tickets.go_to_shop')); ?></a>-->
                            

                        </div>
                    </div>
                </div>
                <div class="card-body py-4">

                    <!--<a href="<?php echo e(route('backend-management-product-category-add')); ?>"-->
                    <!--   class="btn btn-wide btn-bold btn-primary btn-upper"-->
                    <!--   style="margin-bottom:15px"><?php echo e(__('backend/main.add')); ?></a>-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users"
                           style="overflow-x: auto; overflow-y: hidden;">
                        <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" id="checkAll" type="checkbox"/>
                                </div>
                            </th>
                            <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.categories.id')); ?></th>
                            <th class="min-w-275px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.categories.name')); ?></th>
                            <th class="min-w-275px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.categories.slug')); ?></th>
                            <th class="min-w-275px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.categories.actions')); ?></th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">

                        <?php $__currentLoopData = $productsCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">

                                        <input class="form-check-input orderCheck" data-id="<?php echo e($productCategory->id); ?>"
                                               type="checkbox"/>
                                    </div>
                                </td>
                                <th scope="row"><?php echo e($productCategory->id); ?></th>
                                <td><?php echo e($productCategory->name); ?></td>
                                <td><?php echo e($productCategory->slug); ?></td>
                                <td style="font-size: 20px;">
                                    <a href="<?php echo e(route('backend-management-product-category-edit', $productCategory->id)); ?>"><i
                                            class="la la-edit"></i></a>
                                    <a href="<?php echo e(route('backend-management-product-category-delete', $productCategory->id)); ?>"><i
                                            class="la la-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/management/products/categories/list.blade.php ENDPATH**/ ?>