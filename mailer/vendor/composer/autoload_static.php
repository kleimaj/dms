<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1ed06260713ca09d9a5e39ac5647fb7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1ed06260713ca09d9a5e39ac5647fb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1ed06260713ca09d9a5e39ac5647fb7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1ed06260713ca09d9a5e39ac5647fb7::$classMap;

        }, null, ClassLoader::class);
    }
}
