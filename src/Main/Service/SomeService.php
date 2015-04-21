<?php

namespace My\Project\Main\Service;

use Silex\Application;

class SomeService
{

    private $app;
    private $someDao;

    function __construct(Application $app)
    {
        $this->app = $app;
        $this->someDao = $app['SomeDao'];
    }

    public function someMethod() {
        $this->someDao->someQuery();
    }

}