<!--  -->
<!DOCTYPE html>
<html lang="english">

<head>
    <title>Gatepass</title>
    <link rel="icon" type="image/x-icon" href="/images/spc-logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
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

    <style>
        .qr-reader-container {
            display: flex;
            justify-content: flex-start;
            /* Aligns children to the left */
            align-items: center;
            /* Centers children vertically, adjust as needed */
        }

        .qr-reader-results {
            flex: 1;
            /* Take remaining space */
            margin-left: 16px;
            /* Add some space between the camera and result */
            font-size: 18px;
            /* Adjust font size as needed */
            line-height: 1.5;
            /* Add some separation between lines */
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body>
    <div>
        <link rel="stylesheet" href="css/gatepass1.css" />

        <div class="gate-pass-studentconfirm-container">
            <div class="gate-pass-studentconfirm-gate-pass-studentconfirm">
                <img src="images/gatepass1/box.png" class="gate-pass-studentconfirm-rectangle75" />
                <img src="images/gatepass1/box1.png" class="gate-pass-studentconfirm-rectangle11" />
                <img src="images/gatepass1/pic.png" class="gate-pass-studentconfirm-rectangle72" />
                <img src="images/gatepass1/rectangle744132-f6p-200h.png" class="gate-pass-studentconfirm-rectangle74" />
                <span class="gate-pass-studentconfirm-text">Gate Pass ID</span>
                <!-- Removed the span with User Confirmed -->
                <!-- Added the QR code reader container -->
                <div id="qr-reader" style="width:500px; height:500px; display:none;"></div>
                <!-- Changed the button text and added an id -->
                <button id="manage-camera-access" onclick="manageCameraAccess()">
                    <span class="gate-pass-studentconfirm-text3">Click to Manage Access</span>
                </button>
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
    <script>
        // Function to handle camera access
        function manageCameraAccess() {
            var qrReader = document.getElementById('qr-reader');
            var button = document.getElementById('manage-camera-access');

            // Toggle camera access and display QR reader
            if (qrReader.style.display === 'none') {
                qrReader.style.display = 'block';
                button.innerText = 'Click to Hide Camera';
                // TODO: Add code to start camera and read QR codes

                // Get the video element
                var video = document.createElement('video');
                video.setAttribute('id', 'camera-stream');

                // Check if the browser supports media devices
                if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                    // Access the camera
                    navigator.mediaDevices.getUserMedia({
                            video: true
                        })
                        .then(function(stream) {
                            // Attach the camera stream to the video element
                            video.srcObject = stream;
                            video.play();

                            // TODO: Add code to read QR codes from the camera stream
                        })
                        .catch(function(error) {
                            console.error('Error accessing camera:', error);
                        });
                } else {
                    console.error('Media devices not supported');
                }
            }
        } else {
            qrReader.style.display = 'none';
            button.innerText = 'Click to Manage Access';
            // TODO: Add code to stop camera and hide QR reader

            // Stop the camera stream
            var video = document.getElementById('camera-stream');
            if (video && video.srcObject) {
                var stream = video.srcObject;
                var tracks = stream.getTracks();
                tracks.forEach(function(track) {
                    track.stop();
                });
                video.srcObject = null;
            }
        }
        }

        // Attach event listener to the button
        var button = document.getElementById('manage-camera-access');
        button.addEventListener('click', manageCameraAccess);
    </script>
</body>

</html>