<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\EmailGetCapabilities $parameters
     * @return \PayPal\StructType\EmailGetCapabilitiesResponse|bool
     */
    public function emailGetCapabilities(\PayPal\StructType\EmailGetCapabilities $parameters)
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
     * @param \PayPal\StructType\EmailDomainListByMasterNic $parameters
     * @return \PayPal\StructType\EmailDomainListByMasterNicResponse|bool
     */
    public function emailDomainListByMasterNic(\PayPal\StructType\EmailDomainListByMasterNic $parameters)
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
     * @param \PayPal\StructType\EmailDomainSummary $parameters
     * @return \PayPal\StructType\EmailDomainSummaryResponse|bool
     */
    public function emailDomainSummary(\PayPal\StructType\EmailDomainSummary $parameters)
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
     * @param \PayPal\StructType\EmailFilterAdd $parameters
     * @return \PayPal\StructType\EmailFilterAddResponse|bool
     */
    public function emailFilterAdd(\PayPal\StructType\EmailFilterAdd $parameters)
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
     * @param \PayPal\StructType\EmailAccessByNic $parameters
     * @return \PayPal\StructType\EmailAccessByNicResponse|bool
     */
    public function emailAccessByNic(\PayPal\StructType\EmailAccessByNic $parameters)
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
     * @param \PayPal\StructType\EmailFilterRuleDel $parameters
     * @return \PayPal\StructType\EmailFilterRuleDelResponse|bool
     */
    public function emailFilterRuleDel(\PayPal\StructType\EmailFilterRuleDel $parameters)
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
     * @param \PayPal\StructType\EmailFilterPriority $parameters
     * @return \PayPal\StructType\EmailFilterPriorityResponse|bool
     */
    public function emailFilterPriority(\PayPal\StructType\EmailFilterPriority $parameters)
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
     * @param \PayPal\StructType\EmailFilterDel $parameters
     * @return \PayPal\StructType\EmailFilterDelResponse|bool
     */
    public function emailFilterDel(\PayPal\StructType\EmailFilterDel $parameters)
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
     * @param \PayPal\StructType\EmailSetDomainCatchAll $parameters
     * @return \PayPal\StructType\EmailSetDomainCatchAllResponse|bool
     */
    public function emailSetDomainCatchAll(\PayPal\StructType\EmailSetDomainCatchAll $parameters)
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
     * @param \PayPal\StructType\EmailDomainMxList $parameters
     * @return \PayPal\StructType\EmailDomainMxListResponse|bool
     */
    public function emailDomainMxList(\PayPal\StructType\EmailDomainMxList $parameters)
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
     * @param \PayPal\StructType\EmailFilterRuleAdd $parameters
     * @return \PayPal\StructType\EmailFilterRuleAddResponse|bool
     */
    public function emailFilterRuleAdd(\PayPal\StructType\EmailFilterRuleAdd $parameters)
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
     * @param \PayPal\StructType\EmailFilterActive $parameters
     * @return \PayPal\StructType\EmailFilterActiveResponse|bool
     */
    public function emailFilterActive(\PayPal\StructType\EmailFilterActive $parameters)
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
     * @param \PayPal\StructType\EmailFilterList $parameters
     * @return \PayPal\StructType\EmailFilterListResponse|bool
     */
    public function emailFilterList(\PayPal\StructType\EmailFilterList $parameters)
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
     * @param \PayPal\StructType\EmailGetDomainMxFiltering $parameters
     * @return \PayPal\StructType\EmailGetDomainMxFilteringResponse|bool
     */
    public function emailGetDomainMxFiltering(\PayPal\StructType\EmailGetDomainMxFiltering $parameters)
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
     * @param \PayPal\StructType\EmailDelMasterNic $parameters
     * @return \PayPal\StructType\EmailDelMasterNicResponse|bool
     */
    public function emailDelMasterNic(\PayPal\StructType\EmailDelMasterNic $parameters)
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
     * @param \PayPal\StructType\EmailGetDomainCatchAll $parameters
     * @return \PayPal\StructType\EmailGetDomainCatchAllResponse|bool
     */
    public function emailGetDomainCatchAll(\PayPal\StructType\EmailGetDomainCatchAll $parameters)
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
     * @param \PayPal\StructType\EmailSetMasterNic $parameters
     * @return \PayPal\StructType\EmailSetMasterNicResponse|bool
     */
    public function emailSetMasterNic(\PayPal\StructType\EmailSetMasterNic $parameters)
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
     * @param \PayPal\StructType\EmailSetDomainMxFiltering $parameters
     * @return \PayPal\StructType\EmailSetDomainMxFilteringResponse|bool
     */
    public function emailSetDomainMxFiltering(\PayPal\StructType\EmailSetDomainMxFiltering $parameters)
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
     * @return \PayPal\StructType\EmailAccessByNicResponse|\PayPal\StructType\EmailDelMasterNicResponse|\PayPal\StructType\EmailDomainListByMasterNicResponse|\PayPal\StructType\EmailDomainMxListResponse|\PayPal\StructType\EmailDomainSummaryResponse|\PayPal\StructType\EmailFilterActiveResponse|\PayPal\StructType\EmailFilterAddResponse|\PayPal\StructType\EmailFilterDelResponse|\PayPal\StructType\EmailFilterListResponse|\PayPal\StructType\EmailFilterPriorityResponse|\PayPal\StructType\EmailFilterRuleAddResponse|\PayPal\StructType\EmailFilterRuleDelResponse|\PayPal\StructType\EmailGetCapabilitiesResponse|\PayPal\StructType\EmailGetDomainCatchAllResponse|\PayPal\StructType\EmailGetDomainMxFilteringResponse|\PayPal\StructType\EmailSetDomainCatchAllResponse|\PayPal\StructType\EmailSetDomainMxFilteringResponse|\PayPal\StructType\EmailSetMasterNicResponse
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
