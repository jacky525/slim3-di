<?php
// 參照 https://codeception.com/docs/05-UnitTests

use Psr\Container\ContainerInterface;
use \Slim\Controllers\TestController;

/**
 * Class ExampleTest
 */
class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    /**
     * @var ContainerInterface
     */
    protected $container;
    /**
     * @var TestController
     */
    protected $target;


    /**
     *
     */
    protected function _before()
    {
        $this->container = $this->tester->getContainer();
        $this->target = $this->container->get('TestController');
    }

    /**
     *
     */
    protected function _after()
    {
        $this->container = null;
        $this->target = null;
    }

    // tests
    /**
     *
     */
    public function testSomeFeature()
    {
        $excepted = "hello";
        $this->assertEquals(1,1);
        $this->assertEquals($excepted, $this->target->hello());
    }
}