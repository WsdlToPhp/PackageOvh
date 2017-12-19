<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Support ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Support extends SoapClientBase
{
    /**
     * Method to call the operation originally named supportGetNicDomains
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportGetNicDomains $parameters
     * @return \PayPal\StructType\SupportGetNicDomainsResponse|bool
     */
    public function supportGetNicDomains(\PayPal\StructType\SupportGetNicDomains $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportGetNicDomains($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportGetThreads
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportGetThreads $parameters
     * @return \PayPal\StructType\SupportGetThreadsResponse|bool
     */
    public function supportGetThreads(\PayPal\StructType\SupportGetThreads $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportGetThreads($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportSendMessage
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportSendMessage $parameters
     * @return \PayPal\StructType\SupportSendMessageResponse|bool
     */
    public function supportSendMessage(\PayPal\StructType\SupportSendMessage $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportSendMessage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportGetAllVisibleCategories
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportGetAllVisibleCategories $parameters
     * @return \PayPal\StructType\SupportGetAllVisibleCategoriesResponse|bool
     */
    public function supportGetAllVisibleCategories(\PayPal\StructType\SupportGetAllVisibleCategories $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportGetAllVisibleCategories($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportGetThreadTree
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportGetThreadTree $parameters
     * @return \PayPal\StructType\SupportGetThreadTreeResponse|bool
     */
    public function supportGetThreadTree(\PayPal\StructType\SupportGetThreadTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportGetThreadTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportReportAnswerProblem
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportReportAnswerProblem $parameters
     * @return \PayPal\StructType\SupportReportAnswerProblemResponse|bool
     */
    public function supportReportAnswerProblem(\PayPal\StructType\SupportReportAnswerProblem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportReportAnswerProblem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportGetFullMessage
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportGetFullMessage $parameters
     * @return \PayPal\StructType\SupportGetFullMessageResponse|bool
     */
    public function supportGetFullMessage(\PayPal\StructType\SupportGetFullMessage $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportGetFullMessage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportCloseThreads
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportCloseThreads $parameters
     * @return \PayPal\StructType\SupportCloseThreadsResponse|bool
     */
    public function supportCloseThreads(\PayPal\StructType\SupportCloseThreads $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportCloseThreads($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named supportReactivateThread
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SupportReactivateThread $parameters
     * @return \PayPal\StructType\SupportReactivateThreadResponse|bool
     */
    public function supportReactivateThread(\PayPal\StructType\SupportReactivateThread $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->supportReactivateThread($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\SupportCloseThreadsResponse|\PayPal\StructType\SupportGetAllVisibleCategoriesResponse|\PayPal\StructType\SupportGetFullMessageResponse|\PayPal\StructType\SupportGetNicDomainsResponse|\PayPal\StructType\SupportGetThreadsResponse|\PayPal\StructType\SupportGetThreadTreeResponse|\PayPal\StructType\SupportReactivateThreadResponse|\PayPal\StructType\SupportReportAnswerProblemResponse|\PayPal\StructType\SupportSendMessageResponse
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
