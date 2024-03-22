<!DOCTYPE html>
<html lang="english">

<head>
    <title>QR CODE</title>
    <link rel="icon" type="image/x-icon" href="/images/spc-logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style data-tag="reset-style-sheet">
        /* prettier-ignore */
        html {
            line-height: 1.15
        }

        body {
            margin: 0
        }

        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid
        }

        p,
        li,
        ul,
        pre,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        blockquote,
        figcaption {
            margin: 0;
            padding: 0
        }

        button {
            background-color: transparent
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        button:-moz-focus,
        [type="button"]:-moz-focus,
        [type="reset"]:-moz-focus,
        [type="submit"]:-moz-focus {
            outline: 1px dotted ButtonText
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        input {
            padding: 2px 4px
        }

        img {
            display: block
        }

        html {
            scroll-behavior: smooth
        }

        body {
            font-family: Inter;
            font-size: 16px
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.15;
            color: var(--dl-color-gray-black);
            background-color: var(--dl-color-gray-white)
        }
    </style>

    <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body>
    <div>
        <link rel="stylesheet" href="css/gatepass1.css" />

        <div class="gate-pass-studentconfirm-container">
            <div class="gate-pass-studentconfirm-gate-pass-studentconfirm">
                <div class="gate-pass-studentconfirm-rectangle75">
                    <div id="qr-reader" style="width:350px; height:350px; display:none;">
                    </div>
                </div>

                <button id="manage-camera-access">
                    <span class="gate-pass-studentconfirm-text3">Click to Manage Access</span>
                    <input type="file" id="upload-qr-code" style="display: none;">
                    <label for="upload-qr-code">
                        <i class="fas fa-upload"></i> <!-- Replace with the appropriate icon class -->
                    </label>
                </button>

                <img src="images/gatepass1/box1.png" class="gate-pass-studentconfirm-rectangle11" />
                <img src="images/gatepass1/pic.png" class="gate-pass-studentconfirm-rectangle72" />
                <span class="gate-pass-studentconfirm-text">Gate Pass ID</span>

                <img src="images/gatepass1/line204132-enb.svg" class="gate-pass-studentconfirm-line20" />
                <span class="gate-pass-studentconfirm-text5">
                    <span>Verified SPC Student</span>
                </span>
                <!-- Removed the old image that was a placeholder for the camera -->
                <a href="{{ route('login') }}"><img src="images/gatepass/SPClogo.png" class="gate-pass-studentconfirm-spclogo3" /></a>
                <span class="gate-pass-studentconfirm-text7">Generate Gate Pass</span>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const qrReader = document.getElementById('qr-reader');
            const manageCameraAccessBtn = document.getElementById('manage-camera-access');
            let html5QrCode;

            function qrCodeSuccessCallback(decodedText, decodedResult) {
                console.log(`QR Code detected: ${decodedText}`);
                // Add any action you want to take after a successful scan
            }

            function onScanError(errorMessage) {
                console.error(`QR Code scanning error: ${errorMessage}`);
            }

            manageCameraAccessBtn.addEventListener('click', () => {
                qrReader.style.display = 'block'; // Make sure this is correct
                html5QrCode = new Html5Qrcode("qr-reader");

                Html5Qrcode.getCameras().then(cameras => {
                    if (cameras.length === 0) {
                        console.log("No cameras found.");
                        return;
                    }
                    const cameraId = cameras[0].id; // Consider providing an option for the user to select the camera
                    html5QrCode.start(cameraId, {
                            fps: 10, // Frames per second
                            qrbox: {
                                width: 250,
                                height: 250
                            } // Define QR box size
                        }, qrCodeSuccessCallback, onScanError)
                        .catch(err => console.error(`Error starting QR Code scanner: ${err}`));
                }).catch(err => console.error(`Error getting cameras: ${err}`));
            });
        });
    </script>

</body>

</html>