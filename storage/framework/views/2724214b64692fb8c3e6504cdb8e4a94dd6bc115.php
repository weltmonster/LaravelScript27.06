<?php $__env->startSection('pageTitle', __('backend/management.products.database.title') ); ?>



<?php $__env->startSection('content'); ?>

    <style>
table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}
   body#kt_body {
   background: #151515;
}

h1.d-flex.text-dark.fw-bold.my-0.fs-1, table.table tbody td a i.la, p.uname, .form-group .form-check label, table.table, form.search_from .col-md-2 .form-check, .form-check-input:checked+label, .form-check-input:checked+span  {
   color: #fff !important;
}

form.search_from .col-md-2 {
    display: flex;
}
.k-portlet__head {
    display: none;
}
table.table thead tr, .secount_section {
    color: #7D7D7D !important;
}
form.search_from .col-md-10 input.form-control, .form-check-custom.form-check-solid .form-check-input {
    background-color: transparent;
    border: 2px solid #303030;
}

span.svg-icon.svg-icon-1 {
    margin-left: 0rem !important;
}
form.search_from .col-md-10 input.form-control::placeholder {
    padding-left: 20px;
}
form.search_from .col-md-2 .form-group input.btn {
    color: #D3F56A;
    background: rgba(211, 245, 106, 0.1) !important;
}

.card .card-body .k-portlet {
    border: 1px solid #303030;
    padding: 15px 20px;
    border-radius: 8px;
}
.card .card-body .k-portlet .k-portlet__body  .k-widget-20__title .k-widget-20__label {
    color: #D3F56A;
}
.secount_section ul#pills-tab li.nav-item button.nav-link.active {
    background: rgba(211, 245, 106, 0.1);
    color: #D3F56A;
}
.secount_section ul#pills-tab li.nav-item button.nav-link {
    background: #222222;
    border-radius: 0 !important;
    padding: 7px 30px;
}

.secount_section ul#pills-tab li.nav-item {
    margin: 0 !important;
}
.secount_section .k-portlet.k-portlet--height-fluid .k-portlet__body form .form-group.mt-5 textarea, .secount_section .k-portlet.k-portlet--height-fluid .k-portlet__body form .form-group.mt-5 input {
    background: transparent;
    border: 2px solid #303030;
}
.secount_section .k-portlet.k-portlet--height-fluid .k-portlet__body form .form-group.mt-5 input.btn {
    background: #D3F56A !important;
    color: #172C00;
}
@media  only screen and (min-width: 1400px){
.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1573px;
}
}
@media  only screen and (max-width: 1470px){
form.search_from .col-md-10 {
    width: 80.333333%;
}
}


@media  only screen and (max-width: 1370px){

form.search_from .col-md-10 {
    width: 77.333333%;
}
}


@media  only screen and (max-width: 1270px){

form.search_from .col-md-10 {
    width: 70.333333%;
}
}

