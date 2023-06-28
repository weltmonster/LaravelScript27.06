<!doctype html>
<html>

   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php echo e(config('app.name')); ?></title>
      <meta name="description" content="">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1">

      
      <meta name="theme-style-mode" content="1">

      
      <link rel="shortcut icon" type="image/x-icon"
         href="<?php if(strlen(App\Models\Setting::get('theme.favicon')) > 0): ?><?php echo e(App\Models\Setting::get('theme.favicon')); ?><?php else: ?><?php echo e(asset_dir('favicon.svg')); ?><?php endif; ?>">

      
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/bootstrap.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/meanmenu.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/animate.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/swiper-bundle.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/slick.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/backtotop.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/nouislider.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/magnific-popup.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/nice-select.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/font-awesome-pro.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/elegant-icon.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/spacing.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/style.css')); ?>">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo e(asset_dir('newdesign/assets/css/new_style.css')); ?>">

      <style>
         input[type=color] {
            display: none !important;
         }

         .language .nice-select {
            box-shadow: 0px 20px 30px rgba(3, 6, 31, 0.2);
            color: #a8b0c3;
            padding: 0px 27px;
            background-color: #181c3b;
            box-sizing: border-box;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 5px;
            cursor: pointer;
         }

         .language .current .lang_img {
            position: absolute;
            top: 14px;
            left: 10px;
         }

         .language .list .lang_img {
            position: absolute;
            top: 14px;
            left: 0px;
         }

         .faq__tab-content {
            margin-top: 40px;
         }

         /* .afterDot::after {
   display: none;
} */
         /* .heading-bottom-sales-and-review-box:hover .sales-number, .heading-bottom-sales-and-review-box:hover .positive-review, .heading-bottom-sales-and-review-box:hover .negative-review{
   color: white !important;
} */
         .creator__area {
            margin-top: 0px !important;
         }

         .pb-120,
         .pb-100 {
            padding-bottom: 60px !important;
         }

         #nav-ticket,
         #nav-notification {
            display: none;
         }

         .faq__area.pt-60,
         .edit__profile.pt-100,
         .blog__area.pb-100.pt-100 {
            padding-top: 0px !important;
         }

         .settings_container {
            margin-top: 0px !important;
         }

         .activity__wrapper {
            margin-bottom: 30px;
         }

         .sell__box-price p:first-child {
            margin-right: 5px !important;
         }

         .activity__wrapper:last-child {
            margin-bottom: 0px !important;
         }

         @media  only screen and (max-width: 600px) {
            .feedback-icons {
               font-size: 85px !important;
            }

            .language .nice-select .current {
               padding-left: 7px !important;
            }

            .activity__wrapper {
               margin-bottom: 30px;
            }

            .activity__wrapper:last-child {
               margin-bottom: 0px !important;
            }

            #navSaleTab .col-xxl-3.col-xl-3.col-lg-4.col-md-6:last-child {
               margin-bottom: 0px !important;
            }


         }

         #navSaleTab .col-md-6 .mb-30 {
            margin-bottom: 0px !important;
            height: 100%;
         }

         #navSaleTab .col-xxl-3.col-xl-3.col-lg-4.col-md-6 {
            margin-bottom: 30px;
         }

         .blog__wrapper {
            padding-top: 0px !important;
         }

         @media  only screen and (max-width: 992px) {
            .creator__area .creator__banners {
               margin-top: -40px !important;
            }

            .product__details-info-item.mb-25 {
               margin-bottom: 0px !important;
            }

            #nav-tabContent img {
               height: 320px;
            }

            .header__wallet-btn,
            .wallet {
               font-size: 12px !important;
            }

            .settings_container {
               margin-top: 0px !important;
            }

            .language .nice-select .list {
               left: unset !important;
               right: 0px !important;
            }


            .wallet {
               margin-right: 10px !important;
            }

            .header__user {
               padding: 0px 0 !important;
            }

            .logo-white.w-100 {
               max-width: 108px !important;
            }

            .header__padding {
               padding-top: 20px;
               padding-bottom: 20px;
            }

            .wallet__dropdown.active {
               visibility: visible !important;
               opacity: 1 !important;
               -webkit-transform: perspective(300px) rotateX(0deg);
               -moz-transform: perspective(300px) rotateX(0deg);
               -ms-transform: perspective(300px) rotateX(0deg);
               -o-transform: perspective(300px) rotateX(0deg);
               transform: perspective(300px) rotateX(0deg);
            }

            .header__user:hover .wallet__dropdown {
               visibility: hidden;
               opacity: 0;
            }

            .header__user {
               cursor: pointer;
            }
         }


         .wallet:hover {
            color: white !important;
            background: linear-gradient(177.5deg, #61C6FF 1.9%, #283DFC 97.74%) !important;
            border: 1px solid var(--tp-theme-dark);
         }

         .submitBtn,
         .custom-new-btn {
            border-radius: 30px !important;
            width: auto !important;
            position: relative !important;
            z-index: 1 !important;
            background: linear-gradient(177.5deg, #61C6FF 1.9%, #283DFC 97.74%) !important;
            border: 2px solid #05092b !important;
            color: white !important;
            padding: 8px 22px !important;
         }

         .submitBtn:hover,
         .custom-new-btn:hover {
            color: white !important;
         }

         .submitBtn:after,
         .custom-new-btn:after {
            position: absolute;
            content: "";
            left: 2px;
            top: 2px;
            width: calc(100% - 4px);
            height: calc(100% - 4px);
            z-index: -1;
            background-color: var(--tp-theme-dark);
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -o-border-radius: 30px;
            -ms-border-radius: 30px;
            border-radius: 30px;
            visibility: hidden;
            opacity: 0;
         }

         .submitBtn:hover:after,
         .custom-new-btn:hover:after {
            visibility: visible !important;
            opacity: 1 !important;
         }

         .tp-btn-4 {
            border-radius: 30px !important;
            /* width: auto !important; */
            position: relative !important;
            z-index: 1 !important;
            background: linear-gradient(177.5deg, #61C6FF 1.9%, #283DFC 97.74%) !important;
            border: 2px solid #05092b !important;
            color: white !important;
            /* padding: 8px 22px !important; */
         }

         .tp-btn-4:hover {
            color: white !important;
         }

         .tp-btn-4:after {
            position: absolute;
            content: "";
            left: 2px;
            top: 2px;
            width: calc(100% - 4px);
            height: calc(100% - 4px);
            z-index: -1;
            background-color: var(--tp-theme-dark);
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -o-border-radius: 30px;
            -ms-border-radius: 30px;
            border-radius: 30px;
            visibility: hidden;
            opacity: 0;
         }

         .tp-btn-4:hover:after {
            visibility: visible !important;
            opacity: 1 !important;
         }

         .review-radio-label.active,
         .review-radio-label:hover {
            background: linear-gradient(177.5deg, #61C6FF 1.9%, #283DFC 97.74%) !important;
            border: 0px solid #05092b !important;
            position: relative;
         }

         .review-radio-label.active:after,
         .review-radio-label:hover:after {
            visibility: hidden !important;
            opacity: 0 !important;
         }

         .review-radio-label {
            background: linear-gradient(177.5deg, #61C6FF 1.9%, #283DFC 97.74%) !important;
            border: 0px solid #05092b !important;
            z-index: 1 !important;
            line-height: 17px;
            position: relative;
            margin: auto !important;
            width: auto !important;
            display: inline-block;
         }

         .review-radio-label:after {
            position: absolute;
            content: "";
            left: 2px;
            top: 2px;
            width: calc(100% - 4px);
            height: calc(100% - 4px);
            z-index: -1;
            background-color: var(--tp-theme-dark);
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -o-border-radius: 30px;
            -ms-border-radius: 30px;
            border-radius: 30px;
            visibility: visible;
            opacity: 1;
         }

         .swal2-confirm,
         .tp-btn-2 {
            /* width: auto !important; */
            position: relative !important;
            z-index: 1 !important;
            background: linear-gradient(177.5deg, #61C6FF 1.9%, #283DFC 97.74%) !important;
            border: 2px solid #05092b !important;
            color: white !important;
            /* padding: 8px 22px !important; */
         }

         .swal2-confirm:hover,
         .tp-btn-2:hover {
            color: white !important;
         }

         .product__details-info-btn .tp-btn-2:after,
         .swal2-confirm:after,
         .total_info-btn #popup-total:after {
            border-radius: 30px !important;
         }

         .product__details-info-btn .tp-btn-2,
         .swal2-confirm,
         .total_info-btn #popup-total {
            border-radius: 30px !important;
         }

         .swal2-confirm:after,
         .tp-btn-2:after {
            position: absolute;
            content: "";
            left: 2px;
            top: 2px;
            width: calc(100% - 4px);
            height: calc(100% - 4px);
            z-index: -1;
            background-color: var(--tp-theme-dark);
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -o-border-radius: 30px;
            -ms-border-radius: 30px;
            border-radius: 30px;
            visibility: hidden;
            opacity: 0;
         }

         .swal2-confirm:hover:after,
         .tp-btn-2:hover:after {
            visibility: visible !important;
            opacity: 1 !important;
         }







         .localelink img {
            width: 20px;
            height: 20px;
            border-radius: 50%;
         }

         .invalid-feedback {
            color: #721c24;
         }

         body {
            overflow: auto !important;
         }

         main {
            min-height: calc(100vh - 62px);
         }

         ul.list li {
            position: relative;
            padding-left: 35px !important;
         }

         .Deutsch:before,
         .English:before {
            left: 12px !important;
         }

         .nice-select .current {
            padding-left: 17px !important;
         }

         .nice-select .current:before {
            left: 10px !important;
         }

         .wallet {
            margin-right: 15px;
            box-shadow: 0px 20px 30px rgba(3, 6, 31, 0.2);
            color: #a8b0c3;
            padding: 7px;
            background-color: #181c3b;
            box-sizing: border-box;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 5px;
            cursor: pointer;
         }

         .header__bg {
            background-color: var(--tp-theme-dark);
         }

         .share__modal-content .total_info-head {
            display: flex;
            align-items: center;
            margin-bottom: 35px;
         }

         .share__modal-content .total_info-head img {
            border-radius: 10px;
            width: 45%;
         }

         .total_info-name {
            width: 55%;
            text-align: right;
            margin-left: 15px;
         }

         .total_info-name h3 {
            color: #fff;
            margin-bottom: 0;
         }

         .total_info-name span {
            color: #9b9b9b;
            font-size: 13px;
         }

         .total_info-amount {
            display: flex;
            margin-top: 35px;
         }

         .total_info-amount>div {
            width: 50%;
         }

         .total_info-amount h4 {
            color: #fff;
            font-size: 12px;
         }

         .total_info-amount-total {
            text-align: left;
         }

         .total_info-amount-to_pay {
            text-align: right;
         }

         .total_info-descr p {
            line-height: 1.5;
         }

         @media (max-width: 768px) {
            .pt-160 {
               padding-top: 80px;
            }

            .share__modal-content .total_info-head {
               flex-direction: column;
            }

            .share__modal-content .total_info-head img {
               width: 60%;
               margin-bottom: 25px;
            }

            .total_info-name {
               width: 100%;
               text-align: center;
               margin: 0;
            }
         }

         .k-link {
            color: white !important;
         }

         .k-link:hover {
            color: #3771FE !important;
         }

         a:hover {
            color: #0a58ca !important;
         }

         a:hover i {
            color: #fff !important;
         }


         .profile__cover-wrapper,
         .profile__thumb-wrapper {
            display: none;
         }

         span#btcpay {
            cursor: pointer;
            display: block;
            width: auto;
         }

         .btn-primary,
         .btn.btn-light-primary {
            background-color: #232f3e !important;
         }

         #kt_table_users tbody i[class*=" la-"] {
            color: var(--bs-link-color) !important;
         }

         .inputField {
            position: relative;
         }

         body .invalid-feedback {
            display: block;
            padding-left: 24px;
         }

         .buttonForm {
            margin-top: 30px;
         }

         body .postbox__comment-input>span {
            color: #721c24;
         }

         .blog__area .blog__wrapper {
            padding-top: 45px;
         }

         main {
            padding-top: 100px;
         }

         .fixWidthButton {
            max-width: 303px;
         }

         .postbox__comment-form-create-ticket textarea {
            margin-bottom: 9px;
         }

         body .alertTemplate {
            background: #070D3D;
            color: #fff;
            border: 1px solid #3771FE;
         }

         .alertTemplate button {
            margin-right: 3px;
         }

         .postbox__comment-form-create-ticket .login__input {
            margin-bottom: 8px;
         }
      </style>
   </head>

   <body>
      
      <div id="loading">
         <?php echo $__env->make('frontend/common.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      

      
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      


      
      <header>
         <?php if(Auth::check()): ?>
         <?php
         $class = 'header__area header__padding header__bg header__sticky';
         ?>
         <?php else: ?>
         <?php
         $class = 'header__area header__border header__padding header__bg header__sticky header__transparent';
         ?>
         <?php endif; ?>
         <div id="header-sticky"
            class="header__area header__border header__padding header__bg header__sticky header__transparent">
            <div class="container tp-container">
               <div class="header__wrapper p-relative">
                  <div class="row align-items-center">
                     <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-4">
                        <div class="logo header__logo">
                           <a href="<?php echo e(url('/')); ?>">
                              <?php if(strlen(App\Models\Setting::get('theme.logo')) > 0): ?>
                              <img src="<?php echo e(App\Models\Setting::get('theme.logo')); ?>" alt="logo"
                                 style="max-width: 200px;" />
                              <?php else: ?>
                              <img class="logo-white w-100" src="<?php echo e(asset_dir('newdesign/assets/img/logo/logo.png')); ?>"
                                 alt="logo">
                              <?php endif; ?>
                           </a>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-5 d-none d-lg-block">
                        <div class="header__menu-wrapper d-flex align-items-center">
                           
                           <div class="main-menu">
                              <nav id="mobile-menu">
                                 <ul>
                                    <li class="">
                                       <a href="<?php echo e(url('/')); ?>"><?php echo e(__('frontend/main.home')); ?></a>
                                       
                                    </li>
                                    <li class="">
                                       <a href="<?php echo e(route('index-with-pageNumber')); ?>"><?php echo e(__('frontend/main.shop')); ?></a>
                                    </li>
                                    <li class="">
                                       <a href="<?php echo e(route('faq')); ?>"><?php echo e(__('frontend/main.faq')); ?></a>
                                    </li>

                                    <?php if(Auth::check()): ?>
                                    <?php if( Auth::user()->id == 1): ?>
                                    <li><a href="/admin" style="display: flex; align-items: center; gap: 5px;"> Admin
                                          Panel <i class="fa-solid fa-up-right-from-square"
                                             style="font-size: 12px;"></i></a></li>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-8">
                        <div class="header__right-wrapper d-flex justify-content-end align-items-center">
                           <?php if(Auth::check()): ?>
                           <div onclick="location.href='/deposit'" class="wallet">
                              <?php echo e(Auth::user()->getFormattedBalance()); ?>

                           </div>
                           <?php endif; ?>
                           <div class="language">

                              <select name="" onchange="languageChange(this)">
                                 <?php if(count(App\Models\Setting::getAvailableLocales())): ?>
                                 <?php $__currentLoopData = App\Models\Setting::getAvailableLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php
                                 if( \Lang::get('locale.name', [], $locale) == "Deutsch"){
                                 $val = "/assets/svg/flags/017-germany 1.svg";
                                 }else{
                                 $val = "/assets/svg/flags/007-malasya.svg";
                                 }
                                 ?>
                                 <option value="<?php echo e(route('language', $locale)); ?>" <?php if(app()->getLocale() ==
                                    $locale){echo "selected";} ?> data="<?php echo e(\Lang::get('locale.name', [], $locale)); ?>"
                                    data-id = "<?php echo $val ?>"><?php echo e(\Lang::get('locale.name', [], $locale)); ?><img
                                       width="50px" height="50px" src="<?php echo  $val; ?>"></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php endif; ?>
                              </select>
                           </div>

                           <div class="header__right d-sm-flex justify-content-end align-items-center">
                              <?php if(!Auth::check()): ?>
                              <div class="header__wallet ml-30">
                                 <a href="<?php echo e(route('login')); ?>" class="header__wallet-btn custom-new-btn" id="connectbtn">
                                    <svg viewBox="0 0 19 16">
                                       <path
                                          d="M17.5 5.83333V10.1667C17.5 13.5 15.9 14.5 13.5 14.5H5.5C2.5 14.5 1.5 13 1.5 10.1667V5.83333C1.5 3 2.5 2 4.852 1.552C5.06 1.51733 5.276 1.5 5.5 1.5H13.5C13.708 1.5 13.908 1.50866 14.1 1.54332C16.5 2 17.5 3 17.5 5.83333Z"
                                          stroke="white" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                       <path d="M9 5.03314H5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                       <path
                                          d="M17.2998 5.75061H14.8998C14.0198 5.75061 13.2998 6.65061 13.2998 7.75061C13.2998 8.85061 14.0198 9.75061 14.8998 9.75061H17.2998"
                                          stroke="white" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    </svg>
                                    <?php echo e(__('frontend/user.login.title')); ?>

                                 </a>
                              </div>
                              <?php endif; ?>

                              <?php if(Auth::check()): ?>
                              <div class="header__wallet-wrapper" id="header__user">

                                 <div class="header__user ml-10">
                                    <a href="javascript:void(0);">
                                       <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user123.jpg')); ?>" alt="">
                                    </a>
                                    <div class="wallet__dropdown tp-wallet-dropdown">
                                       <div class="wallet__dropdown-cover">
                                          <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user-cover.png')); ?>" alt="">
                                       </div>
                                       <div class="wallet__dropdown-top d-flex align-items-end">
                                          <div class="wallet__dropdown-user mr-15">
                                             <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user123.jpg')); ?>" alt="">
                                          </div>
                                          <div class="wallet__dropdown-user-content">
                                             <h4><?php echo e(Auth::user()->username); ?></h4>
                                          </div>
                                       </div>

                                       <div class="wallet__dropdown-action">
                                          <ul>
                                             <li>
                                                <a href="<?php echo e(route('home')); ?>"><i class="fa-regular fa-user"></i>
                                                   Profile</a>
                                             </li>
                                             <li>
                                                <a href="<?php echo e(route('orders')); ?>"><i class="fa-regular fa-ticket"></i>
                                                   Orders</a>
                                             </li>
                                             <li>
                                                <a href="<?php echo e(route('tickets')); ?>"><i class="fa-regular fa-bell"></i>
                                                   Tickets</a>
                                             </li>
                                             <li>
                                                <a href="<?php echo e(route('deposit')); ?>"><i class="fa-light fa-code-fork"></i>
                                                   Deposit</a>
                                             </li>
                                             <li>
                                                <a href="<?php echo e(route('settings')); ?>"><i class="fa-regular fa-gear"></i>
                                                   Settings</a>
                                             </li>
                                             <li>
                                                <a href="<?php echo e(route('logout')); ?>"><i
                                                      class="fa-regular fa-arrow-right-from-bracket"></i> Logout</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                              <?php endif; ?>

                              <div class="header__user header__user-login ml-30" id="header__user-login">
                                 <a href="javascript:void(0);">
                                    <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user-2.jpg')); ?>" alt="">
                                 </a>

                                 <div class="wallet__dropdown">
                                    <div class="wallet__dropdown-cover">
                                       <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user-cover.png')); ?>" alt="">
                                    </div>
                                    <div class="wallet__dropdown-top d-flex align-items-end">
                                       <div class="wallet__dropdown-user mr-15">
                                          <img src="<?php echo e(asset_dir('newdesign/assets/img/user/user-2.jpg')); ?>" alt="">
                                       </div>
                                       <div class="wallet__dropdown-user-content">
                                          <h4>Robin Milford</h4>
                                       </div>
                                    </div>
                                    <div class="wallet__dropdown-id">
                                       <h5>Wallet:</h5>
                                       <p>0xF74d ... 12hf204
                                          <button type="button">
                                             <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                   d="M5.80388 13.2632H3.5941C1.28115 13.2632 0 11.9967 0 9.68638V3.57677C0 1.27497 1.27255 0 3.5941 0H7.52354C9.83649 0 11.1176 1.26642 11.1176 3.57677C11.1176 3.92761 10.8253 4.21854 10.4728 4.21854C10.1202 4.21854 9.8279 3.92761 9.8279 3.57677C9.8279 1.96808 9.14003 1.28353 7.52354 1.28353H3.5941C1.97762 1.28353 1.28975 1.96808 1.28975 3.57677V9.68638C1.28975 11.2951 1.97762 11.9796 3.5941 11.9796H5.80388C6.15641 11.9796 6.44875 12.2706 6.44875 12.6214C6.44875 12.9722 6.15641 13.2632 5.80388 13.2632Z"
                                                   fill="#3771FE" />
                                                <path
                                                   d="M11.8705 14H9.54195C8.17131 14 7.41211 13.1959 7.41211 11.729V7.84992C7.41211 6.38846 8.16622 5.57895 9.54195 5.57895H11.8705C13.2411 5.57895 14.0003 6.38302 14.0003 7.84992V11.729C14.0003 13.1959 13.2462 14 11.8705 14ZM9.54195 6.39389C8.58403 6.39389 8.17641 6.82852 8.17641 7.84992V11.729C8.17641 12.7504 8.58403 13.1851 9.54195 13.1851H11.8705C12.8284 13.1851 13.236 12.7504 13.236 11.729V7.84992C13.236 6.82852 12.8284 6.39389 11.8705 6.39389H9.54195Z"
                                                   fill="#3771FE" stroke="#3771FE" stroke-width="0.2" />
                                             </svg>
                                          </button>
                                       </p>
                                    </div>
                                    <div class="wallet__dropdown-balance">
                                       <p>Balance: <span>0.075ETH</span></p>
                                    </div>
                                    <div class="wallet__dropdown-action">
                                       <ul>
                                          <li>
                                             <a href="javascript:void(0);"><i class="fa-regular fa-user"></i>
                                                Profile</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);"><i class="fa-regular fa-gear"></i>
                                                Settings</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);"><i
                                                   class="fa-regular fa-arrow-right-from-bracket"></i> Logout</a>
                                          </li>
                                       </ul>
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
      </header>
      

      
      
      <input type="color" data-color="color" value="#3771FE">
      
      

      
      
      
      

      
      
      
      
      
      
      
      
      
      <div class="body-overlay"></div>
      

      <main id="main">
         <style>
            @media  only screen and (min-width: 992px) {
               #mobile-menu {
                  display: block !important;
               }

               .scrollable-menu-main {
                  border-bottom: 0px solid rgba(255, 255, 255, 0.08) !important;
               }

               .scrollable-menu {
                  display: none !important;
               }

               .product__details-area.pt-80 {
                  padding-top: 0px !important;
               }

               .creator__area .creator__banners {
                  margin-top: -50px !important;
               }
            }

            .product__details-area.pt-80 {
               padding-top: 0px !important;
            }

            #main {
               padding-top: 0px !important;
               overflow: hidden !important;
            }

            #breadcrumb__area {
               padding-top: 90px !important;
               padding-bottom: 10px !important;
               display: block !important;
            }

            .header__wallet.ml-30 {
               margin-left: 10px !important;
            }

            .scrollable-menu-main {
               margin-top: 0px;
               padding: 0px 10px;
               width: 100%;
               overflow: auto;
               overflow-y: hidden;
               /* margin: 0 auto; */
               white-space: nowrap;
               padding-bottom: 10px;
               margin-bottom: 40px;
               border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            }

            .scrollable-menu {

               display: inline-flex;
            }

            /* .scrollable-menu a {
               margin-right: 11px;
               display: inline;
               box-shadow: 0px 20px 30px rgba(3, 6, 31, 0.2);
               color: #a8b0c3;
               padding: 7px 20px;
               text-transform: capitalize;
               background-color: #181c3b;
               box-sizing: border-box;
               border: 1px solid rgba(255, 255, 255, 0.08);
               border-radius: 5px;
               cursor: pointer;
            } */
            .scrollable-menu a {
               margin-right: 11px;
               display: inline;
               box-shadow: 0px 20px 30px rgba(3, 6, 31, 0.2);
               color: #a8b0c3;
               padding: 7px 10px;
               text-transform: capitalize;
               background-color: #181c3b00;
               box-sizing: border-box;
               border: 1px solid rgb(255 255 255 / 0%);
               border-radius: 5px;
               cursor: pointer;
            }

            .scrollable-menu:hover a,
            .scrollable-menu a:hover {
               color: white !important;
            }
         </style>


         
         
         

         
         <section id="breadcrumb__area" class="breadcrumb__area pt-160 pb-40 p-relative">
            
            
            

            <div class="breadrumb__shape">
               <img class="breadcrumb__shape-1"
                  src="<?php echo e(asset_dir('newdesign/assets/img/breadcrumb/breadcrumb-shape-1.png')); ?>" alt="">
            </div>
         </section>
         <section class="scrollable-menu-main">
            <section class="scrollable-menu">
               <a href="<?php echo e(url('/')); ?>"><?php echo e(__('frontend/main.home')); ?></a>
               <a href="<?php echo e(route('index-with-pageNumber')); ?>"><?php echo e(__('frontend/main.shop')); ?></a>
               <a href="<?php echo e(route('faq')); ?>"><?php echo e(__('frontend/main.faq')); ?></a>

               <?php if(Auth::check()): ?>
               <?php if( Auth::user()->id == 1): ?>
               <a href="/admin" style="display: flex; align-items: center; gap: 5px;"> Admin Panel
                  <i class="fa-solid fa-up-right-from-square" style="font-size: 12px;"></i>
               </a>
               <?php endif; ?>
               <?php endif; ?>
            </section>
         </section>
         
         <?php echo $__env->yieldContent('breadcrumb'); ?>
         
         

         <?php echo $__env->yieldContent('content'); ?>

         
         
         

         
         
         

         
         
         
      </main>

      
      <footer>
         <div class="footer__area footer__style-2 footer__gradient footer__overlay">
            
            <div class="footer__bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-12 col-sm-12">
                        <div class="footer__copyright">
                           <p>© 2023 <a class="k-link"
                                 href="<?php echo e(url('/')); ?>"><?php echo e(App\Models\Setting::get('app.name')); ?></a>. All rights reserved.
                           </p>
                        </div>
                     </div>
                     
            </div>
         </div>
         </div>
         </div>
      </footer>
      

      <style>
         body .footer__style-2 .footer__copyright p a:hover {
            color: #fff !important;
         }

         body .footer__style-2 .footer__copyright p a {
            color: #3771FE !important;
         }
      </style>


      
      <script src="<?php echo e(asset_dir('newdesign/assets/js/vendor/jquery.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/vendor/waypoints.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/bootstrap-bundle.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/cookie.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/style-switcher.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/meanmenu.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/swiper-bundle.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/slick.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/nouislider.min.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/countdown.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/magnific-popup.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/parallax.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/backtotop.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/nice-select.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/counterup.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/wow.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/isotope-pkgd.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/imagesloaded-pkgd.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/ajax-form.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/main.js')); ?>"></script>
      <script src="<?php echo e(asset_dir('newdesign/assets/js/custom.js')); ?>"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         $(document).ready(function() {
              $('select').niceSelect();
          })
      </script>
      <script>
         $(document).ready (function() {

            $(".header__user").on('click', function(){
               $('.header__user .wallet__dropdown').toggleClass('active');
            });


            if ($(window).width() < 600) {
               var html  = $(".current .lang_img").attr('src');
               var out = '<img class="lang_img" width="18px" height="18px" src="'+html+'">';
               $(".current").html(out);
            } else {
               /*alert($(".current").text());*/
            }

            $('.language .option').on('click', function(){
               if ($(window).width() < 600) { var html=$(".current img").attr('src'); var
                  out='<img class="lang_img" width="18px" height="18px" src="' +html+'">';
                  $(".current").html(out);
               } else {
               /*alert($(".current").text());*/
               }
            });

            $(window).resize(function(){
               if ($(window).width() < 600) { 
                  var html=$(".current img").attr('src'); 
                  var out='<img class="lang_img" width="18px" height="18px" src="' +html+'">';
                  $(".current").html(out);
               } else {
               /*alert($(".current").text());*/
               }
            });
            


            
              $("body").on("click", ".review-order-product", function() {
                  
                  $("#reviewModal").modal("show");
                  $(".feedback-Thanks").remove();
                  $("#reviewModal .share__modal-content").show();
                  $("#submitOrderReview").attr("oderId", $(this).attr("data-order-id"));
              })

              $("body").on("click", ".review-radio-group", function() {
                  $(".review-radio-group input").prop("checked", false);
                  $(".review-radio-group input").removeClass("active-review")
                  $(this).find("input").prop("checked", true);
                  $(this).find("input").addClass("active-review");
              });

              $("body").on("click", "#submitOrderReview", function () {
                  const orderId = $(this).attr("oderId");
                  $.ajax({
                      url:'/orders/reviews/' + orderId,
                      type: 'POST',
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      data: {
                          review: $(".review-radio-group input.active-review").val()
                      },
                      done: function() {
                          /*$("#reviewModal").modal("hide");
                          $("#reviewModal .share__modal-content").html("Thank You For FeedBack");*/
                      },
                      success: function(data) {
                          /*$("#reviewModal").modal("hide");*/
                          $("#reviewModal .share__modal-content").hide('')
                          $("<p class='feedback-Thanks'>Feedback has been sended</p>").insertAfter("#reviewModal .share__modal-content");
                        if (data.status === 1) {
                            $('.review-order-product[data-order-id="'+ orderId + '"]').remove();

                        }
                      }
                  })
              });
          })
      </script>
   </body>

</html><?php /**PATH F:\TASKS\2023-06-27(laravel)\2. PROJECTS\LaravelScript27.06\resources\views/frontend/layouts/auth.blade.php ENDPATH**/ ?>