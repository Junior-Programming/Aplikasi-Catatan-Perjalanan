<?php

use App\Controllers\TravelLogController;

require_once 'bootstrap.php';

if( $travelLogs = (new TravelLogController)->index() ) {
    if(!is_object($travelLogs)) {
        return $travelLogs;
    }
}

?>

<?php require_once 'components/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
            <form action="" method="GET" class="card shadow-sm mb-4">
                <div class="card-body">
                    Urutkan Berdasarkan : 
                    <input type="date" name="date" />
                    <button class="btn btn-primary btn-sm text-light">Cari</button>
                </div>
            </form>
            <div class="card shadow-sm">
                <div class="card-header">
                    Catatan Perjalanan
                </div>
                <div class="card-body">

                    <?php require_once 'components/message.php' ?>

                    <div class="table-responsive">
                        <table id="table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Lokasi</th>
                                    <th>Suhu Tubuh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($travelLogs as $travelLog) : ?>
                                <tr>
                                    <td><?= e($travelLog->created_at->format('d F, Y')) ?></td>
                                    <td><?= e($travelLog->created_at->format('h:i:s A')) ?></td>
                                    <td><?= e($travelLog->location) ?></td>
                                    <td><?= e($travelLog->body_temperature) ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <a class="btn btn-primary text-light" href="/isi-data.php">Isi Catatan Perjalanan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'components/footer.php' ?>