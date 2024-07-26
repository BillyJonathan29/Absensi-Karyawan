@extends('layouts.auth')
@section('title', 'Reset Kata Sandi')

@section('content')
<div class="card-body">
    <h3 class="card-title font-bold mt-3">Reset Kata Sandi</h3>
    <div class="mb-3 mt-4  d-flex justify-content-center text-center">
    <p>Kami telah mengirimkan kode OTP ke alamat email <strong>asu****@gmail.com</strong></p>
    </div>
    <div class="w-50 bg-primary h-25"></div>
    <form>
        <div class="otp-container">
                <input type="text" class="otp-input form-control" maxlength="1" id="otp1" autocomplete="off">
                <input type="text" class="otp-input form-control" maxlength="1" id="otp2" autocomplete="off">
                <input type="text" class="otp-input form-control" maxlength="1" id="otp3" autocomplete="off">
                <input type="text" class="otp-input form-control" maxlength="1" id="otp4" autocomplete="off">

            </div>

            <div class="mt-3 mb-3 existing-account-info d-flex justify-content-center">
                <span class="mr-1">Tidak menerima kode?</span>
            <a href="/masuk">Kirim ulang</a>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-4">Verifikasi OTP</button>

    </form>
</div>
@endsection


