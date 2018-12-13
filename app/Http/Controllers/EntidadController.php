<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadController extends AppController
{
    protected $model = "App\Entidad";
    protected $url = "entidades";
    
    protected $rules = [
      'nombre' => 'required',
    ];

    public function index(Request $request)
    {
        $this->bladeVars["title"] = "Entidades";
        $this->bladeVars["breadcrumb"] = [
          ["label" => "Entidades", "active" => true],
        ];
        $this->slfile = "Entidad.EntidadSL";
        return parent::index($request);
    }

    public function create()
    {
        $this->bladeVars["title"] = "Nueva Entidad";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Entidades", "url" => "/entidades"],
            ["label" => "Nueva Entidad", "active" => true],
        ];
        $this->maintfile = "Entidad.EntidadMaint";
        return parent::create();
    }

    public function edit(Request $request, $id)
    {
        $this->bladeVars["title"] = "Modificar Entidad";
        $this->bladeVars["breadcrumb"] = [
          ["label" => "Administración"],
          ["label" => "Administración del Módulo"],
            ["label" => "Entidades", "url" => "/entidades"],
            ["label" => "Modificar Entidad", "active" => true],
        ];
        $this->maintfile = "Entidad.EntidadMaint";
        return parent::edit($request, $id);
    }

    public function show(Request $request, $id)
    {
        $this->bladeVars["title"] = "Visualizar Entidad";
        $this->bladeVars["breadcrumb"] = [
          ["label" => "Administración"],
          ["label" => "Administración del Módulo"],
            ["label" => "Entidades", "url" => "/descriptores"],
            ["label" => "Visualizar Entidad", "active" => true],
        ];
        $this->maintfile = "Entidad.EntidadMaint";
        return parent::show($request, $id);
    }

    public function destroy($id)
    {
        $this->successMessage = 'Entidad eliminado correctamente.';
        $this->errorMessage = 'El sindicato no pudo eliminarse ya que tiene registros asociados.';
        return parent::destroy($id);
    }

    public function export(Request $request, $type)
    {
        $this->slfile = "Entidad.EntidadSL";
        return parent::export($request, $type);
    }
}
