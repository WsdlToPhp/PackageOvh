<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\BillingInvoiceList $parameters
     * @return \Ovh\StructType\BillingInvoiceListResponse|bool
     */
    public function billingInvoiceList(\Ovh\StructType\BillingInvoiceList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('billingInvoiceList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\BillingGetReferencesToExpired $parameters
     * @return \Ovh\StructType\BillingGetReferencesToExpiredResponse|bool
     */
    public function billingGetReferencesToExpired(\Ovh\StructType\BillingGetReferencesToExpired $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('billingGetReferencesToExpired', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\BillingGetAccessByNic $parameters
     * @return \Ovh\StructType\BillingGetAccessByNicResponse|bool
     */
    public function billingGetAccessByNic(\Ovh\StructType\BillingGetAccessByNic $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('billingGetAccessByNic', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\BillingInvoiceInfo $parameters
     * @return \Ovh\StructType\BillingInvoiceInfoResponse|bool
     */
    public function billingInvoiceInfo(\Ovh\StructType\BillingInvoiceInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('billingInvoiceInfo', array(
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
     * @return \Ovh\StructType\BillingGetAccessByNicResponse|\Ovh\StructType\BillingGetReferencesToExpiredResponse|\Ovh\StructType\BillingInvoiceInfoResponse|\Ovh\StructType\BillingInvoiceListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
