<?php
// app/Http/Controllers/WhatsAppController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppNotificationController extends Controller
{
    public function sendNotification()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => '120363337218399580@g.us', // Masukkan ID grup WhatsApp di sini
                'message' => 'cek',
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: hT2Do8hSDN3fy5LZ2rSW', // Ganti 'TOKEN' dengan token API Fonnte Anda
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return response($response);
    }
}