@media  only screen and (max-width: 767px){

form.search_from .col-md-10 {
    width: 100%;
}
span.svg-icon.svg-icon-1 {
    top: 17px;
}
    
}
    </style>

        <!--<div class="card-toolbar">-->
        <!--    begin::Toolbar-->
        <!--    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">-->
        <!--        begin::Filter-->
        <!--        begin::Menu 1-->
        <!--        <a href="<?php echo e(route('index-with-pageNumber')); ?>"-->
        <!--           class="btn btn-primary"><?php echo e(__('backend/management.tickets.go_to_shop')); ?></a>-->

        <!--    </div>-->
        <!--</div>-->
    
    


    
    
    
    
    <div class="content d-flex flex-column flex-column-fluid jjjjjj" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title w-100">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1 w-100">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                      transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"/>
                            </svg>
                        </span>
                            <!--end::Svg Icon-->
                            <!--<input type="text" data-kt-user-table-filter="search"-->
                            <!--       class="form-control form-control-solid w-250px ps-14" placeholder="Search user"/>-->
                            
                            
                            
                                 <form class="search_from w-100" method="POST"
                                          action="<?php echo e(route('backend-management-product-database-search', $product->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                                <div class="col-md-10" style="padding:0;margin:0;">
                                                    <input type="text" class="form-control" name="search_input"
                                                           value="<?php echo e($search ?? ''); ?>"
                                                           placeholder="Search"/>
                                                 
                                                    <!--<hr/>-->
                                                </div>
                                                <div class="col-md-2">
                                                     <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input type="checkbox" class="form-check-input"
                                                               name="search_regex"
                                                               <?php if(isset($regex) && $regex): ?> checked <?php endif; ?>/>
                                                        <label>Regex?</label>
                                                    </div>
                                                     <div class="form-group mt-5">
                                                        <input type="submit" class="btn btn-primary btn-inlineblock"
                                                               value="Seek"/>
                                                    </div>
                                                </div>
                                                   
                                            </div>
                                    </form>
                                   
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    
                </div>
                
                <div class="card-body py-4">
                    
                    <div class="row">
                        <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                            <div class="k-portlet">
                                <div class="k-portlet__head  k-portlet__head--noborder">
                                    <div class="k-portlet__head-label">
                                        <h3 class="k-portlet__head-title"><?php echo e(__('backend/management.products.database.widget1.title')); ?></h3>
                                    </div>
                                </div>
                                <div class="k-portlet__body">
                                    
                                    <div class="k-widget-20">
                                        <div class="k-widget-20__title">
                                            <div class="k-widget-20__label">0<?php echo e($databaseItems); ?></div>
                                            <!--<div class="products-chart card-rounded-bottom"-->
                                            <!--     data-x="<?php echo e($chart['x']); ?>"-->
                                            <!--     data-y="<?php echo e($chart['y']); ?>"-->
                                            <!--     data-kt-chart-color="info" style="height: 150px"></div> -->
                                            <!--                                           <img class="k-widget-20__bg" src="<?php echo e(asset_dir('admin/assets/media/misc/iconbox_bg.png')); ?>" alt="bg" />-->
                <div class="sal-graph-card mb-10">
                  <!--<h1 class="sal-rev-h1">Revenue vs Orders</h1>-->
                  <div class="jsb-card">
                      <!--<h2>Aug. 2022</h2>-->
                      <!--<h3>$8,349.13</h3>-->
                      <!--<div id="clippedDiv"></div>-->
                  </div>
                  <div class="jsb-row">
                  </div>
                  <div>
                  <canvas id="myChart" width="100" height="380" style="display: block; box-sizing: border-box; height: 380px; width: 902px;"></canvas>  
                  </div>
                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-8 order-lg-1 order-xl-1">
                            <div class="k-portlet k-portlet--height-fluid">
                                <div class="k-portlet__head">
                                    <div class="k-portlet__head-label">
                                        <h3 class="k-portlet__head-title">
                                            <?php if(isset($databaseItemsSearch)): ?>
                                                <?php echo e(__('backend/management.products.database.title2', ['count' => 'Suchtreffer: ' . $databaseItemsSearch])); ?>

                                            <?php else: ?>
                                                <?php echo e(__('backend/management.products.database.title2', ['count' => $databaseItems])); ?>

                                            <?php endif; ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="k-portlet__body">
                                    <!--form pick here--> 
                                   
                                    <!--<?php echo preg_replace('/' . $database->currentPage() . '\?page=/', '', $database->links()); ?>-->

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>
                                                Content
                                            </th>
                                            <th style="text-align:right;">
                                                Date
                                            </th>
                                            <th style="text-align:right;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $database; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $databaseItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php if(strlen($databaseItem->content) > 0): ?>
                                                        <?php
                                                            try {
                                                                echo decrypt($databaseItem->content);
                                                            } catch (Exception $e) {
                                                                echo $databaseItem->content;
                                                            }
                                                        ?>
                                                    <?php endif; ?>
                                                </td>
                                                <td style="text-align:right;">
                                                    <?php echo e($databaseItem->created_at); ?>

                                                </td>
                                                <td style="text-align:right;">
                                                    <a style="font-size:16px;"
                                                       href="<?php echo e(route('backend-management-product-database-edit', $databaseItem->id)); ?>"
                                                       data-toggle="tooltip"
                                                       data-original-title="<?php echo e(__('backend/main.tooltips.edit')); ?>"><i
                                                            class="la la-edit"></i></a>
                                                    <a style="font-size:16px;"
                                                       href="<?php echo e(route('backend-management-product-database-delete', $databaseItem->id)); ?>"
                                                       data-toggle="tooltip"
                                                       data-original-title="<?php echo e(__('backend/main.tooltips.delete')); ?>"><i
                                                            class="la la-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                    <?php echo preg_replace('/' . $database->currentPage() . '\?page=/', '', $database->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                

            </div>
            <div class="card mt-4">
                
                <div class="card-body py-4 secount_section">
                    
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Bulk Import</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">One Import</button>
                          </li>
                          <!--<li class="nav-item" role="presentation">-->
                          <!--  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>-->
                          <!--</li>-->
                    </ul>
                        
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            <div class="k-portlet k-portlet--height-fluid mt-5">
                                <div class="k-portlet__head mt-5">
                                    <div class="k-portlet__head-label mt-5">
                                        <h3 class="k-portlet__head-title"><?php echo e(__('backend/management.products.database.import.txt.title')); ?></h3>
                                    </div>
                                </div>
                                <div class="k-portlet__body k-portlet__body--fluid">
                                    <form method="POST"
                                          action="<?php echo e(route('backend-management-product-database-import-txt')); ?>"
                                          style="width: 100%;">
                                        <?php echo csrf_field(); ?>

                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>"/>

                                        <div class="form-group mt-5" style="width: 100%;">
                                            <label
                                                for="import_txt_input"><?php echo e(__('backend/management.products.database.import.txt.input')); ?></label>
                                            <textarea style="width: 100%;"
                                                      class="form-control <?php if($errors->has('import_txt_input')): ?> is-invalid <?php endif; ?>"
                                                      name="import_txt_input" id="import_txt_input"
                                                      placeholder="<?php echo e(__('backend/management.products.database.import.txt.input')); ?>"><?php echo e(old('import_txt_input')); ?></textarea>

                                            <?php if($errors->has('import_txt_input')): ?>
                                                <span class="invalid-feedback" style="display:block" role="alert">
																	<strong><?php echo e($errors->first('import_txt_input')); ?></strong>
																</span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group mt-5" style="margin-bottom: 5px;">
                                            <b><?php echo e(__('backend/management.products.database.import.options')); ?></b>
                                        </div>

                                        <div class="form-group mt-5">
                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                <input class="form-check-input" type="radio"
                                                       name="product_import_txt_option" id="product_import_txt_option"
                                                       value="linebyline" data-content-visible="false"
                                                       data-weight-visible="false" checked/>
                                                <label class="form-check-label" for="product_import_txt_option">
                                                    <?php echo e(__('backend/management.products.database.import.line_by_line')); ?>

                                                </label>
                                            </div>


                                            <!--<label class="k-radio k-radio--all k-radio--solid">
                                                <input type="radio" name="product_import_txt_option" value="linebyline" checked />
                                                <span></span>
                                                <?php echo e(__('backend/management.products.database.import.line_by_line')); ?>

                                            </label>-->
                                        </div>

                                        <div class="form-group mt-5">
                                            <div
                                                class="form-check form-check-custom product_import_txt_option_wrap form-check-solid form-check-sm">
                                                <input class="form-check-input" type="radio"
                                                       name="product_import_txt_option" id="product_import_txt_option2"
                                                       value="seperator" data-content-visible="false"
                                                       data-weight-visible="false"/>
                                                <label class="form-check-label" for="product_import_txt_option2">
                                                    <?php echo e(__('backend/management.products.database.import.with_seperator')); ?>

                                                </label>
                                            </div>

                                            <input type="text" class="form-control"
                                                   value="<?php if(strlen(App\Models\Setting::get('import.custom.delimiter')) > 0): ?><?php echo e(App\Models\Setting::get('import.custom.delimiter')); ?><?php endif; ?>"
                                                   name="product_import_txt_seperator_input"/>
                                            <?php if($errors->has('product_import_txt_seperator_input')): ?>
                                                <span class="invalid-feedback" style="display:block" role="alert">
																	<strong><?php echo e($errors->first('product_import_txt_seperator_input')); ?></strong>
																</span>
                                            <?php endif; ?>
                                        </div>


                                        <div class="form-group mt-5">
                                            <input type="submit" class="btn btn-primary"
                                                   value="<?php echo e(__('backend/management.products.database.import.submit_button')); ?>"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                          </div>
                          
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              
                               <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            <div class="k-portlet k-portlet--height-fluid mt-5">
                                <div class="k-portlet__head mt-5">
                                    <div class="k-portlet__head-label mt-5">
                                        <h3 class="k-portlet__head-title mt-5"><?php echo e(__('backend/management.products.database.import.one.title')); ?></h3>
                                    </div>
                                </div>
                                <div class="k-portlet__body k-portlet__body--fluid mt-5">
                                    <form method="POST"
                                          action="<?php echo e(route('backend-management-product-database-import-one')); ?>"
                                          style="width: 100%;">
                                        <?php echo csrf_field(); ?>

                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>"/>

                                        <div class="form-group mt-5" style="width: 100%;">
                                            <label
                                                for="import_one_content"><?php echo e(__('backend/management.products.database.import.one.content')); ?></label>
                                            <textarea style="width: 100%;"
                                                      class="form-control <?php if($errors->has('import_one_content')): ?> is-invalid <?php endif; ?>"
                                                      name="import_one_content" id="import_one_content"
                                                      placeholder="<?php echo e(__('backend/management.products.database.import.one.content')); ?>"><?php echo e(old('import_one_content')); ?></textarea>

                                            <?php if($errors->has('import_one_content')): ?>
                                                <span class="invalid-feedback" style="display:block" role="alert">
																	<strong><?php echo e($errors->first('import_one_content')); ?></strong>
																</span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group mt-5">
                                            <input type="submit" class="btn btn-primary"
                                                   value="<?php echo e(__('backend/management.products.database.import.submit_button')); ?>"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                              
                          </div>
                          <!--<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>-->
                        </div>
                    



                   
                    
                 </div>
            </div>
        </div>
    </div>
    <style>
        .product_import_txt_option_wrap {
            margin-bottom: 20px;
        }

        .form-check-custom .form-check-input {
            margin-right: 5px;
        }
    </style>
    
    <script>
            <?php $__env->stopSection(); ?>
    
    
