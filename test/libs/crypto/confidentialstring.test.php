<?php
namespace phpsec;

require_once __DIR__ . "/../../../libs/crypto/confidentialstring.php";

class ConfidentialStringTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Function to test the functionality of confidentialString()
	 */
	public function testConfidentialString()
	{
		$this->assertSame("root        ", confidentialString(':Xc2UiG8XhcomIXnAnP9kJHdU9M7vRz3tbwHG3c7m+hs='));
		$this->assertSame("testing     ", confidentialString(':mg5E85aHITqdpiushhAowntSWnfn5FDYSBGwpsUPewQ='));
	}
}
