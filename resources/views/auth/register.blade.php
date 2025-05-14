@extends('layouts.template')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Crear una cuenta
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Ya tienes cuenta?
                <a href="{{ route('register.index') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Inicia sesión acá
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('register.process') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm
                            @error('email') border-red-500 @enderror"
                            placeholder="Correo electrónico" value="{{ old('email') }}">

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm @error('password') border-red-500 @enderror"
                            placeholder="Contraseña">

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700">Nombre completo</label>
                        <input id="full_name" name="full_name" type="text" autocomplete="full_name" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm @error('full_name') border-red-500 @enderror"
                            placeholder="Nombre completo">

                        @error('full_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="space-y-4">
                    <div>
                        <label for="rut" class="block text-sm font-medium text-gray-700">RUT</label>
                        <input id="rut" name="rut" type="text" autocomplete="current-rut" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm @error('rut') border-red-500 @enderror"
                            placeholder="RUT">

                        @error('rut')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="birthdate" class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                        <input id="birthdate" name="birthdate" type="date" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm @error('birthdate') border-red-500 @enderror"
                            placeholder="Fecha de nacimiento">

                        @error('birthdate')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="type_identification" class="block text-sm font-medium text-gray-700">Tipo de identificación</label>

                        <select id="type_identification" name="type_identification" required
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md @error('type_identification') border-red-500 @enderror">
                            <option value="">Seleccione un tipo</option>
                            @foreach ($typeDocuments as $typeDocument)
                                <option value="{{ $typeDocument->id }}">{{ $typeDocument->name }}</option>
                            @endforeach
                        </select>

                        @error('type_identification')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium
                    rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
                    focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier"
                            stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
                                <path d="M20 18L14 18M17 15V21M7.68213 14C8.63244 14.6318 9.77319 15 10.9999 15C11.7012 15 12.3744 14.8797 13 14.6586M10.5 21H5.6C5.03995 21 4.75992 21 4.54601 20.891C4.35785 20.7951 4.20487 20.6422 4.10899 20.454C4 20.2401 4 19.9601 4 19.4V17C4 15.3431 5.34315 14 7 14H7.5M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </span>
                    Crear cuenta
                </button>
            </div>
        </form>
    </div>
</div>
@endsection