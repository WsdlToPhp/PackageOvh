<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\SubDomainDel $parameters
     * @return \Ovh\StructType\SubDomainDelResponse|bool
     */
    public function subDomainDel(\Ovh\StructType\SubDomainDel $parameters)
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
     * @param \Ovh\StructType\SubDomainModify $parameters
     * @return \Ovh\StructType\SubDomainModifyResponse|bool
     */
    public function subDomainModify(\Ovh\StructType\SubDomainModify $parameters)
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
     * @param \Ovh\StructType\SubDomainAdd $parameters
     * @return \Ovh\StructType\SubDomainAddResponse|bool
     */
    public function subDomainAdd(\Ovh\StructType\SubDomainAdd $parameters)
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
     * @param \Ovh\StructType\SubDomainList $parameters
     * @return \Ovh\StructType\SubDomainListResponse|bool
     */
    public function subDomainList(\Ovh\StructType\SubDomainList $parameters)
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
     * @return \Ovh\StructType\SubDomainAddResponse|\Ovh\StructType\SubDomainDelResponse|\Ovh\StructType\SubDomainListResponse|\Ovh\StructType\SubDomainModifyResponse
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
