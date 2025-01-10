<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78babd2777eb4d1a2154468f2bef0b8b
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit78babd2777eb4d1a2154468f2bef0b8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78babd2777eb4d1a2154468f2bef0b8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78babd2777eb4d1a2154468f2bef0b8b::$classMap;

        }, null, ClassLoader::class);
    }
}
