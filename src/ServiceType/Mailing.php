<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\MailingListModeratorDel $parameters
     * @return \Ovh\StructType\MailingListModeratorDelResponse|bool
     */
    public function mailingListModeratorDel(\Ovh\StructType\MailingListModeratorDel $parameters)
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
     * @param \Ovh\StructType\MailingListModeratorList $parameters
     * @return \Ovh\StructType\MailingListModeratorListResponse|bool
     */
    public function mailingListModeratorList(\Ovh\StructType\MailingListModeratorList $parameters)
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
     * @param \Ovh\StructType\MailingListFullInfo $parameters
     * @return \Ovh\StructType\MailingListFullInfoResponse|bool
     */
    public function mailingListFullInfo(\Ovh\StructType\MailingListFullInfo $parameters)
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
     * @param \Ovh\StructType\MailingListDel $parameters
     * @return \Ovh\StructType\MailingListDelResponse|bool
     */
    public function mailingListDel(\Ovh\StructType\MailingListDel $parameters)
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
     * @param \Ovh\StructType\MailingListSubscriberAdd $parameters
     * @return \Ovh\StructType\MailingListSubscriberAddResponse|bool
     */
    public function mailingListSubscriberAdd(\Ovh\StructType\MailingListSubscriberAdd $parameters)
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
     * @param \Ovh\StructType\MailingListModeratorAdd $parameters
     * @return \Ovh\StructType\MailingListModeratorAddResponse|bool
     */
    public function mailingListModeratorAdd(\Ovh\StructType\MailingListModeratorAdd $parameters)
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
     * @param \Ovh\StructType\MailingListSubscriberList $parameters
     * @return \Ovh\StructType\MailingListSubscriberListResponse|bool
     */
    public function mailingListSubscriberList(\Ovh\StructType\MailingListSubscriberList $parameters)
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
     * @param \Ovh\StructType\MailingListSubscriberDel $parameters
     * @return \Ovh\StructType\MailingListSubscriberDelResponse|bool
     */
    public function mailingListSubscriberDel(\Ovh\StructType\MailingListSubscriberDel $parameters)
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
     * @param \Ovh\StructType\MailingListInfo $parameters
     * @return \Ovh\StructType\MailingListInfoResponse|bool
     */
    public function mailingListInfo(\Ovh\StructType\MailingListInfo $parameters)
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
     * @param \Ovh\StructType\MailingListModify $parameters
     * @return \Ovh\StructType\MailingListModifyResponse|bool
     */
    public function mailingListModify(\Ovh\StructType\MailingListModify $parameters)
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
     * @param \Ovh\StructType\MailingListAdd $parameters
     * @return \Ovh\StructType\MailingListAddResponse|bool
     */
    public function mailingListAdd(\Ovh\StructType\MailingListAdd $parameters)
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
     * @param \Ovh\StructType\MailingListList $parameters
     * @return \Ovh\StructType\MailingListListResponse|bool
     */
    public function mailingListList(\Ovh\StructType\MailingListList $parameters)
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
     * @param \Ovh\StructType\MailingListSubscriberListByEmail $parameters
     * @return \Ovh\StructType\MailingListSubscriberListByEmailResponse|bool
     */
    public function mailingListSubscriberListByEmail(\Ovh\StructType\MailingListSubscriberListByEmail $parameters)
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
     * @return \Ovh\StructType\MailingListAddResponse|\Ovh\StructType\MailingListDelResponse|\Ovh\StructType\MailingListFullInfoResponse|\Ovh\StructType\MailingListInfoResponse|\Ovh\StructType\MailingListListResponse|\Ovh\StructType\MailingListModeratorAddResponse|\Ovh\StructType\MailingListModeratorDelResponse|\Ovh\StructType\MailingListModeratorListResponse|\Ovh\StructType\MailingListModifyResponse|\Ovh\StructType\MailingListSubscriberAddResponse|\Ovh\StructType\MailingListSubscriberDelResponse|\Ovh\StructType\MailingListSubscriberListByEmailResponse|\Ovh\StructType\MailingListSubscriberListResponse
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
