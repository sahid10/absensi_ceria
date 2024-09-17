<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Illuminate\Support\Facades\Http;

class SendWhatsAppNotification extends Command
{
    protected $signature = 'send:whatsapp';
    protected $description = 'Mengirim notifikasi WhatsApp setiap jam 08:00 dari data log Fingerspot';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Ambil data absensi dari database Workbench
        $logs = DB::connection('workbench')->select("
    SELECT att_log.scan_date, pegawai.pegawai_nama
    FROM att_log
    JOIN pegawai ON att_log.pin = pegawai.pegawai_pin
    WHERE DATE(scan_date) = CURDATE()
");


          // Buat pesan gabungan
          $message = "Absensi hari ini:\n";

          foreach ($logs as $log) {
              $message .="@".$log->pegawai_nama . " pada " . $log->scan_date . "\n";
          }
          
            $response = Http::withHeaders([
                'Authorization' => 'hT2Do8hSDN3fy5LZ2rSW',
            ])->post('https://api.fonnte.com/send', [
                'target' => '120363337218399580@g.us',
                'message' => $message,
                'countryCode' => '62', // Kode negara Indonesia
            ]);

            if ($response->successful()) {
                $this->info('Notifikasi berhasil dikirim untuk karyawan: ' . $log->pegawai_nama);
            } else {
                $this->error('Gagal mengirim notifikasi untuk karyawan: ' . $log->pegawai_nama);
            }
    }
}


