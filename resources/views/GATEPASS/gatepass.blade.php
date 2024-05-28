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
    <div class=" p-1">

      <!-- Camera Qrcode Scanner  -->
      <div class="row align-items-center">
        <div class="col-md-10">
          <video id="preview" class="w-150 h-auto" style="width: 420px; height: 300px; margin-left: auto; margin-right: auto;"></video>
        </div>
      </div>

      <form action="{{ route('scan')}}" method="POST" id="form">
        @csrf
        <input type="hidden" name="id_student" id="id_student">
      </form>
    </div>
    <!-- @if (session()->has('error'))
    <div class="">{{ session('error') }}</div>
    @endif -->
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
        <div id="output-container" class="output-container">
          <div class="row justify-content-center">
            @if(session('profilePicturePath'))
            <div class="card mb-3 mx-auto" style="max-width: 85mm;">
              <img src="{{ session('profilePicturePath') }}" class="card-img-top" alt="Student Profile Picture">
              <div class="card-body text-center">
                @if(session('studentName'))
                <h5 class="card-title">{{ session('studentName') }}</h5>
                @else
                <h5 class="card-title">Student Information</h5>
                @endif
                <!-- Additional student information can go here -->
              </div>

            </div>
            @endif
          </div>

          <div class="row justify-content-center">
            @if(session('success'))
            <div class="alert alert-success shadow-sm text-center" role="alert">
              {{ session('success') }}
            </div>
            @endif
          </div>
        </div>


        @if(session('enrollmentStatus'))
        <div class="text-center">
          <div class="enrollment-status">
            @if(session('enrollmentStatus') === 'Enrolled')
            <span class="text-success font-weight-bold">{{ session('enrollmentStatus') }}</span>
            @else
            <span class="text-danger font-weight-bold">{{ session('enrollmentStatus') }}</span>
            @endif
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  </div>
  <script src="js/gatepass/gatepass.js"></script>
</body>

</html>