<?php $__env->startSection('page_scripts'); ?>
    
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        // Sample data for revenue and orders over time
        var data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                // {
                //     label: 'Revenue',
                //     data: [100, 200, 150, 300, 250, 400, 350, 500, 450, 600, 550, 700],
                //     backgroundColor: '#1D1D1D',
                //     borderColor: 'blue',
                //     borderWidth: 2,
                //     pointRadius: 0,
                //     cubicInterpolationMode: 'monotone' // Set interpolation mode to 'monotone' for smooth curves
                // },
                {
                    label: 'Orders',
                    data: [50, 100, 80, 120, 90, 150, 130, 180, 160, 200, 180, 220],
                    backgroundColor: '#1D1D1D',
                    borderColor: '#D3F56A',
                    borderWidth: 2,
                    pointRadius: 0,
                    cubicInterpolationMode: 'monotone' // Set interpolation mode to 'monotone' for smooth curves
                }
            ]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    grid: {
                        display: true,
                        color: '#303030' // Set gridline color to red
                    },
                    beginAtZero: true
                }
            },
            plugins: {
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: function (context) {
                            var label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.datasetIndex === 0) {
                                label += context.parsed.y + ' revenue';
                            } else {
                                label += context.parsed.y + ' orders';
                            }
                            return label;
                        }
                    }
                }
            }
        };

        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });

        // Select August and show revenue tooltip
        myChart.setActiveElements([{ datasetIndex: 0, index: 7 }]);
        myChart.tooltip.update(true);
    </script>
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>
    <script>
        var KTWidgetsManagment = function () {
            // Statistics widgets
            var productsChart = function () {
                var charts = document.querySelectorAll('.products-chart');

                [].slice.call(charts).map(function (element) {
                    var height = parseInt(KTUtil.css(element, 'height'));

                    if (!element) {
                        return;
                    }

                    var color = element.getAttribute('data-kt-chart-color');

                    var labelColor = KTUtil.getCssVariableValue('--bs-' + 'gray-800');
                    var baseColor = KTUtil.getCssVariableValue('--bs-' + color);
                    var lightColor = KTUtil.getCssVariableValue('--bs-' + color + '-light');

                    var options = {
                        series: [{
                            name: '',
                            data: document.querySelector('.products-chart').dataset["x"].split(',')
                        }],
                        chart: {
                            fontFamily: 'inherit',
                            type: 'area',
                            height: height,
                            toolbar: {
                                show: false
                            },
                            zoom: {
                                enabled: false
                            },
                            sparkline: {
                                enabled: true
                            }
                        },
                        plotOptions: {},
                        legend: {
                            show: false
                        },
                        dataLabels: {
                            enabled: false
                        },
                        fill: {
                            type: 'solid',
                            opacity: 0.3
                        },
                        stroke: {
                            curve: 'smooth',
                            show: true,
                            width: 3,
                            colors: [baseColor]
                        },
                        xaxis: {
                            categories: document.querySelector('.products-chart').dataset["y"].split(","),
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false
                            },
                            labels: {
                                show: false,
                                style: {
                                    colors: labelColor,
                                    fontSize: '12px'
                                }
                            },
                            crosshairs: {
                                show: false,
                                position: 'front',
                                stroke: {
                                    color: '#E4E6EF',
                                    width: 1,
                                    dashArray: 3
                                }
                            },
                            tooltip: {
                                enabled: true,
                                formatter: undefined,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px'
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 80,
                            labels: {
                                show: false,
                                style: {
                                    colors: labelColor,
                                    fontSize: '12px'
                                }
                            }
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: 'none',
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: false,
                                filter: {
                                    type: 'none',
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            enabled: false,
                            show: false,
                            style: {
                                fontSize: '16px'
                            },
                            /*y: {
                                formatter: function(val) {
                                    return "$" + val + " thousands"
                                }
                            }*/
                        },
                        colors: [baseColor],
                        markers: {
                            colors: [baseColor],
                            strokeColor: [lightColor],
                            strokeWidth: 3
                        }
                    };

                    var chart = new ApexCharts(element, options);
                    chart.render();
                });
            }

            // Public methods
            return {
                init: function () {
                    productsChart();
                }
            }
        }();

        // Webpack support
        if (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {
            module.exports = KTWidgetsManagment;
        }

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTWidgetsManagment.init();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u979267624/domains/laravel-site.net/public_html/resources/views/backendV2/management/products/database.blade.php ENDPATH**/ ?>