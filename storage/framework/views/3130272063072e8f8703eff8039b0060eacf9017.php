
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
                <div class="card-title">
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
                        <input type="text" id="myInput" onkeyup="myFunction()" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
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
                        <a href="<?php echo e(route('index-with-pageNumber')); ?>" class="btn btn-primary"><?php echo e(__('backend/management.tickets.go_to_shop')); ?></a>

                    </div>
                </div>
            </div>
            <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5 myTable" id="kt_table_users" style="overflow-x: auto; overflow-y: hidden;">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" id="checkAll" type="checkbox" />
                                </div>
                            </th>
                            <th class="min-w-95px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1"><?php echo e(__('backend/management.users.id')); ?></th>
                            <!--
                            <th><?php echo e(__('backend/management.users.name')); ?></th>
                            -->
                            <th class="min-w-75px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1"><?php echo e(__('backend/management.users.username')); ?></th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1"><?php echo e(__('backend/management.users.jabber')); ?></th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1"><?php echo e(__('backend/management.users.newsletter_enabled')); ?></th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1"><?php echo e(__('backend/management.users.balance')); ?></th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1"><?php echo e(__('backend/management.users.date')); ?></th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1"><?php echo e(__('backend/management.users.actions')); ?></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th>
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input orderCheck" data-id="<?php echo e($user->id); ?>" type="checkbox" />
                                </div>
                            </th>

                            <th scope="row"><?php echo e($user->id); ?></th>
                            <!--
                                <td><?php echo e($user->name); ?></td>
                                -->
                            <td><?php echo e($user->username); ?></td>
                            <td><?php echo e($user->jabber_id); ?></td>
                            <td><?php echo e($user->newsletter_enabled == 1 ? __('backend/management.users.enabled') : __('backend/management.users.disabled')); ?></td>
                            <td><?php echo e($user->getFormattedBalance()); ?></td>
                            <td>
                                <?php echo e(helperdateFormat($user->created_at)); ?> <?php echo e($user->created_at->format('H:i')); ?>

                            </td>
                            <td style="font-size: 20px;">
                                <a href="<?php echo e(route('backend-management-user-edit', $user->id)); ?>"><i class="la la-edit"></i></a>
                                <a href="<?php echo e(route('backend-management-user-delete', $user->id)); ?>"><i class="la la-trash"></i></a>
                                <a href="<?php echo e(route('backend-management-user-login', $user->id)); ?>"><i class="la la-sign-in"></i></a>
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

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.querySelector(".myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];

            if (td !== undefined) {
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>
<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\TASKS\2023-06-27(laravel)\2. PROJECTS\LaravelScript27.06\resources\views/backendV2/management/users/list.blade.php ENDPATH**/ ?>