@extends('layouts.admin')

@push('after-script')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
@endpush

@section('content')
    <div  class="container bg-white p-4 rounded">
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-0 pb-0 px-0">
                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('admin.masterdata.index')}}">Produk</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('admin.membership.index') }}">Membership</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
        </div>

        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Edit Produk</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

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
                            <div class="col-lg-3">
                                <!--begin::Input group::Avatar-->
                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <h5 class="my-3">Foto Produk</h5>
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline my-3 py-auto" data-kt-image-input="true"
                                            style="background-image: url('{{ asset('backend/media/svg/avatars/blank.svg') }}')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-250px h-250px">
                                            </div>
                                            <!--end::Preview existing avatar-->

                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                                data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                <i class="text-primary ki-outline ki-pencil fs-3"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                                data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                <i class="text-danger ki-outline ki-trash fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->

                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                                                data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                <i class="text-danger ki-outline ki-trash fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text my-6 py-auto">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group::Avatar-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-9">
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Nama Obat</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="medicine" class="form-control form-control-lg form-control-solid"
                                            placeholder="Ketikkan nama obat" value="Paramex" />
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-form-label required fw-semibold fs-6">Supplier</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input type="text" name="supplier" class="form-control form-control-lg form-control-solid"
                                            placeholder="Ketikkan nama supplier" value="Konimex" />
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Variant</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <select id="variant" class="form-select">
                                            <option value="">Semua Variant</option>
                                            <option value="Variant 1">Variant 1</option>
                                            <option value="Variant 2">Variant 2</option>
                                            <option value="Variant 3">Variant 3</option>
                                            <option value="Variant 4">Variant 4</option>
                                            <option value="Variant 5">Variant 5</option>
                                        </select>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Golongan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <select id="group" class="form-select">
                                            <option value="">Semua Golongan</option>
                                            <option value="Golongan 1">Golongan 1</option>
                                            <option value="Golongan 2">Golongan 2</option>
                                            <option value="Golongan 3">Golongan 3</option>
                                            <option value="Golongan 4">Golongan 4</option>
                                            <option value="Golongan 5">Golongan 5</option>
                                        </select>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Kategori</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <select id="category" class="form-select">
                                            <option value="">Semua Kategori</option>
                                            <option value="Kategori 1">Kategori 1</option>
                                            <option value="Kategori 2">Kategori 2</option>
                                            <option value="Kategori 3">Kategori 3</option>
                                            <option value="Kategori 4">Kategori 4</option>
                                            <option value="Kategori 5">Kategori 5</option>
                                        </select>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Kode SKU</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <input type="text" name="sku_code" class="form-control form-control-lg form-control-solid"
                                                placeholder="Masukkan Kode SKU" value="" />
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Lokasi</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <select id="category" class="form-select">
                                            <option value="">Semua Lokasi</option>
                                            <option value="Lokasi 1">Lokasi 1</option>
                                            <option value="Lokasi 2">Lokasi 2</option>
                                            <option value="Lokasi 3">Lokasi 3</option>
                                            <option value="Lokasi 4">Lokasi 4</option>
                                            <option value="Lokasi 5">Lokasi 5</option>
                                        </select>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Harga Beli</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="input-group">
                                                <span class="input-group-text">Rp</span>
                                                <input type="number" name="purchase" class="form-control form-control-lg form-control-solid"
                                                    placeholder="Masukkan Harga Beli" />
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Keuntungan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="input-group">
                                                <span class="input-group-text">Rp</span>
                                                <input type="number" name="margin" class="form-control form-control-lg form-control-solid"
                                                    placeholder="Masukkan Keuntungan" />
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Harga Jual</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="input-group">
                                                <span class="input-group-text">Rp</span>
                                                <input type="number" name="sell_price" class="form-control form-control-lg form-control-solid"
                                                    placeholder="Masukkan Harga Jual" />
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Checkbox-->
                                <div class="row mb-6">
                                    <div class="col-lg-4">
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="form-check my-5">
                                                <input class="form-check-input" type="checkbox" name="is_consignment" id="is_consignment" value="is_consignment" required>
                                                <label class="form-check-label" for="is_consignment">
                                                    <h6 class="ms-2 py-auto" style="color: #3B3B3B"><strong></strong>Produk Konsinyasi</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9 rounded">
                        <div class="row mb-6">
                            <!--begin::Col-->
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="row mb-6">
                                        <div class="col-lg-6">
                                            <h3 class="mb-6 text-start">Batch dan Stok Produk</h3>
                                        </div>
                                        <div class="col-lg-6">
                                            <h3 class="mb-6 text-end" style="color: #4EAC52">Stok Total : 50</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Kode Batch</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="input-group">
                                                <input type="text" name="batch_code" class="form-control form-control-lg form-control-solid"
                                                    placeholder="Masukkan Kode Batch" />
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Tanggal Kadaluarsa</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="input-group">
                                                <input type="date" name="expired_at" class="form-control form-control-lg form-control-solid" 
                                                    placeholder="Masukkan Tanggal Kadaluarsa" 
                                                    onchange="this.value = formatDate(this.value)" />
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Stok</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="input-group">
                                                <input type="number" name="stock" class="form-control form-control-lg form-control-solid"
                                                    placeholder="Masukkan Jumlah Stok" />
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--begin::button add batch-->
                                <div class="row mb-6">
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-secondary p-auto m-auto" style="background-color: #535561; color: white">
                                            <i class="text-light bi bi-plus fs-2 p-auto m-auto"></i> Tambah Batch
                                        </button>
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!-- END: ed8c6549bwf9 -->
                    <!--end::Card body-->

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-secondary btn-lg me-6" style="background-color: white; color: #282828; border: solid 1px #535561;">Batal</button>
                        <button type="button" class="btn btn-secondary btn-lg" style="background-color: #535561; color: white" id="kt_account_profile_details_submit">Simpan</button>
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