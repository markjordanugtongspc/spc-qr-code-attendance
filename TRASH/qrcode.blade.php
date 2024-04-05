<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
.qr-reader-container {
    display: flex;
    justify-content: flex-start; /* Aligns children to the left */
    align-items: center; /* Centers children vertically, adjust as needed */
}

.qr-reader-results {
    flex: 1; /* Take remaining space */
    margin-left: 16px; /* Add some space between the camera and result */
    font-size: 18px; /* Adjust font size as needed */
    line-height: 1.5; /* Add some separation between lines */
}
    </style>
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="qr-reader-container">
        <div id="qr-reader" style="width:500px; height:500px; display:none;"></div>
        <div id="qr-reader-results" class="mt-4 p-4 bg-white border rounded shadow qr-reader-results"></div>
    </div>
    <button id="request-camera-permission" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Request Camera Permissions</button>
    <button id="scan-image-file" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Scan an Image File</button>
    <button id="stop-scanning" class="mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600" style="display: none;">Stop Scanning</button>
    <button id="start-scanning" class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" style="display: none;">Start Scanning</button>

    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const qrReader = document.getElementById('qr-reader');
            const qrReaderResults = document.getElementById('qr-reader-results');
            const requestCameraPermissionBtn = document.getElementById('request-camera-permission');
            const scanImageFileBtn = document.getElementById('scan-image-file');
            const stopScanningBtn = document.getElementById('stop-scanning');
            const startScanningBtn = document.getElementById('start-scanning');

            let html5QrCode;
            let cameraId;

            function qrCodeSuccessCallback(decodedText) {
    fetch('/verify-student', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ qr_code: decodedText })
    })
    .then(response => response.json())
    .then(data => {
        if (data.verified) {
            alert(`Verified Student: ${data.student_name}. Time In: ${data.time_in}`);
        } else {
            alert('User is not a verified student.');
        }
    })
    .catch(error => console.error('Error:', error));
}

            function requestCameraPermission() {
                qrReader.style.display = 'block'; // Show the QR scanner
                requestCameraPermissionBtn.style.display = 'none';
                scanImageFileBtn.style.display = 'none';
                stopScanningBtn.style.display = 'block';
                startScanningBtn.style.display = 'none';

                const config = { fps: 10, qrbox: { width: 250, height: 250 } };
                html5QrCode = new Html5Qrcode('qr-reader');
                Html5Qrcode.getCameras().then(devices => {
                    if (devices && devices.length) {
                        cameraId = devices[0].id;
                        html5QrCode.start(cameraId, config, qrCodeSuccessCallback).catch(err => console.error(`Unable to start scanning: ${err}`));
                    }
                }).catch(err => console.error(`Unable to get cameras: ${err}`));
            }

            function stopScanning() {
                html5QrCode.stop().catch(err => console.error(`Unable to stop scanning: ${err}`));
                qrReader.style.display = 'none';
                requestCameraPermissionBtn.style.display = 'none';
                scanImageFileBtn.style.display = 'block';
                stopScanningBtn.style.display = 'none';
                startScanningBtn.style.display = 'block';
            }

            function startScanning() {
                qrReader.style.display = 'block'; // Show the QR scanner
                requestCameraPermissionBtn.style.display = 'none';
                scanImageFileBtn.style.display = 'none';
                stopScanningBtn.style.display = 'block';
                startScanningBtn.style.display = 'none';

                const config = { fps: 10, qrbox: { width: 250, height: 250 } };
                html5QrCode.start(cameraId, config, qrCodeSuccessCallback).catch(err => console.error(`Unable to start scanning: ${err}`));
            }

            function scanImageFile() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = function (event) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
                    reader.onload = function () {
                        const image = new Image();
                        image.src = reader.result;
                        image.onload = function () {
                            const canvas = document.createElement('canvas');
                            const context = canvas.getContext('2d');
                            canvas.width = image.width;
                            canvas.height = image.height;
                            context.drawImage(image, 0, 0, image.width, image.height);
                            const imageData = context.getImageData(0, 0, image.width, image.height);
                            const qrCodeSuccessCallbackWrapper = function (decodedText) {
                                console.log(`Scanned QR Code from Image: ${decodedText}`);
                                // Display the scanned QR code content
                                qrReaderResults.innerText = `Scanned QR Code from Image:\n${decodedText}`;
                            };
                            html5QrCode.scanContext(imageData, qrCodeSuccessCallbackWrapper).catch(err => console.error(`Unable to scan image: ${err}`));
                        };
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            }

            requestCameraPermissionBtn.addEventListener('click', requestCameraPermission);
            scanImageFileBtn.addEventListener('click', scanImageFile);
            stopScanningBtn.addEventListener('click', stopScanning);
            startScanningBtn.addEventListener('click', startScanning);
        });
    </script>
</body>
</html>
