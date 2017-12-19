<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Service ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Service extends SoapClientBase
{
    /**
     * Method to call the operation originally named serviceGroupGetAllInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupGetAllInfo $parameters
     * @return \PayPal\StructType\ServiceGroupGetAllInfoResponse|bool
     */
    public function serviceGroupGetAllInfo(\PayPal\StructType\ServiceGroupGetAllInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupGetAllInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupList $parameters
     * @return \PayPal\StructType\ServiceGroupListResponse|bool
     */
    public function serviceGroupList(\PayPal\StructType\ServiceGroupList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceListPaginated
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceListPaginated $parameters
     * @return \PayPal\StructType\ServiceListPaginatedResponse|bool
     */
    public function serviceListPaginated(\PayPal\StructType\ServiceListPaginated $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceListPaginated($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupCreate $parameters
     * @return \PayPal\StructType\ServiceGroupCreateResponse|bool
     */
    public function serviceGroupCreate(\PayPal\StructType\ServiceGroupCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceModifyContact
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceModifyContact $parameters
     * @return \PayPal\StructType\ServiceModifyContactResponse|bool
     */
    public function serviceModifyContact(\PayPal\StructType\ServiceModifyContact $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceModifyContact($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceModifyOwner
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceModifyOwner $parameters
     * @return \PayPal\StructType\ServiceModifyOwnerResponse|bool
     */
    public function serviceModifyOwner(\PayPal\StructType\ServiceModifyOwner $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceModifyOwner($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceModifyOwnerInfos
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceModifyOwnerInfos $parameters
     * @return \PayPal\StructType\ServiceModifyOwnerInfosResponse|bool
     */
    public function serviceModifyOwnerInfos(\PayPal\StructType\ServiceModifyOwnerInfos $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceModifyOwnerInfos($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupDelete $parameters
     * @return \PayPal\StructType\ServiceGroupDeleteResponse|bool
     */
    public function serviceGroupDelete(\PayPal\StructType\ServiceGroupDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceList $parameters
     * @return \PayPal\StructType\ServiceListResponse|bool
     */
    public function serviceList(\PayPal\StructType\ServiceList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupSetComment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupSetComment $parameters
     * @return \PayPal\StructType\ServiceGroupSetCommentResponse|bool
     */
    public function serviceGroupSetComment(\PayPal\StructType\ServiceGroupSetComment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupSetComment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupRemoveService
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupRemoveService $parameters
     * @return \PayPal\StructType\ServiceGroupRemoveServiceResponse|bool
     */
    public function serviceGroupRemoveService(\PayPal\StructType\ServiceGroupRemoveService $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupRemoveService($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceFreedomList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceFreedomList $parameters
     * @return \PayPal\StructType\ServiceFreedomListResponse|bool
     */
    public function serviceFreedomList(\PayPal\StructType\ServiceFreedomList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceFreedomList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupSetName
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupSetName $parameters
     * @return \PayPal\StructType\ServiceGroupSetNameResponse|bool
     */
    public function serviceGroupSetName(\PayPal\StructType\ServiceGroupSetName $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupSetName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupInfo $parameters
     * @return \PayPal\StructType\ServiceGroupInfoResponse|bool
     */
    public function serviceGroupInfo(\PayPal\StructType\ServiceGroupInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceGroupAddService
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\ServiceGroupAddService $parameters
     * @return \PayPal\StructType\ServiceGroupAddServiceResponse|bool
     */
    public function serviceGroupAddService(\PayPal\StructType\ServiceGroupAddService $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceGroupAddService($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\ServiceFreedomListResponse|\PayPal\StructType\ServiceGroupAddServiceResponse|\PayPal\StructType\ServiceGroupCreateResponse|\PayPal\StructType\ServiceGroupDeleteResponse|\PayPal\StructType\ServiceGroupGetAllInfoResponse|\PayPal\StructType\ServiceGroupInfoResponse|\PayPal\StructType\ServiceGroupListResponse|\PayPal\StructType\ServiceGroupRemoveServiceResponse|\PayPal\StructType\ServiceGroupSetCommentResponse|\PayPal\StructType\ServiceGroupSetNameResponse|\PayPal\StructType\ServiceListPaginatedResponse|\PayPal\StructType\ServiceListResponse|\PayPal\StructType\ServiceModifyContactResponse|\PayPal\StructType\ServiceModifyOwnerInfosResponse|\PayPal\StructType\ServiceModifyOwnerResponse
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
