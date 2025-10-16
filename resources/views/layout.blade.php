<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allafinity</title>
    <link rel="stylesheet" href="/css/layout.css">
    @yield('styles')
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="nav-container">
                <div class="logo-container">
                    <a href="/" class="logo">Allafinity</a>
                </div>
                
                <!-- Navigation Menu -->
                <div class="nav-links">
                    <a href="/" class="nav-link">Home</a>
                    <a href="{{ route('media.index') }}" class="nav-link">List</a>
                    <a href="{{ route('media.create') }}" class="nav-link">Add</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="mobile-menu-button">
                    <button id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu">
                <div class="mobile-menu-links">
                    <a href="/" class="nav-link">Home</a>
                    <a href="{{ route('media.index') }}" class="nav-link">List</a>
                    <a href="{{ route('media.create') }}" class="nav-link">Add</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>Allafinity</h3>
                    <p>Your digital media platform</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="/" class="footer-link">Home</a></li>
                        <li><a href="{{ route('media.index') }}" class="footer-link">List</a></li>
                        <li><a href="{{ route('media.create') }}" class="footer-link">Add</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li>Email: info@allafinity.com</li>
                        <li>Phone: +34 123 456 789</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Allafinity. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('active');
            
            // Cambiar el ícono del botón
            const buttonSvg = this.querySelector('svg');
            if (document.getElementById('mobile-menu').classList.contains('active')) {
                buttonSvg.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                `;
            } else {
                buttonSvg.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                `;
            }
        });

        // Cerrar el menú al hacer clic en un enlace
        document.querySelectorAll('.mobile-menu .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.remove('active');
                const buttonSvg = document.querySelector('#mobile-menu-button svg');
                buttonSvg.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                `;
            });
        });
    </script>
</body>
</html>
