<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94239a59ffe2742857044d218ca0f262
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94239a59ffe2742857044d218ca0f262::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94239a59ffe2742857044d218ca0f262::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94239a59ffe2742857044d218ca0f262::$classMap;

        }, null, ClassLoader::class);
    }
}
