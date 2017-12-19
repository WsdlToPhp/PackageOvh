<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Pop ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Pop extends SoapClientBase
{
    /**
     * Method to call the operation originally named popDetachMasterNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopDetachMasterNic $parameters
     * @return \PayPal\StructType\PopDetachMasterNicResponse|bool
     */
    public function popDetachMasterNic(\PayPal\StructType\PopDetachMasterNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popDetachMasterNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopList $parameters
     * @return \PayPal\StructType\PopListResponse|bool
     */
    public function popList(\PayPal\StructType\PopList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popUpgradeQuota
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopUpgradeQuota $parameters
     * @return \PayPal\StructType\PopUpgradeQuotaResponse|bool
     */
    public function popUpgradeQuota(\PayPal\StructType\PopUpgradeQuota $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popUpgradeQuota($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopDel $parameters
     * @return \PayPal\StructType\PopDelResponse|bool
     */
    public function popDel(\PayPal\StructType\PopDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popListByMasterNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopListByMasterNic $parameters
     * @return \PayPal\StructType\PopListByMasterNicResponse|bool
     */
    public function popListByMasterNic(\PayPal\StructType\PopListByMasterNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popListByMasterNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popModifyDescription
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopModifyDescription $parameters
     * @return \PayPal\StructType\PopModifyDescriptionResponse|bool
     */
    public function popModifyDescription(\PayPal\StructType\PopModifyDescription $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popModifyDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopInfo $parameters
     * @return \PayPal\StructType\PopInfoResponse|bool
     */
    public function popInfo(\PayPal\StructType\PopInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popModifyPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopModifyPassword $parameters
     * @return \PayPal\StructType\PopModifyPasswordResponse|bool
     */
    public function popModifyPassword(\PayPal\StructType\PopModifyPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popModifyPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popAttachMasterNic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopAttachMasterNic $parameters
     * @return \PayPal\StructType\PopAttachMasterNicResponse|bool
     */
    public function popAttachMasterNic(\PayPal\StructType\PopAttachMasterNic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popAttachMasterNic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopAdd $parameters
     * @return \PayPal\StructType\PopAddResponse|bool
     */
    public function popAdd(\PayPal\StructType\PopAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named popGetQuota
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\PopGetQuota $parameters
     * @return \PayPal\StructType\PopGetQuotaResponse|bool
     */
    public function popGetQuota(\PayPal\StructType\PopGetQuota $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->popGetQuota($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\PopAddResponse|\PayPal\StructType\PopAttachMasterNicResponse|\PayPal\StructType\PopDelResponse|\PayPal\StructType\PopDetachMasterNicResponse|\PayPal\StructType\PopGetQuotaResponse|\PayPal\StructType\PopInfoResponse|\PayPal\StructType\PopListByMasterNicResponse|\PayPal\StructType\PopListResponse|\PayPal\StructType\PopModifyDescriptionResponse|\PayPal\StructType\PopModifyPasswordResponse|\PayPal\StructType\PopUpgradeQuotaResponse
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
