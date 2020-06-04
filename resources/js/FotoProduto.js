var player = document.getElementById('player');
var snapshotCanvas = document.getElementById('snapshot');
var captureButton = document.getElementById('capture');
var cancelButton = document.getElementById('cancelar');
var confirmarButton = document.getElementById('confirmar');
var abrirModalButton = document.getElementById('btn-modal-foto');
var selectCamera = document.getElementById('select-camera');
var currentStream;

function gotDevices(mediaDevices) {
  selectCamera.innerHTML = '';
  selectCamera.appendChild(document.createElement('option'));
  let count = 1;
  mediaDevices.forEach(mediaDevice => {
    if (mediaDevice.kind === 'videoinput') {
      const option = document.createElement('option');
      option.value = mediaDevice.deviceId;
      const label = mediaDevice.label || `Camera ${count++}`;
      const textNode = document.createTextNode(label);
      option.appendChild(textNode);
      selectCamera.appendChild(option);
    }
  });
}

abrirModalButton.addEventListener('click', function() {
  atualizaCamera();
})

selectCamera.addEventListener('change', function() {
  cancelCamera();
  atualizaCamera();
})

function atualizaCamera() {
  if (typeof currentStream !== 'undefined') {
    cancelCamera();
  }
  const videoConstraints = {};
  if (selectCamera.value === '') {
    videoConstraints.facingMode = 'environment';
  } else {
    videoConstraints.deviceId = { exact: selectCamera.value };
  }
  const constraints = {
    video: videoConstraints,
    audio: false
  };

  navigator.mediaDevices
  .getUserMedia(constraints)
  .then(stream => {
    currentStream = stream;
    player.srcObject = stream;
    return navigator.mediaDevices.enumerateDevices();
  })
  .then(gotDevices)
  .catch(error => {
    console.error(error);
  });

  $(player).show();
  $(captureButton).show();
  $(snapshotCanvas).hide();
  $(confirmarButton).hide();
}

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
  currentStream.getTracks().forEach(function(track) {track.stop()});
}

navigator.mediaDevices.enumerateDevices().then(gotDevices);

