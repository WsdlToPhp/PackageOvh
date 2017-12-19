<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Overquota ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Overquota extends SoapClientBase
{
    /**
     * Method to call the operation originally named overquotaInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\OverquotaInfo $parameters
     * @return \Ovh\StructType\OverquotaInfoResponse|bool
     */
    public function overquotaInfo(\Ovh\StructType\OverquotaInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->overquotaInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\OverquotaInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
