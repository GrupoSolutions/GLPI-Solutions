<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3f17391f8882737e699390eccd255e7d
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit3f17391f8882737e699390eccd255e7d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3f17391f8882737e699390eccd255e7d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3f17391f8882737e699390eccd255e7d::getInitializer($loader));

        $loader->setApcuPrefix('pAKAofY9Y/gXOedle2pHa');
        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit3f17391f8882737e699390eccd255e7d::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire3f17391f8882737e699390eccd255e7d($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire3f17391f8882737e699390eccd255e7d($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
