@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('pedidos.index') }}">Pedido</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 @include('flash::message')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalhes do pedido #{{$pedido->id}}</strong>
                                  <a href="{{ route('pedidos.index') }}" class="btn btn-light">Voltar</a>
                             </div>
                             <div class="card-body">
                                 @include('pedidos.show_fields')
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Produtos do pedido</strong>
                             </div>
                             <div class="card-body">
                                 <div class="row">
                                 <div class="col-lg-6">
                                     <p><strong>Mensagem confirmação</strong></p>
                                     {{Form::textarea('mensagem_confirmacao', $pedido->mensagemConfirmacao, ['id' => 'msg-confirmacao'])}}
                                 </div>
                                 <div class="col-lg-6">
                                     <p><strong>Mensagem itens faltando</strong></p>
                                     {{Form::textarea('mensagem_faltando', $pedido->mensagemFaltando, ['id' => 'msg-faltando'])}}
                                 </div>
                                 </div>
                                 <hr>
                                 <p class=""> <strong>Total: R$ <span id="total">{{$pedido->total}}</span></strong> </p>
                                 <hr>
                                 @include('produtos.table')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
