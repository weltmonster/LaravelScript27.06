@extends('backendV2.layouts.default')
@section('pageTitle', __('backend/management.faqs.title') )

@section('content')

@section('shopButton')
<p><a href="https://laravel-site.net/shop" class="btn btn-primary">Go to Shop</a></p>
@endsection

<style>
.table.gy-5 td,
.table.gy-5 th {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}

.balance {
    color: #D3F56A !important;
}

.card-heading h2 {
    color: #fff;
}

.card-header .Search-btn input {
    background-color: #1d1d1d !important;
}

.uname {
    color: #fff;
}

:root tr th:first-child {
    margin-left: 0px !important;
    padding-left: 15px !important;
}

:root td:first-child {
    padding-left: 15px !important;
}

:root .table td:first-child,
.table th:first-child,
.table tr:first-child {
    padding-left: 15px !important;
}

.btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
    width: 160px !important;
}

.table.table-row-dashed tr {
    border-bottom-width: 0px;
    border-bottom-style: dashed;
    border-bottom-color: var(--kt-border-color);
}

table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}

[data-theme=dark] span.open-tag {
    color: #D3F56A !important;
}

[data-theme=dark] th {
    color: #7D7D7D !important;
}

[data-theme=dark] .table>:not(:last-child)>:last-child>* {
    border-bottom-color: inherit;
    color: #7D7D7D;
    font-size: 20px !important;
}

[data-theme=dark] .container,
.container-lg,
.container-md,
.container-sm,
.container-xl,
.container-xxl {
    max-width: 1920px;
    /* background: black !important; */
}

[data-theme=dark] div#kt_wrapper {
    background: black !important;
}

#kt_table_users tbody i[class*=" la-"],
td a {
    margin-left: 15px;
}

th,
td {
    font-size: 20px !important;
}

th.min-w-125px.sorting {
    padding-left: 70px !important;
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

.fit {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 20px;
    margin-right: 40px;
}

.page-title.d-flex.flex-column.align-items-start.justify-content-center.flex-wrap.me-lg-2.pb-5.pb-lg-0 h1 {
    flex-direction: row !important;
    text-align: center;
    align-items: center;
}

body#kt_body {
    background: #151515;
}

h1.d-flex.flex-column.text-dark.fw-bold.my-0.fs-1 {
    font-size: 38px !important;
    color: #fff !important;
    font-weight: 600;
}

h1.d-flex.text-dark.fw-bold.my-0.fs-1 {
    font-size: 38px !important;
    color: #fff !important;
}


h1 p {
    margin: 0px 0px 0px 15px !important;
}

p {
    margin: 0px !important;
}

.search-bar input[type="text"] {
    border-radius: 5px;
    color: #7D7D7D;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    border: 2px solid #303030;
    border-radius: 10px;
    width: 346px;
    height: 44px;
    background-color: transparent;
}

h2 {
    font-size: 22px;
    font-weight: 600;
    margin-left: 0px !important;
}

.btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
    background-color: #D3F56A !important;
    color: #172C00 !important;
}

button.fiter {
    width: auto;
    font-size: 18px;
    background-color: transparent;
    border: none;
    color: #ffff;
}

.svg-icon.svg-icon-2 svg {
    height: 1.5rem !important;
    width: 1.5rem !important;
    font-size: 39px;
    color: #ffff;
}

.pages {
    color: #7D7D7D;
    font-weight: 500;
    font-size: 16px;
}

::placeholder {
    color: #4B4B4B;
    padding: 10px !important;
}

.container,
.container-lg,
.container-md,
.container-sm,
.container-xl,
.container-xxl {
    max-width: 1920px;
}

.table.gy-5 td,
.table.gy-5 th {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    padding-left: 102px !important;
    font-weight: 400;
}

i.la.la-edit {
    margin-left: 20px;
    font-size: 24px;
}

[data-theme=dark] td {
    color: #FFFFFF !important;
}

[data-theme=dark] .card {
    background-color: #1D1D1D !important;
}

