<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74761013d2da9450459d9c3cdb963a96
{
    public static $files = array (
        '38f842e183e97dc4c207f1c18a9daff4' => __DIR__ . '/../..' . '/../../../UIComponent/UserInterfaceHook/SrLearningProgressReset/vendor/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\SrLearningProgressResetCron\\' => 41,
            'srag\\LibrariesNamespaceChanger\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\SrLearningProgressResetCron\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
    );

    public static $classMap = array (
        'ilSrLearningProgressResetCronPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrLearningProgressResetCronPlugin.php',
        'srag\\LibrariesNamespaceChanger\\GeneratePluginPhpAndXml' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/GeneratePluginPhpAndXml.php',
        'srag\\LibrariesNamespaceChanger\\GeneratePluginReadme' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/GeneratePluginReadme.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\UpdatePluginReadme' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/UpdatePluginReadme.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74761013d2da9450459d9c3cdb963a96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74761013d2da9450459d9c3cdb963a96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74761013d2da9450459d9c3cdb963a96::$classMap;

        }, null, ClassLoader::class);
    }
}
