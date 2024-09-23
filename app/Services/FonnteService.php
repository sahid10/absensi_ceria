namespace App\Services;

use Illuminate\Support\Facades\Http;

class FonnteService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('hT2Do8hSDN3fy5LZ2rSW'); // Pastikan API Key sudah diatur di .env
    }

    public function sendMessageToGroup($groupId, $message)
    {
        $response = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->post('https://api.fonnte.com/send', [
            'target' => $groupId,
            'message' => $message,
            'countryCode' => '62', // Sesuaikan kode negara
        ]);

        return $response->json();
    }
}
