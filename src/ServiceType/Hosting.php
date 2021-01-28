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
            $this->setResult($this->getSoapClient()->__soapCall('hostingAccessByNic', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('hostingSummary', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('hostingGetCapabilities', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('hostingChangeMainDomain', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('hostingList', array(
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
     * @return \Ovh\StructType\HostingAccessByNicResponse|\Ovh\StructType\HostingChangeMainDomainResponse|\Ovh\StructType\HostingGetCapabilitiesResponse|\Ovh\StructType\HostingListResponse|\Ovh\StructType\HostingSummaryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
