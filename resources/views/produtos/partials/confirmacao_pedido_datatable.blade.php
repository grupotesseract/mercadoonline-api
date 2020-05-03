@if ($confirmado)

    {!! Form::open(['route' => ['produtos_pedido.update', $id], 'method' => 'patch' , 'class' => 'confirmacao']) !!}
<div class='btn-group'>
    {!!  Form::hidden('confirmado', 0) !!}
    {!! Form::button('<i class="fa fa-remove"></i>', [
        'type' => 'submit',
        'title' => 'Desconfirmar item?',
        'class' => 'btn btn-ghost-danger'
    ]) !!}
</div>
{!! Form::close() !!}

@else

{!! Form::open(['route' => ['produtos_pedido.update', $id], 'method' => 'patch' , 'class' => 'confirmacao']) !!}
<div class='btn-group'>
    {!!  Form::hidden('confirmado', true) !!}
    {!! Form::button('<i class="fa fa-check"></i>', [
        'type' => 'submit',
        'title' => 'Confirmar item?',
        'class' => 'btn btn-ghost-success'
    ]) !!}
</div>
{!! Form::close() !!}

@endif
