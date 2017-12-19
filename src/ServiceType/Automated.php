<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\AutomatedMailGetVolumeHistory $parameters
     * @return \Ovh\StructType\AutomatedMailGetVolumeHistoryResponse|bool
     */
    public function automatedMailGetVolumeHistory(\Ovh\StructType\AutomatedMailGetVolumeHistory $parameters)
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
     * @param \Ovh\StructType\AutomatedMailGetTodo $parameters
     * @return \Ovh\StructType\AutomatedMailGetTodoResponse|bool
     */
    public function automatedMailGetTodo(\Ovh\StructType\AutomatedMailGetTodo $parameters)
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
     * @param \Ovh\StructType\AutomatedMailGetErrors $parameters
     * @return \Ovh\StructType\AutomatedMailGetErrorsResponse|bool
     */
    public function automatedMailGetErrors(\Ovh\StructType\AutomatedMailGetErrors $parameters)
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
     * @param \Ovh\StructType\AutomatedMailGetState $parameters
     * @return \Ovh\StructType\AutomatedMailGetStateResponse|bool
     */
    public function automatedMailGetState(\Ovh\StructType\AutomatedMailGetState $parameters)
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
     * @param \Ovh\StructType\AutomatedMailUnlock $parameters
     * @return \Ovh\StructType\AutomatedMailUnlockResponse|bool
     */
    public function automatedMailUnlock(\Ovh\StructType\AutomatedMailUnlock $parameters)
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
     * @param \Ovh\StructType\AutomatedMailLock $parameters
     * @return \Ovh\StructType\AutomatedMailLockResponse|bool
     */
    public function automatedMailLock(\Ovh\StructType\AutomatedMailLock $parameters)
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
     * @param \Ovh\StructType\AutomatedMailReturnSet $parameters
     * @return \Ovh\StructType\AutomatedMailReturnSetResponse|bool
     */
    public function automatedMailReturnSet(\Ovh\StructType\AutomatedMailReturnSet $parameters)
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
     * @param \Ovh\StructType\AutomatedMailFlush $parameters
     * @return \Ovh\StructType\AutomatedMailFlushResponse|bool
     */
    public function automatedMailFlush(\Ovh\StructType\AutomatedMailFlush $parameters)
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
     * @return \Ovh\StructType\AutomatedMailFlushResponse|\Ovh\StructType\AutomatedMailGetErrorsResponse|\Ovh\StructType\AutomatedMailGetStateResponse|\Ovh\StructType\AutomatedMailGetTodoResponse|\Ovh\StructType\AutomatedMailGetVolumeHistoryResponse|\Ovh\StructType\AutomatedMailLockResponse|\Ovh\StructType\AutomatedMailReturnSetResponse|\Ovh\StructType\AutomatedMailUnlockResponse
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
