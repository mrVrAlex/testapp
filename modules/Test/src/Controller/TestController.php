<?php
/**
 * Created by PhpStorm.
 * User: Shandy
 * Date: 06.05.2016
 * Time: 18:24
 */

namespace Test\Controller;


use Zend\Mvc\Console\Controller\AbstractConsoleController;
use Zend\Mvc\MvcEvent;

class TestController extends AbstractConsoleController
{
    public function indexAction()
    {
        return 'qqqq';
    }
}
