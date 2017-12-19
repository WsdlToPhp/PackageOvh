<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Billing ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Billing extends SoapClientBase
{
    /**
     * Method to call the operation originally named billingInvoiceList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\BillingInvoiceList $parameters
     * @return \PayPal\StructType\BillingInvoiceListResponse|bool
     */
    public function billingInvoiceList(\PayPal\StructType\BillingInvoiceList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->billingInvoiceList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named billingGetReferencesToExpired
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\BillingGetReferencesToExpired $parameters
     * @return \PayPal\StructType\BillingGetReferencesToExpiredResponse|bool
     */
    public function billingGetReferencesToExpired(\PayPal\StructType\BillingGetReferencesToExpired $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->billingGetReferencesToExpired($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named billingGetAccessByNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\BillingGetAccessByNic $parameters
     * @return \PayPal\StructType\BillingGetAccessByNicResponse|bool
     */
    public function billingGetAccessByNic(\PayPal\StructType\BillingGetAccessByNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->billingGetAccessByNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named billingInvoiceInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\BillingInvoiceInfo $parameters
     * @return \PayPal\StructType\BillingInvoiceInfoResponse|bool
     */
    public function billingInvoiceInfo(\PayPal\StructType\BillingInvoiceInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->billingInvoiceInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\BillingGetAccessByNicResponse|\PayPal\StructType\BillingGetReferencesToExpiredResponse|\PayPal\StructType\BillingInvoiceInfoResponse|\PayPal\StructType\BillingInvoiceListResponse
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
