<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fumetto;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Fumetto::all();
        //dd($fumetti);
        return view ('fumetto.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetto.create');
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
        $store = new Fumetto();
        $store->fill($data);
        $store->save();

        return redirect()->route('fumetti.show',$store->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetti = Fumetto::where('id',$id)->first();
        //dd($fumetti);
        return view ('fumetto.show', compact('fumetti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variabile = Fumetto::find($id);
        return view('fumetto.edit', compact('variabile'));
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
        $data = $request->all();

        /* $id->update($data); */
        Fumetto::where('id',$id)
        ->update([
        'title'=>$data['title'],
        'description'=>$data['description'],
        'thumb'=>$data['thumb'],
        'price'=>$data['price'],
        'series'=>$data['series'],
        'sale_date'=>$data['sale_date'],
        'type'=>$data['type']]);

        /* dd($variabile); */

        return redirect()->route('fumetti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fumetto::where('id',$id)
        ->delete([
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type']);
        return redirect()->route('fumetti.index');
    }
}
