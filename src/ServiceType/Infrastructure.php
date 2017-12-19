<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Infrastructure ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Infrastructure extends SoapClientBase
{
    /**
     * Method to call the operation originally named infrastructureReverseModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\InfrastructureReverseModify $parameters
     * @return \Ovh\StructType\InfrastructureReverseModifyResponse|bool
     */
    public function infrastructureReverseModify(\Ovh\StructType\InfrastructureReverseModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->infrastructureReverseModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named infrastructureIpListGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\InfrastructureIpListGet $parameters
     * @return \Ovh\StructType\InfrastructureIpListGetResponse|bool
     */
    public function infrastructureIpListGet(\Ovh\StructType\InfrastructureIpListGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->infrastructureIpListGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\InfrastructureIpListGetResponse|\Ovh\StructType\InfrastructureReverseModifyResponse
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
