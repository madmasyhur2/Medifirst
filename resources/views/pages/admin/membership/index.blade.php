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
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('admin.masterdata.index') }}">Produk</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('admin.membership.index') }}">Membership</a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--begin::Navs-->
        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::Card-->
    <div class="card mt-12">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6 mb-6 d-flex justify-content-between align-items-center">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Daftar Membership</h3>
            </div>
            <div class="me-0">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#membership_modal_create">Tambah Membership</a>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_membership_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-40px">No.</th>
                        <th class="min-w-125px">Nama Membership</th>
                        <th class="min-w-125px">Diskon(%)</th>
                        <th class="min-w-125px">Deskripsi</th>
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
<!--begin::Modal Create-->
<div class="modal fade" tabindex="-1" id="membership_modal_create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Create Membership</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            {{-- <form action="{{ route('admin.membership.edit', $memberships->id) }}" method="POST">
                @csrf --}}
                <div class="modal-body">
                    <!--begin::Input group-->
                    <label for="name" class="form-label">Nama Membership</label>
                    <div class="input-group mb-5">
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="basic-addon3"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label for="dis" class="form-label">Discount</label>
                    <div class="input-group mb-5">
                        <input type="number" name="cost" class="form-control"/>
                        <span class="input-group-text">%</span>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label for="total_stock" class="form-label">Description (opsional)</label>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Action-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <!--end::Action-->
                </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
<!--end::Modal Create-->

<!--begin::Modal Edit-->
<div class="modal fade" tabindex="-1" id="membership_modal_edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Membership</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            {{-- <form action="{{ route('admin.membership.edit', $memberships->id) }}" method="POST">
                @csrf --}}
                <div class="modal-body">
                    <!--begin::Input group-->
                    <label for="name" class="form-label">Nama Membership</label>
                    <div class="input-group input-group-solid mb-5">
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="basic-addon3" value="{{ $memberships[0]->name }}"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label for="dis" class="form-label">Discount</label>
                    <div class="input-group input-group-solid mb-5">
                        <input type="number" name="cost" class="form-control" value="{{ $memberships[0]->discount }}"/>
                        <span class="input-group-text">%</span>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label for="total_stock" class="form-label">Description (opsional)</label>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea">{{ $memberships[0]->description }}</textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Action-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <!--end::Action-->
                </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
<!--end::Modal Edit-->
@endsection
@push('after-script')
    <script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            var datatable = $('#kt_membership_table').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                dom: "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-4 d-flex align-items-center'li><'col-sm-8'p>>",
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        width: '5%'
                    },
                    {
                        data: 'name',
                        name: 'name',
                        width: '25%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'discount',
                        name: 'discount',
                        width: '10%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'description',
                        name: 'description',
                        width: '45%',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'action',
                        name: 'action',
                        width: '15%',
                        orderable: false,
                        searchable: false
                    }
                    ],
                    columnDefs: [{
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    }],
                    order: [
                        [0, 'desc']
                    ],
            });
            // Delete Confirmation
            $('body').on('click', '#submitForm', function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                var name = $(this).data('membership-name');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    html: "Anda akan menghapus membership<br><span style='font-size: 1.2em;'><strong><span style='color:red'>" + 
                        name + "</span></strong></span><br>dari database?",
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