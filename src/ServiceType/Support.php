<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\SupportGetNicDomains $parameters
     * @return \Ovh\StructType\SupportGetNicDomainsResponse|bool
     */
    public function supportGetNicDomains(\Ovh\StructType\SupportGetNicDomains $parameters)
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
     * @param \Ovh\StructType\SupportGetThreads $parameters
     * @return \Ovh\StructType\SupportGetThreadsResponse|bool
     */
    public function supportGetThreads(\Ovh\StructType\SupportGetThreads $parameters)
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
     * @param \Ovh\StructType\SupportSendMessage $parameters
     * @return \Ovh\StructType\SupportSendMessageResponse|bool
     */
    public function supportSendMessage(\Ovh\StructType\SupportSendMessage $parameters)
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
     * @param \Ovh\StructType\SupportGetAllVisibleCategories $parameters
     * @return \Ovh\StructType\SupportGetAllVisibleCategoriesResponse|bool
     */
    public function supportGetAllVisibleCategories(\Ovh\StructType\SupportGetAllVisibleCategories $parameters)
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
     * @param \Ovh\StructType\SupportGetThreadTree $parameters
     * @return \Ovh\StructType\SupportGetThreadTreeResponse|bool
     */
    public function supportGetThreadTree(\Ovh\StructType\SupportGetThreadTree $parameters)
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
     * @param \Ovh\StructType\SupportReportAnswerProblem $parameters
     * @return \Ovh\StructType\SupportReportAnswerProblemResponse|bool
     */
    public function supportReportAnswerProblem(\Ovh\StructType\SupportReportAnswerProblem $parameters)
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
     * @param \Ovh\StructType\SupportGetFullMessage $parameters
     * @return \Ovh\StructType\SupportGetFullMessageResponse|bool
     */
    public function supportGetFullMessage(\Ovh\StructType\SupportGetFullMessage $parameters)
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
     * @param \Ovh\StructType\SupportCloseThreads $parameters
     * @return \Ovh\StructType\SupportCloseThreadsResponse|bool
     */
    public function supportCloseThreads(\Ovh\StructType\SupportCloseThreads $parameters)
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
     * @param \Ovh\StructType\SupportReactivateThread $parameters
     * @return \Ovh\StructType\SupportReactivateThreadResponse|bool
     */
    public function supportReactivateThread(\Ovh\StructType\SupportReactivateThread $parameters)
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
     * @return \Ovh\StructType\SupportCloseThreadsResponse|\Ovh\StructType\SupportGetAllVisibleCategoriesResponse|\Ovh\StructType\SupportGetFullMessageResponse|\Ovh\StructType\SupportGetNicDomainsResponse|\Ovh\StructType\SupportGetThreadsResponse|\Ovh\StructType\SupportGetThreadTreeResponse|\Ovh\StructType\SupportReactivateThreadResponse|\Ovh\StructType\SupportReportAnswerProblemResponse|\Ovh\StructType\SupportSendMessageResponse
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
