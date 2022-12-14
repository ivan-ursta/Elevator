<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit732615f2240250c6b81d55e6b6e7ef55
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit732615f2240250c6b81d55e6b6e7ef55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit732615f2240250c6b81d55e6b6e7ef55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit732615f2240250c6b81d55e6b6e7ef55::$classMap;

        }, null, ClassLoader::class);
    }
}
