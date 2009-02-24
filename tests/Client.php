<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once 'TestCase.php';

/**
 * Tests instantiation of the SOAP client
 *
 * @category  Payment
 * @package   Payment_PayPal_SOAP
 * @author    Michael Gauthier <mike@silverorange.com>
 * @copyright 2008 silverorange
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/Payment_PayPal_SOAP
 */
class Client extends Payment_PayPal_SOAP_TestCase
{
    // {{{ testNoUsername()

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNoUsername()
    {
		$options = array(
			'password'  => 'foo',
			'signature' => 'bar'
		);

		$client = new Payment_PayPal_SOAP_Client($options);
    }

    // }}}
    // {{{ testNoPassword()

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNoPassword()
    {
		$options = array(
			'username'  => 'foo',
			'signature' => 'bar'
		);

		$client = new Payment_PayPal_SOAP_Client($options);
    }

    // }}}
    // {{{ testNoCredentials()

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNoCredentials()
    {
		$options = array(
			'username' => 'foo',
			'password' => 'bar'
		);

		$client = new Payment_PayPal_SOAP_Client($options);
    }

    // }}}
    // {{{ testBadMode()

    /**
     * @expectedException Payment_PayPal_SOAP_InvalidModeException
     */
    public function testBadMode()
    {
		$options = array(
			'username'  => 'foo',
			'password'  => 'bar',
			'signature' => 'baz',
            'mode'      => 'test'
		);

		$client = new Payment_PayPal_SOAP_Client($options);
    }

    // }}}
}

?>