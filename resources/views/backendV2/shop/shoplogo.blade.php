@extends('backendV2.layouts.default')
@section('pageTitle', 'Appearance' )

@section('content')

<style>
    body
    {
    background:#151515;
    }
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
 
    #logo::after {
        content: "Logo";
        position: absolute;
        right: 5%;
        visibility: hidden;
    }

    #banner::after {
        content: "Banner";
        position: absolute;
        right: 5%;
        visibility: hidden;
    }

    .logosImage {
        max-width: 90px;
    }

    .marqueeLoader{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        align-items: center;
    }
    .form-switch .form-check-input:checked{
        background-color: #232f3e;
        border-color: #232f3e;
    }
    .alert {
        margin-left: 30px !important;
    }
    .error {
         color: red;
         
    }
    .del-icon{
        margin-top: 47px;
        font-size: 20px !important;
        color:red !important;
    }
    .logo_img, .banner_img{
        width: 75%;
        height: 90%;
        object-fit: cover;
       
    }
    
    /*============= changes =============*/
    
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1920px;
}
    
    
    div#kt_content {
    padding: 0;
}
    
    .card-header.align-items-center.border-bottom {
    justify-content: flex-start;
    }
    
    [data-theme=dark] .card {
    background-color:rgba(29, 29, 29, 1)!important;
    }    
        [data-theme=dark] .card-body{
        background-color:rgba(29, 29, 29, 1)!important;
        }
        
       [data-theme=dark] input#logo {
        background-color:rgba(29, 29, 29, 1)!important;
        border: 2px solid #303030;
        border-radius: 10px;
        }
        
       [data-theme=dark] span.select2-selection.select2-selection--single.form-select.form-select-solid.form-select-lg {
    background-color: rgba(29, 29, 29, 1)!important;
    border: 2px solid #303030;
    border-radius: 10px;
    color: rgba(255, 255, 255, 1);
    margin: 8.36px 0px;
   
}

span.select2-selection.select2-selection--single.form-select.form-select-solid.form-select-lg {
        margin: 0.6vw 0px;
        background-color: var(--kt-input-bg);
        border: 1px solid var(--kt-input-border-color);
}
        
        [data-theme=dark] input#banner{
            background-color:rgba(29, 29, 29, 1)!important;
            border: 2px solid #303030;
            border-radius: 10px;
        }
        
        [data-theme=dark] body#kt_body {
        background-color:rgba(0, 0, 0, 1);
        }   
    
    
    
    :root .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
    background-color: #D3F56A!important;
    color: #172C00;
    padding: 10px 24px 10px 24px;
    font-size:14px;
    
}

     [data-theme=dark] .kt-section .kt-section--first, h3 {
    font-size: 13px;
    color: #7D7D7D;
}
button#svg-button {
    padding: 10px 15px 10px 15px;
    border-radius: 10px;
}
:root label {
    font-size: 15px!important;
    display: flex;
   
}
.form-switch .form-check-input:checked {
    background-color: rgba(211, 245, 106, 1);
}

[data-theme=dark] i.la.la-trash{
    color: rgba(187, 187, 187, 1);
}

[data-theme=dark] i.la.la-edit {
    color: rgba(187, 187, 187, 1);
}

.form-switch .form-check-input {
    background-image: var(--kt-form-switch-focus-bg-image);
}

.form-switch .form-check-input:checked {
    background-image: var(--kt-form-switch-focus-bg-image);
}

/*img.logo-banner-image {*/
/*    max-width: 100%;*/
/*  width: 1421px;*/
/*    height: 260px;*/
/*    object-fit: cover;*/
/*    position: absolute;*/
/*    border-radius:10px;*/
/*}*/

