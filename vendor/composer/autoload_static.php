<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit333ca995028173281dca551802734f74
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Empresa\\App\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Empresa\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit333ca995028173281dca551802734f74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit333ca995028173281dca551802734f74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit333ca995028173281dca551802734f74::$classMap;

        }, null, ClassLoader::class);
    }
}