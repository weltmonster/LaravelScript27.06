<?php $__env->startSection('pageTitle', __('backend/management.products.title') ); ?>

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
                        <?php if(!$product->isUnlimited()): ?>
                        <a href="<?php echo e(route('backend-management-product-database', $product->id)); ?>"
                            class="btn btn-wide btn-bold btn-primary btn-upper"
                            style="margin-bottom:15px"><?php echo e(__('backend/management.products.edit.database')); ?></a>
                        <?php endif; ?>

                        <a href="<?php echo e(route('product-page', $product->id)); ?>" target="_shop_product_<?php echo e($product->id); ?>"
                            class="btn btn-wide btn-bold btn-primary btn-upper"
                            style="margin-bottom:15px"><?php echo e(__('backend/management.products.show_product')); ?></a>


                        <div class="kt-portlet mt-5">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        <?php echo e(__('backend/management.products.edit.title')); ?>

                                    </h3>
                                </div>
                            </div>
                            <form method="post" class="kt-form"
                                action="<?php echo e(route('backend-management-product-edit-form')); ?>"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>


                                <?php if($lang != null): ?>
                                <input type="hidden" name="translation_lng" value="<?php echo e(strtolower($lang)); ?>" />
                                <?php endif; ?>

                                <input type="hidden" name="product_edit_id" value="<?php echo e($product->id); ?>" />

                                <div class="kt-portlet__body">
                                    <div class="kt-section kt-section--first">
                                        <div class="form-group mt-5">
                                            <label
                                                for="product_edit_name"><?php echo e(__('backend/management.products.name')); ?></label>
                                            <input type="text"
                                                class="form-control <?php if($errors->has('product_edit_name')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_name" name="product_edit_name"
                                                placeholder="<?php echo e(__('backend/management.products.name')); ?>"
                                                value="<?php echo e(\App\Classes\LangHelper::getValue($lang, 'product', 'name', $product->id) ?? $product->name); ?>" />

                                            <?php if($errors->has('product_edit_name')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_name')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>


                                        <?php if($lang == null): ?>
                                        <div class="form-group mt-5">
                                            <label
                                                for="product_edit_category_id"><?php echo e(__('backend/management.products.category')); ?></label>
                                            <select name="product_edit_category_id" id="product_edit_category_id"
                                                class="form-control <?php if($errors->has('product_edit_category_id')): ?> is-invalid <?php endif; ?>">
                                                <option value="0"><?php echo e(__('backend/main.please_choose')); ?></option>
                                                <?php $__currentLoopData = App\Models\ProductCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($productCategory->id); ?>" <?php if($product->category_id ==
                                                    $productCategory->id): ?> selected <?php endif; ?>><?php echo e($productCategory->name); ?>

                                                </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                            <?php if($errors->has('product_edit_category_id')): ?>
                                            <span class="invalid-feedback" style="display:block;" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_category_id')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>

                                        <div class="form-group mt-5">
                                            <label
                                                for="product_edit_description"><?php echo e(__('backend/management.products.description')); ?></label>
                                            <textarea
                                                class="text-editor form-control <?php if($errors->has('product_edit_description')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_description" name="product_edit_description"
                                                placeholder="<?php echo e(__('backend/management.products.description')); ?>"><?php echo e(__(':description', ['description' => $product->description])); ?></textarea>

                                            <?php if($errors->has('product_edit_description')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_description')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label
                                                for="product_edit_image"><?php echo e(__('backend/management.products.images')); ?></label>
                                            <input type="file"
                                                class="form-control <?php if($errors->has('product_edit_image')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_description" name="product_edit_image" />

                                            <?php if($errors->has('product_edit_image')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_image')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <?php if($lang == null): ?>
                                        <div class="form-group mt-5">
                                            <label
                                                for="product_edit_price_in_cent"><?php echo e(__('backend/management.products.price_in_cent')); ?></label>
                                            <input type="text" step=""
                                                class="form-control <?php if($errors->has('product_edit_price_in_cent')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_price_in_cent" name="product_edit_price_in_cent"
                                                placeholder="<?php echo e(__('backend/management.products.price_in_cent_example')); ?>"
                                                value="<?php echo e($product->price_in_cent); ?>" />

                                            <?php if($errors->has('product_edit_price_in_cent')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_price_in_cent')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group mt-5">
                                            <label
                                                for="product_edit_old_price_in_cent"><?php echo e(__('backend/management.products.old_price_in_cent')); ?></label>
                                            <input type="text"
                                                class="form-control <?php if($errors->has('product_edit_old_price_in_cent')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_old_price_in_cent"
                                                name="product_edit_old_price_in_cent"
                                                placeholder="<?php echo e(__('backend/management.products.old_price_in_cent_example')); ?>"
                                                value="<?php echo e($product->old_price_in_cent); ?>" />

                                            <?php if($errors->has('product_edit_old_price_in_cent')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_old_price_in_cent')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>

                                        <div style="margin-bottom: 5px;">
                                            <b><?php echo e(__('backend/management.products.edit.options')); ?></b>
                                        </div>


                                        <div class="form-check form-check-custom form-check-solid form-check-sm mt-5">
                                            <input type="radio" id="product_add_stock_management1"
                                                class="form-check-input" name="product_edit_stock_management"
                                                value="normal" data-content-visible="false" data-weight-visible="false"
                                                <?php if(!$product->isUnlimited() && !$product->asWeight()): ?> checked <?php endif; ?> />
                                            <label class="form-check-label" for="product_add_stock_management1">
                                                <?php echo e(__('backend/management.products.add.normal_stock_management')); ?>

                                            </label>
                                        </div>

                                        <!--<div class="form-group form-check-custom form-check-solid mb-5">
                                                    <label class="k-radio k-radio--all k-radio--solid">
                                                        <input type="radio" class="form-check-input" name="product_edit_stock_management" value="normal" data-content-visible="false" data-weight-visible="false" <?php if(!$product->isUnlimited() && !$product->asWeight()): ?> checked <?php endif; ?> />
                                                        <span></span>
                                                        <?php echo e(__('backend/management.products.edit.normal_stock_management')); ?>

                                                    </label>
                                                </div>-->

                                        <div class="form-check form-check-custom form-check-solid form-check-sm mt-5">
                                            <input class="form-check-input" id="product_add_stock_management2"
                                                type="radio" name="product_edit_stock_management" value="unlimited"
                                                data-content-visible="true" data-weight-visible="false"
                                                <?php if($product->isUnlimited()): ?> checked <?php endif; ?> />
                                            <label class="form-check-label" for="product_add_stock_management2">
                                                <?php echo e(__('backend/management.products.add.normal_stock_management')); ?>

                                            </label>
                                        </div>

                                        <!--<div class="form-group form-check-custom form-check-solid mb-5">
                                                    <label class="k-radio k-radio--all k-radio--solid">
                                                        <input class="form-check-input" type="radio" name="product_edit_stock_management" value="unlimited" data-content-visible="true" data-weight-visible="false" <?php if($product->isUnlimited()): ?> checked <?php endif; ?> />
                                                        <span></span>
                                                        <?php echo e(__('backend/management.products.edit.unlimited_available')); ?>

                                                    </label>
                                                </div>-->

                                        <div class="product_edit_weight_div form-group"
                                            style="<?php if(!$product->asWeight()): ?> display: none; <?php endif; ?>">
                                            <label
                                                for="product_edit_weight"><?php echo e(__('backend/management.products.weight')); ?></label>
                                            <input type="number"
                                                class="text-editor form-control <?php if($errors->has('product_edit_weight')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_weight" name="product_edit_weight"
                                                placeholder="<?php echo e(__('backend/management.products.weight')); ?>"
                                                value="<?php echo e($product->getWeightAvailable()); ?>" />

                                            <?php if($errors->has('product_edit_weight')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_weight')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="product_edit_weight_div form-group"
                                            style="<?php if(!$product->asWeight()): ?> display: none; <?php endif; ?>">
                                            <label
                                                for="product_edit_weightchar"><?php echo e(__('backend/management.products.weightchar')); ?></label>
                                            <input type="text"
                                                class="text-editor form-control <?php if($errors->has('product_edit_weightchar')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_weightchar" name="product_edit_weightchar"
                                                placeholder="<?php echo e(__('backend/management.products.weightchar')); ?>"
                                                value="<?php echo e($product->getWeightChar()); ?>" />

                                            <?php if($errors->has('product_edit_weightchar')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_weightchar')); ?></strong>
                                            </span>
                                            <?php endif; ?>

                                            <div class="form-group" style="margin-top:20px">
                                                <label for="product_edit_interval">Interval (nur für Produkte mit
                                                    Gewichtangabe)</label>
                                                <input type="number"
                                                    class="form-control <?php if($errors->has('product_edit_interval')): ?> is-invalid <?php endif; ?>"
                                                    id="product_edit_interval" name="product_edit_interval"
                                                    placeholder="" value="<?php echo e($product->interval); ?>" />

                                                <?php if($errors->has('product_edit_interval')): ?>
                                                <span class="invalid-feedback" style="display:block" role="alert">
                                                    <strong><?php echo e($errors->first('product_edit_interval')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="product_edit_content_div mt-5 form-group"
                                            style="<?php if(!$product->isUnlimited() && !$product->asWeight()): ?> display: none; <?php endif; ?>">
                                            <label
                                                for="product_edit_content"><?php echo e(__('backend/management.products.content')); ?></label>
                                            <?php
                                            try {
                                            $value = decrypt($product->content);
                                            } catch (\Exception $e) {
                                            $value = $product->content;
                                            }
                                            ?>
                                            <textarea
                                                class="text-editor form-control <?php if($errors->has('product_edit_content')): ?> is-invalid <?php endif; ?>"
                                                id="product_edit_content" name="product_edit_content"
                                                placeholder="<?php echo e(__('backend/management.products.content')); ?>"><?php echo e($value); ?></textarea>
                                            <?php if($errors->has('product_edit_content')): ?>
                                            <span class="invalid-feedback" style="display:block" role="alert">
                                                <strong><?php echo e($errors->first('product_edit_content')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot mt-5">
                                    <div class="kt-form__actions">
                                        <button type="submit"
                                            class="btn btn-primary"><?php echo e(__('backend/management.products.edit.submit_button')); ?></button>
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
<script>
    let product_stock_management = document.querySelectorAll("[name = 'product_edit_stock_management']")
        for (let i = 0; i < product_stock_management.length; i++) {
            product_stock_management[i].addEventListener("change", function() {
                checkProductStock(product_stock_management[i])
            });
        }

        function checkProductStock(item){
            let product_content_div = document.querySelector('.product_edit_content_div')
            let display = item.checked && item.value === 'unlimited' ? 'block' : 'none';
            product_content_div.style.display = display;
        }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl/1.2.5/Intl.min.js"
    integrity="sha512-/ArHcCxOUEzVJqTclr4BXgOh822PkcTim88bqb4EBKnn71lsbIjdZzRJb2+/zI0EWrcOTYnDCBrN2/5luFwf5A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        currencyvalue = '<?php echo e($currentprice); ?>';
        if(currencyvalue == 'euro'){
            var load = $('#product_edit_price_in_cent').val();
            var changed = load.replace(/\./g, ',');
            $('#product_edit_price_in_cent').val(changed);

            $('#product_edit_price_in_cent').on('change', function(e){
                //alert(.val());
                if(e.keyCode == 8){
                    return
                }
                var n = $(this).val().replace(/\,/g, '').replace(/\./g, '');
                // alert(n);
                if(n.match(/^\d+$/)){
                    var val = $(this).val().toString();
                    var val1 = val.replace('€', '');
                    var val2 = val1.replace(/\./g, '');
                    var val3 = val2.replace(',', '.')
                    var price = val3.replace(/\s/g, "");

                    let USDollar = new Intl.NumberFormat('it-IT', {
                    style: 'currency',
                    currency: 'EUR',
                    });

                    //console.log(`The formated version of ${price} is ${USDollar.format(price)}`);
                    var price2 = USDollar.format(price).toString().replace('€', '').replace(/\s/g, "");

                    $(this).val(price2);
                    $(this).removeClass('error')
                    $('button[type="submit"]').removeClass('submitstop');
                }else{
                    $(this).addClass('error')
                    $('button[type="submit"]').addClass('submitstop');
                }

                
            });


            var load2 = $('#product_edit_old_price_in_cent').val();
            var changed2 = load2.replace(/\./g, ',');
            $('#product_edit_old_price_in_cent').val(changed2);
            
            $('#product_edit_old_price_in_cent').on('change', function(e){
                //alert(.val());
                if(e.keyCode == 8){
                return
                }
                var n = $(this).val().replace(/\,/g, '').replace(/\./g, '');
                // alert(n);
                if(n.match(/^\d+$/)){
                
                    var val = $(this).val().toString();
                    var val1 = val.replace('€', '');
                    var val2 = val1.replace(/\./g, '');
                    var val3 = val2.replace(',', '.')
                    var price = val3.replace(/\s/g, "");
                    
                    let USDollar = new Intl.NumberFormat('it-IT', {
                    style: 'currency',
                    currency: 'EUR',
                    });
                
                //console.log(`The formated version of ${price} is ${USDollar.format(price)}`);
                var price2 = USDollar.format(price).toString().replace('€', '').replace(/\s/g, "");
                
                $(this).val(price2);
                $(this).removeClass('error')
                $('button[type="submit"]').removeClass('submitstop');
            }else{
            $(this).addClass('error')
                $('button[type="submit"]').addClass('submitstop');
            }
            
            
            });
        }else{

            var load = $('#product_edit_price_in_cent').val();
            var changed = load.replace(/\,/g, '.');
            $('#product_edit_price_in_cent').val(changed);
            
            $('#product_edit_price_in_cent').on('change', function(e){
                //alert(.val());
                if(e.keyCode == 8){
                return
                }
                var n = $(this).val().replace(/\,/g, '').replace(/\./g, '');
                // alert(n);
                if(n.match(/^\d+$/)){
                
                    var val = $(this).val().toString();
                    var val1 = val.replace('$', '');
                    var val2 = val1.replace(/\,/g, '');
                    var price = val2.replace(/\s/g, "");
                    // alert(price);
                    let USDollar = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                    });
                    
                    console.log(`The formated version of ${price} is ${USDollar.format(price)}`);
                    var price2 = USDollar.format(price).toString().replace('$', '').replace(/\s/g, "");
                    
                    $(this).val(price2);
                    $(this).removeClass('error')
                    $('button[type="submit"]').removeClass('submitstop');
                }else{
                    $(this).addClass('error')
                    $('button[type="submit"]').addClass('submitstop');
                }
            });


            var load2 = $('#product_edit_old_price_in_cent').val();
            var changed2 = load2.replace(/\,/g, '.');
            $('#product_edit_old_price_in_cent').val(changed2);
            
            $('#product_edit_old_price_in_cent').on('change', function(e){
            //alert(.val());
            if(e.keyCode == 8){
            return
            }
            var n = $(this).val().replace(/\,/g, '').replace(/\./g, '');
            // alert(n);
            if(n.match(/^\d+$/)){
            
            var val = $(this).val().toString();
            var val1 = val.replace('$', '');
            var val2 = val1.replace(/\,/g, '');
            var price = val2.replace(/\s/g, "");
            // alert(price);
            let USDollar = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            });
            
            console.log(`The formated version of ${price} is ${USDollar.format(price)}`);
            var price2 = USDollar.format(price).toString().replace('$', '').replace(/\s/g, "");
            
                $(this).val(price2);
                    $(this).removeClass('error')
                    $('button[type="submit"]').removeClass('submitstop');
                }else{
                    $(this).addClass('error')
                    $('button[type="submit"]').addClass('submitstop');
                }
            });

        }
        
        $('body #product_edit_price_in_cent').trigger('change');
        $('body #product_edit_old_price_in_cent').trigger('change');
    });
</script>


<style>
    .form-check-input:checked[type=radio] {
        background-color: #232f3e;
        border-color: #232f3e;
    }

    .form-check-input {
        border: #232f3e solid 1px;
    }

    .error {
        border: 1px solid red !important;
    }

    .submitstop {
        pointer-events: none;
        opacity: 0.5;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u979267624/domains/laravel-site.net/public_html/resources/views/backendV2/management/products/edit.blade.php ENDPATH**/ ?>