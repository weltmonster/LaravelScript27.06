<?php $__env->startSection('content'); ?>

    <section class="edit__profile pb-120 pt-100">
        <div class="edit__profile ">
            <div class="container-fluid fix p-0">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="profile__cover-wrapper p-relative">
                            <div class="profile__cover w-img tp-img-cover">
                                <?php if(Auth::user()->cover != ""): ?>
                                    <img src="assets/newdesign/assets/img/creator/<?= Auth::user()->cover ?>" alt="">
                                <?php elseif(Auth::user()->cover == ""): ?>
                                    <img src="<?php echo e(asset_dir('newdesign/assets/img/creator/creator-bg-2.jpg')); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="profile__cover-edit">
                                <form action="<?php echo e(url('update/cover-photo')); ?>" method="post" id="formCoverData"
                                      enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input id="profile-cover-input" class="cover-img-popup" type="file"
                                           name="coverFile">
                                </form>

                                <label for="profile-cover-input"><i class="fa-regular fa-pen-to-square"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="profile__thumb-wrapper  text-center">
                            <div class="profile__thumb text-center tp-img-profile d-inline-block p-relative">
                                <?php if(Auth::user()->photo != ""): ?>
                                    <img src="assets/newdesign/assets/img/creator/<?= Auth::user()->photo ?>" alt="">
                                <?php elseif(Auth::user()->photo == ""): ?>
                                    <img src="<?php echo e(asset_dir('newdesign/assets/img/creator/user-1.jpg')); ?>" alt="">
                                <?php endif; ?>
                                <div class="profile__thumb-edit">
                                    <form action="<?php echo e(url('update/photo')); ?>" method="post" id="formData"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input id="profile-thumb-input" class="profile-img-popup photo-file"
                                               name="photoFile" type="file">
                                    </form>
                                    <label for="profile-thumb-input"><i class="fa-regular fa-camera"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>


            <?php if(session()->has("success")): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session()->get("success")); ?><br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if(session()->has("error")): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session()->get("error")); ?><br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="row">
                <?php echo $__env->make('frontend.common.frontmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xxl-8 col-lg-8">
                    <div class="profile__tab-content tytyu">
                        <div class="tab-content" id="profile-tabContent">
                            <div class="tab-pane fade show active" id="nav-information" role="tabpanel"
                                 aria-labelledby="nav-information-tab">
                                <div class="profile__info">
                                    <h3 class="profile__info-title"><?php echo __('frontend/user.panel.welcome_message', [ 'name' => e($data->username) ]); ?></h3>
                                    <div class="profile__info-content">
                                        <?php $role = Auth::user()->id; ?>
                                        <?php $data = DB::select("SELECT * FROM lv_users_orders WHERE `user_id`=$role;");
                                        $count_man = count($data);
                                        $users = DB::select("SELECT * FROM lv_users WHERE `id`=$role;");
                                        //print_R( $users);
                                        $account_create = $users[0]->created_at;
                                        //    echo formatDate($account_create,"Y/m/d ");
                                        ?>


                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="profile__input-box">
                                                    <h4>Total Order</h4>
                                                    <div class="profile__input">
                                                        <?php echo $count_man; ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div class="profile__input-box"
                                                ">
                                                <h4>Account Created </h4>
                                                <div class="profile__input">
                                                    <?php echo e(helperdateFormat($account_create)); ?>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-ticket" role="tabpanel"
                                     aria-labelledby="nav-ticket-tab">
                                    <div class="profile__ticket table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Ticket</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">View</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"> #2245</th>
                                                <td>How can i share ?</td>
                                                <td>Pending</td>
                                                <td><a href="#" class="link-btn">View <i
                                                            class="fa-light fa-arrow-right-long"></i> </a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2220</th>
                                                <td>Send money, but not working</td>
                                                <td>Need your replay</td>
                                                <td><a href="#" class="link-btn">View <i
                                                            class="fa-light fa-arrow-right-long"></i> </a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2125</th>
                                                <td>Balance error</td>
                                                <td>Resolved</td>
                                                <td><a href="#" class="link-btn">View <i
                                                            class="fa-light fa-arrow-right-long"></i> </a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2124</th>
                                                <td>How to decline bid</td>
                                                <td>Resolved</td>
                                                <td><a href="#" class="link-btn">View <i
                                                            class="fa-light fa-arrow-right-long"></i> </a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2121</th>
                                                <td>How to contact</td>
                                                <td>Resolved</td>
                                                <td><a href="#" class="link-btn">View <i
                                                            class="fa-light fa-arrow-right-long"></i> </a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-notification" role="tabpanel"
                                     aria-labelledby="nav-notification-tab">
                                    <div class="btn-wrapper w-100">
                                        <a style="float: right;" href="<?php echo e(route('ticket-create')); ?>"
                                           class="tp-btn-2 active"><?php echo e(__('frontend/main.create_ticket')); ?></a>
                                    </div>
                                    <div class="profile__ticket table-responsive w-100">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Ticket</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">View</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(count($tickets) > 0): ?>
                                                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <th scope="row"> #<?php echo e($ticket->id); ?></th>
                                                        <td><?php echo e(ucwords($ticket->subject)); ?></td>
                                                        <td><?php echo e(ucwords($ticket->status)); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('ticket-delete', $ticket->id)); ?>"
                                                               class="link-btn"><?php echo e(__('frontend/user.tickets.delete')); ?></a>
                                                            |
                                                            <a href="<?php echo e(route('ticket-id', $ticket->id)); ?>"
                                                               class="link-btn"><?php echo e(__('frontend/user.tickets.view')); ?>

                                                                
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="4">No tickets found!!</td>
                                                </tr>
                                            <?php endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="<?php echo e(url('./assets/newdesign/assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/frontend/userpanel/newhome.blade.php ENDPATH**/ ?>