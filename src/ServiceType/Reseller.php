<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\ResellerDomainTransferIT $parameters
     * @return \PayPal\StructType\ResellerDomainTransferITResponse|bool
     */
    public function resellerDomainTransferIT(\PayPal\StructType\ResellerDomainTransferIT $parameters)
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
     * @param \PayPal\StructType\ResellerDomainRestore $parameters
     * @return \PayPal\StructType\ResellerDomainRestoreResponse|bool
     */
    public function resellerDomainRestore(\PayPal\StructType\ResellerDomainRestore $parameters)
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
     * @param \PayPal\StructType\ResellerDomainRenew $parameters
     * @return \PayPal\StructType\ResellerDomainRenewResponse|bool
     */
    public function resellerDomainRenew(\PayPal\StructType\ResellerDomainRenew $parameters)
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
     * @param \PayPal\StructType\ResellerDomainCreate $parameters
     * @return \PayPal\StructType\ResellerDomainCreateResponse|bool
     */
    public function resellerDomainCreate(\PayPal\StructType\ResellerDomainCreate $parameters)
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
     * @param \PayPal\StructType\ResellerDomainCreateIT $parameters
     * @return \PayPal\StructType\ResellerDomainCreateITResponse|bool
     */
    public function resellerDomainCreateIT(\PayPal\StructType\ResellerDomainCreateIT $parameters)
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
     * @param \PayPal\StructType\ResellerDomainTransferASIA $parameters
     * @return \PayPal\StructType\ResellerDomainTransferASIAResponse|bool
     */
    public function resellerDomainTransferASIA(\PayPal\StructType\ResellerDomainTransferASIA $parameters)
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
     * @param \PayPal\StructType\ResellerDomainCreateCAT $parameters
     * @return \PayPal\StructType\ResellerDomainCreateCATResponse|bool
     */
    public function resellerDomainCreateCAT(\PayPal\StructType\ResellerDomainCreateCAT $parameters)
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
     * @param \PayPal\StructType\ResellerDomainCreateASIA $parameters
     * @return \PayPal\StructType\ResellerDomainCreateASIAResponse|bool
     */
    public function resellerDomainCreateASIA(\PayPal\StructType\ResellerDomainCreateASIA $parameters)
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
     * @param \PayPal\StructType\ResellerDomainTransfer $parameters
     * @return \PayPal\StructType\ResellerDomainTransferResponse|bool
     */
    public function resellerDomainTransfer(\PayPal\StructType\ResellerDomainTransfer $parameters)
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
     * @return \PayPal\StructType\ResellerDomainCreateASIAResponse|\PayPal\StructType\ResellerDomainCreateCATResponse|\PayPal\StructType\ResellerDomainCreateITResponse|\PayPal\StructType\ResellerDomainCreateResponse|\PayPal\StructType\ResellerDomainRenewResponse|\PayPal\StructType\ResellerDomainRestoreResponse|\PayPal\StructType\ResellerDomainTransferASIAResponse|\PayPal\StructType\ResellerDomainTransferITResponse|\PayPal\StructType\ResellerDomainTransferResponse
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
