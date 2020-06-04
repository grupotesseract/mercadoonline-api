@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fas fa-shopping-cart"></i>
                             Pedidos
                             <a class="pull-right" href="{{ route('pedidos.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body" style="overflow:auto">
                             <div style="overflow:overlay">
                                 @include('pedidos.table')
                             </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

