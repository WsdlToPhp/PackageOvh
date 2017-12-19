<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Dedicated ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Dedicated extends SoapClientBase
{
    /**
     * Method to call the operation originally named dedicatedReverseDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedReverseDel $parameters
     * @return \PayPal\StructType\DedicatedReverseDelResponse|bool
     */
    public function dedicatedReverseDel(\PayPal\StructType\DedicatedReverseDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedReverseDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedDelServiceMonitoringAlert
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedDelServiceMonitoringAlert $parameters
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlertResponse|bool
     */
    public function dedicatedDelServiceMonitoringAlert(\PayPal\StructType\DedicatedDelServiceMonitoringAlert $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedDelServiceMonitoringAlert($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedAddServiceMonitoringAlertSMS
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedAddServiceMonitoringAlertSMS $parameters
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertSMSResponse|bool
     */
    public function dedicatedAddServiceMonitoringAlertSMS(\PayPal\StructType\DedicatedAddServiceMonitoringAlertSMS $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedAddServiceMonitoringAlertSMS($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIpLoadBalancingList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingList $parameters
     * @return \PayPal\StructType\DedicatedIpLoadBalancingListResponse|bool
     */
    public function dedicatedIpLoadBalancingList(\PayPal\StructType\DedicatedIpLoadBalancingList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedBackupReinstallConfiguration
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupReinstallConfiguration $parameters
     * @return \PayPal\StructType\DedicatedBackupReinstallConfigurationResponse|bool
     */
    public function dedicatedBackupReinstallConfiguration(\PayPal\StructType\DedicatedBackupReinstallConfiguration $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupReinstallConfiguration($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupGetHisto
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupGetHisto $parameters
     * @return \PayPal\StructType\DedicatedBackupGetHistoResponse|bool
     */
    public function dedicatedBackupGetHisto(\PayPal\StructType\DedicatedBackupGetHisto $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupGetHisto($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupUpdate $parameters
     * @return \PayPal\StructType\DedicatedBackupUpdateResponse|bool
     */
    public function dedicatedBackupUpdate(\PayPal\StructType\DedicatedBackupUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupUpdate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedNetbootGetRescueEmail
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedNetbootGetRescueEmail $parameters
     * @return \PayPal\StructType\DedicatedNetbootGetRescueEmailResponse|bool
     */
    public function dedicatedNetbootGetRescueEmail(\PayPal\StructType\DedicatedNetbootGetRescueEmail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedNetbootGetRescueEmail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRtmListBackdoor
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRtmListBackdoor $parameters
     * @return \PayPal\StructType\DedicatedRtmListBackdoorResponse|bool
     */
    public function dedicatedRtmListBackdoor(\PayPal\StructType\DedicatedRtmListBackdoor $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRtmListBackdoor($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedMonitoringNotificationCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringNotificationCreate $parameters
     * @return \PayPal\StructType\DedicatedMonitoringNotificationCreateResponse|bool
     */
    public function dedicatedMonitoringNotificationCreate(\PayPal\StructType\DedicatedMonitoringNotificationCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringNotificationCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupList $parameters
     * @return \PayPal\StructType\DedicatedBackupListResponse|bool
     */
    public function dedicatedBackupList(\PayPal\StructType\DedicatedBackupList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedNetbootGetAll
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedNetbootGetAll $parameters
     * @return \PayPal\StructType\DedicatedNetbootGetAllResponse|bool
     */
    public function dedicatedNetbootGetAll(\PayPal\StructType\DedicatedNetbootGetAll $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedNetbootGetAll($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedVirtualMacIpAvailableGetList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedVirtualMacIpAvailableGetList $parameters
     * @return \PayPal\StructType\DedicatedVirtualMacIpAvailableGetListResponse|bool
     */
    public function dedicatedVirtualMacIpAvailableGetList(\PayPal\StructType\DedicatedVirtualMacIpAvailableGetList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedVirtualMacIpAvailableGetList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringSMSCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringSMSCreate $parameters
     * @return \PayPal\StructType\DedicatedMonitoringSMSCreateResponse|bool
     */
    public function dedicatedMonitoringSMSCreate(\PayPal\StructType\DedicatedMonitoringSMSCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringSMSCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRipeQuery
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRipeQuery $parameters
     * @return \PayPal\StructType\DedicatedRipeQueryResponse|bool
     */
    public function dedicatedRipeQuery(\PayPal\StructType\DedicatedRipeQuery $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRipeQuery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupFtpPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupFtpPassword $parameters
     * @return \PayPal\StructType\DedicatedBackupFtpPasswordResponse|bool
     */
    public function dedicatedBackupFtpPassword(\PayPal\StructType\DedicatedBackupFtpPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupFtpPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRtmBackdoorUpdateAlert
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRtmBackdoorUpdateAlert $parameters
     * @return \PayPal\StructType\DedicatedRtmBackdoorUpdateAlertResponse|bool
     */
    public function dedicatedRtmBackdoorUpdateAlert(\PayPal\StructType\DedicatedRtmBackdoorUpdateAlert $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRtmBackdoorUpdateAlert($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedSecondaryDNSAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedSecondaryDNSAdd $parameters
     * @return \PayPal\StructType\DedicatedSecondaryDNSAddResponse|bool
     */
    public function dedicatedSecondaryDNSAdd(\PayPal\StructType\DedicatedSecondaryDNSAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedSecondaryDNSAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRtmGetStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRtmGetStatus $parameters
     * @return \PayPal\StructType\DedicatedRtmGetStatusResponse|bool
     */
    public function dedicatedRtmGetStatus(\PayPal\StructType\DedicatedRtmGetStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRtmGetStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedNetbootGetAvailable
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedNetbootGetAvailable $parameters
     * @return \PayPal\StructType\DedicatedNetbootGetAvailableResponse|bool
     */
    public function dedicatedNetbootGetAvailable(\PayPal\StructType\DedicatedNetbootGetAvailable $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedNetbootGetAvailable($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMailinglistGetAllowed
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMailinglistGetAllowed $parameters
     * @return \PayPal\StructType\DedicatedMailinglistGetAllowedResponse|bool
     */
    public function dedicatedMailinglistGetAllowed(\PayPal\StructType\DedicatedMailinglistGetAllowed $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMailinglistGetAllowed($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupInfo $parameters
     * @return \PayPal\StructType\DedicatedBackupInfoResponse|bool
     */
    public function dedicatedBackupInfo(\PayPal\StructType\DedicatedBackupInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverRipeAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverRipeAdd $parameters
     * @return \PayPal\StructType\DedicatedFailoverRipeAddResponse|bool
     */
    public function dedicatedFailoverRipeAdd(\PayPal\StructType\DedicatedFailoverRipeAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverRipeAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFilterIrcClientRuleAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFilterIrcClientRuleAdd $parameters
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleAddResponse|bool
     */
    public function dedicatedFilterIrcClientRuleAdd(\PayPal\StructType\DedicatedFilterIrcClientRuleAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFilterIrcClientRuleAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedInstallationTemplateList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedInstallationTemplateList $parameters
     * @return \PayPal\StructType\DedicatedInstallationTemplateListResponse|bool
     */
    public function dedicatedInstallationTemplateList(\PayPal\StructType\DedicatedInstallationTemplateList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedInstallationTemplateList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupGetCalendar
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupGetCalendar $parameters
     * @return \PayPal\StructType\DedicatedBackupGetCalendarResponse|bool
     */
    public function dedicatedBackupGetCalendar(\PayPal\StructType\DedicatedBackupGetCalendar $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupGetCalendar($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIpLoadBalancingServerDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingServerDel $parameters
     * @return \PayPal\StructType\DedicatedIpLoadBalancingServerDelResponse|bool
     */
    public function dedicatedIpLoadBalancingServerDel(\PayPal\StructType\DedicatedIpLoadBalancingServerDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingServerDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedEditServiceMonitoringItem
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedEditServiceMonitoringItem $parameters
     * @return \PayPal\StructType\DedicatedEditServiceMonitoringItemResponse|bool
     */
    public function dedicatedEditServiceMonitoringItem(\PayPal\StructType\DedicatedEditServiceMonitoringItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedEditServiceMonitoringItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIPForUDPServerList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIPForUDPServerList $parameters
     * @return \PayPal\StructType\DedicatedIPForUDPServerListResponse|bool
     */
    public function dedicatedIPForUDPServerList(\PayPal\StructType\DedicatedIPForUDPServerList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIPForUDPServerList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupSet $parameters
     * @return \PayPal\StructType\DedicatedBackupSetResponse|bool
     */
    public function dedicatedBackupSet(\PayPal\StructType\DedicatedBackupSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedVirtualMacIpDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedVirtualMacIpDelete $parameters
     * @return \PayPal\StructType\DedicatedVirtualMacIpDeleteResponse|bool
     */
    public function dedicatedVirtualMacIpDelete(\PayPal\StructType\DedicatedVirtualMacIpDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedVirtualMacIpDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverRipeSplit
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverRipeSplit $parameters
     * @return \PayPal\StructType\DedicatedFailoverRipeSplitResponse|bool
     */
    public function dedicatedFailoverRipeSplit(\PayPal\StructType\DedicatedFailoverRipeSplit $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverRipeSplit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedReverseInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedReverseInfo $parameters
     * @return \PayPal\StructType\DedicatedReverseInfoResponse|bool
     */
    public function dedicatedReverseInfo(\PayPal\StructType\DedicatedReverseInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedReverseInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedCapabilitiesGetAll
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedCapabilitiesGetAll $parameters
     * @return \PayPal\StructType\DedicatedCapabilitiesGetAllResponse|bool
     */
    public function dedicatedCapabilitiesGetAll(\PayPal\StructType\DedicatedCapabilitiesGetAll $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedCapabilitiesGetAll($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupIncludeAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupIncludeAdd $parameters
     * @return \PayPal\StructType\DedicatedBackupIncludeAddResponse|bool
     */
    public function dedicatedBackupIncludeAdd(\PayPal\StructType\DedicatedBackupIncludeAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupIncludeAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverRipeList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverRipeList $parameters
     * @return \PayPal\StructType\DedicatedFailoverRipeListResponse|bool
     */
    public function dedicatedFailoverRipeList(\PayPal\StructType\DedicatedFailoverRipeList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverRipeList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringServiceAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringServiceAdd $parameters
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddResponse|bool
     */
    public function dedicatedMonitoringServiceAdd(\PayPal\StructType\DedicatedMonitoringServiceAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringServiceAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedHardRebootDo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedHardRebootDo $parameters
     * @return \PayPal\StructType\DedicatedHardRebootDoResponse|bool
     */
    public function dedicatedHardRebootDo(\PayPal\StructType\DedicatedHardRebootDo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedHardRebootDo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedReverseList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedReverseList $parameters
     * @return \PayPal\StructType\DedicatedReverseListResponse|bool
     */
    public function dedicatedReverseList(\PayPal\StructType\DedicatedReverseList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedReverseList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupFtpAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupFtpAdd $parameters
     * @return \PayPal\StructType\DedicatedBackupFtpAddResponse|bool
     */
    public function dedicatedBackupFtpAdd(\PayPal\StructType\DedicatedBackupFtpAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupFtpAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedVirtualMacIpUsedGetList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedVirtualMacIpUsedGetList $parameters
     * @return \PayPal\StructType\DedicatedVirtualMacIpUsedGetListResponse|bool
     */
    public function dedicatedVirtualMacIpUsedGetList(\PayPal\StructType\DedicatedVirtualMacIpUsedGetList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedVirtualMacIpUsedGetList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedNetbootInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedNetbootInfo $parameters
     * @return \PayPal\StructType\DedicatedNetbootInfoResponse|bool
     */
    public function dedicatedNetbootInfo(\PayPal\StructType\DedicatedNetbootInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedNetbootInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIpLoadBalancingAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingAdd $parameters
     * @return \PayPal\StructType\DedicatedIpLoadBalancingAddResponse|bool
     */
    public function dedicatedIpLoadBalancingAdd(\PayPal\StructType\DedicatedIpLoadBalancingAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedAvailableNotificationNicsGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedAvailableNotificationNicsGet $parameters
     * @return \PayPal\StructType\DedicatedAvailableNotificationNicsGetResponse|bool
     */
    public function dedicatedAvailableNotificationNicsGet(\PayPal\StructType\DedicatedAvailableNotificationNicsGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedAvailableNotificationNicsGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringServiceDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringServiceDel $parameters
     * @return \PayPal\StructType\DedicatedMonitoringServiceDelResponse|bool
     */
    public function dedicatedMonitoringServiceDel(\PayPal\StructType\DedicatedMonitoringServiceDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringServiceDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedIpLoadBalancingServerStateModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingServerStateModify $parameters
     * @return \PayPal\StructType\DedicatedIpLoadBalancingServerStateModifyResponse|bool
     */
    public function dedicatedIpLoadBalancingServerStateModify(\PayPal\StructType\DedicatedIpLoadBalancingServerStateModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingServerStateModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedReverseModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedReverseModify $parameters
     * @return \PayPal\StructType\DedicatedReverseModifyResponse|bool
     */
    public function dedicatedReverseModify(\PayPal\StructType\DedicatedReverseModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedReverseModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverList $parameters
     * @return \PayPal\StructType\DedicatedFailoverListResponse|bool
     */
    public function dedicatedFailoverList(\PayPal\StructType\DedicatedFailoverList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedSecondaryDNSInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedSecondaryDNSInfo $parameters
     * @return \PayPal\StructType\DedicatedSecondaryDNSInfoResponse|bool
     */
    public function dedicatedSecondaryDNSInfo(\PayPal\StructType\DedicatedSecondaryDNSInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedSecondaryDNSInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRipeUpdateInetnum
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRipeUpdateInetnum $parameters
     * @return \PayPal\StructType\DedicatedRipeUpdateInetnumResponse|bool
     */
    public function dedicatedRipeUpdateInetnum(\PayPal\StructType\DedicatedRipeUpdateInetnum $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRipeUpdateInetnum($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedGetAvailableNetworkFromCountry
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedGetAvailableNetworkFromCountry $parameters
     * @return \PayPal\StructType\DedicatedGetAvailableNetworkFromCountryResponse|bool
     */
    public function dedicatedGetAvailableNetworkFromCountry(\PayPal\StructType\DedicatedGetAvailableNetworkFromCountry $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedGetAvailableNetworkFromCountry($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverAdd $parameters
     * @return \PayPal\StructType\DedicatedFailoverAddResponse|bool
     */
    public function dedicatedFailoverAdd(\PayPal\StructType\DedicatedFailoverAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFilterIrcServerRuleList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFilterIrcServerRuleList $parameters
     * @return \PayPal\StructType\DedicatedFilterIrcServerRuleListResponse|bool
     */
    public function dedicatedFilterIrcServerRuleList(\PayPal\StructType\DedicatedFilterIrcServerRuleList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFilterIrcServerRuleList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRipeCreateOrganisation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRipeCreateOrganisation $parameters
     * @return \PayPal\StructType\DedicatedRipeCreateOrganisationResponse|bool
     */
    public function dedicatedRipeCreateOrganisation(\PayPal\StructType\DedicatedRipeCreateOrganisation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRipeCreateOrganisation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupExcludeAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupExcludeAdd $parameters
     * @return \PayPal\StructType\DedicatedBackupExcludeAddResponse|bool
     */
    public function dedicatedBackupExcludeAdd(\PayPal\StructType\DedicatedBackupExcludeAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupExcludeAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFilterIrcServerRuleDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFilterIrcServerRuleDel $parameters
     * @return \PayPal\StructType\DedicatedFilterIrcServerRuleDelResponse|bool
     */
    public function dedicatedFilterIrcServerRuleDel(\PayPal\StructType\DedicatedFilterIrcServerRuleDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFilterIrcServerRuleDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverRipeModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverRipeModify $parameters
     * @return \PayPal\StructType\DedicatedFailoverRipeModifyResponse|bool
     */
    public function dedicatedFailoverRipeModify(\PayPal\StructType\DedicatedFailoverRipeModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverRipeModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringList $parameters
     * @return \PayPal\StructType\DedicatedMonitoringListResponse|bool
     */
    public function dedicatedMonitoringList(\PayPal\StructType\DedicatedMonitoringList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupExcludeDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupExcludeDel $parameters
     * @return \PayPal\StructType\DedicatedBackupExcludeDelResponse|bool
     */
    public function dedicatedBackupExcludeDel(\PayPal\StructType\DedicatedBackupExcludeDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupExcludeDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedHardRebootStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedHardRebootStatus $parameters
     * @return \PayPal\StructType\DedicatedHardRebootStatusResponse|bool
     */
    public function dedicatedHardRebootStatus(\PayPal\StructType\DedicatedHardRebootStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedHardRebootStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedGetServiceMonitoringItem
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedGetServiceMonitoringItem $parameters
     * @return \PayPal\StructType\DedicatedGetServiceMonitoringItemResponse|bool
     */
    public function dedicatedGetServiceMonitoringItem(\PayPal\StructType\DedicatedGetServiceMonitoringItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedGetServiceMonitoringItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedReverseAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedReverseAdd $parameters
     * @return \PayPal\StructType\DedicatedReverseAddResponse|bool
     */
    public function dedicatedReverseAdd(\PayPal\StructType\DedicatedReverseAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedReverseAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupGetFreePlanning
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupGetFreePlanning $parameters
     * @return \PayPal\StructType\DedicatedBackupGetFreePlanningResponse|bool
     */
    public function dedicatedBackupGetFreePlanning(\PayPal\StructType\DedicatedBackupGetFreePlanning $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupGetFreePlanning($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedInstallAllowedDistributionGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedInstallAllowedDistributionGet $parameters
     * @return \PayPal\StructType\DedicatedInstallAllowedDistributionGetResponse|bool
     */
    public function dedicatedInstallAllowedDistributionGet(\PayPal\StructType\DedicatedInstallAllowedDistributionGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedInstallAllowedDistributionGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedCapabilitiesGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedCapabilitiesGet $parameters
     * @return \PayPal\StructType\DedicatedCapabilitiesGetResponse|bool
     */
    public function dedicatedCapabilitiesGet(\PayPal\StructType\DedicatedCapabilitiesGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedCapabilitiesGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringSMSDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringSMSDel $parameters
     * @return \PayPal\StructType\DedicatedMonitoringSMSDelResponse|bool
     */
    public function dedicatedMonitoringSMSDel(\PayPal\StructType\DedicatedMonitoringSMSDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringSMSDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringAdd $parameters
     * @return \PayPal\StructType\DedicatedMonitoringAddResponse|bool
     */
    public function dedicatedMonitoringAdd(\PayPal\StructType\DedicatedMonitoringAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedOperationList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedOperationList $parameters
     * @return \PayPal\StructType\DedicatedOperationListResponse|bool
     */
    public function dedicatedOperationList(\PayPal\StructType\DedicatedOperationList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedOperationList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupIncludeDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupIncludeDel $parameters
     * @return \PayPal\StructType\DedicatedBackupIncludeDelResponse|bool
     */
    public function dedicatedBackupIncludeDel(\PayPal\StructType\DedicatedBackupIncludeDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupIncludeDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBandwidthSwitching
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBandwidthSwitching $parameters
     * @return \PayPal\StructType\DedicatedBandwidthSwitchingResponse|bool
     */
    public function dedicatedBandwidthSwitching(\PayPal\StructType\DedicatedBandwidthSwitching $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBandwidthSwitching($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIpLoadBalancingDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingDel $parameters
     * @return \PayPal\StructType\DedicatedIpLoadBalancingDelResponse|bool
     */
    public function dedicatedIpLoadBalancingDel(\PayPal\StructType\DedicatedIpLoadBalancingDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedInstallationTemplateUse
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedInstallationTemplateUse $parameters
     * @return \PayPal\StructType\DedicatedInstallationTemplateUseResponse|bool
     */
    public function dedicatedInstallationTemplateUse(\PayPal\StructType\DedicatedInstallationTemplateUse $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedInstallationTemplateUse($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIpLoadBalancingServerAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingServerAdd $parameters
     * @return \PayPal\StructType\DedicatedIpLoadBalancingServerAddResponse|bool
     */
    public function dedicatedIpLoadBalancingServerAdd(\PayPal\StructType\DedicatedIpLoadBalancingServerAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingServerAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRipeUpdateOrganisation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRipeUpdateOrganisation $parameters
     * @return \PayPal\StructType\DedicatedRipeUpdateOrganisationResponse|bool
     */
    public function dedicatedRipeUpdateOrganisation(\PayPal\StructType\DedicatedRipeUpdateOrganisation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRipeUpdateOrganisation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedNetbootModifyById
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedNetbootModifyById $parameters
     * @return \PayPal\StructType\DedicatedNetbootModifyByIdResponse|bool
     */
    public function dedicatedNetbootModifyById(\PayPal\StructType\DedicatedNetbootModifyById $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedNetbootModifyById($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupGetDate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupGetDate $parameters
     * @return \PayPal\StructType\DedicatedBackupGetDateResponse|bool
     */
    public function dedicatedBackupGetDate(\PayPal\StructType\DedicatedBackupGetDate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupGetDate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedSecondaryDNSDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedSecondaryDNSDel $parameters
     * @return \PayPal\StructType\DedicatedSecondaryDNSDelResponse|bool
     */
    public function dedicatedSecondaryDNSDel(\PayPal\StructType\DedicatedSecondaryDNSDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedSecondaryDNSDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedSecondaryDNSGetAll
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedSecondaryDNSGetAll $parameters
     * @return \PayPal\StructType\DedicatedSecondaryDNSGetAllResponse|bool
     */
    public function dedicatedSecondaryDNSGetAll(\PayPal\StructType\DedicatedSecondaryDNSGetAll $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedSecondaryDNSGetAll($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringNotificationDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringNotificationDel $parameters
     * @return \PayPal\StructType\DedicatedMonitoringNotificationDelResponse|bool
     */
    public function dedicatedMonitoringNotificationDel(\PayPal\StructType\DedicatedMonitoringNotificationDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringNotificationDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBandwidthManagementGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBandwidthManagementGet $parameters
     * @return \PayPal\StructType\DedicatedBandwidthManagementGetResponse|bool
     */
    public function dedicatedBandwidthManagementGet(\PayPal\StructType\DedicatedBandwidthManagementGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBandwidthManagementGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringStatusUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringStatusUpdate $parameters
     * @return \PayPal\StructType\DedicatedMonitoringStatusUpdateResponse|bool
     */
    public function dedicatedMonitoringStatusUpdate(\PayPal\StructType\DedicatedMonitoringStatusUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringStatusUpdate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIPForUDPMoveGetStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIPForUDPMoveGetStatus $parameters
     * @return \PayPal\StructType\DedicatedIPForUDPMoveGetStatusResponse|bool
     */
    public function dedicatedIPForUDPMoveGetStatus(\PayPal\StructType\DedicatedIPForUDPMoveGetStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIPForUDPMoveGetStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRipeDeleteOrganisation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRipeDeleteOrganisation $parameters
     * @return \PayPal\StructType\DedicatedRipeDeleteOrganisationResponse|bool
     */
    public function dedicatedRipeDeleteOrganisation(\PayPal\StructType\DedicatedRipeDeleteOrganisation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRipeDeleteOrganisation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverRipeGetIp
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverRipeGetIp $parameters
     * @return \PayPal\StructType\DedicatedFailoverRipeGetIpResponse|bool
     */
    public function dedicatedFailoverRipeGetIp(\PayPal\StructType\DedicatedFailoverRipeGetIp $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverRipeGetIp($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedInstallBasic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedInstallBasic $parameters
     * @return \PayPal\StructType\DedicatedInstallBasicResponse|bool
     */
    public function dedicatedInstallBasic(\PayPal\StructType\DedicatedInstallBasic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedInstallBasic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedInstallReset
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedInstallReset $parameters
     * @return \PayPal\StructType\DedicatedInstallResetResponse|bool
     */
    public function dedicatedInstallReset(\PayPal\StructType\DedicatedInstallReset $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedInstallReset($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedMonitoringServiceAddNotification
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringServiceAddNotification $parameters
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotificationResponse|bool
     */
    public function dedicatedMonitoringServiceAddNotification(\PayPal\StructType\DedicatedMonitoringServiceAddNotification $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringServiceAddNotification($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFilterIrcClientRuleDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFilterIrcClientRuleDel $parameters
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleDelResponse|bool
     */
    public function dedicatedFilterIrcClientRuleDel(\PayPal\StructType\DedicatedFilterIrcClientRuleDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFilterIrcClientRuleDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMrtgInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMrtgInfo $parameters
     * @return \PayPal\StructType\DedicatedMrtgInfoResponse|bool
     */
    public function dedicatedMrtgInfo(\PayPal\StructType\DedicatedMrtgInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMrtgInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupReinstallData
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupReinstallData $parameters
     * @return \PayPal\StructType\DedicatedBackupReinstallDataResponse|bool
     */
    public function dedicatedBackupReinstallData(\PayPal\StructType\DedicatedBackupReinstallData $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupReinstallData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupFtpInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupFtpInfo $parameters
     * @return \PayPal\StructType\DedicatedBackupFtpInfoResponse|bool
     */
    public function dedicatedBackupFtpInfo(\PayPal\StructType\DedicatedBackupFtpInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupFtpInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringModify $parameters
     * @return \PayPal\StructType\DedicatedMonitoringModifyResponse|bool
     */
    public function dedicatedMonitoringModify(\PayPal\StructType\DedicatedMonitoringModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedGetRandomAvailableIpFromCountry
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedGetRandomAvailableIpFromCountry $parameters
     * @return \PayPal\StructType\DedicatedGetRandomAvailableIpFromCountryResponse|bool
     */
    public function dedicatedGetRandomAvailableIpFromCountry(\PayPal\StructType\DedicatedGetRandomAvailableIpFromCountry $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedGetRandomAvailableIpFromCountry($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedInstallBasicProgress
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedInstallBasicProgress $parameters
     * @return \PayPal\StructType\DedicatedInstallBasicProgressResponse|bool
     */
    public function dedicatedInstallBasicProgress(\PayPal\StructType\DedicatedInstallBasicProgress $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedInstallBasicProgress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dedicatedAddServiceMonitoringAlertEmail
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail $parameters
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmailResponse|bool
     */
    public function dedicatedAddServiceMonitoringAlertEmail(\PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedAddServiceMonitoringAlertEmail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFailoverUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFailoverUpdate $parameters
     * @return \PayPal\StructType\DedicatedFailoverUpdateResponse|bool
     */
    public function dedicatedFailoverUpdate(\PayPal\StructType\DedicatedFailoverUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFailoverUpdate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFilterIrcServerRuleAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFilterIrcServerRuleAdd $parameters
     * @return \PayPal\StructType\DedicatedFilterIrcServerRuleAddResponse|bool
     */
    public function dedicatedFilterIrcServerRuleAdd(\PayPal\StructType\DedicatedFilterIrcServerRuleAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFilterIrcServerRuleAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedVirtualMacIpAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedVirtualMacIpAdd $parameters
     * @return \PayPal\StructType\DedicatedVirtualMacIpAddResponse|bool
     */
    public function dedicatedVirtualMacIpAdd(\PayPal\StructType\DedicatedVirtualMacIpAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedVirtualMacIpAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedRipeGetRipeIds
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedRipeGetRipeIds $parameters
     * @return \PayPal\StructType\DedicatedRipeGetRipeIdsResponse|bool
     */
    public function dedicatedRipeGetRipeIds(\PayPal\StructType\DedicatedRipeGetRipeIds $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedRipeGetRipeIds($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedInfo $parameters
     * @return \PayPal\StructType\DedicatedInfoResponse|bool
     */
    public function dedicatedInfo(\PayPal\StructType\DedicatedInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedBackupUpdateDate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedBackupUpdateDate $parameters
     * @return \PayPal\StructType\DedicatedBackupUpdateDateResponse|bool
     */
    public function dedicatedBackupUpdateDate(\PayPal\StructType\DedicatedBackupUpdateDate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedBackupUpdateDate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringStatusGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringStatusGet $parameters
     * @return \PayPal\StructType\DedicatedMonitoringStatusGetResponse|bool
     */
    public function dedicatedMonitoringStatusGet(\PayPal\StructType\DedicatedMonitoringStatusGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringStatusGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedNetbootModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedNetbootModify $parameters
     * @return \PayPal\StructType\DedicatedNetbootModifyResponse|bool
     */
    public function dedicatedNetbootModify(\PayPal\StructType\DedicatedNetbootModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedNetbootModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedFilterIrcClientRuleList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedFilterIrcClientRuleList $parameters
     * @return \PayPal\StructType\DedicatedFilterIrcClientRuleListResponse|bool
     */
    public function dedicatedFilterIrcClientRuleList(\PayPal\StructType\DedicatedFilterIrcClientRuleList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedFilterIrcClientRuleList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIPForUDPMove
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIPForUDPMove $parameters
     * @return \PayPal\StructType\DedicatedIPForUDPMoveResponse|bool
     */
    public function dedicatedIPForUDPMove(\PayPal\StructType\DedicatedIPForUDPMove $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIPForUDPMove($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringSMSModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringSMSModify $parameters
     * @return \PayPal\StructType\DedicatedMonitoringSMSModifyResponse|bool
     */
    public function dedicatedMonitoringSMSModify(\PayPal\StructType\DedicatedMonitoringSMSModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringSMSModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringDel $parameters
     * @return \PayPal\StructType\DedicatedMonitoringDelResponse|bool
     */
    public function dedicatedMonitoringDel(\PayPal\StructType\DedicatedMonitoringDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringServiceAddSMS
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringServiceAddSMS $parameters
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddSMSResponse|bool
     */
    public function dedicatedMonitoringServiceAddSMS(\PayPal\StructType\DedicatedMonitoringServiceAddSMS $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringServiceAddSMS($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedList $parameters
     * @return \PayPal\StructType\DedicatedListResponse|bool
     */
    public function dedicatedList(\PayPal\StructType\DedicatedList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIPForUDPGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIPForUDPGet $parameters
     * @return \PayPal\StructType\DedicatedIPForUDPGetResponse|bool
     */
    public function dedicatedIPForUDPGet(\PayPal\StructType\DedicatedIPForUDPGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIPForUDPGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedGetAvailableIpFromNetwork
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedGetAvailableIpFromNetwork $parameters
     * @return \PayPal\StructType\DedicatedGetAvailableIpFromNetworkResponse|bool
     */
    public function dedicatedGetAvailableIpFromNetwork(\PayPal\StructType\DedicatedGetAvailableIpFromNetwork $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedGetAvailableIpFromNetwork($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMailinglistSubscribe
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMailinglistSubscribe $parameters
     * @return \PayPal\StructType\DedicatedMailinglistSubscribeResponse|bool
     */
    public function dedicatedMailinglistSubscribe(\PayPal\StructType\DedicatedMailinglistSubscribe $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMailinglistSubscribe($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedIpLoadBalancingNameModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingNameModify $parameters
     * @return \PayPal\StructType\DedicatedIpLoadBalancingNameModifyResponse|bool
     */
    public function dedicatedIpLoadBalancingNameModify(\PayPal\StructType\DedicatedIpLoadBalancingNameModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingNameModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dedicatedMonitoringServiceList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\DedicatedMonitoringServiceList $parameters
     * @return \PayPal\StructType\DedicatedMonitoringServiceListResponse|bool
     */
    public function dedicatedMonitoringServiceList(\PayPal\StructType\DedicatedMonitoringServiceList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dedicatedMonitoringServiceList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmailResponse|\PayPal\StructType\DedicatedAddServiceMonitoringAlertSMSResponse|\PayPal\StructType\DedicatedAvailableNotificationNicsGetResponse|\PayPal\StructType\DedicatedBackupExcludeAddResponse|\PayPal\StructType\DedicatedBackupExcludeDelResponse|\PayPal\StructType\DedicatedBackupFtpAddResponse|\PayPal\StructType\DedicatedBackupFtpInfoResponse|\PayPal\StructType\DedicatedBackupFtpPasswordResponse|\PayPal\StructType\DedicatedBackupGetCalendarResponse|\PayPal\StructType\DedicatedBackupGetDateResponse|\PayPal\StructType\DedicatedBackupGetFreePlanningResponse|\PayPal\StructType\DedicatedBackupGetHistoResponse|\PayPal\StructType\DedicatedBackupIncludeAddResponse|\PayPal\StructType\DedicatedBackupIncludeDelResponse|\PayPal\StructType\DedicatedBackupInfoResponse|\PayPal\StructType\DedicatedBackupListResponse|\PayPal\StructType\DedicatedBackupReinstallConfigurationResponse|\PayPal\StructType\DedicatedBackupReinstallDataResponse|\PayPal\StructType\DedicatedBackupSetResponse|\PayPal\StructType\DedicatedBackupUpdateDateResponse|\PayPal\StructType\DedicatedBackupUpdateResponse|\PayPal\StructType\DedicatedBandwidthManagementGetResponse|\PayPal\StructType\DedicatedBandwidthSwitchingResponse|\PayPal\StructType\DedicatedCapabilitiesGetAllResponse|\PayPal\StructType\DedicatedCapabilitiesGetResponse|\PayPal\StructType\DedicatedDelServiceMonitoringAlertResponse|\PayPal\StructType\DedicatedEditServiceMonitoringItemResponse|\PayPal\StructType\DedicatedFailoverAddResponse|\PayPal\StructType\DedicatedFailoverListResponse|\PayPal\StructType\DedicatedFailoverRipeAddResponse|\PayPal\StructType\DedicatedFailoverRipeGetIpResponse|\PayPal\StructType\DedicatedFailoverRipeListResponse|\PayPal\StructType\DedicatedFailoverRipeModifyResponse|\PayPal\StructType\DedicatedFailoverRipeSplitResponse|\PayPal\StructType\DedicatedFailoverUpdateResponse|\PayPal\StructType\DedicatedFilterIrcClientRuleAddResponse|\PayPal\StructType\DedicatedFilterIrcClientRuleDelResponse|\PayPal\StructType\DedicatedFilterIrcClientRuleListResponse|\PayPal\StructType\DedicatedFilterIrcServerRuleAddResponse|\PayPal\StructType\DedicatedFilterIrcServerRuleDelResponse|\PayPal\StructType\DedicatedFilterIrcServerRuleListResponse|\PayPal\StructType\DedicatedGetAvailableIpFromNetworkResponse|\PayPal\StructType\DedicatedGetAvailableNetworkFromCountryResponse|\PayPal\StructType\DedicatedGetRandomAvailableIpFromCountryResponse|\PayPal\StructType\DedicatedGetServiceMonitoringItemResponse|\PayPal\StructType\DedicatedHardRebootDoResponse|\PayPal\StructType\DedicatedHardRebootStatusResponse|\PayPal\StructType\DedicatedInfoResponse|\PayPal\StructType\DedicatedInstallAllowedDistributionGetResponse|\PayPal\StructType\DedicatedInstallationTemplateListResponse|\PayPal\StructType\DedicatedInstallationTemplateUseResponse|\PayPal\StructType\DedicatedInstallBasicProgressResponse|\PayPal\StructType\DedicatedInstallBasicResponse|\PayPal\StructType\DedicatedInstallResetResponse|\PayPal\StructType\DedicatedIPForUDPGetResponse|\PayPal\StructType\DedicatedIPForUDPMoveGetStatusResponse|\PayPal\StructType\DedicatedIPForUDPMoveResponse|\PayPal\StructType\DedicatedIPForUDPServerListResponse|\PayPal\StructType\DedicatedIpLoadBalancingAddResponse|\PayPal\StructType\DedicatedIpLoadBalancingDelResponse|\PayPal\StructType\DedicatedIpLoadBalancingListResponse|\PayPal\StructType\DedicatedIpLoadBalancingNameModifyResponse|\PayPal\StructType\DedicatedIpLoadBalancingServerAddResponse|\PayPal\StructType\DedicatedIpLoadBalancingServerDelResponse|\PayPal\StructType\DedicatedIpLoadBalancingServerStateModifyResponse|\PayPal\StructType\DedicatedListResponse|\PayPal\StructType\DedicatedMailinglistGetAllowedResponse|\PayPal\StructType\DedicatedMailinglistSubscribeResponse|\PayPal\StructType\DedicatedMonitoringAddResponse|\PayPal\StructType\DedicatedMonitoringDelResponse|\PayPal\StructType\DedicatedMonitoringListResponse|\PayPal\StructType\DedicatedMonitoringModifyResponse|\PayPal\StructType\DedicatedMonitoringNotificationCreateResponse|\PayPal\StructType\DedicatedMonitoringNotificationDelResponse|\PayPal\StructType\DedicatedMonitoringServiceAddNotificationResponse|\PayPal\StructType\DedicatedMonitoringServiceAddResponse|\PayPal\StructType\DedicatedMonitoringServiceAddSMSResponse|\PayPal\StructType\DedicatedMonitoringServiceDelResponse|\PayPal\StructType\DedicatedMonitoringServiceListResponse|\PayPal\StructType\DedicatedMonitoringSMSCreateResponse|\PayPal\StructType\DedicatedMonitoringSMSDelResponse|\PayPal\StructType\DedicatedMonitoringSMSModifyResponse|\PayPal\StructType\DedicatedMonitoringStatusGetResponse|\PayPal\StructType\DedicatedMonitoringStatusUpdateResponse|\PayPal\StructType\DedicatedMrtgInfoResponse|\PayPal\StructType\DedicatedNetbootGetAllResponse|\PayPal\StructType\DedicatedNetbootGetAvailableResponse|\PayPal\StructType\DedicatedNetbootGetRescueEmailResponse|\PayPal\StructType\DedicatedNetbootInfoResponse|\PayPal\StructType\DedicatedNetbootModifyByIdResponse|\PayPal\StructType\DedicatedNetbootModifyResponse|\PayPal\StructType\DedicatedOperationListResponse|\PayPal\StructType\DedicatedReverseAddResponse|\PayPal\StructType\DedicatedReverseDelResponse|\PayPal\StructType\DedicatedReverseInfoResponse|\PayPal\StructType\DedicatedReverseListResponse|\PayPal\StructType\DedicatedReverseModifyResponse|\PayPal\StructType\DedicatedRipeCreateOrganisationResponse|\PayPal\StructType\DedicatedRipeDeleteOrganisationResponse|\PayPal\StructType\DedicatedRipeGetRipeIdsResponse|\PayPal\StructType\DedicatedRipeQueryResponse|\PayPal\StructType\DedicatedRipeUpdateInetnumResponse|\PayPal\StructType\DedicatedRipeUpdateOrganisationResponse|\PayPal\StructType\DedicatedRtmBackdoorUpdateAlertResponse|\PayPal\StructType\DedicatedRtmGetStatusResponse|\PayPal\StructType\DedicatedRtmListBackdoorResponse|\PayPal\StructType\DedicatedSecondaryDNSAddResponse|\PayPal\StructType\DedicatedSecondaryDNSDelResponse|\PayPal\StructType\DedicatedSecondaryDNSGetAllResponse|\PayPal\StructType\DedicatedSecondaryDNSInfoResponse|\PayPal\StructType\DedicatedVirtualMacIpAddResponse|\PayPal\StructType\DedicatedVirtualMacIpAvailableGetListResponse|\PayPal\StructType\DedicatedVirtualMacIpDeleteResponse|\PayPal\StructType\DedicatedVirtualMacIpUsedGetListResponse
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
