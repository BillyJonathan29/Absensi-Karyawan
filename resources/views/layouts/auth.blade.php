<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
        <div class="card shadow">
            @yield('content')
        </div>
    </div>

    <script src="https://kit.fontawesome.com/f5247f6a92.js" crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.otp-input').forEach((input, index, inputs) => {
        input.addEventListener('input', function() {
            if (this.value.length == this.maxLength) {
                let next = inputs[index + 1];
                if (next) {
                    next.focus();
                }
            }
            if (this.value.length == 0) {
                let prev = inputs[index - 1];
                if (prev) {
                    prev.focus();
                }
            }
        });

        input.addEventListener('keydown', function(event) {
            if (event.key === 'Backspace' && this.value.length === 0) {
                let prev = inputs[index - 1];
                if (prev) {
                    prev.focus();
                }
            }
        });
    });

    document.addEventListener('DOMContentLoaded', (event) => {
    // auto focus ke box pertama pas render page
    const firstOtpInput = document.querySelector('.otp-input');
    if (firstOtpInput) {
        firstOtpInput.focus();
    }
});

       const passwordInput = document.getElementById('InputPassword');
       const toggleButton = document.getElementById('passwordToggle');

       function togglePassword() {
           if (passwordInput.type === 'password') {
               passwordInput.type = 'text';
               toggleButton.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
           } else {
               passwordInput.type = 'password';
               toggleButton.innerHTML = '<i class="fa-solid fa-eye"></i>';
           }
       }

       function showButton() {
           if (passwordInput.value.length > 0) {
               toggleButton.style.display = 'inline';
           } else {
               toggleButton.style.display = 'none';
           }
       }

       passwordInput.addEventListener('input', showButton);
       passwordInput.addEventListener('focus', showButton);
       passwordInput.addEventListener('blur', function() {
           if (passwordInput.value.length === 0) {
               toggleButton.style.display = 'none';
           }
       });

      
    </script>
</body>
</html>
