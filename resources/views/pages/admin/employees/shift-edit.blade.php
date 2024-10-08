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
                <form action="{{ route('admin.employees.shifts.update', $employee->id) }}" method="POST" enctype="multipart/form-data"
                    id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
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
                            <div class="col-lg-10">
                                <!--begin::Repeater-->
                                <div id="shifts">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="shifts">
                                            @foreach ($employee->shifts as $index => $shift)
                                                <div data-repeater-item>
                                                    <input type="hidden" name="shifts[{{ $index }}][id]" value="{{ $shift->id }}" />

                                                    <div class="form-group row mb-5">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Hari:</label>
                                                            <select class="form-select" name="shifts[{{ $index }}][hari]"
                                                                data-kt-repeater="select2" data-placeholder="Pilih hari shift">
                                                                <option></option>
                                                                <option value="senin" {{ $shift->hari == 'senin' ? 'selected' : '' }}>Senin</option>
                                                                <option value="selasa" {{ $shift->hari == 'selasa' ? 'selected' : '' }}>Selasa</option>
                                                                <option value="rabu" {{ $shift->hari == 'rabu' ? 'selected' : '' }}>Rabu</option>
                                                                <option value="kamis" {{ $shift->hari == 'kamis' ? 'selected' : '' }}>Kamis</option>
                                                                <option value="jumat" {{ $shift->hari == 'jumat' ? 'selected' : '' }}>Jum'at</option>
                                                                <option value="sabtu" {{ $shift->hari == 'sabtu' ? 'selected' : '' }}>Sabtu</option>
                                                                <option value="minggu" {{ $shift->hari == 'minggu' ? 'selected' : '' }}>Minggu</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label">Jam Masuk:</label>
                                                            <input type="text" name="shifts[{{ $index }}][jam_masuk]"
                                                                data-kt-repeater="shiftpicker" class="form-control mb-2 mb-md-0"
                                                                placeholder="Pilih jam masuk" value="{{ $shift->jam_masuk }}" />
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label">Jam Pulang:</label>
                                                            <input type="email" name="shifts[{{ $index }}][jam_pulang]"
                                                                data-kt-repeater="shiftpicker" class="form-control mb-2 mb-md-0"
                                                                placeholder="Pilih jam pulang" value="{{ $shift->jam_pulang }}" />
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="javascript:;" data-repeater-delete
                                                                class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                <i class="ki-solid ki-trash fs-5"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
                        <a href="{{ route('admin.employees.show', $employee->id) }}"
                            class="btn btn-secondary btn-active-light-secondary me-2">Batal</a>
                        <button type="button" class="btn btn-dark" id="kt_account_profile_details_submit">Simpan</button>
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
                        Swal.fire('Ups', 'Gagal mengupdate shift karyawan', 'error');
                    }
                })
            });
        });
    </script>
    <!--end::Additional Javascript-->
@endpush
