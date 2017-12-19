<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\PasswordSoapi $parameters
     * @return \Ovh\StructType\PasswordSoapiResponse|bool
     */
    public function passwordSoapi(\Ovh\StructType\PasswordSoapi $parameters)
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
     * @param \Ovh\StructType\PasswordManager $parameters
     * @return \Ovh\StructType\PasswordManagerResponse|bool
     */
    public function passwordManager(\Ovh\StructType\PasswordManager $parameters)
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
     * @return \Ovh\StructType\PasswordManagerResponse|\Ovh\StructType\PasswordSoapiResponse
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
