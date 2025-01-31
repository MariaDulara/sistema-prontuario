<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ec5a7dd6743d033fd6fd4a49ad2a26e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ec5a7dd6743d033fd6fd4a49ad2a26e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ec5a7dd6743d033fd6fd4a49ad2a26e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ec5a7dd6743d033fd6fd4a49ad2a26e::$classMap;

        }, null, ClassLoader::class);
    }
}
