@if ($disponivel)
  {!! Form::open(['route' => ['produtos.disponibilidade', $id], 'method' => 'patch', 'class' => 'disponibilidade']) !!}
    {{-- {!! Form::hidden('disponivel', true) !!}
    {!! Form::button('<i class="fa fa-check"></i>', [
      'type' => 'submit',
      'title' => 'Marcar como disponivel?',
      'class' => 'btn btn-ghost-success'
    ]) !!} --}}
    <label class="switch switch-pill switch-success">
      <input type="checkbox" class="switch-input" checked />
      <span class="switch-slider"></span>
    </label>
  {!! Form::close() !!}

@else

  {!! Form::open(['route' => ['produtos.disponibilidade', $id], 'method' => 'patch', 'class' => 'disponibilidade']) !!}
    {{-- {!! Form::hidden('disponivel', 0) !!}
    {!! Form::button('<i class="fa fa-remove"></i>', [
      'type' => 'submit',
      'title' => 'Marcar como indisponivel?',
      'class' => 'btn btn-ghost-danger'
    ]) !!} --}}
    <label class="switch switch-pill switch-success">
      <input type="checkbox" class="switch-input" />
      <span class="switch-slider"></span>
    </label>
  {!! Form::close() !!}
@endif
