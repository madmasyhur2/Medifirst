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
        <div class="card">
            <div class="card-body pt-0 pb-0">
                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('admin.profiles.index') }}">Owner</a>
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
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Membuat Akun Karyawan</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="kt_account_profile_details_form"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    @csrf @method($method)

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
                                                style="background-image: url('{{ asset('backend/media/svg/avatars/blank.svg') }}')">
                                            </div>
                                            <!--end::Preview existing avatar-->


                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                                data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-pencil fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
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
                                            <input type="text" name="name" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan nama lengkap Anda" value="{{ old('name') }}" />
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
                                            <select class="form-select form-select-solid" name="jabatan" data-control="select2"
                                                data-placeholder="Pilih Jabatan Anda">
                                                <option></option>
                                                <option value="cashier" {{ old('jabatan') == 'cashier' ? 'selected' : '' }}>Kasir</option>
                                                <option value="warehouse" {{ old('jabatan') == 'warehouse' ? 'selected' : '' }}>Pergudangan</option>
                                                <option value="finance" {{ old('jabatan') == 'finance' ? 'selected' : '' }}>Keuangan</option>
                                            </select>
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
                                        <input type="text" name="address" class="form-control form-control-lg form-control-solid"
                                            placeholder="Ketikkan alamat Anda" value="{{ old('address') }}" />
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">No. HP</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="text" name="phone_number" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan nomor hp Anda" value="{{ old('phone_number') }}" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan nama email Anda" value="{{ old('email') }}" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Password</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="••••••••"
                                                    name="password" autocomplete="off" />

                                                <!--begin::Visibility toggle-->
                                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="ki-outline ki-eye-slash fs-1"></i>
                                                    <i class="ki-outline ki-eye d-none fs-1"></i>
                                                </span>
                                                <!--end::Visibility toggle-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Nomor Lisensi</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="text" name="license_number" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan nomor lisensi Anda" value="{{ old('license_number') }}" />
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
                                            <input name="berlaku_sampai" class="form-control form-control-lg form-control-solid"
                                                placeholder="Ketikkan tanggal kadaluarsa no. lisensi Anda" value="{{ old('berlaku_sampai') }}"
                                                id="kt_datepicker_2" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body::Data Karyawan-->

                    <!--begin::Card body::Shift Kerja-->
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <!--begin::Col-->
                            <div class="col-lg-2">
                                <h3 class="fw-bold m-0">Shift Kerja</h3>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-10">
                                <!--begin::Repeater-->
                                <div id="shifts">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="shifts">
                                            <div data-repeater-item>
                                                <div class="form-group row mb-5">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Hari:</label>
                                                        <select class="form-select" name="shifts[][hari]" data-kt-repeater="select2"
                                                            data-placeholder="Pilih hari shift">
                                                            <option></option>
                                                            <option value="senin">Senin</option>
                                                            <option value="selasa">Selasa</option>
                                                            <option value="rabu">Rabu</option>
                                                            <option value="kamis">Kamis</option>
                                                            <option value="jumat">Jum'at</option>
                                                            <option value="sabtu">Sabtu</option>
                                                            <option value="minggu">Minggu</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Jam Masuk:</label>
                                                        <input type="text" name="shifts[][jam_masuk]" data-kt-repeater="shiftpicker"
                                                            class="form-control mb-2 mb-md-0" placeholder="Pilih jam masuk" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Jam Pulang:</label>
                                                        <input type="email" name="shifts[][jam_pulang]" data-kt-repeater="shiftpicker"
                                                            class="form-control mb-2 mb-md-0" placeholder="Pilih jam pulang" />
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                            <i class="ki-solid ki-trash fs-5"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-secondary">
                                            <i class="ki-duotone ki-plus fs-3"></i>
                                            Tambah Shift
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Repeater-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-light btn-active-light-primary me-2">Batal</a>
                        <button type="button" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
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
            $("#kt_datepicker_2").flatpickr();

            $('#shifts').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                    $(this).find('[data-kt-repeater="select2"]').select2();
                    $(this).find('[data-kt-repeater="shiftpicker"]').flatpickr({
                        enableTime: true,
                        noCalendar: true,
                        dateFormat: "H:i",
                    });
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },

                ready: function() {
                    $('[data-kt-repeater="select2"]').select2();
                    $('[data-kt-repeater="shiftpicker"]').flatpickr({
                        enableTime: true,
                        noCalendar: true,
                        dateFormat: "H:i",
                    });
                }
            });

            $('#kt_account_profile_details_submit').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You are about to update the account information',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, submit!',
                    confirmButtonColor: '#409add',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#kt_account_profile_details_form').submit();
                    } else {
                        Swal.fire('Cancelled', 'Failed to add employee', 'error');
                    }
                })
            });
        });
    </script>
    <!--end::Additional Javascript-->
@endpush
