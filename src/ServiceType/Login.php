<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Login ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Login extends SoapClientBase
{
    /**
     * Method to call the operation originally named login
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\Login $parameters
     * @return \Ovh\StructType\LoginResponse|bool
     */
    public function login(\Ovh\StructType\Login $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('login', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\LoginResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
