<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03ed8bae6fca107242dd4d10b6495be7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03ed8bae6fca107242dd4d10b6495be7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03ed8bae6fca107242dd4d10b6495be7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
