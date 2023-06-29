@extends('backendV2.layouts.default')
@section('pageTitle', __('Tickets Categories') )

@section('content')
@section('shopButton')
    <p><a href="https://laravel-site.net/shop" class="btn btn-primary">Go to Shop</a></p>
@endsection

    <style>
    .table td:first-child, .table th:first-child, .table tr:first-child {
    padding-left: 15px !important;
}
    .content {
    padding: 0px !important;
}
.table.gy-5 td, .table.gy-5 th {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
}
.table.table-row-dashed tr {
    border-bottom-width: 0px;
    border-bottom-style: dashed;
    border-bottom-color: var(--kt-border-color);
}
[data-theme=dark] div#kt_wrapper {
    background: black !important;
}
[data-theme=dark] .card {
    background-color: #1D1D1D !important;
}
[data-theme=dark] .table-footer {
    background-color: #1d1d1d !important;
}
.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1820px;
}
:root a.btn.btn-primary {
    background-color: #D3F56A !important;
    color: #172C00 !important;
    font-weight: 500 !important;
    line-height: 16px !important;
    padding: 20px 20px !important;
}
 p.uname {
        display: none;
    }
    h1 p {
    margin: 0px 0px 0px 15px !important;
}
h1.d-flex.text-dark.fw-bold.my-0.fs-1 {
    font-size: 38px !important;
    font-weight: 400;
    color: #fff !important;
}

body#kt_body {
background: #151515;
}


    /*:root a.btn.btn-primary {*/
    /*    background-color: #D3F56A !important;*/
    /*    color: #172C00 !important;*/
    /*    font-weight: 500;*/
    /*    line-height: 16px;*/
    /*    padding: 10px 15px !important;*/
    /*}*/

    .page-title.d-flex.flex-column.align-items-start.justify-content-center.flex-wrap.me-lg-2.pb-5.pb-lg-0 h1 {
        flex-direction: row !important;
        text-align: center;
        align-items: center;
    }
    th {
    font-size: 20px !important;
}
td {
    font-size: 20px !important;
}
.min-w-200px {
    min-width: 971px!important;
}
#kt_table_users tbody i[class*=" la-"], td a {
    font-size: 24px;
}
[data-theme=dark] td {
    color: #FFFFFF !important;
}
[data-theme=dark] tbody tr th {
    color: #FFFFFF !important;
}
h2 {
    font-size: 22px !important;
    font-weight: 600;
}
a.btn.btn-wide.btn-bold.btn-primary.btn-upper {
    font-size: 20px !important;
}
td.eddlt-icon {
    align-items: end;
    text-align: end;
}
td.eddlt-icon a:last-child {
    padding-right: 50px;
}
td.eddlt-icon a:first-child {
    padding-right: 20px;
}
/*-------footer start---------*/
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
/*-------footer end---------*/

        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
        .card .card-body {
        padding-right: 0px !important;
       }
       .card .card-header .card-title h2 {
        color: #fff;
       }
       th:last-child {
       padding-left: 186px;
        }

        i.la.la-edit {
           padding-left: 190px !important;
        }
        
 @media only screen and (max-width: 1440px) {
                th {
    font-size: 12px !important;
}
td {
    font-size: 12px !important;
}
th.min-w-500px.sorting {
    min-width: 395px !important;
}
.table.table-row-dashed tr {
    border-bottom-width: 0px;
}
.min-w-200px {
    min-width: 535px!important;
}

td.eddlt-icon a:last-child {
    padding-right: 88px;
}
td.eddlt-icon a:first-child {
    padding-right: 5px;
}
tr td.eddlt-icon a svg {
    width: 15px !important;
}
h2 {
    font-size: 20px !important;
}
a.btn.btn-wide.btn-bold.btn-primary.btn-upper {
    font-size: 12px !important;
}
 :root a.btn.btn-primary {
        line-height: 16px;
        padding: 10px 15px !important;
    }

            
        }
        
        
    </style>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                         <h2>Categories</h2>
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
                        <div class="topbtn d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <!--begin::Menu 1-->
                            <!--<a href="{{ route('index-with-pageNumber') }}"-->
                            <!--   class="btn btn-primary">{{ __('backend/management.tickets.go_to_shop') }}</a>-->
                               <a href="{{ route('backend-management-ticket-category-add') }}"
                       class="btn btn-wide btn-bold btn-primary btn-upper"
                       style="margin-bottom:15px">{{ __('Add New') }}</a>

                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <!--<a href="{{ route('backend-management-ticket-category-add') }}"-->
                    <!--   class="btn btn-wide btn-bold btn-primary btn-upper"-->
                    <!--   style="margin-bottom:15px">{{ __('backend/main.add') }}</a>-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users"
                           style="overflow-x: auto; overflow-y: hidden;">
                        <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <!--<th class="w-10px pe-2">-->
                            <!--    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">-->
                            <!--        <input class="form-check-input" id="checkAll" type="checkbox"/>-->
                            <!--    </div>-->
                            <!--</th>-->
                            <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.categories.id') }}</th>
                            <th class="min-w-200px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.categories.name') }}</th>
                            <th class="min-w-325px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.categories.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        @foreach($ticketsCategories as $ticketCategory)
                            <tr>
                                <!--<td>-->
                                <!--    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">-->

                                <!--        <input class="form-check-input orderCheck" data-id="{{ $ticketCategory->id }}"-->
                                <!--               type="checkbox"/>-->
                                <!--    </div>-->
                                <!--</td>-->
                                <th scope="row">{{ $ticketCategory->id }}</th>
                                <td>{{ $ticketCategory->name }}</td>
                                <td class="eddlt-icon">
                                    <a href="{{ route('backend-management-ticket-category-edit', $ticketCategory->id) }}"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304                            22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21                        .8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                    <a href="{{ route('backend-management-ticket-category-delete', $ticketCategory->id) }}"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
@endsection
