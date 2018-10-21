<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ec0f8a5fef4bec92642253bbd1fb7e3
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'ClanCats\\Hydrahon\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ClanCats\\Hydrahon\\' => 
        array (
            0 => __DIR__ . '/..' . '/clancats/hydrahon/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ec0f8a5fef4bec92642253bbd1fb7e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ec0f8a5fef4bec92642253bbd1fb7e3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}