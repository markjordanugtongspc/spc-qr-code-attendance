<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://unpkg.com/unwind-css/dist/unwind.min.css">
    <link rel="stylesheet" href="form.css">
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
