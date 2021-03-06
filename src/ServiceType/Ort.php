<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Ort ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Ort extends SoapClientBase
{
    /**
     * Method to call the operation originally named ortDomainDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\OrtDomainDel $parameters
     * @return \Ovh\StructType\OrtDomainDelResponse|bool
     */
    public function ortDomainDel(\Ovh\StructType\OrtDomainDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('ortDomainDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ortDomainList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\OrtDomainList $parameters
     * @return \Ovh\StructType\OrtDomainListResponse|bool
     */
    public function ortDomainList(\Ovh\StructType\OrtDomainList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('ortDomainList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ortDomainAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\OrtDomainAdd $parameters
     * @return \Ovh\StructType\OrtDomainAddResponse|bool
     */
    public function ortDomainAdd(\Ovh\StructType\OrtDomainAdd $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('ortDomainAdd', array(
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
     * @return \Ovh\StructType\OrtDomainAddResponse|\Ovh\StructType\OrtDomainDelResponse|\Ovh\StructType\OrtDomainListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
