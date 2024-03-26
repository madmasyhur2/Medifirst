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
        <div class="card">
            <div class="card-body pt-0 pb-0">
                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Owner</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('admin.employees.index') }}">Karyawan</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Apotek</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Billing</a>
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
            <div class="card-header border-0" aria-expanded="true">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Akun Owner</h3>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <!--begin::Add customer-->
                        <a href="{{ route('admin.profiles.edit') }}" class="btn btn-secondary">
                            Edit Profile
                        </a>
                        <!--end::Add customer-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form action="{{ route('admin.profiles.update') }}" method="POST" enctype="multipart/form-data" id="kt_account_profile_details_form"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    @csrf @method('PUT')

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
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $user->avatar_url }})">
                                            </div>
                                            <!--end::Preview existing avatar-->
                                        </div>
                                        <!--end::Image input-->
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
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Nama Lengkap</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="{{ $user->name }}" readonly />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Jabatan</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="{{ $user->role_name }}" readonly />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Alamat</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="{{ $user->address }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>No. HP</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="{{ $user->phone_number }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Email</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="{{ $user->email }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Password</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="**********" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Nomor Lisensi</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="446/0153/1427/1-16" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Berlaku Sampai</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="{{ $user->license_expired_date }}" id="license_datepicker"
                                            disabled />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6 py-1"><strong>Dokumen Pendukung</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container col-lg-4">
                                        <a href="#" class="btn btn-light">
                                            <i class="bi bi-file-earmark-pdf fs-4 me-2"></i> <strong class="text-primary">Surat SIPA
                                                {{ $user->name }}</strong>
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->
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
    <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
    <!--end::Custom Javascript-->

    <!--begin::Additional Javascript(used for this page only)-->
    <script>
        $(document).ready(function() {
            $("#license_datepicker").flatpickr({
                altInput: true,
                altFormat: "d F Y",
                dateFormat: "Y-m-d",
                "locale": "id",
            });
        })
    </script>
    <!--end::Additional Javascript-->
@endpush
