@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs tab-transparent" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="owner-tab" data-toggle="tab" href="#owner-content-tab" role="tab"
                                aria-selected="true">Owner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="karyawan-tab" data-toggle="tab" href="#karyawan-content-tab" role="tab"
                                aria-selected="false">Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="apotek-tab" data-toggle="tab" href="#apotek-content-tab" role="tab"
                                aria-selected="false">Apotek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing-content-tab" role="tab"
                                aria-selected="false">Billing</a>
                        </li>
                    </ul>

                    <div class="tab-content tab-transparent-content">
                        <div class="tab-pane fade show active" id="owner-content-tab" role="tabpanel" aria-labelledby="owner-tab">
                            <h4 class="card-title">Akun Owner</h4>
                            <form class="forms-sample">
                                <div class="row mb-3">
                                    <div class="col-lg-2 col-12">
                                        <img src="https://source.unsplash.com/200x200?random" class="img-thumbnail" alt="profile-picture">
                                    </div>

                                    <div class="col-lg-5 col-12">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-12"></div>
                                </div>



                            </form>
                        </div>
                        <div class="tab-pane fade" id="karyawan-content-tab" role="tabpanel" aria-labelledby="karyawan-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus sunt quos laborum. Nihil molestias debitis totam labore
                            delectus impedit consectetur a ea sint! Sit numquam qui, magnam tempore quasi labore!
                        </div>
                        <div class="tab-pane fade" id="apotek-content-tab" role="tabpanel" aria-labelledby="apotek-tab">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugit illo alias eaque excepturi repellat ad, quis ipsa
                            reprehenderit itaque laudantium doloremque nisi blanditiis consequatur voluptatem necessitatibus assumenda? Praesentium,
                            quaerat.
                        </div>
                        <div class="tab-pane fade" id="billing-content-tab" role="tabpanel" aria-labelledby="billing-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime corporis rerum, nulla quo iste, hic eos fugit quod officiis
                            cum quia minus amet, error at facere nostrum. Vitae, incidunt eaque!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
