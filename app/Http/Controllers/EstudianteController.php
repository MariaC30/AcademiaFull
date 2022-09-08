<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use App\Models\Municipios;
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
        $alumno -> fechaExp = $request->input('fechaExp');
        $alumno ->idMunicipiosExp = $request->input('idMunicipiosExp');
        $alumno -> nombres = $request->input('nombres');
        $alumno -> primerApellido = $request->input('primerApellido');
        $alumno -> segundoApellido = $request->input('segundoApellido');
        $alumno -> genero = $request->input('genero');
        $alumno -> estratoSocial = $request->input('estratoSocial');
        $alumno -> idMunicipiosExp = $request->input('idMunicipiosExp');
        $alumno -> idCursos = $request->input('idCursos');
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
        $query1 = Municipios::join(
            'estudiantes','estudiantes.id muni.expedi','municipios.id'
        )
        ->join('departamentos','departamentos.id','municipios.id_departa')
        ->join('paises','paises.id','departamentos.id_country')
        ->where('estudiantes.id',$id)
        ->select('municipios.nom_muni as nomMuni','departamentos.nom_departa as NomDepart','paises.nom_pais as nomPais')
        ->get();

        $query2 = Municipios::join(
            'estudiantes','estudiantes.id_muni_naci','municipios.id'
        )
        ->join('departamentos','departamentos.id','municipios.id_departa')
        ->join('paises','paises.id','departamentos.id_country')
        ->where('estudiantes.id',$id)
        ->select('municipios.nom_muni as nomMuni','departamentos.nom_departa as NomDepart','paises.nom_pais as nomPais')
        ->get();

        //return $muniExpedi;

        return view('estudiantes.show', compact('query1','query2'));
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
