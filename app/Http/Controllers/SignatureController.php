<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    private $guzzle;

    public function __construct(
        Client $guzzle = null
    )
    {
        $this->guzzle   = $guzzle;
    }

    public function createAndGoToSigningQueue(Request $request)
    {
        $request->validate([
            'file_to_be_signed'  => 'required|file',
        ]);

        $fileInfo = $request->file('file_to_be_signed');

        $filePreparationResponse = $this->guzzle->post(config('eideasy.api_url') . '/api/signatures/prepare-files-for-signing', [
            'headers' => [
                'Accept' => 'application/json'
            ],
            'json' => [
                'files' => [
                    [
                        'fileContent' => base64_encode(file_get_contents($fileInfo->path())),
                        'fileName' => $fileInfo->getClientOriginalName(),
                        'mimeType' => $fileInfo->getMimeType(),
                    ]
                ],
                'client_id' => config('eideasy.client_id'),
                'secret' => config('eideasy.secret'),
                'container_type' => 'pdf'
            ],
        ]);

        $responseData = json_decode($filePreparationResponse->getBody()->getContents(), true);

        $createSigningQueueResponse = $this->guzzle->post(config('eideasy.api_url') . '/api/signatures/signing-queues', [
            'headers' => [
                'Accept' => 'application/json'
            ],
            'json' => [
                'doc_id' => $responseData['doc_id'],
                'client_id' => config('eideasy.client_id'),
                'secret' => config('eideasy.secret'),
                'has_management_page' => true,
            ],
        ]);

        $signingQueueResponseData = json_decode($createSigningQueueResponse->getBody()->getContents(), true);

        return redirect($signingQueueResponseData['management_page_url']);
    }
}
