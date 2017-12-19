<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\RipeGetRipeIds $parameters
     * @return \PayPal\StructType\RipeGetRipeIdsResponse|bool
     */
    public function ripeGetRipeIds(\PayPal\StructType\RipeGetRipeIds $parameters)
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
     * @param \PayPal\StructType\RipeUpdateInetnum $parameters
     * @return \PayPal\StructType\RipeUpdateInetnumResponse|bool
     */
    public function ripeUpdateInetnum(\PayPal\StructType\RipeUpdateInetnum $parameters)
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
     * @param \PayPal\StructType\RipeQuery $parameters
     * @return \PayPal\StructType\RipeQueryResponse|bool
     */
    public function ripeQuery(\PayPal\StructType\RipeQuery $parameters)
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
     * @param \PayPal\StructType\RipeDeleteOrganisation $parameters
     * @return \PayPal\StructType\RipeDeleteOrganisationResponse|bool
     */
    public function ripeDeleteOrganisation(\PayPal\StructType\RipeDeleteOrganisation $parameters)
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
     * @param \PayPal\StructType\RipeUpdateOrganisation $parameters
     * @return \PayPal\StructType\RipeUpdateOrganisationResponse|bool
     */
    public function ripeUpdateOrganisation(\PayPal\StructType\RipeUpdateOrganisation $parameters)
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
     * @param \PayPal\StructType\RipeCreateOrganisation $parameters
     * @return \PayPal\StructType\RipeCreateOrganisationResponse|bool
     */
    public function ripeCreateOrganisation(\PayPal\StructType\RipeCreateOrganisation $parameters)
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
     * @return \PayPal\StructType\RipeCreateOrganisationResponse|\PayPal\StructType\RipeDeleteOrganisationResponse|\PayPal\StructType\RipeGetRipeIdsResponse|\PayPal\StructType\RipeQueryResponse|\PayPal\StructType\RipeUpdateInetnumResponse|\PayPal\StructType\RipeUpdateOrganisationResponse
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
