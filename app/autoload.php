<?php

use Symfony\Component\ClassLoader\UniversalClassLoader;
use Doctrine\Common\Annotations\AnnotationRegistry;


$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    //'Io'                                => __DIR__.'/../vendor/bundles',
    'Assetic'                           => __DIR__.'/../vendor/assetic/src',
    'JMS'                               => __DIR__.'/../vendor/bundles',
    'Monolog'                           => __DIR__.'/../vendor/monolog/src',
    'Metadata'                          => __DIR__.'/../vendor/metadata/src',
    'FOS'                               => __DIR__.'/../vendor/bundles',
    'Behat\Behat'                       => __DIR__.'/../vendor/behat/behat/src',
    'Behat\BehatBundle'                 => __DIR__.'/../vendor/bundles',
    'Behat\CommonContext'               => __DIR__.'/../vendor/behat/CommonContexts',
    'Behat\Gherkin'                     => __DIR__.'/../vendor/behat/gherkin/src',
    'Behat\Mink'                        => __DIR__.'/../vendor/behat/mink/src',
    'Behat\MinkBundle'                  => __DIR__.'/../vendor/bundles',
    'Doctrine'                          => __DIR__.'/../vendor/doctrine/lib',
    'Doctrine\\Common'                  => __DIR__.'/../vendor/doctrine-common/lib',
    'Doctrine\\Common\\DataFixtures'    => __DIR__.'/../vendor/doctrine-fixtures/lib',
    'Doctrine\\DBAL'                    => __DIR__.'/../vendor/doctrine-dbal/lib',
    'Doctrine\\DBAL\\Migrations'        => __DIR__.'/../vendor/doctrine-migrations/lib',
    'Sensio'                            => __DIR__.'/../vendor/bundles',
    'Symfony'                           => array(__DIR__.'/../vendor/symfony/src', __DIR__.'/../vendor/bundles'),
    'Ruian' => __DIR__.'/../vendor/bundles',
));
$loader->registerPrefixes(array(
    'Twig_Extensions_' => __DIR__.'/../vendor/twig-extensions/lib',
    'Twig_'            => __DIR__.'/../vendor/twig/lib',
));

// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../vendor/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';

    $loader->registerPrefixFallbacks(array(__DIR__.'/../vendor/symfony/src/Symfony/Component/Locale/Resources/stubs'));
}

$loader->registerNamespaceFallbacks(array(
    __DIR__.'/../src',
));
$loader->register();

AnnotationRegistry::registerLoader(function($class) use ($loader) {
    $loader->loadClass($class);
    return class_exists($class, false);
});
AnnotationRegistry::registerFile(__DIR__.'/../vendor/doctrine/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');

// Swiftmailer needs a special autoloader to allow
// the lazy loading of the init file (which is expensive)
require_once __DIR__.'/../vendor/swiftmailer/lib/classes/Swift.php';
Swift::registerAutoload(__DIR__.'/../vendor/swiftmailer/lib/swift_init.php');
require  __DIR__.'/../vendor/lessphp/lessc.inc.php';

require_once __DIR__.'/../vendor/tcpdf/tcpdf.php';
