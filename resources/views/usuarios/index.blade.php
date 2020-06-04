@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-users"></i>
                        Usuários

                        <a class="pull-right" href="{!! route('usuarios.create') !!}">
                            <i class="fa fa-plus-square fa-lg"></i>
                        </a>
                    </div>

                    <div class="card-body" style="overflow:auto">
                        <div style="overflow:overlay">
                            @include('usuarios.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
