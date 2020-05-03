{!! Form::open(['route' => ['produtos.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('produtos.show', $id) }}" class='btn btn-ghost-success'>
       <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('produtos.edit', $id) }}" class='btn btn-ghost-info'>
       <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-ghost-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}

@if ($disponivel)

    {!! Form::open(['route' => ['produtos.disponibilidade', $id], 'method' => 'patch', 'class' => 'disponibilidade']) !!}
<div class='btn-group'>
    {!!  Form::hidden('disponivel', 0) !!}
    {!! Form::button('<i class="fa fa-remove"></i>', [
        'type' => 'submit',
        'title' => 'Marcar como indisponivel?',
        'class' => 'btn btn-ghost-danger'
    ]) !!}
</div>
{!! Form::close() !!}

@else

{!! Form::open(['route' => ['produtos.disponibilidade', $id], 'method' => 'patch', 'class' => 'disponibilidade']) !!}
<div class='btn-group'>
    {!!  Form::hidden('disponivel', true) !!}
    {!! Form::button('<i class="fa fa-check"></i>', [
        'type' => 'submit',
        'title' => 'Marcar como disponivel?',
        'class' => 'btn btn-ghost-success'
    ]) !!}
</div>
{!! Form::close() !!}

@endif
