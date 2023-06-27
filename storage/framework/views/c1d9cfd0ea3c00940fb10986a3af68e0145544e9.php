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
        /*-------------------------------Products-------------------------------*/
        
        [data-theme=dark] body {
        background-color: #151515;
}

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
p {
    margin: 0px !important;
}


        div#kt_content {
            padding: 0 !important;
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
    padding-right: 95px !important;
    padding: 5px 5px;
    color: #7D7D7D;
}

:root i.la.la-database, :root i.la.la-edit, :root i.la.la-trash {
    font-size: 20px;
}
:root th.min-w-80px.sorting {
    font-family: 'Inter';
    font-weight: 400;
    font-style: normal;
    line-height: 23px;
    font-size: 14px;
}
:root .table tr {
    border-bottom: none !important;
}
:root a.btn.btn-primary {
    background-color: #D3F56A !important;
    color: #172C00 !important;
    font-weight: 500;
    line-height: 24px;
}
.btn.btn-primary:hover:not(.btn-active), .btn.btn-light-primary:hover {
    background-color: #d3f56a !important;
}
.table-footer {
    margin-top: 15px;
    background-color: #1e1e2d !important;
    border-radius: 10px !important;
    display: flex;
    justify-content: space-between;
    padding: 2rem 2.25rem;
    align-items: center;
}
.pages {
    color: #7D7D7D;
    font-weight: 500;
    font-size: 14px;
}
span.footer-page {
    color: #fff;
}
.page-no {
    color: #BBBBBB;
    font-weight: 500;
    font-size: 14px;
}
span.page-number {
    margin-left: 5px;
    margin-right: 5px;
}
span.page-number.active {
    color: #D3F56A;
    background-color: #2F3225;
    border-radius: 5px;
    padding: 5px 7px;
    padding-left: 10px;
    margin-left: 10px;
    margin-right: 10px;
}
:root input.form-control.form-control-solid.w-250px.ps-14 {
    color: #7D7D7D;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    border: 2px solid #303030;
    border-radius: 10px;
    width: 400px !important;
    height: 40px;
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
:root .card-header {
    justify-content: center;
    padding-top: 0px !important;
    height: 80px;
}
[data-theme=dark]:root .card-body {
    background-color: #1e1e2d !important;
    border-radius: 10px !important;
}
[data-theme=dark]:root .card-header {
    border-bottom: 1px solid #303030 !important;
}
:root .table td a {
    margin-right: 10px;
}

[data-theme=dark]:root .container, [data-theme=dark]:root .container-lg, [data-theme=dark]:root .container-md, [data-theme=dark]:root .container-sm, [data-theme=dark]:root .container-xl, [data-theme=dark]:root .container-xxl, [data-theme=dark]:root div#kt_content {
    background-color: #151515 !important;
}

:root .card {
    background-color: #1D1D1D !important;
}

[data-theme=dark]:root div#kt_footer {
    background-color: #151515;
}

[data-theme=dark]:root .card-body {
    background-color: #1d1d1d !important;
}
[data-theme=dark]:root input.form-control.form-control-solid.w-250px.ps-14 {
    background-color: #1d1d1d;
}
[data-theme=dark] .svg-icon svg {
    color: #BBBBBB;
}

td.svg-icons a svg {
    margin-left: 5px;
}
:root input#checkAll, :root input.form-check-input.orderCheck {
    border: 1px solid #7D7D7D !important;
    background-color: #1d1d1d;
    border-radius: 4px;
    /* display: none; */
}
th.w-10px.pe-2.checkbox-hdng, td.w-10px.pe-2.checkbox {
    padding-right: 0px !important;
}



/*-------------------------------media Query-------------------------------*/

@media  only screen and (max-width: 1440px){
    
    .card-body {
    padding-right: 0px !important;
}

:root input#checkAll, :root input.form-check-input.orderCheck {
    border: 1px solid #7D7D7D !important;
    background-color: #1d1d1d;
    border-radius: 4px;
    /* display: none; */
    width: 15px !important;
    height: 15px !important;
}
    
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
    
    td.svg-icons a svg {
        width: 16px;
        margin-left: 5px !important;
    }
}


