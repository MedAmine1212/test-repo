<?php

namespace ContainerIo8FzeX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__L7u2LeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..l7u2Le' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..l7u2Le'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'test' => ['privates', '.errored..service_locator..l7u2Le.App\\Entity\\Tests', NULL, 'Cannot autowire service ".service_locator..l7u2Le": it references class "App\\Entity\\Tests" but no such service exists.'],
        ], [
            'test' => 'App\\Entity\\Tests',
        ]);
    }
}