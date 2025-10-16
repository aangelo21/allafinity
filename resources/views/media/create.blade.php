@extends('layout')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Pon una nota</h1>
            
            <form method="POST" action="{{ route('media.store') }}" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           placeholder="Ingresa el título" 
                           required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <div class="space-y-2">
                    <label for="category" class="block text-sm font-medium text-gray-700">Categoría</label>
                    <select name="category" 
                            id="category" 
                            required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                        <option value="">Selecciona una categoría</option>
                        <option value="Serie de TV">Serie de TV</option>
                        <option value="Película">Película</option>
                        <option value="Libro">Libro</option>
                        <option value="Cómic">Cómic</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="genre" class="block text-sm font-medium text-gray-700">Género</label>
                    <input type="text" 
                           name="genre" 
                           id="genre" 
                           placeholder="Ingresa el género" 
                           required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <div class="space-y-2">
                    <label for="rating" class="block text-sm font-medium text-gray-700">Calificación (1-10)</label>
                    <input type="number" 
                           name="rating" 
                           id="rating" 
                           placeholder="Ingresa tu calificación" 
                           min="1" 
                           max="10" 
                           required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                </div>

                <div class="flex justify-center space-x-4 pt-4">
                    <button type="submit" 
                            class="px-6 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-colors duration-200">
                        Guardar Calificación
                    </button>
                    <a href="{{ route('media.index') }}" 
                       class="px-6 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200">
                        Volver a la Lista
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
