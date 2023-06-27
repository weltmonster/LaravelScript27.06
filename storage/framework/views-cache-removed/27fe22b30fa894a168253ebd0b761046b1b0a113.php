<?php $__env->startSection('content'); ?>
    <div class="k-content__head	k-grid__item">
        <div class="k-content__head-main">
            <h3 class="k-content__head-title"><?php echo e(__('backend/main.notifications.title')); ?></h3>
        </div>
    </div>
    <div class="k-content__body	k-grid__item k-grid__item--fluid">
        <div class="row notify">
            <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                <a href="<?php echo e(route('backend-notifications-clear')); ?>" class="btn btn-wide btn-bold btn-primary btn-upper"
                   style="margin-bottom:15px"><?php echo e(__('backend/main.clear')); ?></a>

                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <?php if(count($notifications)): ?>
                                <div class="k-notification">
                                    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="k-notification__item k-notification__item_no_icon">
                                            <div class="k-notification__item-icon">
                                                <i class="<?php echo e($notification->getIcon()); ?>"></i>
                                            </div>
                                            <div class="k-notification__item-details">
                                                <div class="k-notification__item-title">
                                                    <?php echo e($notification->getMessage()); ?>

                                                </div>
                                                <div class="k-notification__item-time">
                                                    <?php echo e($notification->created_at->format('d.m.Y H:i')); ?>

                                                </div>
                                                <div class="k-notification__item-time">
                                                    <a href="<?php echo e(route('backend-notification-delete', $notification->id)); ?>">
                                                        <i class="la la-trash"></i> <?php echo e(__('backend/main.notifications.delete')); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php else: ?>
                                <i><?php echo e(__('backend/main.no_entries')); ?></i>
                            <?php endif; ?>

                            <div style="margin-top: 15px;">
                                <?php echo preg_replace('/' . $notifications->currentPage() . '\?page=/', '', $notifications->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/notifications/list.blade.php ENDPATH**/ ?>