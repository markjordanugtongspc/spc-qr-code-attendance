// This code is provided by ChatGPT
const video = document.getElementById('camera-preview');
const qrCodeFileInput = document.getElementById('qr-code-files');
const qrCodeResult = document.getElementById('qr-code-result');
let qrCodeCameraScanner;
let qrCodeFileScanner;

// Function to handle successful QR code scans
const onScanSuccess = (qrCodeMessage) => {
  console.log('Scanned QR code:', qrCodeMessage);
  qrCodeResult.textContent = qrCodeMessage;
};

// Initialize the QR code scanner for the camera
const initializeCameraScanner = () => {
  qrCodeCameraScanner = new Html5QrcodeScanner(
    'camera-preview',
    {
      fps: 10,
      qrbox: 250
    },
    /* verbose= */ false
  );
  qrCodeCameraScanner.render((qrCodeMessage) => {
    onScanSuccess(qrCodeMessage);
    qrCodeCameraScanner.clear(); // Clear the scanner after a successful scan
  });
};

// Initialize the QR code scanner for file uploads
const initializeFileScanner = () => {
  qrCodeFileScanner = new Html5Qrcode('qr-code-result');
};

// Function to handle file upload and scanning
qrCodeFileInput.addEventListener('change', (e) => {
  if (e.target.files.length === 0) {
    return;
  }
  const file = e.target.files[0];
  qrCodeFileScanner.scanFile(file, true)
    .then(onScanSuccess)
    .catch((error) => {
      console.error('Error scanning file:', error);
      alert('Error scanning file.');
    });
});

// Initialize the camera scanner when the page loads
window.addEventListener('load', () => {
  // Get access to the camera and start the camera scanner
  if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
      .then(function(stream) {
        video.srcObject = stream;
        video.play();
        console.log('Camera access successful');
        initializeCameraScanner();
      })
      .catch(function(error) {
        console.error('Error accessing the camera:', error);
      });
  } else {
    console.error('getUserMedia is not supported by this browser.');
  }
});

// Start the file scanner
initializeFileScanner();
