<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->create(
            [
                'document' => $request->document,
                'corporate_name' => $request->corporate_name,
                'name' => $request->name,
                'phone' => $request->phone,
            ]
        );

        if(!$client){
            [
                'message' => "Not created",
            ];
        }

        return response()->json(
            [
                'message' => "Created",
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json(
                [
                    'message' => "Not founded",
                ]
            );
        }

        return response()->json($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json(
                [
                    'message' => "Not founded",
                ]
            );
        }

        $client->update(
            [
                'document' => $request->document,
                'corporate_name' => $request->corporate_name,
                'name' => $request->name,
                'phone' => $request->phone,
            ]
        );

        if (!$client) {
            return response()->json(
                [
                    'message' => "Not updated",
                ]
            );
        }

        return response()->json(
            [
                'message' => "Updated!",
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json([
                'message' => "Not founded",
            ]);
        }

        if ($client->delete()) {
            return response()->json([
                'message' => "Deletado com Sucesso !",
            ]);
        }
    }
}
