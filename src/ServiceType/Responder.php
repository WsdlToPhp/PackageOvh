<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\ResponderEmailList $parameters
     * @return \Ovh\StructType\ResponderEmailListResponse|bool
     */
    public function responderEmailList(\Ovh\StructType\ResponderEmailList $parameters)
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
     * @param \Ovh\StructType\ResponderEmailInfo $parameters
     * @return \Ovh\StructType\ResponderEmailInfoResponse|bool
     */
    public function responderEmailInfo(\Ovh\StructType\ResponderEmailInfo $parameters)
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
     * @param \Ovh\StructType\ResponderEmailDel $parameters
     * @return \Ovh\StructType\ResponderEmailDelResponse|bool
     */
    public function responderEmailDel(\Ovh\StructType\ResponderEmailDel $parameters)
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
     * @param \Ovh\StructType\ResponderEmailModify $parameters
     * @return \Ovh\StructType\ResponderEmailModifyResponse|bool
     */
    public function responderEmailModify(\Ovh\StructType\ResponderEmailModify $parameters)
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
     * @param \Ovh\StructType\ResponderEmailAdd $parameters
     * @return \Ovh\StructType\ResponderEmailAddResponse|bool
     */
    public function responderEmailAdd(\Ovh\StructType\ResponderEmailAdd $parameters)
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
     * @return \Ovh\StructType\ResponderEmailAddResponse|\Ovh\StructType\ResponderEmailDelResponse|\Ovh\StructType\ResponderEmailInfoResponse|\Ovh\StructType\ResponderEmailListResponse|\Ovh\StructType\ResponderEmailModifyResponse
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
