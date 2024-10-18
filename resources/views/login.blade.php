@extends('layouts.app')

@section('title', 'Masuk')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6">Masuk</h2>
        <form>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2">Kata Sandi</label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <button type="button" onclick="window.location.href='/contact'" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Masuk</button>
        </form>
    </div>
@endsection
