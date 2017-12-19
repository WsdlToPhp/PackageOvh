<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Managed ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Managed extends SoapClientBase
{
    /**
     * Method to call the operation originally named managedServicesPartitionQuotaUsed
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesPartitionQuotaUsed $parameters
     * @return \PayPal\StructType\ManagedServicesPartitionQuotaUsedResponse|bool
     */
    public function managedServicesPartitionQuotaUsed(\PayPal\StructType\ManagedServicesPartitionQuotaUsed $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesPartitionQuotaUsed($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesIpAccessChange
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesIpAccessChange $parameters
     * @return \PayPal\StructType\ManagedServicesIpAccessChangeResponse|bool
     */
    public function managedServicesIpAccessChange(\PayPal\StructType\ManagedServicesIpAccessChange $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesIpAccessChange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesSnapshotUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesSnapshotUpdate $parameters
     * @return \PayPal\StructType\ManagedServicesSnapshotUpdateResponse|bool
     */
    public function managedServicesSnapshotUpdate(\PayPal\StructType\ManagedServicesSnapshotUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesSnapshotUpdate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesHostMasterIpGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesHostMasterIpGet $parameters
     * @return \PayPal\StructType\ManagedServicesHostMasterIpGetResponse|bool
     */
    public function managedServicesHostMasterIpGet(\PayPal\StructType\ManagedServicesHostMasterIpGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesHostMasterIpGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesPartitionDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesPartitionDelete $parameters
     * @return \PayPal\StructType\ManagedServicesPartitionDeleteResponse|bool
     */
    public function managedServicesPartitionDelete(\PayPal\StructType\ManagedServicesPartitionDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesPartitionDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * managedServicesPartitionStatusCheck
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesPartitionStatusCheck $parameters
     * @return \PayPal\StructType\ManagedServicesPartitionStatusCheckResponse|bool
     */
    public function managedServicesPartitionStatusCheck(\PayPal\StructType\ManagedServicesPartitionStatusCheck $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesPartitionStatusCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesPartitionCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesPartitionCreate $parameters
     * @return \PayPal\StructType\ManagedServicesPartitionCreateResponse|bool
     */
    public function managedServicesPartitionCreate(\PayPal\StructType\ManagedServicesPartitionCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesPartitionCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesPartitionGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesPartitionGet $parameters
     * @return \PayPal\StructType\ManagedServicesPartitionGetResponse|bool
     */
    public function managedServicesPartitionGet(\PayPal\StructType\ManagedServicesPartitionGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesPartitionGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesPartitionUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesPartitionUpdate $parameters
     * @return \PayPal\StructType\ManagedServicesPartitionUpdateResponse|bool
     */
    public function managedServicesPartitionUpdate(\PayPal\StructType\ManagedServicesPartitionUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesPartitionUpdate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named managedServicesNameUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ManagedServicesNameUpdate $parameters
     * @return \PayPal\StructType\ManagedServicesNameUpdateResponse|bool
     */
    public function managedServicesNameUpdate(\PayPal\StructType\ManagedServicesNameUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->managedServicesNameUpdate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\ManagedServicesHostMasterIpGetResponse|\PayPal\StructType\ManagedServicesIpAccessChangeResponse|\PayPal\StructType\ManagedServicesNameUpdateResponse|\PayPal\StructType\ManagedServicesPartitionCreateResponse|\PayPal\StructType\ManagedServicesPartitionDeleteResponse|\PayPal\StructType\ManagedServicesPartitionGetResponse|\PayPal\StructType\ManagedServicesPartitionQuotaUsedResponse|\PayPal\StructType\ManagedServicesPartitionStatusCheckResponse|\PayPal\StructType\ManagedServicesPartitionUpdateResponse|\PayPal\StructType\ManagedServicesSnapshotUpdateResponse
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
