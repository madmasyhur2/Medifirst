@extends('layouts.admin')

@section('breadcrumbs')
    <div class="toolbar py-2" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
            <!--begin::Page title-->
            <div class="flex-grow-1 flex-shrink-0 me-5">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-gray-900 fw-bold my-1 fs-3">Akun Owner
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->

                        <!--begin::Description-->
                        <small class="text-muted fs-7 fw-semibold my-1 ms-1"></small>
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-0 pb-0">
                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="account/overview.html">Owner</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/settings.html">Karyawan</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/security.html">Apotek</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/activity.html">Billing</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->

        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Akun Owner</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <!--begin::Col-->
                            <div class="col-lg-2">
                                <!--begin::Input group::Avatar-->
                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url('{{ asset('backend/media/svg/avatars/blank.svg') }}')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url({{ asset('backend/media/avatars/300-1.jpg') }})">
                                            </div>
                                            <!--end::Preview existing avatar-->

                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                                data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-pencil fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                                data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-cross fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                                                data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-cross fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group::Avatar-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-10">
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="text" name="nama_lengkap" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan nama lengkap Anda" value="" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Jabatan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="text" name="jabatan" class="form-control form-control-lg form-control-solid" placeholder="---"
                                                value="Pemilik Apotek" disabled />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Alamat</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                            placeholder="Ketikkan alamat Anda" value="" />
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan nama email Anda" value="" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Password</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="password" name="password" class="form-control form-control-lg form-control-solid"
                                                placeholder="---" value="" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">No. SIPA</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="text" name="no_sipa" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan No. SIPA Anda" value="" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Berlaku Sampai</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="text" name="berlaku_sampai" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan tanggal kadaluarsa No. SIPA Anda" value="" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Dokumen pendukung</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="file" name="no_sipa" class="form-control form-control-lg form-control-solid"
                                                placeholder="Upload surat SIPA Anda" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                    </div>
                    <!--end::Actions-->
                    <input type="hidden">
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->
    </div>
@endsection

@push('after-script')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('backend/js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset('backend/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('backend/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset('backend/js/custom/pages/user-profile/general.js') }}"></script>
    <script src="{{ asset('backend/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('backend/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/two-factor-authentication.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endpush
