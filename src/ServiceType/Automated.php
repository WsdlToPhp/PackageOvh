<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Automated ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Automated extends SoapClientBase
{
    /**
     * Method to call the operation originally named automatedMailGetVolumeHistory
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailGetVolumeHistory $parameters
     * @return \PayPal\StructType\AutomatedMailGetVolumeHistoryResponse|bool
     */
    public function automatedMailGetVolumeHistory(\PayPal\StructType\AutomatedMailGetVolumeHistory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailGetVolumeHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named automatedMailGetTodo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailGetTodo $parameters
     * @return \PayPal\StructType\AutomatedMailGetTodoResponse|bool
     */
    public function automatedMailGetTodo(\PayPal\StructType\AutomatedMailGetTodo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailGetTodo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named automatedMailGetErrors
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailGetErrors $parameters
     * @return \PayPal\StructType\AutomatedMailGetErrorsResponse|bool
     */
    public function automatedMailGetErrors(\PayPal\StructType\AutomatedMailGetErrors $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailGetErrors($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named automatedMailGetState
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailGetState $parameters
     * @return \PayPal\StructType\AutomatedMailGetStateResponse|bool
     */
    public function automatedMailGetState(\PayPal\StructType\AutomatedMailGetState $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailGetState($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named automatedMailUnlock
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailUnlock $parameters
     * @return \PayPal\StructType\AutomatedMailUnlockResponse|bool
     */
    public function automatedMailUnlock(\PayPal\StructType\AutomatedMailUnlock $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailUnlock($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named automatedMailLock
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailLock $parameters
     * @return \PayPal\StructType\AutomatedMailLockResponse|bool
     */
    public function automatedMailLock(\PayPal\StructType\AutomatedMailLock $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailLock($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named automatedMailReturnSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailReturnSet $parameters
     * @return \PayPal\StructType\AutomatedMailReturnSetResponse|bool
     */
    public function automatedMailReturnSet(\PayPal\StructType\AutomatedMailReturnSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailReturnSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named automatedMailFlush
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AutomatedMailFlush $parameters
     * @return \PayPal\StructType\AutomatedMailFlushResponse|bool
     */
    public function automatedMailFlush(\PayPal\StructType\AutomatedMailFlush $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->automatedMailFlush($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\AutomatedMailFlushResponse|\PayPal\StructType\AutomatedMailGetErrorsResponse|\PayPal\StructType\AutomatedMailGetStateResponse|\PayPal\StructType\AutomatedMailGetTodoResponse|\PayPal\StructType\AutomatedMailGetVolumeHistoryResponse|\PayPal\StructType\AutomatedMailLockResponse|\PayPal\StructType\AutomatedMailReturnSetResponse|\PayPal\StructType\AutomatedMailUnlockResponse
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
