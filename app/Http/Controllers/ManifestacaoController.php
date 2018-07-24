<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GMaps;

class ManifestacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manifestacao.forma');
    }

    /**
     * Função que determina caminho a ser seguido
     */
    public function manifestacao()
    {
        $config = array();
        $config['center'] = '-27.011083546744747, -51.14608210774662';
        $config['zoom'] = '16';
        $config['map_height'] = "40%";
        GMaps::initialize($config);

        $marker = array();
        $marker['position'] = '-27.011083546744747, -51.14608210774662';
        $marker['draggable'] = true;
        $marker['ondragend'] = '$("#input-latitude").val(event.latLng.lat()); $("#input-longitude").val(event.latLng.lng());';
        GMaps::add_marker($marker);
        $map = GMaps::create_map();

        // echo $map['js'];
        // echo $map['html'];
        // GMaps::load(view('manifestacao.manifestacao', $data));
        //dd($map);
        return view('manifestacao.manifestacao', ['map' => $map]);
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
    public function store(Request $request)
    {
        dd($request);
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
