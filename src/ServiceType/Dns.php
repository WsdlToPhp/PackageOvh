<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Dns ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Dns extends SoapClientBase
{
    /**
     * Method to call the operation originally named dnsDefaultInstallCustom
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DnsDefaultInstallCustom $parameters
     * @return \PayPal\StructType\DnsDefaultInstallCustomResponse|bool
     */
    public function dnsDefaultInstallCustom(\PayPal\StructType\DnsDefaultInstallCustom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnsDefaultInstallCustom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnsInstall
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DnsInstall $parameters
     * @return \PayPal\StructType\DnsInstallResponse|bool
     */
    public function dnsInstall(\PayPal\StructType\DnsInstall $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnsInstall($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnsReset
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DnsReset $parameters
     * @return \PayPal\StructType\DnsResetResponse|bool
     */
    public function dnsReset(\PayPal\StructType\DnsReset $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnsReset($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnsSoaModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DnsSoaModify $parameters
     * @return \PayPal\StructType\DnsSoaModifyResponse|bool
     */
    public function dnsSoaModify(\PayPal\StructType\DnsSoaModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnsSoaModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnsInstallCustom
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DnsInstallCustom $parameters
     * @return \PayPal\StructType\DnsInstallCustomResponse|bool
     */
    public function dnsInstallCustom(\PayPal\StructType\DnsInstallCustom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnsInstallCustom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnsUninstall
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DnsUninstall $parameters
     * @return \PayPal\StructType\DnsUninstallResponse|bool
     */
    public function dnsUninstall(\PayPal\StructType\DnsUninstall $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnsUninstall($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnsGeolocalizeHosting
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DnsGeolocalizeHosting $parameters
     * @return \PayPal\StructType\DnsGeolocalizeHostingResponse|bool
     */
    public function dnsGeolocalizeHosting(\PayPal\StructType\DnsGeolocalizeHosting $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnsGeolocalizeHosting($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\DnsDefaultInstallCustomResponse|\PayPal\StructType\DnsGeolocalizeHostingResponse|\PayPal\StructType\DnsInstallCustomResponse|\PayPal\StructType\DnsInstallResponse|\PayPal\StructType\DnsResetResponse|\PayPal\StructType\DnsSoaModifyResponse|\PayPal\StructType\DnsUninstallResponse
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
