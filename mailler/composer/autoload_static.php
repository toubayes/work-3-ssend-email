<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit846061bac081378c82d1ee8cdbfdd0e5
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit846061bac081378c82d1ee8cdbfdd0e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit846061bac081378c82d1ee8cdbfdd0e5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
