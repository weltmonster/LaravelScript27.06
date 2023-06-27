@extends('backendV2.layouts.default')
@section('pageTitle', __('backend/management.products.title') )

@section('content')

@section('shopButton')
    <p><a href="https://laravel-site.net/shop" class="btn btn-primary">Go to Shop</a></p>
@endsection

    <style>
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
        /*-------------------------------Products-------------------------------*/
        
         .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1920px;
}

        .page-title.d-flex.flex-column.align-items-start.justify-content-center.flex-wrap.me-lg-2.pb-5.pb-lg-0 h1 {
    flex-direction: row !important;
    text-align: center;
    align-items: center;
}
.page-title a.btn.btn-primary {
    margin-left: 10px;
    background-color: #D3F56A !important;
    color: #172C00 !important;
}
p {
    margin: 0px !important;
}


        div#kt_content {
            padding: 0 !important;
        }
        
        [data-theme=dark]:root .table td, [data-theme=dark]:root .table td a {
    color: white !important;
}
[data-theme=dark]:root tbody th {
    color: white !important;
}
:root .table th, :root .table td {
    font-family: 'Inter';
    font-weight: 400 !important;
    font-style: normal;
    line-height: 23px;
    font-size: 19px !important;
    padding: 5px 5px !important;
}
:root i.la.la-database, :root i.la.la-edit, :root i.la.la-trash {
    font-size: 20px;
}
:root th.min-w-80px.sorting {
    font-family: 'Inter';
    font-weight: 400;
    font-style: normal;
    line-height: 23px;
    font-size: 14px;
}
:root .table tr {
    border-bottom: none !important;
}
:root a.btn.btn-primary {
    background-color: #D3F56A !important;
    color: #172C00 !important;
    font-weight: 500;
    line-height: 24px;
}
.btn.btn-primary:hover:not(.btn-active), .btn.btn-light-primary:hover {
    background-color: #d3f56ad6 !important;
}
.table-footer {
    margin-top: 15px;
    background-color: #1e1e2d !important;
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
:root input.form-control.form-control-solid.w-250px.ps-14 {
    color: #7D7D7D;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    border: 2px solid #303030;
    border-radius: 10px;
    width: 400px !important;
    height: 40px;
}
.card-title {
    width: 100%;
    justify-content: space-between;
}
.card-heading h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
}
:root .card-header {
    justify-content: center;
    padding-top: 0px !important;
    height: 80px;
}
[data-theme=dark]:root .card-body {
    background-color: #1e1e2d !important;
    border-radius: 10px !important;
}
[data-theme=dark]:root .card-header {
    border-bottom: 1px solid #303030 !important;
}


/*-------------------------------media Query-------------------------------*/

@media only screen and (max-width: 1440px){
    
    .card-heading h2 {
        font-size: 20px;
    }
    :root .Search-btn input.form-control.form-control-solid.w-250px.ps-14 {
        font-size: 16px;
    }
    :root .table th, :root .table td, :root .text-end .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon), .pages, .page-no {
        font-size: 14px !important;
    }
}


/*-------------------------------Products-End-------------------------------*/

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
                        <div class="card-heading"> <h2>Customers </h2></div>
                       <!-- <a href="{{ route('backend-management-product-add') }}"-->
                       <!--class="btn btn-wide btn-bold btn-primary btn-upper"-->
                       <!--style="margin-bottom:0px">{{ __('backend/main.add') }}</a>-->
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                             <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                            <!--end::Svg Icon-->
                             <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" /> 
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <!--<div class="card-toolbar">-->
                        <!--begin::Toolbar-->
                    <!--    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">-->
                            <!--begin::Filter-->
                            <!--begin::Menu 1-->
                    <!--        <a href="{{ route('index-with-pageNumber') }}"-->
                    <!--           class="btn btn-primary">{{ __('backend/management.tickets.go_to_shop') }}</a>-->

                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="card-body py-4">

                    
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users"
                           style="overflow-x: auto; overflow-y: hidden;">
                        <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            {{--                            <th class="w-10px pe-2">--}}
                            {{--                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">--}}
                            {{--                                    <input class="form-check-input" id="checkAll" type="checkbox" />--}}
                            {{--                                </div>--}}
                            {{--                            </th>--}}
                            <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.products.id') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.products.name') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.products.category') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.products.price') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.products.stock_status') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.products.sells') }}</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1">{{ __('backend/management.products.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">

                        @foreach($products as $product)
                            <tr>
                                {{--                                <td>--}}
                                {{--                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">--}}

                                {{--                                        <input class="form-check-input orderCheck" data-id="{{ $product->id }}" type="checkbox" />--}}
                                {{--                                    </div>--}}
                                {{--                                </td>--}}
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if($product->getCategory()->slug == 'uncategorized')
                                        {{ $product->getCategory()->name }}
                                    @else
                                        <a href="{{ route('backend-management-product-category-edit', $product->getCategory()->id) }}">{{ $product->getCategory()->name }}</a>
                                    @endif
                                </td>
                                <td>{{ $product->getFormattedPrice() }}</td>
                                <td class="soldout">
                                    @if($product->isUnlimited())
                                        {{ __('backend/management.products.unlimited') }}
                                    @elseif($product->asWeight())
                                        {{ __('backend/management.products.weight_available', [
                                            'weight' => $product->getWeightAvailable(),
                                            'char' => $product->getWeightChar()
                                        ]) }}
                                    @else
                                        @if($product->inStock())
                                            {{ $product->getStock() }}
                                        @else
                                            {{ __('backend/management.products.sold_out') }}
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    {{ $product->getSells() }}@if($product->asWeight())
                                        {{ $product->getWeightChar() }}
                                    @endif
                                </td>
                                <td style="font-size: 20px;">
                                    @if(!$product->isUnlimited() && !$product->asWeight())
                                        <a href="{{ route('backend-management-product-database', $product->id) }}"
                                           data-toggle="tooltip"
                                           data-original-title="{{ __('backend/main.tooltips.database') }}"><i
                                                class="la la-database"></i></a>
                                    @endif
                                    <a href="{{ route('backend-management-product-edit', $product->id) }}"
                                       data-toggle="tooltip"
                                       data-original-title="{{ __('backend/main.tooltips.edit') }}"><i
                                            class="la la-edit"></i></a>
                                    <a href="{{ route('backend-management-product-delete', $product->id) }}"
                                       data-toggle="tooltip"
                                       data-original-title="{{ __('backend/main.tooltips.delete') }}"><i
                                            class="la la-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body py-4 table-footer">
    <div class="pages">
        Showing <span class="footer-page">1 to 10</span> of <span class="footer-page">96</span> entries
    </div>
    <div class="page-no"><span class="page-number"> < </span> <span class="page-number active"> 1 </span> <span class="page-number"> 2 </span> <span class="page-number"> 3 </span> <span class="page-number"> . </span> <span class="page-number"> . </span> <span class="page-number"> . </span> <span class="page-number"> > </span> </div>
                </div>
        </div>
    </div>
@endsection
