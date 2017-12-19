<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Mailing ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Mailing extends SoapClientBase
{
    /**
     * Method to call the operation originally named mailingListModeratorDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListModeratorDel $parameters
     * @return \PayPal\StructType\MailingListModeratorDelResponse|bool
     */
    public function mailingListModeratorDel(\PayPal\StructType\MailingListModeratorDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListModeratorDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListModeratorList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListModeratorList $parameters
     * @return \PayPal\StructType\MailingListModeratorListResponse|bool
     */
    public function mailingListModeratorList(\PayPal\StructType\MailingListModeratorList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListModeratorList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListFullInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListFullInfo $parameters
     * @return \PayPal\StructType\MailingListFullInfoResponse|bool
     */
    public function mailingListFullInfo(\PayPal\StructType\MailingListFullInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListFullInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListDel $parameters
     * @return \PayPal\StructType\MailingListDelResponse|bool
     */
    public function mailingListDel(\PayPal\StructType\MailingListDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListSubscriberAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListSubscriberAdd $parameters
     * @return \PayPal\StructType\MailingListSubscriberAddResponse|bool
     */
    public function mailingListSubscriberAdd(\PayPal\StructType\MailingListSubscriberAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListSubscriberAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListModeratorAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListModeratorAdd $parameters
     * @return \PayPal\StructType\MailingListModeratorAddResponse|bool
     */
    public function mailingListModeratorAdd(\PayPal\StructType\MailingListModeratorAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListModeratorAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListSubscriberList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListSubscriberList $parameters
     * @return \PayPal\StructType\MailingListSubscriberListResponse|bool
     */
    public function mailingListSubscriberList(\PayPal\StructType\MailingListSubscriberList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListSubscriberList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListSubscriberDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListSubscriberDel $parameters
     * @return \PayPal\StructType\MailingListSubscriberDelResponse|bool
     */
    public function mailingListSubscriberDel(\PayPal\StructType\MailingListSubscriberDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListSubscriberDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListInfo $parameters
     * @return \PayPal\StructType\MailingListInfoResponse|bool
     */
    public function mailingListInfo(\PayPal\StructType\MailingListInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListModify $parameters
     * @return \PayPal\StructType\MailingListModifyResponse|bool
     */
    public function mailingListModify(\PayPal\StructType\MailingListModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListAdd $parameters
     * @return \PayPal\StructType\MailingListAddResponse|bool
     */
    public function mailingListAdd(\PayPal\StructType\MailingListAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListList $parameters
     * @return \PayPal\StructType\MailingListListResponse|bool
     */
    public function mailingListList(\PayPal\StructType\MailingListList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named mailingListSubscriberListByEmail
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MailingListSubscriberListByEmail $parameters
     * @return \PayPal\StructType\MailingListSubscriberListByEmailResponse|bool
     */
    public function mailingListSubscriberListByEmail(\PayPal\StructType\MailingListSubscriberListByEmail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->mailingListSubscriberListByEmail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\MailingListAddResponse|\PayPal\StructType\MailingListDelResponse|\PayPal\StructType\MailingListFullInfoResponse|\PayPal\StructType\MailingListInfoResponse|\PayPal\StructType\MailingListListResponse|\PayPal\StructType\MailingListModeratorAddResponse|\PayPal\StructType\MailingListModeratorDelResponse|\PayPal\StructType\MailingListModeratorListResponse|\PayPal\StructType\MailingListModifyResponse|\PayPal\StructType\MailingListSubscriberAddResponse|\PayPal\StructType\MailingListSubscriberDelResponse|\PayPal\StructType\MailingListSubscriberListByEmailResponse|\PayPal\StructType\MailingListSubscriberListResponse
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
