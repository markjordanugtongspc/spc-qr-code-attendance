<!-- Uses customize css (tailwind) then uses images/link for icons -->
<!DOCTYPE html>
<html lang="english">

<head>
  <title>Gatepass</title>
  <link rel="icon" type="image/x-icon" href="/images/spc-logo.ico">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/html5-qrcode"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <!-- Styles -->
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body>
  <div>
    <link rel="stylesheet" href="css/gatepass.css" />
    <div class="gate-pass-container">
      <div class="gate-pass-gate-pass">
        <div class="gate-pass-camera-box">
          <video id="camera-preview"></video>
        </div>
        <!-- <img src="images/gatepass/pic.png" class="gate-pass-rectangle73" /> -->
        <div class="gate-pass-rectangle11">
          <img src="images/gatepass/box3.png" class="gate-pass-rectangle72" />
          <img src="images/gatepass/vector2221-2hxt.svg" class="gate-pass-vector" />
          <span class="gate-pass-text1"><span>Student Info</span></span>
          <span class="gate-pass-text3"><span>Scan First</span></span>
          <img src="images/gatepass/line204101-l1k.svg" class="gate-pass-line20" />
          <span class="gate-pass-text7"><span>Scan First</span></span>
        </div>
        <span class="gate-pass-text">Gatepass Scanner</span>

        <a href="{{ route('admin') }}">
          <img src="images/gatepass/SPClogo.png" class="gate-pass-spclogo4 cursor-pointer mt-0.25rem" />
        </a>
      </div>
    </div>
  </div>

  <script>
    const video = document.getElementById('camera-preview');

    // Check if the browser supports getUserMedia
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
      // Request permission to use the camera
      navigator.mediaDevices.getUserMedia({
          video: true
        })
        .then(function(stream) {
          // Set the video source to the camera stream
          video.srcObject = stream;
          video.play();

          // Create a new instance of the QR code scanner
          const qrCodeScanner = new Html5Qrcode('camera-preview');

          // Define the callback function to handle the scanned QR code
          const onScanSuccess = (qrCodeMessage) => {
            // Handle the scanned QR code message
            console.log('Scanned QR code:', qrCodeMessage);
            // You can perform further processing with the scanned QR code here
          };

          // Start scanning for QR codes
          qrCodeScanner.start({
              facingMode: 'environment'
            }, {
              fps: 10
            }, onScanSuccess)
            .catch(function(error) {
              console.error('Error scanning QR code:', error);
            });
        })
        .catch(function(error) {
          console.error('Error accessing the camera:', error);
        });
    } else {
      console.error('getUserMedia is not supported by this browser.');
    }
  </script>
</body>

</html>