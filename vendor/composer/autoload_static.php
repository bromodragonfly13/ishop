<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dabf51485c17910d99e5a88c66a2ed6
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dabf51485c17910d99e5a88c66a2ed6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dabf51485c17910d99e5a88c66a2ed6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
