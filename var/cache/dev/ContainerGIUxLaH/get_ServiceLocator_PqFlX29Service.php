<?php

namespace ContainerGIUxLaH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PqFlX29Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PqFlX29' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PqFlX29'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'borrowedbookRepository' => ['privates', 'App\\Repository\\BorrowedbookRepository', 'getBorrowedbookRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'borrowedbookRepository' => 'App\\Repository\\BorrowedbookRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}