<?php

use Illuminate\Support\Facades\Artisan;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{

    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
        $this->seed();
    }

    public function tearDown()
    {
        parent::tearDown();
        Artisan::call('migrate:reset');
    }

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

}
