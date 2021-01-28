<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Domain ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Domain extends SoapClientBase
{
    /**
     * Method to call the operation originally named domainHostUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainHostUpdate $parameters
     * @return \Ovh\StructType\DomainHostUpdateResponse|bool
     */
    public function domainHostUpdate(\Ovh\StructType\DomainHostUpdate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainHostUpdate', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainUnlock
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainUnlock $parameters
     * @return \Ovh\StructType\DomainUnlockResponse|bool
     */
    public function domainUnlock(\Ovh\StructType\DomainUnlock $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainUnlock', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainWhoisObfuscatorSetAll
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainWhoisObfuscatorSetAll $parameters
     * @return \Ovh\StructType\DomainWhoisObfuscatorSetAllResponse|bool
     */
    public function domainWhoisObfuscatorSetAll(\Ovh\StructType\DomainWhoisObfuscatorSetAll $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainWhoisObfuscatorSetAll', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainList $parameters
     * @return \Ovh\StructType\DomainListResponse|bool
     */
    public function domainList(\Ovh\StructType\DomainList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainWhoisObfuscatorInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainWhoisObfuscatorInfo $parameters
     * @return \Ovh\StructType\DomainWhoisObfuscatorInfoResponse|bool
     */
    public function domainWhoisObfuscatorInfo(\Ovh\StructType\DomainWhoisObfuscatorInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainWhoisObfuscatorInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainCheck
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainCheck $parameters
     * @return \Ovh\StructType\DomainCheckResponse|bool
     */
    public function domainCheck(\Ovh\StructType\DomainCheck $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainCheck', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainWhoisObfuscatorSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainWhoisObfuscatorSet $parameters
     * @return \Ovh\StructType\DomainWhoisObfuscatorSetResponse|bool
     */
    public function domainWhoisObfuscatorSet(\Ovh\StructType\DomainWhoisObfuscatorSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainWhoisObfuscatorSet', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainResellerSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainResellerSet $parameters
     * @return \Ovh\StructType\DomainResellerSetResponse|bool
     */
    public function domainResellerSet(\Ovh\StructType\DomainResellerSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainResellerSet', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainOperationRelaunch
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainOperationRelaunch $parameters
     * @return \Ovh\StructType\DomainOperationRelaunchResponse|bool
     */
    public function domainOperationRelaunch(\Ovh\StructType\DomainOperationRelaunch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainOperationRelaunch', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainCapabilities
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainCapabilities $parameters
     * @return \Ovh\StructType\DomainCapabilitiesResponse|bool
     */
    public function domainCapabilities(\Ovh\StructType\DomainCapabilities $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainCapabilities', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainDnsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainDnsList $parameters
     * @return \Ovh\StructType\DomainDnsListResponse|bool
     */
    public function domainDnsList(\Ovh\StructType\DomainDnsList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainDnsList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainOperationInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainOperationInfo $parameters
     * @return \Ovh\StructType\DomainOperationInfoResponse|bool
     */
    public function domainOperationInfo(\Ovh\StructType\DomainOperationInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainOperationInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainDnsUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainDnsUpdate $parameters
     * @return \Ovh\StructType\DomainDnsUpdateResponse|bool
     */
    public function domainDnsUpdate(\Ovh\StructType\DomainDnsUpdate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainDnsUpdate', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainResellerDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainResellerDel $parameters
     * @return \Ovh\StructType\DomainResellerDelResponse|bool
     */
    public function domainResellerDel(\Ovh\StructType\DomainResellerDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainResellerDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainDnsGetOvhDefault
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainDnsGetOvhDefault $parameters
     * @return \Ovh\StructType\DomainDnsGetOvhDefaultResponse|bool
     */
    public function domainDnsGetOvhDefault(\Ovh\StructType\DomainDnsGetOvhDefault $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainDnsGetOvhDefault', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainWhoisObfuscatorUnset
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainWhoisObfuscatorUnset $parameters
     * @return \Ovh\StructType\DomainWhoisObfuscatorUnsetResponse|bool
     */
    public function domainWhoisObfuscatorUnset(\Ovh\StructType\DomainWhoisObfuscatorUnset $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainWhoisObfuscatorUnset', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainHostDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainHostDel $parameters
     * @return \Ovh\StructType\DomainHostDelResponse|bool
     */
    public function domainHostDel(\Ovh\StructType\DomainHostDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainHostDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainInfo $parameters
     * @return \Ovh\StructType\DomainInfoResponse|bool
     */
    public function domainInfo(\Ovh\StructType\DomainInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainHostList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainHostList $parameters
     * @return \Ovh\StructType\DomainHostListResponse|bool
     */
    public function domainHostList(\Ovh\StructType\DomainHostList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainHostList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainLockStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainLockStatus $parameters
     * @return \Ovh\StructType\DomainLockStatusResponse|bool
     */
    public function domainLockStatus(\Ovh\StructType\DomainLockStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainLockStatus', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainLock
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainLock $parameters
     * @return \Ovh\StructType\DomainLockResponse|bool
     */
    public function domainLock(\Ovh\StructType\DomainLock $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainLock', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainOperationCancel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainOperationCancel $parameters
     * @return \Ovh\StructType\DomainOperationCancelResponse|bool
     */
    public function domainOperationCancel(\Ovh\StructType\DomainOperationCancel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainOperationCancel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainHostAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainHostAdd $parameters
     * @return \Ovh\StructType\DomainHostAddResponse|bool
     */
    public function domainHostAdd(\Ovh\StructType\DomainHostAdd $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainHostAdd', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainWhoisObfuscatorUnsetAll
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainWhoisObfuscatorUnsetAll $parameters
     * @return \Ovh\StructType\DomainWhoisObfuscatorUnsetAllResponse|bool
     */
    public function domainWhoisObfuscatorUnsetAll(\Ovh\StructType\DomainWhoisObfuscatorUnsetAll $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainWhoisObfuscatorUnsetAll', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainOperationList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainOperationList $parameters
     * @return \Ovh\StructType\DomainOperationListResponse|bool
     */
    public function domainOperationList(\Ovh\StructType\DomainOperationList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainOperationList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainWhoisObfuscatorList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainWhoisObfuscatorList $parameters
     * @return \Ovh\StructType\DomainWhoisObfuscatorListResponse|bool
     */
    public function domainWhoisObfuscatorList(\Ovh\StructType\DomainWhoisObfuscatorList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainWhoisObfuscatorList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named domainHostInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DomainHostInfo $parameters
     * @return \Ovh\StructType\DomainHostInfoResponse|bool
     */
    public function domainHostInfo(\Ovh\StructType\DomainHostInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('domainHostInfo', array(
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
     * @return \Ovh\StructType\DomainCapabilitiesResponse|\Ovh\StructType\DomainCheckResponse|\Ovh\StructType\DomainDnsGetOvhDefaultResponse|\Ovh\StructType\DomainDnsListResponse|\Ovh\StructType\DomainDnsUpdateResponse|\Ovh\StructType\DomainHostAddResponse|\Ovh\StructType\DomainHostDelResponse|\Ovh\StructType\DomainHostInfoResponse|\Ovh\StructType\DomainHostListResponse|\Ovh\StructType\DomainHostUpdateResponse|\Ovh\StructType\DomainInfoResponse|\Ovh\StructType\DomainListResponse|\Ovh\StructType\DomainLockResponse|\Ovh\StructType\DomainLockStatusResponse|\Ovh\StructType\DomainOperationCancelResponse|\Ovh\StructType\DomainOperationInfoResponse|\Ovh\StructType\DomainOperationListResponse|\Ovh\StructType\DomainOperationRelaunchResponse|\Ovh\StructType\DomainResellerDelResponse|\Ovh\StructType\DomainResellerSetResponse|\Ovh\StructType\DomainUnlockResponse|\Ovh\StructType\DomainWhoisObfuscatorInfoResponse|\Ovh\StructType\DomainWhoisObfuscatorListResponse|\Ovh\StructType\DomainWhoisObfuscatorSetAllResponse|\Ovh\StructType\DomainWhoisObfuscatorSetResponse|\Ovh\StructType\DomainWhoisObfuscatorUnsetAllResponse|\Ovh\StructType\DomainWhoisObfuscatorUnsetResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
