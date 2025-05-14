@extends('layouts.template')

@section('content')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px] bg-white p-10 rounded-md shadow-md">
        <h1 class="text-2xl font-bold text-center text-[#07074D] mb-8">Detalle del Usuario</h1>

        <div class="mb-5">
            <label class="mb-3 block text-base font-medium text-[#07074D]">
                Nombre Completo
            </label>
            <p class="w-full rounded-md border border-[#e0e0e0] bg-gray-50 py-3 px-6 text-base font-medium text-[#6B7280]">
                {{ $user->name }}
            </p>
        </div>

        <div class="mb-5">
            <label class="mb-3 block text-base font-medium text-[#07074D]">
                Correo Electrónico
            </label>
            <p class="w-full rounded-md border border-[#e0e0e0] bg-gray-50 py-3 px-6 text-base font-medium text-[#6B7280]">
                {{ $user->email }}
            </p>
        </div>

        <div class="mb-5">
            <label class="mb-3 block text-base font-medium text-[#07074D]">
                Tipo de Identificación
            </label>
            <p class="w-full rounded-md border border-[#e0e0e0] bg-gray-50 py-3 px-6 text-base font-medium text-[#6B7280]">
                {{ $user->typeDocument->name ?? 'No especificado' }}
            </p>
        </div>

        <div class="mb-5">
            <label class="mb-3 block text-base font-medium text-[#07074D]">
                RUT
            </label>
            <p class="w-full rounded-md border border-[#e0e0e0] bg-gray-50 py-3 px-6 text-base font-medium text-[#6B7280]">
                {{ $user->rut }}
            </p>
        </div>

        <div class="mb-5">
            <label class="mb-3 block text-base font-medium text-[#07074D]">
                Fecha de Cumpleaños
            </label>
            <p class="w-full rounded-md border border-[#e0e0e0] bg-gray-50 py-3 px-6 text-base font-medium text-[#6B7280]">
                {{ $user->birthdate }}
            </p>
        </div>

        <div class="mt-8 flex justify-between">
            <a href="{{ route('dashboard.users.index') }}"
               class="hover:shadow-form rounded-md bg-gray-500 py-3 px-8 text-base font-semibold text-white outline-none">
                Volver a la lista
            </a>
            <a href="{{ route('dashboard.users.edit', $user->id) }}"
               class="hover:shadow-form rounded-md bg-indigo-600 py-3 px-8 text-base font-semibold text-white outline-none">
                Editar Usuario
            </a>
        </div>
    </div>
</div>
@endsection
