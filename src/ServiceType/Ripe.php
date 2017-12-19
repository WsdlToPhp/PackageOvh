<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Ripe ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Ripe extends SoapClientBase
{
    /**
     * Method to call the operation originally named ripeGetRipeIds
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\RipeGetRipeIds $parameters
     * @return \Ovh\StructType\RipeGetRipeIdsResponse|bool
     */
    public function ripeGetRipeIds(\Ovh\StructType\RipeGetRipeIds $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ripeGetRipeIds($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ripeUpdateInetnum
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\RipeUpdateInetnum $parameters
     * @return \Ovh\StructType\RipeUpdateInetnumResponse|bool
     */
    public function ripeUpdateInetnum(\Ovh\StructType\RipeUpdateInetnum $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ripeUpdateInetnum($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ripeQuery
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\RipeQuery $parameters
     * @return \Ovh\StructType\RipeQueryResponse|bool
     */
    public function ripeQuery(\Ovh\StructType\RipeQuery $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ripeQuery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ripeDeleteOrganisation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\RipeDeleteOrganisation $parameters
     * @return \Ovh\StructType\RipeDeleteOrganisationResponse|bool
     */
    public function ripeDeleteOrganisation(\Ovh\StructType\RipeDeleteOrganisation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ripeDeleteOrganisation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ripeUpdateOrganisation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\RipeUpdateOrganisation $parameters
     * @return \Ovh\StructType\RipeUpdateOrganisationResponse|bool
     */
    public function ripeUpdateOrganisation(\Ovh\StructType\RipeUpdateOrganisation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ripeUpdateOrganisation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ripeCreateOrganisation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\RipeCreateOrganisation $parameters
     * @return \Ovh\StructType\RipeCreateOrganisationResponse|bool
     */
    public function ripeCreateOrganisation(\Ovh\StructType\RipeCreateOrganisation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ripeCreateOrganisation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\RipeCreateOrganisationResponse|\Ovh\StructType\RipeDeleteOrganisationResponse|\Ovh\StructType\RipeGetRipeIdsResponse|\Ovh\StructType\RipeQueryResponse|\Ovh\StructType\RipeUpdateInetnumResponse|\Ovh\StructType\RipeUpdateOrganisationResponse
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
