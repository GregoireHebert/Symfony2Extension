<?php

namespace Behat\Sf2DemoBundle\Features\Context;

use Behat\Behat\Context\Context;
use Behat\Sf2DemoBundle\Service\FooService;

class AutowiringContext implements Context
{
    /**
     * @var FooService
     */
    private $fooService;

    /**
     * @var null|string
     */
    private $result;

    /**
     * @param FooService $fooService
     */
    public function __construct(FooService $fooService)
    {
        $this->fooService = $fooService;
    }

    /**
     * @Given I have a fooService instance
     */
    public function iHaveAFooServiceInstance()
    {
        \PHPUnit_Framework_Assert::assertNotNull($this->fooService);
    }

    /**
     * @Then I call a public method from it
     */
    public function iCallAPublicMethodFromIt()
    {
        $this->result = $this->fooService->getBar();
    }

    /**
     * @Then I should have a valid result
     */
    public function iShouldHaveAValidResult()
    {
        \PHPUnit_Framework_Assert::assertNotNull($this->result);
    }
}
