<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://unpkg.com/unwind-css/dist/unwind.min.css">
    <style>
        body{display:flex;justify-content:center;align-items:center;min-height:100vh;background-color:#f5f5f5;color:#333}.container{max-width:400px;padding:40px;background-color:#fff;box-shadow:0 0 10px rgba(0,0,0,.1);border-radius:5px}.form-group{margin-bottom:20px}.form-group label{display:block;margin-bottom:5px;font-weight:bold}.form-group input[type="text"]{width:100%;padding:10px;border:1px solid #ccc;border-radius:5px}.form-group input[type="submit"]{width:100%;padding:10px;background-color:#007bff;color:#fff;border:none;border-radius:5px;cursor:pointer}.form-group input[type="submit"]:hover{background-color:#0056b3}.bulb{position:fixed;bottom:20px;right:20px;width:30px;height:30px;background-image:url('https://uxwing.com/wp-content/themes/uxwing/download/household-and-furniture/bulb-light-icon.svg');background-size:cover;cursor:pointer}.bulb.light{background-image:url('https://uxwing.com/wp-content/themes/uxwing/download/household-and-furniture/bulb-light-icon.svg')}.bulb.dark{background-image:url('https://uxwing.com/wp-content/themes/uxwing/download/household-and-furniture/bulb-dark-icon.svg')}.bulb.light::before,.bulb.dark::before{content:"";position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:10px;height:10px;background-color:#fff;border-radius:50%}.bulb.light::before{box-shadow:0 0 10px rgba(0,0,0,.1)}.bulb.dark::before{box-shadow:0 0 10px rgba(255,255,255,.1)}.dark-mode{background-color:#333;color:#fff}.dark-mode .form-group label{color:#fff}.dark-mode .form-group input[type="text"]{color:#fff;background-color:#555;border-color:#555}@media (max-width:600px){.container{max-width:100%;padding:20px}}
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ url('/generate-qr') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" id="student_id" name="student_id" required>
            </div>
            <div class="form-group">
                <label for="student_name">Student Name:</label>
                <input type="text" id="student_name" name="student_name" required>
            </div>
            <div class="form-group">
                <label for="student_subject">Student Subject:</label>
                <input type="text" id="student_subject" name="student_subject" required>
            </div>
            <div class="form-group">
                <label for="timestamp">Timestamp:</label>
                <input type="text" id="timestamp" name="timestamp" value="{{ now() }}" readonly>
            </div>
            <div class="form-group">
                <input type="submit" value="Generate QR Code">
            </div>
        </form>
    </div>
    <div class="bulb light" onclick="toggleDarkMode()"></div>
    <script>
        function toggleDarkMode() {
            const body = document.body;
            body.classList.toggle("dark-mode");
            const bulb = document.querySelector(".bulb");
            bulb.classList.toggle("dark");
        }
    </script>
</body>
</html>
