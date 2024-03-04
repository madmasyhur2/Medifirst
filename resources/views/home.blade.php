@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @role('owner')
                            {{ __('You are logged in, as an owner!') }}
                        @endrole

                        @role('warehouse')
                            {{ __('You are logged in, as an warehouse!') }}
                        @endrole

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
