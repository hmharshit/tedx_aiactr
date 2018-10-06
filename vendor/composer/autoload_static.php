<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf77314fd8013e8a60c7f4b17042e7b8
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf77314fd8013e8a60c7f4b17042e7b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf77314fd8013e8a60c7f4b17042e7b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
