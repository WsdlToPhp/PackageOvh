<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Redirected ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Redirected extends SoapClientBase
{
    /**
     * Method to call the operation originally named redirectedEmailAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\RedirectedEmailAdd $parameters
     * @return \PayPal\StructType\RedirectedEmailAddResponse|bool
     */
    public function redirectedEmailAdd(\PayPal\StructType\RedirectedEmailAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->redirectedEmailAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named redirectedEmailModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\RedirectedEmailModify $parameters
     * @return \PayPal\StructType\RedirectedEmailModifyResponse|bool
     */
    public function redirectedEmailModify(\PayPal\StructType\RedirectedEmailModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->redirectedEmailModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named redirectedEmailDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\RedirectedEmailDel $parameters
     * @return \PayPal\StructType\RedirectedEmailDelResponse|bool
     */
    public function redirectedEmailDel(\PayPal\StructType\RedirectedEmailDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->redirectedEmailDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named redirectedEmailList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\RedirectedEmailList $parameters
     * @return \PayPal\StructType\RedirectedEmailListResponse|bool
     */
    public function redirectedEmailList(\PayPal\StructType\RedirectedEmailList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->redirectedEmailList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\RedirectedEmailAddResponse|\PayPal\StructType\RedirectedEmailDelResponse|\PayPal\StructType\RedirectedEmailListResponse|\PayPal\StructType\RedirectedEmailModifyResponse
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
