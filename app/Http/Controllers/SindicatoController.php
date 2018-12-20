<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SindicatoController extends AppController {

    protected $model = "App\Sindicato";
    protected $url = "sindicatos";
    protected $rules = [
        'nombre' => 'required',
        'tipo_actividad' => 'required',
        'cuit' => 'required',
        'table.App__Adhesion.*.id' => 'required',
        'table.App__Adhesion.*.nombre' => 'required',
        'table.App__Adhesion.*.legajo' => 'required',
        'table.App__Adhesion.*.grado' => 'required',
        'table.App__Mutual.*.nombre' => 'required',
        'table.App__Estatuto.*.id' => 'required',
        'table.App__Estatuto.*.resolucion' => 'required',
        'table.App__Estatuto.*.fecha' => 'required',
        'table.App__Estatuto.*.publicacion' => 'required',
        'table.App__Estatuto.*.actualizacion' => 'required',
        'table.App__Autoridad.*.id' => 'required',
        'table.App__Autoridad.*.nombre' => 'required',
        'table.App__Autoridad.*.apellido' => 'required',
        'table.App__Autoridad.*.cargo' => 'required',
        'table.App__Filial.*.id' => 'required',
        'table.App__Filial.*.provincia' => 'required',
        'table.App__Filial.*.localidad' => 'required',
        'table.App__Filial.*.referente' => 'required',
        'table.App__Filial.*.telefono' => 'required',
        'table.App__Filial.*.direccion' => 'required',
        'table.App__Filial.*.email' => 'required',
        'table.App__Filial.*.web' => 'required',
    ];

    public function index(Request $request) {
        $this->bladeVars["title"] = "Sindicatos";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Sindicatos", "active" => true],
        ];
        $this->slfile = "Sindicato.SindicatoSL";
        return parent::index($request);
    }

    public function create() {
        $this->bladeVars["title"] = "Nuevo Sindicato";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Sindicatos", "url" => "/sindicatos"],
            ["label" => "Nuevo Sindicato", "active" => true],
        ];
        $this->maintfile = "Sindicato.SindicatoMaint";
        return parent::create();
    }

    public function edit(Request $request, $id) {
        $this->bladeVars["title"] = "Modificar Sindicato";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Administración"],
            ["label" => "Administración del Módulo"],
            ["label" => "Sindicatos", "url" => "/sindicatos"],
            ["label" => "Modificar Sindicato", "active" => true],
        ];
        $this->maintfile = "Sindicato.SindicatoMaint";
        return parent::edit($request, $id);
    }

    public function show(Request $request, $id) {
        $this->bladeVars["title"] = "Visualizar Sindicato";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Administración"],
            ["label" => "Administración del Módulo"],
            ["label" => "Sindicatos", "url" => "/descriptores"],
            ["label" => "Visualizar Sindicato", "active" => true],
        ];
        $this->maintfile = "Sindicato.SindicatoMaint";
        return parent::show($request, $id);
    }

    public function destroy($id) {
        $this->successMessage = 'Sindicato eliminado correctamente.';
        $this->errorMessage = 'El sindicato no pudo eliminarse ya que tiene registros asociados.';
        return parent::destroy($id);
    }

    public function export(Request $request, $type) {
        $this->slfile = "Sindicato.SindicatoSL";
        return parent::export($request, $type);
    }

}
