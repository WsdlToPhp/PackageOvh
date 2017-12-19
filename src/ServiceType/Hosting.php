<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\HostingAccessByNic $parameters
     * @return \Ovh\StructType\HostingAccessByNicResponse|bool
     */
    public function hostingAccessByNic(\Ovh\StructType\HostingAccessByNic $parameters)
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
     * @param \Ovh\StructType\HostingSummary $parameters
     * @return \Ovh\StructType\HostingSummaryResponse|bool
     */
    public function hostingSummary(\Ovh\StructType\HostingSummary $parameters)
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
     * @param \Ovh\StructType\HostingGetCapabilities $parameters
     * @return \Ovh\StructType\HostingGetCapabilitiesResponse|bool
     */
    public function hostingGetCapabilities(\Ovh\StructType\HostingGetCapabilities $parameters)
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
     * @param \Ovh\StructType\HostingChangeMainDomain $parameters
     * @return \Ovh\StructType\HostingChangeMainDomainResponse|bool
     */
    public function hostingChangeMainDomain(\Ovh\StructType\HostingChangeMainDomain $parameters)
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
     * @param \Ovh\StructType\HostingList $parameters
     * @return \Ovh\StructType\HostingListResponse|bool
     */
    public function hostingList(\Ovh\StructType\HostingList $parameters)
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
     * @return \Ovh\StructType\HostingAccessByNicResponse|\Ovh\StructType\HostingChangeMainDomainResponse|\Ovh\StructType\HostingGetCapabilitiesResponse|\Ovh\StructType\HostingListResponse|\Ovh\StructType\HostingSummaryResponse
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
