<?php

namespace App\Exports;

use Eideos\Framework\Lib\Export;

class SindicatoExport extends Export {

    public function map($modelBuilder): array {
        return [
            $modelBuilder->id,
            $modelBuilder->created_at,
            $modelBuilder->user->telefono->numero,
            $modelBuilder->user_id,
            $modelBuilder->ip_address,
            $modelBuilder->event,
            $modelBuilder->auditable_type,
            $modelBuilder->auditable_id,
        ];
    }

    public function headings(): array {
        return [
            '#',
            'Fecha',
            'Usuario',
            'Usuario ID',
            'IP',
            'Evento',
            'Modelo',
            'Modelo ID',
        ];
    }

}
