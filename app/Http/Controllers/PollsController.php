<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollsController extends Controller
{
    private $arrayConsultas = array(
        array(
            'consulta' => 'Que color prefieres?',
            'fechaIni' => '05/01/2018',
            'fechaFin' => '30/01/2018',
            'respuesta1' => 'Azul',
            'respuesta2' => 'Negro',
            'respuesta3' => 'Rojo'
            ),
        array(
            'consulta' => 'Como eres?',
            'fechaIni' => '07/01/2018',
            'fechaFin' => '28/01/2018',
            'respuesta1' => 'Guapo',
            'respuesta2' => 'Feo',
            'respuesta3' => 'Normal'
        ),
        array(
            'consulta' => 'Que talla tienes?',
            'fechaIni' => '25/01/2018',
            'fechaFin' => '03/02/2018',
            'respuesta1' => 'L',
            'respuesta2' => 'XL',
            'respuesta3' => 'XXL'
        )
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function vote()
    {
        return view('polls.all', array("arrayConsultas" => $this->arrayConsultas) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('polls.create');
    }
    public function invite()
    {
        return view('polls.invite', array("arrayConsultas" => $this->arrayConsultas) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('polls.vote', array("arrayConsultas" => $this->arrayConsultas[$id]) );
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
