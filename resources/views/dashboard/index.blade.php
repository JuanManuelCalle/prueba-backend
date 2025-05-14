@extends('layouts.template')

@section('content')

    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white p-10 rounded-md shadow-md">
            <h1 class="text-2xl font-bold text-center text-[#07074D] mb-5">Crear nuevo contacto</h1>
            <form action="{{ route('dashboard.users.create') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="full_name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nombre Completo
                    </label>
                    <input type="text" name="full_name" id="full_name" placeholder="Nombre Completo"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('name') border-red-500 @enderror" value="{{ old('name') }}"/>
                    @error('full_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Correo Electrónico
                    </label>
                    <input type="email" name="email" id="email" placeholder="ejemplo@dominio.com"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('email') border-red-500 @enderror" value="{{ old('email') }}"/>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="type_identification" class="mb-3 block text-base font-medium text-[#07074D]">Tipo de identificación</label>
                    <select name="type_identification" id="type_identification"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('identification_type') border-red-500 @enderror">
                        <option value="">Seleccione una opción</option>
                        @foreach ($TypeDocuments as $TypeDocument)
                            <option value="{{ $TypeDocument->id }}" {{ old('identification_type') == $TypeDocument->id ? 'selected' : '' }}>{{ $TypeDocument->name }}</option>
                        @endforeach
                    </select>
                    @error('type_identification')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="rut" class="mb-3 block text-base font-medium text-[#07074D]">
                        RUT
                    </label>
                    <input type="text" name="rut" id="rut" placeholder="Ingrese su RUT"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('rut') border-red-500 @enderror" value="{{ old('rut') }}"/>
                    @error('rut')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="birthdate" class="mb-3 block text-base font-medium text-[#07074D]">
                        Fecha de cumpleaños
                    </label>
                    <input type="date" name="birthdate" id="birthdate"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('birthdate') border-red-500 @enderror" value="{{ old('birthdate') }}"/>
                    @error('birthdate')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                        Contraseña
                    </label>
                    <input type="password" name="password" id="password"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('password') border-red-500 @enderror"/>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