/*-------------------------------Products-End-------------------------------*/

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
                       <!-- <a href="<?php echo e(route('backend-management-product-add')); ?>"-->
                       <!--class="btn btn-wide btn-bold btn-primary btn-upper"-->
                       <!--style="margin-bottom:0px"><?php echo e(__('backend/main.add')); ?></a>-->
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                             <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                            <!--end::Svg Icon-->
                             <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" /> 
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <!--<div class="card-toolbar">-->
                        <!--begin::Toolbar-->
                    <!--    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">-->
                            <!--begin::Filter-->
                            <!--begin::Menu 1-->
                    <!--        <a href="<?php echo e(route('index-with-pageNumber')); ?>"-->
                    <!--           class="btn btn-primary"><?php echo e(__('backend/management.tickets.go_to_shop')); ?></a>-->

                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="card-body py-4">

                    
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users"
                           style="overflow-x: auto; overflow-y: hidden;">
                        <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            
                            
                            
                            
                            
                            
                            <th class="w-10px pe-2 checkbox-hdng">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" id="checkAll" type="checkbox"/>
                                </div>
                            </th>
                            <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.id')); ?></th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.name')); ?></th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.category')); ?></th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.price')); ?></th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.stock_status')); ?></th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.sells')); ?></th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1"><?php echo e(__('backend/management.products.actions')); ?></th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">

                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                
                                

                                
                                
                                
                                
                                 <tr style="width: 100%">
                                <td class="w-10px pe-2 checkbox">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">

                                        <input class="form-check-input orderCheck" data-id="<?php echo e($product->id); ?>"
                                               type="checkbox"/>
                                    </div>
                                </td>
                                
                                <th scope="row"><?php echo e($product->id); ?></th>
                                <td><?php echo e($product->name); ?></td>
                                <td>
                                    <?php if($product->getCategory()->slug == 'uncategorized'): ?>
                                        <?php echo e($product->getCategory()->name); ?>

                                    <?php else: ?>
                                        <a href="<?php echo e(route('backend-management-product-category-edit', $product->getCategory()->id)); ?>"><?php echo e($product->getCategory()->name); ?></a>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($product->getFormattedPrice()); ?></td>
                                <td class="soldout">
                                    <?php if($product->isUnlimited()): ?>
                                        <?php echo e(__('backend/management.products.unlimited')); ?>

                                    <?php elseif($product->asWeight()): ?>
                                        <?php echo e(__('backend/management.products.weight_available', [
                                            'weight' => $product->getWeightAvailable(),
                                            'char' => $product->getWeightChar()
                                        ])); ?>

                                    <?php else: ?>
                                        <?php if($product->inStock()): ?>
                                            <?php echo e($product->getStock()); ?>

                                        <?php else: ?>
                                            <?php echo e(__('backend/management.products.sold_out')); ?>

                                        <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($product->getSells()); ?><?php if($product->asWeight()): ?>
                                        <?php echo e($product->getWeightChar()); ?>

                                    <?php endif; ?>
                                </td>
                                <td style="font-size: 20px;" class="svg-icons">
                                    <?php if(!$product->isUnlimited() && !$product->asWeight()): ?>
                                        <a href="<?php echo e(route('backend-management-product-database', $product->id)); ?>"
                                           data-toggle="tooltip"
                                           data-original-title="<?php echo e(__('backend/main.tooltips.database')); ?>"><svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"/>
</svg>
</a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('backend-management-product-edit', $product->id)); ?>"
                                       data-toggle="tooltip"
                                       data-original-title="<?php echo e(__('backend/main.tooltips.edit')); ?>"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</a>
                                    <a href="<?php echo e(route('backend-management-product-delete', $product->id)); ?>"
                                       data-toggle="tooltip"
                                       data-original-title="<?php echo e(__('backend/main.tooltips.delete')); ?>"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body py-4 table-footer">
    <div class="pages">
        Showing <span class="footer-page">1 to 10</span> of <span class="footer-page">96</span> entries
    </div>
    <div class="page-no"><span class="page-number"> < </span> <span class="page-number active"> 1 </span> <span class="page-number"> 2 </span> <span class="page-number"> 3 </span> <span class="page-number"> . </span> <span class="page-number"> . </span> <span class="page-number"> . </span> <span class="page-number"> > </span> </div>
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/management/products/list.blade.php ENDPATH**/ ?>