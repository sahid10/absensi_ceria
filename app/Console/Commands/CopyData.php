<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CopyData extends Command
{
    protected $signature = 'data:copy';
    protected $description = 'Copy data from workbench to mysql';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Connect to workbench
        $workbenchData = DB::connection('workbench')->table('pegawai')->get();

        // Insert into mysql
        foreach ($workbenchData as $row) {
            DB::connection('mysql')->table('pegawai')->updateOrInsert(
                ['pegawai_id' => $row->pegawai_id],
                (array)$row
            );
        }

        $this->info('Data copied successfully.');
    }
}
