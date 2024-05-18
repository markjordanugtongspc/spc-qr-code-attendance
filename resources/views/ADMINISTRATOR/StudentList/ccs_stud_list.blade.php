<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div style="height: 40px; background-color: #800000;"></div>
    <div class="d-flex justify-content-center align-items-center mx-5 mt-3 gap-3">
        <img src="images/ccs.png" alt="ccs Logo"  style="height: 80px; width: 80px;">
        <h1 class="text-center fs-3 fw-bold">LIST OF STUDENTS</h1>
        <img src="images/ccs.png" alt="ccs Logo" style="height: 80px; width: 80px;">
    </div>
    <div class="d-flex justify-content-between mx-5 mt-4">
        <div class="d-flex align-items-center">
            <span class="me-2">SHOW</span>
            <select class="form-select">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="d-flex">
            <input class="form-control" type="search" placeholder="search">
            <button class="btn ms-3 text-light" style="background-color: #800000;">Search</button>
        </div>
    </div>

    <table class="table table-bordered mx-auto mt-4">
        <thead class="table-light">
            <tr>
                <th class="text-center">ID NUMBER</th>
                <th class="text-center">NAME</th>
                <th class="text-center">COURSE</th>
                <th class="text-center">GENDER</th>
                <th class="text-center">YEAR LEVEL</th>
                <th class="text-center">STATUS</th>
                <th class="text-center">ACTION</th>
            </tr>
        </thead>
        @foreach($students as $student)
        <tr>
            <td class="align-content-center text-center">{{ $student->student_id }}</td>
            <td class="align-content-center">{{ $student->name }}</td>
            <td class="align-content-center text-center">{{ $student->course }}</td>
            <td class="align-content-center text-center">{{ $student->gender }}</td>
            <td class="align-content-center text-center">{{ $student->year_level }}</td>
            <td class="align-content-center text-center">{{ $student->status }}</td>
            <td class="align-content-center text-center">
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">
                    <img src="https://add.pics/images/2024/05/16/image4553449d24d095cd.png" alt="Edit" class="mx-2" width="20" height="20">
                </a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <img src="https://add.pics/images/2024/05/16/imagebf37507decf00dd9.png" alt="Delete" class="mx-2" width="20" height="20">
                    </button>
                </form>
                <!-- Add a restore button if the student is soft-deleted -->
                @if($student->trashed())
                <form action="{{ route('students.restore', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-success">Restore</button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <div class="position-absolute bottom-0 start-0 ms-3 mb-3 d-flex align-items-center">
        <button class="btn btn-danger me-2" onclick="randomizeRoute()">
            Back
        </button>
        <span class="ms-4">Showing 0 to 0 of 0 entries</span>
    </div>
    <div class="position-absolute bottom-0 end-0 me-3 mb-3">
        <button class="btn text-light me-1" style="background-color: #800000;">Previous</button>
        <button class="btn text-light ms-1" style="background-color: #800000;">Next</button>
    </div>

    <script>
        function randomizeRoute() {
            var routes = ["instructor", "student"];
            var randomIndex = Math.floor(Math.random() * routes.length);
            var randomRoute = routes[randomIndex];

            // Redirect to the random route
            window.location.href = "/" + randomRoute;
        }
    </script>
</body>

</html>