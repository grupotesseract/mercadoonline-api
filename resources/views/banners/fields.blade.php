<!-- Link Imagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_imagem', 'Link Imagem:') !!}
    {!! Form::text('link_imagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Ordem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ordem', 'Ordem:') !!}
    {!! Form::text('ordem', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('banners.index') }}" class="btn btn-secondary">Cancel</a>
</div>
