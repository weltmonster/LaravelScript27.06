
<?php $__env->startSection('pageTitle', __('backend/system.payments.title') ); ?>

<?php $__env->startSection('content'); ?>

    <style>
        body#kt_body {
           background: #151515;
        }
        .container-xxl {
          max-width: 1573px;
         }
        h1.d-flex.text-dark.fw-bold.my-0.fs-1 {
           color: #fff !important;
        }
        
       .profile_say p.uname {
            color: #fff;
        }
        .sal-graph-card {
            background: #1D1D1D;
            border-radius: 10px;
            padding: 30px;
            position: relative;
        }
         h1.sal-rev-h1 {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 27px;
            letter-spacing: 0.06em;
            color: #fff;
       }
            .jsb-card {
            width: 150px;
            height: 80px;
            position: absolute;
            width: 150px;
            height: 80px;
            /* left: 920px; */
            right: 150px;
            top: 154px;
            text-align: center;
            padding: 10px;
            color: #fff;
            background: #363636;
            border-radius: 10px;
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
            color: #FFFFFF;
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
            height: 140px;
            right: 239px;
            top: 250px;
            border: 2px dashed #7D7D7D;
        }
          
          #myChart{
            height:380px;
            border-color:red;
          }
         
         .Left_balance_side {
            background: #1D1D1D;
            border-radius: 10px;
            padding: 30px;
            position: relative;
            height: 97%;
         } 
         .Left_balance_side h4 {
                color: #fff;
                font-size: 30px;
                font-weight: 400;
                margin-bottom: 0;
            }
          .Left_balance_side h4 span svg{
             vertical-align: unset;
         }
         span.uder__text {
            color: #7D7D7D;
            font-size: 18px;
        }
        .Pey__ment_form label{
            color: #7D7D7D;
            font-size: 18px;
        }
         button.btn {
            background: transparent;
            border: 1px solid #D3F56A!important;
            color: #D3F56A;
            font-size: 20px;
            font-weight: 400;
        }
          button.btn:hover {
            color: #D3F56A;
        }
        
         .Pey__ment_form input, .Pey__ment_form select{
             border: 2px solid #303030;
        }
         
         .card.mb-5.mb-xl-10.table_offer {
                padding: 30px;
            }
            .row.search-bar h1 {
                color: #fff;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 22px;
                line-height: 22px;
                margin: 0px;
                letter-spacing: 0.06em;
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
             .search-bar input {
                    width: 100%;
                    border-radius: 10px;
                    border: 2px solid #303030;
                    background: transparent;
                    padding: 10px 34px;
                    color: #7D7D7D;
                    font-size: 16px;
                }
            .search-bar label {
                display: unset;
                position: relative;
            }
            .row.search-bar input:focus-visible {
                outline: 1px solid #303030;
            }
            .Pey__ment_form input:focus-visible, .Pey__ment_form select:focus-visible{
             outline: 1px solid #303030!important;
           }
            .row.search-bar select {
                width: 100%;
                border-radius: 10px;
                border: 2px solid #303030;
                background: transparent;
                padding: 10px;
                color: #fff;
                font-size: 16px;
            }
            
            table.pay_out_table thead tr th {
                font-size: 20px;
                font-weight: 400;
                color: #7D7D7D;
            }
             table.pay_out_table tbody tr td{
                font-size: 21px;
                font-weight: 400;
                color: #fff;
            }
            .state__text{
                color:#D3F56A!important;
            }
            .state__cancel{
                color: #DA5538!important;
            }
             .card-body.py-3.form__content_part {
                    padding: 2rem 0rem;
                }
                
                .transition_table h2{
                    color:#fff;
                }
               .transition_table .card-title {
                    justify-content: space-between;
                    width: 100%;
                }
    </style>
    
    
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--content_box _start here-->
                 
            <div class="row dasboard_graph_2">
                  <!--begin::Col-->
                <div class="col-xl-4">
                    <div class="Left_balance_side">
                         <div class="balance_text">
                             <h4>
                                 <span>
                                     <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.8687 15.6249L15.8719 15.6206C15.7717 15.9094 15.5829 16.1593 15.3324 16.3345C15.041 16.5393 14.6315 16.7007 14.0454 16.7288L11.8896 16.7332V13.559C12.2016 13.5677 13.585 13.5449 14.1852 13.5753C14.9673 13.6132 15.4538 13.923 15.7127 14.2989C15.9965 14.6792 16.0301 15.1873 15.8687 15.6249ZM13.5623 12.0922C14.1072 12.0662 14.4853 11.9167 14.755 11.7282C14.9868 11.57 15.1613 11.3306 15.2533 11.0663C15.3985 10.66 15.3693 10.1888 15.106 9.83667C14.8644 9.49108 14.4148 9.204 13.6912 9.16933C13.1549 9.14117 12.1604 9.16608 11.8885 9.1585V12.0933C11.9156 12.0976 13.5558 12.0922 13.5623 12.0922ZM26 13C26 20.1793 20.1793 26 13 26C5.82075 26 0 20.1793 0 13C0 5.82075 5.82075 0 13 0C20.1793 0 26 5.82075 26 13ZM18.7958 15.3205C18.8197 13.7204 17.4525 12.7942 16.7288 12.5342C17.5034 12.0022 18.0353 11.4043 18.0353 10.2754C18.0353 8.4825 16.2522 7.64292 15.1678 7.53567C15.0789 7.52592 14.8319 7.52158 14.8319 7.52158V5.80775H13.0628L13.0672 7.52267H11.8842V5.81425H10.0858V7.514C9.7695 7.52158 7.86608 7.5205 7.86608 7.5205V9.03825H8.48467C9.13575 9.05558 9.37517 9.43042 9.34917 9.77167V16.3161C9.34513 16.4235 9.30209 16.5257 9.22811 16.6037C9.15414 16.6817 9.05429 16.73 8.94725 16.7397C8.6775 16.7516 8.2745 16.7397 8.2745 16.7397L7.92783 18.46H10.0902V20.1933H11.8896V18.4698H13.0715V20.1966H14.8308V18.4763C16.8881 18.5304 18.7774 17.316 18.7958 15.3205Z" fill="white"/>
                                        </svg>

                                 </span>
                                 83,376.00 EURO
                             </h4>
                             <span class="uder__text">Balance</span>
                             <div class="form__below">
                                 <form class="Pey__ment_form">
                                  <div class="mb-3 mt-2">
                                    <label for="exampleInputaddres" class="form-label addres_field">Destination Address</label>
                                    <input type="text" class="form-control m-0 bg-transparent text-white"  id="exampleInputaddres" placeholder="ghsdvj652fvnk8vd" aria-describedby="Help">
                                  </div>
                                  <div class="mb-3">
                                      <label for="amount" class="form-label addres_field">Amount</label>
                                      <select class="form-select bg-transparent" aria-label="Default select example">
                                      <option selected>Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                      <label for="amount_below" class="form-label addres_field">Transaction fee per byte transferred</label>
                                      <select class="form-select bg-transparent" aria-label="Default select example">
                                      <option selected>Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                  <button type="submit" class="btn mt-5">Request Transfer</button>
                                </form>
                             </div>
                         </div>
                    </div>
                 </div>
             <div class="col-xl-8">
                <!--begin::Mixed Widget 14-->
                <div class="sal-graph-card mb-10">
                  <h1 class="sal-rev-h1">Revenue vs Orders</h1>
                  <div class="jsb-card">
                      <h2>Aug. 2022</h2>
                      <h3>$8,349.13</h3>
                      <div id="clippedDiv"></div>
                  </div>
                  <div class="jsb-row">
                  </div>
                  <div>
                  <canvas id="myChart" width="1044" height="380" style="display: block; box-sizing: border-box; height: 380px; width: 1044px;"></canvas>  
                  </div>
                </div>
                <!--end::Mixed Widget 14-->
                
                  <!--second part start here -->
                   <div class="card mb-5 mb-xl-10 table_offer">
             <!--This row for search bar and title before table -->
             <div class="row search-bar">
                 <div class="col-xl-3">
                     <h1>Payout</h1>
                 </div>
                 <div class="col-xl-7">
                 <form>
                     <label>
                     <input type="text" placeholder="Search">
                     </label>
                 </form>
                 </div>
                 <div class="col-xl-2">
                 <select>
                     <option>
                         This Week
                     </option>
                 </select>   
                 </div>
             </div>
             <!--This row for search bar and title before table end here -->
              
            <!--begin::Body-->
            <div class="card-body py-3 form__content_part">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <!-- UserOrder::orderByDesc('created_at')->limit(10)->get()->all(); -->

                    <table class="table table-row-gray-300 align-middle gs-0 gy-4 pay_out_table">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold text-muted tttt_hhh">
                                <th class="min-w-150px">Destination</th>
                                <th class="min-w-150px">Amount</th>
                                <th class="min-w-150px">Fees</th>
                                <th class="min-w-150px">Status</th>
                                <th class="min-w-100px text-end">Date</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>

                            <tr>
                                <td class="min-w-150px">fd1fg25...63</td>
                                <td class="min-w-150px">$1.25  USD</td>
                                <td class="min-w-150px">$1.83  USD</td>
                                <td class="min-w-150px state__text">Complete</td>
                                <td class="min-w-100px text-end">2020-05-05 10:21:13</td> 
                            </tr>
                             <tr>
                                <td class="min-w-150px">fd1fg25...63</td>
                                <td class="min-w-150px">$1.25  USD</td>
                                <td class="min-w-150px">$2.15  USD</td>
                                <td class="min-w-150px state__cancel">Cancelled</td>
                                <td class="min-w-100px text-end">2020-05-06 11:24:08</td> 
                            </tr>
                             <tr>
                                <td class="min-w-150px">fd1fg25...63</td>
                                <td class="min-w-150px">$1.25  USD</td>
                                <td class="min-w-150px">$9.41  USD</td>
                                <td class="min-w-150px state__text">Cancelled</td>
                                <td class="min-w-100px text-end">2020-05-02 07:10:15</td> 
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
                 <!--second part end here -->

            </div>
            <!--end::Col-->
            
       
             
        </div>
            
            
             <!--second Part-->
               <div class="row">
                    <div class="transition_table">
                          <div class="card">
   <!--begin::Card header-->
   <div class="card-header border-0 pt-6 order-header">
      <!--begin::Card title-->
      <div class="card-title">
         <div class="card-heading">
            <h2>Transaction History</h2>
         </div>
         <!--begin::Search-->
         <div class="d-flex align-items-center position-relative my-1 Search-btn">
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-1 position-absolute ms-6">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                  <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
               </svg>
            </span>
            <!--end::Svg Icon-->
            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search for orders">
         </div>
         <!--end::Search-->
      </div>
   </div>
   <div class="card-body py-4 order-table">
      <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users" style="overflow-x: auto; overflow-y: hidden;">
         <thead style=" width: 100%">
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0" style=" width: 100%">
               <th class="w-10px pe-2">
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input" id="checkAll" type="checkbox">
                  </div>
               </th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">ID</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Product</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">User</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Date</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Amount</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Actions</th>
            </tr>
         </thead>
         <tbody class="text-gray-600 fw-semibold" style="width: 100%">
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="121" type="checkbox">
                  </div>
               </td>
               <th scope="row">121</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 14:50
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/121"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/121" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="120" type="checkbox">
                  </div>
               </td>
               <th scope="row">120</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 12:02
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/120"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/120" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="119" type="checkbox">
                  </div>
               </td>
               <th scope="row">119</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:53
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/119"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/119" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="118" type="checkbox">
                  </div>
               </td>
               <th scope="row">118</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:53
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/118"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/118" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="117" type="checkbox">
                  </div>
               </td>
               <th scope="row">117</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:48
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/117"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/117" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="116" type="checkbox">
                  </div>
               </td>
               <th scope="row">116</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:46
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/116"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/116" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="115" type="checkbox">
                  </div>
               </td>
               <th scope="row">115</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:46
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/115"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/115" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="114" type="checkbox">
                  </div>
               </td>
               <th scope="row">114</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:46
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/114"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/114" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="113" type="checkbox">
                  </div>
               </td>
               <th scope="row">113</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:41
               </td>
               <td>
                  1
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/113"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/113" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                     <input class="form-check-input orderCheck" data-id="112" type="checkbox">
                  </div>
               </td>
               <th scope="row">112</th>
               <td>Test</td>
               <td>
                  admin
               </td>
               <td>
                  03/06/2023 10:28
               </td>
               <td>
                  2
               </td>
               <!--begin::Joined-->
               <!--begin::Action=-->
               <td class="text-end">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z" fill="#BBBBBB"></path>
                  </svg>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <!--<a href="#" class="btn btn-light btn-active-light-primary btn-sm"-->
                  <!--   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions-->
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <!--    <span class="svg-icon svg-icon-5 m-0">-->
                  <!--    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                  <!--         xmlns="http://www.w3.org/2000/svg">-->
                  <!--        <path-->
                  <!--            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"-->
                  <!--            fill="currentColor"/>-->
                  <!--    </svg>-->
                  <!--</span>-->
                  <!--end::Svg Icon-->
                  <!--begin::Menu-->
                  <!--<div-->
                  <!--    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                  <!--    data-kt-menu="true">-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="https://laravel-site.net/admin/orders/id/112"-->
                  <!--           class="menu-link px-3">Show</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <!--    <div class="menu-item px-3">-->
                  <!--        <a href="/admin/orders/delete/112" class="menu-link px-3"-->
                  <!--           data-kt-users-table-filter="delete_row">Delete</a>-->
                  <!--    </div>-->
                  <!--end::Menu item-->
                  <!--</div>-->
                  <!--end::Menu-->
               </td>
               <!--end::Action=-->
            </tr>
         </tbody>
      </table>
   </div>
</div>
                    </div>
               </div>
             
             
             <!--second end here....-->
               
        </div>
    </div>
    
    <?php $__env->stopSection(); ?>
    
    
<?php $__env->startSection('page_scripts'); ?>
  
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        // Sample data for revenue and orders over time
        var data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Revenue',
                    data: [100, 200, 150, 300, 250, 400, 350, 500, 450, 600, 550, 700],
                    backgroundColor: '#1D1D1D',
                    borderColor: 'blue',
                    borderWidth: 2,
                    pointRadius: 0,
                    cubicInterpolationMode: 'monotone' // Set interpolation mode to 'monotone' for smooth curves
                },
                {
                    label: 'Orders',
                    data: [50, 100, 80, 120, 90, 150, 130, 180, 160, 200, 180, 220],
                    backgroundColor: '#1D1D1D',
                    borderColor: '#D3F56A',
                    borderWidth: 2,
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
                    grid: {
                        display: true,
                        color: '#303030' // Set gridline color to red
                    },
                    beginAtZero: true
                }
            },
            plugins: {
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: function (context) {
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
                }
            }
        };

        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });

        // Select August and show revenue tooltip
        myChart.setActiveElements([{ datasetIndex: 0, index: 7 }]);
        myChart.tooltip.update(true);
    </script>
    
  
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\TASKS\2023-06-27(laravel)\2. PROJECTS\LaravelScript27.06\resources\views/backendV2/system/payments.blade.php ENDPATH**/ ?>