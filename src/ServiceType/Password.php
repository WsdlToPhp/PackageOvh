<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Password ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Password extends SoapClientBase
{
    /**
     * Method to call the operation originally named passwordSoapi
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PasswordSoapi $parameters
     * @return \PayPal\StructType\PasswordSoapiResponse|bool
     */
    public function passwordSoapi(\PayPal\StructType\PasswordSoapi $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->passwordSoapi($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named passwordManager
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PasswordManager $parameters
     * @return \PayPal\StructType\PasswordManagerResponse|bool
     */
    public function passwordManager(\PayPal\StructType\PasswordManager $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->passwordManager($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\PasswordManagerResponse|\PayPal\StructType\PasswordSoapiResponse
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
