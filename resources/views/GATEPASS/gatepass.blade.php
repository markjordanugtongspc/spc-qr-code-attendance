<!DOCTYPE html>
<html lang="english">

<head>
  <title>Gatepass</title>
  <link rel="icon" type="image/x-icon" href="/images/spc-logo.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

  <!-- Metas -->
  <meta charset="utf8" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Styles -->
  <link rel="stylesheet" href="css/gatepass/gatepass.css" />
</head>

<body>
  <div class="d-flex flex-column gap-5">
    <div>
      <h1 class="p-0 m-0 text-star">Gatepass Scanner</h1>
    </div>
    <div class=" p-1" style="margin-left: 205px;margin-top:100px;"> <!-- Adjust camera -->
      <div id="qr-reader" class="m-0 p-0"></div>
    </div>
    <div>
      <a class="">
        <img src="/images/spc-logo.png" alt="SPC Logo" class="spc-logo" />
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="student-info-container">
        <h2 class="student-info-heading">Gate Pass ID</h2>
        <hr class="student-info-line" />
        <input type="file" id="qr-code-files" accept="image/*" class="form-control mb-3">
        <div id="output-container" class="output-container">
          <p id="qr-code-result" class="qr-code-result"></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="js/gatepass/gatepass.js"></script>
</body>

</html>