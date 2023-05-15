<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::all();
        return response()->json($address);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = new Address();
        $address->create(
             [
                'client_id'=> $request->client_id,
                'street'=> $request->street,
                'number'=> $request->number,
                'district'=> $request->district,
                'city'=> $request->city,
                'state'=> $request->state,
                'complement'=> $request->complement,
                'zip_code'=> $request->zip_code,
                'latitude'=> $request->latitude,
                'longitude'=> $request->longitude,
             ]
         );

         if(!$address){
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
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::find($id);

        if (!$address) {
            return response()->json(
                [
                    'message' => "Not founded",
                ]
            );
        }

        return response()->json($address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $address = Address::find($id);

        if (!$address) {
            return response()->json(
                [
                    'message' => "Not founded",
                ]
            );
        }

        $address->update(
            [
                'street'=> $request->street,
                'number'=> $request->number,
                'district'=> $request->district,
                'city'=> $request->city,
                'state'=> $request->state,
                'complement'=> $request->complement,
                'zip_code'=> $request->zip_code,
                'latitude'=> $request->latitude,
                'longitude'=> $request->longitude,
            ]
        );

        if (!$address) {
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
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::find($id);

        if (!$address) {
            return response()->json([
                'message' => "Not founded",
            ]);
        }

        $address->delete();

        if ($address) {
            return response()->json([
                'message' => "Deletado com Sucesso !",
            ]);
        }
    }
}
