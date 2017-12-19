<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\DedicatedReverseDel $parameters
     * @return \Ovh\StructType\DedicatedReverseDelResponse|bool
     */
    public function dedicatedReverseDel(\Ovh\StructType\DedicatedReverseDel $parameters)
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
     * @param \Ovh\StructType\DedicatedDelServiceMonitoringAlert $parameters
     * @return \Ovh\StructType\DedicatedDelServiceMonitoringAlertResponse|bool
     */
    public function dedicatedDelServiceMonitoringAlert(\Ovh\StructType\DedicatedDelServiceMonitoringAlert $parameters)
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
     * @param \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS $parameters
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMSResponse|bool
     */
    public function dedicatedAddServiceMonitoringAlertSMS(\Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS $parameters)
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
     * @param \Ovh\StructType\DedicatedIpLoadBalancingList $parameters
     * @return \Ovh\StructType\DedicatedIpLoadBalancingListResponse|bool
     */
    public function dedicatedIpLoadBalancingList(\Ovh\StructType\DedicatedIpLoadBalancingList $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupReinstallConfiguration $parameters
     * @return \Ovh\StructType\DedicatedBackupReinstallConfigurationResponse|bool
     */
    public function dedicatedBackupReinstallConfiguration(\Ovh\StructType\DedicatedBackupReinstallConfiguration $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupGetHisto $parameters
     * @return \Ovh\StructType\DedicatedBackupGetHistoResponse|bool
     */
    public function dedicatedBackupGetHisto(\Ovh\StructType\DedicatedBackupGetHisto $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupUpdate $parameters
     * @return \Ovh\StructType\DedicatedBackupUpdateResponse|bool
     */
    public function dedicatedBackupUpdate(\Ovh\StructType\DedicatedBackupUpdate $parameters)
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
     * @param \Ovh\StructType\DedicatedNetbootGetRescueEmail $parameters
     * @return \Ovh\StructType\DedicatedNetbootGetRescueEmailResponse|bool
     */
    public function dedicatedNetbootGetRescueEmail(\Ovh\StructType\DedicatedNetbootGetRescueEmail $parameters)
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
     * @param \Ovh\StructType\DedicatedRtmListBackdoor $parameters
     * @return \Ovh\StructType\DedicatedRtmListBackdoorResponse|bool
     */
    public function dedicatedRtmListBackdoor(\Ovh\StructType\DedicatedRtmListBackdoor $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringNotificationCreate $parameters
     * @return \Ovh\StructType\DedicatedMonitoringNotificationCreateResponse|bool
     */
    public function dedicatedMonitoringNotificationCreate(\Ovh\StructType\DedicatedMonitoringNotificationCreate $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupList $parameters
     * @return \Ovh\StructType\DedicatedBackupListResponse|bool
     */
    public function dedicatedBackupList(\Ovh\StructType\DedicatedBackupList $parameters)
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
     * @param \Ovh\StructType\DedicatedNetbootGetAll $parameters
     * @return \Ovh\StructType\DedicatedNetbootGetAllResponse|bool
     */
    public function dedicatedNetbootGetAll(\Ovh\StructType\DedicatedNetbootGetAll $parameters)
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
     * @param \Ovh\StructType\DedicatedVirtualMacIpAvailableGetList $parameters
     * @return \Ovh\StructType\DedicatedVirtualMacIpAvailableGetListResponse|bool
     */
    public function dedicatedVirtualMacIpAvailableGetList(\Ovh\StructType\DedicatedVirtualMacIpAvailableGetList $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringSMSCreate $parameters
     * @return \Ovh\StructType\DedicatedMonitoringSMSCreateResponse|bool
     */
    public function dedicatedMonitoringSMSCreate(\Ovh\StructType\DedicatedMonitoringSMSCreate $parameters)
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
     * @param \Ovh\StructType\DedicatedRipeQuery $parameters
     * @return \Ovh\StructType\DedicatedRipeQueryResponse|bool
     */
    public function dedicatedRipeQuery(\Ovh\StructType\DedicatedRipeQuery $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupFtpPassword $parameters
     * @return \Ovh\StructType\DedicatedBackupFtpPasswordResponse|bool
     */
    public function dedicatedBackupFtpPassword(\Ovh\StructType\DedicatedBackupFtpPassword $parameters)
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
     * @param \Ovh\StructType\DedicatedRtmBackdoorUpdateAlert $parameters
     * @return \Ovh\StructType\DedicatedRtmBackdoorUpdateAlertResponse|bool
     */
    public function dedicatedRtmBackdoorUpdateAlert(\Ovh\StructType\DedicatedRtmBackdoorUpdateAlert $parameters)
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
     * @param \Ovh\StructType\DedicatedSecondaryDNSAdd $parameters
     * @return \Ovh\StructType\DedicatedSecondaryDNSAddResponse|bool
     */
    public function dedicatedSecondaryDNSAdd(\Ovh\StructType\DedicatedSecondaryDNSAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedRtmGetStatus $parameters
     * @return \Ovh\StructType\DedicatedRtmGetStatusResponse|bool
     */
    public function dedicatedRtmGetStatus(\Ovh\StructType\DedicatedRtmGetStatus $parameters)
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
     * @param \Ovh\StructType\DedicatedNetbootGetAvailable $parameters
     * @return \Ovh\StructType\DedicatedNetbootGetAvailableResponse|bool
     */
    public function dedicatedNetbootGetAvailable(\Ovh\StructType\DedicatedNetbootGetAvailable $parameters)
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
     * @param \Ovh\StructType\DedicatedMailinglistGetAllowed $parameters
     * @return \Ovh\StructType\DedicatedMailinglistGetAllowedResponse|bool
     */
    public function dedicatedMailinglistGetAllowed(\Ovh\StructType\DedicatedMailinglistGetAllowed $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupInfo $parameters
     * @return \Ovh\StructType\DedicatedBackupInfoResponse|bool
     */
    public function dedicatedBackupInfo(\Ovh\StructType\DedicatedBackupInfo $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverRipeAdd $parameters
     * @return \Ovh\StructType\DedicatedFailoverRipeAddResponse|bool
     */
    public function dedicatedFailoverRipeAdd(\Ovh\StructType\DedicatedFailoverRipeAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedFilterIrcClientRuleAdd $parameters
     * @return \Ovh\StructType\DedicatedFilterIrcClientRuleAddResponse|bool
     */
    public function dedicatedFilterIrcClientRuleAdd(\Ovh\StructType\DedicatedFilterIrcClientRuleAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedInstallationTemplateList $parameters
     * @return \Ovh\StructType\DedicatedInstallationTemplateListResponse|bool
     */
    public function dedicatedInstallationTemplateList(\Ovh\StructType\DedicatedInstallationTemplateList $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupGetCalendar $parameters
     * @return \Ovh\StructType\DedicatedBackupGetCalendarResponse|bool
     */
    public function dedicatedBackupGetCalendar(\Ovh\StructType\DedicatedBackupGetCalendar $parameters)
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
     * @param \Ovh\StructType\DedicatedIpLoadBalancingServerDel $parameters
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerDelResponse|bool
     */
    public function dedicatedIpLoadBalancingServerDel(\Ovh\StructType\DedicatedIpLoadBalancingServerDel $parameters)
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
     * @param \Ovh\StructType\DedicatedEditServiceMonitoringItem $parameters
     * @return \Ovh\StructType\DedicatedEditServiceMonitoringItemResponse|bool
     */
    public function dedicatedEditServiceMonitoringItem(\Ovh\StructType\DedicatedEditServiceMonitoringItem $parameters)
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
     * @param \Ovh\StructType\DedicatedIPForUDPServerList $parameters
     * @return \Ovh\StructType\DedicatedIPForUDPServerListResponse|bool
     */
    public function dedicatedIPForUDPServerList(\Ovh\StructType\DedicatedIPForUDPServerList $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupSet $parameters
     * @return \Ovh\StructType\DedicatedBackupSetResponse|bool
     */
    public function dedicatedBackupSet(\Ovh\StructType\DedicatedBackupSet $parameters)
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
     * @param \Ovh\StructType\DedicatedVirtualMacIpDelete $parameters
     * @return \Ovh\StructType\DedicatedVirtualMacIpDeleteResponse|bool
     */
    public function dedicatedVirtualMacIpDelete(\Ovh\StructType\DedicatedVirtualMacIpDelete $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverRipeSplit $parameters
     * @return \Ovh\StructType\DedicatedFailoverRipeSplitResponse|bool
     */
    public function dedicatedFailoverRipeSplit(\Ovh\StructType\DedicatedFailoverRipeSplit $parameters)
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
     * @param \Ovh\StructType\DedicatedReverseInfo $parameters
     * @return \Ovh\StructType\DedicatedReverseInfoResponse|bool
     */
    public function dedicatedReverseInfo(\Ovh\StructType\DedicatedReverseInfo $parameters)
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
     * @param \Ovh\StructType\DedicatedCapabilitiesGetAll $parameters
     * @return \Ovh\StructType\DedicatedCapabilitiesGetAllResponse|bool
     */
    public function dedicatedCapabilitiesGetAll(\Ovh\StructType\DedicatedCapabilitiesGetAll $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupIncludeAdd $parameters
     * @return \Ovh\StructType\DedicatedBackupIncludeAddResponse|bool
     */
    public function dedicatedBackupIncludeAdd(\Ovh\StructType\DedicatedBackupIncludeAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverRipeList $parameters
     * @return \Ovh\StructType\DedicatedFailoverRipeListResponse|bool
     */
    public function dedicatedFailoverRipeList(\Ovh\StructType\DedicatedFailoverRipeList $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringServiceAdd $parameters
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddResponse|bool
     */
    public function dedicatedMonitoringServiceAdd(\Ovh\StructType\DedicatedMonitoringServiceAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedHardRebootDo $parameters
     * @return \Ovh\StructType\DedicatedHardRebootDoResponse|bool
     */
    public function dedicatedHardRebootDo(\Ovh\StructType\DedicatedHardRebootDo $parameters)
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
     * @param \Ovh\StructType\DedicatedReverseList $parameters
     * @return \Ovh\StructType\DedicatedReverseListResponse|bool
     */
    public function dedicatedReverseList(\Ovh\StructType\DedicatedReverseList $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupFtpAdd $parameters
     * @return \Ovh\StructType\DedicatedBackupFtpAddResponse|bool
     */
    public function dedicatedBackupFtpAdd(\Ovh\StructType\DedicatedBackupFtpAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedVirtualMacIpUsedGetList $parameters
     * @return \Ovh\StructType\DedicatedVirtualMacIpUsedGetListResponse|bool
     */
    public function dedicatedVirtualMacIpUsedGetList(\Ovh\StructType\DedicatedVirtualMacIpUsedGetList $parameters)
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
     * @param \Ovh\StructType\DedicatedNetbootInfo $parameters
     * @return \Ovh\StructType\DedicatedNetbootInfoResponse|bool
     */
    public function dedicatedNetbootInfo(\Ovh\StructType\DedicatedNetbootInfo $parameters)
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
     * @param \Ovh\StructType\DedicatedIpLoadBalancingAdd $parameters
     * @return \Ovh\StructType\DedicatedIpLoadBalancingAddResponse|bool
     */
    public function dedicatedIpLoadBalancingAdd(\Ovh\StructType\DedicatedIpLoadBalancingAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedAvailableNotificationNicsGet $parameters
     * @return \Ovh\StructType\DedicatedAvailableNotificationNicsGetResponse|bool
     */
    public function dedicatedAvailableNotificationNicsGet(\Ovh\StructType\DedicatedAvailableNotificationNicsGet $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringServiceDel $parameters
     * @return \Ovh\StructType\DedicatedMonitoringServiceDelResponse|bool
     */
    public function dedicatedMonitoringServiceDel(\Ovh\StructType\DedicatedMonitoringServiceDel $parameters)
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
     * @param \Ovh\StructType\DedicatedIpLoadBalancingServerStateModify $parameters
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerStateModifyResponse|bool
     */
    public function dedicatedIpLoadBalancingServerStateModify(\Ovh\StructType\DedicatedIpLoadBalancingServerStateModify $parameters)
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
     * @param \Ovh\StructType\DedicatedReverseModify $parameters
     * @return \Ovh\StructType\DedicatedReverseModifyResponse|bool
     */
    public function dedicatedReverseModify(\Ovh\StructType\DedicatedReverseModify $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverList $parameters
     * @return \Ovh\StructType\DedicatedFailoverListResponse|bool
     */
    public function dedicatedFailoverList(\Ovh\StructType\DedicatedFailoverList $parameters)
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
     * @param \Ovh\StructType\DedicatedSecondaryDNSInfo $parameters
     * @return \Ovh\StructType\DedicatedSecondaryDNSInfoResponse|bool
     */
    public function dedicatedSecondaryDNSInfo(\Ovh\StructType\DedicatedSecondaryDNSInfo $parameters)
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
     * @param \Ovh\StructType\DedicatedRipeUpdateInetnum $parameters
     * @return \Ovh\StructType\DedicatedRipeUpdateInetnumResponse|bool
     */
    public function dedicatedRipeUpdateInetnum(\Ovh\StructType\DedicatedRipeUpdateInetnum $parameters)
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
     * @param \Ovh\StructType\DedicatedGetAvailableNetworkFromCountry $parameters
     * @return \Ovh\StructType\DedicatedGetAvailableNetworkFromCountryResponse|bool
     */
    public function dedicatedGetAvailableNetworkFromCountry(\Ovh\StructType\DedicatedGetAvailableNetworkFromCountry $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverAdd $parameters
     * @return \Ovh\StructType\DedicatedFailoverAddResponse|bool
     */
    public function dedicatedFailoverAdd(\Ovh\StructType\DedicatedFailoverAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedFilterIrcServerRuleList $parameters
     * @return \Ovh\StructType\DedicatedFilterIrcServerRuleListResponse|bool
     */
    public function dedicatedFilterIrcServerRuleList(\Ovh\StructType\DedicatedFilterIrcServerRuleList $parameters)
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
     * @param \Ovh\StructType\DedicatedRipeCreateOrganisation $parameters
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisationResponse|bool
     */
    public function dedicatedRipeCreateOrganisation(\Ovh\StructType\DedicatedRipeCreateOrganisation $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupExcludeAdd $parameters
     * @return \Ovh\StructType\DedicatedBackupExcludeAddResponse|bool
     */
    public function dedicatedBackupExcludeAdd(\Ovh\StructType\DedicatedBackupExcludeAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedFilterIrcServerRuleDel $parameters
     * @return \Ovh\StructType\DedicatedFilterIrcServerRuleDelResponse|bool
     */
    public function dedicatedFilterIrcServerRuleDel(\Ovh\StructType\DedicatedFilterIrcServerRuleDel $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverRipeModify $parameters
     * @return \Ovh\StructType\DedicatedFailoverRipeModifyResponse|bool
     */
    public function dedicatedFailoverRipeModify(\Ovh\StructType\DedicatedFailoverRipeModify $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringList $parameters
     * @return \Ovh\StructType\DedicatedMonitoringListResponse|bool
     */
    public function dedicatedMonitoringList(\Ovh\StructType\DedicatedMonitoringList $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupExcludeDel $parameters
     * @return \Ovh\StructType\DedicatedBackupExcludeDelResponse|bool
     */
    public function dedicatedBackupExcludeDel(\Ovh\StructType\DedicatedBackupExcludeDel $parameters)
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
     * @param \Ovh\StructType\DedicatedHardRebootStatus $parameters
     * @return \Ovh\StructType\DedicatedHardRebootStatusResponse|bool
     */
    public function dedicatedHardRebootStatus(\Ovh\StructType\DedicatedHardRebootStatus $parameters)
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
     * @param \Ovh\StructType\DedicatedGetServiceMonitoringItem $parameters
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemResponse|bool
     */
    public function dedicatedGetServiceMonitoringItem(\Ovh\StructType\DedicatedGetServiceMonitoringItem $parameters)
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
     * @param \Ovh\StructType\DedicatedReverseAdd $parameters
     * @return \Ovh\StructType\DedicatedReverseAddResponse|bool
     */
    public function dedicatedReverseAdd(\Ovh\StructType\DedicatedReverseAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupGetFreePlanning $parameters
     * @return \Ovh\StructType\DedicatedBackupGetFreePlanningResponse|bool
     */
    public function dedicatedBackupGetFreePlanning(\Ovh\StructType\DedicatedBackupGetFreePlanning $parameters)
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
     * @param \Ovh\StructType\DedicatedInstallAllowedDistributionGet $parameters
     * @return \Ovh\StructType\DedicatedInstallAllowedDistributionGetResponse|bool
     */
    public function dedicatedInstallAllowedDistributionGet(\Ovh\StructType\DedicatedInstallAllowedDistributionGet $parameters)
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
     * @param \Ovh\StructType\DedicatedCapabilitiesGet $parameters
     * @return \Ovh\StructType\DedicatedCapabilitiesGetResponse|bool
     */
    public function dedicatedCapabilitiesGet(\Ovh\StructType\DedicatedCapabilitiesGet $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringSMSDel $parameters
     * @return \Ovh\StructType\DedicatedMonitoringSMSDelResponse|bool
     */
    public function dedicatedMonitoringSMSDel(\Ovh\StructType\DedicatedMonitoringSMSDel $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringAdd $parameters
     * @return \Ovh\StructType\DedicatedMonitoringAddResponse|bool
     */
    public function dedicatedMonitoringAdd(\Ovh\StructType\DedicatedMonitoringAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedOperationList $parameters
     * @return \Ovh\StructType\DedicatedOperationListResponse|bool
     */
    public function dedicatedOperationList(\Ovh\StructType\DedicatedOperationList $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupIncludeDel $parameters
     * @return \Ovh\StructType\DedicatedBackupIncludeDelResponse|bool
     */
    public function dedicatedBackupIncludeDel(\Ovh\StructType\DedicatedBackupIncludeDel $parameters)
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
     * @param \Ovh\StructType\DedicatedBandwidthSwitching $parameters
     * @return \Ovh\StructType\DedicatedBandwidthSwitchingResponse|bool
     */
    public function dedicatedBandwidthSwitching(\Ovh\StructType\DedicatedBandwidthSwitching $parameters)
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
     * @param \Ovh\StructType\DedicatedIpLoadBalancingDel $parameters
     * @return \Ovh\StructType\DedicatedIpLoadBalancingDelResponse|bool
     */
    public function dedicatedIpLoadBalancingDel(\Ovh\StructType\DedicatedIpLoadBalancingDel $parameters)
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
     * @param \Ovh\StructType\DedicatedInstallationTemplateUse $parameters
     * @return \Ovh\StructType\DedicatedInstallationTemplateUseResponse|bool
     */
    public function dedicatedInstallationTemplateUse(\Ovh\StructType\DedicatedInstallationTemplateUse $parameters)
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
     * @param \Ovh\StructType\DedicatedIpLoadBalancingServerAdd $parameters
     * @return \Ovh\StructType\DedicatedIpLoadBalancingServerAddResponse|bool
     */
    public function dedicatedIpLoadBalancingServerAdd(\Ovh\StructType\DedicatedIpLoadBalancingServerAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedRipeUpdateOrganisation $parameters
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisationResponse|bool
     */
    public function dedicatedRipeUpdateOrganisation(\Ovh\StructType\DedicatedRipeUpdateOrganisation $parameters)
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
     * @param \Ovh\StructType\DedicatedNetbootModifyById $parameters
     * @return \Ovh\StructType\DedicatedNetbootModifyByIdResponse|bool
     */
    public function dedicatedNetbootModifyById(\Ovh\StructType\DedicatedNetbootModifyById $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupGetDate $parameters
     * @return \Ovh\StructType\DedicatedBackupGetDateResponse|bool
     */
    public function dedicatedBackupGetDate(\Ovh\StructType\DedicatedBackupGetDate $parameters)
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
     * @param \Ovh\StructType\DedicatedSecondaryDNSDel $parameters
     * @return \Ovh\StructType\DedicatedSecondaryDNSDelResponse|bool
     */
    public function dedicatedSecondaryDNSDel(\Ovh\StructType\DedicatedSecondaryDNSDel $parameters)
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
     * @param \Ovh\StructType\DedicatedSecondaryDNSGetAll $parameters
     * @return \Ovh\StructType\DedicatedSecondaryDNSGetAllResponse|bool
     */
    public function dedicatedSecondaryDNSGetAll(\Ovh\StructType\DedicatedSecondaryDNSGetAll $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringNotificationDel $parameters
     * @return \Ovh\StructType\DedicatedMonitoringNotificationDelResponse|bool
     */
    public function dedicatedMonitoringNotificationDel(\Ovh\StructType\DedicatedMonitoringNotificationDel $parameters)
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
     * @param \Ovh\StructType\DedicatedBandwidthManagementGet $parameters
     * @return \Ovh\StructType\DedicatedBandwidthManagementGetResponse|bool
     */
    public function dedicatedBandwidthManagementGet(\Ovh\StructType\DedicatedBandwidthManagementGet $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringStatusUpdate $parameters
     * @return \Ovh\StructType\DedicatedMonitoringStatusUpdateResponse|bool
     */
    public function dedicatedMonitoringStatusUpdate(\Ovh\StructType\DedicatedMonitoringStatusUpdate $parameters)
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
     * @param \Ovh\StructType\DedicatedIPForUDPMoveGetStatus $parameters
     * @return \Ovh\StructType\DedicatedIPForUDPMoveGetStatusResponse|bool
     */
    public function dedicatedIPForUDPMoveGetStatus(\Ovh\StructType\DedicatedIPForUDPMoveGetStatus $parameters)
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
     * @param \Ovh\StructType\DedicatedRipeDeleteOrganisation $parameters
     * @return \Ovh\StructType\DedicatedRipeDeleteOrganisationResponse|bool
     */
    public function dedicatedRipeDeleteOrganisation(\Ovh\StructType\DedicatedRipeDeleteOrganisation $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverRipeGetIp $parameters
     * @return \Ovh\StructType\DedicatedFailoverRipeGetIpResponse|bool
     */
    public function dedicatedFailoverRipeGetIp(\Ovh\StructType\DedicatedFailoverRipeGetIp $parameters)
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
     * @param \Ovh\StructType\DedicatedInstallBasic $parameters
     * @return \Ovh\StructType\DedicatedInstallBasicResponse|bool
     */
    public function dedicatedInstallBasic(\Ovh\StructType\DedicatedInstallBasic $parameters)
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
     * @param \Ovh\StructType\DedicatedInstallReset $parameters
     * @return \Ovh\StructType\DedicatedInstallResetResponse|bool
     */
    public function dedicatedInstallReset(\Ovh\StructType\DedicatedInstallReset $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringServiceAddNotification $parameters
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddNotificationResponse|bool
     */
    public function dedicatedMonitoringServiceAddNotification(\Ovh\StructType\DedicatedMonitoringServiceAddNotification $parameters)
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
     * @param \Ovh\StructType\DedicatedFilterIrcClientRuleDel $parameters
     * @return \Ovh\StructType\DedicatedFilterIrcClientRuleDelResponse|bool
     */
    public function dedicatedFilterIrcClientRuleDel(\Ovh\StructType\DedicatedFilterIrcClientRuleDel $parameters)
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
     * @param \Ovh\StructType\DedicatedMrtgInfo $parameters
     * @return \Ovh\StructType\DedicatedMrtgInfoResponse|bool
     */
    public function dedicatedMrtgInfo(\Ovh\StructType\DedicatedMrtgInfo $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupReinstallData $parameters
     * @return \Ovh\StructType\DedicatedBackupReinstallDataResponse|bool
     */
    public function dedicatedBackupReinstallData(\Ovh\StructType\DedicatedBackupReinstallData $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupFtpInfo $parameters
     * @return \Ovh\StructType\DedicatedBackupFtpInfoResponse|bool
     */
    public function dedicatedBackupFtpInfo(\Ovh\StructType\DedicatedBackupFtpInfo $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringModify $parameters
     * @return \Ovh\StructType\DedicatedMonitoringModifyResponse|bool
     */
    public function dedicatedMonitoringModify(\Ovh\StructType\DedicatedMonitoringModify $parameters)
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
     * @param \Ovh\StructType\DedicatedGetRandomAvailableIpFromCountry $parameters
     * @return \Ovh\StructType\DedicatedGetRandomAvailableIpFromCountryResponse|bool
     */
    public function dedicatedGetRandomAvailableIpFromCountry(\Ovh\StructType\DedicatedGetRandomAvailableIpFromCountry $parameters)
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
     * @param \Ovh\StructType\DedicatedInstallBasicProgress $parameters
     * @return \Ovh\StructType\DedicatedInstallBasicProgressResponse|bool
     */
    public function dedicatedInstallBasicProgress(\Ovh\StructType\DedicatedInstallBasicProgress $parameters)
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
     * @param \Ovh\StructType\DedicatedAddServiceMonitoringAlertEmail $parameters
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertEmailResponse|bool
     */
    public function dedicatedAddServiceMonitoringAlertEmail(\Ovh\StructType\DedicatedAddServiceMonitoringAlertEmail $parameters)
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
     * @param \Ovh\StructType\DedicatedFailoverUpdate $parameters
     * @return \Ovh\StructType\DedicatedFailoverUpdateResponse|bool
     */
    public function dedicatedFailoverUpdate(\Ovh\StructType\DedicatedFailoverUpdate $parameters)
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
     * @param \Ovh\StructType\DedicatedFilterIrcServerRuleAdd $parameters
     * @return \Ovh\StructType\DedicatedFilterIrcServerRuleAddResponse|bool
     */
    public function dedicatedFilterIrcServerRuleAdd(\Ovh\StructType\DedicatedFilterIrcServerRuleAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedVirtualMacIpAdd $parameters
     * @return \Ovh\StructType\DedicatedVirtualMacIpAddResponse|bool
     */
    public function dedicatedVirtualMacIpAdd(\Ovh\StructType\DedicatedVirtualMacIpAdd $parameters)
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
     * @param \Ovh\StructType\DedicatedRipeGetRipeIds $parameters
     * @return \Ovh\StructType\DedicatedRipeGetRipeIdsResponse|bool
     */
    public function dedicatedRipeGetRipeIds(\Ovh\StructType\DedicatedRipeGetRipeIds $parameters)
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
     * @param \Ovh\StructType\DedicatedInfo $parameters
     * @return \Ovh\StructType\DedicatedInfoResponse|bool
     */
    public function dedicatedInfo(\Ovh\StructType\DedicatedInfo $parameters)
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
     * @param \Ovh\StructType\DedicatedBackupUpdateDate $parameters
     * @return \Ovh\StructType\DedicatedBackupUpdateDateResponse|bool
     */
    public function dedicatedBackupUpdateDate(\Ovh\StructType\DedicatedBackupUpdateDate $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringStatusGet $parameters
     * @return \Ovh\StructType\DedicatedMonitoringStatusGetResponse|bool
     */
    public function dedicatedMonitoringStatusGet(\Ovh\StructType\DedicatedMonitoringStatusGet $parameters)
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
     * @param \Ovh\StructType\DedicatedNetbootModify $parameters
     * @return \Ovh\StructType\DedicatedNetbootModifyResponse|bool
     */
    public function dedicatedNetbootModify(\Ovh\StructType\DedicatedNetbootModify $parameters)
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
     * @param \Ovh\StructType\DedicatedFilterIrcClientRuleList $parameters
     * @return \Ovh\StructType\DedicatedFilterIrcClientRuleListResponse|bool
     */
    public function dedicatedFilterIrcClientRuleList(\Ovh\StructType\DedicatedFilterIrcClientRuleList $parameters)
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
     * @param \Ovh\StructType\DedicatedIPForUDPMove $parameters
     * @return \Ovh\StructType\DedicatedIPForUDPMoveResponse|bool
     */
    public function dedicatedIPForUDPMove(\Ovh\StructType\DedicatedIPForUDPMove $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringSMSModify $parameters
     * @return \Ovh\StructType\DedicatedMonitoringSMSModifyResponse|bool
     */
    public function dedicatedMonitoringSMSModify(\Ovh\StructType\DedicatedMonitoringSMSModify $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringDel $parameters
     * @return \Ovh\StructType\DedicatedMonitoringDelResponse|bool
     */
    public function dedicatedMonitoringDel(\Ovh\StructType\DedicatedMonitoringDel $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringServiceAddSMS $parameters
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMSResponse|bool
     */
    public function dedicatedMonitoringServiceAddSMS(\Ovh\StructType\DedicatedMonitoringServiceAddSMS $parameters)
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
     * @param \Ovh\StructType\DedicatedList $parameters
     * @return \Ovh\StructType\DedicatedListResponse|bool
     */
    public function dedicatedList(\Ovh\StructType\DedicatedList $parameters)
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
     * @param \Ovh\StructType\DedicatedIPForUDPGet $parameters
     * @return \Ovh\StructType\DedicatedIPForUDPGetResponse|bool
     */
    public function dedicatedIPForUDPGet(\Ovh\StructType\DedicatedIPForUDPGet $parameters)
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
     * @param \Ovh\StructType\DedicatedGetAvailableIpFromNetwork $parameters
     * @return \Ovh\StructType\DedicatedGetAvailableIpFromNetworkResponse|bool
     */
    public function dedicatedGetAvailableIpFromNetwork(\Ovh\StructType\DedicatedGetAvailableIpFromNetwork $parameters)
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
     * @param \Ovh\StructType\DedicatedMailinglistSubscribe $parameters
     * @return \Ovh\StructType\DedicatedMailinglistSubscribeResponse|bool
     */
    public function dedicatedMailinglistSubscribe(\Ovh\StructType\DedicatedMailinglistSubscribe $parameters)
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
     * @param \Ovh\StructType\DedicatedIpLoadBalancingNameModify $parameters
     * @return \Ovh\StructType\DedicatedIpLoadBalancingNameModifyResponse|bool
     */
    public function dedicatedIpLoadBalancingNameModify(\Ovh\StructType\DedicatedIpLoadBalancingNameModify $parameters)
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
     * @param \Ovh\StructType\DedicatedMonitoringServiceList $parameters
     * @return \Ovh\StructType\DedicatedMonitoringServiceListResponse|bool
     */
    public function dedicatedMonitoringServiceList(\Ovh\StructType\DedicatedMonitoringServiceList $parameters)
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
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertEmailResponse|\Ovh\StructType\DedicatedAddServiceMonitoringAlertSMSResponse|\Ovh\StructType\DedicatedAvailableNotificationNicsGetResponse|\Ovh\StructType\DedicatedBackupExcludeAddResponse|\Ovh\StructType\DedicatedBackupExcludeDelResponse|\Ovh\StructType\DedicatedBackupFtpAddResponse|\Ovh\StructType\DedicatedBackupFtpInfoResponse|\Ovh\StructType\DedicatedBackupFtpPasswordResponse|\Ovh\StructType\DedicatedBackupGetCalendarResponse|\Ovh\StructType\DedicatedBackupGetDateResponse|\Ovh\StructType\DedicatedBackupGetFreePlanningResponse|\Ovh\StructType\DedicatedBackupGetHistoResponse|\Ovh\StructType\DedicatedBackupIncludeAddResponse|\Ovh\StructType\DedicatedBackupIncludeDelResponse|\Ovh\StructType\DedicatedBackupInfoResponse|\Ovh\StructType\DedicatedBackupListResponse|\Ovh\StructType\DedicatedBackupReinstallConfigurationResponse|\Ovh\StructType\DedicatedBackupReinstallDataResponse|\Ovh\StructType\DedicatedBackupSetResponse|\Ovh\StructType\DedicatedBackupUpdateDateResponse|\Ovh\StructType\DedicatedBackupUpdateResponse|\Ovh\StructType\DedicatedBandwidthManagementGetResponse|\Ovh\StructType\DedicatedBandwidthSwitchingResponse|\Ovh\StructType\DedicatedCapabilitiesGetAllResponse|\Ovh\StructType\DedicatedCapabilitiesGetResponse|\Ovh\StructType\DedicatedDelServiceMonitoringAlertResponse|\Ovh\StructType\DedicatedEditServiceMonitoringItemResponse|\Ovh\StructType\DedicatedFailoverAddResponse|\Ovh\StructType\DedicatedFailoverListResponse|\Ovh\StructType\DedicatedFailoverRipeAddResponse|\Ovh\StructType\DedicatedFailoverRipeGetIpResponse|\Ovh\StructType\DedicatedFailoverRipeListResponse|\Ovh\StructType\DedicatedFailoverRipeModifyResponse|\Ovh\StructType\DedicatedFailoverRipeSplitResponse|\Ovh\StructType\DedicatedFailoverUpdateResponse|\Ovh\StructType\DedicatedFilterIrcClientRuleAddResponse|\Ovh\StructType\DedicatedFilterIrcClientRuleDelResponse|\Ovh\StructType\DedicatedFilterIrcClientRuleListResponse|\Ovh\StructType\DedicatedFilterIrcServerRuleAddResponse|\Ovh\StructType\DedicatedFilterIrcServerRuleDelResponse|\Ovh\StructType\DedicatedFilterIrcServerRuleListResponse|\Ovh\StructType\DedicatedGetAvailableIpFromNetworkResponse|\Ovh\StructType\DedicatedGetAvailableNetworkFromCountryResponse|\Ovh\StructType\DedicatedGetRandomAvailableIpFromCountryResponse|\Ovh\StructType\DedicatedGetServiceMonitoringItemResponse|\Ovh\StructType\DedicatedHardRebootDoResponse|\Ovh\StructType\DedicatedHardRebootStatusResponse|\Ovh\StructType\DedicatedInfoResponse|\Ovh\StructType\DedicatedInstallAllowedDistributionGetResponse|\Ovh\StructType\DedicatedInstallationTemplateListResponse|\Ovh\StructType\DedicatedInstallationTemplateUseResponse|\Ovh\StructType\DedicatedInstallBasicProgressResponse|\Ovh\StructType\DedicatedInstallBasicResponse|\Ovh\StructType\DedicatedInstallResetResponse|\Ovh\StructType\DedicatedIPForUDPGetResponse|\Ovh\StructType\DedicatedIPForUDPMoveGetStatusResponse|\Ovh\StructType\DedicatedIPForUDPMoveResponse|\Ovh\StructType\DedicatedIPForUDPServerListResponse|\Ovh\StructType\DedicatedIpLoadBalancingAddResponse|\Ovh\StructType\DedicatedIpLoadBalancingDelResponse|\Ovh\StructType\DedicatedIpLoadBalancingListResponse|\Ovh\StructType\DedicatedIpLoadBalancingNameModifyResponse|\Ovh\StructType\DedicatedIpLoadBalancingServerAddResponse|\Ovh\StructType\DedicatedIpLoadBalancingServerDelResponse|\Ovh\StructType\DedicatedIpLoadBalancingServerStateModifyResponse|\Ovh\StructType\DedicatedListResponse|\Ovh\StructType\DedicatedMailinglistGetAllowedResponse|\Ovh\StructType\DedicatedMailinglistSubscribeResponse|\Ovh\StructType\DedicatedMonitoringAddResponse|\Ovh\StructType\DedicatedMonitoringDelResponse|\Ovh\StructType\DedicatedMonitoringListResponse|\Ovh\StructType\DedicatedMonitoringModifyResponse|\Ovh\StructType\DedicatedMonitoringNotificationCreateResponse|\Ovh\StructType\DedicatedMonitoringNotificationDelResponse|\Ovh\StructType\DedicatedMonitoringServiceAddNotificationResponse|\Ovh\StructType\DedicatedMonitoringServiceAddResponse|\Ovh\StructType\DedicatedMonitoringServiceAddSMSResponse|\Ovh\StructType\DedicatedMonitoringServiceDelResponse|\Ovh\StructType\DedicatedMonitoringServiceListResponse|\Ovh\StructType\DedicatedMonitoringSMSCreateResponse|\Ovh\StructType\DedicatedMonitoringSMSDelResponse|\Ovh\StructType\DedicatedMonitoringSMSModifyResponse|\Ovh\StructType\DedicatedMonitoringStatusGetResponse|\Ovh\StructType\DedicatedMonitoringStatusUpdateResponse|\Ovh\StructType\DedicatedMrtgInfoResponse|\Ovh\StructType\DedicatedNetbootGetAllResponse|\Ovh\StructType\DedicatedNetbootGetAvailableResponse|\Ovh\StructType\DedicatedNetbootGetRescueEmailResponse|\Ovh\StructType\DedicatedNetbootInfoResponse|\Ovh\StructType\DedicatedNetbootModifyByIdResponse|\Ovh\StructType\DedicatedNetbootModifyResponse|\Ovh\StructType\DedicatedOperationListResponse|\Ovh\StructType\DedicatedReverseAddResponse|\Ovh\StructType\DedicatedReverseDelResponse|\Ovh\StructType\DedicatedReverseInfoResponse|\Ovh\StructType\DedicatedReverseListResponse|\Ovh\StructType\DedicatedReverseModifyResponse|\Ovh\StructType\DedicatedRipeCreateOrganisationResponse|\Ovh\StructType\DedicatedRipeDeleteOrganisationResponse|\Ovh\StructType\DedicatedRipeGetRipeIdsResponse|\Ovh\StructType\DedicatedRipeQueryResponse|\Ovh\StructType\DedicatedRipeUpdateInetnumResponse|\Ovh\StructType\DedicatedRipeUpdateOrganisationResponse|\Ovh\StructType\DedicatedRtmBackdoorUpdateAlertResponse|\Ovh\StructType\DedicatedRtmGetStatusResponse|\Ovh\StructType\DedicatedRtmListBackdoorResponse|\Ovh\StructType\DedicatedSecondaryDNSAddResponse|\Ovh\StructType\DedicatedSecondaryDNSDelResponse|\Ovh\StructType\DedicatedSecondaryDNSGetAllResponse|\Ovh\StructType\DedicatedSecondaryDNSInfoResponse|\Ovh\StructType\DedicatedVirtualMacIpAddResponse|\Ovh\StructType\DedicatedVirtualMacIpAvailableGetListResponse|\Ovh\StructType\DedicatedVirtualMacIpDeleteResponse|\Ovh\StructType\DedicatedVirtualMacIpUsedGetListResponse
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
