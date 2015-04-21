<?php

namespace My\Project\Main\Service;

class SomeServiceTest extends \PHPUnit_Framework_TestCase {

    private $app;
    private $someService;

    public function setUp()
    {
        $this->app = $this->initApp();

        $this->someService = $this->app['SomeService'];
    }

    public function test_for_some_method() {
        // ...
    }
}
