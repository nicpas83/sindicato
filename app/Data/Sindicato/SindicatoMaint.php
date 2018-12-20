<?php

/* GENERADO AUTOMATICAMENTE */

namespace App\Data;

use Eideos\Framework\Lib\AbstractData;

class SindicatoMaint extends AbstractData {

protected $data = array (
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'data' => 
    array (
        'institucional' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'nombre',
                            'label' => 'Nombre o Sindicato',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'tipo_actividad',
                            'label' => 'Tipo Actividad',
                            'presentation' => 'tipo_actividad',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'cuit',
                            'label' => 'CUIT',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'legajo',
                            'label' => 'Legajo',
                            'presentation' => 'text',
                            'cols' => 4,
                        ),
                        4 => 
                        array (
                            'name' => 'fecha_constitucion',
                            'label' => 'Fecha Constitución',
                            'presentation' => 'date',
                            'cols' => 4,
                        ),
                        5 => 
                        array (
                            'name' => 'cuota_sindical',
                            'label' => 'Cuota Sindical',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        6 => 
                        array (
                            'name' => 'empleador_tipo',
                            'label' => 'Tipo de Empleador',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        7 => 
                        array (
                            'name' => 'obra_social',
                            'label' => 'Obra Social',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'Datos Principales',
                ),
                1 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'registro',
                            'label' => 'Registro',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'registro_nro',
                            'label' => 'Número',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'resolucion',
                            'label' => 'Resolución',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'resolucion_fecha',
                            'label' => 'Fecha',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        4 => 
                        array (
                            'name' => 'resolucion_tipo',
                            'label' => 'Resolución Tipo',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        5 => 
                        array (
                            'name' => 'boletin_oficial',
                            'label' => 'Boletín Oficial',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'Registo',
                ),
                2 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'grado',
                            'label' => 'Grado',
                            'presentation' => 'grado_sindicato',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'estado',
                            'label' => 'Estado',
                            'presentation' => 'estado_sindicato',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'conciliaciones',
                            'label' => 'Conciliaciones',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'legalizacion',
                            'label' => 'Legalizacion',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                    ),
                    'label' => 'Estado',
                ),
                3 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'dn_designante',
                            'label' => 'Designante',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'dn_nombre',
                            'label' => 'Nombre',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'dn_cuit',
                            'label' => 'CUIT',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'dn_nro_doc',
                            'label' => 'Nro Doc',
                            'presentation' => 'int',
                            'actions' => 'A|E',
                            'cols' => 3,
                        ),
                        4 => 
                        array (
                            'name' => 'dn_sexo',
                            'label' => 'Sexo',
                            'presentation' => 'sexo',
                            'actions' => 'A|E',
                            'cols' => 3,
                        ),
                        5 => 
                        array (
                            'name' => 'dn_fecha_nac',
                            'label' => 'Fecha Nac.',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 3,
                        ),
                        6 => 
                        array (
                            'name' => 'dn_fecha_venc',
                            'label' => 'Fecha Venc.',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 3,
                        ),
                    ),
                    'label' => 'Delegado Normalizador',
                ),
                4 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'posicion_politica',
                            'label' => 'Posición Política',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'oposicion_politica',
                            'label' => 'Oposición Política',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                    ),
                    'label' => 'Lineas Políticas',
                ),
            ),
            'id' => 'institucional',
            'label' => 'Institucional',
        ),
        'general' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'telefono',
                            'label' => 'Teléfono',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'email_principal',
                            'label' => 'Email Principal',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'email_secundario',
                            'label' => 'Email Secundario',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'pagina_web',
                            'label' => 'Página WEB',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        4 => 
                        array (
                            'name' => 'redes_sociales',
                            'label' => 'Redes Sociales',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        5 => 
                        array (
                            'name' => 'otros_contactos',
                            'label' => 'Otros',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'General',
                ),
                1 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'domicilio_real',
                            'label' => 'Domicilio Real',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'domicilio_legal',
                            'label' => 'Domicilio Legal',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'provincia',
                            'label' => 'Provincia',
                            'presentation' => 'provincias',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'localidad',
                            'label' => 'Localidad',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 6,
                        ),
                    ),
                    'label' => 'Ubicación',
                ),
            ),
            'id' => 'general',
            'label' => 'Contacto',
        ),
        'otros_datos' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'fortalezas',
                            'label' => 'Fortalezas',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 12,
                        ),
                        1 => 
                        array (
                            'name' => 'debilidades',
                            'label' => 'Debilidades',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 12,
                        ),
                    ),
                    'label' => 'Fortalezas y Debilidades',
                ),
                1 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'indicador_gremial',
                            'label' => 'Indicadores',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'rows' => 3,
                            'cols' => 12,
                        ),
                    ),
                    'label' => 'Indicador de Representación Gremial',
                ),
                2 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'dia_gremio',
                            'label' => 'Día del Gremio',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'elecciones',
                            'label' => 'Elecciones',
                            'presentation' => 'date',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'mandato_actual',
                            'label' => 'Mandato',
                            'presentation' => 'text',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        3 => 
                        array (
                            'name' => 'cupo_femenino',
                            'label' => 'Cupo Femenino',
                            'presentation' => 'int',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'General',
                ),
            ),
            'id' => 'otros_datos',
            'label' => 'Otros datos',
        ),
        'mutuales' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'nombre',
                            'label' => 'Nombre',
                            'presentation' => 'text',
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Mutuales',
                    'popup' => true,
                    'model' => 'SindicatoMutual',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'mutuales',
            'label' => 'Mutuales',
        ),
        'estatutos_aprobados' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'resolucion',
                            'label' => 'Resolución',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'fecha',
                            'label' => 'Fecha',
                            'presentation' => 'date',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'tipo',
                            'label' => 'Tipo',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'publicacion',
                            'label' => 'Publicación B.O.',
                            'presentation' => 'date',
                            'cols' => 6,
                        ),
                        4 => 
                        array (
                            'name' => 'actualizacion',
                            'label' => 'Actualizacion',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Estatutos',
                    'popup' => true,
                    'model' => 'SindicatoEstatuto',
                    'orderby' => 'Estatuto.fecha DESC',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'estatutos_aprobados',
            'label' => 'Estatutos Aprobados',
        ),
        'adhesiones' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'nombre',
                            'label' => 'Nombre',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'legajo',
                            'label' => 'Legajo',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'grado',
                            'label' => 'Grado',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Adhesiones',
                    'popup' => true,
                    'model' => 'SindicatoAdhesion',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'adhesiones',
            'label' => 'Adhesiones',
        ),
        'comision' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'nombre',
                            'label' => 'Nombre',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'apellido',
                            'label' => 'Apellido',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'cargo',
                            'label' => 'Cargo',
                            'presentation' => 'cargos_sindicato',
                            'cols' => 6,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Autoridades',
                    'popup' => true,
                    'model' => 'SindicatoAutoridad',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'comision',
            'label' => 'Comisión Directiva',
        ),
        'filiales' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'provincia',
                            'label' => 'Provincia',
                            'presentation' => 'provincias',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'localidad',
                            'label' => 'Localidad',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'referente',
                            'label' => 'Referente',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        3 => 
                        array (
                            'name' => 'telefono',
                            'label' => 'Telefono',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        4 => 
                        array (
                            'name' => 'direccion',
                            'label' => 'Direccion',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        5 => 
                        array (
                            'name' => 'email',
                            'label' => 'Email',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        6 => 
                        array (
                            'name' => 'web',
                            'label' => 'Web',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Filiales',
                    'popup' => true,
                    'model' => 'SindicatoFilial',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'filiales',
            'label' => 'Filiales',
        ),
        'afiliados' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'q_afiliados',
                            'label' => 'Cantidad Afiliados',
                            'presentation' => 'int',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        1 => 
                        array (
                            'name' => 'salario_minimo',
                            'label' => 'Salario Mínimo',
                            'presentation' => 'money',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                        2 => 
                        array (
                            'name' => 'salario_maximo',
                            'label' => 'Salario Máximo',
                            'presentation' => 'money',
                            'actions' => 'A|E',
                            'cols' => 4,
                        ),
                    ),
                    'label' => 'General',
                ),
                1 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'categoria',
                            'label' => 'Categoria',
                            'presentation' => 'categorias_prestacion',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'prestacion',
                            'label' => 'Prestación',
                            'presentation' => 'textarea',
                            'cols' => 6,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Servicios o Prestaciones',
                    'popup' => true,
                    'model' => 'SindicatoPrestacion',
                    'type' => 'tablepopup',
                ),
                2 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'beneficio',
                            'label' => 'Beneficio',
                            'presentation' => 'text',
                            'cols' => 12,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Beneficios',
                    'popup' => true,
                    'model' => 'SindicatoBeneficio',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'afiliados',
            'label' => 'Afiliados/Empleados',
        ),
        'paritarias' => 
        array (
            'type' => 'tab',
            'blocks' => 
            array (
                0 => 
                array (
                    'type' => 'fieldset',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'acuerdo_salarial',
                            'label' => 'Acuerdos Salariales',
                            'presentation' => 'textarea',
                            'actions' => 'A|E',
                            'cols' => 12,
                        ),
                    ),
                ),
                1 => 
                array (
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'rubro',
                            'label' => 'Rubro',
                            'presentation' => 'text',
                            'cols' => 6,
                        ),
                        1 => 
                        array (
                            'name' => 'fecha',
                            'label' => 'Fecha',
                            'presentation' => 'date',
                            'cols' => 6,
                        ),
                        2 => 
                        array (
                            'name' => 'detalle',
                            'label' => 'Detalle',
                            'presentation' => 'text',
                            'cols' => 12,
                        ),
                    ),
                    'paginate' => true,
                    'label' => 'Trayectoria de Paritarias',
                    'popup' => true,
                    'model' => 'SindicatoParitaria',
                    'type' => 'tablepopup',
                ),
            ),
            'id' => 'paritarias',
            'label' => 'Paritarias',
        ),
    ),
);

}
