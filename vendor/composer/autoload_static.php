<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5d9f22096259cf08eaabb0a1d6d83d8
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xuanvinh\\Contact\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xuanvinh\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita5d9f22096259cf08eaabb0a1d6d83d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5d9f22096259cf08eaabb0a1d6d83d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5d9f22096259cf08eaabb0a1d6d83d8::$classMap;

        }, null, ClassLoader::class);
    }
}
