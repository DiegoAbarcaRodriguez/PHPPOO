<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf71a8a77f4804bf9a9400c9a9adf1997
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf71a8a77f4804bf9a9400c9a9adf1997::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf71a8a77f4804bf9a9400c9a9adf1997::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf71a8a77f4804bf9a9400c9a9adf1997::$classMap;

        }, null, ClassLoader::class);
    }
}
