<?php

namespace App\Http\Controllers;

use App\Models\Proizvod;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //GET
    {
        return Proizvod::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //POST 
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:50',
            'opis' => 'required|string|max:150',
            'dobavljac_id' => 'required|integer',

            'kategorija_id' => 'required|integer',
            'kolicina' => 'required|integer',
            'cena' => 'required|integer',
            'nabavna_cena' => 'required|integer',


 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Proizvod::create([
            'naziv' => $request->naziv, 
            'opis' => $request->opis, 
            'dobavljac_id' => $request->dobavljac_id,
            'kategorija_id' => $request->kategorija_id,
            'kolicina' => $request->kolicina,
            'cena' => $request->cena,
            'nabavna_cena' => $request->nabavna_cena,


 

        ]);
        $p->save();
        return response()->json(['Objekat je  kreiran', $p]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function show($id) //get
    {
        return Proizvod::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function edit(Proizvod $proizvod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id) //PUT
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:50',
            'opis' => 'required|string|max:150',
            'dobavljac_id' => 'required|integer',

            'kategorija_id' => 'required|integer',
            'kolicina' => 'required|integer',
            'cena' => 'required|integer',
            'nabavna_cena' => 'required|integer',


 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Proizvod::find($id);
        if($p){
      
            $p->naziv=$request->naziv;
            $p->opis=$request->opis;
            $p->dobavljac_id=$request->dobavljac_id;
            $p->kategorija_id=$request->kategorija_id;
            $p->kolicina=$request->kolicina;
            $p->cena=$request->cena;
            $p->nabavna_cena=$request->nabavna_cena;
             

            $p->save();
            return response()->json( ["Uspesno izmenjeno!",$p]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //delete
    {
        $p = Proizvod::find($id);
        $p->delete(); 
        return response()->json(["Objekat obrisan",$p]);

    }
}
