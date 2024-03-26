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
                                    <label class="col-form-label required fw-semibold fs-6 py-0"><strong>Nama Lengkap</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent px-0"
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->name }}" readonly />
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
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->role_name }}" readonly />
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
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->address }}" />
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
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->phone_number }}" />
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
                                            placeholder="Ketikkan alamat Anda" value="{{ $employee->email }}" />
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
                                            placeholder="Ketikkan alamat Anda" value="*****" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6"><strong>Nomor Lisensi</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="Ketikkan nomor SIPA Anda" value="{{ $employee->license_number ?? '-' }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6"><strong>Berlaku Sampai</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="address" class="form-control form-control-lg form-control-transparent"
                                            placeholder="---" value="{{ $employee->license_expired_date ?? '-' }}" />
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
                                <a href="#" id="editShiftButton" class="btn btn-light btn-dark">Edit Shift</a>
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
    <!--end::Custom Javascript-->

    <!--begin::Additional Javascript(used for this page only)-->
    <script>
        $(document).ready(function() {
            $('#editShiftButton').click(function(e) {
                e.preventDefault();

                $('#editShiftButton').hide();
                $('.col-lg-8').removeClass('col-lg-8').addClass('col-lg-10');

                var shifts = @json($employee->shifts);
                var formHtml = `
					<form id="shiftForm">
						<div data-repeater-list="shifts">
							@foreach ($employee->shifts as $shift)
								<div data-repeater-item>
									<div class="form-group row mb-5">
										<div class="col-md-4">
											<label class="form-label">Hari:</label>
											<select class="form-select" name="hari" data-control="select2">
												<option></option>
												<option value="senin" {{ $shift->hari == 'senin' ? 'selected' : '' }}>Senin</option>
												<option value="selasa" {{ $shift->hari == 'selasa' ? 'selected' : '' }}>Selasa</option>
												<option value="rabu" {{ $shift->hari == 'rabu' ? 'selected' : '' }}>Rabu</option>
												<option value="kamis" {{ $shift->hari == 'kamis' ? 'selected' : '' }}>Kamis</option>
												<option value="jumat" {{ $shift->hari == 'jumat' ? 'selected' : '' }}>Jum'at</option>
												<option value="sabtu" {{ $shift->hari == 'sabtu' ? 'selected' : '' }}>Sabtu</option>
												<option value="minggu" {{ $shift->hari == 'minggu' ? 'selected' : '' }}>Minggu</option>
												<!-- Tambahkan opsi hari lainnya -->
											</select>
										</div>
										<div class="col-md-3">
											<label class="form-label">Jam Masuk:</label>
											<input type="text" name="jam_masuk" class="form-control" value="{{ $shift->jam_masuk }}">
										</div>
										<div class="col-md-3">
											<label class="form-label">Jam Pulang:</label>
											<input type="text" name="jam_pulang" class="form-control" value="{{ $shift->jam_pulang }}">
										</div>
										<div class="col-md-2">
											<button type="button" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
												<i class="ki-solid ki-trash fs-5"></i> Delete
											</button>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						<div class="form-group mt-5">
							<button type="button" data-repeater-create class="btn btn-light-secondary">
								<i class="ki-duotone ki-plus fs-3"></i> Tambah Shift
							</button>
						</div>
					</form>
				`;

                $('#shiftFormContainer').html(formHtml);
                $('[data-control="select2"]').select2();
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

                $('#cardFooter').removeClass('justify-content-start').addClass('justify-content-end');
                $('#cardFooter').html(`
					<a href="{{ route('admin.employees.index') }}" class="btn btn-light btn-active-light-primary me-2">Batal</a>
					<button type="button" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
				`);
            });
        });
    </script>
    <!--end::Additional Javascript-->
@endpush
