<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <!-- Header -->
    <header class="bg-red-700 h-10">
        <!-- Header content here -->
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="absolute bottom-0 left-0 w-full">
        <!-- Footer content here -->
    </footer>

</body>

</html>