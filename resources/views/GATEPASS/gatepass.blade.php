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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&amp;display=swap" data-tag="font" />
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
      <div class="student-info-svg-container">
        <img src="/images/gatepass/vector2221-2hxt.svg" alt="Student Info" class="student-info-svg" />
      </div>
      <p class="scan-here-text">Scanner Here</p>
      <p class="scan-first-text">Scan First</p>
    </div>
    <video id="camera-preview"></video>

    <input type="file" id="qr-code-input" accept="image/png, image/jpeg" />

    <div id="output"></div>

    <script src="js/gatepass/gatepass.js"></script>
    <script>
      const modal = document.createElement('div');
      modal.classList.add('modal');

      const modalContent = document.createElement('div');
      modalContent.classList.add('modal-content');

      const modalHeader = document.createElement('div');
      modalHeader.classList.add('modal-header');

      const modalTitle = document.createElement('h2');
      modalTitle.classList.add('modal-title');
      modalTitle.textContent = 'Where do you want to go?';

      const modalBody = document.createElement('div');
      modalBody.classList.add('modal-body');

      const adminButton = document.createElement('button');
      adminButton.classList.add('btn', 'btn-primary');
      adminButton.textContent = 'Admin';

      const loginButton = document.createElement('button');
      loginButton.classList.add('btn', 'btn-secondary');
      loginButton.textContent = 'Login';

      modalBody.appendChild(adminButton);
      modalBody.appendChild(loginButton);

      modalContent.appendChild(modalHeader);
      modalContent.appendChild(modalTitle);
      modalContent.appendChild(modalBody);

      modal.appendChild(modalContent);

      document.body.appendChild(modal);

      const spcLogo = document.querySelector('.spc-logo');
      spcLogo.addEventListener('click', () => {
        modal.style.display = 'block';

        adminButton.addEventListener('click', () => {
          window.location.href = "{{ route('admin') }}";
        });

        loginButton.addEventListener('click', () => {
          window.location.href = "{{ route('login') }}";
        });
      });
    </script>

</body>

</html>