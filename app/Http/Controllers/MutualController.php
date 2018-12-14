<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MutualController extends AppController {

    protected $model = "App\Mutual";
    protected $url = "mutuales";
    protected $rules = [
        'nombre' => 'required',
    ];

    public function index(Request $request) {
        $this->bladeVars["title"] = "Mutuales";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Mutuales", "active" => true],
        ];
        $this->slfile = "Mutual.MutualSL";
        return parent::index($request);
    }

    public function create() {
        $this->bladeVars["title"] = "Nueva Mutual";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Mutuales", "url" => "/mutuales"],
            ["label" => "Nueva Mutual", "active" => true],
        ];
        $this->maintfile = "Mutual.MutualMaint";
        return parent::create();
    }

    public function edit(Request $request, $id) {
        $this->bladeVars["title"] = "Modificar Mutual";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Administración"],
            ["label" => "Administración del Módulo"],
            ["label" => "Mutuales", "url" => "/mutuales"],
            ["label" => "Modificar Mutual", "active" => true],
        ];
        $this->maintfile = "Mutual.MutualMaint";
        return parent::edit($request, $id);
    }

    public function show(Request $request, $id) {
        $this->bladeVars["title"] = "Visualizar Mutual";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Administración"],
            ["label" => "Administración del Módulo"],
            ["label" => "Mutuales", "url" => "/descriptores"],
            ["label" => "Visualizar Mutual", "active" => true],
        ];
        $this->maintfile = "Mutual.MutualMaint";
        return parent::show($request, $id);
    }

    public function destroy($id) {
        $this->successMessage = 'Mutual eliminado correctamente.';
        $this->errorMessage = 'El sindicato no pudo eliminarse ya que tiene registros asociados.';
        return parent::destroy($id);
    }

    

}
