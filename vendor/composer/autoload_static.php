<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1be616768457e7806b45012af3266eae
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'astroselling\\Jupiter\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'astroselling\\Jupiter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1be616768457e7806b45012af3266eae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1be616768457e7806b45012af3266eae::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
