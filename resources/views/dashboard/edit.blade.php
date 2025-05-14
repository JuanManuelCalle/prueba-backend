@extends('layouts.template')

@section('content')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white p-10 rounded-md shadow-md">
            <h1 class="text-2xl font-bold text-center text-[#07074D] mb-5">Editar Usuario</h1>
            <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label for="full_name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nombre Completo
                    </label>
                    <input type="text" name="full_name" id="full_name" placeholder="Nombre Completo"
                           value="{{ old('full_name', $user->name) }}"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('full_name') border-red-500 @enderror" />
                    @error('full_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Correo Electrónico
                    </label>
                    <input type="email" name="email" id="email" placeholder="ejemplo@dominio.com"
                           value="{{ old('email', $user->email) }}"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('email') border-red-500 @enderror" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="type_identification" class="mb-3 block text-base font-medium text-[#07074D]">Tipo de identificación</label>
                    <select name="type_identification" id="type_identification"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('type_identification') border-red-500 @enderror">
                        <option value="">Seleccione una opción</option>
                        @foreach ($TypeDocuments as $TypeDocument)
                            <option value="{{ $TypeDocument->id }}" {{ old('type_identification', $user->type_identification) == $TypeDocument->id ? 'selected' : '' }}>
                                {{ $TypeDocument->name }}
                            </option>
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
                           value="{{ old('rut', $user->rut) }}"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('rut') border-red-500 @enderror" />
                    @error('rut')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="birthdate" class="mb-3 block text-base font-medium text-[#07074D]">
                        Fecha de cumpleaños
                    </label>
                    <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate', $user->birthdate) }}"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('birthdate') border-red-500 @enderror" />
                    @error('birthdate')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                        Contraseña (dejar en blanco para no cambiar)
                    </label>
                    <input type="password" name="password" id="password"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('password') border-red-500 @enderror" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-3 block text-base font-medium text-[#07074D]">
                        Confirmar Contraseña
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="status" class="mb-3 block text-base font-medium text-[#07074D]">Estado</label>
                    <select name="status" id="status"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('status') border-red-500 @enderror">
                        <option value="1" {{ old('status', $user->status) == 1 ? 'selected' : '' }}>Activo</option>
                        <option value="0" {{ old('status', $user->status) == 0 ? 'selected' : '' }}>Inactivo</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('dashboard.users.index') }}" class="hover:shadow-form rounded-md bg-gray-400 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Cancelar
                    </a>
                    <button type="submit"
                            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Actualizar Usuario
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
