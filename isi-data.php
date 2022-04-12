<?php

use App\Controllers\TravelLogController;

require_once 'bootstrap.php';

if( $travelLogs = (new TravelLogController)->store() ) {
    if(!is_object($travelLogs)) {
        return $travelLogs;
    }
}

?>

<?php require_once 'components/header.php' ?>
<div class="container">
    <div class="row">
        <form action="" method="POST" class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header">
                    Catatan Perjalanan
                </div>
                <div class="card-body">

                    <?php require_once 'components/message.php' ?>

                    <div class="mb-4">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Jam</label>
                        <input type="time" name="time" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Lokasi</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Suhu Tubuh</label>
                        <input type="text" name="body_temperature" class="form-control">
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button name="save" value="true" class="btn btn-primary text-light">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once 'components/footer.php' ?>