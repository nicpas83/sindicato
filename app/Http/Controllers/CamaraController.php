<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamaraController extends AppController {

    protected $model = "App\Camara";
    protected $url = "camaras";
    protected $rules = [
        'nombre' => 'required',
        'tipo_actividad' => 'required',
        'cuit' => 'required',
    ];

    public function index(Request $request) {
        $this->bladeVars["title"] = "Camaras";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Camaras", "active" => true],
        ];
        $this->slfile = "Camara.CamaraSL";
        return parent::index($request);
    }

    public function create() {
        $this->bladeVars["title"] = "Nueva Camara";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Camaras", "url" => "/camaras"],
            ["label" => "Nuevo Camara", "active" => true],
        ];
        $this->maintfile = "Camara.CamaraMaint";
        return parent::create();
    }

    public function edit(Request $request, $id) {
        $this->bladeVars["title"] = "Modificar Camara";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Administración"],
            ["label" => "Administración del Módulo"],
            ["label" => "Camaras", "url" => "/camaras"],
            ["label" => "Modificar Camara", "active" => true],
        ];
        $this->maintfile = "Camara.CamaraMaint";
        return parent::edit($request, $id);
    }

    public function show(Request $request, $id) {
        $this->bladeVars["title"] = "Visualizar Camara";
        $this->bladeVars["breadcrumb"] = [
            ["label" => "Administración"],
            ["label" => "Administración del Módulo"],
            ["label" => "Camaras", "url" => "/descriptores"],
            ["label" => "Visualizar Camara", "active" => true],
        ];
        $this->maintfile = "Camara.CamaraMaint";
        return parent::show($request, $id);
    }

    public function destroy($id) {
        $this->successMessage = 'Camara eliminada correctamente.';
        $this->errorMessage = 'La Cámara no pudo eliminarse ya que tiene registros asociados.';
        return parent::destroy($id);
    }

    public function export(Request $request, $type) {
        $this->slfile = "Camara.CamaraSL";
        return parent::export($request, $type);
    }

}
