<?php

namespace BecauseCode\Testify;

	class WebDriverTestCase extends PHPUnit_Framework_TestCase
	{
		protected $webDriver;

		public function setUp()
		{
			$capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
			$this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
		} //setup

		public function tearDown()
		{
			$this->webDriver->close();
		} //tearDown

	} //WebDriverTestCase