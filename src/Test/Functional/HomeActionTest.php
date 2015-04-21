<?php

namespace My\Project\Test\Functional;

class HomeActionTest extends BaseWebTestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    public function test_home_page_response_OK()
    {
        $this->client->request('GET', '/home');

        $response = $this->client->getResponse();
        $this->assertTrue($response->isOk());
    }


}