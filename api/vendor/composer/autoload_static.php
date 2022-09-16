<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef5b1bd459b31fb3efacada28841e2ca
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Utils',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef5b1bd459b31fb3efacada28841e2ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef5b1bd459b31fb3efacada28841e2ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef5b1bd459b31fb3efacada28841e2ca::$classMap;

        }, null, ClassLoader::class);
    }
}
