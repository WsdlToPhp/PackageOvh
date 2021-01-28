<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Responder ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Responder extends SoapClientBase
{
    /**
     * Method to call the operation originally named responderEmailList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResponderEmailList $parameters
     * @return \Ovh\StructType\ResponderEmailListResponse|bool
     */
    public function responderEmailList(\Ovh\StructType\ResponderEmailList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('responderEmailList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResponderEmailInfo $parameters
     * @return \Ovh\StructType\ResponderEmailInfoResponse|bool
     */
    public function responderEmailInfo(\Ovh\StructType\ResponderEmailInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('responderEmailInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResponderEmailDel $parameters
     * @return \Ovh\StructType\ResponderEmailDelResponse|bool
     */
    public function responderEmailDel(\Ovh\StructType\ResponderEmailDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('responderEmailDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResponderEmailModify $parameters
     * @return \Ovh\StructType\ResponderEmailModifyResponse|bool
     */
    public function responderEmailModify(\Ovh\StructType\ResponderEmailModify $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('responderEmailModify', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named responderEmailAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\ResponderEmailAdd $parameters
     * @return \Ovh\StructType\ResponderEmailAddResponse|bool
     */
    public function responderEmailAdd(\Ovh\StructType\ResponderEmailAdd $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('responderEmailAdd', array(
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
     * @return \Ovh\StructType\ResponderEmailAddResponse|\Ovh\StructType\ResponderEmailDelResponse|\Ovh\StructType\ResponderEmailInfoResponse|\Ovh\StructType\ResponderEmailListResponse|\Ovh\StructType\ResponderEmailModifyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
