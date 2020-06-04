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
      <div class="modal-body text-center">
          <video id="player" width=320 height=240 controls autoplay></video>
          <canvas id="snapshot" width=320 height=240 style="display:none;"></canvas>
          <br>
          <strong>Câmera:</strong>
          {{Form::select('camera_devices', [],0, ['id' => 'select-camera'])}}
      </div>
      <div class="modal-footer text-center">
        <button id="cancelar" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a id="capture" class="btn btn-primary text-light" title="Tirar foto" ><i class="fa fa-camera"></i> Tirar foto</a>
        <a id="confirmar" class="btn btn-success text-light" title="Confirmar" style="display:none;" ><i class="fa fa-check"></i> Confirmar</a>

      </div>
    </div>
  </div>
</div>

<script src="/js/FotoProduto.js"></script>
