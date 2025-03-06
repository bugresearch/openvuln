<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin(Request $request){} // giriş sayfası
    public function postLogin(Request $request){} // giriş sayfası submit
    public function getLogout(Request $request){}
    public function getForgotPassword(Request $request){}
    public function postForgotPassword(Request $request){}
    public function getResetPassword(Request $request){}
    public function postResetPassword(Request $request){}
}
