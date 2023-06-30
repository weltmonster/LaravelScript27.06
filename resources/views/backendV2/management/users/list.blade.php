@extends('backendV2.layouts.default')
@section('pageTitle', __('Customers') )

@section('content')

@section('shopButton')
<p><a href="https://laravel-site.net/shop" class="btn btn-primary">Go to Shop</a></p>
@endsection


<style>
.modal {
    --bs-modal-width: 50%
}

.modal.left .modal-dialog {
    position: fixed;
    right: 0;
    margin: auto;
    width: 1000px;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
}

.modal.left .modal-content {
    height: 100%;
    overflow-y: auto;
    color: #fff !important;
}

/* ----- MODAL STYLE ----- */
.modal-content {
    border-radius: 0;
    border: none;
    background-color: #151515;
}

.modal-header {
    border-bottom-color: #eeeeee;
    background-color: #fafafa;
}

.modal-body div .card-selected {
    padding: 20px;
    outline: solid;
    outline-width: 2px;
    outline-color: #1d1d1d;
    background-color: #151515 !important;
}

.modal-body div .card {
    padding: 20px;
    outline: solid;
    outline-width: 2px;
    outline-color: #1d1d1d;
}

.modal-body p {
    color: #7d7d7d;
}

.modal-body textarea {
    background-color: #151515;
}

.modal-body input {
    background-color: #151515;
}

.modal-body select,
.modal-body textarea,
.modal-body input {
    border-color: #1d1d1d;
}

.modal-body select {
    background-color: #151515;
}

.modal-body .card-footer {
    border-top-color: #7d7d7d;
}

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
                <div class="card-title card-heading">
                    <h2>Customer</h2>
                </div>
                <div class="d-flex align-items-center position-relative my-1 Search-btn">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5 myTable" id="kt_table_users"
                    style="overflow-x: auto; overflow-y: hidden;">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-95px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.users.id') }}</th>
                            <!--
                            <th>{{ __('backend/management.users.name') }}</th>
                            -->
                            <th class="min-w-75px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.users.username') }}</th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.users.balance') }}</th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.users.date') }}</th>
                            <th class="min-w-115px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.users.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @foreach($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <!--
                                <td>{{ $user->name }}</td>
                                -->
                            <td>{{ $user->username }}</td>
                            <td class="balance">{{ $user->getFormattedBalance() }}</td>
                            <td>
                                {{helperdateFormat($user->created_at)}} {{ $user->created_at->format('H:i') }}
                            </td>
                            <td style="font-size: 20px;">
                                <a href="{{ route('backend-management-user-edit', $user->id) }}"><svg width="24"
                                        height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
                                            fill="#BBBBBB" />
                                    </svg></a>
                                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary w-40px h-40px p-2"
                                    data-bs-toggle="modal" data-bs-target="#myModal"><svg width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                            stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                            stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <a href="{{ route('backend-management-user-login', $user->id) }}"><svg width="24"
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
            <div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-13">
                            <div class="d-flex justify-content-between mb-4">
                                <div>
                                    <h4 class="mb-2 uname">
                                        <- Edit Customer</h4>
                                            <h5 class="text-muted">#2121</h5>
                                </div>
                                <div>
                                    <div class="btn">All tickets</div>
                                    <div class="btn">All Orders</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-4">
                                    <table class="table align-middle fs-6 gy-5 myTable"
                                        id="kt_table_users" style="overflow-y: hidden;">
                                        <thead>
                                            <tr class="text-start text-muted fw-bold fs-6 text-uppercase gs-0">
                                                <th class="max-w-50px sorting" tabindex="0"
                                                    aria-controls="kt_table_users" rowspan="1" colspan="1">
                                                    {{ __('backend/management.users.id') }}</th>
                                                <th class="max-w-115px sorting" tabindex="0"
                                                    aria-controls="kt_table_users" rowspan="1" colspan="1">
                                                    {{ __('backend/management.users.username') }}</th>
                                                <th class="max-w-40px sorting" tabindex="0"
                                                    aria-controls="kt_table_users" rowspan="1" colspan="1">
                                                    {{ __('backend/management.users.balance') }}</th>
                                                <th class="max-w-115px sorting" tabindex="0"
                                                    aria-controls="kt_table_users" rowspan="1" colspan="1">
                                                    {{ __('backend/management.users.date') }}</th>
                                                <th class="max-w-100px sorting" tabindex="0"
                                                    aria-controls="kt_table_users" rowspan="1" colspan="1">
                                                    {{ __('backend/management.users.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                            @foreach($users as $user)
                                            <tr>
                                                <td scope="row">{{ $user->id }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td class="balance">{{ $user->getFormattedBalance() }}</td>
                                                <td>
                                                    {{helperdateFormat($user->created_at)}}
                                                    {{ $user->created_at->format('H:i') }}
                                                </td>
                                                <td style="font-size: 20px;">
                                                    <a href="{{ route('backend-management-user-edit', $user->id) }}"><svg
                                                            width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
                                                                fill="#BBBBBB" />
                                                        </svg></a>
                                                    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary w-40px h-40px p-2"
                                                        data-bs-toggle="modal" data-bs-target="#myModal"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                                                stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                                                stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <a href="{{ route('backend-management-user-login', $user->id) }}"><svg
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6"
                                                                stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6"
                                                                stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group mt-5">
                                <label>Username</label>
                                <input class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="faq_edit_question" class="h5 d-none"
                                    style="font-weight: bold; float: right;">Shop Currency</label>
                                <div>
                                    <label>Balance in Euro</label>
                                    <select aria-label="Select a Currency" class="form-select form-control">
                                        <option>
                                            <b>Select</b>
                                        </option>
                                        <option>
                                            <b>EUR</b>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div type="button" class="btn btn-primary">SaveChange</div>
                            </div>
                        </div>
                    </div>
                </div>
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

<script>
function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.querySelector(".myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];

        if (td !== undefined) {
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}
</script>