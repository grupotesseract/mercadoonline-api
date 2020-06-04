@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Banners</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Banners
                             <a class="pull-right" href="{{ route('banners.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body" style="overflow:auto">
                             <div style="overflow:overlay">
                                 @include('banners.table')
                             </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

