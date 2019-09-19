<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd004df592575723583291eb28df99696
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TarlanPayments\\Payments\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TarlanPayments\\Payments\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'TarlanPayments\\Payments\\Facades\\TarlanPay' => __DIR__ . '/../..' . '/src/Facades/TarlanPay.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd004df592575723583291eb28df99696::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd004df592575723583291eb28df99696::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd004df592575723583291eb28df99696::$classMap;

        }, null, ClassLoader::class);
    }
}