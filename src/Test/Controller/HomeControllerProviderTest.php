<?php
namespace My\Project\Main\Controller;

use Silex\Application;


/**
 * @property  someService
 */
class HomeControllerProviderTest extends \PHPUnit_Framework_TestCase
{
    public $homeController;

    public function setUp()
    {
        $app = new Application();
        $this->someService = $this->prophesize('My\Project\Main\Service\SomeService');
        $this->app['SomeService'] = $this->someService->reveal();

        $this->homeController = new HomeControllerProvider($app);
    }

}
