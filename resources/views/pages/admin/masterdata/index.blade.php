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
                <h1 class="d-flex align-items-center text-gray-900 fw-bold my-1 fs-3">
                    Produk
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
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('admin.masterdata.index') }}">Produk</a>
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
                <h3 class="fw-bold m-0">Produk</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Add product-->
            <div class="d-flex align-items-center ms-auto">
                <a href="{{ route('admin.masterdata.create') }}" class="btn btn-dark btn-sm me-2">Tambah Produk Satuan</a>
                <a href="{{ route('admin.masterdata.create-multiple') }}" class="btn btn-secondary btn-sm">Tambah Produk Massal</a>
            </div>
            <!--end::Add product-->
        </div>
        <!--end::Card header-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="row align-items-center">
                <!--begin::Search-->
                <div class="col-lg-6">
                    <div class="d-flex flex-column ms-8">
                        <label for="mySearchBar" class="form-label mb-1">Cari Produk</label>
                        <div class="position-relative">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute m-4"></i>
                            <input type="text" id="mySearchBar" data-kt-product-table-filter="search" class="form-control w-100 ps-12"
                            placeholder="Cari" />
                        </div>
                    </div>
                </div>
                <!--end::Search-->
                <!--begin::Filter Lokasi-->
                <div class="col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="location_filter" class="form-label mb-1">Filter Lokasi</label>
                        <div class="position-relative">
                            <select id="location_filter" data-kt-product-table-filter="location" class="form-select form-select-solid"
                                data-kt-select2="true" data-allow-clear="true" data-placeholder="Filter Lokasi">
                                <option value="">Semua Lokasi</option>
                                @foreach ($locations as $location)
                                <option value="{{ $location->location }}">{{ $location->location }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!--end::Filter Lokasi-->
                <!--begin::Filter Kategori-->
                <div class="col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="category_filter" class="form-label mb-1">Filter Kategori</label>
                        <div class="position-relative">
                            <select id="category_filter" data-kt-product-table-filter="category" class="form-select form-select-solid"
                                data-kt-select2="true" data-allow-clear="true" data-placeholder="Filter Kategori">
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!--end::Filter Kategori-->
                <!--begin::Filter Golongan-->
                <div class="col-lg-2">
                    <div class="d-flex flex-column me-8">
                        <label for="group_filter" class="form-label mb-1">Filter Golongan</label>
                        <div class="position-relative">
                            <select id="group_filter" data-kt-product-table-filter="group" class="form-select form-select-solid"
                                data-kt-select2="true" data-allow-clear="true" data-placeholder="Filter Golongan">
                                <option value="">Semua Golongan</option>
                                @foreach ($groups as $group)
                                <option value="{{ $group->group }}">{{ $group->group }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!--end::Filter Golongan-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card toolbar-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Nama Produk</th>
                        <th class="min-w-125px">Varian</th>
                        <th class="min-w-125px">Golongan</th>
                        <th class="min-w-125px">Kategori</th>
                        <th class="min-w-125px">Stok</th>
                        <th class="min-w-125px">Harga</th>
                        <th class="min-w-125px">Lokasi</th>
                        <th class="min-w-125px">Terakhir Diupdate</th>
                        <th class="min-w-70px">Aksi</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600"></tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
@endsection

@push('after-script')
    <script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            var datatable = $('#kt_customers_table').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                dom: "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-4 d-flex align-items-center'li><'col-sm-8'p>>",
                ajax: {
                    url: '{!! url()->current() !!}',
                    data: function (d) {
                        d.category_id = $('#category_filter').val();
                    }
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name',
                        width: '25%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'variant',
                        name: 'variant',
                        width: '5%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'group',
                        name: 'group',
                        width: '10%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'category_id',
                        name: 'category_id',
                        width: '10%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'stock',
                        name: 'stock',
                        width: '5%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'selling_price',
                        name: 'selling_price',
                        width: '10%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'location',
                        name: 'location',
                        width: '15%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at',
                        width: '15%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'action',
                        name: 'action',
                        width: '5%',
                        orderable: false,
                        searchable: false
                    }
                    ],
                    columnDefs: [{
                        "targets": [ 0 ],
                        "visible": true,
                        "searchable": false
                    }],
                    order: [
                        [0, 'desc']
                    ],
            });

            // Search
            $('#mySearchBar').keyup(function() {
                var filterValue = $(this).val();
                datatable.column(0).search(filterValue).draw();
            });

            // Filter by location
            $('#location_filter').on('change', function() {
                var filterValue = $(this).val();
                datatable.column(6).search(filterValue).draw();
            });

            // Filter by category
            $('#category_filter').on('change', function() {
                var filterValue = $(this).val();
                datatable.column(3).search(filterValue).draw();
            });

            // Filter by group
            $('#group_filter').on('change', function() {
                var filterValue = $(this).val();
                datatable.column(2).search(filterValue).draw();
            });

            $.fn.dataTable.ext.errMode = 'throw';

            // Delete Confirmation
            $('body').on('click', '#submitForm', function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                var productName = $(this).data('product-name');
                var productSkuCode = $(this).data('product-sku-code');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    html: "Anda akan menghapus produk<br><span style='font-size: 1.2em;'><strong><span style='color:red'>" + 
                        productName + "</span></strong></span><br><span style='font-size: 1.2em;'><strong><span style='color:red'>SKU : " + 
                        productSkuCode + "</span></strong></span><br>dari database?",
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