<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit282ac18ea9eeec87e9a8dd4c0113d133
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amtech\\Market\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amtech\\Market\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit282ac18ea9eeec87e9a8dd4c0113d133::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit282ac18ea9eeec87e9a8dd4c0113d133::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit282ac18ea9eeec87e9a8dd4c0113d133::$classMap;

        }, null, ClassLoader::class);
    }
}
