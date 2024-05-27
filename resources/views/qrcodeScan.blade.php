<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <title>Scanner</title>
</head>

<body>
    <div>
        <video id="preview" class="w-[600px] h-auto"></video>
        <form action="{{ route('scan')}}" method="POST" id="form">
            @csrf
            <input type="hidden" name="id_student" id="id_student">
        </form>
    </div>
    @if (session()->has('error'))
    <div class="" style="text-color: white;">{{ session('error') }}</div>
    @endif
    @if (session()->has('success'))
    <div class="" style="text-color: white;">{{ session('success') }}</div>
    @endif
    </div>
    </div>




    <script>
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
    </script>

</body>


</html>