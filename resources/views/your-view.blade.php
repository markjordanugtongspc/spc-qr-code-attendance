<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT College Student QR Code Generator</title>
    <link rel="stylesheet" href="https://unpkg.com/unwind-css@1.0.0/dist/unwind.min.css">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>BSIT College Student QR Code Generator</h1>
        </div>
        <div class="qr-code">
            {!! $qrCode !!}
        </div>
        <div class="button-container">
            <button onclick="copyQRCode()" style="margin-bottom: 10px;">Copy QR Code to clipboard</button>
            <br> <!-- Add a line break -->
            <button onclick="goBack()" style="margin-top: 10px;">Back</button>
        </div>
    </div>

    <div class="floating-bulb" onclick="toggleDarkMode()">
        <img src="https://uxwing.com/wp-content/themes/uxwing/download/household-and-furniture/bulb-light-icon.svg" alt="Bulb Icon">
    </div>

    <script>
        function copyQRCode() {
            var qrCodeElement = document.querySelector('.qr-code img'); // Select the img element inside .qr-code
            var qrCodeUrl = qrCodeElement.src; // Get the src attribute which is the URL of the QR code image

            // Create a temporary input to copy the URL
            var tempInput = document.createElement('input');
            tempInput.value = qrCodeUrl;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
        }

        function goBack() {
            window.location.href = document.referrer;
        }

        function toggleDarkMode() {
            var body = document.querySelector('body');
            body.classList.toggle('dark-mode');
            var container = document.querySelector('.container');
            container.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>
