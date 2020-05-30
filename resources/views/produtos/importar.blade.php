@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('produtos.index') !!}">Importar Produtos</a>
      </li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-spreadsheet fa-lg"></i>
                                <strong>Importar Produtos</strong>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-12 ml-3">

                                    <p><a href="{{route('exemplo-importacao')}}"> Exemplo planilha importação</a></p>

                                    <hr>

                                    {!! Form::open(['route' => 'produtos.importar', 'files' => true]) !!}

                                    {{ Form::file('planilha') }}

                                    <div class="w-100 mt-3">
                                    {!! Form::submit('Importar', ['class' => 'btn btn-primary']) !!}
                                    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
                                    </div>


                                    {!! Form::close() !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
