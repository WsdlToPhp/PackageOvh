<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Order ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Order extends SoapClientBase
{
    /**
     * Method to call the operation originally named orderTelephonySmsCredit
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrderTelephonySmsCredit $parameters
     * @return \PayPal\StructType\OrderTelephonySmsCreditResponse|bool
     */
    public function orderTelephonySmsCredit(\PayPal\StructType\OrderTelephonySmsCredit $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->orderTelephonySmsCredit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named orderAccountCredit
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrderAccountCredit $parameters
     * @return \PayPal\StructType\OrderAccountCreditResponse|bool
     */
    public function orderAccountCredit(\PayPal\StructType\OrderAccountCredit $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->orderAccountCredit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named orderEmailMxPlan
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrderEmailMxPlan $parameters
     * @return \PayPal\StructType\OrderEmailMxPlanResponse|bool
     */
    public function orderEmailMxPlan(\PayPal\StructType\OrderEmailMxPlan $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->orderEmailMxPlan($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named orderEmailMxLarge
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrderEmailMxLarge $parameters
     * @return \PayPal\StructType\OrderEmailMxLargeResponse|bool
     */
    public function orderEmailMxLarge(\PayPal\StructType\OrderEmailMxLarge $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->orderEmailMxLarge($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named orderDedicatedFailover
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrderDedicatedFailover $parameters
     * @return \PayPal\StructType\OrderDedicatedFailoverResponse|bool
     */
    public function orderDedicatedFailover(\PayPal\StructType\OrderDedicatedFailover $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->orderDedicatedFailover($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named orderDedicatedFailoverRipe
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\OrderDedicatedFailoverRipe $parameters
     * @return \PayPal\StructType\OrderDedicatedFailoverRipeResponse|bool
     */
    public function orderDedicatedFailoverRipe(\PayPal\StructType\OrderDedicatedFailoverRipe $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->orderDedicatedFailoverRipe($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\OrderAccountCreditResponse|\PayPal\StructType\OrderDedicatedFailoverResponse|\PayPal\StructType\OrderDedicatedFailoverRipeResponse|\PayPal\StructType\OrderEmailMxLargeResponse|\PayPal\StructType\OrderEmailMxPlanResponse|\PayPal\StructType\OrderTelephonySmsCreditResponse
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
