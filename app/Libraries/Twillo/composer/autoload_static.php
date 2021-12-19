<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita947f53ad57c6f014ce5715f73042109
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita947f53ad57c6f014ce5715f73042109::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita947f53ad57c6f014ce5715f73042109::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita947f53ad57c6f014ce5715f73042109::$classMap;

        }, null, ClassLoader::class);
    }
}
