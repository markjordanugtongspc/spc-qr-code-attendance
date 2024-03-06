<!DOCTYPE html>
<html lang="english">
<head>
  <title>Administrator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" />
  <link rel="stylesheet" href="css/admin_style.css">
  <link rel="stylesheet" href="css/admin_main.css">
</head>
<body>
  <div class="admin-dashboard-container">
    <div class="admin-dashboard-admin-dashboard">
      <img alt="Rectangle1553792" src="images/rectangle1553792-c9zi-1100h.png" class="admin-dashboard-rectangle155" />
      <div class="admin-dashboard-group18">
        <img alt="image54619" src="images/image54619-jbyf-200h.png" class="admin-dashboard-image5" />
        <img alt="spcnremovebgpreview143792" src="images/spcnremovebgpreview143792-3xcm-200h.png" class="admin-dashboard-spcnremovebgpreview14" />
        <img alt="spcnremovebgpreview154828" src="images/spcnremovebgpreview154828-1nsl-800h.png" class="admin-dashboard-spcnremovebgpreview15" />
        <span class="admin-dashboard-text">
          <span>Admin Dashboard</span>
        </span>
        <img alt="image84619" src="images/image84619-6xw-200h.png" class="admin-dashboard-image8" />
        <img alt="Rectangle1564619" src="images/rectangle1564619-ke4i.svg" class="admin-dashboard-rectangle156" />
        <img alt="Rectangle1574619" src="images/rectangle1574619-37nr.svg" class="admin-dashboard-rectangle157" />
        <img alt="Rectangle1584619" src="images/rectangle1584619-g7.svg" class="admin-dashboard-rectangle158" />
        <button class="admin-dashboard-button" onclick="window.location.href = '{{ route('student') }}'">
          <a href="students_admin.blade.php" class="admin-dashboard-text02">STUDENTS</a>
        </button>
        <button class="admin-dashboard-button" onclick="window.location.href = '{{ route('instructor') }}'">
          <a href="{{ route('instructor') }}" class="admin-dashboard-text04">INSTRUCTOR</a>
        </button>
        <button class="admin-dashboard-button" onclick="window.location.href = '{{ route('attendance_log') }}'">
          <a href="attendance_log.blade.php" class="admin-dashboard-text06">ATTENDANCE LOG</a>
        </button>
        <span class="admin-dashboard-text08">
          <span>spcregistrar@gmail.com</span>
        </span>
        <span class="admin-dashboard-text10">
          <span>(+63) 221-6246</span>
        </span>
        <img alt="image64619" src="images/image64619-yyc-200h.png" class="admin-dashboard-image6" />
        <span class="admin-dashboard-text12">
          <span>my.spc.edu.ph</span>
        </span>
      </div>
      <div class="admin-dashboard-group17">
        <img alt="cba11806" src="images/cba11806-5q7m-200h.png" class="admin-dashboard-cba1" />
        <img alt="coc11806" src="images/coc11806-0gp5-200h.png" class="admin-dashboard-coc1" />
        <img alt="cas11806" src="images/cas11806-f0bi-200w.png" class="admin-dashboard-cas1" />
        <img alt="ccs11806" src="images/ccs11806-stk-200h.png" class="admin-dashboard-ccs1" />
        <img alt="coe11806" src="images/coe11806-f82l-200h.png" class="admin-dashboard-coe1" />
        <img alt="ced11806" src="images/ced11806-h9hn-200w.png" class="admin-dashboard-ced1" />
      </div>
      <img alt="Rectangle1634828" src="images/rectangle1634828-15jt.svg" class="admin-dashboard-rectangle163" />
      <img alt="Rectangle1644828" src="images/rectangle1644828-t6g.svg" class="admin-dashboard-rectangle164" />
      <img alt="Rectangle1654828" src="images/rectangle1654828-c9kq.svg" class="admin-dashboard-rectangle165" />
      <a href="/logout" class="admin-dashboard-text14">Log out</a>
      <img alt="Rectangle1604828" src="images/rectangle1604828-y2aa.svg" class="admin-dashboard-rectangle160" />
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const buttons = document.querySelectorAll('button');

      buttons.forEach(button => {
        button.addEventListener('mousedown', function() {
          button.classList.add('button-click-active');
        });

        button.addEventListener('mouseup', function() {
          setTimeout(() => {
            button.classList.remove('button-click-active');
          }, 200);
        });
      });
    });

    // Dark Mode Toggle Script
    function toggleDarkLightMode() {
      var body = document.body;
      body.classList.toggle('dark-mode');

      var themeIcon = document.getElementById('theme-toggle-icon');
      if (body.classList.contains('dark-mode')) {
        themeIcon.innerHTML = '☀️';
      } else {
        themeIcon.innerHTML = '🌙';
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      var themeToggleBtn = document.createElement('button');
      themeToggleBtn.id = 'theme-toggle-btn';
      themeToggleBtn.innerHTML = '<span id="theme-toggle-icon">🌙</span>';
      themeToggleBtn.onclick = toggleDarkLightMode;
      document.body.appendChild(themeToggleBtn);
    });
  </script>
</body>
</html>
