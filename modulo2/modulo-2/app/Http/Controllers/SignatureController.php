<?php

namespace App\Http\Controllers;

class SignatureController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $name = $user->name;
        $document = $user->client->document;
        $status = $user->client->signatures->first()->status->name;

        return view(
            'test',
            [
                'name' => $name,
                'document' => $document,
                'status' => $status
            ]
        );
    }
}
