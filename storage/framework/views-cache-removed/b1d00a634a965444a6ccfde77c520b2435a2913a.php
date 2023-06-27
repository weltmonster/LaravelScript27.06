<?php $__env->startSection('content'); ?>
<style>
   /* .admin {
      width: 50%;
      margin-right: auto;
   }
   .user {
      width: 50%;
      margin-left: auto;
   }
   .user .blog__grid-author {
      justify-content: flex-end;
   }
   .user .postbox__quote::after {
      right: -4px;
      left: unset !important;
   }
   .user .postbox__quote p{text-align: right;} */
</style>
<section class="blog__area pt-10 pb-100">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12 col-xl-12 col-lg-12">
             <div class="blog__wrapper">
                <article class="postbox__item format-image mb-40 transition-3">
                   <div class="blog__grid-tag">
                      <a href="javascript:void(0);"><?php echo e(__('frontend/user.tickets.ticket_details')); ?> </a>
                   </div>
                   <h3 class="postbox__title">
                      <a href="javascript:void(0);"><?php echo e(ucwords($ticket->subject)); ?></a>
                   </h3>

                     <?php if($ticket->user->name == 'admin'): ?>
                        <div class="admin">
                     <?php else: ?>
                        <div class="user">
                     <?php endif; ?>
                     <div class="blog__grid-author d-flex align-items-center mb-40">
                        <div class="blog__grid-author-thumb mr-10">

                           <a href="#">
                              <!-- <img src="<?php echo e(asset_dir('newdesign/assets/img/blog/author/blog-author-1.jpg')); ?>" alt=""> -->
                           <?php if($shopLogo->value != ""): ?>
                              <img src="<?php echo e(asset_dir('newdesign/assets/img/creator/'.$shopLogo->value)); ?>" alt="">
                           <?php else: ?>
                              <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user123.jpg')); ?>" alt="">
                           <?php endif; ?>
                           </a>
                        </div>
                        <div class="blog__grid-author-info">
                           <h4><a href="#"><?php echo e($ticket->user->name); ?></a></h4>
                           <p><?php echo e($ticket->created_at->format('F d, Y') . " • " . $ticket->created_at->diffForHumans()); ?></p>
                        </div>
                     </div>
                     <div class="postbox__content">
                        <div class="postbox__quote">
                           <blockquote>
                              <p><?php echo nl2br(strlen($ticket->content) > 0 ? e(decrypt($ticket->content)) : ''); ?></p>
                           </blockquote>
                        </div>
                     </div>
                   </div>

                  <?php if(count($ticketReplies) > 0): ?>
                     <?php $__currentLoopData = $ticketReplies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticketReply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($ticketReply->user->name == 'admin'): ?>
                        <div class="admin">
                     <?php else: ?>
                        <div class="user">
                     <?php endif; ?>
                     
                        <div class="blog__grid-author d-flex align-items-center mb-40">
                           <div class="blog__grid-author-thumb mr-10">
                              <a href="#">
                                 <!-- <img src="<?php echo e(asset_dir('newdesign/assets/img/blog/author/blog-author-1.jpg')); ?>" alt=""> -->
                                 <?php if($shopLogo->value != ""): ?>
                                    <img src="<?php echo e(asset_dir('newdesign/assets/img/creator/'.$shopLogo->value)); ?>" alt="">
                                 <?php else: ?>
                                    <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user123.jpg')); ?>" alt="">
                                 <?php endif; ?>
                              </a>
                           </div>
                           <div class="blog__grid-author-info">
                              <h4><a href="#"><?php echo e($ticketReply->user->name); ?></a></h4>
                              <p><?php echo e($ticketReply->created_at->format('F d, Y') . " • " . $ticketReply->created_at->diffForHumans()); ?></p>
                           </div>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__quote">
                              <blockquote>
                                 <p><?php echo nl2br(strlen($ticketReply->content) > 0 ? e(decrypt($ticketReply->content)) : ''); ?></p>
                              </blockquote>
                           </div>
                        </div>
                     </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>

                   

                </article>

                
                                  

                <?php if(!$ticket->isClosed()): ?>
                <div class="postbox__comment-form postbox__comment-form-create-ticket">
                   <h3 class="postbox__comment-form-title"><?php echo e(__('frontend/user.tickets.reply_title')); ?></h3>
                   <form method="POST" action="<?php echo e(route('ticket-reply', $ticket->id)); ?>">
					<?php echo csrf_field(); ?>
                      <div class="row">
                         <div class="col-xxl-12">
                            <div class="postbox__comment-input-box">
                               <h4><?php echo e(__('frontend/user.tickets.message')); ?></h4>
                               <div class="postbox__comment-input">
                                   <div class="inputField">
                                        <textarea class="<?php echo e($errors->has('message') ? ' is-invalid' : ''); ?>" name="message" required id="message" rows="3"><?php echo e(old('message')); ?></textarea>
                                   </div>
                                   <?php if($errors->has('message')): ?>
                                       <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('message')); ?></strong>
                                    </span>
                                   <?php endif; ?>
                               </div>
                            </div>
                         </div>
                         <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <!-- <div class="postbox__comment-input-box">
                                <h4><?php echo e(__('frontend/main.captcha')); ?> <span>*</span></h4>
                                <div class="postbox__comment-input">
	                               	<div class="captcha-img mb-20">
										<?php echo captcha_img('math'); ?>

									</div>
	                                <input type="text" class="<?php echo e($errors->has('captcha') ? ' is-invalid' : ''); ?>" name="captcha" id="captcha" required />

									<?php if($errors->has('captcha')): ?>
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong><?php echo e($errors->first('captcha')); ?></strong>
	                                    </span>
	                                <?php endif; ?>
                                </div>
                            </div> -->
                             <div class="login__input-box">
                           <div class="login__input-title d-flex align-items-center justify-content-between">
                               <h4><?php echo e(__('Captcha')); ?> <span>*</span></h4>
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

                         </div>

                         <div class="col-xxl-12">
                            <div class="postbox__comment-btn buttonForm">
                               <button type="submit" class="tp-btn-4 w-100 fixWidthButton"><?php echo e(__('frontend/user.tickets.reply_button')); ?></button>
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
                <?php endif; ?>

             </div>
          </div>

       </div>
    </div>
 </section>
<?php $__env->stopSection(); ?>

<script src="https://js.hcaptcha.com/1/api.js" async defer></script>

<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/frontend/userpanel/tickets/newticket.blade.php ENDPATH**/ ?>