<?php

namespace Container6Bhw9yR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KQ9CXiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KQ9CXi_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KQ9CXi_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'question' => ['privates', '.errored..service_locator.KQ9CXi_.App\\Entity\\TestQs', NULL, 'Cannot autowire service ".service_locator.KQ9CXi_": it references class "App\\Entity\\TestQs" but no such service exists.'],
        ], [
            'question' => 'App\\Entity\\TestQs',
        ]);
    }
}
