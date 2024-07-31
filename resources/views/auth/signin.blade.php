@extends('layouts.auth')
@section('title', 'Masuk')

@section('content')
<div class="card-body">
    <h3 class="card-title font-bold mt-3">Masuk</h3>
    <div class="mb-3 mt-4">
        <h4 class="font-bold">Selamat datang! 👋</h4>
        <span>Silahkan masuk terlebih dahulu.</span>
    </div>

    <div class="w-50 bg-primary h-25"></div>
    <form class="sign-in-form needs-validation" id="formLogin" method="POST" novalidate>
        @csrf
        <div class="mb-2">
            <label for="InputUsername" class="form-label">Nama pengguna</label>
            <input type="text" class="form-control @if ($errors->has('name') || $errors->has('auth')) is-invalid @endif"
                name="name" id="InputUsername" value="{{ old('name') }}" required>
            @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
        <div class="mb-1">
            <label for="InputPassword" class="form-label">Kata sandi</label>
            <div class="input-group">
                <input type="password" name="password"
                    class="form-control @if ($errors-> has('auth')) is-invalid @endif" id="InputPassword" required>
                <span class="input-group-text" id="passwordToggle" onclick="togglePassword()" style="cursor: pointer;">
                    <i class="fa-solid fa-eye"></i>
                </span>
            </div>
        </div>
        <div class="mb-2 form-check d-flex justify-content-between display-8">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
            <a href="/kirim-otp">Lupa kata sandi?</a>
        </div>
        @if ($errors->has('auth'))
        <div class="invalid-message text-center my-2">
            {{ $errors->first('auth') }}
        </div>
        @endif
        <button type="submit" class="btn btn-primary w-100 mt-2">Masuk</button>
        <div class="mt-1 mb-3 existing-account-info d-flex justify-content-center">
            <span class="mr-1">Belum punya akun?</span>
            <a href="/auth/signup">Hubungi admin</a>
        </div>
    </form>
</div>
@endsection