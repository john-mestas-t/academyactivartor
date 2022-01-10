@extends('layouts.master')

@section('content')
    <div class="flex h-screen">
        <div class="w-5/6 sm:w-5/6 lg:w-4/12 md:w-4/12 bg-white p-6 rounded-lg m-auto">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex justify-center pb-7">
                <img src="https://www.sednaeditorial.com/wp-content/uploads/2020/09/logo-sedna-color-small.png" alt="Logo Sedna">
            </div>

            <form action="{{ route('activate') }}" method="get">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Ingresa tu correo" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="code" class="sr-only">Code</label>
                    <input type="password" name="code" id="code" placeholder="Ingresa tu codigo" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('code') border-red-500 @enderror" value="">

                    @error('code')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Obtener usuario</button>
                </div>
            </form>
            @include("errores")
            @include("notificacion")
        </div>
    </div>
@endsection