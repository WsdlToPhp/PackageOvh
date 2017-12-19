<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Responder ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Responder extends SoapClientBase
{
    /**
     * Method to call the operation originally named responderEmailList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ResponderEmailList $parameters
     * @return \PayPal\StructType\ResponderEmailListResponse|bool
     */
    public function responderEmailList(\PayPal\StructType\ResponderEmailList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->responderEmailList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ResponderEmailInfo $parameters
     * @return \PayPal\StructType\ResponderEmailInfoResponse|bool
     */
    public function responderEmailInfo(\PayPal\StructType\ResponderEmailInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->responderEmailInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ResponderEmailDel $parameters
     * @return \PayPal\StructType\ResponderEmailDelResponse|bool
     */
    public function responderEmailDel(\PayPal\StructType\ResponderEmailDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->responderEmailDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ResponderEmailModify $parameters
     * @return \PayPal\StructType\ResponderEmailModifyResponse|bool
     */
    public function responderEmailModify(\PayPal\StructType\ResponderEmailModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->responderEmailModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ResponderEmailAdd $parameters
     * @return \PayPal\StructType\ResponderEmailAddResponse|bool
     */
    public function responderEmailAdd(\PayPal\StructType\ResponderEmailAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->responderEmailAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\ResponderEmailAddResponse|\PayPal\StructType\ResponderEmailDelResponse|\PayPal\StructType\ResponderEmailInfoResponse|\PayPal\StructType\ResponderEmailListResponse|\PayPal\StructType\ResponderEmailModifyResponse
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