.container-text {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.container-text h1
{
font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 40px;
line-height: 48px;
text-align: center;
color: #FFFFFF;
}

.container-text h3
{
font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 18px !important;
line-height: 32px;
/* identical to box height, or 178% */
text-align: center;
color: #FFFFFF !important;
margin-bottom:20px;
}

.h-container-image {
    position: absolute;
    visibility: visible;
    left: 0;
    right: 0;
    height: 100%;
    object-fit: cover;
}

/*img.logo-banner-image2 {*/
/*    display: flex;*/
/*    position: relative;*/
/*    right: 360px;*/
/*    top: 5px;*/
/*    background: transparent;*/
/*}*/
/*img.logo-banner-image3 {*/
/*    display: flex;*/
/*    position: relative;*/
/*    right: 330px;*/
/*    top: -96px;*/
/*}*/


/*@media only screen and (max-width: 1920px) {*/
/*   img.logo-banner-image {*/
/*    min-width:95%;*/
/*  }*/
/*}*/

/*@media only screen and (max-width: 1440px) {*/
/*   img.logo-banner-image {*/
/*     max-width: 100%;*/
/*  width:600px;*/
/*    height: 260px;*/
/*    object-fit: cover;*/
/*    position: absolute;*/
/*    border-radius:10px;*/
/*  }*/
/*}*/


/*@media only screen and (max-width: 1920px) {*/
/*   img.logo-banner-image2 {*/
/*    right:610px;*/
/*  }*/
/*}*/

/*@media only screen and (max-width: 1920px) {*/
/*   img.logo-banner-image3 {*/
/*    right:580px;*/
/*  }*/
/*}*/

img.logo-banner-image {
    width: 100%;
}

@media only screen and (max-width: 1920px) {
   button.btn.btn-primary.update-btn{
    margin-right:20px;
  }
}
@media only screen and (max-width: 1440px) {
   button.btn.btn-primary.update-btn{
    margin-right:-10px;
  }
}

@media only screen and (max-width: 1440px) {
   img.logo-banner-image2 {
    right:400px;
  }
}
@media only screen and (max-width: 1440px) {
   img.logo-banner-image3 {
    right:370px;
  }
}
@media only screen and (min-width: 1366px) {
   img.logo-banner-image3 {
    right:335px;
  }
}
@media only screen and (min-width: 1366px) {
   img.logo-banner-image2 {
    right:365px;
  }
}
@media only screen and (min-width: 1492px) {
   img.logo-banner-image2 {
    right: 415px;
  /*position: relative;*/
  left: -380px;
top: -40px;
  }
  
img.logo-banner-image3 {
    right:388px;
    left: -347px;
top: -203px;

  }
}

.select2-search {
    display: none;
}
.select2-dropdown {
    background-color: #1d1d1d !important;
    border: 1px solid #303030 !important;
}
.select2-dropdown li {
    background-color: #1d1d1d !important;
}
.select2-dropdown li:hover {
    color: white !important;
}
.select2-results__option.select2-results__option--selected {
    color: white !important;
}
    
    /*JSB*/
    .d-flex.text-dark.fw-bold.my-0.fs-1{
    color:#fff !important;
    }
    .uname {
     color: #fff !important;
    }
    .m-0.text-white
    {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    
    /* identical to box height */
    letter-spacing: 0.04em;
    
    /* OFC - White */
    color: #FFFFFF;
    }
    .card-header.align-items-center.border-bottom {
      border-color: #303030 !important;
      margin: ;
    }
    .kt-section.kt-section--first h3 {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-size: 18px;
      line-height: 22px;
      color: #7D7D7D;
    }
    
    .form-control
    {
    background-color:transparent !important;
    border: 2px solid #303030 !important;
  border-radius: 10px !important;
  font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 24px;
padding:16px;
    }
    .banner_section h3
    {
    padding-top:10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    
    /* identical to box height */
    
    /* OFC - font light */
    color: #7D7D7D;
    }
    
    .btn.btn-primary.upload {
      width: 190px;
      height: 60px;
      left: 1040px;
      top: 575px;
      background: #D3F56A;
        background-color: rgb(211, 245, 106);
      border-radius: 10px;
      font-family: 'Inter' !important;
font-style: normal;
font-weight: 500;
font-size: 20px !important;
line-height: 24px;

/* OFC - button font */
color: #172C00;


    }
    h1.news_ticker
    {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    
    /* identical to box height */
    letter-spacing: 0.04em;
    
    /* OFC - White */
    color: #FFFFFF;
        }
    .card .card-header {
  border-bottom:unset !important;
}
.hrborder
{
border-bottom:1px solid #303030;
width:100%;
}
label.statuslabel{
font-family: 'Inter' !important;
font-style: normal;
font-weight: 400;
font-size: 18px !important;
line-height: 22px;

/* identical to box height */

/* OFC - font light */
color: #7D7D7D !important;
}
.col-12.record_not_found {
  text-align: center;
  color: #fff;
font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 24px;
letter-spacing: 0.04em;
margin-top:15px;
}
.select2-container--bootstrap5 .select2-selection--single.form-select-solid .select2-selection__rendered {
  color: #fff !important;
}
.dropdown.show > .form-select.form-select-solid, .form-select.form-select-solid.active, .form-select.form-select-solid.focus, .form-select.form-select-solid:active, .form-select.form-select-solid:focus
{
border-color:#303030 !important;
}
.container-profile {
    position: absolute;
    bottom: -75px;
    left: 40px;
}
.container-image-text {
    border-radius: 0.5rem;
    padding-top: 26px;
    padding-bottom: 26px;
    background-image: url("{{url('public/asset/images/bannerimage.png')}}");
    background-size: cover;
    margin-bottom: 100px;
}
img.logo-banner-image3 {
    left: -70px;
    bottom: 0px;
    position: relative;
    right: 0px;
    top: -50px;
}
div#kt_header {
    margin-bottom: 20px;
}

