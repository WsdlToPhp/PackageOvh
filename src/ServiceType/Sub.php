<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Sub ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Sub extends SoapClientBase
{
    /**
     * Method to call the operation originally named subDomainDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SubDomainDel $parameters
     * @return \PayPal\StructType\SubDomainDelResponse|bool
     */
    public function subDomainDel(\PayPal\StructType\SubDomainDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->subDomainDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named subDomainModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SubDomainModify $parameters
     * @return \PayPal\StructType\SubDomainModifyResponse|bool
     */
    public function subDomainModify(\PayPal\StructType\SubDomainModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->subDomainModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named subDomainAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SubDomainAdd $parameters
     * @return \PayPal\StructType\SubDomainAddResponse|bool
     */
    public function subDomainAdd(\PayPal\StructType\SubDomainAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->subDomainAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named subDomainList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SubDomainList $parameters
     * @return \PayPal\StructType\SubDomainListResponse|bool
     */
    public function subDomainList(\PayPal\StructType\SubDomainList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->subDomainList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\SubDomainAddResponse|\PayPal\StructType\SubDomainDelResponse|\PayPal\StructType\SubDomainListResponse|\PayPal\StructType\SubDomainModifyResponse
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
