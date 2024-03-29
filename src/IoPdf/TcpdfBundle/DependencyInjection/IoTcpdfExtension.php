<?php

namespace IoPdf\TcpdfBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class IoTcpdfExtension extends Extension
{

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        // this line is the key
        $this->bindParameter($container, 'io_tcpdf', $config);


//        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }

     /**
     * Set the given parameters to the given container
     * @param ContainerBuilder $container
     * @param string $name
     * @param mixed $value
     */
    private function bindParameter(ContainerBuilder $container, $name, $value)
    {
        if( is_array($value) )
        {

            foreach( $value as $index => $val )
            {
                $this->bindParameter($container, $name.'.'.$index, $val);
            }
            $container->setParameter($name, $value);
        }
        else
        {
            $container->setParameter($name, $value);
        }
    }

}
