<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitulo', 'Subtitulo:') !!}
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Preco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco', 'Preco:') !!}
    {!! Form::text('preco', null, ['class' => 'form-control']) !!}
</div>

<!-- Ean Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ean', 'Ean:') !!}
    {!! Form::text('ean', null, ['class' => 'form-control']) !!}
</div>

<!-- Disponivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disponivel', 'Disponivel:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('disponivel', 0) !!}
        {!! Form::checkbox('disponivel', '1', null) !!}
    </label>
</div>


<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Sem Acento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_sem_acento', 'Descricao Sem Acento:') !!}
    {!! Form::text('descricao_sem_acento', null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Ncm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ncm', 'Ncm:') !!}
    {!! Form::text('ncm', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- St Field -->
<div class="form-group col-sm-6">
    {!! Form::label('st', 'St:') !!}
    {!! Form::text('st', null, ['class' => 'form-control']) !!}
</div>

<!-- Cfop Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cfop', 'Cfop:') !!}
    {!! Form::text('cfop', null, ['class' => 'form-control']) !!}
</div>

<!-- Icms Trib Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icms_trib', 'Icms Trib:') !!}
    {!! Form::text('icms_trib', null, ['class' => 'form-control']) !!}
</div>

<!-- Icms Cst Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icms_cst', 'Icms Cst:') !!}
    {!! Form::text('icms_cst', null, ['class' => 'form-control']) !!}
</div>

<!-- Pis Cst Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pis_cst', 'Pis Cst:') !!}
    {!! Form::text('pis_cst', null, ['class' => 'form-control']) !!}
</div>

<!-- Cofins Cst Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cofins_cst', 'Cofins Cst:') !!}
    {!! Form::text('cofins_cst', null, ['class' => 'form-control']) !!}
</div>

<!-- Cest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cest', 'Cest:') !!}
    {!! Form::text('cest', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
