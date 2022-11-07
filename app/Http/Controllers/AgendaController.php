<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agenda = Agenda::all();
        return view('agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $agenda = Agenda::all();
        return view('agenda.create', compact(
            'agenda'
        ));
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
        $validateData = $request->validate([
            'agenda' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'waktu' => 'required'
        ]);

        $agenda = new Agenda();
        $agenda->agenda = $validateData['agenda'];
        $agenda->tanggal = $validateData['tanggal'];
        $agenda->tempat = $validateData['tempat'];
        $agenda->waktu = $validateData['waktu'];
        $agenda->save();
        return redirect('agenda')->with('success', 'Agenda Telah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //control edit
        $modal = Agenda::find($id);
        return view('agenda.edit', compact('modal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $validateData = $request->validate([
            'agenda' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'waktu' => 'required'
        ]);
        $agenda = Agenda::find($id);
        $agenda->agenda = $validateData['agenda'];
        $agenda->tanggal = $validateData['tanggal'];
        $agenda->tempat = $validateData['tempat'];
        $agenda->waktu = $validateData['waktu'];
        $agenda->update();
        return redirect('agenda')->with('success', 'Agenda Telah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}