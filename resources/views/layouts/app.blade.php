<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact Management System')</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-gray-800 py-4">
        <!-- Navigation menu -->
        <nav class="container mx-auto flex items-center justify-between">
            <a class="text-white font-semibold text-xl" href="{{ route('contacts.index') }}">Contact Manager</a>
            <ul class="flex">
                <li><a class="text-white hover:text-gray-200 px-4" href="{{ route('contacts.index') }}">Home</a></li>
                <li><a class="text-white hover:text-gray-200 px-4" href="{{ route('contacts.create') }}">Add Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        <!-- Flash messages -->
        @if(session('success'))
            <div class="bg-green-200 text-green-800 py-2 px-4 mb-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Page content -->
        @yield('content')
    </main>

    <footer class="bg-gray-800 py-4 mt-8">
        <div class="container mx-auto text-center text-white">
            <!-- Footer content -->
            Contact Management System &copy; {{ now()->year }}
        </div>
    </footer>

</body>
</html>
