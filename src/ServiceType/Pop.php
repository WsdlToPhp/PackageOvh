<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\PopDetachMasterNic $parameters
     * @return \Ovh\StructType\PopDetachMasterNicResponse|bool
     */
    public function popDetachMasterNic(\Ovh\StructType\PopDetachMasterNic $parameters)
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
     * @param \Ovh\StructType\PopList $parameters
     * @return \Ovh\StructType\PopListResponse|bool
     */
    public function popList(\Ovh\StructType\PopList $parameters)
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
     * @param \Ovh\StructType\PopUpgradeQuota $parameters
     * @return \Ovh\StructType\PopUpgradeQuotaResponse|bool
     */
    public function popUpgradeQuota(\Ovh\StructType\PopUpgradeQuota $parameters)
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
     * @param \Ovh\StructType\PopDel $parameters
     * @return \Ovh\StructType\PopDelResponse|bool
     */
    public function popDel(\Ovh\StructType\PopDel $parameters)
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
     * @param \Ovh\StructType\PopListByMasterNic $parameters
     * @return \Ovh\StructType\PopListByMasterNicResponse|bool
     */
    public function popListByMasterNic(\Ovh\StructType\PopListByMasterNic $parameters)
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
     * @param \Ovh\StructType\PopModifyDescription $parameters
     * @return \Ovh\StructType\PopModifyDescriptionResponse|bool
     */
    public function popModifyDescription(\Ovh\StructType\PopModifyDescription $parameters)
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
     * @param \Ovh\StructType\PopInfo $parameters
     * @return \Ovh\StructType\PopInfoResponse|bool
     */
    public function popInfo(\Ovh\StructType\PopInfo $parameters)
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
     * @param \Ovh\StructType\PopModifyPassword $parameters
     * @return \Ovh\StructType\PopModifyPasswordResponse|bool
     */
    public function popModifyPassword(\Ovh\StructType\PopModifyPassword $parameters)
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
     * @param \Ovh\StructType\PopAttachMasterNic $parameters
     * @return \Ovh\StructType\PopAttachMasterNicResponse|bool
     */
    public function popAttachMasterNic(\Ovh\StructType\PopAttachMasterNic $parameters)
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
     * @param \Ovh\StructType\PopAdd $parameters
     * @return \Ovh\StructType\PopAddResponse|bool
     */
    public function popAdd(\Ovh\StructType\PopAdd $parameters)
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
     * @param \Ovh\StructType\PopGetQuota $parameters
     * @return \Ovh\StructType\PopGetQuotaResponse|bool
     */
    public function popGetQuota(\Ovh\StructType\PopGetQuota $parameters)
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
     * @return \Ovh\StructType\PopAddResponse|\Ovh\StructType\PopAttachMasterNicResponse|\Ovh\StructType\PopDelResponse|\Ovh\StructType\PopDetachMasterNicResponse|\Ovh\StructType\PopGetQuotaResponse|\Ovh\StructType\PopInfoResponse|\Ovh\StructType\PopListByMasterNicResponse|\Ovh\StructType\PopListResponse|\Ovh\StructType\PopModifyDescriptionResponse|\Ovh\StructType\PopModifyPasswordResponse|\Ovh\StructType\PopUpgradeQuotaResponse
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