.menu.menu-sub.menu-sub-dropdown {
    background-color: #1d1d1d;
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

h1.d-flex.text-dark.fw-bold.my-0.fs-1 {
    font-size: 38px !important;
    font-weight: 400;
}

.card .card-header .card-title h2 {
    color: #fff !important;
}


@media only screen and (max-width: 1440px) {
    .page-title.d-flex.flex-column.align-items-start.justify-content-center.flex-wrap.me-lg-2.pb-5.pb-lg-0 h1 {
        flex-direction: row !important;
        text-align: center;
        align-items: center;
    }

    tr td a svg {
        width: 15px;
    }

    #kt_table_users tbody i[class*=" la-"],
    td a {
        margin-left: 10px;
    }

    p {
        margin: 0px !important;
    }

    /*-----------------management/tickets/-------------------*/

    .fit {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 20px;
    }

    .table.table-row-dashed tr {
        border-bottom-width: 0px !important;
        border-bottom-style: dashed;
        border-bottom-color: var(--kt-border-color);
    }

    tbody.tab tr td {
        padding: 5px 0px !important;
    }

    i.la.la-trash {
        font-size: 20px;
    }

    .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
        border: 0;
        padding: calc(.775rem + 1px) calc(1.5rem + 1px);
    }

    a {
        margin-left: 5px;
    }

    a :last-child {
        margin-left: 0px;
         !important;
    }

    .tike {
        padding-top: 0px;
    }

    th.min-w-125px.sorting {
        padding-left: 0px !important;
    }

    th,
    td {
        font-size: 12px !important;
    }

    .card .card-body {
        padding-right: 0px !important;
    }

    a.btn.btn-primary {
        padding: 10px 0px !important;
    }

    i.la.la-edit {
        margin-left: 17px;
        font-size: 20px;
    }

    tbody.tab tr td {
        padding: 8px 13px !important;
    }

    .table.gy-5 td,
    .table.gy-5 th {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        font-weight: 400;
    }

    th.min-w-125px.sorting {
        padding-left: 17px !important;
    }

    th.ter.min-w-125px.sorting {
        padding-left: 35px !important;
    }

    a.btn.btn-primary {
        padding: 10px 15px !important;
    }

    [data-theme=dark] tr {
        color: #e1e1e3;
    }


    .svg-icon.svg-icon-2 svg {
        color: #ffffff;
    }

    :root a.btn.btn-primary {
        padding: 10px 15px !important;
    }




    .search-bar {
        width: auto;
    }

    .search-bar input[type="text"] {
        border-radius: 5px;
        color: #7D7D7D;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        border: 2px solid #303030;
        border-radius: 10px;
        width: 246px;
        height: 44px;
        background-color: transparent;
    }

    h2 {
        margin-left: 10px;
        font-weight: 400;
    }

    .pages {
        color: #7D7D7D;
        font-weight: 500;
        font-size: 14px;
    }

    span.footer-page {
        color: #fff;
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

    ::placeholder {
        color: #4B4B4B;
        padding: 10px !important;
    }

    tbody.tab tr td {
        padding: 8px 0px !important;
    }

    th.actionbtn.min-w-125px.sorting {
        padding-left: 55px !important;
    }

    [data-theme=dark] .table>:not(:last-child)>:last-child>* {
        font-size: 12px !important;
    }

    :root .table th,
    :root .table td,
    :root .text-end .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon),
    .pages,
    .page-no {
        font-size: 12px !important;
    }

    button.fiter {
        font-size: 12px;
    }

    .table.gy-5 td,
    .table.gy-5 th {
        padding-left: 72px !important;
    }

    .lst-icon a:first-child {
        margin-left: 0px !important;
    }

    h1.d-flex.text-dark.fw-bold.my-0.fs-1 {
        font-size: 30px !important;
        font-weight: 400;
    }

    :root td.lst-icon {
        padding-left: 57px !important;
    }



}

@media only screen and (max-width: 1366px) {

    .table.gy-5 td,
    .table.gy-5 th {
        padding-left: 55px !important;
    }

    h1.d-flex.flex-column.text-dark.fw-bold.my-0.fs-1 {
        font-size: 30px !important;

        th.actionbtn.min-w-125px.sorting {
            padding-left: 39px !important;
        }

        .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
            font-size: 12px !important;
        }

        :root .lst-icon a:first-child {
            margin-left: 34px !important;
        }

        :root th.actionbtn.min-w-125px.sorting {
            padding-left: 42px !important;
        }

    }

    @media only screen and (max-width: 1320px) {

        .table.gy-5 td,
        .table.gy-5 th {
            padding-left: 22px !important;
        }

        th.actionbtn.min-w-125px.sorting {
            padding-left: 10px !important;
        }

        h1.d-flex.flex-column.text-dark.fw-bold.my-0.fs-1 {
            font-size: 30px !important;

            th.actionbtn.min-w-125px.sorting {
                padding-left: 39px !important;
            }

            .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
                font-size: 12px !important;
            }

            :root .lst-icon a:first-child {
                margin-left: 34px !important;
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
                <div class="d-flex flex-grow-1 justify-content-between align-content-center mx-3">
                    <div class="card-title card-heading">
                        <h2>FAQs</h2>
                    </div>
                    <div class="d-flex align-items-center position-relative my-1 Search-btn">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" id="myInput" onkeyup="myFunction()" data-kt-user-table-filter="search"
                            class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                    </div>
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Filter-->
                        <a href="{{ route('backend-management-faq-add') }}"
                            class="btn btn-wide btn-bold btn-primary btn-upper py-5">{{ __('backend/main.add') }}</a>
                        <!--begin::Menu 1-->
                    </div>
                </div>
            </div>
            <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users"
                    style="overflow-x: auto; overflow-y: hidden;">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                            <th class="min-w-80px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.faqs.id') }}</th>
                            <th class="min-w-275px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.faqs.question') }}</th>
                            <th class="min-w-275px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.faqs.category') }}</th>
                            <th class="min-w-275px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.faqs.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @foreach($faqs as $faq)
                        <tr>
                            <td scope="row">{{ $faq->id }}</td>
                            <td>{{ $faq->question }}</td>
                            <td>
                                @if($faq->getCategory()->slug == 'uncategorized')
                                {{ $faq->getCategory()->name }}
                                @else
                                <a href="#">{{ $faq->getCategory()->name }}</a>
                                @endif
                            </td>
                            <td style="font-size: 20px;">
                                <a href="{{ route('backend-management-faq-edit', $faq->id) }}"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                            stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                            stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></a>
                                <a href="{{ route('backend-management-faq-delete', $faq->id) }}"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></a>
                            </td>
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
            <div class="page-no"><span class="page-number">
                </span> <span class="page-number active"> 1 </span> <span class="page-number"> 2 </span> <span
                    class="page-number"> 3 </span> <span class="page-number"> . </span> <span class="page-number"> .
                </span> <span class="page-number"> . </span> <span class="page-number"> > </span> </div>
        </div>
    </div>
</div>
@endsection