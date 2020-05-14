@extends('layouts.app')

@section('content')
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('flash::message')
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-cogs fa-lg"></i>
                              <strong>Configurações da loja</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($configuracao, ['route' => ['configuracoes.update', $configuracao->id], 'method' => 'patch']) !!}

                              @include('configuracoes.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
