<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $fumettos = Fumetto::all();
        
        return view('fumettos.index', compact('fumettos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumettos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_fumetto = new Fumetto();
        $data['slug'] = Str::slug($data['title'], '-');
        $new_fumetto->fill($data); 

        $new_fumetto->save();

        return redirect()->route('fumettos.show',$new_fumetto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $fumetto = Fumetto::find($id);
        if($fumetto){
            return view('fumettos.show',compact('fumetto'));
        }
        abort(404, 'Fumetto non presente nel database!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Fumetto::find($id);
        if($fumetto){
            return view('fumettos.edit',compact('fumetto'));
        }
        abort(404, 'Prodotto non presente nel database!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $fumetto)
    {
       // leggo il dato in arrivo dal form
       $data = $request->all();


       // selezione la riga della tabella da aggiornare
       //$pasta = Pasta::find($id); -> $pasta è l'entità originale non ancora sovrascritta
       $data['slug'] = Str::slug($data['title'], '-');
       $fumetto->update($data); // fanno sempre riferimento i dati fillabili

       return redirect()->route('fumettos.show',$fumetto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $fumetto)
    {
        $fumetto->delete();
        return redirect()->route('fumettos.index')->with('deleted',$fumetto->title);
    }
}
