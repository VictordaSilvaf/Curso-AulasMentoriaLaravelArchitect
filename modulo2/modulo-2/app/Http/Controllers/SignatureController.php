<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignatureController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'drink' => 'required|string',
        ]);

        $name = $user->name;
        $document = $user->client->document;
        $status = $user->client->signatures->first()->status->name;


        $params = $validator->fails() ? $validator->errors() : $validator->validated()['drink'];

        return view(
            'test',
            [
                'name' => $name,
                'document' => $document,
                'status' => $status,
                'params' => $params
            ]
        );
    }
}
