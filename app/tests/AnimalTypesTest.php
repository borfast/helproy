<?php

class AnimalTypesTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testListReturnsOk()
	{
		$crawler = $this->client->request('GET', '/animaltypes');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

    public function testListContainsRightNumberOfResults()
    {
        $response = $this->action('GET', 'AnimalTypesController@index');

        $view = $response->original;

        $this->assertEquals(5, $view['animal_types']->count());
    }

}
