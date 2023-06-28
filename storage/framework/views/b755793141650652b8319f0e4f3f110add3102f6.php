
<?php $__env->startSection('pageTitle', __('Welcome back')); ?>

<?php
    $name = Auth::user()->name;
?>

<?php $__env->startSection('content'); ?>
    <style>
        .chart-legend {
            margin-top: 80px;
            /* Adjust the top margin to set the space between the legend and the graph */
        }

        .height-100 {
            height: 100%;
        }

        .timeline-label:before {
            left: 88px !important;
        }

        .aside {
            display: flex;
            flex-direction: column;
            /*background-color: #232f3e;*/
            padding: 0
        }

        .apexcharts-canvas .apexcharts-xaxistooltip,
        .apexcharts-canvas .apexcharts-tooltip {
            display: none;
        }

        .image-container {
            width: 5vw;
            height: 5vw;
            background: transparent;
            display: flex;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            margin-right: 1vw;
            border-radius: 25%;
        }

        .text {
            margin: auto;
            font-size: .6vw !important;
            font-weight: 600;
            color: var(--tp-common-white);
            line-height: 1vw;
        }

        .image_text {
            width: 5vw;
            height: 5vw;
            margin-right: 1vw;
            object-fit: cover;
            border-radius: 25%;
        }

        .image-container_top_seller {
            width: 5vw;
            height: 5vw;
            background: transparent;
            display: flex;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .text_top_seller {
            margin: auto;
            font-size: .5vw !important;
            font-weight: 600;
            color: var(--tp-common-white);
            line-height: 1vw;
        }

        .image_text_top_seller {
            width: 3vw;
            height: 3vw;
        }

        .td_href {
            display: flex !important;
            align-items: center;
            justify-content: flex-start;
        }

        [data-theme=dark] .card,
        [data-theme=dark] .card-body {
            background-color: #1d1d1d !important;
        }

        [data-theme=dark] body {
            background-color: #151515;
        }

        .dasboard_graph .col-xl-9,
        .dasboard_graph .col-xl-3 {
            padding: 0px;
        }

        .row.dasboard_graph_2 .col-xl-3 {
            padding: 0px;
            padding-left: 10px;
        }

        .graph_block .card-body.d-flex.flex-column path {
            stroke: #D3F56A;
        }

        .graph_block .card:hover {
            background-color: #D3F56A !important;
        }

        .graph_block .card:hover .d-flex.flex-column path {
            stroke: white;
        }

        span.value {
            color: #d3f56a;
        }

        .card:hover span.value {
            color: white;
        }

        /*.card-body.d-flex.flex-column {*/
        /*    background-image: url('https://laravel-site.net/laravelsite-app/assets/newdesign/assets/img/arrow11.png');*/
        /*    background-repeat: no-repeat;*/
        /*    background-position: right;*/

        /*}*/
        .card:hover .card-body.d-flex.flex-column {
            background-image: url('https://laravel-site.net/laravelsite-app/assets/newdesign/assets/img/arrow11.png');
            background-repeat: no-repeat;
            background-position: right;
            background-color: #D3F56A !important;
        }

        .offer_block button {
            padding-top: 18px;
            padding-bottom: 18px;
            width: 100%;
            border-radius: 10px;
            border: none;
            background-color: #D3F56A;
            font-size: 20px;
        }

        .offer_block p {
            font-size: 20px;
        }

        .offer_block {
            background-color: #2A4B52;
            border-radius: 0px;
            padding: 30px;
            display: flex;
            height: 100%;
            flex-direction: column;
            justify-content: center;
        }

        .row.gy-5.g-xl-5.graph_block {
            margin-top: 0px;
        }

        .row.gy-5.g-xl-5.graph_block .card,
        .offer_block {
            border-radius: 8px !important;
            overflow: hidden;
        }

        p.dashboard_about {
            position: relative;
            top: -15px;
        }

        p.dashboard_about {
            font-size: 16px;
            color: #BBBBBB;
        }

        img.user_img {
            max-width: 35px;
        }

        .main_view.text-dark.fw-bold.fs-3x.me-2 {
            margin-top: 13px;
            font-size: 18px !important;
        }

        .card_main_1 {
            border-radius: 15px 0px 0px 15px;
            overflow: hidden;
        }

        /*.card_main_1.card*/
        /*{*/
        /*background-color:#D3F56A !important;*/
        /*}*/

        .graph_block .card:hover,
        .dasboard_graph .card:hover .card_main_1 .card {
            background-color: red !important;
        }

        .card_main_1 .main_view.text-dark.fs-3x.me-2.sal-card-desc {
            color: #fff !important;
        }

        .card_main_1 a.text-dark.fs-3.sal-card-title {
            color: #1D1D1D !important;
        }

        .card_main_1 span.view_stastics {
            color: #607916 !important;
        }

        .card_main_1 span.view_stastics svg {
            color: #607916 !important;
        }

        .row.dasboard_graph .card_main_4 {
            border-radius: 0px 15px 15px 0px;
            overflow: hidden;
        }

        .card_main_2,
        .card_main_3 {
            border-radius: 0px;
            border: 1px solid #80808054;
            border-top: none;
            border-bottom: none;
        }

        .pt-5.bottom_work {
            font-size: 14px !important;
        }

        .graph_block .card:hover,
        .dasboard_graph .card:hover {
            color: #607916 !important;
        }

        :root .dasboard_graph_2 .card:hover a,
        .graph_block .card:hover .main_view,
        .dasboard_graph .card:hover a,
        .dasboard_graph .card:hover .main_view {
            color: #1D1D1D !important;
        }

        :root .card:hover .bottom_work path {
            stroke: #607916;
        }

        .dasboard_graph_2 .col-xl-3 {
            padding: 0px;
        }

        .dasboard_graph_2 .col-xl-9 {
            padding: 0px;
            padding-left: 0px;
        }

        .row.dasboard_graph_2 {
            margin-top: 10px;
        }

        .row.dasboard_graph_2 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .dasboard_graph_2 .col-xl-3 {
            padding: 0px;
            padding-left: 10px;
        }

        .main_view {
            font-size: 21px !important;
            margin-top: 15px;
        }

        .card.card-xxl-stretch.mb-5.mb-xl-10.theme-dark-bg-body {
            height: 94%;
        }

        .offer_block {
            background-image: url('https://laravel-site.net/images/Offer_BG.png');
            background-size: cover;
        }

        span.view_count {
            margin-left: 36px;
        }

        span.red_alert {
            color: #DA5538 !important;
        }

        .row.dasboard_graph {
            margin-top: 24px;
        }

        @media  only screen and (min-width: 1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1573px;
            }

            .pt-5.bottom_work {
                font-size: 19px;
            }

            .main_view.text-dark.fw-bold.fs-3x.me-2 {
                margin-top: 13px;
                font-size: 23px !important;
            }

            .main_view {
                margin-top: 37px;
            }

            .row.dasboard_graph_2 {
                margin-top: 20px;
                margin-bottom: 10px;
            }

            .row.dasboard_graph_2 .col-xl-3 {
                padding-left: 20px;
            }

            .row.dasboard_graph_2 .col-xl-3 img {
                height: 100%;
            }

            .main_view {
                font-size: 28px !important;
                font-weight: 500;
            }

            p.dashboard_about {
                position: relative;
                top: -10px;
                font-size: 20px !important;
            }

            .offer_block p {
                font-size: 25px;
            }
        }

        /*JSB*/
        body#kt_body {
            background: #151515 !important;
        }

        h1.d-flex.text-dark.fw-bold.my-0.fs-1 {
            font-size: 38px !important;
            color: #fff !important;
        }

        .profile_say p.uname {
            color: #fff;
        }

        a.text-dark.fs-3.sal-card-title {
            color: #BBB !important;
        }

        .card_main_1 a.text-dark.fs-3.sal-card-title {
            color: #BBB !important;
        }

        .main_view.text-dark.fs-3x.me-2.sal-card-desc {
            color: #fff !important;
        }

        .graph_block .card:hover,
        .dasboard_graph .card:hover a.text-dark.fs-3.sal-card-title {
            color: #1D1D1D !important;
        }

        .graph_block .card:hover,
        .dasboard_graph .card:hover .main_view.text-dark.fs-3x.me-2.sal-card-desc {
            color: #1D1D1D !important;
        }

        .graph_block .card:hover,
        .dasboard_graph .card:hover span.view_count {
            color: unset !important;
        }

        span.view_count {
            color: #7d7d7d;
        }

        .graph_block .card:hover,
        .dasboard_graph .card:hover span.view_stastics {
            color: unset !important;
        }

        span.view_stastics {
            color: #D3F56A;
        }

        p.main_rice {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 37px;
            color: #fff;
        }

        .row.search-bar {
            align-items: center;
        }

        .row.search-bar input {
            width: 100%;
            border-radius: 10px;
            border: 2px solid #303030;
            background: transparent;
            padding: 7px 34px;
            color: #7D7D7D;
        }

        .row.search-bar input:focus-visible {
            outline: 1px solid #303030;
            ;
        }

        .row.search-bar select {
            width: 100%;
            border-radius: 10px;
            border: 2px solid #303030;
            padding: 10px;
            color: #fff;
        }

        .row.search-bar input::placeholder {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 22px;
            color: #7D7D7D;
        }

        label {
            display: unset;
            position: relative;
        }

        label:before {
            content: "";
            position: absolute;
            left: 10px;
            top: 0;
            bottom: 0;
            width: 20px;
            background: url("public/asset/images/searchicon.svg") center / contain no-repeat;
        }


        .row.search-bar h1 {
            color: #fff;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 22px;
            margin: 0px;
            /* identical to box height */
            letter-spacing: 0.06em;
        }

        .card.mb-5.mb-xl-10.table_offer {
            padding: 30px;
        }

        .search-bar.card .card-body {
            padding: 0px !important;
        }

        .table.table-row-gray-300.align-middle.gs-0.gy-4 tr th {
            color: #7d7d7d;
        }

        .table.table-row-gray-300.align-middle.gs-0.gy-4 tr td {
            color: white;
        }

        h1.sal-rev-h1 {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 27px;
            letter-spacing: 0.06em;
            color: white;
        }

        h2.sal-rev-h2 {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 27px;
            letter-spacing: 0.06em;
            color: #FFFFFF;
            padding-bottom: 15px;
        }

        #jsbrel img {
            margin-left: 15px;
        }

        #jsbrel a {
            margin-top: 10px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
            color: #FFF7F7;
            display: block;
            text-align: right;
        }

        span.sal-rev-span {
            display: block;
            color: #fff;
            text-align: center;
            margin-top: 132px;
            margin-left: 80px;
            position: absolute;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 22px;
            line-height: 27px;

            /* identical to box height */

            color: #FFFFFF;
        }

        #myChart {
            height: 380px;
            border-color: red;
        }

        .sal-graph-card {
            background: #1D1D1D;
            border-radius: 10px;
            height: 100%;
        }

        .jsb-flex {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .jsb-flex a {
            text-align: left !important;
        }

        .jsb-flex ul {
            margin-bottom: 0px;
        }

        .jsb-flex ul li {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
        }

        .jsb-flex ul li a {
            color: #7D7D7D !important;
        }

        .j-item-1 {
            color: #DA5538 !important;

        }

        .j-item-2 {
            color: #2A4B52;
             !important;
        }

        .j-item-3 {
            color: #D3F56A !important;
        }

        #clippedDiv {
            position: absolute;
            width: 20px;
            height: 20px;
            background: #363636;
            margin-top: 5px;
            margin-left: 40px;
            -webkit-clip-path: polygon(50% 0%, 100% 0, 100% 35%, 50% 70%, 0 35%, 0 0);
            clip-path: polygon(50% 0%, 100% 0, 100% 35%, 50% 70%, 0 35%, 0 0);
        }

        .jsb-row {
            position: absolute;
            width: 0px;
            height: 200px;
            left: 980px;
            top: 620px;

            border: 2px dashed #7D7D7D;
        }

        .jsb-card {
            width: 150px;
            height: 80px;
            position: absolute;
            width: 150px;
            height: 80px;
            left: 920px;
            top: 500px;
            text-align: center;
            padding: 10px;
            color: #fff;
            background: #363636;
            border-radius: 10px;
        }


        @media(max-width:768px) {
            .jsb-row {
                position: unset !important;

                border: 2px dashed #7D7D7D;
            }

            .jsb-card {
                width: 150px;
                height: 80px;
                position: unset !important;
                width: 150px;
                height: 80px;
                left: 920px;
                top: 500px;
                text-align: center;
                padding: 10px;
                color: #fff;
                background: #363636;
                border-radius: 10px;
            }
        }


        .jsb-card h2 {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #7D7D7D;
        }

        .jsb-card h3 {

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 29px;

            /* identical to box height */

            color: #FFFFFF;
        }

        #topProductTable {
            font-size: 20px;
        }

        .jsb-active {
            position: relative;
        }

        /*JSB*/
    </style>
    <!-- begin:: Content Head -->
    
    <div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <div class="main_row">
                <p class="dashboard_about">Here’s what’s happening with your store today.</p>
            </div>
            <!--begin::Row-->

            <div class="row dasboard_graph ">
                <div class="col-xl-3 col-sm-12">
                    <div class="card card-xl-stretch mb-xl-0 theme-dark-bg-body card_main_1">
                        <div class="card-body d-flex flex-column jsb-active jsb-active-1">
                            <div style="display: none;" class="svg-container">
                                <svg style="position: absolute; right:0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <svg style="position: absolute; right: 0; bottom: 0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark fs-3 sal-card-title">
                                    <img src="<?php echo e(url('public/asset/images/totalsales.svg')); ?>">
                                    Total sales</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="main_view text-dark fs-3x me-2 sal-card-desc">$825,491.73</div>
                                <!-- <div class="mixed-widget-13-chart" style="height: 100px"></div> -->

                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5 bottom_work">
                                <!--begin::Number-->
                                <span class="view_stastics"> <svg width="12" height="12" viewBox="0 0 12 12"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.5H10.5V10" stroke="#607916" stroke-width="1.5" />
                                        <path d="M10.5 1.5L1.5 10.5" stroke="#607916" stroke-width="1.5" />
                                    </svg>
                                    20.9%</span>
                                <span class="view_count">+3.5K this week</span>
                                <!--end::Number-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12">
                    <div class="card card-xl-stretch mb-xl-0 theme-dark-bg-body card_main_2">
                        <div class="card-body d-flex flex-column jsb-active jsb-active-2">
                            <div style="display: none;" class="svg-container">
                                <svg style="position: absolute; right:0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <svg style="position: absolute; right: 0; bottom: 0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark fs-3 sal-card-title">
                                    <img src="<?php echo e(url('public/asset/images/visitors.svg')); ?>">
                                    Visitors</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="main_view text-dark fs-3x me-2 sal-card-desc">780,192</div>
                                <!-- <div class="mixed-widget-13-chart" style="height: 100px"></div> -->

                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5 bottom_work">
                                <!--begin::Number-->
                                <span class="view_stastics"> <svg width="12" height="12" viewBox="0 0 12 12"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.5H10.5V10" stroke="#D3F56A" stroke-width="1.5" />
                                        <path d="M10.5 1.5L1.5 10.5" stroke="#D3F56A" stroke-width="1.5" />
                                    </svg>
                                    20.9%</span>
                                <span class="view_count">+3.5K this week</span>
                                <!--end::Number-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12">
                    <div class="card card-xl-stretch mb-xl-0 theme-dark-bg-body card_main_3">
                        <div class="card-body d-flex flex-column jsb-active jsb-active-3">
                            <div style="display: none;" class="svg-container">
                                <svg style="position: absolute; right:0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <svg style="position: absolute; right: 0; bottom: 0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark fs-3 sal-card-title">
                                    <img src="<?php echo e(url('public/asset/images/totalorders.png')); ?>">
                                    Total Orders</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="main_view text-dark fs-3x me-2 sal-card-desc">2625.991</div>
                                <!-- <div class="mixed-widget-13-chart" style="height: 100px"></div> -->

                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5 bottom_work">
                                <!--begin::Number-->
                                <span class="view_stastics"> <svg width="12" height="12" viewBox="0 0 12 12"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.5H10.5V10" stroke="#D3F56A" stroke-width="1.5" />
                                        <path d="M10.5 1.5L1.5 10.5" stroke="#D3F56A" stroke-width="1.5" />
                                    </svg>
                                    20.9%</span>
                                <span class="view_count">+3.5K this week</span>
                                <!--end::Number-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12">
                    <div class="card card-xl-stretch mb-xl-0 theme-dark-bg-body card_main_4">
                        <div class="card-body d-flex flex-column jsb-active jsb-active-4">
                            <div style="display: none;" class="svg-container">
                                <svg style="position: absolute; right:0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <svg style="position: absolute; right: 0; bottom: 0;" width="183" height="100"
                                    viewBox="0 0 183 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_13_673)"
                                        fill-opacity="0.5" />
                                    <defs>
                                        <linearGradient id="paint0_linear_13_673" x1="77.5" y1="1.17382e-06"
                                            x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark fs-3 sal-card-title">
                                    <img src="<?php echo e(url('public/asset/images/refund.svg')); ?>">
                                    Refund</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="main_view text-dark fs-3x me-2 sal-card-desc">780,192</div>
                                <!-- <div class="mixed-widget-13-chart" style="height: 100px"></div> -->

                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5 bottom_work last">
                                <!--begin::Number-->
                                <span class="red_alert view_stastics"> <svg width="12" height="12"
                                        viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 1.5L10.5 10.5L2 10.5" stroke="#DA5538" stroke-width="1.5" />
                                        <path d="M10.5 10.5L1.5 1.5" stroke="#DA5538" stroke-width="1.5" />
                                    </svg>

                                    20.9%</span>
                                <span class="view_count">+3.5K this week</span>
                                <!--end::Number-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row dasboard_graph_2">
                <!--begin::Col-->
                <div class="col-xl-9">
                    <!--begin::Mixed Widget 14-->
                    <div class="sal-graph-card p-7 pb-0" style="position: relative;">
                        <h1 class="m-0 sal-rev-h1">Revenue vs Orders</h1>
                        <div class="jsb-card">
                            <h2>Aug. 2022</h2>
                            <h3>$8,349.13</h3>
                            <div id="clippedDiv"></div>
                        </div>
                        <div class="jsb-row">
                        </div>
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->

                </div>
                <!--end::Col-->
                <div class="col-xl-3">
                    <div class="sal-graph-card p-7" id="jsbrel">
                        <h2 class="sal-rev-h2">Sales by category</h2>
                        <span class="sal-rev-span">$35.7K</span>
                        <div>
                            <canvas id="myChart2"></canvas>
                        </div>
                        <div class="jsb-flex">
                            <div>
                                <ul>
                                    <li class="j-item-1"><a href="#">Electornics</a></li>
                                    <li class="j-item-2"><a href="#">Laptop</a></li>
                                    <li class="j-item-3"><a href="#">iPhones</a></li>
                                </ul>
                            </div>
                            <div>
                                <a href="#">More<img src="<?php echo e(url('public/asset/images/arrow.svg')); ?>"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!--end::Row-->
            <!--begin::Tables Widget 9-->
            <div class="row dasboard_graph_2">
                <div class="col-xl-9 card p-7">
                    <!--This row for search bar and title before table -->
                    <div class="row search-bar">
                        <div class="col-xl-4">
                            <h1>Top products</h1>
                        </div>
                        <div class="col-xl-6">
                            <form>
                                <label style="font-size: 20px">
                                    <input type="search" placeholder="Search">
                                </label>
                            </form>
                        </div>
                        <div class="col-xl-2" style="font-size: 20px;">
                            <select class="form-select bg-transparent">
                                <option>
                                    This Week
                                </option>
                            </select>
                        </div>
                    </div>
                    <!--This row for search bar and title before table end here -->

                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive" id="topProductTable">
                            <!--begin::Table-->
                            <!-- UserOrder::orderByDesc('created_at')->limit(10)->get()->all(); -->

                            <table class="table table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th class="min-w-200px">Product name</th>
                                        <th class="min-w-150px">Order ID</th>
                                        <th class="min-w-150px">Price</th>
                                        <th class="min-w-150px">Sold</th>
                                        <th class="min-w-100px text-end">Sales</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>

                                    <tr>
                                        <td class="min-w-200px">
                                            <svg style="margin-right:13px" width="22" height="22"
                                                viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.75 2C2.75 1.30964 3.30964 0.75 4 0.75H18C18.6904 0.75 19.25 1.30964 19.25 2V11.25H2.75V2Z"
                                                    stroke="white" stroke-width="1.5" />
                                                <rect x="0.75" y="11.75" width="20.5" height="4.5"
                                                    rx="2.25" stroke="white" stroke-width="1.5" />
                                            </svg>
                                            MackBook Air AAPL

                                        </td>
                                        <td class="min-w-150px">#719261</td>
                                        <td class="min-w-150px">$1,846</td>
                                        <td class="min-w-150px">9,971</td>
                                        <td class="min-w-100px text-end">$15,308,94</td>
                                    </tr>

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <div class="col-xl-3 mt-0">
                    <div class="offer_block">
                        <p class="main_rice">Release you maximal
                            potential software.</p>
                        <button>Upgrade to Pro</button>
                    </div>
                </div>

            </div>
            <!--end::Tables Widget 9-->
            <!-- end:: Content Body -->
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('page_scripts'); ?>
            <script>
                jQuery(document).ready(function() {
                    jQuery(".jsb-active-1").hover(
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".jsb-active-1").css("background-color", "#D3F56A");
                            jQuery(".jsb-active-1 .svg-container").css("display", "block");
                        },
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".svg-container").css("display", "none");
                        }
                    );
                    jQuery(".jsb-active-2").hover(
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".jsb-active-2").css("background-color", "#D3F56A");
                            jQuery(".jsb-active-2 .svg-container").css("display", "block");
                        },
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".svg-container").css("display", "none");
                        }
                    );
                    jQuery(".jsb-active-3").hover(
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".jsb-active-3").css("background-color", "#D3F56A");
                            jQuery(".jsb-active-3 .svg-container").css("display", "block");
                        },
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".svg-container").css("display", "none");
                        }
                    );
                    jQuery(".jsb-active-4").hover(
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".jsb-active-4").css("background-color", "#D3F56A");
                            jQuery(".jsb-active-4 .svg-container").css("display", "block");
                        },
                        function() {
                            jQuery(".jsb-active").css("background-color", "transparent");
                            jQuery(".svg-container").css("display", "none");
                        }
                    );
                });
            </script>
            <script>
                $(document).ready(function() {
                    initMixedWidget13New('.mixed-widget-13-chart-new');
                    initMixedWidget13New('.mixed-widget-13-chart-orders');
                    initMixedWidget14New(".mixed-widget-14-chart-new");

                });


                var initMixedWidget14New = function(selector) {
                    var element = document.querySelector(selector);
                    var options;
                    var chart;
                    var height;


                    height = parseInt(KTUtil.css(element, 'height'));
                    var labelColor = KTUtil.getCssVariableValue('--bs-gray-800');

                    options = {
                        series: [{
                            name: 'Inflation',
                            data: JSON.parse(element.getAttribute("data-series"))
                        }],
                        chart: {
                            fontFamily: 'inherit',
                            height: height,
                            type: 'bar',
                            toolbar: {
                                show: false
                            }
                        },
                        grid: {
                            show: false,
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                                right: 0
                            }
                        },
                        colors: ['#ffffff'],
                        plotOptions: {
                            bar: {
                                borderRadius: 2.5,
                                dataLabels: {
                                    position: 'top', // top, center, bottom
                                },
                                columnWidth: '20%'
                            }
                        },
                        dataLabels: {
                            enabled: false,
                            formatter: function(val) {
                                return val + "%";
                            },
                            offsetY: -20,
                            style: {
                                fontSize: '12px',
                                colors: ["#304758"]
                            }
                        },
                        xaxis: {
                            labels: {
                                show: false,
                            },
                            categories: JSON.parse(element.getAttribute("data-categories")),
                            position: 'top',
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false
                            },
                            crosshairs: {
                                show: false
                            },
                            tooltip: {
                                enabled: false
                            }
                        },
                        yaxis: {
                            show: false,
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false,
                                background: labelColor
                            },
                            labels: {
                                show: false,
                                formatter: function(val) {
                                    return val + "%";
                                }
                            }
                        }
                    };

                    chart = new ApexCharts(element, options);
                    chart.render();
                }

                var initMixedWidget13New = function(selector) {
                    var height;
                    var element = document.querySelector(selector);
                    height = parseInt(KTUtil.css(element, 'height'));

                    if (!element) {
                        return;
                    }

                    var labelColor = KTUtil.getCssVariableValue('--bs-' + 'gray-800');
                    var strokeColor = KTUtil.getCssVariableValue('--bs-' + 'gray-300');

                    var options = {
                        series: [{
                            name: 'Net Profit',
                            data: JSON.parse(element.getAttribute("data-series"))
                        }],
                        grid: {
                            show: false,
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                                right: 0
                            }
                        },
                        chart: {
                            fontFamily: 'inherit',
                            type: 'area',
                            height: height,
                            toolbar: {
                                show: false
                            },
                            zoom: {
                                enabled: false
                            },
                            sparkline: {
                                enabled: true
                            }
                        },
                        plotOptions: {},
                        legend: {
                            show: false
                        },
                        dataLabels: {
                            enabled: false
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                opacityFrom: 0.4,
                                opacityTo: 0,
                                stops: [20, 120, 120, 120]
                            }
                        },
                        stroke: {
                            curve: 'smooth',
                            show: true,
                            width: 3,
                            colors: ['#FFFFFF']
                        },
                        xaxis: {
                            categories: JSON.parse(element.getAttribute("data-categories")),
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false
                            },
                            labels: {
                                show: false,
                                style: {
                                    colors: labelColor,
                                    fontSize: '12px'
                                }
                            },
                            crosshairs: {
                                show: false,
                                position: 'front',
                                stroke: {
                                    color: strokeColor,
                                    width: 1,
                                    dashArray: 3
                                }
                            },
                            tooltip: {
                                enabled: true,
                                formatter: undefined,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px'
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 60,
                            labels: {
                                show: false,
                                style: {
                                    colors: labelColor,
                                    fontSize: '12px'
                                }
                            }
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: 'none',
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: false,
                                filter: {
                                    type: 'none',
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: '12px'
                            },
                            y: {
                                formatter: function(val) {
                                    return "$" + val + " thousands"
                                }
                            }
                        },
                        colors: ['#ffffff'],
                        markers: {
                            colors: [labelColor],
                            strokeColor: [strokeColor],
                            strokeWidth: 3
                        }
                    };

                    var chart = new ApexCharts(element, options);
                    chart.render();
                }

                function changeStatus(obj) {
                    let status = $('.selectTicketOption').find('option:selected').val()
                    let ticket = $('.ticketCheck').attr('checked')
                    $.each(ticket, function(i, e) {
                        $.ajax({
                            type: "post",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "/admin/order/change-status",
                            data: {
                                status: status,
                                ticket: $(this).attr('data-id')
                            },
                            dataType: "json",
                            success: function(response) {
                                swal({
                                    title: "Error!",
                                    text: "Here's my error message!",
                                    type: "error",
                                    confirmButtonText: "Cool"
                                });
                            }
                        });


                    })



                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                // Prepare the data
                var data = {
                    datasets: [{
                        data: [10, 20, 70],
                        backgroundColor: ['#D3F56A', '#2A4B52', '#DA5538'],
                    }]
                };

                // Configure the chart
                var options = {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            align: 'center',
                            labels: {
                                boxWidth: 15,
                                padding: 10,
                            }
                        }
                    },
                    elements: {
                        arc: {
                            borderColor: 'transparent', // Set the border color to white
                        }
                    }
                };

                // Create the chart
                var ctx = document.getElementById('myChart2').getContext('2d');
                var myChart2 = new Chart(ctx, {
                    type: 'doughnut',
                    data: data,
                    options: options
                });
            </script>

            <script>
                var ctx = document.getElementById('myChart').getContext('2d');

                // Sample data for revenue and orders over time
                var data = {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                            label: 'Revenue',
                            data: [100, 200, 150, 300, 250, 350, 200, 200, 250, 300, 250, 350],
                            backgroundColor: '#DA5538',
                            pointBackgroundColor: '#DA5538',
                            borderColor: '#DA5538',
                            borderWidth: 2.5,
                            pointRadius: 0,
                            cubicInterpolationMode: 'monotone' // Set interpolation mode to 'monotone' for smooth curves
                        },
                        {
                            label: 'Orders',
                            data: [50, 100, 80, 120, 90, 150, 130, 180, 160, 200, 180, 220],
                            backgroundColor: '#D3F56A',
                            pointBackgroundColor: '#D3F56A',
                            borderColor: '#D3F56A',
                            borderWidth: 2.5,
                            pointRadius: 0,
                            cubicInterpolationMode: 'monotone' // Set interpolation mode to 'monotone' for smooth curves
                        }
                    ]
                };

                var options = {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            max: 400,
                            ticks: {
                                stepSize: 100,
                            },
                            grid: {
                                display: true,
                                color: '#303030'
                            },
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    var label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.datasetIndex === 0) {
                                        label += context.parsed.y + ' revenue';
                                    } else {
                                        label += context.parsed.y + ' orders';
                                    }
                                    return label;
                                }
                            }
                        },
                        legend: {
                            align: 'end',
                            labels: {
                                boxWidth: 5,
                                boxHeight: 5,
                                padding: 40,
                                usePointStyle: true, // Display circular labels
                            },
                        }
                    }
                };
                Chart.defaults.font.size = 20;

                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: options,
                });

                // Select August and show revenue tooltip
                myChart.setActiveElements([{
                    datasetIndex: 0,
                    index: 2
                }]);
                myChart.tooltip.update(true);
            </script>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\work\Figma-Laravel\LaravelScript27.06\resources\views/backendV2/dashboard.blade.php ENDPATH**/ ?>