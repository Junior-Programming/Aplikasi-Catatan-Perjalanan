<?php

use App\Controllers\HomeController;

require_once 'bootstrap.php';

if( $response = (new HomeController)->index() ) {
    return $response;
}

?>

<?php require_once 'components/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h3>Selamat datang <span class="text-primary"><?= e($_SESSION['___user___']['fullname']) ?></span> di aplikasi Peduli Diri</h3>
                    <div class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ab, minus odio mollitia optio quis atque, distinctio quos impedit obcaecati qui architecto, voluptatem voluptatum? Corporis quisquam doloribus qui commodi perferendis?</div>
                    <div class="text-end">
                        <a href="/catatan-perjalanan.php" class="btn btn-primary text-light">Catatan Perjalanan</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php require_once 'components/footer.php' ?>