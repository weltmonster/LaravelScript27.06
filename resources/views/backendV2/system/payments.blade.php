@extends('backendV2.layouts.default')
@section('pageTitle', __('backend/system.payments.title') )

@section('content')

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
            .card-title .d-flex .form-control {
               background-color: #1D1D1D;
            }
            .search-bar .form-control {
               background-color: #1D1D1D;
            }
            .search-bar .form-control:focus {
               background-color: #1D1D1D;
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
            .order-table thead tr th {
                font-size: 20px;
                font-weight: 400;
                color: #7D7D7D;
            }
            .order-table tbody tr td{
                font-size: 19px;
                font-weight: 400;
                color: #fff;
            }
            .order-table tbody tr th{
                font-size: 19px;
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

                .table-footer {
                  margin-top: 15px;
                  background-color: #1d1d1d !important;
                  border-radius: 10px !important;
                  display: flex;
                  justify-content: space-between;
                  padding: 2rem 2.25rem;
                  align-items: center;
               }
               .pages {
                  color: #7D7D7D;
                  font-weight: 500;
                  font-size: 14px;
               }
               span.footer-page {
                  color: #fff;
               }
               .page-no {
                  color: #BBBBBB;
                  font-weight: 500;
                  font-size: 14px;
               }
               span.page-number {
                  margin-left: 5px;
                  margin-right: 5px;
               }
               span.page-number.active {
                  color: #D3F56A;
                  background-color: #2F3225;
                  border-radius: 5px;
                  padding: 5px 7px;
                  padding-left: 10px;
                  margin-left: 10px;
                  margin-right: 10px;
               }
               /* badge customize */
               .badge-paid {
                  display: inherit;
                  outline-style: solid;
                  border-radius: 14px;
                  padding-inline: 10px;
                  outline-width: 1px;
                  padding-top: 5px;
                  padding-bottom: 2px;
                  color: #D3F56A;
               }
               .badge-invalid {
                  display: inherit;
                  outline-style: solid;
                  border-radius: 14px;
                  padding-inline: 10px;
                  outline-width: 1px;
                  padding-top: 5px;
                  padding-bottom: 2px;
                  color: #DA5538;
               }
               .badge-pending {
                  display: inherit;
                  outline-style: solid;
                  border-radius: 14px;
                  padding-inline: 10px;
                  outline-width: 1px;
                  padding-top: 5px;
                  padding-bottom: 2px;
                  color: #7D7D7D;
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
                 <div class="col-xl-7 d-flex align-items-center position-relative">
                     <span class="svg-icon svg-icon-1 position-absolute ms-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect opacity="1" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                           <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                        </svg>
                     </span>
                     <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid m-0" placeholder="Search">
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
                  <rect opacity="1" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
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
      <table class="table align-middle fs-6 gy-5" id="kt_table_users" style="overflow-x: auto; overflow-y: hidden;">
         <thead style=" width: 100%">
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0" style=" width: 100%">
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">ID</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Username</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Bitcoin Transaction ID</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Amount</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">State</th>
               <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1">Date</th>
            </tr>
         </thead>
         <tbody class="text-gray-600 fw-semibold" style="width: 100%">
         <tr style="width: 100%">
         <th scope="row">#434112</th>
               <td>Bessie Cooper</td>
               <td>
                  f4e5abf42b64
               </td>
               <td>
                  $120.00
               </td>
               <td>
               <div class="badge-paid"><span>Paid</span></div>
               </td>
               <td class="text-start">
                  2023-06-23 08:06:23
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
            <th scope="row">#434112</th>
               <td>Bessie Cooper</td>
               <td>
                  f4e5abf42b64
               </td>
               <td>
                  $120.00
               </td>
               <td>
                  <div class="badge-invalid"><span>Invalid</span></div>
               </td>
               <td class="text-start">
                  2023-06-23 08:06:23
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
            <th scope="row">#434112</th>
               <td>Bessie Cooper</td>
               <td>
                  f4e5abf42b64
               </td>
               <td>
                  $120.00
               </td>
               <td>
                  <div class="badge-paid"><span>Paid</span></div>
               </td>
               <td class="text-start">
                  2023-06-23 08:06:23
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
               <th scope="row">#434112</th>
               <td>Bessie Cooper</td>
               <td>
                  f4e5abf42b64
               </td>
               <td>
                  $120.00
               </td>
               <td>
               <div class="badge-pending"><span>Pending</span></div>
               </td>
               <td>
                  2023-06-23 08:06:23
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
            <th scope="row">#434112</th>
               <td>Bessie Cooper</td>
               <td>
                  f4e5abf42b64
               </td>
               <td>
                  $120.00
               </td>
               <td>
                  <div class="badge-paid"><span>Paid</span></div>
               </td>
               <td>
                  2023-06-23 08:06:23
               </td>
               <!--end::Action=-->
            </tr>
            <tr style="width: 100%">
            <th scope="row">#434112</th>
               <td>Bessie Cooper</td>
               <td>
                  f4e5abf42b64
               </td>
               <td>
                  $120.00
               </td>
               <td>
                  <div class="badge-invalid"><span>Invalid</span></div>
               </td>
               <td class="text-start">
                  2023-06-23 08:06:23
               </td>
               <!--end::Action=-->
            </tr>
         </tbody>
      </table>
   </div>
</div>
                    </div>
               </div>
               <div class="card-body py-4 table-footer">
                  <div class="pages">
                     Showing <span class="footer-page">1 to 10 of <span class="footer-page">96</span> entries
                  </div>
                  <div class="page-no"><span class="page-number"> < </span> <span class="page-number active"> 1 </span> <span class="page-number"> 2 </span> <span class="page-number"> 3 </span> <span class="page-number"> . </span> <span class="page-number"> . </span> <span class="page-number"> . </span> <span class="page-number"> > </span> </div>
                              </div>
                     </div>
               </div>
             
             <!--second end here....-->
               
        </div>
    </div>
    
    @endsection
    
    
@section('page_scripts')
  
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
    
  
    
    
@endsection
