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
            <div class="m-0">
                <h3 class="fw-bold m-0">Detail Produk</h3>
            </div>
            <div class="me-0">
                <a href="{{ route('admin.masterdata.edit', $products->id) }}" class="btn btn-primary">Edit Produk</a>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <div class="row mb-6">
                    <!--begin::Col-->
                    <div class="col-lg-3">
                        <!--begin::Input group::Avatar-->
                        <div class="row mb-6">
                            <!--begin::Col-->
                            <div class="col">
                                <h2 class="my-3">{{ $products->name }}</h2>
                                <!--begin::Image preview-->
                                <div class="image-input image-input-outline my-3 py-auto" data-kt-image-input="true"
                                    style="background-image: url('{{ $products->product_photo_path ?? asset('images/default-photo.jpg') }}')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-250px h-250px">
                                        <img src="{{ $products->product_photo_path ?? asset('images/default-photo.jpg') }}" alt="Product Image" />
                                    </div>
                                    <!--end::Preview existing avatar-->
                                </div>
                                <!--end::Image preview-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group::Avatar-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-9">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-3">
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Supplier</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Satuan</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Golongan</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Kategori</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>No SKU</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Lokasi</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Total Stok</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Harga Beli</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Keuntungan</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Diskon (%)</strong></p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="fw-bold"><strong>Harga Jual</strong></p>
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-9">
                                <div class="pb-3 my-auto">
                                    <p class="">{{ $supplier->name }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">{{ $products->unit }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">{{ $products->group }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">{{ $category->name }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">{{ $products->sku_code }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">{{ $products->location }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">{{ $totalStock }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">Rp {{ number_format($products->cost, 0, ',', '.') }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">Rp {{ number_format($products->margin, 0, ',', '.') }}</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">-</p>
                                </div>
                                <div class="pb-3 my-auto">
                                    <p class="">Rp {{ number_format($products->selling_price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
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
                        <!--begin::Input group-->
                        <div class="table-responsive">
                            <table class="table gs-7 gy-7 gx-7">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                        <th><strong>No. Batch</strong></th>
                                        <th><strong>Tanggal Expired</strong></th>
                                        <th><strong>Stok</strong></th>
                                        <th><strong>Aksi</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($batches as $batch)
                                    <tr>
                                        <td>{{ $batch->batch_code }}</td>
                                        <td>{{ \Carbon\Carbon::parse($batch->expired_at)->format('d/m/Y') }}</td>
                                        <td>{{ $batch->stock }}</td>
                                        <td class="d-flex flex-row">
                                            <div class="p-1">
                                                <button type="button" class="btn btn-light btn-active-light-primary" data-bs-toggle="modal" 
                                                    data-bs-target="#batch_modal">
                                                <i class="ki-solid ki-pencil"></i>
                                                </button>
                                            </div>
                                            <div class="p-1">
                                                <form id="deleteForm_{{ $batch->id }}" action="{{ route('admin.masterdata.destroyBatch', ['id' => $batch->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary" id="deleteForm" data-no-batch="{{ $batch->batch_code }}" data-stock="{{ $batch->stock }}">
                                                        <i class="ki-solid ki-trash"></i>
                                                    </button>
                                                </form>                                                
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Basic info-->
</div>
<!-- Modal -->
<div class="modal fade" tabindex="-1" id="batch_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Stok</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <form action="{{ route('admin.masterdata.store-batch', $products->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!--begin::Input group-->
                    <label for="no_batch" class="form-label">No. Batch</label>
                    <div class="input-group input-group-solid mb-5">
                        <input type="text" name="no_batch" class="form-control" id="no_batch" aria-describedby="basic-addon3" value="" readonly/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Date input-->
                    <div class="mb-5">
                        <label for="expired_at" class="form-label">Tanggal Kadaluarsa</label>
                        <input name="expired_at" class="form-control form-control-solid" placeholder="Masukkan Tanggal" id="kt_datepicker_2"
                            data-kt-repeater="expired_at" value=""/>
                    </div>
                    <!--end::Date input-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <div class="col-md-6">
                            <!--begin::Input group-->
                            <label for="old_stock" class="form-label">Stok Lama</label>
                            <div class="input-group input-group-solid mb-5">
                                <input type="number" name="old_stock" class="form-control" id="old_stock" aria-describedby="basic-addon3" 
                                    value="" readonly/>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-md-6">
                            <!--begin::Input group-->
                            <label for="stock" class="form-label">Tambah Stok</label>
                            <div class="input-group input-group-solid mb-5">
                                <input type="number" name="stock" class="form-control" id="stock" aria-describedby="basic-addon3" 
                                    placeholder="Masukkan Stok"/>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label for="total_stock" class="form-label">Total Stock</label>
                    <div class="input-group input-group-solid mb-5">
                        <input type="number" name="total_stock" class="form-control" id="total_stock" aria-describedby="basic-addon3" value="" readonly/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Action-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <!--end::Action-->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('after-script')
<script>
    // Delete Confirmation
    $(document).ready(function() {
        $('body').on('click', '#deleteForm', function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                var noBatch = $(this).data('no-batch');
                var stock = $(this).data('stock');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    html: "Anda akan menghapus produk<br><span style='font-size: 1.2em;'><strong><span style='color:red'> No. Batch " + 
                        noBatch + "</span></strong></span><br><span style='font-size: 1.2em;'><strong><span style='color:red'>Stok : " + 
                        stock + "</span></strong></span><br>dari database?",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Batal',
                    cancelButtonColor: '#8F9098',
                    confirmButtonColor: '#DC3545',
                    confirmButtonText: 'Hapus',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        form.submit();
                    }
                });
        });

        $("#kt_datepicker_2").flatpickr();

    });
</script>
@endpush