@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200">
        <h1 class="text-5xl text-center pt-24">Registrar</h1>
        <form class="mt-4" action="{{ route('register.store') }}" method="POST">

            <input type="text"
                class="border border-gray-200 rounded-md bg-gray-200 w-full  text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                value="{{old('name')}}" placeholder="Nombres" id="name" name="name" >
            @error('name')
                <small class="font-semibold" style="color: red">{{ $message }}</small>
            @enderror
            <input type="email"
                class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                value="{{old('email')}}" placeholder="email" id="email" name="email" >
            @error('email')
                <small class="font-semibold" style="color: red"">{{ $message }}</small>
            @enderror
            <input type="password"
                class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                placeholder="Password" id="password" name="password">
            @error('password')
                <small class="font-semibold" style="color: red">{{ $message }}</small>
            @enderror
            <button class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"
                type="submit">Guardar</button>
            @csrf
            @method('post')
        </form>
    </div>
@endsection
