<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\DomainHostUpdate $parameters
     * @return \PayPal\StructType\DomainHostUpdateResponse|bool
     */
    public function domainHostUpdate(\PayPal\StructType\DomainHostUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainHostUpdate($parameters));
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
     * @param \PayPal\StructType\DomainUnlock $parameters
     * @return \PayPal\StructType\DomainUnlockResponse|bool
     */
    public function domainUnlock(\PayPal\StructType\DomainUnlock $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainUnlock($parameters));
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
     * @param \PayPal\StructType\DomainWhoisObfuscatorSetAll $parameters
     * @return \PayPal\StructType\DomainWhoisObfuscatorSetAllResponse|bool
     */
    public function domainWhoisObfuscatorSetAll(\PayPal\StructType\DomainWhoisObfuscatorSetAll $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainWhoisObfuscatorSetAll($parameters));
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
     * @param \PayPal\StructType\DomainList $parameters
     * @return \PayPal\StructType\DomainListResponse|bool
     */
    public function domainList(\PayPal\StructType\DomainList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainList($parameters));
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
     * @param \PayPal\StructType\DomainWhoisObfuscatorInfo $parameters
     * @return \PayPal\StructType\DomainWhoisObfuscatorInfoResponse|bool
     */
    public function domainWhoisObfuscatorInfo(\PayPal\StructType\DomainWhoisObfuscatorInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainWhoisObfuscatorInfo($parameters));
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
     * @param \PayPal\StructType\DomainCheck $parameters
     * @return \PayPal\StructType\DomainCheckResponse|bool
     */
    public function domainCheck(\PayPal\StructType\DomainCheck $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainCheck($parameters));
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
     * @param \PayPal\StructType\DomainWhoisObfuscatorSet $parameters
     * @return \PayPal\StructType\DomainWhoisObfuscatorSetResponse|bool
     */
    public function domainWhoisObfuscatorSet(\PayPal\StructType\DomainWhoisObfuscatorSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainWhoisObfuscatorSet($parameters));
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
     * @param \PayPal\StructType\DomainResellerSet $parameters
     * @return \PayPal\StructType\DomainResellerSetResponse|bool
     */
    public function domainResellerSet(\PayPal\StructType\DomainResellerSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainResellerSet($parameters));
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
     * @param \PayPal\StructType\DomainOperationRelaunch $parameters
     * @return \PayPal\StructType\DomainOperationRelaunchResponse|bool
     */
    public function domainOperationRelaunch(\PayPal\StructType\DomainOperationRelaunch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainOperationRelaunch($parameters));
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
     * @param \PayPal\StructType\DomainCapabilities $parameters
     * @return \PayPal\StructType\DomainCapabilitiesResponse|bool
     */
    public function domainCapabilities(\PayPal\StructType\DomainCapabilities $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainCapabilities($parameters));
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
     * @param \PayPal\StructType\DomainDnsList $parameters
     * @return \PayPal\StructType\DomainDnsListResponse|bool
     */
    public function domainDnsList(\PayPal\StructType\DomainDnsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainDnsList($parameters));
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
     * @param \PayPal\StructType\DomainOperationInfo $parameters
     * @return \PayPal\StructType\DomainOperationInfoResponse|bool
     */
    public function domainOperationInfo(\PayPal\StructType\DomainOperationInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainOperationInfo($parameters));
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
     * @param \PayPal\StructType\DomainDnsUpdate $parameters
     * @return \PayPal\StructType\DomainDnsUpdateResponse|bool
     */
    public function domainDnsUpdate(\PayPal\StructType\DomainDnsUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainDnsUpdate($parameters));
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
     * @param \PayPal\StructType\DomainResellerDel $parameters
     * @return \PayPal\StructType\DomainResellerDelResponse|bool
     */
    public function domainResellerDel(\PayPal\StructType\DomainResellerDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainResellerDel($parameters));
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
     * @param \PayPal\StructType\DomainDnsGetOvhDefault $parameters
     * @return \PayPal\StructType\DomainDnsGetOvhDefaultResponse|bool
     */
    public function domainDnsGetOvhDefault(\PayPal\StructType\DomainDnsGetOvhDefault $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainDnsGetOvhDefault($parameters));
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
     * @param \PayPal\StructType\DomainWhoisObfuscatorUnset $parameters
     * @return \PayPal\StructType\DomainWhoisObfuscatorUnsetResponse|bool
     */
    public function domainWhoisObfuscatorUnset(\PayPal\StructType\DomainWhoisObfuscatorUnset $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainWhoisObfuscatorUnset($parameters));
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
     * @param \PayPal\StructType\DomainHostDel $parameters
     * @return \PayPal\StructType\DomainHostDelResponse|bool
     */
    public function domainHostDel(\PayPal\StructType\DomainHostDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainHostDel($parameters));
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
     * @param \PayPal\StructType\DomainInfo $parameters
     * @return \PayPal\StructType\DomainInfoResponse|bool
     */
    public function domainInfo(\PayPal\StructType\DomainInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainInfo($parameters));
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
     * @param \PayPal\StructType\DomainHostList $parameters
     * @return \PayPal\StructType\DomainHostListResponse|bool
     */
    public function domainHostList(\PayPal\StructType\DomainHostList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainHostList($parameters));
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
     * @param \PayPal\StructType\DomainLockStatus $parameters
     * @return \PayPal\StructType\DomainLockStatusResponse|bool
     */
    public function domainLockStatus(\PayPal\StructType\DomainLockStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainLockStatus($parameters));
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
     * @param \PayPal\StructType\DomainLock $parameters
     * @return \PayPal\StructType\DomainLockResponse|bool
     */
    public function domainLock(\PayPal\StructType\DomainLock $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainLock($parameters));
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
     * @param \PayPal\StructType\DomainOperationCancel $parameters
     * @return \PayPal\StructType\DomainOperationCancelResponse|bool
     */
    public function domainOperationCancel(\PayPal\StructType\DomainOperationCancel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainOperationCancel($parameters));
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
     * @param \PayPal\StructType\DomainHostAdd $parameters
     * @return \PayPal\StructType\DomainHostAddResponse|bool
     */
    public function domainHostAdd(\PayPal\StructType\DomainHostAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainHostAdd($parameters));
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
     * @param \PayPal\StructType\DomainWhoisObfuscatorUnsetAll $parameters
     * @return \PayPal\StructType\DomainWhoisObfuscatorUnsetAllResponse|bool
     */
    public function domainWhoisObfuscatorUnsetAll(\PayPal\StructType\DomainWhoisObfuscatorUnsetAll $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainWhoisObfuscatorUnsetAll($parameters));
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
     * @param \PayPal\StructType\DomainOperationList $parameters
     * @return \PayPal\StructType\DomainOperationListResponse|bool
     */
    public function domainOperationList(\PayPal\StructType\DomainOperationList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainOperationList($parameters));
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
     * @param \PayPal\StructType\DomainWhoisObfuscatorList $parameters
     * @return \PayPal\StructType\DomainWhoisObfuscatorListResponse|bool
     */
    public function domainWhoisObfuscatorList(\PayPal\StructType\DomainWhoisObfuscatorList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainWhoisObfuscatorList($parameters));
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
     * @param \PayPal\StructType\DomainHostInfo $parameters
     * @return \PayPal\StructType\DomainHostInfoResponse|bool
     */
    public function domainHostInfo(\PayPal\StructType\DomainHostInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->domainHostInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\DomainCapabilitiesResponse|\PayPal\StructType\DomainCheckResponse|\PayPal\StructType\DomainDnsGetOvhDefaultResponse|\PayPal\StructType\DomainDnsListResponse|\PayPal\StructType\DomainDnsUpdateResponse|\PayPal\StructType\DomainHostAddResponse|\PayPal\StructType\DomainHostDelResponse|\PayPal\StructType\DomainHostInfoResponse|\PayPal\StructType\DomainHostListResponse|\PayPal\StructType\DomainHostUpdateResponse|\PayPal\StructType\DomainInfoResponse|\PayPal\StructType\DomainListResponse|\PayPal\StructType\DomainLockResponse|\PayPal\StructType\DomainLockStatusResponse|\PayPal\StructType\DomainOperationCancelResponse|\PayPal\StructType\DomainOperationInfoResponse|\PayPal\StructType\DomainOperationListResponse|\PayPal\StructType\DomainOperationRelaunchResponse|\PayPal\StructType\DomainResellerDelResponse|\PayPal\StructType\DomainResellerSetResponse|\PayPal\StructType\DomainUnlockResponse|\PayPal\StructType\DomainWhoisObfuscatorInfoResponse|\PayPal\StructType\DomainWhoisObfuscatorListResponse|\PayPal\StructType\DomainWhoisObfuscatorSetAllResponse|\PayPal\StructType\DomainWhoisObfuscatorSetResponse|\PayPal\StructType\DomainWhoisObfuscatorUnsetAllResponse|\PayPal\StructType\DomainWhoisObfuscatorUnsetResponse
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
