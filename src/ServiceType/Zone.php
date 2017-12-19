<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\ZoneEntryList $parameters
     * @return \Ovh\StructType\ZoneEntryListResponse|bool
     */
    public function zoneEntryList(\Ovh\StructType\ZoneEntryList $parameters)
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
     * @param \Ovh\StructType\ZoneEntryAddCustom $parameters
     * @return \Ovh\StructType\ZoneEntryAddCustomResponse|bool
     */
    public function zoneEntryAddCustom(\Ovh\StructType\ZoneEntryAddCustom $parameters)
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
     * @param \Ovh\StructType\ZoneEntryModify $parameters
     * @return \Ovh\StructType\ZoneEntryModifyResponse|bool
     */
    public function zoneEntryModify(\Ovh\StructType\ZoneEntryModify $parameters)
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
     * @param \Ovh\StructType\ZoneEntryDel $parameters
     * @return \Ovh\StructType\ZoneEntryDelResponse|bool
     */
    public function zoneEntryDel(\Ovh\StructType\ZoneEntryDel $parameters)
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
     * @param \Ovh\StructType\ZoneEntryAdd $parameters
     * @return \Ovh\StructType\ZoneEntryAddResponse|bool
     */
    public function zoneEntryAdd(\Ovh\StructType\ZoneEntryAdd $parameters)
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
     * @param \Ovh\StructType\ZoneExport $parameters
     * @return \Ovh\StructType\ZoneExportResponse|bool
     */
    public function zoneExport(\Ovh\StructType\ZoneExport $parameters)
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
     * @param \Ovh\StructType\ZoneImport $parameters
     * @return \Ovh\StructType\ZoneImportResponse|bool
     */
    public function zoneImport(\Ovh\StructType\ZoneImport $parameters)
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
     * @return \Ovh\StructType\ZoneEntryAddCustomResponse|\Ovh\StructType\ZoneEntryAddResponse|\Ovh\StructType\ZoneEntryDelResponse|\Ovh\StructType\ZoneEntryListResponse|\Ovh\StructType\ZoneEntryModifyResponse|\Ovh\StructType\ZoneExportResponse|\Ovh\StructType\ZoneImportResponse
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
