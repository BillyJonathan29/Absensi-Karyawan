@extends('layouts.auth')
@section('title', 'Kata Sandi Baru')

@section('content')
<div class="card-body">
    <h3 class="card-title font-bold mt-3">Kata Sandi Baru</h3>
    <div class="mb-3 mt-4 d-flex justify-content-start">
    <p>Masukkan kata sandi baru anda.</p>
    </div>
    <div class="w-50 bg-primary h-25"></div>
    <form>
        <div class="mb-2">
                <label for="InputPassword" class="form-label">Kata Sandi Baru</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="InputPassword">
                    <span class="input-group-text" id="passwordToggle" onclick="togglePassword()" style="display: none;">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                </div>
            </div>
        <button type="submit" class="btn btn-primary w-100 mt-4">Ubah Kata Sandi</button>

    </form>
</div>
@endsection
