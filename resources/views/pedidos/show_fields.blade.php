<div class="row">

    <!-- Nome Cliente Field -->
    <div class="col-lg-4">
        {!! Form::label('nome_cliente', 'Nome Cliente:') !!}
        <p>{{ $pedido->nome_cliente }}</p>
    </div>

    <!-- Celular Field -->
    <div class="col-lg-4">
        {!! Form::label('celular', 'Celular:') !!}
        <p>{{ $pedido->celular }}</p>
    </div>

    <!-- Endereco Field -->
    <div class="col-lg-4">
        {!! Form::label('endereco', 'Endereco:') !!}
        <p>{{ $pedido->endereco }}</p>
    </div>

    <!-- Created At Field -->
    <div class="col-lg-4">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{{ $pedido->created_at }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="col-lg-4">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{{ $pedido->updated_at }}</p>
    </div>

</div>
