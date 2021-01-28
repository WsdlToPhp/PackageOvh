<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Global ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class _Global extends SoapClientBase
{
    /**
     * Method to call the operation originally named globalAccessByNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\GlobalAccessByNic $parameters
     * @return \Ovh\StructType\GlobalAccessByNicResponse|bool
     */
    public function globalAccessByNic(\Ovh\StructType\GlobalAccessByNic $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('globalAccessByNic', array(
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
     * @return \Ovh\StructType\GlobalAccessByNicResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
