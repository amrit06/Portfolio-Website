<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita016bd2df992113e83ecf4d2179f197a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita016bd2df992113e83ecf4d2179f197a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita016bd2df992113e83ecf4d2179f197a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
