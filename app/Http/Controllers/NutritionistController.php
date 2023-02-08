<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nutritionist;
use App\Models\User;
use Crypt;

class NutritionistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #$nutritionist = new Nutritionist();
        #$nutritionist->name = $request->input('name');
        #$nutritionist->save();
        #return 'Saved';
        return view('nutritionists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nutritionist = new User();
        $nutritionist->name = $request->input('name');
        $nutritionist->email = $request->input('email');
        $nutritionist->password = Crypt::encryptString($request->input('pass'));
        $nutritionist->save();

        /*
        Para desencriptar:
        try {
            $decrypted = Crypt::decryptString($encryptedValue);
        } catch (DecryptException $e) {
            //
        }
        */

        return 'Guardado con éxito';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
