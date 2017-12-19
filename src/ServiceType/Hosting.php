<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Hosting ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Hosting extends SoapClientBase
{
    /**
     * Method to call the operation originally named hostingAccessByNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\HostingAccessByNic $parameters
     * @return \PayPal\StructType\HostingAccessByNicResponse|bool
     */
    public function hostingAccessByNic(\PayPal\StructType\HostingAccessByNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->hostingAccessByNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named hostingSummary
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\HostingSummary $parameters
     * @return \PayPal\StructType\HostingSummaryResponse|bool
     */
    public function hostingSummary(\PayPal\StructType\HostingSummary $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->hostingSummary($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named hostingGetCapabilities
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\HostingGetCapabilities $parameters
     * @return \PayPal\StructType\HostingGetCapabilitiesResponse|bool
     */
    public function hostingGetCapabilities(\PayPal\StructType\HostingGetCapabilities $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->hostingGetCapabilities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named hostingChangeMainDomain
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\HostingChangeMainDomain $parameters
     * @return \PayPal\StructType\HostingChangeMainDomainResponse|bool
     */
    public function hostingChangeMainDomain(\PayPal\StructType\HostingChangeMainDomain $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->hostingChangeMainDomain($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named hostingList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\HostingList $parameters
     * @return \PayPal\StructType\HostingListResponse|bool
     */
    public function hostingList(\PayPal\StructType\HostingList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->hostingList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\HostingAccessByNicResponse|\PayPal\StructType\HostingChangeMainDomainResponse|\PayPal\StructType\HostingGetCapabilitiesResponse|\PayPal\StructType\HostingListResponse|\PayPal\StructType\HostingSummaryResponse
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
