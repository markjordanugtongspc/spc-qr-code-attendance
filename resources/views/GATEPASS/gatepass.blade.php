<!DOCTYPE html>
<html lang="english">

<head>
  <title>Gatepass</title>
  <link rel="icon" type="image/x-icon" href="/images/spc-logo.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/html5-qrcode"></script>

  <!-- Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf8" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Styles -->
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
  <link rel="stylesheet" href="css/gatepass/gatepass.css" />
</head>

<body>
  <div>
    <a>
      <img src="/images/spc-logo.png" alt="SPC Logo" class="spc-logo" />
    </a>
    <h1>Gatepass Scanner</h1>
    <div class="student-info-container container">
      <h2 class="student-info-heading">Gate Pass ID</h2>
      <hr class="student-info-line" />
      <div id="output-container" class="output-container">
        <!-- The QR code scan result will be displayed here -->
        <p id="qr-code-result" class="qr-code-result"></p>
        <!-- File input for QR code image upload -->
        <input type="file" id="qr-code-files" accept="image/*" class="qr-code-file-input">
      </div>
    </div>
    <video id="camera-preview"></video>
    <div id="output"></div>
    <!-- Include the html5-qrcode library -->
    <script src="https://unpkg.com/html5-qrcode"></script>
    <!-- Include your custom JavaScript file -->
    <script src="js/gatepass/gatepass.js"></script>
  </div>
</body>

</html>