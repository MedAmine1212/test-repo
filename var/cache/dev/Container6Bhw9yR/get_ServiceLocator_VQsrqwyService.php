<?php

namespace Container6Bhw9yR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VQsrqwyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vQsrqwy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vQsrqwy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rep' => ['privates', 'App\\Repository\\TestResultsRepository', 'getTestResultsRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\TestResultsRepository',
        ]);
    }
}
