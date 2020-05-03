@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Produtos</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Produtos

                             <div class="pull-right">

                                 <a title="Adicionar Produto" class="mr-3" href="{{ route('produtos.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                                 <a title="Importar Produtos"  href="{{route('importar-produtos')}}"><i class="fa fa-upload fa-lg"></i></a>
                             </div>
                         </div>
                         <div class="card-body">
                             @include('produtos.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection


@section('scripts')

@endsection
