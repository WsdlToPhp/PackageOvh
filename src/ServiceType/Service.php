<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\ServiceGroupGetAllInfo $parameters
     * @return \Ovh\StructType\ServiceGroupGetAllInfoResponse|bool
     */
    public function serviceGroupGetAllInfo(\Ovh\StructType\ServiceGroupGetAllInfo $parameters)
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
     * @param \Ovh\StructType\ServiceGroupList $parameters
     * @return \Ovh\StructType\ServiceGroupListResponse|bool
     */
    public function serviceGroupList(\Ovh\StructType\ServiceGroupList $parameters)
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
     * @param \Ovh\StructType\ServiceListPaginated $parameters
     * @return \Ovh\StructType\ServiceListPaginatedResponse|bool
     */
    public function serviceListPaginated(\Ovh\StructType\ServiceListPaginated $parameters)
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
     * @param \Ovh\StructType\ServiceGroupCreate $parameters
     * @return \Ovh\StructType\ServiceGroupCreateResponse|bool
     */
    public function serviceGroupCreate(\Ovh\StructType\ServiceGroupCreate $parameters)
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
     * @param \Ovh\StructType\ServiceModifyContact $parameters
     * @return \Ovh\StructType\ServiceModifyContactResponse|bool
     */
    public function serviceModifyContact(\Ovh\StructType\ServiceModifyContact $parameters)
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
     * @param \Ovh\StructType\ServiceModifyOwner $parameters
     * @return \Ovh\StructType\ServiceModifyOwnerResponse|bool
     */
    public function serviceModifyOwner(\Ovh\StructType\ServiceModifyOwner $parameters)
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
     * @param \Ovh\StructType\ServiceModifyOwnerInfos $parameters
     * @return \Ovh\StructType\ServiceModifyOwnerInfosResponse|bool
     */
    public function serviceModifyOwnerInfos(\Ovh\StructType\ServiceModifyOwnerInfos $parameters)
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
     * @param \Ovh\StructType\ServiceGroupDelete $parameters
     * @return \Ovh\StructType\ServiceGroupDeleteResponse|bool
     */
    public function serviceGroupDelete(\Ovh\StructType\ServiceGroupDelete $parameters)
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
     * @param \Ovh\StructType\ServiceList $parameters
     * @return \Ovh\StructType\ServiceListResponse|bool
     */
    public function serviceList(\Ovh\StructType\ServiceList $parameters)
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
     * @param \Ovh\StructType\ServiceGroupSetComment $parameters
     * @return \Ovh\StructType\ServiceGroupSetCommentResponse|bool
     */
    public function serviceGroupSetComment(\Ovh\StructType\ServiceGroupSetComment $parameters)
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
     * @param \Ovh\StructType\ServiceGroupRemoveService $parameters
     * @return \Ovh\StructType\ServiceGroupRemoveServiceResponse|bool
     */
    public function serviceGroupRemoveService(\Ovh\StructType\ServiceGroupRemoveService $parameters)
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
     * @param \Ovh\StructType\ServiceFreedomList $parameters
     * @return \Ovh\StructType\ServiceFreedomListResponse|bool
     */
    public function serviceFreedomList(\Ovh\StructType\ServiceFreedomList $parameters)
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
     * @param \Ovh\StructType\ServiceGroupSetName $parameters
     * @return \Ovh\StructType\ServiceGroupSetNameResponse|bool
     */
    public function serviceGroupSetName(\Ovh\StructType\ServiceGroupSetName $parameters)
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
     * @param \Ovh\StructType\ServiceGroupInfo $parameters
     * @return \Ovh\StructType\ServiceGroupInfoResponse|bool
     */
    public function serviceGroupInfo(\Ovh\StructType\ServiceGroupInfo $parameters)
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
     * @param \Ovh\StructType\ServiceGroupAddService $parameters
     * @return \Ovh\StructType\ServiceGroupAddServiceResponse|bool
     */
    public function serviceGroupAddService(\Ovh\StructType\ServiceGroupAddService $parameters)
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
     * @return \Ovh\StructType\ServiceFreedomListResponse|\Ovh\StructType\ServiceGroupAddServiceResponse|\Ovh\StructType\ServiceGroupCreateResponse|\Ovh\StructType\ServiceGroupDeleteResponse|\Ovh\StructType\ServiceGroupGetAllInfoResponse|\Ovh\StructType\ServiceGroupInfoResponse|\Ovh\StructType\ServiceGroupListResponse|\Ovh\StructType\ServiceGroupRemoveServiceResponse|\Ovh\StructType\ServiceGroupSetCommentResponse|\Ovh\StructType\ServiceGroupSetNameResponse|\Ovh\StructType\ServiceListPaginatedResponse|\Ovh\StructType\ServiceListResponse|\Ovh\StructType\ServiceModifyContactResponse|\Ovh\StructType\ServiceModifyOwnerInfosResponse|\Ovh\StructType\ServiceModifyOwnerResponse
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
