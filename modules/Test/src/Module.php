<?php

namespace Test;

use Zend\Console\Adapter\AdapterInterface;
use Zend\Console\Console;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ConsoleBannerProviderInterface;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module implements ConfigProviderInterface, ConsoleUsageProviderInterface, ConsoleBannerProviderInterface
{
    public function onBootstrap(EventInterface $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $sm = $e->getApplication()->getServiceManager();
        $app = $sm->get('Application');
    }

    public function getConfig()
   {
       return require __DIR__ .'/../config/module.config.php';
   }

    /**
     * This method is defined in ConsoleBannerProviderInterface
     *
     * @param AdapterInterface $console
     *
     * @return null|string
     */
    public function getConsoleBanner(AdapterInterface $console)
    {
        return 'MyModule 0.0.1';
    }

    /**
     * Returns an array or a string containing usage information for this module's Console commands.
     * The method is called with active Zend\Console\Adapter\AdapterInterface that can be used to directly access
     * Console and send output.
     *
     * If the result is a string it will be shown directly in the console window.
     * If the result is an array, its contents will be formatted to console window width. The array must
     * have the following format:
     *
     *     return array(
     *                'Usage information line that should be shown as-is',
     *                'Another line of usage info',
     *
     *                '--parameter'        =>   'A short description of that parameter',
     *                '-another-parameter' =>   'A short description of another parameter',
     *                ...
     *            )
     *
     * @param AdapterInterface $console
     *
     * @return array|string|null
     */
    public function getConsoleUsage(AdapterInterface $console)
    {
        return [
                    'PINs:',
                    'pin:update' => 'Update PINs from remote server',
                    'pin:flush'  => 'Remove all PINs from storage',
                    'You can use shell actions on site entity'
                ];
    }
}