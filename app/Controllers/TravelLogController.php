<?php

namespace App\Controllers;

use App\Models\TravelLog as TravelLog;
use Carbon\Carbon;

class TravelLogController
{
    public function index()
    {
        if(!isset($_SESSION['___user___'])) {
            return header('location: /auth.php');
        }

        $travelLogs = TravelLog::query();
        
        if(isset($_GET['date']) && !empty($_GET['date'])) {
            $travelLogs = $travelLogs->whereDate('created_at', $_GET['date']);
        }

        return $travelLogs->get();
    }

    public function store()
    {
        if(isset($_POST['save'])) {

            if(isset($_POST['date']) && trim($_POST['date'])) {
                if(isset($_POST['time']) && trim($_POST['time'])) {
                    if(isset($_POST['location']) && trim($_POST['location'])) {
                        if(isset($_POST['body_temperature']) && trim($_POST['body_temperature'])) {
                            
                            $timestamp = Carbon::parse($_POST['date'] . ' ' . $_POST['time']);
    
                            TravelLog::create([
                                'user_id' => $_SESSION['___user___']['id'],
                                'location' => trim($_POST['location']),
                                'body_temperature' => trim($_POST['body_temperature']),
                                'created_at' => $timestamp,
                                'updated_at' => $timestamp,
                            ]);
                    
                            return header('location: /catatan-perjalanan.php?message=Berhasil di tambahkan.&type=success');
                        }

                        return header('location: /isi-data.php?message=Suhu Tubuh harus di isi!&type=error');
                    }

                    return header('location: /isi-data.php?message=Lokasi harus di isi!&type=error');
                }

                return header('location: /isi-data.php?message=Jam harus di isi!&type=error');
            }

            return header('location: /isi-data.php?message=Tanggal harus di isi!&type=error');
        }
    }
}