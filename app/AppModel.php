<?php

namespace App;

use Eideos\Framework\FmwModel;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

class AppModel extends FmwModel implements Auditable {

    use \OwenIt\Auditing\Auditable;

    // NOTA: Setear variable $auditInclude en cada MODELO en caso de que no se quiera auditar todo.
    // definir los campos de la base auditables en el array.
    //protected $auditInclude = [];

    public function getDependentRelations() {
        return ($this->dependentRelations ?? []);
    }

    public static function boot() {

        static::creating(function($model) {
            if (\Schema::hasColumn($model->getTable(), "created_by")) {
                $model->created_by = Auth::user()->id ?? null;
            }
        });
        static::saving(function($model) {
            if (\Schema::hasColumn($model->getTable(), "updated_by")) {
                $model->updated_by = Auth::user()->id ?? null;
            }
        });
        static::deleting(function($model) {
            $relations = $model->getDependentRelations();
            foreach ($relations as $relation) {
                if (isset($model->$relation) && $model->$relation()->count() > 0) {
                    return false;
                }
            }
        });
        parent::boot();
    }

}
