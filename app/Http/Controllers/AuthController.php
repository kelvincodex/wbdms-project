<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class AuthController extends Controller{

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginSave(Request $request)
    {
        # code...
    }

}
?>
