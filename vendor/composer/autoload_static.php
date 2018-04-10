<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32244f34b472d81effaccd2695ad9ead
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thumb\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thumb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Thumb',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32244f34b472d81effaccd2695ad9ead::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32244f34b472d81effaccd2695ad9ead::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}