@extends('layouts.auth')
@section('title', 'Daftar')

@section('content')
<div class="card-body">
    <h3 class="card-title font-bold mt-3">Daftar</h3>
    <div class="mb-3 mt-4">
        <h4 class="font-bold">Selamat datang! 👋</h4>
        <span>Silahkan buat akun terlebih dahulu.</span>
    </div>
    <div class="w-50 bg-primary h-25"></div>
    <form>
        <div class="mb-2 input-field">
            <label for="InputUsername" class="form-label">Nama pengguna</label>
            <input type="text" class="form-control" id="InputUsername">
        </div>
        <div class="mb-2">
            <label for="InputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="InputEmail">
        </div>
    
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Kata sandi</label>
            <div class="input-group">
                <input type="password" class="form-control" id="InputPassword">
                <span class="input-group-text" id="passwordToggle" onclick="togglePassword()" style="display: none;">
                    <i class="fa-solid fa-eye"></i>
                </span>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary w-100 mt-3 rounded">Daftar sekarang</button>
        <div class="mt-1 mb-3 existing-account-info d-flex justify-content-center">
            <span class="mr-1">Sudah punya akun?</span>
        <a href="/masuk">Masuk</a>
    </div>
    </form>
</div>
@endsection
