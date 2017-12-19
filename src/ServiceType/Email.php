<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Email ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Email extends SoapClientBase
{
    /**
     * Method to call the operation originally named emailGetCapabilities
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailGetCapabilities $parameters
     * @return \Ovh\StructType\EmailGetCapabilitiesResponse|bool
     */
    public function emailGetCapabilities(\Ovh\StructType\EmailGetCapabilities $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailGetCapabilities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailDomainListByMasterNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailDomainListByMasterNic $parameters
     * @return \Ovh\StructType\EmailDomainListByMasterNicResponse|bool
     */
    public function emailDomainListByMasterNic(\Ovh\StructType\EmailDomainListByMasterNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailDomainListByMasterNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailDomainSummary
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailDomainSummary $parameters
     * @return \Ovh\StructType\EmailDomainSummaryResponse|bool
     */
    public function emailDomainSummary(\Ovh\StructType\EmailDomainSummary $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailDomainSummary($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailFilterAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailFilterAdd $parameters
     * @return \Ovh\StructType\EmailFilterAddResponse|bool
     */
    public function emailFilterAdd(\Ovh\StructType\EmailFilterAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailFilterAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailAccessByNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailAccessByNic $parameters
     * @return \Ovh\StructType\EmailAccessByNicResponse|bool
     */
    public function emailAccessByNic(\Ovh\StructType\EmailAccessByNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailAccessByNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailFilterRuleDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailFilterRuleDel $parameters
     * @return \Ovh\StructType\EmailFilterRuleDelResponse|bool
     */
    public function emailFilterRuleDel(\Ovh\StructType\EmailFilterRuleDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailFilterRuleDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailFilterPriority
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailFilterPriority $parameters
     * @return \Ovh\StructType\EmailFilterPriorityResponse|bool
     */
    public function emailFilterPriority(\Ovh\StructType\EmailFilterPriority $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailFilterPriority($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailFilterDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailFilterDel $parameters
     * @return \Ovh\StructType\EmailFilterDelResponse|bool
     */
    public function emailFilterDel(\Ovh\StructType\EmailFilterDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailFilterDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailSetDomainCatchAll
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailSetDomainCatchAll $parameters
     * @return \Ovh\StructType\EmailSetDomainCatchAllResponse|bool
     */
    public function emailSetDomainCatchAll(\Ovh\StructType\EmailSetDomainCatchAll $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailSetDomainCatchAll($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailDomainMxList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailDomainMxList $parameters
     * @return \Ovh\StructType\EmailDomainMxListResponse|bool
     */
    public function emailDomainMxList(\Ovh\StructType\EmailDomainMxList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailDomainMxList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailFilterRuleAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailFilterRuleAdd $parameters
     * @return \Ovh\StructType\EmailFilterRuleAddResponse|bool
     */
    public function emailFilterRuleAdd(\Ovh\StructType\EmailFilterRuleAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailFilterRuleAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailFilterActive
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailFilterActive $parameters
     * @return \Ovh\StructType\EmailFilterActiveResponse|bool
     */
    public function emailFilterActive(\Ovh\StructType\EmailFilterActive $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailFilterActive($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailFilterList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailFilterList $parameters
     * @return \Ovh\StructType\EmailFilterListResponse|bool
     */
    public function emailFilterList(\Ovh\StructType\EmailFilterList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailFilterList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailGetDomainMxFiltering
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailGetDomainMxFiltering $parameters
     * @return \Ovh\StructType\EmailGetDomainMxFilteringResponse|bool
     */
    public function emailGetDomainMxFiltering(\Ovh\StructType\EmailGetDomainMxFiltering $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailGetDomainMxFiltering($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailDelMasterNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailDelMasterNic $parameters
     * @return \Ovh\StructType\EmailDelMasterNicResponse|bool
     */
    public function emailDelMasterNic(\Ovh\StructType\EmailDelMasterNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailDelMasterNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailGetDomainCatchAll
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailGetDomainCatchAll $parameters
     * @return \Ovh\StructType\EmailGetDomainCatchAllResponse|bool
     */
    public function emailGetDomainCatchAll(\Ovh\StructType\EmailGetDomainCatchAll $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailGetDomainCatchAll($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailSetMasterNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailSetMasterNic $parameters
     * @return \Ovh\StructType\EmailSetMasterNicResponse|bool
     */
    public function emailSetMasterNic(\Ovh\StructType\EmailSetMasterNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailSetMasterNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named emailSetDomainMxFiltering
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\EmailSetDomainMxFiltering $parameters
     * @return \Ovh\StructType\EmailSetDomainMxFilteringResponse|bool
     */
    public function emailSetDomainMxFiltering(\Ovh\StructType\EmailSetDomainMxFiltering $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->emailSetDomainMxFiltering($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\EmailAccessByNicResponse|\Ovh\StructType\EmailDelMasterNicResponse|\Ovh\StructType\EmailDomainListByMasterNicResponse|\Ovh\StructType\EmailDomainMxListResponse|\Ovh\StructType\EmailDomainSummaryResponse|\Ovh\StructType\EmailFilterActiveResponse|\Ovh\StructType\EmailFilterAddResponse|\Ovh\StructType\EmailFilterDelResponse|\Ovh\StructType\EmailFilterListResponse|\Ovh\StructType\EmailFilterPriorityResponse|\Ovh\StructType\EmailFilterRuleAddResponse|\Ovh\StructType\EmailFilterRuleDelResponse|\Ovh\StructType\EmailGetCapabilitiesResponse|\Ovh\StructType\EmailGetDomainCatchAllResponse|\Ovh\StructType\EmailGetDomainMxFilteringResponse|\Ovh\StructType\EmailSetDomainCatchAllResponse|\Ovh\StructType\EmailSetDomainMxFilteringResponse|\Ovh\StructType\EmailSetMasterNicResponse
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
