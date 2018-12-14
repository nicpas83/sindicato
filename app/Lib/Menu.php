<?php

namespace App\Lib;

use Eideos\Framework\Lib\AbstractMenu;

class Menu extends AbstractMenu {

    protected $menu = [
        "inicio" => [
            "label" => "Inicio",
            "icon" => "home",
            "url" => "/home"
        ],
        "sindicatos" => [
            "label" => "Sindicatos",
            "icon" => "users",
            "controller" => "App\Http\Controllers\SindicatoController",
            "action" => "index",
        ],
        "mutuales" => [
            "label" => "Mutuales",
            "icon" => "hospital",
            "controller" => "App\Http\Controllers\MutualController",
            "action" => "index",
        ],
        "admin" => [
            "label" => "Administración",
            "icon" => "cog",
            "items" => [
                "users" => [
                    "label" => "Usuarios",
                    "controller" => "Eideos\Framework\Controllers\UserController",
                    "action" => "index",
                ],
                "roles" => [
                    "label" => "Roles",
                    "controller" => "Eideos\Framework\Controllers\RoleController",
                    "action" => "index",
                ],
                "rights" => [
                    "label" => "Derechos",
                    "controller" => "Eideos\Framework\Controllers\RightController",
                    "action" => "index",
                ],
                "buttons" => [
                    "label" => "Botones",
                    "controller" => "Eideos\Framework\Controllers\ButtonController",
                    "action" => "index",
                ],
                "blocks" => [
                    "label" => "Bloqueos",
                    "controller" => "Eideos\Framework\Controllers\BlockController",
                    "action" => "index",
                ],
                "audits" => [
                    "label" => "Auditoría",
                    "controller" => "Eideos\Framework\Controllers\AuditController",
                    "action" => "index",
                ],
            ],
        ],
    ];

}
