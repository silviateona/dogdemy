<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fdbddbb097ecfcacbc74d015019db3b
{
    public static $classMap = array (
        'Zebra_Image' => __DIR__ . '/..' . '/stefangabos/zebra_image/Zebra_Image.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0fdbddbb097ecfcacbc74d015019db3b::$classMap;

        }, null, ClassLoader::class);
    }
}
