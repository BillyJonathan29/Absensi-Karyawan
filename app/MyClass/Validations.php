<?php 

namespace App\MyClass;

class Validations
{

    public static function loginValidate($request)
    {
        $request->validate([
            'name' => 'required|exists:users,name',
        ], [
            'name.required' => 'Nama Wajib Di Isi',
            'name.exists' => 'Nama Tidak Di Temukan',
        ]);
    }


}



?>