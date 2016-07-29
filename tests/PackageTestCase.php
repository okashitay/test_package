<?php


class PackageTestCase extends \PHPUnit_Framework_TestCase
{
    /** @var \Illuminate\Container\Container */
    protected $container;

    protected function setUp()
    {
        parent::setUp();
        $this->container = new \Illuminate\Container\Container;
        $this->createApplication();
    }

    protected function createApplication()
    {
    }

}
