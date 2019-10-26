<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d26170f48f987ddc4b94aef3ae0de2d
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hht\\example\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hht\\example\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d26170f48f987ddc4b94aef3ae0de2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d26170f48f987ddc4b94aef3ae0de2d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
