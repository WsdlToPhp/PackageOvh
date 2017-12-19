<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\RedirectedEmailAdd $parameters
     * @return \Ovh\StructType\RedirectedEmailAddResponse|bool
     */
    public function redirectedEmailAdd(\Ovh\StructType\RedirectedEmailAdd $parameters)
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
     * @param \Ovh\StructType\RedirectedEmailModify $parameters
     * @return \Ovh\StructType\RedirectedEmailModifyResponse|bool
     */
    public function redirectedEmailModify(\Ovh\StructType\RedirectedEmailModify $parameters)
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
     * @param \Ovh\StructType\RedirectedEmailDel $parameters
     * @return \Ovh\StructType\RedirectedEmailDelResponse|bool
     */
    public function redirectedEmailDel(\Ovh\StructType\RedirectedEmailDel $parameters)
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
     * @param \Ovh\StructType\RedirectedEmailList $parameters
     * @return \Ovh\StructType\RedirectedEmailListResponse|bool
     */
    public function redirectedEmailList(\Ovh\StructType\RedirectedEmailList $parameters)
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
     * @return \Ovh\StructType\RedirectedEmailAddResponse|\Ovh\StructType\RedirectedEmailDelResponse|\Ovh\StructType\RedirectedEmailListResponse|\Ovh\StructType\RedirectedEmailModifyResponse
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
