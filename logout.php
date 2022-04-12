<?php

use App\Controllers\AuthController;

require_once 'bootstrap.php';

return (new AuthController)->logout();