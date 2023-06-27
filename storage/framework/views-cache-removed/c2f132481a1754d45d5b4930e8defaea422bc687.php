<?php $__env->startSection('content'); ?>
<style>
   main{
      padding-top: 0px !important;
   }
</style>
	<!-- login area start -->
         <section class="login__area pb-120">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xxl-6 col-xl-6 col-lg-8">
                     <div class="login__wrapper">
                        <div class="login__shape">
                           <img class="login__shape-1" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-person.png')); ?>" alt="">
                           <img class="login__shape-2" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-shape-1.png')); ?>" alt="">
                           <img class="login__shape-3" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-shape-2.png')); ?>" alt="">
                           <img class="login__shape-4" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-shape-3.png')); ?>" alt="">
                        </div>
                        <div class="login__top text-center">
                           <h3><?php echo e(__('frontend/user.register.title')); ?></h3>
                           <p>Already have an account? <a href="<?php echo e(route('login')); ?>"><?php echo e(__('frontend/user.login.submit')); ?> </a></p>
                        </div>
                        <div class="login__form">
                           <form method="POST" id="register" action="<?php echo e(url('new/register')); ?>">
                        	<?php echo csrf_field(); ?>
                              <div class="login__input-box">
                                 <div class="login__input-title">
                                    <h4><?php echo e(__('frontend/user.username')); ?> <span>*</span></h4>
                                 </div>
                                 <div class="login__input">
                                     <div class="inputField">
                                        <input required id="username" type="text" class="<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" name="username" value="<?php echo e(old('username')); ?>">
                                        <span class="login__input-icon">
                                           <i class="fa-solid fa-user"></i>
                                        </span>
                                     </div>

                                    <?php if($errors->has('username')): ?>
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong><?php echo e($errors->first('username')); ?></strong>
	                                    </span>
	                                <?php endif; ?>
                                 </div>
                              </div>

                              

                              <div class="login__input-box">
                                 <div class="login__input-title d-flex align-items-center justify-content-between">
                                    <h4><?php echo e(__('frontend/user.register.password')); ?> <span>*</span></h4>
                                 </div>
                                 <div class="login__input">
                                     <div class="inputField">
                                        <input required id="password" type="password" class="password <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password">
                                        <span class="login__input-icon">
                                           <i class="fa-light fa-lock"></i>
                                        </span>
                                        <span class="login__input-password-visible">
                                           <i class="fa-light fa-eye"></i>
                                        </span>
                                     </div>
                                     <?php if($errors->has('password')): ?>
                                         <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                     <?php endif; ?>
                                 </div>
                              </div>

                              <div class="login__input-box">
                                 <div class="login__input-title d-flex align-items-center justify-content-between">
                                    <h4><?php echo e(__('frontend/user.register.confirm_password')); ?> <span>*</span></h4>
                                 </div>
                                 <div class="login__input">
                                     <div class="inputField">
                                        <input required id="password-confirm" type="password" class="password" name="password_confirmation">
                                        <span class="login__input-icon">
                                           <i class="fa-light fa-lock"></i>
                                        </span>
                                        <span class="login__input-password-visible">
                                           <i class="fa-light fa-eye"></i>
                                        </span>
                                     </div>
                                     <?php if($errors->has('password_confirmation')): ?>
                                         <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                     <?php endif; ?>
                                 </div>
                              </div>

                              <div class="login__input-box">
                                 <div class="login__input-title d-flex align-items-center justify-content-between">
                                    <h4><?php echo e(__('frontend/main.captcha')); ?> <span>*</span></h4>
                                 </div>
                                <div class="login__input" >
                                    <div class="h-captcha <?php echo e($errors->has('h-captcha-response') ? ' is-invalid' : ''); ?>"  data-sitekey="f7ef0f8b-db29-4cb1-9f44-57787e26d3e0"></div>
                                    <?php if($errors->has('h-captcha-response')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e(__('frontend/user.login.error_message')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                              </div>

                              <div class="login__btn mb-20 buttonForm">
                                 <button class="tp-btn-4 w-100"><?php echo e(__('frontend/user.register.submit')); ?></button>
                              </div>
                              
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- login area end -->
<?php $__env->stopSection(); ?>
<style>
   .fa-eye{
      cursor: pointer;
   }
</style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script>
   $(document).ready(function(){
      $('.fa-eye').on('click', function(){
         //alert('click');
         let element = $(this).parent().parent().find('.password');
            if(element.hasClass('show')){
               element.attr('type', 'password');
               element.removeClass('show');
            }else{
               element.attr('type', 'text');
               element.addClass('show');

            }

      });
   });
   </script>
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>

<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/frontend/auth/newregister.blade.php ENDPATH**/ ?>