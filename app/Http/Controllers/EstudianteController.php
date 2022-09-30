<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Departamentos;
use App\Models\Estudiantes;
use App\Models\Municipios;
use App\Models\Paises;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public $primaryKey = 'Estudiante';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = Estudiantes::all();
        return view('estudiantes.index', compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Paises::all();
        $departamentos = Departamentos::all();
        $municipios = Municipios::all();
        $cursos = Curso::all();
        return view('estudiantes.create', compact('paises', 'departamentos', 'municipios', 'cursos'));

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
        $alumno -> fechaExp = $request->input('fechaExp');
        $alumno ->idMunicipiosExp = $request->input('idMunicipiosExp');
        $alumno -> nombres = $request->input('nombres');
        $alumno -> primerApellido = $request->input('primerApellido');
        $alumno -> segundoApellido = $request->input('segundoApellido');
        $alumno -> genero = $request->input('genero');
        $alumno -> idMunicipioNac = $request->input('idMunicipioNac');
        $alumno -> idCursos = $request->input('idCursos');
        $alumno -> estratoSocial = $request->input('estratoSocial');
        if($request->hasFile('documentoIdentidad')){
            $alumno ->documentoIdentidad = $request->file('documentoIdentidad')->store('public/estudiantes/documents');
        }
        if($request->hasFile('FotoPerfil')){
            $alumno->FotoPerfil = $request->file('FotoPerfil')->store('public/estudiantes/images');
        }
        $alumno->save();
        return view('estudiantes.add', compact('alumno'));
        //return $request->all();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($primaryKey)
    {

        $alumno = Estudiantes::findEstudiante($primaryKey);
        $query1 = Municipios::join(
            'estudiantes','estudiantes.idMunicipiosExp','municipios.idDepartamento'
        )
        ->join('departamentos','departamentos.idDepartamento','municipios.idDepartamento')
        ->join('paises','paises.paises','departamentos.idPais')
        ->where('estudiantes.Estudiante',$alumno)
        ->select('municipios.nombreMunicipio as nomMuni','departamentos.nombreDepartamento as NomDepart','paises.nombrePais as nomPais')
        ->get();

        $query2 = Municipios::join(
            'estudiantes','estudiantes.idMunicipioNac','municipios.idMunicipios'
        )
        ->join('departamentos','departamentos.idDepartamento','municipios.idDepartamento')
        ->join('paises','paises.paises','departamentos.idPais')
        ->where('estudiantes.Estudiante',$alumno)
        ->select('municipios.nombreMunicipio as nomMuni','departamentos.nombreDepartamento as NomDepart','paises.nombrePais as nomPais')
        ->get();

        //return $muniExpedi;
        return view('estudiantes.show', compact('alumno'));
       //return view('estudiantes.show', compact('query1','query2'));
        //return view('estudiantes.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($primaryKey)
    {
        $alumno = Estudiantes::findEstudiante($primaryKey);
        return view('estudiantes.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $primaryKey)
    {
        $alumno = Estudiantes::findEstudiante($primaryKey);
        $alumno ->fill($request->except('documentoIdentidad'));
        if($request->hasFile('documentoIdentidad')){
            $alumno->Document = $request->file('documentoIdentidad')->store('public/estudiantes/documents');
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
    public function destroy($primaryKey)
    {
        $alumno = Estudiantes::findEstudiante($primaryKey);
        $urlImagen = $alumno->FotoPerfil;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagen);
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $alumno ->destroy($alumno);
        // return view('estudiantes.delete');

    }
}
