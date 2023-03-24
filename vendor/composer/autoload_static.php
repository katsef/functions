<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa96558b2c8970b1e45e13911a4e7c20
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webazon\\Functions\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webazon\\Functions\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa96558b2c8970b1e45e13911a4e7c20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa96558b2c8970b1e45e13911a4e7c20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa96558b2c8970b1e45e13911a4e7c20::$classMap;

        }, null, ClassLoader::class);
    }
}
