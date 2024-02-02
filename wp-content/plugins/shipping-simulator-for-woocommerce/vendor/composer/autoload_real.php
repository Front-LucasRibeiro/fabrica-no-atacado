<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaaa1f85077fd5be577b3fe58d01a6420
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitaaa1f85077fd5be577b3fe58d01a6420', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaaa1f85077fd5be577b3fe58d01a6420', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaaa1f85077fd5be577b3fe58d01a6420::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}