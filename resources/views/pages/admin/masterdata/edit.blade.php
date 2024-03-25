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
                <h3 class="fw-bold m-0">Edit Produk</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Form-->
            <form action="{{ route('admin.masterdata.update', $products->id) }}" method="POST" enctype="multipart/form-data" id="kt_account_profile_details_form"
                class="form fv-plugins-bootstrap5 fv-plugins-framework">
                @csrf 
                @method('PUT')
                <!--begin::Card body-->
                <div class="card-body border-top py-9 px-0">
                    <div class="row mb-6">
                        <!--begin::Col-->
                        <div class="col-lg-3">
                            <!--begin::Input group::Avatar-->
                            <div class="row mb-6">
                                <!--begin::Col-->
                                <div class="col">
                                    <h5 class="my-3 ">Foto Produk</h5>
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline mt-12 mx-6" data-kt-image-input="true"
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
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group::Avatar-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-9">
                            <!--begin::Input group-->
                            <label for="name" class="form-label">Nama Obat</label>
                            <div class="input-group input-group-solid mb-5">
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="basic-addon3" value="{{ old('name', $products->name) }}"/>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <label for="supplier" class="form-label">Supplier</label>
                            <div class="input-group input-group-solid mb-5">
                                <input type="text" name="supplier" class="form-control" id="supplier" aria-describedby="basic-addon3" value="{{ old('supplier', $suppliers->name) }}"/>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Select input group-->
                            <div class="row mb-6">
                                <!-- Variant -->
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column me-8">
                                        <label class="form-label mb-1">Variant</label>
                                        <div class="position-relative">
                                            <select id="variant" class="form-select form-select-solid" data-kt-select2="true" data-allow-clear="true">
                                                <option value="{{ $products->id }}">{{ old('variant', $products->variant) }}</option>
                                                @foreach ($variants as $variant)
                                                @if ($variant->variant !== $products->variant)
                                                <option value="{{ $variant->variant }}">{{ $variant->variant }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Group -->
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column me-8">
                                        <label class="form-label mb-1">Golongan</label>
                                        <div class="position-relative">
                                            <select id="group" class="form-select form-select-solid" data-kt-select2="true" data-allow-clear="true">
                                                <option value="{{ $products->id }}">{{ old('group', $products->group) }}</option>
                                                @foreach ($groups as $group)
                                                @if ($group->group !== $products->group)
                                                <option value="{{ $group->group }}">{{ $group->group }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Category -->
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column me-8">
                                        <label class="form-label mb-1">Kategori</label>
                                        <div class="position-relative">
                                            <select id="category" class="form-select form-select-solid" data-kt-select2="true" data-allow-clear="true">
                                                <option value="{{ $products->id }}">{{ old('category', $products->category->name) }}</option>
                                                @foreach ($categories as $category)
                                                @if ($category->name !== $products->category->name)
                                                <option value="{{ $products->id }}">{{ $category->name }}</option>
                                                @endif
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
                                    <label for="sku-code" class="form-label">Kode SKU</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <input type="text" name="sku_code" class="form-control" id="sku-code" aria-describedby="basic-addon3" 
                                            value="{{ old('sku_code', $products->sku_code) }}"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-6">
                                    <!--begin::Input group-->
                                    <label for="location" class="form-label">Lokasi</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <input type="text" name="location" class="form-control" id="location" aria-describedby="basic-addon3" 
                                            value="{{ old('location', $products->location) }}"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <div class="col-lg-4">
                                    <!--begin::Input group-->
                                    <label for="cost" class="form-label">Harga Beli</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="cost" class="form-control" value="{{ old('cost', $products->cost) }}"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Input group-->
                                    <label for="margin" class="form-label">Keuntungan</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="margin" class="form-control" value="{{ old('margin', $products->margin) }}"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Input group-->
                                    <label for="selling-price" class="form-label">Harga Jual</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="selling-price" class="form-control" value="{{ old('selling_price', $products->selling_price) }}"/>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_consignment" value="{{ old('is_consignment', $products->is_consignment ?? 'checked') }}"/>
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
                                    <div class="col-lg-6">
                                        <h3 class="mb-6 text-end text-success" id="totalStock">Stok Total : {{ $totalStock }}</h3>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Repeater-->
                            @foreach($batches as $batch)
                            <div id="batch">
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div data-repeater-list="batch">
                                        <div data-repeater-item>
                                            <div class="form-group row mb-6">
                                                <div class="col-md-4">
                                                    <label class="form-label">No. Batch</label>
                                                    <input type="text" name="no_batch" class="form-control mb-2 mb-md-0" placeholder="Masukkan No. Batch" 
                                                        data-kt-repeater="no_batch" value="{{ old('batch_code[]', $batch->batch_code) }}"/>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-0">
                                                        <label for="" class="form-label">Tanggal Kadaluarsa</label>
                                                        <input name="expired_at" class="form-control form-control-solid" placeholder="Masukkan Tanggal" id="kt_datepicker_2"
                                                            data-kt-repeater="expired_at" value="{{ old('expired_at[]', $batch->expired_at) }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Stok</label>
                                                    <input type="number" name="stock" class="form-control mb-2 mb-md-0" placeholder="Masukkan Stok" 
                                                        data-kt-repeater="stock[]" value="{{ old('stock[]', $batch->stock) }}"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                    <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                    Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form group-->
                                @endforeach
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
                    <a href="{{ route('admin.masterdata.index') }}" class="btn btn-light btn-active-light-primary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
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
<script src = "{{ asset('backend/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<script>
    $(document).ready(function () {
        var totalStockElement = document.getElementById('totalStock');

        function updateTotalStock() {
            var stockInputs = document.querySelectorAll('[data-kt-repeater="stock[]"]');
            var totalStock = 0;
            stockInputs.forEach(function (input) {
                var stock = parseInt(input.value);
                if (!isNaN(stock)) {
                    totalStock += stock;
                }
            });
            // totalStockElement.textContent = 'Stok Total : ' + totalStock;

            if (totalStock < 10) {
                totalStockElement.style.color = 'red';
            } else if (totalStock < 20) {
                totalStockElement.style.color = '#FFCC00'; // yellow
            } else {
                totalStockElement.style.color = '#198754'; // green
            }
        }

        // Listen for changes on stock inputs
        document.getElementById('batch').addEventListener('[data-kt-repeater="stock[]"]', function (event) {
            if (event.target.name === 'data-kt-repeater="stock[]"') {
                updateTotalStock();
            }
        });

        // Update total stock initially
        updateTotalStock();

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


    });
</script>
@endpush