
const video = document.getElementById('camera-preview');
const qrCodeInput = document.getElementById('qr-code-input');
const output = document.getElementById('output');

if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({
      video: true
    })
    .then(function(stream) {
      video.srcObject = stream;
      video.play();
      const qrCodeScanner = new Html5Qrcode('camera-preview');

      const onScanSuccess = (qrCodeMessage) => {
        console.log('Scanned QR code:', qrCodeMessage);
        alert('QR code successfully scanned!');
        output.innerHTML += `<p>${qrCodeMessage}</p>`;
        output.style.display = 'block';
      };

      qrCodeScanner.start({
        facingMode: 'environment'
      }, {
        fps: 10
      }, onScanSuccess)
    })
    .catch(function(error) {
      console.error('Error accessing the camera:', error);
    });
} else {
  console.error('getUserMedia is not supported by this browser.');
}

qrCodeInput.addEventListener('change', function() {
  const file = this.files[0];
  const reader = new FileReader();

  reader.onload = function() {
    const qrCodeImage = reader.result;
    qrCodeScanner.scanImage(qrCodeImage);
  }

  reader.readAsDataURL(file);
});