@media(max-width:768px){
.container-image {
    overflow: hidden;
}
img.logo-banner-image
{
width:unset;
}
.col-6 {
    width: 100%;
}
}

/*MOBILE SIZE*/
@media(max-width:467px){
.container-text h1{
font-size:25px;
}
img.logo-banner-image2
{
margin-top: 126px;
    width: 80px;
}
img.logo-banner-image3
{
margin-top:132px;
    width: 51px;
    left: -67px;
}
div#kt_header {
width:100%;
overflow-x:hidden;
}
.profile_say {
    display: flex;
    align-items: center;
    font-size: 11px;
    gap: 5px;
}
/*MOBILE ASIDE*/
div#kt_aside_menu
{
background:#151515;
}
div#kt_aside{
background:#151515 !important;    
}
/*MOBILE ASIDE*
/*MOBILE SIZE*/
}
/*JSB*/
    /*============= changes end =============*/
    
    
</style>
<?php $marque = DB::select('select* from lv_marques where status="1"'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header align-items-center border-bottom">
                <h1 class="m-0 text-white">Shop</h1>
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg> -->
                        </span>
                        <!--end::Svg Icon-->
                        <!-- <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" /> -->
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <!-- <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base"> -->
                    <!--begin::Filter-->
                    <!--begin::Menu 1-->
                    <!-- <a href="{{ route('index-with-pageNumber') }}" class="btn btn-primary">{{ __('backend/management.tickets.go_to_shop') }}</a> -->

                    <!-- </div> -->
                </div>
            </div>

            @if(session()->has("success"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session()->get("success")}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has("error"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> {{session()->get("error")}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

          {{--  @if(isset($errors))

            @if(isset(json_decode($errors)->logo[0]))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> {{json_decode($errors)->logo[0]}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @elseif(isset(json_decode($errors)->banner[0]))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> {{json_decode($errors)->banner[0]}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @elseif(isset(json_decode($errors)->shop_name[0]))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> {{json_decode($errors)->shop_name[0]}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

            @endif  --}}






            <div class="card-body py-4">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                        <div class="kt-portlet">

                            <div class="kt-portlet__head mt-5">
                                <div class="kt-portlet__head-label">
                                    <!-- <h3 class="kt-portlet__head-title">Marque Edit</h3> -->
                                </div>
                            </div>

                            <form method="POST" class="kt-form" action="{{ route('backend-management-shop-logo-update2') }}" enctype="multipart/form-data">
                                @csrf

                            <div class="row" style="display: flex; align-items: center;">

                                <div class="col-4 d-flex justify-content-center align-items-center">

                                </div>
                            </div>

                            <div class="row">

                                <div class="col-6">
                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <h3>Shop Name</h3>
                                            <!-- <form id="update-shop-name" enctype="multipart/form-data">
                                                @csrf -->
                                                <div class="form-group">
                                                    <label for="faq_edit_question" class="h5 d-none" style="font-weight: bold; float: right;">Shop Name</label>
                                                    <input type="text" class="form-control files shop-text-field" id="logo" value="{{ $shopName->value ?? ''}}" placeholder="Example Shop Name 1" data-type="logo" name="shop_name" placeholder="" value="" />
                                                    @if($errors->has('shop_name'))
                                                        <div class="error">{{ $errors->first('shop_name') }}</div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <span>
                                                        <h5 class=" mt-4 showTextShopName"></h5>
                                                    </span>
                                                    <!-- <button class="btn btn-primary btn-sm mt-3" type="submit" style="float: right;">
                                                           <span class="spinner-border spinner-border-sm d-none loading_shop_name" role="status" aria-hidden="true"></span>
                                                     <span class="loading_shop_text">Update</span> -->
                                                        <!-- visually-hidden -->
                                                    <!-- </button> -->
                                                </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <h3>Shop Currency</h3>
                                            <!-- <form id="update-shop-currency" enctype="multipart/form-data">
                                                @csrf -->
                                                <div class="form-group">
                                                    <label for="faq_edit_question" class="h5 d-none" style="font-weight: bold; float: right;">Shop Currency</label>
                                                    <select name="currency" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg form-control shop-select-field">
                                                        <option {{ $shopCurrency->value == 'dollar' ? 'selected': '' }} data-kt-flag="flags/united-states.svg" value="dollar">
                                                            <b>USD</b>&nbsp;-&nbsp;dollar</option>
                                                        <option {{ $shopCurrency->value == 'euro' ? 'selected': '' }} data-kt-flag="flags/united-kingdom.svg" value="euro">
                                                            <b>EUR</b>&nbsp;-&nbsp;euro</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <span>
                                                        <h5 class=" mt-4 showTextShopCurrency"></h5>
                                                    </span>
                                                    <!-- <button class="btn btn-primary btn-sm mt-3" type="submit" style="float: right;">
                                                        <span class="spinner-border spinner-border-sm d-none loading_shop_currency" role="status" aria-hidden="true"></span>
                                                        <span class="loading_shop_text_currency">Update</span> -->
                                                        <!-- visually-hidden -->
                                                    <!-- </button> -->
                                                </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>




                                <div class="row banner_section">
                                    <h3>Logo and Banner</h3>
                                    <div id="imgBannerBg"  class="container-image-text d-flex justify-content-center" style="position: relative;">
                                        <div class="container-text">
                                            <h1>Add a banner</h1>
                                            <h3>Add a banner to your shop</h3>
                                           <button type="submit" class="btn btn-primary upload">Upload Banner</button>
                                        </div>
                                        <img src="{{url('public/asset/images/uploadicon.png')}}" style="position:absolute; right: 0; bottom: 0; cursor: pointer;" onclick="openBannerBgModal()" />
                                        <input id="bg-banner-input"  accept="image/*" type="file" name="upload-bg-banner" onchange="changeBannerBg(event)" hidden />
                                        <div class="container-profile">
                                            <img id="imgBannerMark" src="{{url('public/asset/images/profilethumb.png')}}" class="logo-banner-image2" style="overflow: hidden; border-radius: 50%; width: 150px; height: 150px; object-fit: cover;">                
                                            <img src="{{url('public/asset/images/uploadicon.png')}}"class="logo-banner-image3" style="cursor:pointer;" onclick="openBannerMarkModal()">
                                            <input id="mark-banner-input"  accept="image/*" type="file" name="upload-mark-banner" onchange="changeBannerMark(event)" hidden />
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-10 mb-10">
            <div class="card-header">
                <div class="row mt-5" style="display: flex; align-items: center;">

                    <div class="col-12 d-flex align-items-center">
                        <h1 class="m-0 news_ticker">News Ticker</h1>
                        
                    </div>

                </div>
                <div class="hrborder"></div>
            </div>
            <div class="card-body">

                <div class="row mt-5">

                    <div class="col-12">
                        <label class="form-label statuslabel">Status</label>
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group d-flex  justify-content-between align-items-center">
                                    <div class="d-flex">
                                        
                                        <div class="form-check form-switch">

                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="marquee_status" @foreach($marque as $value) @for($i=0;$i <=1 ;$i++) @if($value->status == 1)
                                            {{'checked'}}
                                            @else

                                            @endif
                                            @endfor
                                            @endforeach
                                            >
                                            <div class="spinner-border spinner-border-sm marqueLoader d-none" role="status"></div>
                                            <label class="form-check-label flexSwitchCheckCheckedText text-success" for="flexSwitchCheckChecked"></label>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-primary" id="svg-button" data-bs-toggle="modal" data-bs-target="#addMarquee"><svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10.0565V7.86522H7.78924V0H10.0897V7.86522H18V10.0565H10.0897V18H7.78924V10.0565H0Z" fill="#4B4B4B"/>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hrborder" style="margin-top:25px"></div>
                    </div>
                    <div class="ticket-table" style="color: white; font-size: 16px;">
                        <table style="text-align: left;">
                            <tbody style="display:table; width: 100%">
                                <tr style="margin-bottom: 10px;">
                                    <th>Sr.No</th>
                                    <th>News Ticker</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>  
                                <tr>
                                    <td>1</td>
                                    <td>Discover & Callect Extraordinary Digital Art and Rare NFT'</td>
                                    <td>Active</td>
                                    <td>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>


                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </td>
                                </tr>   
                            </tbody>
                        
                        </table>
                    </div>
                    <!-- <div class="col-12 record_not_found">
                        <p style="margin: 0;">No Records Found!</p>
                    </div> -->
                </div>


                
            </div>
        </div>
    </div>
</div>


<!-- Marquee Edit Model -->

<div class="modal fade" id="editMarquee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="false" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">News Ticker</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateMarqueeForm">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="number" class="form-control" id="marquee_id" name="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">News ticker Text</label>
                        <input type="text" class="form-control" id="marqueeText" name="marqueeText">
                    </div>

                    <div class="d-flex justify-content-center marqueeLoader">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>&nbsp;&nbsp;<span class="h3" style="margin: 0;">feching data...</span>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                <button class="btn btn-primary marqueeSaveBtn" type="button" disabled onclick="updateMarquee()" style="cursor: pointer;s">
                    <span class="spinner-border spinner-border-sm d-none updateLoader" role="status" aria-hidden="false"></span>
                    <label class="marqueeSaveText">Update</label>
                </button>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addMarquee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="false" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #1d1d1d;">
            <div class="modal-header" style="border-bottom: 1px solid #303030">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">News Ticker</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding-bottom: 0;">
                <form id="addMarqueeForm">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="color: gray;">News Ticker Text</label>
                        <input type="text" class="form-control" id="addmarqueeText" name="addmarqueeText" style="padding:10px">
                    </div>

                    <!-- <div class="d-flex justify-content-center marqueeLoader">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>&nbsp;&nbsp;<span class="h3" style="margin: 0;">feching data...</span>
                    </div> -->
                </form>
            </div>

            <div class="modal-footer" style="border: none">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: white !important">Close</button>


                <button class="btn btn-primary marqueeAddBtn" type="button" onclick="addMarquee()" style="cursor: pointer;">
                    <span class="spinner-border spinner-border-sm d-none updateLoader" role="status" aria-hidden="false"></span>
                    <label class="marqueeSaveText">Save</label>
                </button>

            </div>
        </div>
    </div>
</div>

 <!-- confirmation madel -->

<div class="modal" tabindex="-1" id="confirmation_model" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Delete</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size: 15px;">Are you sure you want to delete banner?</p>
      </div>
      <div class="modal-footer">
        <a href="{{route('deleteImg',['name'=>'banner'])}}"  class="btn btn-primary">Yes</a>
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" id="logo-confirmation_model" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Delete</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="font-size: 15px;">Are you sure you want to delete Logo?</p>
            </div>
            <div class="modal-footer">
                <a href="{{route('deleteImg',['name'=>'logo'])}}" class="btn btn-primary">Yes</a>
                <button type="button" class="btn btn-secondary close" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>



@endsection


@section('page_scripts')
<script>
   $('.banner_delete').on('click',function(){
    // console.log('done');
    $('#confirmation_model').modal('show');
   });

   $('.logo_delete').on('click',function(){
    // console.log('done');
    $('#logo-confirmation_model').modal('show');
    });

   $('.close').on('click',function(){
    $('#confirmation_model, #logo-confirmation_model').modal('hide');

   })

    // Declare All Variables

    var logo = document.querySelector(".showLogo");
    var banner = document.querySelector(".showBanner");
    var checkButton = document.getElementById("flexSwitchCheckChecked");
    var ConditionText = document.querySelector(".flexSwitchCheckCheckedText");
    var marqueLoader = document.querySelector(".marqueLoader");
    var loadingLogo = document.querySelector(".loading_logo");
    var loadingLogoText = document.querySelector(".loading_logo_text");
    var loadingBanner = document.querySelector(".loading_banner");
    var loadingBannerText = document.querySelector(".loading_banner_text");
    var loadingShop = document.querySelector(".loading_shop_name");
    var loadingShopText = document.querySelector(".loading_shop_text");

    var loadingShopCurrency = document.querySelector(".loading_shop_currency");
    var loadingShopTextCurrency = document.querySelector(".loading_shop_text_currency");

    // On Change File Function Set Image Using Base Path

    function logoUpload(element) {
        var imgUrl = URL.createObjectURL(element.files[0]);
        if (element.getAttribute("data-type") == "banner") {
            banner.src = imgUrl;
        } else {
            logo.src = imgUrl;
        }
    }

    // Set Class Loader & text Swith Button

    $(marqueLoader).removeClass("d-none");
    $(ConditionText).addClass("d-none");

    // Set window Event & Check Swith Button Condition

    window.addEventListener("load", (e) => {
        if (checkButton.checked) {
            // Remove Class Loader & text Swith Button
            $(marqueLoader).addClass("d-none");
            $(ConditionText).addClass("text-success").removeClass("text-danger d-none").html("Activated");

        } else {
            // Set Class Loader & text Swith Button Base Condition
            $(marqueLoader).addClass("d-none");
            $(ConditionText).addClass("text-danger").removeClass("text-success d-none").html("Deactivated");
        }
    });

    // swith button trun on & off Condition function

    checkButton.addEventListener("click", (e) => {

        // Send Request & Set Marquee Status like true,false

        $.post("{{url('marqueStatus')}}", {
            "_token": "{{ csrf_token() }}", // Set CSRF token
            beforeSend: setupBeforeAction, // Call Before function
            "status": e.target.checked // Status true,false
        }).then((response) => {
            if (response.status == true) {
                setupCompleteFunctionAction(); // Call  Response Complete Function here
            }
        });

        // Set Some Condition before Data Response

        function setupBeforeAction() {
            $(ConditionText).addClass("d-none");
            $(marqueLoader).removeClass("d-none");
        }

        // Remove Some Condition after Data Response

        function setupCompleteFunctionAction() {
            $(ConditionText).removeClass("d-none");
            $(marqueLoader).addClass("d-none");

            if (e.target.checked) {
                $(ConditionText).addClass("text-success").removeClass("text-danger").html("Activated");
            } else {
                $(ConditionText).addClass("text-danger").removeClass("text-success").html("Deactivated");
            }
        }

    });

    // Logo Update Jquery Function here.

    $(document).ready(function() {
        $('#image-upload-logo').submit(function(e) {
            e.preventDefault(); // prevent the form from submitting normally
            var formData = new FormData(this);

            $.ajax({
                url: "{{route('backend-management-shop-logo-update')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $(loadingLogo).removeClass("d-none");
                    $(loadingLogoText).addClass("visually-hidden");
                },
                success: function(data) {
                    // handle successful response from server

                    if (data.status == true) {
                        $('#image-upload-logo')[0].reset();
                        $('.showTextLogo').addClass(data.class).html(data.message);
                        $(loadingLogo).addClass("d-none");
                        $(loadingLogoText).removeClass("visually-hidden");
                    } else {
                        $('.showTextLogo').addClass(data.class).html(data.message);
                        $(loadingLogo).addClass("d-none");
                        $(loadingLogoText).removeClass("visually-hidden");
                    }

                    setTimeout(() => {
                        $('.showTextLogo').removeClass(data.class).html("");
                    }, 2000);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('.showTextLogo').addClass(data.class).html(data.message);
                    $(loadingLogo).addClass("d-none");
                    $(loadingLogoText).removeClass("visually-hidden");
                    setTimeout(() => {
                        $('.showTextLogo').html("");
                    }, 2000);
                }
            });
        });
    });

    // Banner Update Jquery Function here.

    $(document).ready(function() {
        $('#image-upload-banner').submit(function(e) {
            e.preventDefault(); // prevent the form from submitting normally
            var formData = new FormData(this);

            $.ajax({
                url: "{{route('backend-management-shop-logo-update')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $(loadingBanner).removeClass("d-none");
                    $(loadingBannerText).addClass("visually-hidden");
                },
                success: function(data) {
                    // handle successful response from server

                    if (data.status == true) {
                        $('#image-upload-banner')[0].reset();
                        $('.showTextBanner').addClass(data.class).html(data.message);
                        $(loadingBanner).addClass("d-none");
                        $(loadingBannerText).removeClass("visually-hidden");
                    } else {
                        $('.showTextBanner').addClass(data.class).html(data.message);
                        $(loadingBanner).addClass("d-none");
                        $(loadingBannerText).removeClass("visually-hidden");
                    }

                    setTimeout(() => {
                        $('.showTextBanner').removeClass(data.class).html("");
                    }, 2000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('.showTextBanner').addClass(data.class).html(data.message);
                    $(loadingBanner).addClass("d-none");
                    $(loadingBannerText).removeClass("visually-hidden");
                    setTimeout(() => {
                        $('.showTextBanner').html("");
                    }, 2000);
                }
            });
        });
    });

    // Shop Name Update Jquery Function here.

    $(document).ready(function() {
        $('#update-shop-name').submit(function(e) {
            e.preventDefault(); // prevent the form from submitting normally
            var formData = new FormData(this);

            $.ajax({
                url: "{{route('backend-management-shop-logo-update')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $(loadingShop).removeClass("d-none");
                    $(loadingShopText).addClass("visually-hidden");
                },
                success: function(data) {
                    // handle successful response from server

                    if (data.status == true) {
                        $('#image-upload-banner')[0].reset();
                        $('.showTextShopName').addClass(data.class).html(data.message);
                        $(loadingShop).addClass("d-none");
                        $(loadingShopText).removeClass("visually-hidden");
                    } else {
                        $('.showTextShopName').addClass(data.class).html(data.message);
                        $(loadingShop).addClass("d-none");
                        $(loadingShopText).removeClass("visually-hidden");
                    }

                    setTimeout(() => {
                        $('.showTextShopName').html("");
                    }, 2000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    if (textStatus == 'error') {
                        console.log(jqXHR.responseJSON.errors.shop_name[0]);
                        $('.showTextShopName').addClass("text-danger").html(jqXHR.responseJSON.errors.shop_name[0]);
                        $(loadingShop).addClass("d-none");
                        $(loadingShopText).removeClass("visually-hidden");
                        setTimeout(() => {
                            $('.showTextShopName').removeClass('text-danger').html("");
                        }, 2000);
                    }
                }
            });
        });
    });

    $(document).ready(function() {
        $('#update-shop-currency').submit(function(e) {
            e.preventDefault(); // prevent the form from submitting normally
            var formData = new FormData(this);

            $.ajax({
                url: "{{route('backend-management-shop-logo-update')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $(loadingShopCurrency).removeClass("d-none");
                    $(loadingShopTextCurrency).addClass("visually-hidden");
                },
                success: function(data) {
                    // handle successful response from server

                    if (data.status == true) {
                        $('#image-upload-banner')[0].reset();
                        $('.showTextShopCurrency').addClass(data.class).html(data.message);
                        $(loadingShopCurrency).addClass("d-none");
                        $(loadingShopTextCurrency).removeClass("visually-hidden");
                    } else {
                        $('.showTextShopCurrency').addClass(data.class).html(data.message);
                        $(loadingShopCurrency).addClass("d-none");
                        $(loadingShopTextCurrency).removeClass("visually-hidden");
                    }

                    setTimeout(() => {
                        $('.showTextShopCurrency').html("");
                    }, 2000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    if (textStatus == 'error') {
                        console.log(jqXHR.responseJSON.errors.shop_name[0]);
                        $('.showTextShopCurrency').addClass("text-danger").html(jqXHR.responseJSON.errors.shop_name[0]);
                        $(loadingShopCurrency).addClass("d-none");
                        $(loadingShopTextCurrency).removeClass("visually-hidden");
                        setTimeout(() => {
                            $('.showTextShopCurrency').removeClass('text-danger').html("");
                        }, 2000);
                    }
                }
            });
        });
    });

    function openBannerBgModal() {
        $('#bg-banner-input').click()
    }

    function openBannerMarkModal() {
        $('#mark-banner-input').click()
    }

    function changeBannerBg(e) {
        
        var file = e.target.files[0]
        let reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onload = function () {
            
            var img = document.getElementById('imgBannerBg')
            console.log('loaded', img.style.backgroundImage)
            img.style.backgroundImage = "url(" + reader.result + ")";
        }
    }

    function changeBannerMark(e) {
        
        var file = e.target.files[0]
        let reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onload = function () {
            
            var img = document.getElementById('imgBannerMark')
            img.src = reader.result;
        }
    }

    // Get Marquee With ID

     function editMarque(id){

            $.get("{{url('getMarquee')}}",{
                "_token":"{{csrf_token()}}",
                "id":id,
                before:marqueeBeforeFunction
            }).then((response)=>{
                if(response.status === true){
                    $("#marquee_id").val(response.data.id);
                    $("#marqueeText").val(response.data.marque_text);
                    $(".marqueeLoader").addClass("d-none");
                    $(".marqueeSaveBtn").prop("disabled",false);
                }
            });
    }

    function marqueeBeforeFunction(){
        $(".marqueeLoader").removeClass("d-none");
        $(".marqueeSaveBtn").prop("disabled",true);
    }

    // Update Marquee function

    function updateMarquee(){

        $.post("{{url('updateMarquee')}}",{
                "_token":"{{csrf_token()}}",
                "id": $("#marquee_id").val(),
                "marqueeText": $("#marqueeText").val(),
                before:marqueeUpdateBeforeFunction
        }).then((response)=>{
           if(response.status === true){
                $(".btn-close").click();
                $(".marqueeSaveBtn").prop("disabled",false);
                $(".updateLoader").addClass("d-none");
                $(".marqueeSaveText").html("Update");
           }
        });

    }

  

    function marqueeUpdateBeforeFunction(){
        $(".marqueeSaveBtn").prop("disabled",true);
        $(".updateLoader").removeClass("d-none");
        $(".marqueeSaveText").html("Updating....");
    }

    function deleteMarque(id){
        $.post("{{url('deleteMarquee')}}",{
                "_token":"{{csrf_token()}}",
            "id":id,
            before:marqueeBeforeFunction
        }).then((response)=>{
            if(response.status === true){
                location.reload();
            }
        });
    }


    function addMarquee(){

        $.post("{{url('addMarquee')}}",{
                "_token":"{{csrf_token()}}",
                "marqueeText": $("#addmarqueeText").val(),
        }).then((response)=>{
            if(response.status === true){
                location.reload();
            }
        });

}



</script>
@endsection
