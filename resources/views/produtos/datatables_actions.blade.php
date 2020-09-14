<div class="dropdown">
  <button class="btn dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-ellipsis-v"></i>
  </button>

  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Item</a>
    <a class="dropdown-item" href="#">Another item</a>
    <a class="dropdown-item" href="#">One more item</a>
  </div>
</div>

{{-- {!! Form::open(['route' => ['produtos.destroy', $id], 'method' => 'delete']) !!}
  <div class="btn-group">
    <a href="{{ route('produtos.show', $id) }}" class="btn btn-ghost-success">
      <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('produtos.edit', $id) }}" class="btn btn-ghost-info">
      <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
      'type' => 'submit',
      'class' => 'btn btn-ghost-danger',
      'onclick' => "return confirm('Você tem certeza?')"
    ]) !!}
  </div>
{!! Form::close() !!} --}}
