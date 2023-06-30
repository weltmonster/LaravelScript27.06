@extends('backendV2.layouts.default')
@section('pageTitle', __('Tickets') )

@section('content')

@section('shopButton')
<p><a href="https://laravel-site.net/shop" class="btn btn-primary">Go to Shop</a></p>
@endsection
<style>
.modal {
    --bs-modal-width: 40%
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

.modal-body select, .modal-body textarea {
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

.modal .uname {
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



        /*-----------------management/tickets/ End-------------------*/
</style>
<div class="content d-flex flex-column flex-column-fluid tike" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Tickets</h2>
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
                    <div class="fit" data-kt-user-table-toolbar="base">
                        <!--<a href="{{ route('index-with-pageNumber') }}" class="btn btn-primary">{{ __('backend/management.tickets.go_to_shop') }}</a>-->
                        <!--begin::search-->
                        <div class="search-bar">
                            <form action="#">
                                <input type="text" placeholder="05/06/2023 07:40" name="search">
                            </form>
                        </div>

                        <!--begin::Filter-->
                        <!--begin::Menu 1-->
                        <div style="display: contents" class="row justify-content-around">
                            <button type="button" class="fiter" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <!--<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                                    <!--    <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />-->
                                    <!--</svg>-->
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5938 5.90625H1.40625C1.18247 5.90625 0.967862 5.81736 0.809629 5.65912C0.651395 5.50089 0.5625 5.28628 0.5625 5.0625C0.5625 4.83872 0.651395 4.62411 0.809629 4.46588C0.967862 4.30764 1.18247 4.21875 1.40625 4.21875H16.5938C16.8175 4.21875 17.0321 4.30764 17.1904 4.46588C17.3486 4.62411 17.4375 4.83872 17.4375 5.0625C17.4375 5.28628 17.3486 5.50089 17.1904 5.65912C17.0321 5.81736 16.8175 5.90625 16.5938 5.90625ZM13.7812 9.84375H4.21875C3.99497 9.84375 3.78036 9.75485 3.62213 9.59662C3.46389 9.43839 3.375 9.22378 3.375 9C3.375 8.77622 3.46389 8.56161 3.62213 8.40338C3.78036 8.24514 3.99497 8.15625 4.21875 8.15625H13.7812C14.005 8.15625 14.2196 8.24514 14.3779 8.40338C14.5361 8.56161 14.625 8.77622 14.625 9C14.625 9.22378 14.5361 9.43839 14.3779 9.59662C14.2196 9.75485 14.005 9.84375 13.7812 9.84375ZM10.4062 13.7812H7.59375C7.36997 13.7812 7.15536 13.6924 6.99713 13.5341C6.83889 13.3759 6.75 13.1613 6.75 12.9375C6.75 12.7137 6.83889 12.4991 6.99713 12.3409C7.15536 12.1826 7.36997 12.0938 7.59375 12.0938H10.4062C10.63 12.0938 10.8446 12.1826 11.0029 12.3409C11.1611 12.4991 11.25 12.7137 11.25 12.9375C11.25 13.1613 11.1611 13.3759 11.0029 13.5341C10.8446 13.6924 10.63 13.7812 10.4062 13.7812Z"
                                            fill="white" />
                                    </svg>

                                </span>
                                <!--end::Svg Icon-->Filter
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true"
                                id="kt-toolbar-filter">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-4 text-white fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Content-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fs-5 fw-semibold mb-3">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex flex-column flex-wrap fw-semibold"
                                            data-kt-customer-table-filter="payment_type">
                                            <!--begin::Option-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="status" value="all"
                                                    checked="checked" />
                                                <span class="form-check-label text-gray-600">All</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="status"
                                                    value="closed" />
                                                <span
                                                    class="form-check-label text-gray-600">{{ __('backend/management.tickets.status_data.closed') }}</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                <input class="form-check-input" type="radio" name="status"
                                                    value="answered" />
                                                <span
                                                    class="form-check-label text-gray-600">{{ __('backend/management.tickets.edit.answered') }}</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="status"
                                                    value="open" />
                                                <span
                                                    class="form-check-label text-gray-600">{{ __('backend/management.tickets.status_data.open') }}</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true"
                                            data-kt-customer-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true"
                                            data-kt-customer-table-filter="filter"
                                            onclick="changeFilter()">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--<div class="search-bar"> <form action="#">-->
                            <!--     <input type="text" placeholder="Search.." name="search">-->
                            <!--    </form>-->
                            <!-- </div>-->
                            <!--<a href="{{ route('index-with-pageNumber') }}" class="btn btn-primary">{{ __('backend/management.tickets.go_to_shop') }}</a>-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users"
                    style="overflow-x: auto; overflow-y: hidden;">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-95px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.id') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.user') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.subject') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.category') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.status') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.tickets.date') }}</th>
                            <th class="actionbtn min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                rowspan="1" colspan="1">{{ __('backend/management.tickets.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class=" tab text-gray-600 fw-semibold">
                        @foreach($tickets as $ticket)
                        <tr>
                            <td scope="row">{{ $ticket->id }}</td>
                            <td>
                                {{ $ticket->getUser()->username }}
                            </td>
                            <td>{{ $ticket->subject }}</td>
                            <td>{{ $ticket->getCategory()->name }}</td>
                            <td>
                                @if($ticket->isClosed())
                                <span class="kt-badge kt-badge--danger kt-badge--dot kt-badge--md"></span>
                                <span
                                    class="kt-label-font-color-2 kt-font-bold">{{ __('backend/management.tickets.status_data.closed') }}</span>
                                @elseif($ticket->isReplied())
                                <span class="kt-badge kt-badge--brand kt-badge--dot kt-badge--md"></span>
                                <span
                                    class="kt-label-font-color-2 kt-font-bold">{{ __('backend/management.tickets.edit.answered') }}</span>
                                @else
                                <span class="kt-badge kt-badge--success kt-badge--dot kt-badge--md"></span>
                                <span
                                    class="kt-label-font-color-2 kt-font-bold open-tag">{{ __('backend/management.tickets.status_data.open') }}</span>
                                @endif
                            </td>
                            <td>
                                {{helperdateFormat($ticket->created_at)}} {{ $ticket->created_at->format('H:i') }}
                            </td>
                            <td class="lst-icon">
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
                                <a href="{{ route('backend-management-ticket-delete', $ticket->id) }}"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    </i></a>
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
                            <div class="mb-4">
                                <h4 class="mb-2 uname">
                                    <- Edit Ticket</h4>
                                        <h5 class="text-muted">#2121</h5>
                            </div>
                            <div class="form-group">
                                <label for="faq_edit_question" class="h5 d-none"
                                    style="font-weight: bold; float: right;">Shop Currency</label>
                                <div>
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
                                <label>Subject Name</label>
                                <div class="card m-2 card-selected">
                                    <div class="card-body p-0">
                                        <p class="text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="card-footer p-0 mt-1">
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>Admin</div>
                                            <div class="d-flex justify-content-between flex-grow-1 ms-1">
                                                <div>| 11/04/2023 15:45:23</div>
                                                <div style="color: #7d7d7d;">Category: <span class="text-white">Other coin</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-2">
                                    <div class="card-body p-0">
                                        <p class="text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="card-footer p-0 mt-1">
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>Admin</div>
                                            <div class="d-flex justify-content-between flex-grow-1 ms-1">
                                                <div>| 11/04/2023 15:45:23</div>
                                                <!-- <div style="color: #7d7d7d;">Category: <span class="text-white">Other coin</span></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-2">
                                    <div class="card-body p-0">
                                        <p class="text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="card-footer p-0 mt-1">
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>Admin</div>
                                            <div class="d-flex justify-content-between flex-grow-1 ms-1">
                                                <div>| 11/04/2023 15:45:23</div>
                                                <!-- <div style="color: #7d7d7d;">Category: <span class="text-white">Other coin</span></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group mt-10">
                                <label>Move Category</label>
                                <select class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <label>Compose Reply</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="d-flex">
                                <button type="button" class="btn btn-primary">Save Change</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body py-4 table-footer">
            <div class="pages">
                Showing <span class="footer-page">1 to 10</span> of <span class="footer-page">96</span> entries
            </div>
            <div class="page-no"><span class="page-number">
                </span> <span class="page-number active"> 1 </span> <span class="page-number"> 2 </span> <span
                    class="page-number"> 3 </span> <span class="page-number"> . </span> <span class="page-number"> .
                </span> <span class="page-number"> . </span> <span class="page-number"> > </span> </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script>
function changeFilter() {
    let status = $('[name="status"]:checked').val();

    const url = new URL(location.href);
    url.searchParams.set('status', status);
    window.location.href = url.href
}
</script>
@endsection