<?php

namespace SplCompanyOy\LaravelEnumGroup;

use Illuminate\Support\ServiceProvider;
use SplCompanyOy\LaravelEnumGroup\Commands\SkeletonCommand;

class EnumGroupServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/enum_group.php' => config_path('enum_group.php'),
            ], 'config');

//            $this->publishes([
//                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/enum_group'),
//            ], 'views');

//            $migrationFileName = 'create_skeleton_table.php';
//            if (! $this->migrationFileExists($migrationFileName)) {
//                $this->publishes([
//                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
//                ], 'migrations');
//            }

//            $this->commands([
//                SkeletonCommand::class,
//            ]);
        }

//        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'skeleton');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/enum_group.php', 'enum_group');

        $this->app->singleton('enumgroup', function ($app) {
            return new EnumGroupFactory();
        });
    }

//    public static function migrationFileExists(string $migrationFileName): bool
//    {
//        $len = strlen($migrationFileName);
//        foreach (glob(database_path("migrations/*.php")) as $filename) {
//            if ((substr($filename, -$len) === $migrationFileName)) {
//                return true;
//            }
//        }
//
//        return false;
//    }
}
