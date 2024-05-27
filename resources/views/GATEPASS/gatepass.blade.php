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
  <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <!-- Styles -->
  <link rel="stylesheet" href="css/gatepass/gatepass.css" />
</head>

<body>
  <div class="d-flex flex-column gap-5">
    <div>
      <h1 class="p-0 m-0 text-star">Gatepass Scanner</h1>
    </div>
    <div class=" p-1" style="margin-left: 205px;margin-top:100px;"> <!-- Adjust camera -->
      <!-- Camera Qrcode Scanner  -->
      <video id="preview" class="w-[600px] h-auto"></video>
      <form action="{{ route('scan')}}" method="POST" id="form">
        @csrf
        <input type="hidden" name="id_student" id="id_student">
      </form>
    </div>
    @if (session()->has('error'))
    <div class="">{{ session('error') }}</div>
    @endif
    @if (session()->has('success'))
    <div class="">{{ session('success') }}</div>
    @endif
  </div>
  <!--End Camera Qrcode Scanner  -->
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
        <h2 id="text" class="student-info-heading">Gate Pass ID</h2>
        <hr class="student-info-line" />
        <input type="file" id="qr-code-files" accept="image/*" class="form-control mb-3">
        <div id="output-container" class="output-container">
          <p id="qr-code-result" class="qr-code-result"></p>
          <div id="profile-container" class="profile-container"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    let scanner = new Instascan.Scanner({
      video: document.getElementById('preview')
    });
    scanner.addListener('scan', function(c) {
      document.getElementById('text').value = c;
      document.getElementById('id_student').value = c;
      document.getElementById('form').submit();
    });
    Instascan.Camera.getCameras().then(function(cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function(e) {
      console.error(e);
    });
  </script>
</body>

</html>