

<?php $__env->startSection('content'); ?>
<style>
   main {
      padding-top: 0px !important;
   }
</style>

<section class="login__area pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xxl-6 col-xl-6 col-lg-8">
            <div class="login__wrapper">
               <div class="login__shape">
                  <img class="login__shape-1" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-person.png')); ?>" alt="">
                  <img class="login__shape-2" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-shape-1.png')); ?>"
                     alt="">
                  <img class="login__shape-3" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-shape-2.png')); ?>"
                     alt="">
                  <img class="login__shape-4" src="<?php echo e(asset_dir('newdesign/assets/img/login/login-shape-3.png')); ?>"
                     alt="">
               </div>
               <div class="login__top text-center">
                  <h3><?php echo e(__('frontend/user.login.title')); ?></h3>
                  <p>Don't have an account yet? <a
                        href="<?php echo e(route('register')); ?>"><?php echo e(__('frontend/user.login.create_account')); ?></a></p>
               </div>
               <?php if(session()->has("success")): ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> <?php echo e(session()->get("success")); ?>

                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php endif; ?>

               <div class="login__form">
                  <form method="POST" action="<?php echo e(route('login')); ?>">
                     <?php echo csrf_field(); ?>
                     <div class="login__input-box">
                        <div class="login__input-title">
                           <h4><?php echo e(__('frontend/user.username')); ?> <span>*</span></h4>
                        </div>
                        <div class="login__input">
                           <div class="inputField">
                              <input required id="email" type="text"
                                 class="<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"
                                 value="<?php echo e(old('email')); ?>">
                              <span class="login__input-icon">
                                 <i class="fa-light fa-envelope"></i>
                              </span>
                           </div>
                           <?php if($errors->has('email')): ?>
                           <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('email')); ?></strong>
                           </span>
                           <?php endif; ?>
                        </div>
                     </div>
                     <div class="login__input-box">
                        <div class="login__input-title d-flex align-items-center justify-content-between">
                           <h4><?php echo e(__('frontend/user.login.password')); ?> <span>*</span></h4>
                           
                        </div>
                        <div class="login__input">
                           <div class="inputField">
                              <input required id="password" type="password"
                                 class="<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password">
                              <span class="login__input-icon">
                                 <i class="fa-light fa-lock"></i>
                              </span>
                              <span class="login__input-password-visible">
                                 <i class="fa-light fa-eye" onclick="myFunction()"></i>
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
                           <h4><?php echo e(__('Captcha')); ?> <span>*</span></h4>
                        </div>
                        <div class="login__input">
                           
                           <div class="h-captcha <?php echo e($errors->has('h-captcha-response') ? ' is-invalid' : ''); ?>"
                              data-sitekey="f7ef0f8b-db29-4cb1-9f44-57787e26d3e0"></div>
                           <?php if($errors->has('h-captcha-response')): ?>
                           <span class="invalid-feedback" role="alert">
                              <strong><?php echo e(__('frontend/user.login.error_message')); ?></strong>
                           </span>
                           <?php endif; ?>
                        </div>
                     </div>

                     <div class="login__btn mb-20 buttonForm">
                        <button class="tp-btn-4 w-100"><?php echo e(__('frontend/user.login.submit')); ?></button>
                     </div>
                     
                     
            </form>
         </div>
      </div>
   </div>
   </div>
   </div>
</section>

<?php $__env->stopSection(); ?>

<script src="https://js.hcaptcha.com/1/api.js" async defer></script>




<script>
   function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\TASKS\2023-06-27(laravel)\2. PROJECTS\LaravelScript27.06\resources\views/frontend/auth/newlogin.blade.php ENDPATH**/ ?>