@php use App\Classes\LangHelper; @endphp
@extends('backendV2.layouts.default')
@section('pageTitle', __('backend/management.faqs.categories.title') )

@section('content')

    <style>
    
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }  
        
        [data-theme=dark] body#kt_body {
        background-color: rgba(0, 0, 0, 1);
        }
        
        [data-theme=dark] .card {
        background-color: rgba(29, 29, 29, 1)!important;
        }
        
        [data-theme=dark] input#faq_category_edit_name {
        background-color: rgba(29, 29, 29, 1)!important;
        border: 2px solid #303030;
        border-radius: 10px;
        }
        
        a.btn.btn-primary.shop{
        background-color: #D3F56A!important;
        color: #172C00!important;
        padding: 10px 24px 10px 24px;
        font-size: 14px;
        }
        
        .btn.btn-primary.shop:hover:not(.btn-active), .btn.btn-light-primary.shop:hover {
        background-color: #D3F56A!important;
        }
        
        .btn.btn-primary.shop:active:not(.btn-active){
        background-color: #D3F56A!important;
        }
        
        button.btn.btn-primary.submit {
        background-color: #D3F56A!important;
        color: #172C00!important;
        padding: 10px 24px 10px 24px;
        font-size: 14px;
        }
        
        .btn.btn-primary.submit:hover:not(.btn-active), .btn.btn-light-primary:hover {
        background-color: #D3F56A!important;
        }
        
        .btn.btn-primary.submit:active:not(.btn-active){
        background-color: #D3F56A!important;
        }
        
        
        [data-theme=dark] .lang-button a.btn.btn-wide.btn-bold.btn-primary.btn-upper {
        background-color: rgba(48, 48, 48, 1)!important;
        }
        
        [data-theme=dark] .lang-button .btn:hover {
        background-color: var(--bs-btn-hover-color);
        }
        
        .lang-button i.fas.fa-edit{
           font-size:15px;
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
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <!--begin::Menu 1-->
                            <a href="{{ route('index-with-pageNumber') }}"
                               class="btn btn-primary shop">{{ __('backend/management.tickets.go_to_shop') }}</a>

                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            
                            <div class="lang-button">
                            {{ App\Classes\LangHelper::getLangSelector('lang-edit-faq-category', $faqCategory->id, $lang ?? null) }}
                            </div>

                            <div class="kt-portlet">
                                <div class="kt-portlet__head mt-5">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">{{ __('backend/management.faqs.categories.edit.title') }}</h3>
                                    </div>
                                </div>
                                <form method="post" class="kt-form"
                                      action="{{ route('backend-management-faq-category-edit-form') }}">
                                    @csrf

                                    @if($lang != null)
                                        <input type="hidden" name="translation_lng" value="{{ strtolower($lang) }}"/>
                                    @endif

                                    <input type="hidden" name="faq_category_edit_id" value="{{ $faqCategory->id }}"/>

                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="form-group mt-5">
                                                <label
                                                    for="faq_category_edit_name">{{ __('backend/management.faqs.categories.name') }}</label>
                                                <input type="text"
                                                       class="form-control edit_name @if($errors->has('faq_category_edit_name')) is-invalid @endif"
                                                       id="faq_category_edit_name" name="faq_category_edit_name"
                                                       placeholder="{{ __('backend/management.faqs.categories.name') }}"
                                                       value="{{ LangHelper::getValue($lang, 'faq-category', null, $faqCategory->id) ?? $faqCategory->name }}"/>

                                                @if($errors->has('faq_category_edit_name'))
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong>{{ $errors->first('faq_category_edit_name') }}</strong>
																	</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot mt-5">
                                        <div class="kt-form__actions">
                                            <button type="submit"
                                                    class="btn btn-primary submit">{{ __('backend/management.faqs.categories.edit.submit_button') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
