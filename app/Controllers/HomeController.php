<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        if(!isset($_SESSION['___user___'])) {
            return header('location: /auth.php');
        }
    }
}