<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\DnsDefaultInstallCustom $parameters
     * @return \Ovh\StructType\DnsDefaultInstallCustomResponse|bool
     */
    public function dnsDefaultInstallCustom(\Ovh\StructType\DnsDefaultInstallCustom $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('dnsDefaultInstallCustom', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\DnsInstall $parameters
     * @return \Ovh\StructType\DnsInstallResponse|bool
     */
    public function dnsInstall(\Ovh\StructType\DnsInstall $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('dnsInstall', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\DnsReset $parameters
     * @return \Ovh\StructType\DnsResetResponse|bool
     */
    public function dnsReset(\Ovh\StructType\DnsReset $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('dnsReset', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\DnsSoaModify $parameters
     * @return \Ovh\StructType\DnsSoaModifyResponse|bool
     */
    public function dnsSoaModify(\Ovh\StructType\DnsSoaModify $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('dnsSoaModify', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\DnsInstallCustom $parameters
     * @return \Ovh\StructType\DnsInstallCustomResponse|bool
     */
    public function dnsInstallCustom(\Ovh\StructType\DnsInstallCustom $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('dnsInstallCustom', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\DnsUninstall $parameters
     * @return \Ovh\StructType\DnsUninstallResponse|bool
     */
    public function dnsUninstall(\Ovh\StructType\DnsUninstall $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('dnsUninstall', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\DnsGeolocalizeHosting $parameters
     * @return \Ovh\StructType\DnsGeolocalizeHostingResponse|bool
     */
    public function dnsGeolocalizeHosting(\Ovh\StructType\DnsGeolocalizeHosting $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('dnsGeolocalizeHosting', array(
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
     * @return \Ovh\StructType\DnsDefaultInstallCustomResponse|\Ovh\StructType\DnsGeolocalizeHostingResponse|\Ovh\StructType\DnsInstallCustomResponse|\Ovh\StructType\DnsInstallResponse|\Ovh\StructType\DnsResetResponse|\Ovh\StructType\DnsSoaModifyResponse|\Ovh\StructType\DnsUninstallResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
