<div class="row">
<div class="col-sm-6">

<div class="form-group col-sm-12">
    {!! Form::label('foto', 'Foto:') !!} <br>

    <div class="w-75 pull-left">
        {!! Form::text('foto', null, ['class' => 'form-control', 'title' => 'Inserir link', 'placeholder' => 'Link para a foto do produto', 'id' => 'link-foto']) !!}
    </div>

    <div class="w-25 pull-right">
        <a class="btn btn-small btn-primary text-light" data-toggle="modal" data-target="#modalUploadFoto">
            <i class="fa fa-camera"></i>
        </a>
    </div>
</div>


<!-- Titulo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('subtitulo', 'Subtitulo:') !!}
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Preco Field -->
<div class="form-group col-sm-12">
    {!! Form::label('preco', 'Preco:') !!}
    {!! Form::text('preco', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->


<!-- Disponivel Field -->
<div class="form-group col-sm-12">
    {!! Form::label('disponivel', 'Disponivel:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('disponivel', 0) !!}
        {!! Form::checkbox('disponivel', '1', null) !!}
    </label>
</div>
</div>

<div class="col-sm-6">

    <!-- Marca Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('marca', 'Marca:') !!}
        {!! Form::text('marca', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Ean Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('ean', 'Ean:') !!}
        {!! Form::text('ean', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Ncm Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('ncm', 'Ncm:') !!}
        {!! Form::text('ncm', null, ['class' => 'form-control']) !!}
    </div>

    <!-- St Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('st', 'St:') !!}
        {!! Form::text('st', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Cfop Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('cfop', 'Cfop:') !!}
        {!! Form::text('cfop', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Icms Trib Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('icms_trib', 'Icms Trib:') !!}
        {!! Form::text('icms_trib', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Icms Cst Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('icms_cst', 'Icms Cst:') !!}
        {!! Form::text('icms_cst', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Pis Cst Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('pis_cst', 'Pis Cst:') !!}
        {!! Form::text('pis_cst', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Cofins Cst Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('cofins_cst', 'Cofins Cst:') !!}
        {!! Form::text('cofins_cst', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Cest Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('cest', 'Cest:') !!}
        {!! Form::text('cest', null, ['class' => 'form-control']) !!}
    </div>
</div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancel</a>
</div>

@include('produtos.partials.modal_foto')
