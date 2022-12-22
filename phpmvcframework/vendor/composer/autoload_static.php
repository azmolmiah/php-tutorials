<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05e576d738a68c72f6b560ca91f62167
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05e576d738a68c72f6b560ca91f62167::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05e576d738a68c72f6b560ca91f62167::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05e576d738a68c72f6b560ca91f62167::$classMap;

        }, null, ClassLoader::class);
    }
}
