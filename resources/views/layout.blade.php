<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allafinity</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-gray-800">Allafinity</a>
                </div>
                
                <!-- Navigation Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-600 hover:text-gray-900">Inicio</a>
                    <a href="{{ route('media.index') }}" class="text-gray-600 hover:text-gray-900">Lista</a>
                    <a href="{{ route('media.create') }}" class="text-gray-600 hover:text-gray-900">Añadir</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="text-gray-600 hover:text-gray-900">Inicio</a>
                    <a href="{{ route('media.index') }}" class="text-gray-600 hover:text-gray-900">Lista</a>
                    <a href="{{ route('media.create') }}" class="text-gray-600 hover:text-gray-900">Añadir</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Allafinity</h3>
                    <p class="text-gray-300">Tu plataforma de medios digitales</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Enlaces rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white">Inicio</a></li>
                        <li><a href="{{ route('media.index') }}" class="text-gray-300 hover:text-white">Lista</a></li>
                        <li><a href="{{ route('media.create') }}" class="text-gray-300 hover:text-white">Añadir</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Contacto</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>Email: info@allafinity.com</li>
                        <li>Teléfono: +34 123 456 789</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-300">
                <p>&copy; {{ date('Y') }} Allafinity. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
