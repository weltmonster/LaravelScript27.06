

<?php $__env->startSection('content'); ?>
<section class="blog__area pb-100 pt-100">
    
    <div class="container">
        <div class="row">
            <?php echo $__env->make('frontend.common.frontmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-xxl-8 col-lg-8">
                <article class="postbox__item format-image mb-40 transition-3">
                    <div class="blog__grid-tag">
                        <a href="javascript:void(0);"><?php echo e(__('frontend/user.deposit')); ?></a>
                    </div>
                </article>

                <div class="product__details-info">
                    <h3 class="postbox__comment-form-title"><?php echo e(__('frontend/user.payment_methods')); ?></h3>
                    <div class="product__details-info-bottom ">
                        <div class="product__details-info-btn">
                            
                            <span id="btcpay" url="<?php echo e(route('btcpay')); ?>"><img
                                    src="https://btcpay0.voltageapp.io/img/paybutton/pay.svg" /></span>
                        </div>
                        <div class="btcform">
                            <form method="POST" action="https://btcpay0.voltageapp.io/api/v1/invoices"
                                class="btcpay-form btcpay-form--block">
                                <input type="hidden" name="storeId"
                                    value="AiKz2Y5NSCjvMhNmqJReYgjTRf5vyn4e8JrfwCZ8pRN4" />
                                <input type="hidden" name="orderId" value="<?php echo e(date('Ymd/H-i-s', time())); ?>" />

                                <input type="hidden" name="browserRedirect"
                                    value="https://laravel-script.net/deposit?orderid=<?php echo e(date('Ymd/H-i-s', time())); ?>" />

                                <div class="field-set">
                                    <label>Name</label>
                                    <input type="text" name="checkoutDesc" value="" placeholder="John" />
                                </div>
                                <div class="field-set">
                                    <label>Item desc</label>
                                    <input type="text" name="itemDesc" value="" placeholder="Item desc" />
                                </div>
                                <div class="field-set">
                                    <label>Amount</label>
                                    <input type="number" name="price" value="" placeholder="100" />
                                </div>
                                <div class="field-set">

                                    <input hidden type="text" name="currency" value="USD" />
                                </div>

                                <div class="btcbtns">
                                    <button type="submit"><img
                                            src="https://btcpay0.voltageapp.io/img/paybutton/pay.svg" /></button>
                                    <span id="btcback">Back</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="product__details-info mt-25">
                    <h3 class="postbox__comment-form-title"><?php echo e(__('frontend/user.coupon_redeem.title')); ?></h3>
                    <form method="POST" action="<?php echo e(route('redeem-coupon')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="postbox__comment-input-box">
                                <h4><?php echo e(__('frontend/user.coupon_redeem.code')); ?> <span>*</span></h4>
                                <div class="postbox__comment-input">
                                    <input id="coupon_redeem_code" type="text"
                                        class="<?php echo e($errors->has('coupon_redeem_code') ? ' is-invalid' : ''); ?>"
                                        name="coupon_redeem_code" value="<?php echo e(old('coupon_redeem_code')); ?>" required
                                        autofocus>

                                    <?php if($errors->has('coupon_redeem_code')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('coupon_redeem_code')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-12">
                            <div class="postbox__comment-btn">
                                <button type="submit"
                                    class="tp-btn-4 w-100"><?php echo e(__('frontend/user.coupon_redeem.submit')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    span#btcpay {
        cursor: pointer;
        display: block;
        width: auto;
    }

    .btcform {
        display: none;
    }

    .field-set {
        display: grid;
        color: #fff;
    }

    .field-set input {
        height: 46px;
        margin-bottom: 20px;
        padding-left: 15px;
    }

    span#btcback {
        background: #3771FE;
        color: #fff;
        margin-left: 15px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        padding: 0px 50px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btcbtns {
        display: flex;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).on('click', '#btcpay img', function () {
            $(this).hide();
            $('.btcform').show();
        })
        $(document).on('click', 'span#btcback', function () {
            $('#btcpay img').show();
            $('.btcform').hide();
        })
        $(document).ready(function () {
            var reurl = $('#btcpay').attr('url');
            var url = window.location.href;
            hashes = url.split("?")[1];
            var order_id = hashes.split("=")[1];
            $.ajax({
                url: reurl,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {order_id: order_id},
                success: function (response) {
                    console.log(response);
                }
            });

        })
</script>
<script src="<?php echo e(url('./assets/newdesign/assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\TASKS\2023-06-27(laravel)\2. PROJECTS\LaravelScript27.06\resources\views/frontend/userpanel/newdeposit.blade.php ENDPATH**/ ?>