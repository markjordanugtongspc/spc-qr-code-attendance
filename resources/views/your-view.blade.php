<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT College Student QR Code Generator</title>
    <link rel="stylesheet" href="https://unpkg.com/unwind-css@1.0.0/dist/unwind.min.css">
    <style>
        body{background-color:#f2f2f2;padding:20px;transition:background-color .3s ease}.container{max-width:600px;margin:0 auto;background-color:#fff;padding:20px;box-shadow:0 2px 4px rgba(0,0,0,.1)}.header{text-align:center;margin-bottom:20px}.header h1{color:#333;font-size:28px;margin:0;padding:10px;background-color:#f2f2f2;border-radius:5px}.qr-code{text-align:center;margin-bottom:20px}.button-container{text-align:center;margin-bottom:20px}.button-container button{padding:10px 20px;font-size:16px;background-color:#4CAF50;color:#fff;border:none;border-radius:5px;cursor:pointer;margin-right:10px}.dark-mode{background-color:#333;color:#fff}.floating-bulb{position:fixed;bottom:20px;right:20px;width:40px;height:40px;border-radius:50%;box-shadow:0 2px 4px rgba(0,0,0,.1);cursor:pointer;transition:background-color .3s ease}.floating-bulb img{width:100%;height:100%;object-fit:contain}
    </style>
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
