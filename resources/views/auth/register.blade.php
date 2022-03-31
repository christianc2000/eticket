@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200">
        <h1 class="text-5xl text-center pt-24">Registrar</h1>
        <form class="mt-4" action="{{ route('register.store') }}" method="POST">

            <input type="text"
                class="border border-gray-200 rounded-md bg-gray-200 w-full  text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                placeholder="Nombres" id="name" name="name" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <input type="email"
                class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                placeholder="email" id="email" name="email" required>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <input type="password"
                class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                placeholder="Password" id="password" name="password" required>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <button class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"
                type="submit">Guardar</button>
            @csrf
            @method('post')
        </form>
    </div>
@endsection
