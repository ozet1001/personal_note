<?php
App::uses('TwitterTrend', 'Model');

/**
 * TwitterTrend Test Case
 */
class TwitterTrendTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.twitter_trend'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TwitterTrend = ClassRegistry::init('TwitterTrend');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TwitterTrend);

		parent::tearDown();
	}

}
