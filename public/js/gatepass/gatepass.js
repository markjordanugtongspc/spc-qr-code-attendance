document.addEventListener('DOMContentLoaded', function() {
// Is shupape?
const video = document.getElementById('camera-preview');
let qrCodeCameraScanner;

// Function to handle successful QR code scans
const onScanSuccess = (decodedText, decodedResult) => {
  console.log('QR Code decoded:', decodedText); // Debugging line
  console.log('Attempting to fetch enrollment status...'); // Additional debugging line

  const qrCodeCanvas = document.querySelector('canvas');
  if (qrCodeCanvas) {
    qrCodeCanvas.style.display = 'none';
  }

  fetch('/check-enrollment', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify({ student_id: decodedText })
  })
  .then(response => {
    console.log('Response received:', response); // Additional debugging line
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    console.log('Received data:', data); // Additional debugging line

    const qrCodeResult = document.getElementById('qr-code-result');
    const profileContainer = document.getElementById('profile-container');

    if (data.enrolled !== undefined && qrCodeResult && profileContainer) {
      qrCodeResult.textContent = data.stats; // Update text content
      qrCodeResult.style.color = data.enrolled ? 'green' : 'red';

      // Clear previous contents
      profileContainer.innerHTML = '';

      // Display the profile picture if available
      if (data.profile_picture) {
        const img = document.createElement('img');
        img.src = data.profile_picture;
        img.alt = 'Profile Picture';
        profileContainer.appendChild(img);
      }

      // Display the enrollment status
      const statusP = document.createElement('p');
      statusP.textContent = data.stats;
      profileContainer.appendChild(statusP);
    }
  })
  .catch(error => {
    console.error('Fetch error:', error); // Additional debugging line
  });
};

// Function to handle failed QR code scans
const onScanFailure = (error) => {
  console.log('Failed to scan QR code:', error); // Additional debugging line
  const qrCodeResult = document.getElementById('qr-code-result');
  qrCodeResult.style.color = 'red'; // Set text color to red for errors
  qrCodeResult.textContent = 'Scan QR Code Here';
};

// Initialize the QR code scanner for the camera
const initializeCameraScanner = () => {
  qrCodeCameraScanner = new Html5Qrcode('qr-reader');
  qrCodeCameraScanner.start({ facingMode: "environment" }, { fps: 10, qrbox: 250 }, onScanSuccess, onScanFailure)
    .catch((error) => {
      console.error('Error starting the camera scanner:', error); // Additional debugging line
    });
};

// Function to handle file upload and scanning
const handleFileUpload = (event) => {
  event.preventDefault(); // Prevent the default form submission behavior

  const file = event.target.files[0];
  if (!file) {
    return;
  }

  // Check file type
  const validFileTypes = ['image/png', 'image/jpeg', 'image/jpg'];
  if (!validFileTypes.includes(file.type)) {
    onScanFailure(new Error('Invalid file type')); // Additional debugging line
    return;
  }

  // Stop the camera scanner before scanning the file
  if (qrCodeCameraScanner) {
    qrCodeCameraScanner.stop().then(() => {
      // Scan the QR code from the file
      qrCodeCameraScanner.scanFile(file, true)
        .then(decodedText => {
          // After scanning the QR code from the file, check the enrollment status
          onScanSuccess(decodedText);
        })
        .catch(onScanFailure);
    }).catch((error) => {
      console.error('Error stopping the camera scanner:', error); // Additional debugging line
    });
  }
};

// Add event listener to the file input for upload scanning
const qrCodeFileInput = document.getElementById('qr-code-files');
if (qrCodeFileInput) {
  qrCodeFileInput.addEventListener('change', handleFileUpload);
} else {
  console.error('qr-code-files element not found.'); // Additional debugging line
}

// Initialize the camera scanner when the page loads
window.addEventListener('load', initializeCameraScanner);

});