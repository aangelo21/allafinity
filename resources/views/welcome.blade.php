@extends('layout')

@section('content')
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Bienvenido a Allafinity</h1>
        
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                Allafinity es una plataforma en línea diseñada para ayudarte a organizar y hacer seguimiento de los diferentes tipos de medios que consumes, como programas de televisión, películas, libros y más. Su principal objetivo es proporcionar una forma conveniente de registrar lo que has visto o leído a lo largo del tiempo, permitiéndote revisar fácilmente tus títulos favoritos y ver cómo evolucionan tus intereses.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('media.index') }}" 
                   class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors duration-200">
                    Ver lista de medios
                </a>
                <a href="{{ route('media.create') }}" 
                   class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-purple-600 bg-purple-100 hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors duration-200">
                    Añadir nuevo medio
                </a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="grid md:grid-cols-2 gap-8 mt-12 max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-purple-600 mb-4">
                    <svg class="h-12 w-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Organiza</h3>
                <p class="text-gray-600">Mantén un registro organizado de todos tus medios favoritos en un solo lugar.</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-purple-600 mb-4">
                    <svg class="h-12 w-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Califica</h3>
                <p class="text-gray-600">Valora y reseña cada título para crear tu biblioteca personalizada.</p>
            </div>

        </div>
    </div>
@endsection
