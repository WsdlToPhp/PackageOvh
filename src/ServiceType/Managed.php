<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\ManagedServicesPartitionQuotaUsed $parameters
     * @return \Ovh\StructType\ManagedServicesPartitionQuotaUsedResponse|bool
     */
    public function managedServicesPartitionQuotaUsed(\Ovh\StructType\ManagedServicesPartitionQuotaUsed $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesPartitionQuotaUsed', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesIpAccessChange $parameters
     * @return \Ovh\StructType\ManagedServicesIpAccessChangeResponse|bool
     */
    public function managedServicesIpAccessChange(\Ovh\StructType\ManagedServicesIpAccessChange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesIpAccessChange', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesSnapshotUpdate $parameters
     * @return \Ovh\StructType\ManagedServicesSnapshotUpdateResponse|bool
     */
    public function managedServicesSnapshotUpdate(\Ovh\StructType\ManagedServicesSnapshotUpdate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesSnapshotUpdate', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesHostMasterIpGet $parameters
     * @return \Ovh\StructType\ManagedServicesHostMasterIpGetResponse|bool
     */
    public function managedServicesHostMasterIpGet(\Ovh\StructType\ManagedServicesHostMasterIpGet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesHostMasterIpGet', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesPartitionDelete $parameters
     * @return \Ovh\StructType\ManagedServicesPartitionDeleteResponse|bool
     */
    public function managedServicesPartitionDelete(\Ovh\StructType\ManagedServicesPartitionDelete $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesPartitionDelete', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesPartitionStatusCheck $parameters
     * @return \Ovh\StructType\ManagedServicesPartitionStatusCheckResponse|bool
     */
    public function managedServicesPartitionStatusCheck(\Ovh\StructType\ManagedServicesPartitionStatusCheck $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesPartitionStatusCheck', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesPartitionCreate $parameters
     * @return \Ovh\StructType\ManagedServicesPartitionCreateResponse|bool
     */
    public function managedServicesPartitionCreate(\Ovh\StructType\ManagedServicesPartitionCreate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesPartitionCreate', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesPartitionGet $parameters
     * @return \Ovh\StructType\ManagedServicesPartitionGetResponse|bool
     */
    public function managedServicesPartitionGet(\Ovh\StructType\ManagedServicesPartitionGet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesPartitionGet', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesPartitionUpdate $parameters
     * @return \Ovh\StructType\ManagedServicesPartitionUpdateResponse|bool
     */
    public function managedServicesPartitionUpdate(\Ovh\StructType\ManagedServicesPartitionUpdate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesPartitionUpdate', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\ManagedServicesNameUpdate $parameters
     * @return \Ovh\StructType\ManagedServicesNameUpdateResponse|bool
     */
    public function managedServicesNameUpdate(\Ovh\StructType\ManagedServicesNameUpdate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('managedServicesNameUpdate', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\ManagedServicesHostMasterIpGetResponse|\Ovh\StructType\ManagedServicesIpAccessChangeResponse|\Ovh\StructType\ManagedServicesNameUpdateResponse|\Ovh\StructType\ManagedServicesPartitionCreateResponse|\Ovh\StructType\ManagedServicesPartitionDeleteResponse|\Ovh\StructType\ManagedServicesPartitionGetResponse|\Ovh\StructType\ManagedServicesPartitionQuotaUsedResponse|\Ovh\StructType\ManagedServicesPartitionStatusCheckResponse|\Ovh\StructType\ManagedServicesPartitionUpdateResponse|\Ovh\StructType\ManagedServicesSnapshotUpdateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
