<div class="col-xxl-4 col-lg-4">
    <div class="profile__tab mr-40">
        <nav>
            <div class="nav nav-tabs flex-column" id="profile-tab" role="tablist">
                <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(Request::segment(1) == 'home' ? 'active' : ''); ?>"
                   id="nav-information-tab" type="button" role="tab" aria-controls="nav-information"
                   aria-selected="false"><i class="fa-regular fa-user-pen"></i>Profile Information</a>

                <a href="<?php echo e(route('orders')); ?>" class="nav-link <?php echo e(Request::segment(1) == 'orders' ? 'active' : ''); ?>"
                   id="nav-ticket-tab" type="button" role="tab" aria-controls="nav-ticket" aria-selected="false"><i
                        class="fa-regular fa-ticket"></i>My Orders</a>

                <a href="<?php echo e(route('tickets')); ?>"
                   class="nav-link <?php echo e(Request::segment(1) == 'tickets' ? 'active' : ''); ?>" id="nav-notification-tab"
                   type="button" role="tab" aria-controls="nav-notification" aria-selected="false"><i
                        class="fa-regular fa-bell"></i>Tickets</a>

                <a href="<?php echo e(route('deposit')); ?>"
                   class="nav-link <?php echo e(Request::segment(1) == 'deposit' ? 'active' : ''); ?>" id="nav-notification-tab"
                   type="button" role="tab" aria-controls="nav-notification" aria-selected="false"><i
                        class="fa-light fa-code-fork"></i>Deposit</a>

                <a href="<?php echo e(route('settings')); ?>"
                   class="nav-link <?php echo e(Request::segment(1) == 'settings' ? 'active' : ''); ?>" id="nav-password-tab"
                   type="button" role="tab" aria-controls="nav-password" aria-selected="false"><i
                        class="fa-regular fa-gear"></i>Settings</a>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/frontend/common/frontmenu.blade.php ENDPATH**/ ?>