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
                             <i class="fa fa-cubes"></i>
                             Produtos

                             <div class="pull-right">

                                 <a title="Adicionar Produto" class="mr-3" href="{{ route('produtos.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                                 <a title="Importar Produtos"  href="{{route('importar-produtos')}}"><i class="fa fa-upload fa-lg"></i></a>
                             </div>
                         </div>
                         <div class="card-body" style="overflow: auto;">

                             {{--
                                 FILTRO POR DISPONIBILIDADE

                             <hr>
                             <div class="form-group">
                             {!! Form::open(['route' => 'produtos.index', 'method'=>'get']) !!}

                                {!! Form::select('disponivel', [
                                    'Todos' => 'Todos',
                                    0 => 'Não disponiveis',
                                    1 => 'Disponiveis'
                                ], \Request::get('disponivel', null), ['class' => 'select2']) !!}


                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-filter"></i>
                                </button>
                                {!! Form::close() !!}
                             </div>
                             --}}
                             <div style="overflow:overlay">
                                 @include('produtos.table')
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
