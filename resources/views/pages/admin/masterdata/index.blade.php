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
        </div>
    
        <div class="container py-3 my-6">
            <div class="row">
                <div class="col-md-8 d-flex align-items-left">
                    <h1 class="mx-0 my-auto">Produk</h1>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-secondary btn-sm" style="background-color: #535561; color: white" href="{{ route('admin.masterdata.create')}}" role="button">Tambah Produk Satuan</a>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-secondary btn-sm" style="background-color: white; color: #282828; border: solid 1px #535561;" href="{{ route('admin.masterdata.add-multiple')}}" role="button">Tambah Produk Massal</a>
                </div>
            </div>
        </div>    
    
        <div class="container py-3">
            <div class="row">
                <!-- Search Input -->
                <div class="col-md-6 mb-3">
                    <label for="search" class="form-label">Cari Produk</label>
                    <input type="text" id="liveSearch" name="search" class="form-control" placeholder="Cari Produk">
                </div>
                <!-- Filter Dropdowns -->
                <div class="col-md-2 mb-3">
                    <label for="location_filter" class="form-label">Lokasi:</label>
                    <select id="location_filter" class="form-select">
                        <option value="">Semua Lokasi</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->location }}">{{ $location->location }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="category_filter" class="form-label">Kategori:</label>
                    <select id="category_filter" class="form-select">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="group_filter" class="form-label">Golongan:</label>
                    <select id="group_filter" class="form-select">
                        <option value="">Semua Golongan</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->group }}">{{ $group->group }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Tabel DataTable -->
                <div class="col-md-12">
                    <table class="table" id="productDataTable">
                        <thead>
                            <tr>
                                <th scope="col"><strong>No</strong></th>
                                <th scope="col"><strong>Nama Produk</strong></th>
                                <th scope="col"><strong>Varian</strong></th>
                                <th scope="col"><strong>Golongan</strong></th>
                                <th scope="col"><strong>Kategori</strong></th>
                                <th scope="col"><strong>Stok</strong></th>
                                <th scope="col"><strong>Harga</strong></th>
                                <th scope="col"><strong>Lokasi</strong></th>
                                <th scope="col"><strong>Terakhir Diupdate</strong></th>
                                <th scope="col"><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    {{-- <script src="{{ asset('backend/js/custom/account/settings/signin-methods.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/account/settings/profile-details.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/account/settings/deactivate-account.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/pages/user-profile/general.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/widgets.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/widgets.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/apps/chat/chat.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/utilities/modals/upgrade-plan.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/utilities/modals/create-campaign.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script> --}}
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>x
    {{-- <script src="{{ asset('backend/js/custom/utilities/modals/two-factor-authentication.js') }}"></script> --}}
    <script src="{{ asset('backend/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    
    <script>
        $(document).ready(function() {
            var datatable = $('#productDataTable').DataTable({
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
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
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
                        searchable: false
                    },
                    {
                        data: 'group',
                        name: 'group',
                        width: '10%',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'category_id',
                        name: 'category_id',
                        width: '10%',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'stock',
                        name: 'stock',
                        width: '5%',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'selling_price',
                        name: 'selling_price',
                        width: '10%',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'location',
                        name: 'location',
                        width: '15%',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at',
                        width: '15%',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        width: '5%',
                        orderable: false,
                        searchable: false
                    }
                    ],
                    columnDefs: [
                        {
                            "targets": [ 0 ],
                            "visible": false,
                            "searchable": false
                        }                     
                    ]
            });

            // Live search
            $('#liveSearch').keyup(function() {
                var filterValue = $(this).val();
                datatable.columns().search(filterValue).draw();
            });

            // Filter by location
            $('#location_filter').on('change', function() {
                var filterValue = $(this).val();
                datatable.column(7).search(filterValue).draw();
            });

            // Filter by category
            $('#category_filter').on('change', function() {
                var filterValue = $(this).val();
                datatable.column(4).search(filterValue).draw();
            });

            // Filter by group
            $('#group_filter').on('change', function() {
                var filterValue = $(this).val();
                datatable.column(3).search(filterValue).draw();
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