<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Ort ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Ort extends SoapClientBase
{
    /**
     * Method to call the operation originally named ortDomainDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrtDomainDel $parameters
     * @return \PayPal\StructType\OrtDomainDelResponse|bool
     */
    public function ortDomainDel(\PayPal\StructType\OrtDomainDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ortDomainDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ortDomainList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrtDomainList $parameters
     * @return \PayPal\StructType\OrtDomainListResponse|bool
     */
    public function ortDomainList(\PayPal\StructType\OrtDomainList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ortDomainList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ortDomainAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrtDomainAdd $parameters
     * @return \PayPal\StructType\OrtDomainAddResponse|bool
     */
    public function ortDomainAdd(\PayPal\StructType\OrtDomainAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ortDomainAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\OrtDomainAddResponse|\PayPal\StructType\OrtDomainDelResponse|\PayPal\StructType\OrtDomainListResponse
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
