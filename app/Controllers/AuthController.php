<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function auth()
    {
        if(isset($_SESSION['___user___'])) {
            return header('location: /');
        }

        if(!isset($_POST['auth'])) {
            return false;
        }

        if($_POST['auth'] == 'login') {
            return $this->_login();
        }

        return $this->_register();
    }

    public function logout()
    {
        unset($_SESSION['___user___']);

        return header('location: /auth.php');
    }

    public function _register()
    {
        $nik = trim($_POST['nik']);
        $fullname = trim($_POST['fullname']);

        if(strlen($nik) >= 8) {
            if(strlen($fullname) >= 3) {
                $user = User::where('nik', $nik)->first();
        
                if(!$user) {
                    User::create([
                        'nik' => $nik,
                        'fullname' => $fullname,
                    ]);
        
                    return header('location: /auth.php?message=Berhasil daftar!&type=success');
                }
        
                return header('location: /auth.php?message=NIK sudah terdaftar!&type=error');
            }
            return header('location: /auth.php?message=Nama minimal 1 karakter!&type=error');
        }
        return header('location: /auth.php?message=NIK minimal 8 karakter!&type=error');
    }

    private function _login()
    {
        $nik = trim($_POST['nik']);
        $fullname = trim($_POST['fullname']);

        $user = User::where('nik', $nik)->where('fullname', $fullname)->first();

        if($user) {

            $_SESSION['___user___'] = [
                'id' => $user->id,
                'nik' => $user->nik,
                'fullname' => $user->fullname,
            ];

            return header('location: /');
        }
        
        return header('location: /auth.php?message=NIK atau Nama salah!&type=error');
    }
}