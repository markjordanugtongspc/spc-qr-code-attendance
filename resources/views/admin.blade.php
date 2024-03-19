<!DOCTYPE html>
<html lang="english">

<head>
  <title>Administrator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" />
  <link rel="stylesheet" href="css/admin_style.css">
  <link rel="stylesheet" href="css/admin_main.css">
  <style>
    .admin-dashboard-text02:hover,
    .admin-dashboard-text04:hover,
    .admin-dashboard-text06:hover,
    .admin-dashboard-text14:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <div class="admin-dashboard-container">
    <div class="admin-dashboard-admin-dashboard">
      <img src="images/side-rectangle.png" class="admin-dashboard-rectangle155" />
      <div class="admin-dashboard-group18">
        <img src="images/email-icon.png" class="admin-dashboard-image5" />
        <img src="images/spc-logo1.png" class="admin-dashboard-spcnremovebgpreview14" />
        <img src="images/spc-logo2.png" class="admin-dashboard-spcnremovebgpreview15" />
        <span class="admin-dashboard-text">
          <span>Admin Dashboard</span>
        </span>
        <img src="images/img-6.png" class="admin-dashboard-image8" />
        <img src="images/rec-ke4i.svg" class="admin-dashboard-rectangle156" />
        <img src="images/rec-37nr.svg" class="admin-dashboard-rectangle157" />
        <img src="images/rec-g7.svg" class="admin-dashboard-rectangle158" />
        <button class="admin-dashboard-button" onclick="window.location.href = '{{ route('student') }}'">
          <a href="{{ route('student') }}" class="admin-dashboard-text02">STUDENTS</a>
        </button>
        <button class="admin-dashboard-button" onclick="window.location.href = '{{ route('instructor') }}'">
          <a href="{{ route('instructor') }}" class="admin-dashboard-text04">INSTRUCTOR</a>
        </button>
        <button class="admin-dashboard-button" onclick="window.location.href = '{{ route('attendancelog') }}'">
          <a class="admin-dashboard-text06">ATTENDANCE LOG</a>
        </button>
        <span class="admin-dashboard-text08">
          <span>spcregistrar@gmail.com</span>
        </span>
        <span class="admin-dashboard-text10">
          <span>(+63) 221-6246</span>
        </span>
        <img src="images/img-y.png" class="admin-dashboard-image6" />
        <span class="admin-dashboard-text12">
          <span>my.spc.edu.ph</span>
        </span>
      </div>
      <div class="admin-dashboard-group17">
        <img src="images/cba.png" class="admin-dashboard-cba1" />
        <img src="images/coc.png" class="admin-dashboard-coc1" />
        <img src="images/cas.png" class="admin-dashboard-cas1" />
        <img src="images/ccs.png" class="admin-dashboard-ccs1" />
        <img src="images/coe.png" class="admin-dashboard-coe1" />
        <img src="images/ced.png" class="admin-dashboard-ced1" />
      </div <img src="images/rec-t6g.svg" class="admin-dashboard-rectangle164" />
      <img src="images/rec-c9kq.svg" class="admin-dashboard-rectangle165" />
      <a href="/logout" class="admin-dashboard-text14">Log out</a>
    </div>
  </div>

  <script></script>
</body>

</html>