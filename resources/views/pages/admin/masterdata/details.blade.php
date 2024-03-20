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
                    <h3 class="fw-bold m-0">Detail Product</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

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
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Supplier</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Satuan</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Golongan</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Kategori</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">No SKU</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Lokasi</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Total Stok</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Harga Beli</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Keuntungan</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Diskon (%)</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="fw-bold">Harga Jual</h5>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-9">
                                    <div class="py-5 my-auto">
                                        <h5 class="">{{ $supplier->name }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">{{ $products->unit }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">{{ $products->group }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">{{ $category->name }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">{{ $products->sku_code }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">{{ $products->location }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">{{ $totalStock }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">Rp {{ number_format($products->cost, 0, ',', '.') }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">Rp {{ number_format($products->margin, 0, ',', '.') }}</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">-</h5>
                                    </div>
                                    <div class="py-5 my-auto">
                                        <h5 class="">Rp {{ number_format($products->selling_price, 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
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
@endsection

