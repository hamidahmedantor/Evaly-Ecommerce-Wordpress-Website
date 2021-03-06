<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit338a965d5d22f17000395e2e207c2c02
{
    public static $files = array (
        '8140d53be6c1fc6b687f36894fed6ba2' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit338a965d5d22f17000395e2e207c2c02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit338a965d5d22f17000395e2e207c2c02::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
