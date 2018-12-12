<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SindicatoController extends AppController
{
    protected $model = "App\Sindicato";
    protected $url = "sindicatos";
    
    protected $rules = [
      'nombre' => 'required',
    ];

    public function index(Request $request)
    {
        $this->bladeVars["title"] = "Sindicatos";
        $this->bladeVars["breadcrumb"] = [
          ["label" => "Sindicatos", "active" => true],
        ];
        $this->slfile = "Sindicato.SindicatoSL";
        return parent::index($request);
    }

    public function create()
    {
        $this->bladeVars["title"] = "Nuevo Sindicato";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Sindicatos", "url" => "/sindicatos"],
            ["label" => "Nuevo Sindicato", "active" => true],
        ];
        $this->maintfile = "Sindicato.SindicatoMaint";
        return parent::create();
    }

    public function edit(Request $request, $id)
    {
        $this->bladeVars["title"] = "Modificar Descriptor";
        $this->bladeVars["breadcrumb"] = [
          ["label" => "Administración"],
          ["label" => "Administración del Módulo"],
            ["label" => "Descriptores", "url" => "/descriptores"],
            ["label" => "Modificar Descriptor", "active" => true],
        ];
        $this->maintfile = "Descriptor.DescriptorMaint";
        return parent::edit($request, $id);
    }

    public function show(Request $request, $id)
    {
        $this->bladeVars["title"] = "Visualizar Descriptor";
        $this->bladeVars["breadcrumb"] = [
          ["label" => "Administración"],
          ["label" => "Administración del Módulo"],
            ["label" => "Descriptores", "url" => "/descriptores"],
            ["label" => "Visualizar Descriptor", "active" => true],
        ];
        $this->maintfile = "Descriptor.DescriptorMaint";
        return parent::show($request, $id);
    }

    public function destroy($id)
    {
        $this->successMessage = 'Sindicato eliminado correctamente.';
        $this->errorMessage = 'El sindicato no pudo eliminarse ya que tiene registros asociados.';
        return parent::destroy($id);
    }

    public function export(Request $request, $type)
    {
        $this->slfile = "Descriptor.DescriptorSL";
        return parent::export($request, $type);
    }
}
