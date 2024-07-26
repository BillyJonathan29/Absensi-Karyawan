@extends('layouts.auth')
@section('title', 'Lupa Kata Sandi')

@section('content')
<div class="card-body">
    <h3 class="card-title font-bold mt-3">Reset Kata Sandi</h3>
    <div class="mb-3 mt-4 d-flex justify-content-center text-center">
    <p>Masukkan alamat email Anda di bawah ini untuk menerima kode OTP.</p>
    </div>
    <div class="w-50 bg-primary h-25"></div>
    <form>
        <div class="mb-2">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail">
            </div>
        <button type="submit" class="btn btn-primary w-100 mt-4">Kirim kode OTP</button>

    </form>
</div>
@endsection
