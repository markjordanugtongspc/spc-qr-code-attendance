
let scanner = new Instascan.Scanner({
  video: document.getElementById('preview')
});
scanner.addListener('scan', function(c) {
  document.getElementById('text').value = c;
  document.getElementById('id_student').value = c;
  document.getElementById('form').submit();
});
Instascan.Camera.getCameras().then(function(cameras) {
  if (cameras.length > 0) {
    scanner.start(cameras[0]);
  } else {
    console.error('No cameras found.');
  }
}).catch(function(e) {
  console.error(e);
});
