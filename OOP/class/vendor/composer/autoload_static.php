<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33aa0c995116ebf1cf913b9543f6b242
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Framework\\Log\\' => 14,
            'Framework\\Database\\' => 19,
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Framework\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/aplus/log/src',
        ),
        'Framework\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/aplus/database/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33aa0c995116ebf1cf913b9543f6b242::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33aa0c995116ebf1cf913b9543f6b242::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33aa0c995116ebf1cf913b9543f6b242::$classMap;

        }, null, ClassLoader::class);
    }
}
