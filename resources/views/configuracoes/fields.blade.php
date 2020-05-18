<!-- Nome Loja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_loja', 'Nome Loja:') !!}
    {!! Form::text('nome_loja', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Whatsapp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_whatsapp', 'Numero Whatsapp:') !!}
    {!! Form::text('numero_whatsapp', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_logo', 'Link Logo:') !!}
    {!! Form::text('link_logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cor Principal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cor_principal', 'Cor Principal:') !!}
    {!! Form::text('cor_principal', null, ['class' => 'form-control']) !!}
</div>

<!-- Cor Secundaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cor_secundaria', 'Cor Secundaria:') !!}
    {!! Form::text('cor_secundaria', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_facebook', 'Link Facebook:') !!}
    {!! Form::text('link_facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_instagram', 'Link Instagram:') !!}
    {!! Form::text('link_instagram', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_website', 'Link Website:') !!}
    {!! Form::text('link_website', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Rodape Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_rodape', 'Texto Rodape:') !!}
    {!! Form::text('texto_rodape', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
</div>
