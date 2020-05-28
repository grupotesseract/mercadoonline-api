<div class="row">
<div class="col-sm-6">

<div class="form-group col-sm-12">
    {!! Form::label('foto', 'Foto:') !!} <br>

    <video id="player" controls autoplay style="max-width:100%; display:none" video></video>

    <div>
        {!! Form::text('foto', null, ['class' => 'w-75']) !!}
        <button id="capture" class="btn-primary"><i class="fa fa-camera"></i></button>
    </div>

    <script>
        var player = document.getElementById('player');
        var captureButton = document.getElementById('capture');
        var videoTracks;

        var handleSuccess = function(stream) {
            // Attach the video stream to the video element and autoplay.
            player.srcObject = stream;
            videoTracks = stream.getVideoTracks();
        };

        captureButton.addEventListener('click', function() {
            var context = snapshot.getContext('2d');
            context.drawImage(player, 0, 0, snapshotCanvas.width, snapshotCanvas.height);

            // Stop all video streams.
            videoTracks.forEach(function(track) {track.stop()});
        });

        navigator.mediaDevices.getUserMedia({video: true})
        .then(handleSuccess);
    </script>

    {!! Form::hidden('foto', null, ['class' => 'form-control']) !!}
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

