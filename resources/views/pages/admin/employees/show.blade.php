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
                    <h1 class="d-flex align-items-center text-gray-900 fw-bold my-1 fs-3">Akun Karyawan
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
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('admin.employees.index') }}">Owner</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Karyawan</a>
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
                    <h3 class="fw-bold m-0">Akun Karyawan</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->

            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form action="#" method="POST" enctype="multipart/form-data" id="kt_account_profile_details_form"
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
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $employee->avatar_url }})">
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
                                    <label class="col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->name }}" readonly />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Jabatan</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->role_name }}" readonly />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Alamat</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->address }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">No. HP</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->phone_number }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Email</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->email }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan alamat Anda" value="*****" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Nomor Lisensi</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan nomor SIPA Anda" value="446/0153/1427/1-16" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Berlaku Sampai</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="---" value="25 Agustus 2025" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->

                    <!--begin::Card body::Shift Kerja-->
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <!--begin::Col-->
                            <div class="col-lg-2">
                                <h3 class="fw-bold m-0">Shift Kerja</h3>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-8" id="shiftFormContainer">
                                @foreach ($employee->shifts as $shift)
                                    <h5>{{ Str::title($shift->hari) }}</h5>
                                    <p>{{ $shift->jam_masuk }} - {{ $shift->jam_pulang }}</p>
                                @endforeach
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-2">
                                <a href="{{ route('admin.employees.shifts.edit', $employee->id) }}" id="editShiftButton"
                                    class="btn btn-light btn-dark">Edit
                                    Shift</a>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-start py-6 px-9" id="cardFooter">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-light btn-secondary me-2">Kembali</a>
                    </div>
                    <!--end::Actions-->
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
    <script src="{{ asset('backend/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
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

    <!--begin::Additional Javascript(used for this page only)-->
    <script>
        $(document).ready(function() {
            //
        });
    </script>
    <!--end::Additional Javascript-->
@endpush
