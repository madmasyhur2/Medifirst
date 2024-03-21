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
        </div>

        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="container py-3 my-6">
                    <div class="row">
                        <div class="col-md-9 d-flex align-items-left">
                            <h1 class="mx-0 my-auto">Daftar Membership</h1>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-secondary" style="background-color: #535561; color: white" href="#" role="button">Tambah Membership</a>
                        </div>
                    </div>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->

            <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-12">
                    <!--begin::Input group-->
                    <!--begin::Table-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="py-2 my-auto"><strong>No.</strong></th>
                                <th class="py-2 my-auto"><strong>Nama Membership</strong></th>
                                <th class="py-2 my-auto"><strong>Diskon</strong></th>
                                <th class="py-2 my-auto"><strong>Deskripsi</strong></th>
                                <th class="py-2 my-auto"><strong>Aksi</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $index => $data)
                            <tr>
                                <td class="py-6 my-auto">{{ $index + 1 }}.</td>
                                <td class="py-6 my-auto col-name">{{ $data->name }}</td>
                                <td class="py-6 my-auto col-discount">{{ $data->discount }}</td>
                                <td class="py-6 my-auto col-description">{{ strlen($data->description) > 50 ? substr($data->description, 0, 50) . '...' : $data->description }}</td>
                                <td class="p-auto m-auto">
                                    <div class="d-flex gap-2">
                                        <form action="">
                                            <button class="btn btn-secondary" style="background-color: #3B3B3B;"><i class="fas fa-pencil-alt" style="color: white;"></i></button>
                                        </form>
                                        <form method="POST" action="#">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" id="deleteForm" style="background-color: #DC3545;">
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
@endsection