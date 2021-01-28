<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Logout ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Logout extends SoapClientBase
{
    /**
     * Method to call the operation originally named logout
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\Logout $parameters
     * @return \Ovh\StructType\LogoutResponse|bool
     */
    public function logout(\Ovh\StructType\Logout $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('logout', array(
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
     * @return \Ovh\StructType\LogoutResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
