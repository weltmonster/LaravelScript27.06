<?php $__env->startSection('pageTitle', __('backend/management.coupons.title') ); ?>

<?php $__env->startSection('content'); ?>

    <style>
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
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
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                      transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"/>
                            </svg>
                        </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search"
                                   class="form-control form-control-solid w-250px ps-14" placeholder="Search user"/>
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
                            <a href="<?php echo e(route('index-with-pageNumber')); ?>"
                               class="btn btn-primary"><?php echo e(__('backend/management.tickets.go_to_shop')); ?></a>

                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            <div class="kt-portlet">
                                <div class="kt-portlet__head mt-5">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title"><?php echo e(__('backend/system.settings.title')); ?></h3>
                                    </div>
                                </div>
                                <form method="post" class="kt-form"
                                      action="<?php echo e(route('backend-system-settings-form')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="form-group mt-5">
                                                <label
                                                    for="settings_app_name"><?php echo e(__('backend/system.settings.app_name')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('settings_app_name')): ?> is-invalid <?php endif; ?>"
                                                       id="settings_app_name" name="settings_app_name"
                                                       placeholder="<?php echo e(__('backend/system.settings.app_name')); ?>"
                                                       value="<?php echo e(App\Models\Setting::get('app.name')); ?>"/>

                                                <?php if($errors->has('settings_app_name')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('settings_app_name')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="settings_api_enabled"><?php echo e(__('backend/system.settings.api_enabled')); ?></label>
                                                <select name="settings_api_enabled" id="settings_api_enabled"
                                                        class="form-control <?php if($errors->has('settings_api_enabled')): ?> is-invalid <?php endif; ?>">
                                                    <option><?php echo e(__('backend/system.settings.please_choose')); ?></option>
                                                    <option value="0"
                                                            <?php if(!App\Models\Setting::get('api.enabled')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.no')); ?></option>
                                                    <option value="1"
                                                            <?php if(App\Models\Setting::get('api.enabled')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.yes')); ?></option>
                                                </select>

                                                <?php if($errors->has('settings_api_enabled')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('settings_api_enabled')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="settings_api_key"><?php echo e(__('backend/system.settings.api_key')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('settings_api_key')): ?> is-invalid <?php endif; ?>"
                                                       id="settings_api_key" name="settings_api_key"
                                                       placeholder="<?php echo e(__('backend/system.settings.api_key')); ?>"
                                                       value="<?php if(strlen(App\Models\Setting::get('api.key')) > 0): ?><?php echo e(decrypt(App\Models\Setting::get('api.key'))); ?><?php endif; ?>"/>

                                                <?php if($errors->has('settings_api_key')): ?>
                                                    <span class="invalid-feedback" style="display:block" role="alert">
																		<strong><?php echo e($errors->first('settings_api_key')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="settings_shop_currency"><?php echo e(__('backend/system.settings.shop_currency')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('settings_shop_currency')): ?> is-invalid <?php endif; ?>"
                                                       id="settings_shop_currency" name="settings_shop_currency"
                                                       placeholder="<?php echo e(__('backend/system.settings.shop_currency')); ?>"
                                                       value="<?php echo e(App\Models\Setting::get('shop.currency')); ?>"/>

                                                <?php if($errors->has('settings_shop_currency')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('settings_shop_currency')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="settings_bonus_percent"><?php echo e(__('backend/system.settings.shop_bonus_percent')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php if($errors->has('settings_bonus_percent')): ?> is-invalid <?php endif; ?>"
                                                       id="settings_bonus_percent" name="settings_bonus_percent"
                                                       placeholder="<?php echo e(__('backend/system.settings.shop_bonus_percent')); ?>"
                                                       value="<?php echo e(App\Models\Setting::get('shop.bonus_in_percent')); ?>"/>

                                                <?php if($errors->has('settings_bonus_percent')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('settings_bonus_percent')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="settings_replace_entry"><?php echo e(__('backend/system.settings.replace_entry')); ?></label>
                                                <select name="settings_replace_entry" id="settings_replace_entry"
                                                        class="form-control <?php if($errors->has('settings_replace_entry')): ?> is-invalid <?php endif; ?>">
                                                    <option
                                                        value="0"><?php echo e(__('backend/system.settings.please_choose')); ?></option>
                                                    <?php $__currentLoopData = App\Models\FAQ::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqEntry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($faqEntry->id); ?>"
                                                                <?php if(App\Models\Setting::get('shop.replace_rules') == $faqEntry->id): ?> selected <?php endif; ?>><?php echo e($faqEntry->question); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                                <?php if($errors->has('settings_replace_entry')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('settings_replace_entry')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="settings_access_only_for_users"><?php echo e(__('backend/system.settings.access_only_for_users')); ?></label>
                                                <select name="settings_access_only_for_users"
                                                        id="settings_access_only_for_users"
                                                        class="form-control <?php if($errors->has('settings_access_only_for_users')): ?> is-invalid <?php endif; ?>">
                                                    <option><?php echo e(__('backend/system.settings.please_choose')); ?></option>
                                                    <option value="0"
                                                            <?php if(!App\Models\Setting::get('app.access_only_for_users')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.anyone')); ?></option>
                                                    <option value="1"
                                                            <?php if(App\Models\Setting::get('app.access_only_for_users')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.only_registered_users')); ?></option>
                                                </select>

                                                <?php if($errors->has('settings_access_only_for_users')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('settings_access_only_for_users')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="register_newsletter_checked"><?php echo e(__('backend/system.settings.register_newsletter_checked')); ?></label>
                                                <select name="register_newsletter_checked"
                                                        id="register_newsletter_checked"
                                                        class="form-control <?php if($errors->has('register_newsletter_checked')): ?> is-invalid <?php endif; ?>">
                                                    <option><?php echo e(__('backend/system.settings.please_choose')); ?></option>
                                                    <option value="0"
                                                            <?php if(!App\Models\Setting::get('register.newsletter_enabled')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.no')); ?></option>
                                                    <option value="1"
                                                            <?php if(App\Models\Setting::get('register.newsletter_enabled')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.yes')); ?></option>
                                                </select>

                                                <?php if($errors->has('register_newsletter_checked')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('register_newsletter_checked')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group mt-5">
                                                <label
                                                    for="creditcards_enabled"><?php echo e(__('backend/system.settings.creditcards_enabled')); ?></label>
                                                <select name="creditcards_enabled" id="creditcards_enabled"
                                                        class="form-control <?php if($errors->has('creditcards_enabled')): ?> is-invalid <?php endif; ?>">
                                                    <option><?php echo e(__('backend/system.settings.please_choose')); ?></option>
                                                    <option value="0"
                                                            <?php if(!App\Models\Setting::get('shop.creditcards.enabled')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.no')); ?></option>
                                                    <option value="1"
                                                            <?php if(App\Models\Setting::get('shop.creditcards.enabled')): ?> selected <?php endif; ?>><?php echo e(__('backend/system.settings.yes')); ?></option>
                                                </select>

                                                <?php if($errors->has('creditcards_enabled')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('creditcards_enabled')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group mt-5">
                                                <label for="app_locale">Standard Sprache</label>
                                                <select name="app_locale" id="app_locale"
                                                        class="form-control <?php if($errors->has('app_locale')): ?> is-invalid <?php endif; ?>">
                                                    <option><?php echo e(__('backend/system.settings.please_choose')); ?></option>
                                                    <?php $__currentLoopData = App\Models\Setting::getAvailableLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e(strtolower($locale)); ?>"
                                                                <?php if(strtolower(App\Models\Setting::get('app.locale')) == strtolower($locale)): ?> selected <?php endif; ?>><?php echo e(Lang::get('locale.name', [], $locale)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                                <?php if($errors->has('app_locale')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('app_locale')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group mt-5">
                                                <label for="available_locales">Verfügbare Sprachen</label>
                                                <input name="available_locales" id="available_locales"
                                                       class="form-control <?php if($errors->has('available_locales')): ?> is-invalid <?php endif; ?>"
                                                       placeholder="Komma getrennt"
                                                       value="<?php echo e(App\Models\Setting::get('app.available.locales')); ?>"/>

                                                <?php if($errors->has('available_locales')): ?>
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
																		<strong><?php echo e($errors->first('available_locales')); ?></strong>
																	</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot mt-5">
                                        <div class="kt-form__actions">
                                            <button type="submit"
                                                    class="btn btn-primary"><?php echo e(__('backend/system.settings.submit_button')); ?></button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendV2.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/system/settings.blade.php ENDPATH**/ ?>