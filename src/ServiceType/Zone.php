<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Zone ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Zone extends SoapClientBase
{
    /**
     * Method to call the operation originally named zoneEntryList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ZoneEntryList $parameters
     * @return \PayPal\StructType\ZoneEntryListResponse|bool
     */
    public function zoneEntryList(\PayPal\StructType\ZoneEntryList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->zoneEntryList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named zoneEntryAddCustom
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ZoneEntryAddCustom $parameters
     * @return \PayPal\StructType\ZoneEntryAddCustomResponse|bool
     */
    public function zoneEntryAddCustom(\PayPal\StructType\ZoneEntryAddCustom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->zoneEntryAddCustom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named zoneEntryModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ZoneEntryModify $parameters
     * @return \PayPal\StructType\ZoneEntryModifyResponse|bool
     */
    public function zoneEntryModify(\PayPal\StructType\ZoneEntryModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->zoneEntryModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named zoneEntryDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ZoneEntryDel $parameters
     * @return \PayPal\StructType\ZoneEntryDelResponse|bool
     */
    public function zoneEntryDel(\PayPal\StructType\ZoneEntryDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->zoneEntryDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named zoneEntryAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ZoneEntryAdd $parameters
     * @return \PayPal\StructType\ZoneEntryAddResponse|bool
     */
    public function zoneEntryAdd(\PayPal\StructType\ZoneEntryAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->zoneEntryAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named zoneExport
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ZoneExport $parameters
     * @return \PayPal\StructType\ZoneExportResponse|bool
     */
    public function zoneExport(\PayPal\StructType\ZoneExport $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->zoneExport($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named zoneImport
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ZoneImport $parameters
     * @return \PayPal\StructType\ZoneImportResponse|bool
     */
    public function zoneImport(\PayPal\StructType\ZoneImport $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->zoneImport($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\ZoneEntryAddCustomResponse|\PayPal\StructType\ZoneEntryAddResponse|\PayPal\StructType\ZoneEntryDelResponse|\PayPal\StructType\ZoneEntryListResponse|\PayPal\StructType\ZoneEntryModifyResponse|\PayPal\StructType\ZoneExportResponse|\PayPal\StructType\ZoneImportResponse
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
