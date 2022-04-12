<?php

use App\Controllers\AuthController;

require_once 'bootstrap.php';

if( $response = (new AuthController)->auth() ) {
    return $response;
}

?>

<?php require_once 'components/header.php' ?>

<div class="container">
    <div class="row justify-content-center vh-100 align-content-center">
        <form action="" method="POST" class="col-md-6">

            <div class="card">
                <div class="card-body">

                    <?php 
                    
                    if(isset($_GET['message'])) :

                        if($_GET['type'] == 'success') :

                        ?>

                        <div class="alert bg-success text-light">
                            <?= $_GET['message'] ?>
                        </div>

                        <?php
                    
                        endif;

                        if($_GET['type'] == 'error') :

                        ?>

                        <div class="alert bg-danger text-light">
                            <?= $_GET['message'] ?>
                        </div>

                        <?php
                    
                        endif;

                    endif;

                    ?>

                    <div class="mb-4">
                        <label for="" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" />
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" />
                    </div>
                    <button name="auth" value="register" class="btn btn-primary text-light">Saya Pengguna Baru</button>
                    <button name="auth" value="login" class="btn btn-primary text-light">Masuk</button>
                </div>
            </div>

        </form>
    </div>
</div>

<?php require_once 'components/footer.php' ?>