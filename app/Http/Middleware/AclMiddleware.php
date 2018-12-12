<?php

namespace App\Http\Middleware;

use Closure;

class AclMiddleware {

    protected $globalPermissions = [
        "" => [""],
        "Eideos\Framework\Controllers\FmwController" => [
            "select",
            "autocomplete",
            "get_model_data",
            "tree_parents_to_root",
            "tree_element_description",
            "tree_element_description",
        ],
        "Eideos\Framework\Controllers\BlockController" => ["free", "check"],
        "Eideos\Framework\Controllers\FileController" => ["destroy", "display", "download", "download_file"],
        "Eideos\Framework\Controllers\UserController" => ["edit_personal_data"],
    ];

    public function handle($request, Closure $next) {
        /*
          if ($request->ajax()) {
          return $next($request);
          }
         */
        list($controller, $action) = get_current_controller_action();
        if (!is_authorized($controller, $action, $this->globalPermissions)) {
            return redirect('home');
        }
        return $next($request);
    }

}
