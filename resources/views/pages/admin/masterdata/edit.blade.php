@extends('layouts.admin')

@push('after-script')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
@endpush

@section('content')
    <div class="container bg-white p-4 rounded">
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
                                            style="background-image: url('{{ $products->product_photo_path }}')">
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
                                            placeholder="Ketikkan nama obat" value="{{ old('name', $products->name) }}" />
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
                                            placeholder="Ketikkan nama supplier" value="{{ $suppliers->name }}"/>
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
                                            <option value="{{ $products->id }}">{{ $products->variant }}</option>
                                            @foreach ($variants as $variant)
                                                @if ($variant->variant !== $products->variant)
                                                    <option value="{{ $products->id }}">{{ $variant->variant }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Golongan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <select id="group" class="form-select">
                                            <option value="{{ $products->id }}">{{ $products->group }}</option>
                                            @foreach ($groups as $group)
                                                @if ($group->group !== $products->group)
                                                    <option value="{{ $products->id }}">{{ $group->group }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <!--end::Col-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Kategori</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <select id="category" class="form-select">
                                            <option value="{{ $products->id }}">{{ $products->category->name }}</option>
                                            @foreach ($categories as $category)
                                                @if ($category->name !== $products->category->name)
                                                    <option value="{{ $products->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach 
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
                                                placeholder="Masukkan Kode SKU" value="{{ $products->sku_code}}" />
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
                                            <option value="{{ $products->id }}">{{ $products->location }}</option>
                                            @foreach ($locations as $location)
                                                @if ($location->location !== $products->location)
                                                    <option value="{{ $products->id }}">{{ $location->location }}</option>
                                                @endif
                                            @endforeach
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
                                                <input type="number" name="cost" class="form-control form-control-lg form-control-solid"
                                                    placeholder="Masukkan Harga Beli" value="{{ $products->cost }}"/>
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
                                                    placeholder="Masukkan Keuntungan" value="{{ $products->margin }}"/>
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
                                                    placeholder="Masukkan Harga Jual" value="{{ $products->selling_price }}"/>
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
                                                <input class="form-check-input" type="checkbox" name="is_consignment" id="is_consignment" value="is_consignment" required
                                                    {{ $products->is_consignment ? 'checked' : '' }}/>
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
                                            <h3 class="mb-6 text-end" id="totalStock" style="color: #4EAC52">Stok Total : {{ $totalStock }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Input group-->
                                @foreach($batches as $batch)
                                <div class="row mb-6">
                                    <div class="col-lg-4">
                                        <!--begin::Label-->
                                        <label class="col-form-label required fw-semibold fs-6">Kode Batch</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <div class="input-group">
                                                <input type="text" name="batch_code[]" class="form-control form-control-lg form-control-solid"
                                                    value="{{ $batch->batch_code }}"/>
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
                                                <input type="date" name="expired_at[]" class="form-control form-control-lg form-control-solid" 
                                                    placeholder="Masukkan Tanggal Kadaluarsa" value="{{ $batch->expired_at }}"/>
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
                                                <input type="text" name="stock[]" class="form-control form-control-lg form-control-solid"
                                                    value="{{ $batch->stock }}"/>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                @endforeach
                                <!--begin::button add batch-->
                                <div class="row mb-6">
                                    <div class="col-lg-12">
                                        <button type="button" id="addBatchButton" class="btn btn-secondary p-auto m-auto" style="background-color: #535561; color: white">
                                            <i class="text-light bi bi-plus fs-2 p-auto m-auto"></i> Tambah Batch
                                        </button>
                                    </div>
                                </div>
                                <div id="batchContainer">
                                    {{-- Batch baru bakal muncul di sini --}}
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

@push('after-script')
<script>
    document.getElementById('addBatchButton').addEventListener('click', function() {
    var batchContainer = document.getElementById('batchContainer');
    var addBatchButton = document.getElementById('addBatchButton');

    var newBatch = document.createElement('div');
    newBatch.className = 'row mb-6';
    newBatch.innerHTML = `
        <div class="col-lg-4">
            <label class="col-form-label required fw-semibold fs-6">Kode Batch</label>
            <div class="fv-row fv-plugins-icon-container">
                <div class="input-group">
                    <input type="text" name="batch_code[]" class="form-control form-control-lg form-control-solid"/>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="col-form-label required fw-semibold fs-6">Tanggal Kadaluarsa</label>
            <div class="fv-row fv-plugins-icon-container">
                <div class="input-group">
                    <input type="date" name="expired_at[]" class="form-control form-control-lg form-control-solid" placeholder="Masukkan Tanggal Kadaluarsa"/>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="col-form-label required fw-semibold fs-6">Stok</label>
            <div class="fv-row fv-plugins-icon-container">
                <div class="input-group">
                    <input type="text" name="stock[]" class="form-control form-control-lg form-control-solid"/>
                </div>
            </div>
        </div>
    `;

    batchContainer.appendChild(newBatch);
    batchContainer.appendChild(addBatchButton);
});

// Get the total stock element
var totalStockElement = document.getElementById('totalStock');

// Function to update total stock
function updateTotalStock() {
    var stockInputs = document.querySelectorAll('input[name="stock[]"]');
    var totalStock = 0;
    stockInputs.forEach(function(input) {
        var stock = parseInt(input.value);
        if (!isNaN(stock)) {
            totalStock += stock;
        }
    });
    totalStockElement.textContent = 'Stok Total : ' + totalStock;

    // Update color based on total stock
    if (totalStock < 10) {
        totalStockElement.style.color = '#FF8822';
    } else if (totalStock < 20) {
        totalStockElement.style.color = '#FFCC00';
    } else {
        totalStockElement.style.color = '#198754'; // green
    }
}

// Listen for changes on stock inputs
document.getElementById('batchContainer').addEventListener('input', function(event) {
    if (event.target.name === 'stock[]') {
        updateTotalStock();
    }
});

// Update total stock initially
updateTotalStock();
</script>
@endpush