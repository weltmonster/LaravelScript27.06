<?php $__env->startSection('pageTitle', __('backend/management.users.title') ); ?>

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
                <div class="card-title" style="display: none">
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
                
    </div>
    <div class="card-body py-4">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo e(route('backend-management-user-tickets', $user->id)); ?>" class="btn btn-wide btn-bold btn-primary btn-upper" style="margin-bottom:15px">Alle
                    Tickets</a>
                <a href="<?php echo e(route('backend-management-user-orders', $user->id)); ?>" class="btn btn-wide btn-bold btn-primary btn-upper" style="margin-bottom:15px">Alle
                    Bestellungen</a>
                <a href="<?php echo e(route('index-with-pageNumber')); ?>" class="btn btn-wide btn-bold btn-primary btn-upper" style="margin-bottom:15px"><?php echo e(__('backend/management.tickets.go_to_shop')); ?></a>


            </div>
            <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                <div class="k-portlet k-portlet--height-fluid">
                    <div class="k-portlet__head  k-portlet__head--noborder mt-5">
                        <div class="k-portlet__head-label">
                            <h3 class="k-portlet__head-title"><?php echo e(__('backend/management.users.widget1.title')); ?></h3>
                        </div>
                    </div>
                    <div class="k-portlet__body k-portlet__body--fluid">
                        <div class="k-widget-20">
                            <div class="k-widget-20__title">
                                <div class="k-widget-20__label"><?php echo e($chart["transactions"]["count"]); ?></div>
                                <div class="transactions-chart card-rounded-bottom" data-x="<?php echo e($chart["transactions"]["x"]); ?>" data-y="<?php echo e($chart["transactions"]["y"]); ?>" data-kt-chart-color="danger" style="height: 150px"></div>
                                <!--<img class="k-widget-20__bg" src="<?php echo e(asset_dir('admin/assets/media/misc/iconbox_bg.png')); ?>" alt="bg" />-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                <div class="k-portlet k-portlet--height-fluid">
                    <div class="k-portlet__head  k-portlet__head--noborder mt-5">
                        <div class="k-portlet__head-label">
                            <h3 class="k-portlet__head-title"><?php echo e(__('backend/management.users.widget2.title')); ?></h3>
                        </div>
                    </div>
                    <div class="k-portlet__body k-portlet__body--fluid">
                        <div class="k-widget-20">
                            <div class="k-widget-20__title">
                                <div class="k-widget-20__label"><?php echo e($chart["tickets"]["count"]); ?></div>
                                <!--<img class="k-widget-20__bg" src="<?php echo e(asset_dir('admin/assets/media/misc/iconbox_bg.png')); ?>" alt="bg" />-->
                                <div class="tickets-chart card-rounded-bottom" data-x="<?php echo e($chart["tickets"]["x"]); ?>" data-y="<?php echo e($chart["tickets"]["y"]); ?>" data-kt-chart-color="primary" style="height: 150px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                <div class="k-portlet k-portlet--height-fluid">
                    <div class="k-portlet__head  k-portlet__head--noborder mt-5">
                        <div class="k-portlet__head-label">
                            <h3 class="k-portlet__head-title"><?php echo e(__('backend/management.users.widget3.title')); ?></h3>
                        </div>
                    </div>
                    <div class="k-portlet__body k-portlet__body--fluid">
                        <div class="k-widget-20">
                            <div class="k-widget-20__title">
                                <div class="k-widget-20__label"><?php echo e($chart["orders"]["count"]); ?></div>
                                <div class="orders-chart card-rounded-bottom" data-x="<?php echo e($chart["orders"]["x"]); ?>" data-y="<?php echo e($chart["orders"]["y"]); ?>" data-kt-chart-color="info" style="height: 150px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                <div class="k-portlet">
                    <div class="k-portlet__head k-portlet__head--lg k-portlet__head--noborder k-portlet__head--break-sm">
                        <div class="k-portlet__head-label mt-5">
                            <h3 class="k-portlet__head-title">
                                Offene Tickets von <?php echo e(htmlspecialchars($user->username)); ?>

                                <small>Insgesamt <?php echo e(count($tickets)); ?> offene Tickets</small>
                            </h3>
                        </div>
                    </div>
                    <div class="k-portlet__body">
                        <div class="k-datatable k-datatable--default k-datatable--brand k-datatable--error k-datatable--loaded k-datatable--scroll" id="k_recent_tickets">
                            <table class="table">
                                <thead class="table">
                                    <tr>
                                        <th>
                                            <span>#</span>
                                        </th>
                                        <th>
                                            <span>Betreff</span>
                                        </th>
                                        <th>
                                            <span>Status</span>
                                        </th>
                                        <th>
                                            <span>Datum</span>
                                        </th>
                                        <th style="text-align:right;">
                                            <span>Aktionen</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($ticket->id); ?>

                                        </td>
                                        <td>
                                            <?php echo e(htmlspecialchars($ticket->subject)); ?>

                                        </td>
                                        <td>
                                            <?php if($ticket->isClosed()): ?>
                                            <span class="kt-badge kt-badge--danger kt-badge--dot kt-badge--md"></span>
                                            <span class="kt-label-font-color-2 kt-font-bold"><?php echo e(__('backend/dashboard.recent_tickets.status_data.closed')); ?></span>
                                            <?php elseif($ticket->isReplied()): ?>
                                            <span class="kt-badge kt-badge--brand kt-badge--dot kt-badge--md"></span>
                                            <span class="kt-label-font-color-2 kt-font-bold"><?php echo e(__('backend/dashboard.recent_tickets.status_data.replied')); ?></span>
                                            <?php else: ?>
                                            <span class="kt-badge kt-badge--success kt-badge--dot kt-badge--md"></span>
                                            <span class="kt-label-font-color-2 kt-font-bold"><?php echo e(__('backend/dashboard.recent_tickets.status_data.open')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($ticket->created_at->format('d.m.Y H:i')); ?>

                                        </td>
                                        <td style="text-align:right;">
                                            <a href="<?php echo e(route('backend-management-ticket-edit', $ticket->id)); ?>" class="btn btn-clean  btn-sm btn-icon-md">
                                                <i class="la la-edit"></i> <?php echo e(__('backend/dashboard.recent_tickets.edit')); ?>

                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                <div class="kt-portlet">
                    <div class="kt-portlet__head mt-5">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title"><?php echo e(__('backend/management.users.edit.title')); ?></h3>
                        </div>
                    </div>
                    <form method="post" class="kt-form" action="<?php echo e(route('backend-management-user-edit-form')); ?>">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" value="<?php echo e($user->id); ?>" name="user_edit_id" />

                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group mt-5" style="display: none">
                                    <label for="user_edit_name"><?php echo e(__('backend/management.users.name')); ?></label>
                                    <input type="text" class="form-control <?php if($errors->has('user_edit_name')): ?> is-invalid <?php endif; ?>" id="user_edit_name" name="user_edit_name" placeholder="<?php echo e(__('backend/management.users.name')); ?>" value="<?php echo e($user->name); ?>" />

                                    <?php if($errors->has('user_edit_name')): ?>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong><?php echo e($errors->first('user_edit_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group mt-5">
                                    <label for="user_edit_username"><?php echo e(__('backend/management.users.username')); ?></label>
                                    <input type="text" class="form-control <?php if($errors->has('user_edit_username')): ?> is-invalid <?php endif; ?>" id="user_edit_username" placeholder="<?php echo e(__('backend/management.users.username')); ?>" value="<?php echo e($user->username); ?>" disabled="true" />
                                </div>

                                <div class="form-group mt-5" style="display: none">
                                    <label for="user_edit_jabber"><?php echo e(__('backend/management.users.jabber')); ?></label>
                                    <input type="text" class="form-control <?php if($errors->has('user_edit_jabber')): ?> is-invalid <?php endif; ?>" id="user_edit_jabber" name="user_edit_jabber" placeholder="<?php echo e(__('backend/management.users.jabber')); ?>" value="<?php echo e($user->jabber_id); ?>" />

                                    <?php if($errors->has('user_edit_jabber')): ?>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong><?php echo e($errors->first('user_edit_jabber')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group mt-5">
                                    <label for="user_edit_balance"><?php echo e(__('backend/management.users.balance_in_cent')); ?></label>
                                    <input type="text" step="0.01" class="form-control <?php if($errors->has('user_edit_balance')): ?> is-invalid <?php endif; ?>" id="user_edit_balance" name="user_edit_balance" placeholder="<?php echo e(__('backend/management.users.balance')); ?>" value="<?php echo e($user->balance_in_cent); ?>" />

                                    <?php if($errors->has('user_edit_balance')): ?>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong><?php echo e($errors->first('user_edit_balance')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot mt-5">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-wide btn-primary"><?php echo e(__('backend/management.users.edit.submit_button')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php if(Auth::user()->hasPermission('manage_users_permissions')): ?>
            <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1" style="display: none">
                <div class="kt-portlet">
                    <div class="kt-portlet__head mt-5">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title"><?php echo e(__('backend/management.users.edit.permissions.title')); ?></h3>
                        </div>
                    </div>
                    <form method="post" class="kt-form" action="<?php echo e(route('backend-management-user-update-permissions-form')); ?>">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" value="<?php echo e($user->id); ?>" name="user_edit_id" />

                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <?php $__currentLoopData = App\Models\Permission::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group mt-5">
                                    <label class="k-checkbox k-checkbox--all k-checkbox--solid">
                                        <input type="checkbox" name="user_edit_permissions[]" value="<?php echo e($permission->id); ?>" <?php if($user->hasPermission($permission->permission)): ?> checked <?php endif; ?> />
                                        <span></span>
                                        <?php if(Lang::has('backend/permissions.' . $permission->permission)): ?>
                                        <?php echo e(__('backend/permissions.' . $permission->permission)); ?>

                                        <?php else: ?>
                                        <?php echo e($permission->permission); ?>

                                        <?php endif; ?>
                                    </label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="kt-portlet__foot mt-5">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-wide btn-primary"><?php echo e(__('backend/management.users.edit.save_button')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>
<script>
    var KTWidgetsManagment = function() {
        // Statistics widgets
        var transactionsChart = function() {
            var charts = document.querySelectorAll('.transactions-chart');

            [].slice.call(charts).map(function(element) {
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
                        name: 'Net Profit',
                        data: document.querySelector('.transactions-chart').dataset["x"].split(',')
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
                        categories: document.querySelector('.transactions-chart').dataset["y"].split(','),
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
                        style: {
                            fontSize: '12px'
                        },
                        y: {
                            formatter: function(val) {
                                return "$" + val + " thousands"
                            }
                        }
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

        var ticketsChart = function() {
            var charts = document.querySelectorAll('.tickets-chart');

            [].slice.call(charts).map(function(element) {
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
                        data: document.querySelector('.tickets-chart').dataset["x"].split(',')
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
                        categories: document.querySelector('.tickets-chart').dataset["y"].split(','),
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
                        style: {
                            fontSize: '12px'
                        },
                        y: {
                            formatter: function(val) {
                                return "$" + val + " thousands"
                            }
                        }
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

        var ordersChart = function() {
            var charts = document.querySelectorAll('.orders-chart');

            [].slice.call(charts).map(function(element) {
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
                        data: document.querySelector('.orders-chart').dataset["x"].split(',')
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
                        categories: document.querySelector('.orders-chart').dataset["y"].split(","),
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
            init: function() {
                transactionsChart();
                ticketsChart();
                ordersChart();
            }
        }
    }();

    // Webpack support
    if (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {
        module.exports = KTWidgetsManagment;
    }

    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTWidgetsManagment.init();
    });
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl/1.2.5/Intl.min.js" integrity="sha512-/ArHcCxOUEzVJqTclr4BXgOh822PkcTim88bqb4EBKnn71lsbIjdZzRJb2+/zI0EWrcOTYnDCBrN2/5luFwf5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        currencyvalue = '<?php echo e($currentprice); ?>';
        if (currencyvalue == 'euro') {
            var load = $('#user_edit_balance').val();
            var changed = load.replace(/\./g, ',');
            $('#user_edit_balance').val(changed);

            $('#user_edit_balance').on('change', function(e) {
                //alert(.val());
                if (e.keyCode == 8) {
                    return
                }
                var n = $(this).val().replace(/\,/g, '').replace(/\./g, '');
                // alert(n);
                if (n.match(/^\d+$/)) {
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
                } else {
                    $(this).addClass('error')
                    $('button[type="submit"]').addClass('submitstop');
                }


            });

        } else {

            var load = $('#user_edit_balance').val();
            var changed = load.replace(/\,/g, '.');
            $('#user_edit_balance').val(changed);

            $('#user_edit_balance').on('change', function(e) {
                //alert(.val());
                if (e.keyCode == 8) {
                    return
                }
                var n = $(this).val().replace(/\,/g, '').replace(/\./g, '');
                // alert(n);
                if (n.match(/^\d+$/)) {

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
                } else {
                    $(this).addClass('error')
                    $('button[type="submit"]').addClass('submitstop');
                }
            });

        }

        $('body #user_edit_balance').trigger('change');
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
<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/management/users/edit.blade.php ENDPATH**/ ?>