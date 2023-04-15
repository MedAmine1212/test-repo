<?php

namespace ContainerIo8FzeX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M_T6hMjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M.t6hMj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M.t6hMj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'rep' => ['privates', 'App\\Repository\\TestsRepository', 'getTestsRepositoryService', true],
        ], [
            'mr' => '?',
            'rep' => 'App\\Repository\\TestsRepository',
        ]);
    }
}
