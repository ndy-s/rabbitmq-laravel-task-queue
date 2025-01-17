<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit065497c02ff22718d3a4599dd40e8d79
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib3\\' => 11,
        ),
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'E' => 
        array (
            'Ecommerce\\Shared\\Tests\\' => 23,
            'Ecommerce\\Shared\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib3\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'Ecommerce\\Shared\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Ecommerce\\Shared\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit065497c02ff22718d3a4599dd40e8d79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit065497c02ff22718d3a4599dd40e8d79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit065497c02ff22718d3a4599dd40e8d79::$classMap;

        }, null, ClassLoader::class);
    }
}
