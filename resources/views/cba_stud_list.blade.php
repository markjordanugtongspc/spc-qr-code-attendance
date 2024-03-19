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
        <img src="images/cba11806-5q7m-200h.png" alt="cba Logo" class="h-12 mr-4">
        <h1 class="text-3xl font-bold">LIST OF STUDENTS</h1>
        <img src="images/cba11806-5q7m-200h.png" alt="cba Logo" class="h-12 ml-4">
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
    
        
    </table>
    <div class="absolute bottom-0 left-0 ml-4 mb-4 flex items-center">
        <button class="px-2 py-1 rounded-full bg-red-700 rounded-md hover:bg-red-500">
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
</body>
</html>