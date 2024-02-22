<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b4c8f50129d287dffb9c3ffa4a3916b
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controllers\\UserController' => __DIR__ . '/../..' . '/controller/UserController.php',
        'Models\\Model' => __DIR__ . '/../..' . '/Models/Model.php',
        'Models\\UserModel' => __DIR__ . '/../..' . '/Models/UserModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4b4c8f50129d287dffb9c3ffa4a3916b::$classMap;

        }, null, ClassLoader::class);
    }
}
