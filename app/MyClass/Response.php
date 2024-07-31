<?php 

namespace App\MyClass;
use Exception;
class Response
{
	public static function error($message, $code = 500)
    {
        return response()->json([
            'message' => $message,
            'code' => $code,
        ], $code);
    }

	public static function success($array = [])
	{
		if(!array_key_exists('message', $array)) {
			$array['message'] = 'Berhasil';
		}

		return response()->json(array_merge($array, [
			'code'		=> 200,
		]));
	}


	public static function save($array = [])
	{
		return response()->json(array_merge($array, [
			'message'	=> 'Berhasil disimpan',
			'code'		=> 200,
		]));
	}


	public static function update($array = [])
	{
		return response()->json(array_merge($array, [
			'message'	=> 'Berhasil diupdate',
			'code'		=> 200,
		]));
	}


	public static function delete($array = [])
	{
		return response()->json(array_merge($array, [
			'message'	=> 'Berhasil dihapus',
			'code'		=> 200,
		]));
	}


	public static function invalid($array = [])
	{
		if(!array_key_exists('message', $array)) {
			$array['message'] = 'Tidak valid';
		}

		return response()->json(array_merge($array, [
			'code'		=> 422,
		]), 422);
	}
}