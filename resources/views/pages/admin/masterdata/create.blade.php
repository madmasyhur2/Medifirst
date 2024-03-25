@extends('layouts.admin')
@section('content')
<div id="kt_content_container" class="container-xxl">
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-0 pb-0">
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
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6 mb-6 d-flex justify-content-between align-items-center">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Tambah Produk</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Form-->
            <form action="{{ route('admin.masterdata.store') }}" method="POST" enctype="multipart/form-data" id="kt_account_profile_details_form"
                class="form fv-plugins-bootstrap5 fv-plugins-framework">
                @csrf
                @method('POST')
                <!--begin::Card body-->
                <div class="card-body border-top p-9 px-0">
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
                            <label for="name" class="form-label">Nama Produk</label>
                            <div class="input-group input-group-solid mb-5">
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="basic-addon3"
                                    placeholder="Masukkan Nama Produk"/>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Select input-->
                            <label class="col-form-label">Supplier</label>
                            <select id="supplier" name="supplier_id" class="form-select form-select-solid" data-kt-select2="true" data-allow-clear="true">
                                <option value="" selected disabled>Pilih Supplier</option>
                                @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                            <!--end::Input group-->
                            <!--begin::Select input group-->
                            <div class="row mb-6">
                                <!-- Variant -->
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column me-8">
                                        <label class="col-form-label mb-1">Varian</label>
                                        <div class="position-relative">
                                            <select id="variant" name="variant" class="form-select form-select-solid" data-kt-select2="true" data-allow-clear="true">
                                                <option value="" selected disabled>Pilih Varian</option>
                                                @foreach ($variants as $variant)
                                                <option value="{{ $variant->variant }}">{{ $variant->variant }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Group -->
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column me-8">
                                        <label class="col-form-label mb-1">Golongan</label>
                                        <div class="position-relative">
                                            <select id="group" name="group" class="form-select form-select-solid" data-kt-select2="true" data-allow-clear="true">
                                                <option value="" selected disabled>Pilih Golongan</option>
                                                @foreach ($groups as $group)
                                                <option value="{{ $group->group }}">{{ $group->group }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Category -->
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column">
                                        <label class="col-form-label mb-1">Kategori</label>
                                        <div class="position-relative">
                                            <select id="category" name="category_id" class="form-select form-select-solid" data-kt-select2="true" data-allow-clear="true">
                                                <option value="" selected disabled>Pilih Kategori</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Select input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <div class="col-lg-6">
                                    <!--begin::Input group-->
                                    <label for="sku_code" class="form-label">Kode SKU</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <input type="text" name="sku_code" class="form-control" id="sku-code" aria-describedby="basic-addon3" 
                                            placeholder="Masukkan Kode SKU"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-6">
                                    <!--begin::Input group-->
                                    <label for="location" class="form-label">Lokasi</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <input type="text" name="location" class="form-control" id="location" aria-describedby="basic-addon3" 
                                            placeholder="Masukkan Lokasi"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <div class="col-lg-4">
                                    <!--begin::Input group-->
                                    <label for="cost" class="col-form-label">Harga Beli</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="cost" class="form-control" placeholder="Masukkan Harga Beli"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Input group-->
                                    <label class="col-form-label">Keuntungan</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="margin" class="form-control" placeholder="Masukkan Keuntungan" />
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Input group-->
                                    <label class="col-form-label required fw-semibold fs-6">Harga Jual</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="selling_price" class="form-control" placeholder="Masukkan Harga Jual" />
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_consignment"/>
                                <p class="ms-2 fw-bold " for="is_consignment">
                                    Konsinyasi
                                </p>
                            </div>
                            <!--end::Checkbox-->
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Card body-->
                <div class="card-body border-top pt-12">
                    <div class="row mb-6">
                        <!--begin::Col-->
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <div class="row mb-6">
                                    <div class="col-lg-6">
                                        <h3 class="mb-6 text-start">Batch dan Stok Produk</h3>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Repeater-->
                            <div id="batch">
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div data-repeater-list="batch">
                                        <div data-repeater-item>
                                            <div class="form-group row mb-6">
                                                <div class="col-md-4">
                                                    <label class="form-label">No. Batch</label>
                                                    <input type="text" name="no_batch" class="form-control mb-2 mb-md-0" placeholder="Masukkan No. Batch" 
                                                        data-kt-repeater="no_batch"/>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-0">
                                                        <label for="" class="form-label">Tanggal Kadaluarsa</label>
                                                        <input name="expired_at" class="form-control form-control-solid" placeholder="Masukkan Tanggal" id="kt_datepicker_2"
                                                            data-kt-repeater="expired_at"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Stok</label>
                                                    <input type="number" name="stock" class="form-control mb-2 mb-md-0" placeholder="Masukkan Stok" 
                                                        data-kt-repeater="stock[]"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-md-6">
                                                    <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
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
                                    <a href="javascript:;" data-repeater-create class="btn btn-light-primary" id="addBatch">
                                    <i class="ki-duotone ki-plus fs-3"></i>
                                    Tambah Batch
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
                    <a href="{{ route('admin.masterdata.index') }}" class="btn btn-light btn-active-light-primary me-6">Batal</a>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card Body-->
    </div>
    <!--end::Card-->
</div>
@endsection

@push('after-script')
<script src="{{ asset('backend/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<script>
    $("#kt_datepicker_2").flatpickr();

    $('#batch').repeater({
        initEmpty: false,
        defaultValues: {
            'text-input': 'foo'
        },
        show: function () {
            $(this).slideDown();
            $(this).find('input[type="text"]').val('');
            $(this).find('input[type="number"]').val('');
            $('[data-kt-repeater="expired_at"]').flatpickr();
            $(this).insertAfter($('#batch').find('[data-repeater-item]').last()).hide().slideDown();
        },
        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
</script>
@endpush