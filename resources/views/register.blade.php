@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6">Daftar</h2>
        <form>
            <div class="mb-4">
                <label for="name" class="block mb-2">Nama</label>
                <input type="text" id="name" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2">Kata Sandi</label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block mb-2">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">Daftar</button>
        </form>
    </div>
@endsection
