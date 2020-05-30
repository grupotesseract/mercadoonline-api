<!-- Modal -->
<div class="modal fade" id="modalUploadFoto" tabindex="-1" role="dialog" aria-labelledby="modalUploadFotoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUploadFotoLabel">Tirar foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <video id="player" width=320 height=240 controls autoplay></video>
          <canvas id="snapshot" width=320 height=240 style="display:none;"></canvas>
      </div>
      <div class="modal-footer text-center">
        <button id="cancelar" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a id="capture" class="btn btn-primary text-light" title="Tirar foto" ><i class="fa fa-camera"></i> Tirar foto</a>
        <a id="confirmar" class="btn btn-success text-light" title="Confirmar" style="display:none;" ><i class="fa fa-check"></i> Confirmar</a>

      </div>
    </div>
  </div>
</div>
<script>
  var player = document.getElementById('player');
  var snapshotCanvas = document.getElementById('snapshot');
  var captureButton = document.getElementById('capture');
  var cancelButton = document.getElementById('cancelar');
  var confirmarButton = document.getElementById('confirmar');
  var abrirModalButton = document.getElementById('btn-modal-foto');
  var videoTracks;

  var handleSuccess = function(stream) {
    // Attach the video stream to the video element and autoplay.
    player.srcObject = stream;
    videoTracks = stream.getVideoTracks();
  };

  captureButton.addEventListener('click', function() {
    var context = snapshot.getContext('2d');
    // Draw the video frame to the canvas.
    context.drawImage(player, 0, 0, snapshotCanvas.width,
        snapshotCanvas.height);
    cancelCamera();
    $(player).hide();
    $(captureButton).hide();
    $(snapshotCanvas).show();
    $(confirmarButton).show();
  });

  cancelButton.addEventListener('click', function() {
    cancelCamera();
  });

  confirmarButton.addEventListener('click', function() {
      let imagem = snapshotCanvas.toDataURL('image/png');
      $('#link-foto').val(imagem);
      cancelButton.click();
  });

  var cancelCamera = function() {
      videoTracks.forEach(function(track) {track.stop()});
  }

  abrirModalButton.addEventListener('click', function() {
      navigator.mediaDevices.getUserMedia({video: true})
      .then(handleSuccess);
      $(player).show();
      $(captureButton).show();
      $(snapshotCanvas).hide();
      $(confirmarButton).hide();
  })

</script>
