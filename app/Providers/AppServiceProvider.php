<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Schema::defaultStringLength(191);
        /*
         * php implode() function.
         *
         * Usage: @implode_file_extensions($delimiter, $array)
         */
        Blade::directive('implode_file_extensions', function ($argumentString) {
            list($delimiter, $array) = $this->getArguments($argumentString);
            return "<?php echo '.' . implode({$delimiter}, {$array}); ?>";
        });
        /*
         * php get_list_field_name() function.
         *
         * Usage: @get_list_field_name($delimiter, $array)
         */
        Blade::directive('get_list_field_name', function ($model, $fieldname, $popup = false) {
            $tablefieldname = get_list_field_name($model, $fieldname, $popup);
            return "<?php echo {$tablefieldname} ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    protected function getArguments($argumentString) {
        return explode(', ', str_replace(['(', ')'], '', $argumentString));
    }

}
