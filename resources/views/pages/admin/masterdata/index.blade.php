@extends('layouts.admin')

@push('after-script')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
@endpush

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-0 pb-0">
                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="masterdata/product">Produk</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="masterdata/membership">Membership</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
    </div>

    <div class="container py-3">
        <div class="row">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col"><strong>No</strong></th>
                        <th scope="col"><strong>Nama Produk</strong></th>
                        <th scope="col"><strong>Kode SKU</strong></th>
                        <th scope="col"><strong>Varian</strong></th>
                        <th scope="col"><strong>Golongan</strong></th>
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

@endsection

@push('after-script')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('backend/js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset('backend/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('backend/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset('backend/js/custom/pages/user-profile/general.js') }}"></script>
    <script src="{{ asset('backend/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('backend/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/two-factor-authentication.js') }}"></script>
    <script src="{{ asset('backend/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! url()->current() !!}',
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
                        serchable: true
                    },
                    {
                        data: 'sku_code',
                        name: 'sku_code',
                        width: '20%',
                        orderable: true,
                        serchable: true
                    },
                    {
                        data: 'variant',
                        name: 'variant',
                        width: '10%',
                        orderable: true,
                        serchable: true
                    },
                    {
                        data: 'group',
                        name: 'group',
                        width: '10%',
                        orderable: true,
                        serchable: true
                    },
                    {
                        data: 'stock',
                        name: 'stock',
                        width: '10%',
                        orderable: true,
                        serchable: true
                    },
                    {
                        data: 'selling_price',
                        name: 'selling_price',
                        width: '10%',
                        orderable: true,
                        serchable: true
                    },
                    {
                        data: 'location',
                        name: 'location',
                        width: '15%',
                        orderable: true,
                        serchable: true
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at',
                        width: '20%',
                        orderable: true,
                        serchable: true
                    },
                    {
                        data: 'action',
                        name: 'action',
                        width: '5%',
                        orderable: false,
                        serchable: false
                    }
                ],
                columnDefs: [
                    {
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    }                     
                ],
                order: [[ 0, "desc" ]]
            });
        });
    </script>
@endpush
