<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Version ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Version extends SoapClientBase
{
    /**
     * Method to call the operation originally named version
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\Version $parameters
     * @return \Ovh\StructType\VersionResponse|bool
     */
    public function version(\Ovh\StructType\Version $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('version', array(
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
     * @return \Ovh\StructType\VersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
