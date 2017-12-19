<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Reseller ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Reseller extends SoapClientBase
{
    /**
     * Method to call the operation originally named resellerDomainTransferIT
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainTransferIT $parameters
     * @return \Ovh\StructType\ResellerDomainTransferITResponse|bool
     */
    public function resellerDomainTransferIT(\Ovh\StructType\ResellerDomainTransferIT $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainTransferIT($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainRestore
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainRestore $parameters
     * @return \Ovh\StructType\ResellerDomainRestoreResponse|bool
     */
    public function resellerDomainRestore(\Ovh\StructType\ResellerDomainRestore $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainRestore($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainRenew
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainRenew $parameters
     * @return \Ovh\StructType\ResellerDomainRenewResponse|bool
     */
    public function resellerDomainRenew(\Ovh\StructType\ResellerDomainRenew $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainRenew($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainCreate $parameters
     * @return \Ovh\StructType\ResellerDomainCreateResponse|bool
     */
    public function resellerDomainCreate(\Ovh\StructType\ResellerDomainCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainCreateIT
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainCreateIT $parameters
     * @return \Ovh\StructType\ResellerDomainCreateITResponse|bool
     */
    public function resellerDomainCreateIT(\Ovh\StructType\ResellerDomainCreateIT $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainCreateIT($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainTransferASIA
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainTransferASIA $parameters
     * @return \Ovh\StructType\ResellerDomainTransferASIAResponse|bool
     */
    public function resellerDomainTransferASIA(\Ovh\StructType\ResellerDomainTransferASIA $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainTransferASIA($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainCreateCAT
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainCreateCAT $parameters
     * @return \Ovh\StructType\ResellerDomainCreateCATResponse|bool
     */
    public function resellerDomainCreateCAT(\Ovh\StructType\ResellerDomainCreateCAT $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainCreateCAT($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainCreateASIA
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainCreateASIA $parameters
     * @return \Ovh\StructType\ResellerDomainCreateASIAResponse|bool
     */
    public function resellerDomainCreateASIA(\Ovh\StructType\ResellerDomainCreateASIA $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainCreateASIA($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named resellerDomainTransfer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResellerDomainTransfer $parameters
     * @return \Ovh\StructType\ResellerDomainTransferResponse|bool
     */
    public function resellerDomainTransfer(\Ovh\StructType\ResellerDomainTransfer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->resellerDomainTransfer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\ResellerDomainCreateASIAResponse|\Ovh\StructType\ResellerDomainCreateCATResponse|\Ovh\StructType\ResellerDomainCreateITResponse|\Ovh\StructType\ResellerDomainCreateResponse|\Ovh\StructType\ResellerDomainRenewResponse|\Ovh\StructType\ResellerDomainRestoreResponse|\Ovh\StructType\ResellerDomainTransferASIAResponse|\Ovh\StructType\ResellerDomainTransferITResponse|\Ovh\StructType\ResellerDomainTransferResponse
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
