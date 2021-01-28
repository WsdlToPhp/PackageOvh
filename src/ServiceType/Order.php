<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\OrderTelephonySmsCredit $parameters
     * @return \Ovh\StructType\OrderTelephonySmsCreditResponse|bool
     */
    public function orderTelephonySmsCredit(\Ovh\StructType\OrderTelephonySmsCredit $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('orderTelephonySmsCredit', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\OrderAccountCredit $parameters
     * @return \Ovh\StructType\OrderAccountCreditResponse|bool
     */
    public function orderAccountCredit(\Ovh\StructType\OrderAccountCredit $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('orderAccountCredit', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\OrderEmailMxPlan $parameters
     * @return \Ovh\StructType\OrderEmailMxPlanResponse|bool
     */
    public function orderEmailMxPlan(\Ovh\StructType\OrderEmailMxPlan $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('orderEmailMxPlan', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\OrderEmailMxLarge $parameters
     * @return \Ovh\StructType\OrderEmailMxLargeResponse|bool
     */
    public function orderEmailMxLarge(\Ovh\StructType\OrderEmailMxLarge $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('orderEmailMxLarge', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\OrderDedicatedFailover $parameters
     * @return \Ovh\StructType\OrderDedicatedFailoverResponse|bool
     */
    public function orderDedicatedFailover(\Ovh\StructType\OrderDedicatedFailover $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('orderDedicatedFailover', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\OrderDedicatedFailoverRipe $parameters
     * @return \Ovh\StructType\OrderDedicatedFailoverRipeResponse|bool
     */
    public function orderDedicatedFailoverRipe(\Ovh\StructType\OrderDedicatedFailoverRipe $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('orderDedicatedFailoverRipe', array(
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
     * @return \Ovh\StructType\OrderAccountCreditResponse|\Ovh\StructType\OrderDedicatedFailoverResponse|\Ovh\StructType\OrderDedicatedFailoverRipeResponse|\Ovh\StructType\OrderEmailMxLargeResponse|\Ovh\StructType\OrderEmailMxPlanResponse|\Ovh\StructType\OrderTelephonySmsCreditResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
