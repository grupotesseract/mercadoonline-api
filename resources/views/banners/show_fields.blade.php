<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $banner->id }}</p>
</div>

<!-- Link Imagem Field -->
<div class="form-group">
    {!! Form::label('link_imagem', 'Link Imagem:') !!}
    <p>{{ $banner->link_imagem }}</p>
</div>

<!-- Ordem Field -->
<div class="form-group">
    {!! Form::label('ordem', 'Ordem:') !!}
    <p>{{ $banner->ordem }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $banner->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $banner->updated_at }}</p>
</div>

