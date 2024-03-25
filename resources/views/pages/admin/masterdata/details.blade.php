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
            <div class="card-header border-0" aria-expanded="true">
                <!--begin::Card title-->
                <div class="container py-3 my-6">
                    <div class="row">
                        <div class="col-md-10 d-flex align-items-left">
                            <h1 class="mx-0 my-auto">Detail Produk</h1>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-secondary" style="background-color: #535561; color: white" href="{{ route('admin.masterdata.edit', $products->id) }}" role="button">Edit Produk</a>
                        </div>
                    </div>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->

            <!--begin::Content-->
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
                            <!--begin::Table-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="py-2 my-auto"><strong>No. Batch</strong></th>
                                        <th class="py-2 my-auto"><strong>Tanggal Expired</strong></th>
                                        <th class="py-2 my-auto"><strong>Stok</strong></th>
                                        <th class="py-2 my-auto"><strong>Aksi</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($batches as $batch)
                                    <tr>
                                        <td class="py-6 my-auto">{{ $batch->batch_code }}</td>
                                        <td class="py-6 my-auto">{{ \Carbon\Carbon::parse($batch->expired_at)->format('d/m/Y') }}</td>
                                        <td class="py-6 my-auto">{{ $batch->stock }}</td>
                                        <td class="p-auto m-auto">
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-secondary btn-sm" style="background-color: #3B3B3B;" data-bs-toggle="modal" data-bs-target="#batch_modal">
                                                    <i class="fas fa-plus" style="color: white;"></i>
                                                </button>
                                                <form method="POST" action="{{ route('admin.masterdata.destroyBatch', ['id' => $batch->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" id="deleteForm" style="background-color: #DC3545;" data-no-batch="{{ $batch->batch_code }}" data-stock="{{ $batch->stock }}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end::Table-->
                            <!--end::Input group-->
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
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
    
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="row mb-4">
                            <!--begin::Label-->
                            <label class="col-form-label fw-semibold fs-6">Kode Batch</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <select id="batch[]" class="form-select">
                                <option value="" disabled>{{ $batch->batch_code }}</option>
                                @foreach ($batches as $batch)
                                    @if ($batch->batch_code == $batch->batch_code)
                                        <option value="{{ $batch->batch_code }}">{{ $batch->batch_code }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-4">
                            <!--begin::Label-->
                            <label class="col-form-label fw-semibold fs-6">Tanggal Kadaluarsa</label>
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
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <!--begin::Label-->
                                <label class="col-form-label fw-semibold fs-6">Stok Lama</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="fv-row fv-plugins-icon-container">
                                    <div class="input-group">
                                        <input type="number" name="stock[]" class="form-control form-control-lg form-control-solid"
                                            value="{{ $batch->stock }}"/>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="col-lg-6">
                                <!--begin::Label-->
                                <label class="col-form-label fw-semibold fs-6">Penambahan Stok</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="fv-row fv-plugins-icon-container">
                                    <div class="input-group">
                                        <input type="number" name="stock[]" class="form-control form-control-lg form-control-solid"
                                            placeholder="Masukkan stok yang akan ditambahkan" value=""/>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <div class="row mb-4">
                            <!--begin::Label-->
                            <label class="col-form-label fw-semibold fs-6">Total Stok</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="fv-row fv-plugins-icon-container">
                                <div class="input-group">
                                    <input type="number" name="total_stock[]" class="form-control form-control-lg form-control-solid" 
                                        value=""/>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
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
    });
</script>
@endpush