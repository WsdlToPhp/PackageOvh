<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Telephony ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Telephony extends SoapClientBase
{
    /**
     * Method to call the operation originally named telephonyNumberInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberInfo $parameters
     * @return \Ovh\StructType\TelephonyNumberInfoResponse|bool
     */
    public function telephonyNumberInfo(\Ovh\StructType\TelephonyNumberInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailOptionsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailOptionsList $parameters
     * @return \Ovh\StructType\TelephonyVoicemailOptionsListResponse|bool
     */
    public function telephonyVoicemailOptionsList(\Ovh\StructType\TelephonyVoicemailOptionsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailOptionsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookSharePeerList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookSharePeerList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookSharePeerListResponse|bool
     */
    public function telephonyPhonebookSharePeerList(\Ovh\StructType\TelephonyPhonebookSharePeerList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookSharePeerList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyRedirectModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyRedirectModify $parameters
     * @return \Ovh\StructType\TelephonyRedirectModifyResponse|bool
     */
    public function telephonyRedirectModify(\Ovh\StructType\TelephonyRedirectModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyRedirectModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNumberModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberModify $parameters
     * @return \Ovh\StructType\TelephonyNumberModifyResponse|bool
     */
    public function telephonyNumberModify(\Ovh\StructType\TelephonyNumberModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyGetCitiesFromZip
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyGetCitiesFromZip $parameters
     * @return \Ovh\StructType\TelephonyGetCitiesFromZipResponse|bool
     */
    public function telephonyGetCitiesFromZip(\Ovh\StructType\TelephonyGetCitiesFromZip $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyGetCitiesFromZip($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusSendSmsMt
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusSendSmsMt $parameters
     * @return \Ovh\StructType\TelephonySmsplusSendSmsMtResponse|bool
     */
    public function telephonySmsplusSendSmsMt(\Ovh\StructType\TelephonySmsplusSendSmsMt $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusSendSmsMt($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserGetCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserGetCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsUserGetCsvAttachmentResponse|bool
     */
    public function telephonySmsUserGetCsvAttachment(\Ovh\StructType\TelephonySmsUserGetCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserGetCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnSmsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsListResponse|bool
     */
    public function telephonyPhonebookOnSmsList(\Ovh\StructType\TelephonyPhonebookOnSmsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySetClosureEvents
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySetClosureEvents $parameters
     * @return \Ovh\StructType\TelephonySetClosureEventsResponse|bool
     */
    public function telephonySetClosureEvents(\Ovh\StructType\TelephonySetClosureEvents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySetClosureEvents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNicSetSipDomain
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNicSetSipDomain $parameters
     * @return \Ovh\StructType\TelephonyNicSetSipDomainResponse|bool
     */
    public function telephonyNicSetSipDomain(\Ovh\StructType\TelephonyNicSetSipDomain $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNicSetSipDomain($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsMultiSend
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsMultiSend $parameters
     * @return \Ovh\StructType\TelephonySmsMultiSendResponse|bool
     */
    public function telephonySmsMultiSend(\Ovh\StructType\TelephonySmsMultiSend $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsMultiSend($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserAddCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserAddCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachmentResponse|bool
     */
    public function telephonySmsUserAddCsvAttachment(\Ovh\StructType\TelephonySmsUserAddCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserAddCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareDel $parameters
     * @return \Ovh\StructType\TelephonySpareDelResponse|bool
     */
    public function telephonySpareDel(\Ovh\StructType\TelephonySpareDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxHistory
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxHistory $parameters
     * @return \Ovh\StructType\TelephonyFaxHistoryResponse|bool
     */
    public function telephonyFaxHistory(\Ovh\StructType\TelephonyFaxHistory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFreefaxToVoicefax
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFreefaxToVoicefax $parameters
     * @return \Ovh\StructType\TelephonyFreefaxToVoicefaxResponse|bool
     */
    public function telephonyFreefaxToVoicefax(\Ovh\StructType\TelephonyFreefaxToVoicefax $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFreefaxToVoicefax($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxSend
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxSend $parameters
     * @return \Ovh\StructType\TelephonyFaxSendResponse|bool
     */
    public function telephonyFaxSend(\Ovh\StructType\TelephonyFaxSend $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxSend($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyRestrictionList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyRestrictionList $parameters
     * @return \Ovh\StructType\TelephonyRestrictionListResponse|bool
     */
    public function telephonyRestrictionList(\Ovh\StructType\TelephonyRestrictionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyRestrictionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillList $parameters
     * @return \Ovh\StructType\TelephonyBillListResponse|bool
     */
    public function telephonyBillList(\Ovh\StructType\TelephonyBillList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNumberCustomList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberCustomList $parameters
     * @return \Ovh\StructType\TelephonyNumberCustomListResponse|bool
     */
    public function telephonyNumberCustomList(\Ovh\StructType\TelephonyNumberCustomList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberCustomList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPlugAndPhoneSkinModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPlugAndPhoneSkinModify $parameters
     * @return \Ovh\StructType\TelephonyPlugAndPhoneSkinModifyResponse|bool
     */
    public function telephonyPlugAndPhoneSkinModify(\Ovh\StructType\TelephonyPlugAndPhoneSkinModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPlugAndPhoneSkinModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxOptionsModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxOptionsModify $parameters
     * @return \Ovh\StructType\TelephonyFaxOptionsModifyResponse|bool
     */
    public function telephonyFaxOptionsModify(\Ovh\StructType\TelephonyFaxOptionsModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxOptionsModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillingAccountSummary
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountSummary $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountSummaryResponse|bool
     */
    public function telephonyBillingAccountSummary(\Ovh\StructType\TelephonyBillingAccountSummary $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountSummary($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyConferenceSetAnnounceFile
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyConferenceSetAnnounceFile $parameters
     * @return \Ovh\StructType\TelephonyConferenceSetAnnounceFileResponse|bool
     */
    public function telephonyConferenceSetAnnounceFile(\Ovh\StructType\TelephonyConferenceSetAnnounceFile $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyConferenceSetAnnounceFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnSmsAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsAdd $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsAddResponse|bool
     */
    public function telephonyPhonebookOnSmsAdd(\Ovh\StructType\TelephonyPhonebookOnSmsAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyClick2CallUserDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyClick2CallUserDel $parameters
     * @return \Ovh\StructType\TelephonyClick2CallUserDelResponse|bool
     */
    public function telephonyClick2CallUserDel(\Ovh\StructType\TelephonyClick2CallUserDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyClick2CallUserDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsAccountList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsAccountList $parameters
     * @return \Ovh\StructType\TelephonySmsAccountListResponse|bool
     */
    public function telephonySmsAccountList(\Ovh\StructType\TelephonySmsAccountList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsAccountList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyBillingAccountConsumptionCSVByMail
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountConsumptionCSVByMail $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountConsumptionCSVByMailResponse|bool
     */
    public function telephonyBillingAccountConsumptionCSVByMail(\Ovh\StructType\TelephonyBillingAccountConsumptionCSVByMail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountConsumptionCSVByMail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyFMHuntingModificationVoicemail
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFMHuntingModificationVoicemail $parameters
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemailResponse|bool
     */
    public function telephonyFMHuntingModificationVoicemail(\Ovh\StructType\TelephonyFMHuntingModificationVoicemail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFMHuntingModificationVoicemail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyOrdersFollowingUp
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyOrdersFollowingUp $parameters
     * @return \Ovh\StructType\TelephonyOrdersFollowingUpResponse|bool
     */
    public function telephonyOrdersFollowingUp(\Ovh\StructType\TelephonyOrdersFollowingUp $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyOrdersFollowingUp($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyPhonebookOnGroupContactAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupContactAdd $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupContactAddResponse|bool
     */
    public function telephonyPhonebookOnGroupContactAdd(\Ovh\StructType\TelephonyPhonebookOnGroupContactAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillDetailsCSV
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillDetailsCSV $parameters
     * @return \Ovh\StructType\TelephonyBillDetailsCSVResponse|bool
     */
    public function telephonyBillDetailsCSV(\Ovh\StructType\TelephonyBillDetailsCSV $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillDetailsCSV($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsCreditLeft
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsCreditLeft $parameters
     * @return \Ovh\StructType\TelephonySmsCreditLeftResponse|bool
     */
    public function telephonySmsCreditLeft(\Ovh\StructType\TelephonySmsCreditLeft $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsCreditLeft($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDirectoryPJCode
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDirectoryPJCode $parameters
     * @return \Ovh\StructType\TelephonyDirectoryPJCodeResponse|bool
     */
    public function telephonyDirectoryPJCode(\Ovh\StructType\TelephonyDirectoryPJCode $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDirectoryPJCode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyListSummationCallsFromBillingAccount
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyListSummationCallsFromBillingAccount $parameters
     * @return \Ovh\StructType\TelephonyListSummationCallsFromBillingAccountResponse|bool
     */
    public function telephonyListSummationCallsFromBillingAccount(\Ovh\StructType\TelephonyListSummationCallsFromBillingAccount $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyListSummationCallsFromBillingAccount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyBillingAccountDescriptionModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountDescriptionModify $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountDescriptionModifyResponse|bool
     */
    public function telephonyBillingAccountDescriptionModify(\Ovh\StructType\TelephonyBillingAccountDescriptionModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountDescriptionModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyAbbreviatedNumberDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberDel $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberDelResponse|bool
     */
    public function telephonyAbbreviatedNumberDel(\Ovh\StructType\TelephonyAbbreviatedNumberDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxOptionsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxOptionsList $parameters
     * @return \Ovh\StructType\TelephonyFaxOptionsListResponse|bool
     */
    public function telephonyFaxOptionsList(\Ovh\StructType\TelephonyFaxOptionsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxOptionsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyTrunkExternalDisplayedNumberAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberAdd $parameters
     * @return \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberAddResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberAdd(\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillingAccountSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountSet $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountSetResponse|bool
     */
    public function telephonyBillingAccountSet(\Ovh\StructType\TelephonyBillingAccountSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDepositMovementModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDepositMovementModify $parameters
     * @return \Ovh\StructType\TelephonyDepositMovementModifyResponse|bool
     */
    public function telephonyDepositMovementModify(\Ovh\StructType\TelephonyDepositMovementModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDepositMovementModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyClick2CallDo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyClick2CallDo $parameters
     * @return \Ovh\StructType\TelephonyClick2CallDoResponse|bool
     */
    public function telephonyClick2CallDo(\Ovh\StructType\TelephonyClick2CallDo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyClick2CallDo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpecialNumberOrder
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpecialNumberOrder $parameters
     * @return \Ovh\StructType\TelephonySpecialNumberOrderResponse|bool
     */
    public function telephonySpecialNumberOrder(\Ovh\StructType\TelephonySpecialNumberOrder $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpecialNumberOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailOptionsModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailOptionsModify $parameters
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModifyResponse|bool
     */
    public function telephonyVoicemailOptionsModify(\Ovh\StructType\TelephonyVoicemailOptionsModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailOptionsModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineSwitchOldOffer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSwitchOldOffer $parameters
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferResponse|bool
     */
    public function telephonyLineSwitchOldOffer(\Ovh\StructType\TelephonyLineSwitchOldOffer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSwitchOldOffer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyPhonebookOnGroupContactDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupContactDel $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupContactDelResponse|bool
     */
    public function telephonyPhonebookOnGroupContactDel(\Ovh\StructType\TelephonyPhonebookOnGroupContactDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareAdd $parameters
     * @return \Ovh\StructType\TelephonySpareAddResponse|bool
     */
    public function telephonySpareAdd(\Ovh\StructType\TelephonySpareAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsAddCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsAddCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsAddCsvAttachmentResponse|bool
     */
    public function telephonySmsAddCsvAttachment(\Ovh\StructType\TelephonySmsAddCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsAddCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyDefaultPrivateHolidaysEvents
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEvents $parameters
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsResponse|bool
     */
    public function telephonyDefaultPrivateHolidaysEvents(\Ovh\StructType\TelephonyDefaultPrivateHolidaysEvents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDefaultPrivateHolidaysEvents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyToneRemoteUpload
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyToneRemoteUpload $parameters
     * @return \Ovh\StructType\TelephonyToneRemoteUploadResponse|bool
     */
    public function telephonyToneRemoteUpload(\Ovh\StructType\TelephonyToneRemoteUpload $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyToneRemoteUpload($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyNumberGetFrWayNamesFromInsee
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInsee $parameters
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInseeResponse|bool
     */
    public function telephonyNumberGetFrWayNamesFromInsee(\Ovh\StructType\TelephonyNumberGetFrWayNamesFromInsee $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberGetFrWayNamesFromInsee($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFMHuntingModificationMode
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFMHuntingModificationMode $parameters
     * @return \Ovh\StructType\TelephonyFMHuntingModificationModeResponse|bool
     */
    public function telephonyFMHuntingModificationMode(\Ovh\StructType\TelephonyFMHuntingModificationMode $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFMHuntingModificationMode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyAliasToSipOffer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAliasToSipOffer $parameters
     * @return \Ovh\StructType\TelephonyAliasToSipOfferResponse|bool
     */
    public function telephonyAliasToSipOffer(\Ovh\StructType\TelephonyAliasToSipOffer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAliasToSipOffer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserMultiSend
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserMultiSend $parameters
     * @return \Ovh\StructType\TelephonySmsUserMultiSendResponse|bool
     */
    public function telephonySmsUserMultiSend(\Ovh\StructType\TelephonySmsUserMultiSend $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserMultiSend($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsGetCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsGetCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsGetCsvAttachmentResponse|bool
     */
    public function telephonySmsGetCsvAttachment(\Ovh\StructType\TelephonySmsGetCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsGetCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsHistory
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsHistory $parameters
     * @return \Ovh\StructType\TelephonySmsHistoryResponse|bool
     */
    public function telephonySmsHistory(\Ovh\StructType\TelephonySmsHistory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyAbbreviatedNumberOnGroupModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupModify $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupModifyResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupModify(\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyHuntingGenericScreenList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingGenericScreenList $parameters
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenListResponse|bool
     */
    public function telephonyHuntingGenericScreenList(\Ovh\StructType\TelephonyHuntingGenericScreenList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyHuntingGenericScreenStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingGenericScreenStatus $parameters
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenStatusResponse|bool
     */
    public function telephonyHuntingGenericScreenStatus(\Ovh\StructType\TelephonyHuntingGenericScreenStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyHuntingModificationMembers
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingModificationMembers $parameters
     * @return \Ovh\StructType\TelephonyHuntingModificationMembersResponse|bool
     */
    public function telephonyHuntingModificationMembers(\Ovh\StructType\TelephonyHuntingModificationMembers $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingModificationMembers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailMessagesDownload
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailMessagesDownload $parameters
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownloadResponse|bool
     */
    public function telephonyVoicemailMessagesDownload(\Ovh\StructType\TelephonyVoicemailMessagesDownload $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailMessagesDownload($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxCampaignCreation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxCampaignCreation $parameters
     * @return \Ovh\StructType\TelephonyFaxCampaignCreationResponse|bool
     */
    public function telephonyFaxCampaignCreation(\Ovh\StructType\TelephonyFaxCampaignCreation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxCampaignCreation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyLineLogsNotificationOptions
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineLogsNotificationOptions $parameters
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsResponse|bool
     */
    public function telephonyLineLogsNotificationOptions(\Ovh\StructType\TelephonyLineLogsNotificationOptions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineLogsNotificationOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineGetIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineGetIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyLineGetIpRestrictionResponse|bool
     */
    public function telephonyLineGetIpRestriction(\Ovh\StructType\TelephonyLineGetIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineGetIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyGetTimeZoneNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyGetTimeZoneNumber $parameters
     * @return \Ovh\StructType\TelephonyGetTimeZoneNumberResponse|bool
     */
    public function telephonyGetTimeZoneNumber(\Ovh\StructType\TelephonyGetTimeZoneNumber $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyGetTimeZoneNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyFMHuntingModificationMembers
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFMHuntingModificationMembers $parameters
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembersResponse|bool
     */
    public function telephonyFMHuntingModificationMembers(\Ovh\StructType\TelephonyFMHuntingModificationMembers $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFMHuntingModificationMembers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookAdd $parameters
     * @return \Ovh\StructType\TelephonyPhonebookAddResponse|bool
     */
    public function telephonyPhonebookAdd(\Ovh\StructType\TelephonyPhonebookAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyRestrictionModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyRestrictionModify $parameters
     * @return \Ovh\StructType\TelephonyRestrictionModifyResponse|bool
     */
    public function telephonyRestrictionModify(\Ovh\StructType\TelephonyRestrictionModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyRestrictionModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyRatesList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyRatesList $parameters
     * @return \Ovh\StructType\TelephonyRatesListResponse|bool
     */
    public function telephonyRatesList(\Ovh\StructType\TelephonyRatesList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyRatesList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyHuntingGenericScreenOptions
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingGenericScreenOptions $parameters
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsResponse|bool
     */
    public function telephonyHuntingGenericScreenOptions(\Ovh\StructType\TelephonyHuntingGenericScreenOptions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillingAccountAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountAdd $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountAddResponse|bool
     */
    public function telephonyBillingAccountAdd(\Ovh\StructType\TelephonyBillingAccountAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusIsFreeKeyword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusIsFreeKeyword $parameters
     * @return \Ovh\StructType\TelephonySmsplusIsFreeKeywordResponse|bool
     */
    public function telephonySmsplusIsFreeKeyword(\Ovh\StructType\TelephonySmsplusIsFreeKeyword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusIsFreeKeyword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineGetCodecs
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineGetCodecs $parameters
     * @return \Ovh\StructType\TelephonyLineGetCodecsResponse|bool
     */
    public function telephonyLineGetCodecs(\Ovh\StructType\TelephonyLineGetCodecs $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineGetCodecs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSenderValidate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSenderValidate $parameters
     * @return \Ovh\StructType\TelephonySmsSenderValidateResponse|bool
     */
    public function telephonySmsSenderValidate(\Ovh\StructType\TelephonySmsSenderValidate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSenderValidate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyHuntingModificationSimultaneousCalls
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingModificationSimultaneousCalls $parameters
     * @return \Ovh\StructType\TelephonyHuntingModificationSimultaneousCallsResponse|bool
     */
    public function telephonyHuntingModificationSimultaneousCalls(\Ovh\StructType\TelephonyHuntingModificationSimultaneousCalls $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingModificationSimultaneousCalls($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDirectoryInfoGetSameSiret
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDirectoryInfoGetSameSiret $parameters
     * @return \Ovh\StructType\TelephonyDirectoryInfoGetSameSiretResponse|bool
     */
    public function telephonyDirectoryInfoGetSameSiret(\Ovh\StructType\TelephonyDirectoryInfoGetSameSiret $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDirectoryInfoGetSameSiret($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyConferenceSetParams
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyConferenceSetParams $parameters
     * @return \Ovh\StructType\TelephonyConferenceSetParamsResponse|bool
     */
    public function telephonyConferenceSetParams(\Ovh\StructType\TelephonyConferenceSetParams $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyConferenceSetParams($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySparePurchase
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySparePurchase $parameters
     * @return \Ovh\StructType\TelephonySparePurchaseResponse|bool
     */
    public function telephonySparePurchase(\Ovh\StructType\TelephonySparePurchase $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySparePurchase($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxCampaignList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxCampaignList $parameters
     * @return \Ovh\StructType\TelephonyFaxCampaignListResponse|bool
     */
    public function telephonyFaxCampaignList(\Ovh\StructType\TelephonyFaxCampaignList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxCampaignList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNicGetMgcpIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNicGetMgcpIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyNicGetMgcpIpRestrictionResponse|bool
     */
    public function telephonyNicGetMgcpIpRestriction(\Ovh\StructType\TelephonyNicGetMgcpIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNicGetMgcpIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsGetUserQuotaForUser
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsGetUserQuotaForUser $parameters
     * @return \Ovh\StructType\TelephonySmsGetUserQuotaForUserResponse|bool
     */
    public function telephonySmsGetUserQuotaForUser(\Ovh\StructType\TelephonySmsGetUserQuotaForUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsGetUserQuotaForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDirectoryInfoGetSiret
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDirectoryInfoGetSiret $parameters
     * @return \Ovh\StructType\TelephonyDirectoryInfoGetSiretResponse|bool
     */
    public function telephonyDirectoryInfoGetSiret(\Ovh\StructType\TelephonyDirectoryInfoGetSiret $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDirectoryInfoGetSiret($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFunctionKeyModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFunctionKeyModify $parameters
     * @return \Ovh\StructType\TelephonyFunctionKeyModifyResponse|bool
     */
    public function telephonyFunctionKeyModify(\Ovh\StructType\TelephonyFunctionKeyModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFunctionKeyModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyAbbreviatedNumberList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberList $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberListResponse|bool
     */
    public function telephonyAbbreviatedNumberList(\Ovh\StructType\TelephonyAbbreviatedNumberList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxModifyPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxModifyPassword $parameters
     * @return \Ovh\StructType\TelephonyFaxModifyPasswordResponse|bool
     */
    public function telephonyFaxModifyPassword(\Ovh\StructType\TelephonyFaxModifyPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxModifyPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsDelete $parameters
     * @return \Ovh\StructType\TelephonySmsDeleteResponse|bool
     */
    public function telephonySmsDelete(\Ovh\StructType\TelephonySmsDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyDirectoryModifyPublication
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDirectoryModifyPublication $parameters
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublicationResponse|bool
     */
    public function telephonyDirectoryModifyPublication(\Ovh\StructType\TelephonyDirectoryModifyPublication $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDirectoryModifyPublication($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnGroupAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupAdd $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupAddResponse|bool
     */
    public function telephonyPhonebookOnGroupAdd(\Ovh\StructType\TelephonyPhonebookOnGroupAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyLineSwitchOfferPossibility
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSwitchOfferPossibility $parameters
     * @return \Ovh\StructType\TelephonyLineSwitchOfferPossibilityResponse|bool
     */
    public function telephonyLineSwitchOfferPossibility(\Ovh\StructType\TelephonyLineSwitchOfferPossibility $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSwitchOfferPossibility($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSenderList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSenderList $parameters
     * @return \Ovh\StructType\TelephonySmsSenderListResponse|bool
     */
    public function telephonySmsSenderList(\Ovh\StructType\TelephonySmsSenderList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSenderList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySipToAliasOffer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySipToAliasOffer $parameters
     * @return \Ovh\StructType\TelephonySipToAliasOfferResponse|bool
     */
    public function telephonySipToAliasOffer(\Ovh\StructType\TelephonySipToAliasOffer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySipToAliasOffer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFunctionKeyList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFunctionKeyList $parameters
     * @return \Ovh\StructType\TelephonyFunctionKeyListResponse|bool
     */
    public function telephonyFunctionKeyList(\Ovh\StructType\TelephonyFunctionKeyList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFunctionKeyList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsGetCallBack
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsGetCallBack $parameters
     * @return \Ovh\StructType\TelephonySmsGetCallBackResponse|bool
     */
    public function telephonySmsGetCallBack(\Ovh\StructType\TelephonySmsGetCallBack $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsGetCallBack($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySviModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySviModify $parameters
     * @return \Ovh\StructType\TelephonySviModifyResponse|bool
     */
    public function telephonySviModify(\Ovh\StructType\TelephonySviModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySviModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusServiceDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusServiceDelete $parameters
     * @return \Ovh\StructType\TelephonySmsplusServiceDeleteResponse|bool
     */
    public function telephonySmsplusServiceDelete(\Ovh\StructType\TelephonySmsplusServiceDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusServiceDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineSwitchOffer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSwitchOffer $parameters
     * @return \Ovh\StructType\TelephonyLineSwitchOfferResponse|bool
     */
    public function telephonyLineSwitchOffer(\Ovh\StructType\TelephonyLineSwitchOffer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSwitchOffer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyTrunkExternalDisplayedNumberCheck
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberCheck $parameters
     * @return \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberCheckResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberCheck(\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberCheck $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDelClosureEvents
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDelClosureEvents $parameters
     * @return \Ovh\StructType\TelephonyDelClosureEventsResponse|bool
     */
    public function telephonyDelClosureEvents(\Ovh\StructType\TelephonyDelClosureEvents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDelClosureEvents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyFreefaxToVoicefaxCheckList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFreefaxToVoicefaxCheckList $parameters
     * @return \Ovh\StructType\TelephonyFreefaxToVoicefaxCheckListResponse|bool
     */
    public function telephonyFreefaxToVoicefaxCheckList(\Ovh\StructType\TelephonyFreefaxToVoicefaxCheckList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFreefaxToVoicefaxCheckList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailModifyPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailModifyPassword $parameters
     * @return \Ovh\StructType\TelephonyVoicemailModifyPasswordResponse|bool
     */
    public function telephonyVoicemailModifyPassword(\Ovh\StructType\TelephonyVoicemailModifyPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailModifyPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareCapabilities
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareCapabilities $parameters
     * @return \Ovh\StructType\TelephonySpareCapabilitiesResponse|bool
     */
    public function telephonySpareCapabilities(\Ovh\StructType\TelephonySpareCapabilities $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareCapabilities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnSmsDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsDel $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsDelResponse|bool
     */
    public function telephonyPhonebookOnSmsDel(\Ovh\StructType\TelephonyPhonebookOnSmsDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookShare
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookShare $parameters
     * @return \Ovh\StructType\TelephonyPhonebookShareResponse|bool
     */
    public function telephonyPhonebookShare(\Ovh\StructType\TelephonyPhonebookShare $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookShare($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSetUserQuota
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSetUserQuota $parameters
     * @return \Ovh\StructType\TelephonySmsSetUserQuotaResponse|bool
     */
    public function telephonySmsSetUserQuota(\Ovh\StructType\TelephonySmsSetUserQuota $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSetUserQuota($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsHistoryCsv
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsHistoryCsv $parameters
     * @return \Ovh\StructType\TelephonySmsHistoryCsvResponse|bool
     */
    public function telephonySmsHistoryCsv(\Ovh\StructType\TelephonySmsHistoryCsv $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsHistoryCsv($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyAbbreviatedNumberOnGroupList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupList $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupListResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupList(\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineLogs
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineLogs $parameters
     * @return \Ovh\StructType\TelephonyLineLogsResponse|bool
     */
    public function telephonyLineLogs(\Ovh\StructType\TelephonyLineLogs $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineLogs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareReplace
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareReplace $parameters
     * @return \Ovh\StructType\TelephonySpareReplaceResponse|bool
     */
    public function telephonySpareReplace(\Ovh\StructType\TelephonySpareReplace $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareReplace($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyClick2CallUserList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyClick2CallUserList $parameters
     * @return \Ovh\StructType\TelephonyClick2CallUserListResponse|bool
     */
    public function telephonyClick2CallUserList(\Ovh\StructType\TelephonyClick2CallUserList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyClick2CallUserList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailMailboxList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailMailboxList $parameters
     * @return \Ovh\StructType\TelephonyVoicemailMailboxListResponse|bool
     */
    public function telephonyVoicemailMailboxList(\Ovh\StructType\TelephonyVoicemailMailboxList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailMailboxList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxCampaignDetails
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxCampaignDetails $parameters
     * @return \Ovh\StructType\TelephonyFaxCampaignDetailsResponse|bool
     */
    public function telephonyFaxCampaignDetails(\Ovh\StructType\TelephonyFaxCampaignDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxCampaignDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnGroupDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupDel $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupDelResponse|bool
     */
    public function telephonyPhonebookOnGroupDel(\Ovh\StructType\TelephonyPhonebookOnGroupDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnGroupList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupListResponse|bool
     */
    public function telephonyPhonebookOnGroupList(\Ovh\StructType\TelephonyPhonebookOnGroupList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpecialNumberCustomList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpecialNumberCustomList $parameters
     * @return \Ovh\StructType\TelephonySpecialNumberCustomListResponse|bool
     */
    public function telephonySpecialNumberCustomList(\Ovh\StructType\TelephonySpecialNumberCustomList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpecialNumberCustomList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyFMHuntingModificationSimultaneousCalls
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls $parameters
     * @return \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCallsResponse|bool
     */
    public function telephonyFMHuntingModificationSimultaneousCalls(\Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFMHuntingModificationSimultaneousCalls($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailMailboxDownload
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailMailboxDownload $parameters
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownloadResponse|bool
     */
    public function telephonyVoicemailMailboxDownload(\Ovh\StructType\TelephonyVoicemailMailboxDownload $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailMailboxDownload($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNicGetIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNicGetIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyNicGetIpRestrictionResponse|bool
     */
    public function telephonyNicGetIpRestriction(\Ovh\StructType\TelephonyNicGetIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNicGetIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyGetClosureEventsAsArray
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsArray $parameters
     * @return \Ovh\ArrayType\TelephonyGetClosureEventsAsArrayResponse|bool
     */
    public function telephonyGetClosureEventsAsArray(\Ovh\StructType\TelephonyGetClosureEventsAsArray $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyGetClosureEventsAsArray($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnSmsContactDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsContactDel $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsContactDelResponse|bool
     */
    public function telephonyPhonebookOnSmsContactDel(\Ovh\StructType\TelephonyPhonebookOnSmsContactDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyReversmentsRefundIsPending
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyReversmentsRefundIsPending $parameters
     * @return \Ovh\StructType\TelephonyReversmentsRefundIsPendingResponse|bool
     */
    public function telephonyReversmentsRefundIsPending(\Ovh\StructType\TelephonyReversmentsRefundIsPending $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyReversmentsRefundIsPending($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyScreenListInfoModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyScreenListInfoModify $parameters
     * @return \Ovh\StructType\TelephonyScreenListInfoModifyResponse|bool
     */
    public function telephonyScreenListInfoModify(\Ovh\StructType\TelephonyScreenListInfoModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyScreenListInfoModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonySmsplusServiceReversableTicketsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList $parameters
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsListResponse|bool
     */
    public function telephonySmsplusServiceReversableTicketsList(\Ovh\StructType\TelephonySmsplusServiceReversableTicketsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusServiceReversableTicketsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyHuntingGenericScreenStatusModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingGenericScreenStatusModify $parameters
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenStatusModifyResponse|bool
     */
    public function telephonyHuntingGenericScreenStatusModify(\Ovh\StructType\TelephonyHuntingGenericScreenStatusModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenStatusModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsBlacklistedSendersList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsBlacklistedSendersList $parameters
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListResponse|bool
     */
    public function telephonySmsBlacklistedSendersList(\Ovh\StructType\TelephonySmsBlacklistedSendersList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsBlacklistedSendersList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookContactAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookContactAdd $parameters
     * @return \Ovh\StructType\TelephonyPhonebookContactAddResponse|bool
     */
    public function telephonyPhonebookContactAdd(\Ovh\StructType\TelephonyPhonebookContactAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookContactAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyPortabilityOrderSpecialNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber $parameters
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumberResponse|bool
     */
    public function telephonyPortabilityOrderSpecialNumber(\Ovh\StructType\TelephonyPortabilityOrderSpecialNumber $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPortabilityOrderSpecialNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserSetCallBack
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserSetCallBack $parameters
     * @return \Ovh\StructType\TelephonySmsUserSetCallBackResponse|bool
     */
    public function telephonySmsUserSetCallBack(\Ovh\StructType\TelephonySmsUserSetCallBack $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserSetCallBack($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnGroupModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupModify $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupModifyResponse|bool
     */
    public function telephonyPhonebookOnGroupModify(\Ovh\StructType\TelephonyPhonebookOnGroupModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyLineSwitchOldOfferPossibility
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSwitchOldOfferPossibility $parameters
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferPossibilityResponse|bool
     */
    public function telephonyLineSwitchOldOfferPossibility(\Ovh\StructType\TelephonyLineSwitchOldOfferPossibility $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSwitchOldOfferPossibility($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusServiceList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusServiceList $parameters
     * @return \Ovh\StructType\TelephonySmsplusServiceListResponse|bool
     */
    public function telephonySmsplusServiceList(\Ovh\StructType\TelephonySmsplusServiceList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusServiceList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyHuntingModificationAnonymousCallRejection
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection $parameters
     * @return \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejectionResponse|bool
     */
    public function telephonyHuntingModificationAnonymousCallRejection(\Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingModificationAnonymousCallRejection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNumberGetBillingAccount
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberGetBillingAccount $parameters
     * @return \Ovh\StructType\TelephonyNumberGetBillingAccountResponse|bool
     */
    public function telephonyNumberGetBillingAccount(\Ovh\StructType\TelephonyNumberGetBillingAccount $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberGetBillingAccount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyTonesOptionsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyTonesOptionsList $parameters
     * @return \Ovh\StructType\TelephonyTonesOptionsListResponse|bool
     */
    public function telephonyTonesOptionsList(\Ovh\StructType\TelephonyTonesOptionsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyTonesOptionsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareList $parameters
     * @return \Ovh\StructType\TelephonySpareListResponse|bool
     */
    public function telephonySpareList(\Ovh\StructType\TelephonySpareList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyListSummationCallsFromNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyListSummationCallsFromNumber $parameters
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumberResponse|bool
     */
    public function telephonyListSummationCallsFromNumber(\Ovh\StructType\TelephonyListSummationCallsFromNumber $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyListSummationCallsFromNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyConferenceGetParams
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyConferenceGetParams $parameters
     * @return \Ovh\StructType\TelephonyConferenceGetParamsResponse|bool
     */
    public function telephonyConferenceGetParams(\Ovh\StructType\TelephonyConferenceGetParams $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyConferenceGetParams($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookContactModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookContactModify $parameters
     * @return \Ovh\StructType\TelephonyPhonebookContactModifyResponse|bool
     */
    public function telephonyPhonebookContactModify(\Ovh\StructType\TelephonyPhonebookContactModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookContactModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineList $parameters
     * @return \Ovh\StructType\TelephonyLineListResponse|bool
     */
    public function telephonyLineList(\Ovh\StructType\TelephonyLineList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineOptionsModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineOptionsModify $parameters
     * @return \Ovh\StructType\TelephonyLineOptionsModifyResponse|bool
     */
    public function telephonyLineOptionsModify(\Ovh\StructType\TelephonyLineOptionsModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineOptionsModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyHuntingGenericScreenSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingGenericScreenSet $parameters
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenSetResponse|bool
     */
    public function telephonyHuntingGenericScreenSet(\Ovh\StructType\TelephonyHuntingGenericScreenSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxCampaignStartStop
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxCampaignStartStop $parameters
     * @return \Ovh\StructType\TelephonyFaxCampaignStartStopResponse|bool
     */
    public function telephonyFaxCampaignStartStop(\Ovh\StructType\TelephonyFaxCampaignStartStop $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxCampaignStartStop($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDirectoryModifyAddress
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDirectoryModifyAddress $parameters
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddressResponse|bool
     */
    public function telephonyDirectoryModifyAddress(\Ovh\StructType\TelephonyDirectoryModifyAddress $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDirectoryModifyAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNicSetMgcpIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNicSetMgcpIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyNicSetMgcpIpRestrictionResponse|bool
     */
    public function telephonyNicSetMgcpIpRestriction(\Ovh\StructType\TelephonyNicSetMgcpIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNicSetMgcpIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySecurityDepositCredit
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySecurityDepositCredit $parameters
     * @return \Ovh\StructType\TelephonySecurityDepositCreditResponse|bool
     */
    public function telephonySecurityDepositCredit(\Ovh\StructType\TelephonySecurityDepositCredit $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySecurityDepositCredit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineOrder
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineOrder $parameters
     * @return \Ovh\StructType\TelephonyLineOrderResponse|bool
     */
    public function telephonyLineOrder(\Ovh\StructType\TelephonyLineOrder $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyConferenceAction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyConferenceAction $parameters
     * @return \Ovh\StructType\TelephonyConferenceActionResponse|bool
     */
    public function telephonyConferenceAction(\Ovh\StructType\TelephonyConferenceAction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyConferenceAction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFunctionKeyDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFunctionKeyDel $parameters
     * @return \Ovh\StructType\TelephonyFunctionKeyDelResponse|bool
     */
    public function telephonyFunctionKeyDel(\Ovh\StructType\TelephonyFunctionKeyDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFunctionKeyDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNicGetSipDomain
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNicGetSipDomain $parameters
     * @return \Ovh\StructType\TelephonyNicGetSipDomainResponse|bool
     */
    public function telephonyNicGetSipDomain(\Ovh\StructType\TelephonyNicGetSipDomain $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNicGetSipDomain($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyGetClosureEventsAsICS
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsICS $parameters
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsICSResponse|bool
     */
    public function telephonyGetClosureEventsAsICS(\Ovh\StructType\TelephonyGetClosureEventsAsICS $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyGetClosureEventsAsICS($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserCreditLeft
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserCreditLeft $parameters
     * @return \Ovh\StructType\TelephonySmsUserCreditLeftResponse|bool
     */
    public function telephonySmsUserCreditLeft(\Ovh\StructType\TelephonySmsUserCreditLeft $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserCreditLeft($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPortabilityOrder
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPortabilityOrder $parameters
     * @return \Ovh\StructType\TelephonyPortabilityOrderResponse|bool
     */
    public function telephonyPortabilityOrder(\Ovh\StructType\TelephonyPortabilityOrder $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPortabilityOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailMailboxDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailMailboxDelete $parameters
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDeleteResponse|bool
     */
    public function telephonyVoicemailMailboxDelete(\Ovh\StructType\TelephonyVoicemailMailboxDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailMailboxDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillingAccountDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountDel $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountDelResponse|bool
     */
    public function telephonyBillingAccountDel(\Ovh\StructType\TelephonyBillingAccountDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNumberClean
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberClean $parameters
     * @return \Ovh\StructType\TelephonyNumberCleanResponse|bool
     */
    public function telephonyNumberClean(\Ovh\StructType\TelephonyNumberClean $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberClean($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPlugAndPhoneOperation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPlugAndPhoneOperation $parameters
     * @return \Ovh\StructType\TelephonyPlugAndPhoneOperationResponse|bool
     */
    public function telephonyPlugAndPhoneOperation(\Ovh\StructType\TelephonyPlugAndPhoneOperation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPlugAndPhoneOperation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyPhonebookOnSmsContactModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsContactModify $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsContactModifyResponse|bool
     */
    public function telephonyPhonebookOnSmsContactModify(\Ovh\StructType\TelephonyPhonebookOnSmsContactModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnSmsModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsModify $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsModifyResponse|bool
     */
    public function telephonyPhonebookOnSmsModify(\Ovh\StructType\TelephonyPhonebookOnSmsModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSetQuotaNotification
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSetQuotaNotification $parameters
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotificationResponse|bool
     */
    public function telephonySmsSetQuotaNotification(\Ovh\StructType\TelephonySmsSetQuotaNotification $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSetQuotaNotification($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserList $parameters
     * @return \Ovh\StructType\TelephonySmsUserListResponse|bool
     */
    public function telephonySmsUserList(\Ovh\StructType\TelephonySmsUserList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyHuntingInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingInfo $parameters
     * @return \Ovh\StructType\TelephonyHuntingInfoResponse|bool
     */
    public function telephonyHuntingInfo(\Ovh\StructType\TelephonyHuntingInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookContactList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookContactList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookContactListResponse|bool
     */
    public function telephonyPhonebookContactList(\Ovh\StructType\TelephonyPhonebookContactList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookContactList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserPassword $parameters
     * @return \Ovh\StructType\TelephonySmsUserPasswordResponse|bool
     */
    public function telephonySmsUserPassword(\Ovh\StructType\TelephonySmsUserPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineGetOfferPrices
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineGetOfferPrices $parameters
     * @return \Ovh\StructType\TelephonyLineGetOfferPricesResponse|bool
     */
    public function telephonyLineGetOfferPrices(\Ovh\StructType\TelephonyLineGetOfferPrices $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineGetOfferPrices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsGetQuotaNotification
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsGetQuotaNotification $parameters
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationResponse|bool
     */
    public function telephonySmsGetQuotaNotification(\Ovh\StructType\TelephonySmsGetQuotaNotification $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsGetQuotaNotification($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyHuntingModificationMode
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingModificationMode $parameters
     * @return \Ovh\StructType\TelephonyHuntingModificationModeResponse|bool
     */
    public function telephonyHuntingModificationMode(\Ovh\StructType\TelephonyHuntingModificationMode $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingModificationMode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyScreenListBlackWhiteChoice
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyScreenListBlackWhiteChoice $parameters
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceResponse|bool
     */
    public function telephonyScreenListBlackWhiteChoice(\Ovh\StructType\TelephonyScreenListBlackWhiteChoice $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyScreenListBlackWhiteChoice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsDeleteCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsDeleteCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsDeleteCsvAttachmentResponse|bool
     */
    public function telephonySmsDeleteCsvAttachment(\Ovh\StructType\TelephonySmsDeleteCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsDeleteCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNumberZoneAndPrefixList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberZoneAndPrefixList $parameters
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixListResponse|bool
     */
    public function telephonyNumberZoneAndPrefixList(\Ovh\StructType\TelephonyNumberZoneAndPrefixList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberZoneAndPrefixList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineSetSipDomain
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSetSipDomain $parameters
     * @return \Ovh\StructType\TelephonyLineSetSipDomainResponse|bool
     */
    public function telephonyLineSetSipDomain(\Ovh\StructType\TelephonyLineSetSipDomain $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSetSipDomain($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyTrunkExternalDisplayedNumberDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberDel $parameters
     * @return \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberDelResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberDel(\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyPhonebookOnGroupContactList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupContactList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupContactListResponse|bool
     */
    public function telephonyPhonebookOnGroupContactList(\Ovh\StructType\TelephonyPhonebookOnGroupContactList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonySmsplusServiceReversableTicketsSummary
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusServiceReversableTicketsSummary $parameters
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsSummaryResponse|bool
     */
    public function telephonySmsplusServiceReversableTicketsSummary(\Ovh\StructType\TelephonySmsplusServiceReversableTicketsSummary $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusServiceReversableTicketsSummary($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDeleteLine
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDeleteLine $parameters
     * @return \Ovh\StructType\TelephonyDeleteLineResponse|bool
     */
    public function telephonyDeleteLine(\Ovh\StructType\TelephonyDeleteLine $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDeleteLine($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySetTimeZoneNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySetTimeZoneNumber $parameters
     * @return \Ovh\StructType\TelephonySetTimeZoneNumberResponse|bool
     */
    public function telephonySetTimeZoneNumber(\Ovh\StructType\TelephonySetTimeZoneNumber $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySetTimeZoneNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNicSetIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNicSetIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyNicSetIpRestrictionResponse|bool
     */
    public function telephonyNicSetIpRestriction(\Ovh\StructType\TelephonyNicSetIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNicSetIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPortabilityStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPortabilityStatus $parameters
     * @return \Ovh\StructType\TelephonyPortabilityStatusResponse|bool
     */
    public function telephonyPortabilityStatus(\Ovh\StructType\TelephonyPortabilityStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPortabilityStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySecurityDepositInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySecurityDepositInfo $parameters
     * @return \Ovh\StructType\TelephonySecurityDepositInfoResponse|bool
     */
    public function telephonySecurityDepositInfo(\Ovh\StructType\TelephonySecurityDepositInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySecurityDepositInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsListCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsListCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsListCsvAttachmentResponse|bool
     */
    public function telephonySmsListCsvAttachment(\Ovh\StructType\TelephonySmsListCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsListCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsCancelSending
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsCancelSending $parameters
     * @return \Ovh\StructType\TelephonySmsCancelSendingResponse|bool
     */
    public function telephonySmsCancelSending(\Ovh\StructType\TelephonySmsCancelSending $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsCancelSending($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyScreenListInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyScreenListInfo $parameters
     * @return \Ovh\StructType\TelephonyScreenListInfoResponse|bool
     */
    public function telephonyScreenListInfo(\Ovh\StructType\TelephonyScreenListInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyScreenListInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineLogsOnGroup
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineLogsOnGroup $parameters
     * @return \Ovh\StructType\TelephonyLineLogsOnGroupResponse|bool
     */
    public function telephonyLineLogsOnGroup(\Ovh\StructType\TelephonyLineLogsOnGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineLogsOnGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineGetMgcpIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineGetMgcpIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyLineGetMgcpIpRestrictionResponse|bool
     */
    public function telephonyLineGetMgcpIpRestriction(\Ovh\StructType\TelephonyLineGetMgcpIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineGetMgcpIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineDetails
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineDetails $parameters
     * @return \Ovh\StructType\TelephonyLineDetailsResponse|bool
     */
    public function telephonyLineDetails(\Ovh\StructType\TelephonyLineDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookContactDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookContactDel $parameters
     * @return \Ovh\StructType\TelephonyPhonebookContactDelResponse|bool
     */
    public function telephonyPhonebookContactDel(\Ovh\StructType\TelephonyPhonebookContactDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookContactDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyRatesListCsv
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyRatesListCsv $parameters
     * @return \Ovh\StructType\TelephonyRatesListCsvResponse|bool
     */
    public function telephonyRatesListCsv(\Ovh\StructType\TelephonyRatesListCsv $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyRatesListCsv($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyConferenceGetInfos
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyConferenceGetInfos $parameters
     * @return \Ovh\StructType\TelephonyConferenceGetInfosResponse|bool
     */
    public function telephonyConferenceGetInfos(\Ovh\StructType\TelephonyConferenceGetInfos $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyConferenceGetInfos($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnSmsContactList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsContactList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsContactListResponse|bool
     */
    public function telephonyPhonebookOnSmsContactList(\Ovh\StructType\TelephonyPhonebookOnSmsContactList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnSmsContactAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnSmsContactAdd $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsContactAddResponse|bool
     */
    public function telephonyPhonebookOnSmsContactAdd(\Ovh\StructType\TelephonyPhonebookOnSmsContactAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyFMHuntingModificationAnonymousCallRejection
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFMHuntingModificationAnonymousCallRejection $parameters
     * @return \Ovh\StructType\TelephonyFMHuntingModificationAnonymousCallRejectionResponse|bool
     */
    public function telephonyFMHuntingModificationAnonymousCallRejection(\Ovh\StructType\TelephonyFMHuntingModificationAnonymousCallRejection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFMHuntingModificationAnonymousCallRejection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDdiModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDdiModify $parameters
     * @return \Ovh\StructType\TelephonyDdiModifyResponse|bool
     */
    public function telephonyDdiModify(\Ovh\StructType\TelephonyDdiModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDdiModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyRedirectInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyRedirectInfo $parameters
     * @return \Ovh\StructType\TelephonyRedirectInfoResponse|bool
     */
    public function telephonyRedirectInfo(\Ovh\StructType\TelephonyRedirectInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyRedirectInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSend
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSend $parameters
     * @return \Ovh\StructType\TelephonySmsSendResponse|bool
     */
    public function telephonySmsSend(\Ovh\StructType\TelephonySmsSend $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSend($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineGetSipDomain
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineGetSipDomain $parameters
     * @return \Ovh\StructType\TelephonyLineGetSipDomainResponse|bool
     */
    public function telephonyLineGetSipDomain(\Ovh\StructType\TelephonyLineGetSipDomain $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineGetSipDomain($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyToneDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyToneDelete $parameters
     * @return \Ovh\StructType\TelephonyToneDeleteResponse|bool
     */
    public function telephonyToneDelete(\Ovh\StructType\TelephonyToneDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyToneDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineSetMgcpIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSetMgcpIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyLineSetMgcpIpRestrictionResponse|bool
     */
    public function telephonyLineSetMgcpIpRestriction(\Ovh\StructType\TelephonyLineSetMgcpIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSetMgcpIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyPhonebookOnGroupContactModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupContactModify $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupContactModifyResponse|bool
     */
    public function telephonyPhonebookOnGroupContactModify(\Ovh\StructType\TelephonyPhonebookOnGroupContactModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyScreenListBlackWhiteChoiceModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify $parameters
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModifyResponse|bool
     */
    public function telephonyScreenListBlackWhiteChoiceModify(\Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyScreenListBlackWhiteChoiceModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusServiceDetails
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusServiceDetails $parameters
     * @return \Ovh\StructType\TelephonySmsplusServiceDetailsResponse|bool
     */
    public function telephonySmsplusServiceDetails(\Ovh\StructType\TelephonySmsplusServiceDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusServiceDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyAbbreviatedNumberOnGroupDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupDel $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupDelResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupDel(\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSenderDescription
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSenderDescription $parameters
     * @return \Ovh\StructType\TelephonySmsSenderDescriptionResponse|bool
     */
    public function telephonySmsSenderDescription(\Ovh\StructType\TelephonySmsSenderDescription $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSenderDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyAbbreviatedNumberListPaginated
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberListPaginated $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedResponse|bool
     */
    public function telephonyAbbreviatedNumberListPaginated(\Ovh\StructType\TelephonyAbbreviatedNumberListPaginated $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberListPaginated($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonySetDefaultPrivateHolidaysEvents
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySetDefaultPrivateHolidaysEvents $parameters
     * @return \Ovh\StructType\TelephonySetDefaultPrivateHolidaysEventsResponse|bool
     */
    public function telephonySetDefaultPrivateHolidaysEvents(\Ovh\StructType\TelephonySetDefaultPrivateHolidaysEvents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySetDefaultPrivateHolidaysEvents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareServiceList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareServiceList $parameters
     * @return \Ovh\StructType\TelephonySpareServiceListResponse|bool
     */
    public function telephonySpareServiceList(\Ovh\StructType\TelephonySpareServiceList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareServiceList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserListCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserListCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsUserListCsvAttachmentResponse|bool
     */
    public function telephonySmsUserListCsvAttachment(\Ovh\StructType\TelephonySmsUserListCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserListCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxCallList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxCallList $parameters
     * @return \Ovh\StructType\TelephonyFaxCallListResponse|bool
     */
    public function telephonyFaxCallList(\Ovh\StructType\TelephonyFaxCallList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxCallList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserSend
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserSend $parameters
     * @return \Ovh\StructType\TelephonySmsUserSendResponse|bool
     */
    public function telephonySmsUserSend(\Ovh\StructType\TelephonySmsUserSend $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserSend($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookOnGroupGroupList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookOnGroupGroupList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupGroupListResponse|bool
     */
    public function telephonyPhonebookOnGroupGroupList(\Ovh\StructType\TelephonyPhonebookOnGroupGroupList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupGroupList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyClick2CallUserPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyClick2CallUserPassword $parameters
     * @return \Ovh\StructType\TelephonyClick2CallUserPasswordResponse|bool
     */
    public function telephonyClick2CallUserPassword(\Ovh\StructType\TelephonyClick2CallUserPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyClick2CallUserPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsGetUserQuota
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsGetUserQuota $parameters
     * @return \Ovh\StructType\TelephonySmsGetUserQuotaResponse|bool
     */
    public function telephonySmsGetUserQuota(\Ovh\StructType\TelephonySmsGetUserQuota $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsGetUserQuota($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSenderDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSenderDelete $parameters
     * @return \Ovh\StructType\TelephonySmsSenderDeleteResponse|bool
     */
    public function telephonySmsSenderDelete(\Ovh\StructType\TelephonySmsSenderDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSenderDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyToneStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyToneStatus $parameters
     * @return \Ovh\StructType\TelephonyToneStatusResponse|bool
     */
    public function telephonyToneStatus(\Ovh\StructType\TelephonyToneStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyToneStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDdiInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDdiInfo $parameters
     * @return \Ovh\StructType\TelephonyDdiInfoResponse|bool
     */
    public function telephonyDdiInfo(\Ovh\StructType\TelephonyDdiInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDdiInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyHuntingGroupList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingGroupList $parameters
     * @return \Ovh\StructType\TelephonyHuntingGroupListResponse|bool
     */
    public function telephonyHuntingGroupList(\Ovh\StructType\TelephonyHuntingGroupList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingGroupList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyTrunkExternalDisplayedNumberList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberList $parameters
     * @return \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberListResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberList(\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDirectoryListWayType
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDirectoryListWayType $parameters
     * @return \Ovh\StructType\TelephonyDirectoryListWayTypeResponse|bool
     */
    public function telephonyDirectoryListWayType(\Ovh\StructType\TelephonyDirectoryListWayType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDirectoryListWayType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserHistoryCsv
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserHistoryCsv $parameters
     * @return \Ovh\StructType\TelephonySmsUserHistoryCsvResponse|bool
     */
    public function telephonySmsUserHistoryCsv(\Ovh\StructType\TelephonySmsUserHistoryCsv $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserHistoryCsv($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyCallList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyCallList $parameters
     * @return \Ovh\StructType\TelephonyCallListResponse|bool
     */
    public function telephonyCallList(\Ovh\StructType\TelephonyCallList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyCallList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyGetDefaultPrivateHolidaysEvents
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEvents $parameters
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsResponse|bool
     */
    public function telephonyGetDefaultPrivateHolidaysEvents(\Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEvents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyGetDefaultPrivateHolidaysEvents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusShortCodesList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusShortCodesList $parameters
     * @return \Ovh\StructType\TelephonySmsplusShortCodesListResponse|bool
     */
    public function telephonySmsplusShortCodesList(\Ovh\StructType\TelephonySmsplusShortCodesList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusShortCodesList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyAliasToSipPossibilities
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAliasToSipPossibilities $parameters
     * @return \Ovh\StructType\TelephonyAliasToSipPossibilitiesResponse|bool
     */
    public function telephonyAliasToSipPossibilities(\Ovh\StructType\TelephonyAliasToSipPossibilities $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAliasToSipPossibilities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyAbbreviatedNumberOnGroupAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAddResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupAdd(\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyHuntingModificationQueue
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingModificationQueue $parameters
     * @return \Ovh\StructType\TelephonyHuntingModificationQueueResponse|bool
     */
    public function telephonyHuntingModificationQueue(\Ovh\StructType\TelephonyHuntingModificationQueue $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingModificationQueue($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyDirectoryInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyDirectoryInfo $parameters
     * @return \Ovh\StructType\TelephonyDirectoryInfoResponse|bool
     */
    public function telephonyDirectoryInfo(\Ovh\StructType\TelephonyDirectoryInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyDirectoryInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillDetails
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillDetails $parameters
     * @return \Ovh\StructType\TelephonyBillDetailsResponse|bool
     */
    public function telephonyBillDetails(\Ovh\StructType\TelephonyBillDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyLineLogsNotificationOptionsModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify $parameters
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModifyResponse|bool
     */
    public function telephonyLineLogsNotificationOptionsModify(\Ovh\StructType\TelephonyLineLogsNotificationOptionsModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineLogsNotificationOptionsModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyClick2CallDoBySession
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyClick2CallDoBySession $parameters
     * @return \Ovh\StructType\TelephonyClick2CallDoBySessionResponse|bool
     */
    public function telephonyClick2CallDoBySession(\Ovh\StructType\TelephonyClick2CallDoBySession $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyClick2CallDoBySession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyAbbreviatedNumberAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberAdd $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberAddResponse|bool
     */
    public function telephonyAbbreviatedNumberAdd(\Ovh\StructType\TelephonyAbbreviatedNumberAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNumberOrder
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberOrder $parameters
     * @return \Ovh\StructType\TelephonyNumberOrderResponse|bool
     */
    public function telephonyNumberOrder(\Ovh\StructType\TelephonyNumberOrder $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineSetIpRestriction
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSetIpRestriction $parameters
     * @return \Ovh\StructType\TelephonyLineSetIpRestrictionResponse|bool
     */
    public function telephonyLineSetIpRestriction(\Ovh\StructType\TelephonyLineSetIpRestriction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSetIpRestriction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineSetCodecs
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineSetCodecs $parameters
     * @return \Ovh\StructType\TelephonyLineSetCodecsResponse|bool
     */
    public function telephonyLineSetCodecs(\Ovh\StructType\TelephonyLineSetCodecs $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineSetCodecs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyNumberCityForZoneList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyNumberCityForZoneList $parameters
     * @return \Ovh\StructType\TelephonyNumberCityForZoneListResponse|bool
     */
    public function telephonyNumberCityForZoneList(\Ovh\StructType\TelephonyNumberCityForZoneList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyNumberCityForZoneList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyTonesOptionsModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyTonesOptionsModify $parameters
     * @return \Ovh\StructType\TelephonyTonesOptionsModifyResponse|bool
     */
    public function telephonyTonesOptionsModify(\Ovh\StructType\TelephonyTonesOptionsModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyTonesOptionsModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyVoicemailMessagesRemoteUpload
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload $parameters
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUploadResponse|bool
     */
    public function telephonyVoicemailMessagesRemoteUpload(\Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailMessagesRemoteUpload($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyOfferInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyOfferInfo $parameters
     * @return \Ovh\StructType\TelephonyOfferInfoResponse|bool
     */
    public function telephonyOfferInfo(\Ovh\StructType\TelephonyOfferInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyOfferInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookDel $parameters
     * @return \Ovh\StructType\TelephonyPhonebookDelResponse|bool
     */
    public function telephonyPhonebookDel(\Ovh\StructType\TelephonyPhonebookDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserAdd $parameters
     * @return \Ovh\StructType\TelephonySmsUserAddResponse|bool
     */
    public function telephonySmsUserAdd(\Ovh\StructType\TelephonySmsUserAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserHistory
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserHistory $parameters
     * @return \Ovh\StructType\TelephonySmsUserHistoryResponse|bool
     */
    public function telephonySmsUserHistory(\Ovh\StructType\TelephonySmsUserHistory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserGetCallBack
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserGetCallBack $parameters
     * @return \Ovh\StructType\TelephonySmsUserGetCallBackResponse|bool
     */
    public function telephonySmsUserGetCallBack(\Ovh\StructType\TelephonySmsUserGetCallBack $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserGetCallBack($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyOfferModifyPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyOfferModifyPassword $parameters
     * @return \Ovh\StructType\TelephonyOfferModifyPasswordResponse|bool
     */
    public function telephonyOfferModifyPassword(\Ovh\StructType\TelephonyOfferModifyPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyOfferModifyPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFunctionKeyAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFunctionKeyAdd $parameters
     * @return \Ovh\StructType\TelephonyFunctionKeyAddResponse|bool
     */
    public function telephonyFunctionKeyAdd(\Ovh\StructType\TelephonyFunctionKeyAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFunctionKeyAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookListResponse|bool
     */
    public function telephonyPhonebookList(\Ovh\StructType\TelephonyPhonebookList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPlugAndPhoneReset
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPlugAndPhoneReset $parameters
     * @return \Ovh\StructType\TelephonyPlugAndPhoneResetResponse|bool
     */
    public function telephonyPlugAndPhoneReset(\Ovh\StructType\TelephonyPlugAndPhoneReset $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPlugAndPhoneReset($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareInfo $parameters
     * @return \Ovh\StructType\TelephonySpareInfoResponse|bool
     */
    public function telephonySpareInfo(\Ovh\StructType\TelephonySpareInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsUserDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserDel $parameters
     * @return \Ovh\StructType\TelephonySmsUserDelResponse|bool
     */
    public function telephonySmsUserDel(\Ovh\StructType\TelephonySmsUserDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailMessagesStatus
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailMessagesStatus $parameters
     * @return \Ovh\StructType\TelephonyVoicemailMessagesStatusResponse|bool
     */
    public function telephonyVoicemailMessagesStatus(\Ovh\StructType\TelephonyVoicemailMessagesStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailMessagesStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookModify $parameters
     * @return \Ovh\StructType\TelephonyPhonebookModifyResponse|bool
     */
    public function telephonyPhonebookModify(\Ovh\StructType\TelephonyPhonebookModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyOfferModifyName
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyOfferModifyName $parameters
     * @return \Ovh\StructType\TelephonyOfferModifyNameResponse|bool
     */
    public function telephonyOfferModifyName(\Ovh\StructType\TelephonyOfferModifyName $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyOfferModifyName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSetCallBack
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSetCallBack $parameters
     * @return \Ovh\StructType\TelephonySmsSetCallBackResponse|bool
     */
    public function telephonySmsSetCallBack(\Ovh\StructType\TelephonySmsSetCallBack $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSetCallBack($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPhonebookGroupList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPhonebookGroupList $parameters
     * @return \Ovh\StructType\TelephonyPhonebookGroupListResponse|bool
     */
    public function telephonyPhonebookGroupList(\Ovh\StructType\TelephonyPhonebookGroupList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPhonebookGroupList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillingAccountInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountInfo $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountInfoResponse|bool
     */
    public function telephonyBillingAccountInfo(\Ovh\StructType\TelephonyBillingAccountInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsSenderAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsSenderAdd $parameters
     * @return \Ovh\StructType\TelephonySmsSenderAddResponse|bool
     */
    public function telephonySmsSenderAdd(\Ovh\StructType\TelephonySmsSenderAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsSenderAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineConsumptionCSVByMail
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineConsumptionCSVByMail $parameters
     * @return \Ovh\StructType\TelephonyLineConsumptionCSVByMailResponse|bool
     */
    public function telephonyLineConsumptionCSVByMail(\Ovh\StructType\TelephonyLineConsumptionCSVByMail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineConsumptionCSVByMail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonySmsUserDeleteCsvAttachment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsUserDeleteCsvAttachment $parameters
     * @return \Ovh\StructType\TelephonySmsUserDeleteCsvAttachmentResponse|bool
     */
    public function telephonySmsUserDeleteCsvAttachment(\Ovh\StructType\TelephonySmsUserDeleteCsvAttachment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsUserDeleteCsvAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyListReversableCallsFromNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyListReversableCallsFromNumber $parameters
     * @return \Ovh\StructType\TelephonyListReversableCallsFromNumberResponse|bool
     */
    public function telephonyListReversableCallsFromNumber(\Ovh\StructType\TelephonyListReversableCallsFromNumber $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyListReversableCallsFromNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyBillingAccountList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyBillingAccountList $parameters
     * @return \Ovh\StructType\TelephonyBillingAccountListResponse|bool
     */
    public function telephonyBillingAccountList(\Ovh\StructType\TelephonyBillingAccountList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyBillingAccountList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonySmsGetQuotaNotificationForUser
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsGetQuotaNotificationForUser $parameters
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationForUserResponse|bool
     */
    public function telephonySmsGetQuotaNotificationForUser(\Ovh\StructType\TelephonySmsGetQuotaNotificationForUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsGetQuotaNotificationForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyChangeNicModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyChangeNicModify $parameters
     * @return \Ovh\StructType\TelephonyChangeNicModifyResponse|bool
     */
    public function telephonyChangeNicModify(\Ovh\StructType\TelephonyChangeNicModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyChangeNicModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySviInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySviInfo $parameters
     * @return \Ovh\StructType\TelephonySviInfoResponse|bool
     */
    public function telephonySviInfo(\Ovh\StructType\TelephonySviInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySviInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyClick2CallUserAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyClick2CallUserAdd $parameters
     * @return \Ovh\StructType\TelephonyClick2CallUserAddResponse|bool
     */
    public function telephonyClick2CallUserAdd(\Ovh\StructType\TelephonyClick2CallUserAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyClick2CallUserAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonySmsBlacklistedSendersDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsBlacklistedSendersDelete $parameters
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersDeleteResponse|bool
     */
    public function telephonySmsBlacklistedSendersDelete(\Ovh\StructType\TelephonySmsBlacklistedSendersDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsBlacklistedSendersDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusServiceAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusServiceAdd $parameters
     * @return \Ovh\StructType\TelephonySmsplusServiceAddResponse|bool
     */
    public function telephonySmsplusServiceAdd(\Ovh\StructType\TelephonySmsplusServiceAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusServiceAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareCreateRMA
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareCreateRMA $parameters
     * @return \Ovh\StructType\TelephonySpareCreateRMAResponse|bool
     */
    public function telephonySpareCreateRMA(\Ovh\StructType\TelephonySpareCreateRMA $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareCreateRMA($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySmsplusServiceEdit
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySmsplusServiceEdit $parameters
     * @return \Ovh\StructType\TelephonySmsplusServiceEditResponse|bool
     */
    public function telephonySmsplusServiceEdit(\Ovh\StructType\TelephonySmsplusServiceEdit $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySmsplusServiceEdit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyHuntingGenericScreenOptionsModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify $parameters
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModifyResponse|bool
     */
    public function telephonyHuntingGenericScreenOptionsModify(\Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenOptionsModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyPlugAndPhoneInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyPlugAndPhoneInfo $parameters
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoResponse|bool
     */
    public function telephonyPlugAndPhoneInfo(\Ovh\StructType\TelephonyPlugAndPhoneInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyPlugAndPhoneInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyFaxCampaignDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyFaxCampaignDelete $parameters
     * @return \Ovh\StructType\TelephonyFaxCampaignDeleteResponse|bool
     */
    public function telephonyFaxCampaignDelete(\Ovh\StructType\TelephonyFaxCampaignDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyFaxCampaignDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyReversmentsRefundFromBillingAccount
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyReversmentsRefundFromBillingAccount $parameters
     * @return \Ovh\StructType\TelephonyReversmentsRefundFromBillingAccountResponse|bool
     */
    public function telephonyReversmentsRefundFromBillingAccount(\Ovh\StructType\TelephonyReversmentsRefundFromBillingAccount $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyReversmentsRefundFromBillingAccount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyVoicemailMessageDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyVoicemailMessageDelete $parameters
     * @return \Ovh\StructType\TelephonyVoicemailMessageDeleteResponse|bool
     */
    public function telephonyVoicemailMessageDelete(\Ovh\StructType\TelephonyVoicemailMessageDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyVoicemailMessageDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyLineOptionsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyLineOptionsList $parameters
     * @return \Ovh\StructType\TelephonyLineOptionsListResponse|bool
     */
    public function telephonyLineOptionsList(\Ovh\StructType\TelephonyLineOptionsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyLineOptionsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonySpareServiceInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonySpareServiceInfo $parameters
     * @return \Ovh\StructType\TelephonySpareServiceInfoResponse|bool
     */
    public function telephonySpareServiceInfo(\Ovh\StructType\TelephonySpareServiceInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonySpareServiceInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named telephonyAbbreviatedNumberModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberModify $parameters
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberModifyResponse|bool
     */
    public function telephonyAbbreviatedNumberModify(\Ovh\StructType\TelephonyAbbreviatedNumberModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * telephonyOfferSimultaneousLinesModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TelephonyOfferSimultaneousLinesModify $parameters
     * @return \Ovh\StructType\TelephonyOfferSimultaneousLinesModifyResponse|bool
     */
    public function telephonyOfferSimultaneousLinesModify(\Ovh\StructType\TelephonyOfferSimultaneousLinesModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->telephonyOfferSimultaneousLinesModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\ArrayType\TelephonyGetClosureEventsAsArrayResponse|\Ovh\StructType\TelephonyAbbreviatedNumberAddResponse|\Ovh\StructType\TelephonyAbbreviatedNumberDelResponse|\Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedResponse|\Ovh\StructType\TelephonyAbbreviatedNumberListResponse|\Ovh\StructType\TelephonyAbbreviatedNumberModifyResponse|\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAddResponse|\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupDelResponse|\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupListResponse|\Ovh\StructType\TelephonyAbbreviatedNumberOnGroupModifyResponse|\Ovh\StructType\TelephonyAliasToSipOfferResponse|\Ovh\StructType\TelephonyAliasToSipPossibilitiesResponse|\Ovh\StructType\TelephonyBillDetailsCSVResponse|\Ovh\StructType\TelephonyBillDetailsResponse|\Ovh\StructType\TelephonyBillingAccountAddResponse|\Ovh\StructType\TelephonyBillingAccountConsumptionCSVByMailResponse|\Ovh\StructType\TelephonyBillingAccountDelResponse|\Ovh\StructType\TelephonyBillingAccountDescriptionModifyResponse|\Ovh\StructType\TelephonyBillingAccountInfoResponse|\Ovh\StructType\TelephonyBillingAccountListResponse|\Ovh\StructType\TelephonyBillingAccountSetResponse|\Ovh\StructType\TelephonyBillingAccountSummaryResponse|\Ovh\StructType\TelephonyBillListResponse|\Ovh\StructType\TelephonyCallListResponse|\Ovh\StructType\TelephonyChangeNicModifyResponse|\Ovh\StructType\TelephonyClick2CallDoBySessionResponse|\Ovh\StructType\TelephonyClick2CallDoResponse|\Ovh\StructType\TelephonyClick2CallUserAddResponse|\Ovh\StructType\TelephonyClick2CallUserDelResponse|\Ovh\StructType\TelephonyClick2CallUserListResponse|\Ovh\StructType\TelephonyClick2CallUserPasswordResponse|\Ovh\StructType\TelephonyConferenceActionResponse|\Ovh\StructType\TelephonyConferenceGetInfosResponse|\Ovh\StructType\TelephonyConferenceGetParamsResponse|\Ovh\StructType\TelephonyConferenceSetAnnounceFileResponse|\Ovh\StructType\TelephonyConferenceSetParamsResponse|\Ovh\StructType\TelephonyDdiInfoResponse|\Ovh\StructType\TelephonyDdiModifyResponse|\Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsResponse|\Ovh\StructType\TelephonyDelClosureEventsResponse|\Ovh\StructType\TelephonyDeleteLineResponse|\Ovh\StructType\TelephonyDepositMovementModifyResponse|\Ovh\StructType\TelephonyDirectoryInfoGetSameSiretResponse|\Ovh\StructType\TelephonyDirectoryInfoGetSiretResponse|\Ovh\StructType\TelephonyDirectoryInfoResponse|\Ovh\StructType\TelephonyDirectoryListWayTypeResponse|\Ovh\StructType\TelephonyDirectoryModifyAddressResponse|\Ovh\StructType\TelephonyDirectoryModifyPublicationResponse|\Ovh\StructType\TelephonyDirectoryPJCodeResponse|\Ovh\StructType\TelephonyFaxCallListResponse|\Ovh\StructType\TelephonyFaxCampaignCreationResponse|\Ovh\StructType\TelephonyFaxCampaignDeleteResponse|\Ovh\StructType\TelephonyFaxCampaignDetailsResponse|\Ovh\StructType\TelephonyFaxCampaignListResponse|\Ovh\StructType\TelephonyFaxCampaignStartStopResponse|\Ovh\StructType\TelephonyFaxHistoryResponse|\Ovh\StructType\TelephonyFaxModifyPasswordResponse|\Ovh\StructType\TelephonyFaxOptionsListResponse|\Ovh\StructType\TelephonyFaxOptionsModifyResponse|\Ovh\StructType\TelephonyFaxSendResponse|\Ovh\StructType\TelephonyFMHuntingModificationAnonymousCallRejectionResponse|\Ovh\StructType\TelephonyFMHuntingModificationMembersResponse|\Ovh\StructType\TelephonyFMHuntingModificationModeResponse|\Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCallsResponse|\Ovh\StructType\TelephonyFMHuntingModificationVoicemailResponse|\Ovh\StructType\TelephonyFreefaxToVoicefaxCheckListResponse|\Ovh\StructType\TelephonyFreefaxToVoicefaxResponse|\Ovh\StructType\TelephonyFunctionKeyAddResponse|\Ovh\StructType\TelephonyFunctionKeyDelResponse|\Ovh\StructType\TelephonyFunctionKeyListResponse|\Ovh\StructType\TelephonyFunctionKeyModifyResponse|\Ovh\StructType\TelephonyGetCitiesFromZipResponse|\Ovh\StructType\TelephonyGetClosureEventsAsICSResponse|\Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsResponse|\Ovh\StructType\TelephonyGetTimeZoneNumberResponse|\Ovh\StructType\TelephonyHuntingGenericScreenListResponse|\Ovh\StructType\TelephonyHuntingGenericScreenOptionsModifyResponse|\Ovh\StructType\TelephonyHuntingGenericScreenOptionsResponse|\Ovh\StructType\TelephonyHuntingGenericScreenSetResponse|\Ovh\StructType\TelephonyHuntingGenericScreenStatusModifyResponse|\Ovh\StructType\TelephonyHuntingGenericScreenStatusResponse|\Ovh\StructType\TelephonyHuntingGroupListResponse|\Ovh\StructType\TelephonyHuntingInfoResponse|\Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejectionResponse|\Ovh\StructType\TelephonyHuntingModificationMembersResponse|\Ovh\StructType\TelephonyHuntingModificationModeResponse|\Ovh\StructType\TelephonyHuntingModificationQueueResponse|\Ovh\StructType\TelephonyHuntingModificationSimultaneousCallsResponse|\Ovh\StructType\TelephonyLineConsumptionCSVByMailResponse|\Ovh\StructType\TelephonyLineDetailsResponse|\Ovh\StructType\TelephonyLineGetCodecsResponse|\Ovh\StructType\TelephonyLineGetIpRestrictionResponse|\Ovh\StructType\TelephonyLineGetMgcpIpRestrictionResponse|\Ovh\StructType\TelephonyLineGetOfferPricesResponse|\Ovh\StructType\TelephonyLineGetSipDomainResponse|\Ovh\StructType\TelephonyLineListResponse|\Ovh\StructType\TelephonyLineLogsNotificationOptionsModifyResponse|\Ovh\StructType\TelephonyLineLogsNotificationOptionsResponse|\Ovh\StructType\TelephonyLineLogsOnGroupResponse|\Ovh\StructType\TelephonyLineLogsResponse|\Ovh\StructType\TelephonyLineOptionsListResponse|\Ovh\StructType\TelephonyLineOptionsModifyResponse|\Ovh\StructType\TelephonyLineOrderResponse|\Ovh\StructType\TelephonyLineSetCodecsResponse|\Ovh\StructType\TelephonyLineSetIpRestrictionResponse|\Ovh\StructType\TelephonyLineSetMgcpIpRestrictionResponse|\Ovh\StructType\TelephonyLineSetSipDomainResponse|\Ovh\StructType\TelephonyLineSwitchOfferPossibilityResponse|\Ovh\StructType\TelephonyLineSwitchOfferResponse|\Ovh\StructType\TelephonyLineSwitchOldOfferPossibilityResponse|\Ovh\StructType\TelephonyLineSwitchOldOfferResponse|\Ovh\StructType\TelephonyListReversableCallsFromNumberResponse|\Ovh\StructType\TelephonyListSummationCallsFromBillingAccountResponse|\Ovh\StructType\TelephonyListSummationCallsFromNumberResponse|\Ovh\StructType\TelephonyNicGetIpRestrictionResponse|\Ovh\StructType\TelephonyNicGetMgcpIpRestrictionResponse|\Ovh\StructType\TelephonyNicGetSipDomainResponse|\Ovh\StructType\TelephonyNicSetIpRestrictionResponse|\Ovh\StructType\TelephonyNicSetMgcpIpRestrictionResponse|\Ovh\StructType\TelephonyNicSetSipDomainResponse|\Ovh\StructType\TelephonyNumberCityForZoneListResponse|\Ovh\StructType\TelephonyNumberCleanResponse|\Ovh\StructType\TelephonyNumberCustomListResponse|\Ovh\StructType\TelephonyNumberGetBillingAccountResponse|\Ovh\StructType\TelephonyNumberGetFrWayNamesFromInseeResponse|\Ovh\StructType\TelephonyNumberInfoResponse|\Ovh\StructType\TelephonyNumberModifyResponse|\Ovh\StructType\TelephonyNumberOrderResponse|\Ovh\StructType\TelephonyNumberZoneAndPrefixListResponse|\Ovh\StructType\TelephonyOfferInfoResponse|\Ovh\StructType\TelephonyOfferModifyNameResponse|\Ovh\StructType\TelephonyOfferModifyPasswordResponse|\Ovh\StructType\TelephonyOfferSimultaneousLinesModifyResponse|\Ovh\StructType\TelephonyOrdersFollowingUpResponse|\Ovh\StructType\TelephonyPhonebookAddResponse|\Ovh\StructType\TelephonyPhonebookContactAddResponse|\Ovh\StructType\TelephonyPhonebookContactDelResponse|\Ovh\StructType\TelephonyPhonebookContactListResponse|\Ovh\StructType\TelephonyPhonebookContactModifyResponse|\Ovh\StructType\TelephonyPhonebookDelResponse|\Ovh\StructType\TelephonyPhonebookGroupListResponse|\Ovh\StructType\TelephonyPhonebookListResponse|\Ovh\StructType\TelephonyPhonebookModifyResponse|\Ovh\StructType\TelephonyPhonebookOnGroupAddResponse|\Ovh\StructType\TelephonyPhonebookOnGroupContactAddResponse|\Ovh\StructType\TelephonyPhonebookOnGroupContactDelResponse|\Ovh\StructType\TelephonyPhonebookOnGroupContactListResponse|\Ovh\StructType\TelephonyPhonebookOnGroupContactModifyResponse|\Ovh\StructType\TelephonyPhonebookOnGroupDelResponse|\Ovh\StructType\TelephonyPhonebookOnGroupGroupListResponse|\Ovh\StructType\TelephonyPhonebookOnGroupListResponse|\Ovh\StructType\TelephonyPhonebookOnGroupModifyResponse|\Ovh\StructType\TelephonyPhonebookOnSmsAddResponse|\Ovh\StructType\TelephonyPhonebookOnSmsContactAddResponse|\Ovh\StructType\TelephonyPhonebookOnSmsContactDelResponse|\Ovh\StructType\TelephonyPhonebookOnSmsContactListResponse|\Ovh\StructType\TelephonyPhonebookOnSmsContactModifyResponse|\Ovh\StructType\TelephonyPhonebookOnSmsDelResponse|\Ovh\StructType\TelephonyPhonebookOnSmsListResponse|\Ovh\StructType\TelephonyPhonebookOnSmsModifyResponse|\Ovh\StructType\TelephonyPhonebookSharePeerListResponse|\Ovh\StructType\TelephonyPhonebookShareResponse|\Ovh\StructType\TelephonyPlugAndPhoneInfoResponse|\Ovh\StructType\TelephonyPlugAndPhoneOperationResponse|\Ovh\StructType\TelephonyPlugAndPhoneResetResponse|\Ovh\StructType\TelephonyPlugAndPhoneSkinModifyResponse|\Ovh\StructType\TelephonyPortabilityOrderResponse|\Ovh\StructType\TelephonyPortabilityOrderSpecialNumberResponse|\Ovh\StructType\TelephonyPortabilityStatusResponse|\Ovh\StructType\TelephonyRatesListCsvResponse|\Ovh\StructType\TelephonyRatesListResponse|\Ovh\StructType\TelephonyRedirectInfoResponse|\Ovh\StructType\TelephonyRedirectModifyResponse|\Ovh\StructType\TelephonyRestrictionListResponse|\Ovh\StructType\TelephonyRestrictionModifyResponse|\Ovh\StructType\TelephonyReversmentsRefundFromBillingAccountResponse|\Ovh\StructType\TelephonyReversmentsRefundIsPendingResponse|\Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModifyResponse|\Ovh\StructType\TelephonyScreenListBlackWhiteChoiceResponse|\Ovh\StructType\TelephonyScreenListInfoModifyResponse|\Ovh\StructType\TelephonyScreenListInfoResponse|\Ovh\StructType\TelephonySecurityDepositCreditResponse|\Ovh\StructType\TelephonySecurityDepositInfoResponse|\Ovh\StructType\TelephonySetClosureEventsResponse|\Ovh\StructType\TelephonySetDefaultPrivateHolidaysEventsResponse|\Ovh\StructType\TelephonySetTimeZoneNumberResponse|\Ovh\StructType\TelephonySipToAliasOfferResponse|\Ovh\StructType\TelephonySmsAccountListResponse|\Ovh\StructType\TelephonySmsAddCsvAttachmentResponse|\Ovh\StructType\TelephonySmsBlacklistedSendersDeleteResponse|\Ovh\StructType\TelephonySmsBlacklistedSendersListResponse|\Ovh\StructType\TelephonySmsCancelSendingResponse|\Ovh\StructType\TelephonySmsCreditLeftResponse|\Ovh\StructType\TelephonySmsDeleteCsvAttachmentResponse|\Ovh\StructType\TelephonySmsDeleteResponse|\Ovh\StructType\TelephonySmsGetCallBackResponse|\Ovh\StructType\TelephonySmsGetCsvAttachmentResponse|\Ovh\StructType\TelephonySmsGetQuotaNotificationForUserResponse|\Ovh\StructType\TelephonySmsGetQuotaNotificationResponse|\Ovh\StructType\TelephonySmsGetUserQuotaForUserResponse|\Ovh\StructType\TelephonySmsGetUserQuotaResponse|\Ovh\StructType\TelephonySmsHistoryCsvResponse|\Ovh\StructType\TelephonySmsHistoryResponse|\Ovh\StructType\TelephonySmsListCsvAttachmentResponse|\Ovh\StructType\TelephonySmsMultiSendResponse|\Ovh\StructType\TelephonySmsplusIsFreeKeywordResponse|\Ovh\StructType\TelephonySmsplusSendSmsMtResponse|\Ovh\StructType\TelephonySmsplusServiceAddResponse|\Ovh\StructType\TelephonySmsplusServiceDeleteResponse|\Ovh\StructType\TelephonySmsplusServiceDetailsResponse|\Ovh\StructType\TelephonySmsplusServiceEditResponse|\Ovh\StructType\TelephonySmsplusServiceListResponse|\Ovh\StructType\TelephonySmsplusServiceReversableTicketsListResponse|\Ovh\StructType\TelephonySmsplusServiceReversableTicketsSummaryResponse|\Ovh\StructType\TelephonySmsplusShortCodesListResponse|\Ovh\StructType\TelephonySmsSenderAddResponse|\Ovh\StructType\TelephonySmsSenderDeleteResponse|\Ovh\StructType\TelephonySmsSenderDescriptionResponse|\Ovh\StructType\TelephonySmsSenderListResponse|\Ovh\StructType\TelephonySmsSenderValidateResponse|\Ovh\StructType\TelephonySmsSendResponse|\Ovh\StructType\TelephonySmsSetCallBackResponse|\Ovh\StructType\TelephonySmsSetQuotaNotificationResponse|\Ovh\StructType\TelephonySmsSetUserQuotaResponse|\Ovh\StructType\TelephonySmsUserAddCsvAttachmentResponse|\Ovh\StructType\TelephonySmsUserAddResponse|\Ovh\StructType\TelephonySmsUserCreditLeftResponse|\Ovh\StructType\TelephonySmsUserDeleteCsvAttachmentResponse|\Ovh\StructType\TelephonySmsUserDelResponse|\Ovh\StructType\TelephonySmsUserGetCallBackResponse|\Ovh\StructType\TelephonySmsUserGetCsvAttachmentResponse|\Ovh\StructType\TelephonySmsUserHistoryCsvResponse|\Ovh\StructType\TelephonySmsUserHistoryResponse|\Ovh\StructType\TelephonySmsUserListCsvAttachmentResponse|\Ovh\StructType\TelephonySmsUserListResponse|\Ovh\StructType\TelephonySmsUserMultiSendResponse|\Ovh\StructType\TelephonySmsUserPasswordResponse|\Ovh\StructType\TelephonySmsUserSendResponse|\Ovh\StructType\TelephonySmsUserSetCallBackResponse|\Ovh\StructType\TelephonySpareAddResponse|\Ovh\StructType\TelephonySpareCapabilitiesResponse|\Ovh\StructType\TelephonySpareCreateRMAResponse|\Ovh\StructType\TelephonySpareDelResponse|\Ovh\StructType\TelephonySpareInfoResponse|\Ovh\StructType\TelephonySpareListResponse|\Ovh\StructType\TelephonySparePurchaseResponse|\Ovh\StructType\TelephonySpareReplaceResponse|\Ovh\StructType\TelephonySpareServiceInfoResponse|\Ovh\StructType\TelephonySpareServiceListResponse|\Ovh\StructType\TelephonySpecialNumberCustomListResponse|\Ovh\StructType\TelephonySpecialNumberOrderResponse|\Ovh\StructType\TelephonySviInfoResponse|\Ovh\StructType\TelephonySviModifyResponse|\Ovh\StructType\TelephonyToneDeleteResponse|\Ovh\StructType\TelephonyToneRemoteUploadResponse|\Ovh\StructType\TelephonyTonesOptionsListResponse|\Ovh\StructType\TelephonyTonesOptionsModifyResponse|\Ovh\StructType\TelephonyToneStatusResponse|\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberAddResponse|\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberCheckResponse|\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberDelResponse|\Ovh\StructType\TelephonyTrunkExternalDisplayedNumberListResponse|\Ovh\StructType\TelephonyVoicemailMailboxDeleteResponse|\Ovh\StructType\TelephonyVoicemailMailboxDownloadResponse|\Ovh\StructType\TelephonyVoicemailMailboxListResponse|\Ovh\StructType\TelephonyVoicemailMessageDeleteResponse|\Ovh\StructType\TelephonyVoicemailMessagesDownloadResponse|\Ovh\StructType\TelephonyVoicemailMessagesRemoteUploadResponse|\Ovh\StructType\TelephonyVoicemailMessagesStatusResponse|\Ovh\StructType\TelephonyVoicemailModifyPasswordResponse|\Ovh\StructType\TelephonyVoicemailOptionsListResponse|\Ovh\StructType\TelephonyVoicemailOptionsModifyResponse
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
