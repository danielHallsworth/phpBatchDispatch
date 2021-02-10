<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit534f07be8f78062807d7375eb69f6bc9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit534f07be8f78062807d7375eb69f6bc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit534f07be8f78062807d7375eb69f6bc9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit534f07be8f78062807d7375eb69f6bc9::$classMap;

        }, null, ClassLoader::class);
    }
}
