<?php $__env->startSection('content'); ?>
<style>
    .create_ticketss:hover {
        background-color: transparent !important;
    }

    .blog__grid-tag .tp-btn-2 {
        font-size: 13px;
        color: var(--tp-theme-1);
        padding: 8px 15px;
        min-width: auto;
    }

    .blog__grid-tag .create_ticketss::after {
        width: 0rem !important;
    }

    .blog__grid-tag .tp-btn-2.none {
        font-size: 12px !important;
        padding: 0px 0px !important;
        border: 0px !important;
        background: transparent !important;
    }

    .blog__grid-tag a {
        /* padding-right: 10px; */
    }

    .blog__grid-tag a::after {
        width: 0.1rem !important;
    }

    .blog__grid-tag {
        display: flex;
        align-content: center;
        align-items: center;
        justify-content: space-between;
    }

    .tp-btn-2.bton:hover {
        color: white !important;
    }
</style>
<section class="blog__area pb-100 pt-100">
    
    <div class="container">
        <div class="row">

            <?php echo $__env->make('frontend.common.frontmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-xxl-8 col-lg-8">
                <div class="profile__tab-content">

                    <div class="tab-content" id="profile-tabContent">
                        <article class="postbox__item format-image mb-40 transition-3">
                            <div class="blog__grid-tag">
                                <a href="javascript:void(0);"><span
                                        class="tp-btn-2 none"><?php echo e(__('frontend/user.tickets.list_tickets')); ?></span></a>
                                <a href="/ticket/create" class="create_ticketss"><span class="tp-btn-2 bton">Create
                                        Ticket</span></a>
                            </div>
                        </article>

                        <div class="tab-pane fade active show" id="nav-ticket" role="tabpanel"
                            aria-labelledby="nav-ticket-tab">
                            <div class="profile__ticket table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('frontend/user.tickets.id')); ?></th>
                                            <th scope="col"><?php echo e(__('frontend/user.tickets.subject')); ?></th>
                                            <th scope="col"><?php echo e(__('frontend/user.tickets.category')); ?></th>
                                            <th scope="col"><?php echo e(__('frontend/user.tickets.status')); ?></th>
                                            <th scope="col"><?php echo e(__('frontend/user.tickets.date')); ?></th>
                                            <th scope="col"><?php echo e(__('frontend/user.tickets.actions')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($user_tickets) > 0): ?>
                                        <?php $__currentLoopData = $user_tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row">#<?php echo e($ticket->id); ?></th>
                                            <td>
                                                <a
                                                    href="<?php echo e(route('ticket-id', $ticket->id)); ?>"><?php echo e(substr($ticket->subject, 0, 255)); ?></a>
                                            </td>
                                            <td><?php echo e($ticket->getCategory()->name); ?></td>
                                            <td>
                                                <?php if($ticket->isClosed()): ?>
                                                <?php echo e(__('frontend/user.tickets.status_data.closed')); ?>

                                                <?php else: ?>
                                                <?php if(!$ticket->isReplied()): ?>
                                                <?php echo e(__('frontend/user.tickets.status_data.open')); ?>

                                                <?php else: ?>
                                                <?php echo e(__('frontend/user.tickets.status_data.replied')); ?>

                                                <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php echo e(helperdateFormat($ticket->getDate())); ?>


                                                
                                            </td>
                                            <td>
                                                <a
                                                    href="<?php echo e(route('ticket-id', $ticket->id)); ?>"><?php echo e(__('frontend/user.tickets.view')); ?></a>
                                                <span class="span-divider">|</span>
                                                <a
                                                    href="<?php echo e(route('ticket-delete', $ticket->id)); ?>"><?php echo e(__('frontend/user.tickets.delete')); ?></a>
                                                
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="6"><?php echo e(__('frontend/user.tickets.no_tickets_exists')); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo preg_replace('/' . $user_tickets->currentPage() . '\?page=/', '',
                            $user_tickets->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo e(url('./assets/newdesign/assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/frontend/userpanel/tickets/newlist_tickets.blade.php ENDPATH**/ ?>