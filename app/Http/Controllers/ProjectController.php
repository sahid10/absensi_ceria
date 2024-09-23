<?php
// app/Http/Controllers/ProjectController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    // Menampilkan daftar proyek
    public function index()
    {
        $projects = Project::all();
        return view('projects.project_index', compact('projects'));
    }

    public function sendWa($id)
    {
        // Ambil data project berdasarkan ID
        $project = Project::findOrFail($id);

        // Format pesan yang akan dikirim
        $message = "Project: {$project->nama_project} \n" .
                   "Leader: {$project->nama_leader} \n" .
                   "Tanggal: {$project->tanggal}\n" .
                   "wilayah: {$project->wilayah_ulp_terkait}\n" .
                   "nama personil: {$project->nama_personil}\n" . 
                   "Total Jumlah Personil: {$project->total_jumlah_personil}";

        // ID grup WhatsApp yang diinginkan
        $waGroupId = '120363337218399580@g.us'; // Sesuaikan dengan ID grup WhatsApp Anda
        
        // API Key Fonnte (pastikan sudah diatur di .env)
        $apiKey = env('FONNTE_API_KEY'); 

        // Mengirim request POST ke API Fonnte
        $response = Http::withHeaders([
            'Authorization' => $apiKey,
        ])->post('https://api.fonnte.com/send', [
            'target' => $waGroupId,
            'message' => $message,
            'countryCode' => '62', // Sesuaikan dengan kode negara
        ]);

        // Cek respon dan tampilkan pesan sukses atau gagal
        if ($response->successful()) {
            return redirect()->route('projects.project_index')->with('success', 'Pesan WA berhasil dikirim ke grup.');
        } else {
            return redirect()->route('projects.project_index')->with('error', 'Gagal mengirim pesan WA.');
        }
    }
    
   
    // Menampilkan form input data proyek
    public function create()
    {
        return view('projects.create');
    }

    // Menyimpan data proyek baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_berangkat' => 'required',
            'jenis_kontrak_kerja' => 'required|string',
            'nama_project' => 'required|string',
            'nama_leader' => 'required|string',
            'wilayah_ulp_terkait' => 'required|string',
            'nama_personil' => 'required|string',
            'total_jumlah_personil' => 'required|integer',
        ]);

        Project::create($validatedData);

        return redirect()->route('projects.project_index')->with('success', 'Project berhasil disimpan.');
    }
     // public function sendNotification()
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'https://api.fonnte.com/send',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => array(
    //             'target' => '120363337218399580@g.us', // Masukkan ID grup WhatsApp di sini
    //             'message' => $message,
    //         ),
    //         CURLOPT_HTTPHEADER => array(
    //             'Authorization: hT2Do8hSDN3fy5LZ2rSW', // Ganti 'TOKEN' dengan token API Fonnte Anda
    //         ),
    //     ));

    //     $response = curl_exec($curl);

    //     curl_close($curl);
    //     return response($response);
    // }
    

}

