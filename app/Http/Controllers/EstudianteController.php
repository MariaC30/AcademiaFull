<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = Estudiantes::all();
        return view('estudiantes.index', compact('alumno'));
        //return view('estudiantes.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Estudiantes(); //instancia
        $alumno -> tipoDocumento = $request->input('tipoDocumento');
        $alumno -> numeroDocumento = $request->input('numeroDocumento');
        $alumno -> documentoIdentidad = $request->input('documentoIdentidad');
        $alumno -> paisExpedocumento = $request->input('paisExpedocumento');
        $alumno -> departamentoExp = $request->input('departamentoExp');
        $alumno -> municipioExp = $request->input('municipioExp');
        $alumno -> fechaExp = $request->input('fechaExp');
        $alumno -> nombres = $request->input('	nombres');
        $alumno -> primerApellido = $request->input('primerApellido');
        $alumno -> segundoApellido = $request->input('segundoApellido');
        $alumno -> genero = $request->input('genero');
        $alumno -> fechaNacimiento = $request->input('fechaNacimiento');
        $alumno -> paisNacimiento = $request->input('paisNacimiento');
        $alumno -> departamentoNacimiento = $request->input('departamentoNacimiento');
        $alumno -> municipioNacimiento = $request->input('	municipioNacimiento');
        $alumno -> estratoSocial = $request->input('estratoSocial');
        $alumno -> idCursos = $request->input('idCursos');
        $alumno -> idMunicipiosExp = $request->input('idMunicipiosExp');
        $alumno -> idMunicipioNac = $request->input('idMunicipioNac');
        if($request->hasFile('Document')){
            $alumno ->Document = $request->file('Document')->store('public/estudiantes');
        }
        $alumno->save();
        return view('estudiantes.add');
        //return $request->all();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Estudiantes::find($id);
        return view('estudiantes.show', compact('alumno'));
        //return view('estudiantes.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Estudiantes::find($id);
        return view('estudiantes.edit', compact('alumno'));
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
        $alumno = Estudiantes::find($id);
        $alumno ->fill($request->except('Document'));
        if($request->hasFile('Document')){
            $alumno->Document = $request->file('Document')->store('public/estudiantes');
        }
        $alumno->save();
        return view('estudiantes.upload');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Estudiantes::find($id);
        $alumno ->delete();
        return view('estudiantes.delete');
    }
}