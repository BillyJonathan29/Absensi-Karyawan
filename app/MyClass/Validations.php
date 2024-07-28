<?php

namespace App\MyClass;

class Validations
{
    public static function loginValidate($request)
    {
        $request->validate([
            'name' => 'required|exists:users,name',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.exists' => 'Nama tidak ditemukan.',
        ]);
    }
}
?>
