<?php $__env->startSection('content'); ?>

<section class="edit__profile pb-120 pt-100">
    
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
                                <h3 class="profile__info-title"><?php echo __('frontend/user.panel.welcome_message', [ 'name'
                                    => e($data->username) ]); ?></h3>
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
                                            <div class="profile__input-box" ">
                                                <h4>Account Created </h4>
                                                <div class=" profile__input">
                                                <?php echo e(helperdateFormat($account_create)); ?>

                                            </div>
                                        </div>
                                    </div>

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
<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u979267624/domains/laravel-site.net/public_html/resources/views/frontend/userpanel/newhome.blade.php ENDPATH**/ ?>