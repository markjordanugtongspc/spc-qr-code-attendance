<!-- Using tailwind Css for styling and added php foreach loop to display the data from the database. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200" style="background-color: rgb(217, 217, 217);">

    <body class="bg-gray-200" style="background-color: rgb(217, 217, 217);">
        <div class="bg-red-700 h-10" style="background-color: rgb(74, 3, 11);"></div>
        <div class="flex items-center justify-center mx-10 mt-5"> <!-- Modified justify-between to justify-center and reduced margin-top to mt-5 -->
            <img src="images/ccs.png" alt="ccs Logo" class="h-12 mr-5">
            <h1 class="text-3xl font-bold">LIST OF STUDENTS</h1>
            <img src="images/ccs.png" alt="ccs Logo" class="h-12 ml-5">
        </div>
        <div class="flex items-center justify-between mx-10 mt-4"> <!-- Added new div for the small text and menu bar -->
            <div class="flex items-center space-x-2"> <!-- Small text and menu bar -->
                <span class="text-sm">SHOW</span>
                <select class="px-2 py-1 rounded-md">
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
            <div> <!-- Time in code -->
                <span></span>
                <input class="px-2 py-1 ml-2 rounded-md" type="search" placeholder="search">
                <button class="px-4 py-2 ml-4 font-medium text-white bg-red-700 rounded-md hover:bg-red-500">Search</button>
            </div>
        </div>
    </body>

    <table class="w-full mx-auto mt-4 center">
        <tr>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">ID NUMBER</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">NAME</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">COURSE</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">GENDER</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">YEAR LEVEL</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">STATUS</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">ACTION</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td class="px-6 py-3 border">{{ $student->student_id }}</td>
            <td class="px-6 py-3 border">{{ $student->name }}</td>
            <td class="px-6 py-3 border">{{ $student->course }}</td>
            <td class="px-6 py-3 border">{{ $student->gender }}</td>
            <td class="px-6 py-3 border">{{ $student->year_level }}</td>
            <td class="px-6 py-3 border">{{ $student->stats }}</td>
            <td class="px-6 py-3 border text-center">
                <a href="{{ route('students.edit', $student->id) }}" class="inline-block">
                    <img src="https://add.pics/images/2024/05/16/image4553449d24d095cd.png" alt="Edit" class="mx-2" width="20" height="20">
                </a>
                <form action="" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-0 border-none bg-transparent">
                        <img src="https://add.pics/images/2024/05/16/imagebf37507decf00dd9.png" alt="Delete" class="mx-2" width="20" height="20">
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    <div class="absolute bottom-0 left-0 ml-4 mb-4 flex items-center">
        <button class="px-2 py-1 rounded-full bg-red-700 rounded-md hover:bg-red-500" onclick="randomizeRoute()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <span class="ml-4 py-1">Showing 0 to 0 of 0 entries</span>
    </div>
    <div class="absolute bottom-0 right-0 mb-3 mr-4">
        <button class="px-4 py-2 ml-1 font-medium text-white bg-red-700 rounded-md hover:bg-red-500">Previous</button>
        <button class="px-4 py-2 ml-1 font-medium text-white bg-red-700 rounded-md hover:bg-red-500">Next</button>
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