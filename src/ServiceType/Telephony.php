<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\TelephonyNumberInfo $parameters
     * @return \PayPal\StructType\TelephonyNumberInfoResponse|bool
     */
    public function telephonyNumberInfo(\PayPal\StructType\TelephonyNumberInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailOptionsList $parameters
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListResponse|bool
     */
    public function telephonyVoicemailOptionsList(\PayPal\StructType\TelephonyVoicemailOptionsList $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookSharePeerList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookSharePeerListResponse|bool
     */
    public function telephonyPhonebookSharePeerList(\PayPal\StructType\TelephonyPhonebookSharePeerList $parameters)
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
     * @param \PayPal\StructType\TelephonyRedirectModify $parameters
     * @return \PayPal\StructType\TelephonyRedirectModifyResponse|bool
     */
    public function telephonyRedirectModify(\PayPal\StructType\TelephonyRedirectModify $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberModify $parameters
     * @return \PayPal\StructType\TelephonyNumberModifyResponse|bool
     */
    public function telephonyNumberModify(\PayPal\StructType\TelephonyNumberModify $parameters)
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
     * @param \PayPal\StructType\TelephonyGetCitiesFromZip $parameters
     * @return \PayPal\StructType\TelephonyGetCitiesFromZipResponse|bool
     */
    public function telephonyGetCitiesFromZip(\PayPal\StructType\TelephonyGetCitiesFromZip $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusSendSmsMt $parameters
     * @return \PayPal\StructType\TelephonySmsplusSendSmsMtResponse|bool
     */
    public function telephonySmsplusSendSmsMt(\PayPal\StructType\TelephonySmsplusSendSmsMt $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserGetCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsUserGetCsvAttachmentResponse|bool
     */
    public function telephonySmsUserGetCsvAttachment(\PayPal\StructType\TelephonySmsUserGetCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsListResponse|bool
     */
    public function telephonyPhonebookOnSmsList(\PayPal\StructType\TelephonyPhonebookOnSmsList $parameters)
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
     * @param \PayPal\StructType\TelephonySetClosureEvents $parameters
     * @return \PayPal\StructType\TelephonySetClosureEventsResponse|bool
     */
    public function telephonySetClosureEvents(\PayPal\StructType\TelephonySetClosureEvents $parameters)
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
     * @param \PayPal\StructType\TelephonyNicSetSipDomain $parameters
     * @return \PayPal\StructType\TelephonyNicSetSipDomainResponse|bool
     */
    public function telephonyNicSetSipDomain(\PayPal\StructType\TelephonyNicSetSipDomain $parameters)
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
     * @param \PayPal\StructType\TelephonySmsMultiSend $parameters
     * @return \PayPal\StructType\TelephonySmsMultiSendResponse|bool
     */
    public function telephonySmsMultiSend(\PayPal\StructType\TelephonySmsMultiSend $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserAddCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsUserAddCsvAttachmentResponse|bool
     */
    public function telephonySmsUserAddCsvAttachment(\PayPal\StructType\TelephonySmsUserAddCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonySpareDel $parameters
     * @return \PayPal\StructType\TelephonySpareDelResponse|bool
     */
    public function telephonySpareDel(\PayPal\StructType\TelephonySpareDel $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxHistory $parameters
     * @return \PayPal\StructType\TelephonyFaxHistoryResponse|bool
     */
    public function telephonyFaxHistory(\PayPal\StructType\TelephonyFaxHistory $parameters)
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
     * @param \PayPal\StructType\TelephonyFreefaxToVoicefax $parameters
     * @return \PayPal\StructType\TelephonyFreefaxToVoicefaxResponse|bool
     */
    public function telephonyFreefaxToVoicefax(\PayPal\StructType\TelephonyFreefaxToVoicefax $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxSend $parameters
     * @return \PayPal\StructType\TelephonyFaxSendResponse|bool
     */
    public function telephonyFaxSend(\PayPal\StructType\TelephonyFaxSend $parameters)
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
     * @param \PayPal\StructType\TelephonyRestrictionList $parameters
     * @return \PayPal\StructType\TelephonyRestrictionListResponse|bool
     */
    public function telephonyRestrictionList(\PayPal\StructType\TelephonyRestrictionList $parameters)
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
     * @param \PayPal\StructType\TelephonyBillList $parameters
     * @return \PayPal\StructType\TelephonyBillListResponse|bool
     */
    public function telephonyBillList(\PayPal\StructType\TelephonyBillList $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberCustomList $parameters
     * @return \PayPal\StructType\TelephonyNumberCustomListResponse|bool
     */
    public function telephonyNumberCustomList(\PayPal\StructType\TelephonyNumberCustomList $parameters)
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
     * @param \PayPal\StructType\TelephonyPlugAndPhoneSkinModify $parameters
     * @return \PayPal\StructType\TelephonyPlugAndPhoneSkinModifyResponse|bool
     */
    public function telephonyPlugAndPhoneSkinModify(\PayPal\StructType\TelephonyPlugAndPhoneSkinModify $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxOptionsModify $parameters
     * @return \PayPal\StructType\TelephonyFaxOptionsModifyResponse|bool
     */
    public function telephonyFaxOptionsModify(\PayPal\StructType\TelephonyFaxOptionsModify $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountSummary $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryResponse|bool
     */
    public function telephonyBillingAccountSummary(\PayPal\StructType\TelephonyBillingAccountSummary $parameters)
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
     * @param \PayPal\StructType\TelephonyConferenceSetAnnounceFile $parameters
     * @return \PayPal\StructType\TelephonyConferenceSetAnnounceFileResponse|bool
     */
    public function telephonyConferenceSetAnnounceFile(\PayPal\StructType\TelephonyConferenceSetAnnounceFile $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsAdd $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsAddResponse|bool
     */
    public function telephonyPhonebookOnSmsAdd(\PayPal\StructType\TelephonyPhonebookOnSmsAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyClick2CallUserDel $parameters
     * @return \PayPal\StructType\TelephonyClick2CallUserDelResponse|bool
     */
    public function telephonyClick2CallUserDel(\PayPal\StructType\TelephonyClick2CallUserDel $parameters)
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
     * @param \PayPal\StructType\TelephonySmsAccountList $parameters
     * @return \PayPal\StructType\TelephonySmsAccountListResponse|bool
     */
    public function telephonySmsAccountList(\PayPal\StructType\TelephonySmsAccountList $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountConsumptionCSVByMail $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountConsumptionCSVByMailResponse|bool
     */
    public function telephonyBillingAccountConsumptionCSVByMail(\PayPal\StructType\TelephonyBillingAccountConsumptionCSVByMail $parameters)
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
     * @param \PayPal\StructType\TelephonyFMHuntingModificationVoicemail $parameters
     * @return \PayPal\StructType\TelephonyFMHuntingModificationVoicemailResponse|bool
     */
    public function telephonyFMHuntingModificationVoicemail(\PayPal\StructType\TelephonyFMHuntingModificationVoicemail $parameters)
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
     * @param \PayPal\StructType\TelephonyOrdersFollowingUp $parameters
     * @return \PayPal\StructType\TelephonyOrdersFollowingUpResponse|bool
     */
    public function telephonyOrdersFollowingUp(\PayPal\StructType\TelephonyOrdersFollowingUp $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupContactAdd $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupContactAddResponse|bool
     */
    public function telephonyPhonebookOnGroupContactAdd(\PayPal\StructType\TelephonyPhonebookOnGroupContactAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyBillDetailsCSV $parameters
     * @return \PayPal\StructType\TelephonyBillDetailsCSVResponse|bool
     */
    public function telephonyBillDetailsCSV(\PayPal\StructType\TelephonyBillDetailsCSV $parameters)
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
     * @param \PayPal\StructType\TelephonySmsCreditLeft $parameters
     * @return \PayPal\StructType\TelephonySmsCreditLeftResponse|bool
     */
    public function telephonySmsCreditLeft(\PayPal\StructType\TelephonySmsCreditLeft $parameters)
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
     * @param \PayPal\StructType\TelephonyDirectoryPJCode $parameters
     * @return \PayPal\StructType\TelephonyDirectoryPJCodeResponse|bool
     */
    public function telephonyDirectoryPJCode(\PayPal\StructType\TelephonyDirectoryPJCode $parameters)
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
     * @param \PayPal\StructType\TelephonyListSummationCallsFromBillingAccount $parameters
     * @return \PayPal\StructType\TelephonyListSummationCallsFromBillingAccountResponse|bool
     */
    public function telephonyListSummationCallsFromBillingAccount(\PayPal\StructType\TelephonyListSummationCallsFromBillingAccount $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountDescriptionModify $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountDescriptionModifyResponse|bool
     */
    public function telephonyBillingAccountDescriptionModify(\PayPal\StructType\TelephonyBillingAccountDescriptionModify $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberDel $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberDelResponse|bool
     */
    public function telephonyAbbreviatedNumberDel(\PayPal\StructType\TelephonyAbbreviatedNumberDel $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxOptionsList $parameters
     * @return \PayPal\StructType\TelephonyFaxOptionsListResponse|bool
     */
    public function telephonyFaxOptionsList(\PayPal\StructType\TelephonyFaxOptionsList $parameters)
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
     * @param \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd $parameters
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAddResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberAdd(\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountSet $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountSetResponse|bool
     */
    public function telephonyBillingAccountSet(\PayPal\StructType\TelephonyBillingAccountSet $parameters)
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
     * @param \PayPal\StructType\TelephonyDepositMovementModify $parameters
     * @return \PayPal\StructType\TelephonyDepositMovementModifyResponse|bool
     */
    public function telephonyDepositMovementModify(\PayPal\StructType\TelephonyDepositMovementModify $parameters)
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
     * @param \PayPal\StructType\TelephonyClick2CallDo $parameters
     * @return \PayPal\StructType\TelephonyClick2CallDoResponse|bool
     */
    public function telephonyClick2CallDo(\PayPal\StructType\TelephonyClick2CallDo $parameters)
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
     * @param \PayPal\StructType\TelephonySpecialNumberOrder $parameters
     * @return \PayPal\StructType\TelephonySpecialNumberOrderResponse|bool
     */
    public function telephonySpecialNumberOrder(\PayPal\StructType\TelephonySpecialNumberOrder $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailOptionsModify $parameters
     * @return \PayPal\StructType\TelephonyVoicemailOptionsModifyResponse|bool
     */
    public function telephonyVoicemailOptionsModify(\PayPal\StructType\TelephonyVoicemailOptionsModify $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSwitchOldOffer $parameters
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferResponse|bool
     */
    public function telephonyLineSwitchOldOffer(\PayPal\StructType\TelephonyLineSwitchOldOffer $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupContactDel $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupContactDelResponse|bool
     */
    public function telephonyPhonebookOnGroupContactDel(\PayPal\StructType\TelephonyPhonebookOnGroupContactDel $parameters)
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
     * @param \PayPal\StructType\TelephonySpareAdd $parameters
     * @return \PayPal\StructType\TelephonySpareAddResponse|bool
     */
    public function telephonySpareAdd(\PayPal\StructType\TelephonySpareAdd $parameters)
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
     * @param \PayPal\StructType\TelephonySmsAddCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsAddCsvAttachmentResponse|bool
     */
    public function telephonySmsAddCsvAttachment(\PayPal\StructType\TelephonySmsAddCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEvents $parameters
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsResponse|bool
     */
    public function telephonyDefaultPrivateHolidaysEvents(\PayPal\StructType\TelephonyDefaultPrivateHolidaysEvents $parameters)
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
     * @param \PayPal\StructType\TelephonyToneRemoteUpload $parameters
     * @return \PayPal\StructType\TelephonyToneRemoteUploadResponse|bool
     */
    public function telephonyToneRemoteUpload(\PayPal\StructType\TelephonyToneRemoteUpload $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberGetFrWayNamesFromInsee $parameters
     * @return \PayPal\StructType\TelephonyNumberGetFrWayNamesFromInseeResponse|bool
     */
    public function telephonyNumberGetFrWayNamesFromInsee(\PayPal\StructType\TelephonyNumberGetFrWayNamesFromInsee $parameters)
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
     * @param \PayPal\StructType\TelephonyFMHuntingModificationMode $parameters
     * @return \PayPal\StructType\TelephonyFMHuntingModificationModeResponse|bool
     */
    public function telephonyFMHuntingModificationMode(\PayPal\StructType\TelephonyFMHuntingModificationMode $parameters)
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
     * @param \PayPal\StructType\TelephonyAliasToSipOffer $parameters
     * @return \PayPal\StructType\TelephonyAliasToSipOfferResponse|bool
     */
    public function telephonyAliasToSipOffer(\PayPal\StructType\TelephonyAliasToSipOffer $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserMultiSend $parameters
     * @return \PayPal\StructType\TelephonySmsUserMultiSendResponse|bool
     */
    public function telephonySmsUserMultiSend(\PayPal\StructType\TelephonySmsUserMultiSend $parameters)
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
     * @param \PayPal\StructType\TelephonySmsGetCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsGetCsvAttachmentResponse|bool
     */
    public function telephonySmsGetCsvAttachment(\PayPal\StructType\TelephonySmsGetCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonySmsHistory $parameters
     * @return \PayPal\StructType\TelephonySmsHistoryResponse|bool
     */
    public function telephonySmsHistory(\PayPal\StructType\TelephonySmsHistory $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupModify $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupModifyResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupModify(\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupModify $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingGenericScreenList $parameters
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenListResponse|bool
     */
    public function telephonyHuntingGenericScreenList(\PayPal\StructType\TelephonyHuntingGenericScreenList $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingGenericScreenStatus $parameters
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStatusResponse|bool
     */
    public function telephonyHuntingGenericScreenStatus(\PayPal\StructType\TelephonyHuntingGenericScreenStatus $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingModificationMembers $parameters
     * @return \PayPal\StructType\TelephonyHuntingModificationMembersResponse|bool
     */
    public function telephonyHuntingModificationMembers(\PayPal\StructType\TelephonyHuntingModificationMembers $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailMessagesDownload $parameters
     * @return \PayPal\StructType\TelephonyVoicemailMessagesDownloadResponse|bool
     */
    public function telephonyVoicemailMessagesDownload(\PayPal\StructType\TelephonyVoicemailMessagesDownload $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxCampaignCreation $parameters
     * @return \PayPal\StructType\TelephonyFaxCampaignCreationResponse|bool
     */
    public function telephonyFaxCampaignCreation(\PayPal\StructType\TelephonyFaxCampaignCreation $parameters)
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
     * @param \PayPal\StructType\TelephonyLineLogsNotificationOptions $parameters
     * @return \PayPal\StructType\TelephonyLineLogsNotificationOptionsResponse|bool
     */
    public function telephonyLineLogsNotificationOptions(\PayPal\StructType\TelephonyLineLogsNotificationOptions $parameters)
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
     * @param \PayPal\StructType\TelephonyLineGetIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyLineGetIpRestrictionResponse|bool
     */
    public function telephonyLineGetIpRestriction(\PayPal\StructType\TelephonyLineGetIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonyGetTimeZoneNumber $parameters
     * @return \PayPal\StructType\TelephonyGetTimeZoneNumberResponse|bool
     */
    public function telephonyGetTimeZoneNumber(\PayPal\StructType\TelephonyGetTimeZoneNumber $parameters)
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
     * @param \PayPal\StructType\TelephonyFMHuntingModificationMembers $parameters
     * @return \PayPal\StructType\TelephonyFMHuntingModificationMembersResponse|bool
     */
    public function telephonyFMHuntingModificationMembers(\PayPal\StructType\TelephonyFMHuntingModificationMembers $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookAdd $parameters
     * @return \PayPal\StructType\TelephonyPhonebookAddResponse|bool
     */
    public function telephonyPhonebookAdd(\PayPal\StructType\TelephonyPhonebookAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyRestrictionModify $parameters
     * @return \PayPal\StructType\TelephonyRestrictionModifyResponse|bool
     */
    public function telephonyRestrictionModify(\PayPal\StructType\TelephonyRestrictionModify $parameters)
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
     * @param \PayPal\StructType\TelephonyRatesList $parameters
     * @return \PayPal\StructType\TelephonyRatesListResponse|bool
     */
    public function telephonyRatesList(\PayPal\StructType\TelephonyRatesList $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingGenericScreenOptions $parameters
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenOptionsResponse|bool
     */
    public function telephonyHuntingGenericScreenOptions(\PayPal\StructType\TelephonyHuntingGenericScreenOptions $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountAdd $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountAddResponse|bool
     */
    public function telephonyBillingAccountAdd(\PayPal\StructType\TelephonyBillingAccountAdd $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusIsFreeKeyword $parameters
     * @return \PayPal\StructType\TelephonySmsplusIsFreeKeywordResponse|bool
     */
    public function telephonySmsplusIsFreeKeyword(\PayPal\StructType\TelephonySmsplusIsFreeKeyword $parameters)
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
     * @param \PayPal\StructType\TelephonyLineGetCodecs $parameters
     * @return \PayPal\StructType\TelephonyLineGetCodecsResponse|bool
     */
    public function telephonyLineGetCodecs(\PayPal\StructType\TelephonyLineGetCodecs $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSenderValidate $parameters
     * @return \PayPal\StructType\TelephonySmsSenderValidateResponse|bool
     */
    public function telephonySmsSenderValidate(\PayPal\StructType\TelephonySmsSenderValidate $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingModificationSimultaneousCalls $parameters
     * @return \PayPal\StructType\TelephonyHuntingModificationSimultaneousCallsResponse|bool
     */
    public function telephonyHuntingModificationSimultaneousCalls(\PayPal\StructType\TelephonyHuntingModificationSimultaneousCalls $parameters)
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
     * @param \PayPal\StructType\TelephonyDirectoryInfoGetSameSiret $parameters
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSameSiretResponse|bool
     */
    public function telephonyDirectoryInfoGetSameSiret(\PayPal\StructType\TelephonyDirectoryInfoGetSameSiret $parameters)
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
     * @param \PayPal\StructType\TelephonyConferenceSetParams $parameters
     * @return \PayPal\StructType\TelephonyConferenceSetParamsResponse|bool
     */
    public function telephonyConferenceSetParams(\PayPal\StructType\TelephonyConferenceSetParams $parameters)
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
     * @param \PayPal\StructType\TelephonySparePurchase $parameters
     * @return \PayPal\StructType\TelephonySparePurchaseResponse|bool
     */
    public function telephonySparePurchase(\PayPal\StructType\TelephonySparePurchase $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxCampaignList $parameters
     * @return \PayPal\StructType\TelephonyFaxCampaignListResponse|bool
     */
    public function telephonyFaxCampaignList(\PayPal\StructType\TelephonyFaxCampaignList $parameters)
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
     * @param \PayPal\StructType\TelephonyNicGetMgcpIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyNicGetMgcpIpRestrictionResponse|bool
     */
    public function telephonyNicGetMgcpIpRestriction(\PayPal\StructType\TelephonyNicGetMgcpIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonySmsGetUserQuotaForUser $parameters
     * @return \PayPal\StructType\TelephonySmsGetUserQuotaForUserResponse|bool
     */
    public function telephonySmsGetUserQuotaForUser(\PayPal\StructType\TelephonySmsGetUserQuotaForUser $parameters)
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
     * @param \PayPal\StructType\TelephonyDirectoryInfoGetSiret $parameters
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretResponse|bool
     */
    public function telephonyDirectoryInfoGetSiret(\PayPal\StructType\TelephonyDirectoryInfoGetSiret $parameters)
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
     * @param \PayPal\StructType\TelephonyFunctionKeyModify $parameters
     * @return \PayPal\StructType\TelephonyFunctionKeyModifyResponse|bool
     */
    public function telephonyFunctionKeyModify(\PayPal\StructType\TelephonyFunctionKeyModify $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberList $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberListResponse|bool
     */
    public function telephonyAbbreviatedNumberList(\PayPal\StructType\TelephonyAbbreviatedNumberList $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxModifyPassword $parameters
     * @return \PayPal\StructType\TelephonyFaxModifyPasswordResponse|bool
     */
    public function telephonyFaxModifyPassword(\PayPal\StructType\TelephonyFaxModifyPassword $parameters)
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
     * @param \PayPal\StructType\TelephonySmsDelete $parameters
     * @return \PayPal\StructType\TelephonySmsDeleteResponse|bool
     */
    public function telephonySmsDelete(\PayPal\StructType\TelephonySmsDelete $parameters)
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
     * @param \PayPal\StructType\TelephonyDirectoryModifyPublication $parameters
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublicationResponse|bool
     */
    public function telephonyDirectoryModifyPublication(\PayPal\StructType\TelephonyDirectoryModifyPublication $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupAdd $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupAddResponse|bool
     */
    public function telephonyPhonebookOnGroupAdd(\PayPal\StructType\TelephonyPhonebookOnGroupAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSwitchOfferPossibility $parameters
     * @return \PayPal\StructType\TelephonyLineSwitchOfferPossibilityResponse|bool
     */
    public function telephonyLineSwitchOfferPossibility(\PayPal\StructType\TelephonyLineSwitchOfferPossibility $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSenderList $parameters
     * @return \PayPal\StructType\TelephonySmsSenderListResponse|bool
     */
    public function telephonySmsSenderList(\PayPal\StructType\TelephonySmsSenderList $parameters)
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
     * @param \PayPal\StructType\TelephonySipToAliasOffer $parameters
     * @return \PayPal\StructType\TelephonySipToAliasOfferResponse|bool
     */
    public function telephonySipToAliasOffer(\PayPal\StructType\TelephonySipToAliasOffer $parameters)
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
     * @param \PayPal\StructType\TelephonyFunctionKeyList $parameters
     * @return \PayPal\StructType\TelephonyFunctionKeyListResponse|bool
     */
    public function telephonyFunctionKeyList(\PayPal\StructType\TelephonyFunctionKeyList $parameters)
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
     * @param \PayPal\StructType\TelephonySmsGetCallBack $parameters
     * @return \PayPal\StructType\TelephonySmsGetCallBackResponse|bool
     */
    public function telephonySmsGetCallBack(\PayPal\StructType\TelephonySmsGetCallBack $parameters)
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
     * @param \PayPal\StructType\TelephonySviModify $parameters
     * @return \PayPal\StructType\TelephonySviModifyResponse|bool
     */
    public function telephonySviModify(\PayPal\StructType\TelephonySviModify $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusServiceDelete $parameters
     * @return \PayPal\StructType\TelephonySmsplusServiceDeleteResponse|bool
     */
    public function telephonySmsplusServiceDelete(\PayPal\StructType\TelephonySmsplusServiceDelete $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSwitchOffer $parameters
     * @return \PayPal\StructType\TelephonyLineSwitchOfferResponse|bool
     */
    public function telephonyLineSwitchOffer(\PayPal\StructType\TelephonyLineSwitchOffer $parameters)
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
     * @param \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberCheck $parameters
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberCheckResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberCheck(\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberCheck $parameters)
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
     * @param \PayPal\StructType\TelephonyDelClosureEvents $parameters
     * @return \PayPal\StructType\TelephonyDelClosureEventsResponse|bool
     */
    public function telephonyDelClosureEvents(\PayPal\StructType\TelephonyDelClosureEvents $parameters)
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
     * @param \PayPal\StructType\TelephonyFreefaxToVoicefaxCheckList $parameters
     * @return \PayPal\StructType\TelephonyFreefaxToVoicefaxCheckListResponse|bool
     */
    public function telephonyFreefaxToVoicefaxCheckList(\PayPal\StructType\TelephonyFreefaxToVoicefaxCheckList $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailModifyPassword $parameters
     * @return \PayPal\StructType\TelephonyVoicemailModifyPasswordResponse|bool
     */
    public function telephonyVoicemailModifyPassword(\PayPal\StructType\TelephonyVoicemailModifyPassword $parameters)
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
     * @param \PayPal\StructType\TelephonySpareCapabilities $parameters
     * @return \PayPal\StructType\TelephonySpareCapabilitiesResponse|bool
     */
    public function telephonySpareCapabilities(\PayPal\StructType\TelephonySpareCapabilities $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsDel $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsDelResponse|bool
     */
    public function telephonyPhonebookOnSmsDel(\PayPal\StructType\TelephonyPhonebookOnSmsDel $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookShare $parameters
     * @return \PayPal\StructType\TelephonyPhonebookShareResponse|bool
     */
    public function telephonyPhonebookShare(\PayPal\StructType\TelephonyPhonebookShare $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSetUserQuota $parameters
     * @return \PayPal\StructType\TelephonySmsSetUserQuotaResponse|bool
     */
    public function telephonySmsSetUserQuota(\PayPal\StructType\TelephonySmsSetUserQuota $parameters)
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
     * @param \PayPal\StructType\TelephonySmsHistoryCsv $parameters
     * @return \PayPal\StructType\TelephonySmsHistoryCsvResponse|bool
     */
    public function telephonySmsHistoryCsv(\PayPal\StructType\TelephonySmsHistoryCsv $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupList $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupListResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupList(\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupList $parameters)
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
     * @param \PayPal\StructType\TelephonyLineLogs $parameters
     * @return \PayPal\StructType\TelephonyLineLogsResponse|bool
     */
    public function telephonyLineLogs(\PayPal\StructType\TelephonyLineLogs $parameters)
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
     * @param \PayPal\StructType\TelephonySpareReplace $parameters
     * @return \PayPal\StructType\TelephonySpareReplaceResponse|bool
     */
    public function telephonySpareReplace(\PayPal\StructType\TelephonySpareReplace $parameters)
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
     * @param \PayPal\StructType\TelephonyClick2CallUserList $parameters
     * @return \PayPal\StructType\TelephonyClick2CallUserListResponse|bool
     */
    public function telephonyClick2CallUserList(\PayPal\StructType\TelephonyClick2CallUserList $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailMailboxList $parameters
     * @return \PayPal\StructType\TelephonyVoicemailMailboxListResponse|bool
     */
    public function telephonyVoicemailMailboxList(\PayPal\StructType\TelephonyVoicemailMailboxList $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxCampaignDetails $parameters
     * @return \PayPal\StructType\TelephonyFaxCampaignDetailsResponse|bool
     */
    public function telephonyFaxCampaignDetails(\PayPal\StructType\TelephonyFaxCampaignDetails $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupDel $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupDelResponse|bool
     */
    public function telephonyPhonebookOnGroupDel(\PayPal\StructType\TelephonyPhonebookOnGroupDel $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupListResponse|bool
     */
    public function telephonyPhonebookOnGroupList(\PayPal\StructType\TelephonyPhonebookOnGroupList $parameters)
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
     * @param \PayPal\StructType\TelephonySpecialNumberCustomList $parameters
     * @return \PayPal\StructType\TelephonySpecialNumberCustomListResponse|bool
     */
    public function telephonySpecialNumberCustomList(\PayPal\StructType\TelephonySpecialNumberCustomList $parameters)
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
     * @param \PayPal\StructType\TelephonyFMHuntingModificationSimultaneousCalls $parameters
     * @return \PayPal\StructType\TelephonyFMHuntingModificationSimultaneousCallsResponse|bool
     */
    public function telephonyFMHuntingModificationSimultaneousCalls(\PayPal\StructType\TelephonyFMHuntingModificationSimultaneousCalls $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailMailboxDownload $parameters
     * @return \PayPal\StructType\TelephonyVoicemailMailboxDownloadResponse|bool
     */
    public function telephonyVoicemailMailboxDownload(\PayPal\StructType\TelephonyVoicemailMailboxDownload $parameters)
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
     * @param \PayPal\StructType\TelephonyNicGetIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyNicGetIpRestrictionResponse|bool
     */
    public function telephonyNicGetIpRestriction(\PayPal\StructType\TelephonyNicGetIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonyGetClosureEventsAsArray $parameters
     * @return \PayPal\ArrayType\TelephonyGetClosureEventsAsArrayResponse|bool
     */
    public function telephonyGetClosureEventsAsArray(\PayPal\StructType\TelephonyGetClosureEventsAsArray $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsContactDel $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactDelResponse|bool
     */
    public function telephonyPhonebookOnSmsContactDel(\PayPal\StructType\TelephonyPhonebookOnSmsContactDel $parameters)
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
     * @param \PayPal\StructType\TelephonyReversmentsRefundIsPending $parameters
     * @return \PayPal\StructType\TelephonyReversmentsRefundIsPendingResponse|bool
     */
    public function telephonyReversmentsRefundIsPending(\PayPal\StructType\TelephonyReversmentsRefundIsPending $parameters)
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
     * @param \PayPal\StructType\TelephonyScreenListInfoModify $parameters
     * @return \PayPal\StructType\TelephonyScreenListInfoModifyResponse|bool
     */
    public function telephonyScreenListInfoModify(\PayPal\StructType\TelephonyScreenListInfoModify $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusServiceReversableTicketsList $parameters
     * @return \PayPal\StructType\TelephonySmsplusServiceReversableTicketsListResponse|bool
     */
    public function telephonySmsplusServiceReversableTicketsList(\PayPal\StructType\TelephonySmsplusServiceReversableTicketsList $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingGenericScreenStatusModify $parameters
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStatusModifyResponse|bool
     */
    public function telephonyHuntingGenericScreenStatusModify(\PayPal\StructType\TelephonyHuntingGenericScreenStatusModify $parameters)
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
     * @param \PayPal\StructType\TelephonySmsBlacklistedSendersList $parameters
     * @return \PayPal\StructType\TelephonySmsBlacklistedSendersListResponse|bool
     */
    public function telephonySmsBlacklistedSendersList(\PayPal\StructType\TelephonySmsBlacklistedSendersList $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookContactAdd $parameters
     * @return \PayPal\StructType\TelephonyPhonebookContactAddResponse|bool
     */
    public function telephonyPhonebookContactAdd(\PayPal\StructType\TelephonyPhonebookContactAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyPortabilityOrderSpecialNumber $parameters
     * @return \PayPal\StructType\TelephonyPortabilityOrderSpecialNumberResponse|bool
     */
    public function telephonyPortabilityOrderSpecialNumber(\PayPal\StructType\TelephonyPortabilityOrderSpecialNumber $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserSetCallBack $parameters
     * @return \PayPal\StructType\TelephonySmsUserSetCallBackResponse|bool
     */
    public function telephonySmsUserSetCallBack(\PayPal\StructType\TelephonySmsUserSetCallBack $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupModify $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupModifyResponse|bool
     */
    public function telephonyPhonebookOnGroupModify(\PayPal\StructType\TelephonyPhonebookOnGroupModify $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSwitchOldOfferPossibility $parameters
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferPossibilityResponse|bool
     */
    public function telephonyLineSwitchOldOfferPossibility(\PayPal\StructType\TelephonyLineSwitchOldOfferPossibility $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusServiceList $parameters
     * @return \PayPal\StructType\TelephonySmsplusServiceListResponse|bool
     */
    public function telephonySmsplusServiceList(\PayPal\StructType\TelephonySmsplusServiceList $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingModificationAnonymousCallRejection $parameters
     * @return \PayPal\StructType\TelephonyHuntingModificationAnonymousCallRejectionResponse|bool
     */
    public function telephonyHuntingModificationAnonymousCallRejection(\PayPal\StructType\TelephonyHuntingModificationAnonymousCallRejection $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberGetBillingAccount $parameters
     * @return \PayPal\StructType\TelephonyNumberGetBillingAccountResponse|bool
     */
    public function telephonyNumberGetBillingAccount(\PayPal\StructType\TelephonyNumberGetBillingAccount $parameters)
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
     * @param \PayPal\StructType\TelephonyTonesOptionsList $parameters
     * @return \PayPal\StructType\TelephonyTonesOptionsListResponse|bool
     */
    public function telephonyTonesOptionsList(\PayPal\StructType\TelephonyTonesOptionsList $parameters)
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
     * @param \PayPal\StructType\TelephonySpareList $parameters
     * @return \PayPal\StructType\TelephonySpareListResponse|bool
     */
    public function telephonySpareList(\PayPal\StructType\TelephonySpareList $parameters)
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
     * @param \PayPal\StructType\TelephonyListSummationCallsFromNumber $parameters
     * @return \PayPal\StructType\TelephonyListSummationCallsFromNumberResponse|bool
     */
    public function telephonyListSummationCallsFromNumber(\PayPal\StructType\TelephonyListSummationCallsFromNumber $parameters)
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
     * @param \PayPal\StructType\TelephonyConferenceGetParams $parameters
     * @return \PayPal\StructType\TelephonyConferenceGetParamsResponse|bool
     */
    public function telephonyConferenceGetParams(\PayPal\StructType\TelephonyConferenceGetParams $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookContactModify $parameters
     * @return \PayPal\StructType\TelephonyPhonebookContactModifyResponse|bool
     */
    public function telephonyPhonebookContactModify(\PayPal\StructType\TelephonyPhonebookContactModify $parameters)
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
     * @param \PayPal\StructType\TelephonyLineList $parameters
     * @return \PayPal\StructType\TelephonyLineListResponse|bool
     */
    public function telephonyLineList(\PayPal\StructType\TelephonyLineList $parameters)
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
     * @param \PayPal\StructType\TelephonyLineOptionsModify $parameters
     * @return \PayPal\StructType\TelephonyLineOptionsModifyResponse|bool
     */
    public function telephonyLineOptionsModify(\PayPal\StructType\TelephonyLineOptionsModify $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingGenericScreenSet $parameters
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenSetResponse|bool
     */
    public function telephonyHuntingGenericScreenSet(\PayPal\StructType\TelephonyHuntingGenericScreenSet $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxCampaignStartStop $parameters
     * @return \PayPal\StructType\TelephonyFaxCampaignStartStopResponse|bool
     */
    public function telephonyFaxCampaignStartStop(\PayPal\StructType\TelephonyFaxCampaignStartStop $parameters)
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
     * @param \PayPal\StructType\TelephonyDirectoryModifyAddress $parameters
     * @return \PayPal\StructType\TelephonyDirectoryModifyAddressResponse|bool
     */
    public function telephonyDirectoryModifyAddress(\PayPal\StructType\TelephonyDirectoryModifyAddress $parameters)
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
     * @param \PayPal\StructType\TelephonyNicSetMgcpIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyNicSetMgcpIpRestrictionResponse|bool
     */
    public function telephonyNicSetMgcpIpRestriction(\PayPal\StructType\TelephonyNicSetMgcpIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonySecurityDepositCredit $parameters
     * @return \PayPal\StructType\TelephonySecurityDepositCreditResponse|bool
     */
    public function telephonySecurityDepositCredit(\PayPal\StructType\TelephonySecurityDepositCredit $parameters)
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
     * @param \PayPal\StructType\TelephonyLineOrder $parameters
     * @return \PayPal\StructType\TelephonyLineOrderResponse|bool
     */
    public function telephonyLineOrder(\PayPal\StructType\TelephonyLineOrder $parameters)
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
     * @param \PayPal\StructType\TelephonyConferenceAction $parameters
     * @return \PayPal\StructType\TelephonyConferenceActionResponse|bool
     */
    public function telephonyConferenceAction(\PayPal\StructType\TelephonyConferenceAction $parameters)
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
     * @param \PayPal\StructType\TelephonyFunctionKeyDel $parameters
     * @return \PayPal\StructType\TelephonyFunctionKeyDelResponse|bool
     */
    public function telephonyFunctionKeyDel(\PayPal\StructType\TelephonyFunctionKeyDel $parameters)
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
     * @param \PayPal\StructType\TelephonyNicGetSipDomain $parameters
     * @return \PayPal\StructType\TelephonyNicGetSipDomainResponse|bool
     */
    public function telephonyNicGetSipDomain(\PayPal\StructType\TelephonyNicGetSipDomain $parameters)
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
     * @param \PayPal\StructType\TelephonyGetClosureEventsAsICS $parameters
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsICSResponse|bool
     */
    public function telephonyGetClosureEventsAsICS(\PayPal\StructType\TelephonyGetClosureEventsAsICS $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserCreditLeft $parameters
     * @return \PayPal\StructType\TelephonySmsUserCreditLeftResponse|bool
     */
    public function telephonySmsUserCreditLeft(\PayPal\StructType\TelephonySmsUserCreditLeft $parameters)
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
     * @param \PayPal\StructType\TelephonyPortabilityOrder $parameters
     * @return \PayPal\StructType\TelephonyPortabilityOrderResponse|bool
     */
    public function telephonyPortabilityOrder(\PayPal\StructType\TelephonyPortabilityOrder $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailMailboxDelete $parameters
     * @return \PayPal\StructType\TelephonyVoicemailMailboxDeleteResponse|bool
     */
    public function telephonyVoicemailMailboxDelete(\PayPal\StructType\TelephonyVoicemailMailboxDelete $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountDel $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountDelResponse|bool
     */
    public function telephonyBillingAccountDel(\PayPal\StructType\TelephonyBillingAccountDel $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberClean $parameters
     * @return \PayPal\StructType\TelephonyNumberCleanResponse|bool
     */
    public function telephonyNumberClean(\PayPal\StructType\TelephonyNumberClean $parameters)
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
     * @param \PayPal\StructType\TelephonyPlugAndPhoneOperation $parameters
     * @return \PayPal\StructType\TelephonyPlugAndPhoneOperationResponse|bool
     */
    public function telephonyPlugAndPhoneOperation(\PayPal\StructType\TelephonyPlugAndPhoneOperation $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsContactModify $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModifyResponse|bool
     */
    public function telephonyPhonebookOnSmsContactModify(\PayPal\StructType\TelephonyPhonebookOnSmsContactModify $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsModify $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsModifyResponse|bool
     */
    public function telephonyPhonebookOnSmsModify(\PayPal\StructType\TelephonyPhonebookOnSmsModify $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSetQuotaNotification $parameters
     * @return \PayPal\StructType\TelephonySmsSetQuotaNotificationResponse|bool
     */
    public function telephonySmsSetQuotaNotification(\PayPal\StructType\TelephonySmsSetQuotaNotification $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserList $parameters
     * @return \PayPal\StructType\TelephonySmsUserListResponse|bool
     */
    public function telephonySmsUserList(\PayPal\StructType\TelephonySmsUserList $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingInfo $parameters
     * @return \PayPal\StructType\TelephonyHuntingInfoResponse|bool
     */
    public function telephonyHuntingInfo(\PayPal\StructType\TelephonyHuntingInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookContactList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookContactListResponse|bool
     */
    public function telephonyPhonebookContactList(\PayPal\StructType\TelephonyPhonebookContactList $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserPassword $parameters
     * @return \PayPal\StructType\TelephonySmsUserPasswordResponse|bool
     */
    public function telephonySmsUserPassword(\PayPal\StructType\TelephonySmsUserPassword $parameters)
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
     * @param \PayPal\StructType\TelephonyLineGetOfferPrices $parameters
     * @return \PayPal\StructType\TelephonyLineGetOfferPricesResponse|bool
     */
    public function telephonyLineGetOfferPrices(\PayPal\StructType\TelephonyLineGetOfferPrices $parameters)
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
     * @param \PayPal\StructType\TelephonySmsGetQuotaNotification $parameters
     * @return \PayPal\StructType\TelephonySmsGetQuotaNotificationResponse|bool
     */
    public function telephonySmsGetQuotaNotification(\PayPal\StructType\TelephonySmsGetQuotaNotification $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingModificationMode $parameters
     * @return \PayPal\StructType\TelephonyHuntingModificationModeResponse|bool
     */
    public function telephonyHuntingModificationMode(\PayPal\StructType\TelephonyHuntingModificationMode $parameters)
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
     * @param \PayPal\StructType\TelephonyScreenListBlackWhiteChoice $parameters
     * @return \PayPal\StructType\TelephonyScreenListBlackWhiteChoiceResponse|bool
     */
    public function telephonyScreenListBlackWhiteChoice(\PayPal\StructType\TelephonyScreenListBlackWhiteChoice $parameters)
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
     * @param \PayPal\StructType\TelephonySmsDeleteCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsDeleteCsvAttachmentResponse|bool
     */
    public function telephonySmsDeleteCsvAttachment(\PayPal\StructType\TelephonySmsDeleteCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberZoneAndPrefixList $parameters
     * @return \PayPal\StructType\TelephonyNumberZoneAndPrefixListResponse|bool
     */
    public function telephonyNumberZoneAndPrefixList(\PayPal\StructType\TelephonyNumberZoneAndPrefixList $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSetSipDomain $parameters
     * @return \PayPal\StructType\TelephonyLineSetSipDomainResponse|bool
     */
    public function telephonyLineSetSipDomain(\PayPal\StructType\TelephonyLineSetSipDomain $parameters)
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
     * @param \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberDel $parameters
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberDelResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberDel(\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberDel $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupContactList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupContactListResponse|bool
     */
    public function telephonyPhonebookOnGroupContactList(\PayPal\StructType\TelephonyPhonebookOnGroupContactList $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusServiceReversableTicketsSummary $parameters
     * @return \PayPal\StructType\TelephonySmsplusServiceReversableTicketsSummaryResponse|bool
     */
    public function telephonySmsplusServiceReversableTicketsSummary(\PayPal\StructType\TelephonySmsplusServiceReversableTicketsSummary $parameters)
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
     * @param \PayPal\StructType\TelephonyDeleteLine $parameters
     * @return \PayPal\StructType\TelephonyDeleteLineResponse|bool
     */
    public function telephonyDeleteLine(\PayPal\StructType\TelephonyDeleteLine $parameters)
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
     * @param \PayPal\StructType\TelephonySetTimeZoneNumber $parameters
     * @return \PayPal\StructType\TelephonySetTimeZoneNumberResponse|bool
     */
    public function telephonySetTimeZoneNumber(\PayPal\StructType\TelephonySetTimeZoneNumber $parameters)
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
     * @param \PayPal\StructType\TelephonyNicSetIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyNicSetIpRestrictionResponse|bool
     */
    public function telephonyNicSetIpRestriction(\PayPal\StructType\TelephonyNicSetIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonyPortabilityStatus $parameters
     * @return \PayPal\StructType\TelephonyPortabilityStatusResponse|bool
     */
    public function telephonyPortabilityStatus(\PayPal\StructType\TelephonyPortabilityStatus $parameters)
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
     * @param \PayPal\StructType\TelephonySecurityDepositInfo $parameters
     * @return \PayPal\StructType\TelephonySecurityDepositInfoResponse|bool
     */
    public function telephonySecurityDepositInfo(\PayPal\StructType\TelephonySecurityDepositInfo $parameters)
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
     * @param \PayPal\StructType\TelephonySmsListCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsListCsvAttachmentResponse|bool
     */
    public function telephonySmsListCsvAttachment(\PayPal\StructType\TelephonySmsListCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonySmsCancelSending $parameters
     * @return \PayPal\StructType\TelephonySmsCancelSendingResponse|bool
     */
    public function telephonySmsCancelSending(\PayPal\StructType\TelephonySmsCancelSending $parameters)
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
     * @param \PayPal\StructType\TelephonyScreenListInfo $parameters
     * @return \PayPal\StructType\TelephonyScreenListInfoResponse|bool
     */
    public function telephonyScreenListInfo(\PayPal\StructType\TelephonyScreenListInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyLineLogsOnGroup $parameters
     * @return \PayPal\StructType\TelephonyLineLogsOnGroupResponse|bool
     */
    public function telephonyLineLogsOnGroup(\PayPal\StructType\TelephonyLineLogsOnGroup $parameters)
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
     * @param \PayPal\StructType\TelephonyLineGetMgcpIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyLineGetMgcpIpRestrictionResponse|bool
     */
    public function telephonyLineGetMgcpIpRestriction(\PayPal\StructType\TelephonyLineGetMgcpIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonyLineDetails $parameters
     * @return \PayPal\StructType\TelephonyLineDetailsResponse|bool
     */
    public function telephonyLineDetails(\PayPal\StructType\TelephonyLineDetails $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookContactDel $parameters
     * @return \PayPal\StructType\TelephonyPhonebookContactDelResponse|bool
     */
    public function telephonyPhonebookContactDel(\PayPal\StructType\TelephonyPhonebookContactDel $parameters)
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
     * @param \PayPal\StructType\TelephonyRatesListCsv $parameters
     * @return \PayPal\StructType\TelephonyRatesListCsvResponse|bool
     */
    public function telephonyRatesListCsv(\PayPal\StructType\TelephonyRatesListCsv $parameters)
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
     * @param \PayPal\StructType\TelephonyConferenceGetInfos $parameters
     * @return \PayPal\StructType\TelephonyConferenceGetInfosResponse|bool
     */
    public function telephonyConferenceGetInfos(\PayPal\StructType\TelephonyConferenceGetInfos $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsContactList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactListResponse|bool
     */
    public function telephonyPhonebookOnSmsContactList(\PayPal\StructType\TelephonyPhonebookOnSmsContactList $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnSmsContactAdd $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactAddResponse|bool
     */
    public function telephonyPhonebookOnSmsContactAdd(\PayPal\StructType\TelephonyPhonebookOnSmsContactAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyFMHuntingModificationAnonymousCallRejection $parameters
     * @return \PayPal\StructType\TelephonyFMHuntingModificationAnonymousCallRejectionResponse|bool
     */
    public function telephonyFMHuntingModificationAnonymousCallRejection(\PayPal\StructType\TelephonyFMHuntingModificationAnonymousCallRejection $parameters)
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
     * @param \PayPal\StructType\TelephonyDdiModify $parameters
     * @return \PayPal\StructType\TelephonyDdiModifyResponse|bool
     */
    public function telephonyDdiModify(\PayPal\StructType\TelephonyDdiModify $parameters)
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
     * @param \PayPal\StructType\TelephonyRedirectInfo $parameters
     * @return \PayPal\StructType\TelephonyRedirectInfoResponse|bool
     */
    public function telephonyRedirectInfo(\PayPal\StructType\TelephonyRedirectInfo $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSend $parameters
     * @return \PayPal\StructType\TelephonySmsSendResponse|bool
     */
    public function telephonySmsSend(\PayPal\StructType\TelephonySmsSend $parameters)
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
     * @param \PayPal\StructType\TelephonyLineGetSipDomain $parameters
     * @return \PayPal\StructType\TelephonyLineGetSipDomainResponse|bool
     */
    public function telephonyLineGetSipDomain(\PayPal\StructType\TelephonyLineGetSipDomain $parameters)
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
     * @param \PayPal\StructType\TelephonyToneDelete $parameters
     * @return \PayPal\StructType\TelephonyToneDeleteResponse|bool
     */
    public function telephonyToneDelete(\PayPal\StructType\TelephonyToneDelete $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSetMgcpIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyLineSetMgcpIpRestrictionResponse|bool
     */
    public function telephonyLineSetMgcpIpRestriction(\PayPal\StructType\TelephonyLineSetMgcpIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupContactModify $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupContactModifyResponse|bool
     */
    public function telephonyPhonebookOnGroupContactModify(\PayPal\StructType\TelephonyPhonebookOnGroupContactModify $parameters)
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
     * @param \PayPal\StructType\TelephonyScreenListBlackWhiteChoiceModify $parameters
     * @return \PayPal\StructType\TelephonyScreenListBlackWhiteChoiceModifyResponse|bool
     */
    public function telephonyScreenListBlackWhiteChoiceModify(\PayPal\StructType\TelephonyScreenListBlackWhiteChoiceModify $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusServiceDetails $parameters
     * @return \PayPal\StructType\TelephonySmsplusServiceDetailsResponse|bool
     */
    public function telephonySmsplusServiceDetails(\PayPal\StructType\TelephonySmsplusServiceDetails $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDel $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDelResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupDel(\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDel $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSenderDescription $parameters
     * @return \PayPal\StructType\TelephonySmsSenderDescriptionResponse|bool
     */
    public function telephonySmsSenderDescription(\PayPal\StructType\TelephonySmsSenderDescription $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberListPaginated $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberListPaginatedResponse|bool
     */
    public function telephonyAbbreviatedNumberListPaginated(\PayPal\StructType\TelephonyAbbreviatedNumberListPaginated $parameters)
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
     * @param \PayPal\StructType\TelephonySetDefaultPrivateHolidaysEvents $parameters
     * @return \PayPal\StructType\TelephonySetDefaultPrivateHolidaysEventsResponse|bool
     */
    public function telephonySetDefaultPrivateHolidaysEvents(\PayPal\StructType\TelephonySetDefaultPrivateHolidaysEvents $parameters)
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
     * @param \PayPal\StructType\TelephonySpareServiceList $parameters
     * @return \PayPal\StructType\TelephonySpareServiceListResponse|bool
     */
    public function telephonySpareServiceList(\PayPal\StructType\TelephonySpareServiceList $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserListCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsUserListCsvAttachmentResponse|bool
     */
    public function telephonySmsUserListCsvAttachment(\PayPal\StructType\TelephonySmsUserListCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxCallList $parameters
     * @return \PayPal\StructType\TelephonyFaxCallListResponse|bool
     */
    public function telephonyFaxCallList(\PayPal\StructType\TelephonyFaxCallList $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserSend $parameters
     * @return \PayPal\StructType\TelephonySmsUserSendResponse|bool
     */
    public function telephonySmsUserSend(\PayPal\StructType\TelephonySmsUserSend $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookOnGroupGroupList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookOnGroupGroupListResponse|bool
     */
    public function telephonyPhonebookOnGroupGroupList(\PayPal\StructType\TelephonyPhonebookOnGroupGroupList $parameters)
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
     * @param \PayPal\StructType\TelephonyClick2CallUserPassword $parameters
     * @return \PayPal\StructType\TelephonyClick2CallUserPasswordResponse|bool
     */
    public function telephonyClick2CallUserPassword(\PayPal\StructType\TelephonyClick2CallUserPassword $parameters)
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
     * @param \PayPal\StructType\TelephonySmsGetUserQuota $parameters
     * @return \PayPal\StructType\TelephonySmsGetUserQuotaResponse|bool
     */
    public function telephonySmsGetUserQuota(\PayPal\StructType\TelephonySmsGetUserQuota $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSenderDelete $parameters
     * @return \PayPal\StructType\TelephonySmsSenderDeleteResponse|bool
     */
    public function telephonySmsSenderDelete(\PayPal\StructType\TelephonySmsSenderDelete $parameters)
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
     * @param \PayPal\StructType\TelephonyToneStatus $parameters
     * @return \PayPal\StructType\TelephonyToneStatusResponse|bool
     */
    public function telephonyToneStatus(\PayPal\StructType\TelephonyToneStatus $parameters)
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
     * @param \PayPal\StructType\TelephonyDdiInfo $parameters
     * @return \PayPal\StructType\TelephonyDdiInfoResponse|bool
     */
    public function telephonyDdiInfo(\PayPal\StructType\TelephonyDdiInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingGroupList $parameters
     * @return \PayPal\StructType\TelephonyHuntingGroupListResponse|bool
     */
    public function telephonyHuntingGroupList(\PayPal\StructType\TelephonyHuntingGroupList $parameters)
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
     * @param \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberList $parameters
     * @return \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberListResponse|bool
     */
    public function telephonyTrunkExternalDisplayedNumberList(\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberList $parameters)
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
     * @param \PayPal\StructType\TelephonyDirectoryListWayType $parameters
     * @return \PayPal\StructType\TelephonyDirectoryListWayTypeResponse|bool
     */
    public function telephonyDirectoryListWayType(\PayPal\StructType\TelephonyDirectoryListWayType $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserHistoryCsv $parameters
     * @return \PayPal\StructType\TelephonySmsUserHistoryCsvResponse|bool
     */
    public function telephonySmsUserHistoryCsv(\PayPal\StructType\TelephonySmsUserHistoryCsv $parameters)
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
     * @param \PayPal\StructType\TelephonyCallList $parameters
     * @return \PayPal\StructType\TelephonyCallListResponse|bool
     */
    public function telephonyCallList(\PayPal\StructType\TelephonyCallList $parameters)
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
     * @param \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEvents $parameters
     * @return \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsResponse|bool
     */
    public function telephonyGetDefaultPrivateHolidaysEvents(\PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEvents $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusShortCodesList $parameters
     * @return \PayPal\StructType\TelephonySmsplusShortCodesListResponse|bool
     */
    public function telephonySmsplusShortCodesList(\PayPal\StructType\TelephonySmsplusShortCodesList $parameters)
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
     * @param \PayPal\StructType\TelephonyAliasToSipPossibilities $parameters
     * @return \PayPal\StructType\TelephonyAliasToSipPossibilitiesResponse|bool
     */
    public function telephonyAliasToSipPossibilities(\PayPal\StructType\TelephonyAliasToSipPossibilities $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupAdd $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupAddResponse|bool
     */
    public function telephonyAbbreviatedNumberOnGroupAdd(\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingModificationQueue $parameters
     * @return \PayPal\StructType\TelephonyHuntingModificationQueueResponse|bool
     */
    public function telephonyHuntingModificationQueue(\PayPal\StructType\TelephonyHuntingModificationQueue $parameters)
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
     * @param \PayPal\StructType\TelephonyDirectoryInfo $parameters
     * @return \PayPal\StructType\TelephonyDirectoryInfoResponse|bool
     */
    public function telephonyDirectoryInfo(\PayPal\StructType\TelephonyDirectoryInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyBillDetails $parameters
     * @return \PayPal\StructType\TelephonyBillDetailsResponse|bool
     */
    public function telephonyBillDetails(\PayPal\StructType\TelephonyBillDetails $parameters)
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
     * @param \PayPal\StructType\TelephonyLineLogsNotificationOptionsModify $parameters
     * @return \PayPal\StructType\TelephonyLineLogsNotificationOptionsModifyResponse|bool
     */
    public function telephonyLineLogsNotificationOptionsModify(\PayPal\StructType\TelephonyLineLogsNotificationOptionsModify $parameters)
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
     * @param \PayPal\StructType\TelephonyClick2CallDoBySession $parameters
     * @return \PayPal\StructType\TelephonyClick2CallDoBySessionResponse|bool
     */
    public function telephonyClick2CallDoBySession(\PayPal\StructType\TelephonyClick2CallDoBySession $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberAdd $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberAddResponse|bool
     */
    public function telephonyAbbreviatedNumberAdd(\PayPal\StructType\TelephonyAbbreviatedNumberAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberOrder $parameters
     * @return \PayPal\StructType\TelephonyNumberOrderResponse|bool
     */
    public function telephonyNumberOrder(\PayPal\StructType\TelephonyNumberOrder $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSetIpRestriction $parameters
     * @return \PayPal\StructType\TelephonyLineSetIpRestrictionResponse|bool
     */
    public function telephonyLineSetIpRestriction(\PayPal\StructType\TelephonyLineSetIpRestriction $parameters)
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
     * @param \PayPal\StructType\TelephonyLineSetCodecs $parameters
     * @return \PayPal\StructType\TelephonyLineSetCodecsResponse|bool
     */
    public function telephonyLineSetCodecs(\PayPal\StructType\TelephonyLineSetCodecs $parameters)
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
     * @param \PayPal\StructType\TelephonyNumberCityForZoneList $parameters
     * @return \PayPal\StructType\TelephonyNumberCityForZoneListResponse|bool
     */
    public function telephonyNumberCityForZoneList(\PayPal\StructType\TelephonyNumberCityForZoneList $parameters)
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
     * @param \PayPal\StructType\TelephonyTonesOptionsModify $parameters
     * @return \PayPal\StructType\TelephonyTonesOptionsModifyResponse|bool
     */
    public function telephonyTonesOptionsModify(\PayPal\StructType\TelephonyTonesOptionsModify $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailMessagesRemoteUpload $parameters
     * @return \PayPal\StructType\TelephonyVoicemailMessagesRemoteUploadResponse|bool
     */
    public function telephonyVoicemailMessagesRemoteUpload(\PayPal\StructType\TelephonyVoicemailMessagesRemoteUpload $parameters)
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
     * @param \PayPal\StructType\TelephonyOfferInfo $parameters
     * @return \PayPal\StructType\TelephonyOfferInfoResponse|bool
     */
    public function telephonyOfferInfo(\PayPal\StructType\TelephonyOfferInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookDel $parameters
     * @return \PayPal\StructType\TelephonyPhonebookDelResponse|bool
     */
    public function telephonyPhonebookDel(\PayPal\StructType\TelephonyPhonebookDel $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserAdd $parameters
     * @return \PayPal\StructType\TelephonySmsUserAddResponse|bool
     */
    public function telephonySmsUserAdd(\PayPal\StructType\TelephonySmsUserAdd $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserHistory $parameters
     * @return \PayPal\StructType\TelephonySmsUserHistoryResponse|bool
     */
    public function telephonySmsUserHistory(\PayPal\StructType\TelephonySmsUserHistory $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserGetCallBack $parameters
     * @return \PayPal\StructType\TelephonySmsUserGetCallBackResponse|bool
     */
    public function telephonySmsUserGetCallBack(\PayPal\StructType\TelephonySmsUserGetCallBack $parameters)
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
     * @param \PayPal\StructType\TelephonyOfferModifyPassword $parameters
     * @return \PayPal\StructType\TelephonyOfferModifyPasswordResponse|bool
     */
    public function telephonyOfferModifyPassword(\PayPal\StructType\TelephonyOfferModifyPassword $parameters)
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
     * @param \PayPal\StructType\TelephonyFunctionKeyAdd $parameters
     * @return \PayPal\StructType\TelephonyFunctionKeyAddResponse|bool
     */
    public function telephonyFunctionKeyAdd(\PayPal\StructType\TelephonyFunctionKeyAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookListResponse|bool
     */
    public function telephonyPhonebookList(\PayPal\StructType\TelephonyPhonebookList $parameters)
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
     * @param \PayPal\StructType\TelephonyPlugAndPhoneReset $parameters
     * @return \PayPal\StructType\TelephonyPlugAndPhoneResetResponse|bool
     */
    public function telephonyPlugAndPhoneReset(\PayPal\StructType\TelephonyPlugAndPhoneReset $parameters)
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
     * @param \PayPal\StructType\TelephonySpareInfo $parameters
     * @return \PayPal\StructType\TelephonySpareInfoResponse|bool
     */
    public function telephonySpareInfo(\PayPal\StructType\TelephonySpareInfo $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserDel $parameters
     * @return \PayPal\StructType\TelephonySmsUserDelResponse|bool
     */
    public function telephonySmsUserDel(\PayPal\StructType\TelephonySmsUserDel $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailMessagesStatus $parameters
     * @return \PayPal\StructType\TelephonyVoicemailMessagesStatusResponse|bool
     */
    public function telephonyVoicemailMessagesStatus(\PayPal\StructType\TelephonyVoicemailMessagesStatus $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookModify $parameters
     * @return \PayPal\StructType\TelephonyPhonebookModifyResponse|bool
     */
    public function telephonyPhonebookModify(\PayPal\StructType\TelephonyPhonebookModify $parameters)
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
     * @param \PayPal\StructType\TelephonyOfferModifyName $parameters
     * @return \PayPal\StructType\TelephonyOfferModifyNameResponse|bool
     */
    public function telephonyOfferModifyName(\PayPal\StructType\TelephonyOfferModifyName $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSetCallBack $parameters
     * @return \PayPal\StructType\TelephonySmsSetCallBackResponse|bool
     */
    public function telephonySmsSetCallBack(\PayPal\StructType\TelephonySmsSetCallBack $parameters)
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
     * @param \PayPal\StructType\TelephonyPhonebookGroupList $parameters
     * @return \PayPal\StructType\TelephonyPhonebookGroupListResponse|bool
     */
    public function telephonyPhonebookGroupList(\PayPal\StructType\TelephonyPhonebookGroupList $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountInfo $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountInfoResponse|bool
     */
    public function telephonyBillingAccountInfo(\PayPal\StructType\TelephonyBillingAccountInfo $parameters)
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
     * @param \PayPal\StructType\TelephonySmsSenderAdd $parameters
     * @return \PayPal\StructType\TelephonySmsSenderAddResponse|bool
     */
    public function telephonySmsSenderAdd(\PayPal\StructType\TelephonySmsSenderAdd $parameters)
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
     * @param \PayPal\StructType\TelephonyLineConsumptionCSVByMail $parameters
     * @return \PayPal\StructType\TelephonyLineConsumptionCSVByMailResponse|bool
     */
    public function telephonyLineConsumptionCSVByMail(\PayPal\StructType\TelephonyLineConsumptionCSVByMail $parameters)
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
     * @param \PayPal\StructType\TelephonySmsUserDeleteCsvAttachment $parameters
     * @return \PayPal\StructType\TelephonySmsUserDeleteCsvAttachmentResponse|bool
     */
    public function telephonySmsUserDeleteCsvAttachment(\PayPal\StructType\TelephonySmsUserDeleteCsvAttachment $parameters)
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
     * @param \PayPal\StructType\TelephonyListReversableCallsFromNumber $parameters
     * @return \PayPal\StructType\TelephonyListReversableCallsFromNumberResponse|bool
     */
    public function telephonyListReversableCallsFromNumber(\PayPal\StructType\TelephonyListReversableCallsFromNumber $parameters)
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
     * @param \PayPal\StructType\TelephonyBillingAccountList $parameters
     * @return \PayPal\StructType\TelephonyBillingAccountListResponse|bool
     */
    public function telephonyBillingAccountList(\PayPal\StructType\TelephonyBillingAccountList $parameters)
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
     * @param \PayPal\StructType\TelephonySmsGetQuotaNotificationForUser $parameters
     * @return \PayPal\StructType\TelephonySmsGetQuotaNotificationForUserResponse|bool
     */
    public function telephonySmsGetQuotaNotificationForUser(\PayPal\StructType\TelephonySmsGetQuotaNotificationForUser $parameters)
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
     * @param \PayPal\StructType\TelephonyChangeNicModify $parameters
     * @return \PayPal\StructType\TelephonyChangeNicModifyResponse|bool
     */
    public function telephonyChangeNicModify(\PayPal\StructType\TelephonyChangeNicModify $parameters)
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
     * @param \PayPal\StructType\TelephonySviInfo $parameters
     * @return \PayPal\StructType\TelephonySviInfoResponse|bool
     */
    public function telephonySviInfo(\PayPal\StructType\TelephonySviInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyClick2CallUserAdd $parameters
     * @return \PayPal\StructType\TelephonyClick2CallUserAddResponse|bool
     */
    public function telephonyClick2CallUserAdd(\PayPal\StructType\TelephonyClick2CallUserAdd $parameters)
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
     * @param \PayPal\StructType\TelephonySmsBlacklistedSendersDelete $parameters
     * @return \PayPal\StructType\TelephonySmsBlacklistedSendersDeleteResponse|bool
     */
    public function telephonySmsBlacklistedSendersDelete(\PayPal\StructType\TelephonySmsBlacklistedSendersDelete $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusServiceAdd $parameters
     * @return \PayPal\StructType\TelephonySmsplusServiceAddResponse|bool
     */
    public function telephonySmsplusServiceAdd(\PayPal\StructType\TelephonySmsplusServiceAdd $parameters)
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
     * @param \PayPal\StructType\TelephonySpareCreateRMA $parameters
     * @return \PayPal\StructType\TelephonySpareCreateRMAResponse|bool
     */
    public function telephonySpareCreateRMA(\PayPal\StructType\TelephonySpareCreateRMA $parameters)
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
     * @param \PayPal\StructType\TelephonySmsplusServiceEdit $parameters
     * @return \PayPal\StructType\TelephonySmsplusServiceEditResponse|bool
     */
    public function telephonySmsplusServiceEdit(\PayPal\StructType\TelephonySmsplusServiceEdit $parameters)
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
     * @param \PayPal\StructType\TelephonyHuntingGenericScreenOptionsModify $parameters
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenOptionsModifyResponse|bool
     */
    public function telephonyHuntingGenericScreenOptionsModify(\PayPal\StructType\TelephonyHuntingGenericScreenOptionsModify $parameters)
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
     * @param \PayPal\StructType\TelephonyPlugAndPhoneInfo $parameters
     * @return \PayPal\StructType\TelephonyPlugAndPhoneInfoResponse|bool
     */
    public function telephonyPlugAndPhoneInfo(\PayPal\StructType\TelephonyPlugAndPhoneInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyFaxCampaignDelete $parameters
     * @return \PayPal\StructType\TelephonyFaxCampaignDeleteResponse|bool
     */
    public function telephonyFaxCampaignDelete(\PayPal\StructType\TelephonyFaxCampaignDelete $parameters)
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
     * @param \PayPal\StructType\TelephonyReversmentsRefundFromBillingAccount $parameters
     * @return \PayPal\StructType\TelephonyReversmentsRefundFromBillingAccountResponse|bool
     */
    public function telephonyReversmentsRefundFromBillingAccount(\PayPal\StructType\TelephonyReversmentsRefundFromBillingAccount $parameters)
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
     * @param \PayPal\StructType\TelephonyVoicemailMessageDelete $parameters
     * @return \PayPal\StructType\TelephonyVoicemailMessageDeleteResponse|bool
     */
    public function telephonyVoicemailMessageDelete(\PayPal\StructType\TelephonyVoicemailMessageDelete $parameters)
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
     * @param \PayPal\StructType\TelephonyLineOptionsList $parameters
     * @return \PayPal\StructType\TelephonyLineOptionsListResponse|bool
     */
    public function telephonyLineOptionsList(\PayPal\StructType\TelephonyLineOptionsList $parameters)
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
     * @param \PayPal\StructType\TelephonySpareServiceInfo $parameters
     * @return \PayPal\StructType\TelephonySpareServiceInfoResponse|bool
     */
    public function telephonySpareServiceInfo(\PayPal\StructType\TelephonySpareServiceInfo $parameters)
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
     * @param \PayPal\StructType\TelephonyAbbreviatedNumberModify $parameters
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberModifyResponse|bool
     */
    public function telephonyAbbreviatedNumberModify(\PayPal\StructType\TelephonyAbbreviatedNumberModify $parameters)
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
     * @param \PayPal\StructType\TelephonyOfferSimultaneousLinesModify $parameters
     * @return \PayPal\StructType\TelephonyOfferSimultaneousLinesModifyResponse|bool
     */
    public function telephonyOfferSimultaneousLinesModify(\PayPal\StructType\TelephonyOfferSimultaneousLinesModify $parameters)
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
     * @return \PayPal\ArrayType\TelephonyGetClosureEventsAsArrayResponse|\PayPal\StructType\TelephonyAbbreviatedNumberAddResponse|\PayPal\StructType\TelephonyAbbreviatedNumberDelResponse|\PayPal\StructType\TelephonyAbbreviatedNumberListPaginatedResponse|\PayPal\StructType\TelephonyAbbreviatedNumberListResponse|\PayPal\StructType\TelephonyAbbreviatedNumberModifyResponse|\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupAddResponse|\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDelResponse|\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupListResponse|\PayPal\StructType\TelephonyAbbreviatedNumberOnGroupModifyResponse|\PayPal\StructType\TelephonyAliasToSipOfferResponse|\PayPal\StructType\TelephonyAliasToSipPossibilitiesResponse|\PayPal\StructType\TelephonyBillDetailsCSVResponse|\PayPal\StructType\TelephonyBillDetailsResponse|\PayPal\StructType\TelephonyBillingAccountAddResponse|\PayPal\StructType\TelephonyBillingAccountConsumptionCSVByMailResponse|\PayPal\StructType\TelephonyBillingAccountDelResponse|\PayPal\StructType\TelephonyBillingAccountDescriptionModifyResponse|\PayPal\StructType\TelephonyBillingAccountInfoResponse|\PayPal\StructType\TelephonyBillingAccountListResponse|\PayPal\StructType\TelephonyBillingAccountSetResponse|\PayPal\StructType\TelephonyBillingAccountSummaryResponse|\PayPal\StructType\TelephonyBillListResponse|\PayPal\StructType\TelephonyCallListResponse|\PayPal\StructType\TelephonyChangeNicModifyResponse|\PayPal\StructType\TelephonyClick2CallDoBySessionResponse|\PayPal\StructType\TelephonyClick2CallDoResponse|\PayPal\StructType\TelephonyClick2CallUserAddResponse|\PayPal\StructType\TelephonyClick2CallUserDelResponse|\PayPal\StructType\TelephonyClick2CallUserListResponse|\PayPal\StructType\TelephonyClick2CallUserPasswordResponse|\PayPal\StructType\TelephonyConferenceActionResponse|\PayPal\StructType\TelephonyConferenceGetInfosResponse|\PayPal\StructType\TelephonyConferenceGetParamsResponse|\PayPal\StructType\TelephonyConferenceSetAnnounceFileResponse|\PayPal\StructType\TelephonyConferenceSetParamsResponse|\PayPal\StructType\TelephonyDdiInfoResponse|\PayPal\StructType\TelephonyDdiModifyResponse|\PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsResponse|\PayPal\StructType\TelephonyDelClosureEventsResponse|\PayPal\StructType\TelephonyDeleteLineResponse|\PayPal\StructType\TelephonyDepositMovementModifyResponse|\PayPal\StructType\TelephonyDirectoryInfoGetSameSiretResponse|\PayPal\StructType\TelephonyDirectoryInfoGetSiretResponse|\PayPal\StructType\TelephonyDirectoryInfoResponse|\PayPal\StructType\TelephonyDirectoryListWayTypeResponse|\PayPal\StructType\TelephonyDirectoryModifyAddressResponse|\PayPal\StructType\TelephonyDirectoryModifyPublicationResponse|\PayPal\StructType\TelephonyDirectoryPJCodeResponse|\PayPal\StructType\TelephonyFaxCallListResponse|\PayPal\StructType\TelephonyFaxCampaignCreationResponse|\PayPal\StructType\TelephonyFaxCampaignDeleteResponse|\PayPal\StructType\TelephonyFaxCampaignDetailsResponse|\PayPal\StructType\TelephonyFaxCampaignListResponse|\PayPal\StructType\TelephonyFaxCampaignStartStopResponse|\PayPal\StructType\TelephonyFaxHistoryResponse|\PayPal\StructType\TelephonyFaxModifyPasswordResponse|\PayPal\StructType\TelephonyFaxOptionsListResponse|\PayPal\StructType\TelephonyFaxOptionsModifyResponse|\PayPal\StructType\TelephonyFaxSendResponse|\PayPal\StructType\TelephonyFMHuntingModificationAnonymousCallRejectionResponse|\PayPal\StructType\TelephonyFMHuntingModificationMembersResponse|\PayPal\StructType\TelephonyFMHuntingModificationModeResponse|\PayPal\StructType\TelephonyFMHuntingModificationSimultaneousCallsResponse|\PayPal\StructType\TelephonyFMHuntingModificationVoicemailResponse|\PayPal\StructType\TelephonyFreefaxToVoicefaxCheckListResponse|\PayPal\StructType\TelephonyFreefaxToVoicefaxResponse|\PayPal\StructType\TelephonyFunctionKeyAddResponse|\PayPal\StructType\TelephonyFunctionKeyDelResponse|\PayPal\StructType\TelephonyFunctionKeyListResponse|\PayPal\StructType\TelephonyFunctionKeyModifyResponse|\PayPal\StructType\TelephonyGetCitiesFromZipResponse|\PayPal\StructType\TelephonyGetClosureEventsAsICSResponse|\PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsResponse|\PayPal\StructType\TelephonyGetTimeZoneNumberResponse|\PayPal\StructType\TelephonyHuntingGenericScreenListResponse|\PayPal\StructType\TelephonyHuntingGenericScreenOptionsModifyResponse|\PayPal\StructType\TelephonyHuntingGenericScreenOptionsResponse|\PayPal\StructType\TelephonyHuntingGenericScreenSetResponse|\PayPal\StructType\TelephonyHuntingGenericScreenStatusModifyResponse|\PayPal\StructType\TelephonyHuntingGenericScreenStatusResponse|\PayPal\StructType\TelephonyHuntingGroupListResponse|\PayPal\StructType\TelephonyHuntingInfoResponse|\PayPal\StructType\TelephonyHuntingModificationAnonymousCallRejectionResponse|\PayPal\StructType\TelephonyHuntingModificationMembersResponse|\PayPal\StructType\TelephonyHuntingModificationModeResponse|\PayPal\StructType\TelephonyHuntingModificationQueueResponse|\PayPal\StructType\TelephonyHuntingModificationSimultaneousCallsResponse|\PayPal\StructType\TelephonyLineConsumptionCSVByMailResponse|\PayPal\StructType\TelephonyLineDetailsResponse|\PayPal\StructType\TelephonyLineGetCodecsResponse|\PayPal\StructType\TelephonyLineGetIpRestrictionResponse|\PayPal\StructType\TelephonyLineGetMgcpIpRestrictionResponse|\PayPal\StructType\TelephonyLineGetOfferPricesResponse|\PayPal\StructType\TelephonyLineGetSipDomainResponse|\PayPal\StructType\TelephonyLineListResponse|\PayPal\StructType\TelephonyLineLogsNotificationOptionsModifyResponse|\PayPal\StructType\TelephonyLineLogsNotificationOptionsResponse|\PayPal\StructType\TelephonyLineLogsOnGroupResponse|\PayPal\StructType\TelephonyLineLogsResponse|\PayPal\StructType\TelephonyLineOptionsListResponse|\PayPal\StructType\TelephonyLineOptionsModifyResponse|\PayPal\StructType\TelephonyLineOrderResponse|\PayPal\StructType\TelephonyLineSetCodecsResponse|\PayPal\StructType\TelephonyLineSetIpRestrictionResponse|\PayPal\StructType\TelephonyLineSetMgcpIpRestrictionResponse|\PayPal\StructType\TelephonyLineSetSipDomainResponse|\PayPal\StructType\TelephonyLineSwitchOfferPossibilityResponse|\PayPal\StructType\TelephonyLineSwitchOfferResponse|\PayPal\StructType\TelephonyLineSwitchOldOfferPossibilityResponse|\PayPal\StructType\TelephonyLineSwitchOldOfferResponse|\PayPal\StructType\TelephonyListReversableCallsFromNumberResponse|\PayPal\StructType\TelephonyListSummationCallsFromBillingAccountResponse|\PayPal\StructType\TelephonyListSummationCallsFromNumberResponse|\PayPal\StructType\TelephonyNicGetIpRestrictionResponse|\PayPal\StructType\TelephonyNicGetMgcpIpRestrictionResponse|\PayPal\StructType\TelephonyNicGetSipDomainResponse|\PayPal\StructType\TelephonyNicSetIpRestrictionResponse|\PayPal\StructType\TelephonyNicSetMgcpIpRestrictionResponse|\PayPal\StructType\TelephonyNicSetSipDomainResponse|\PayPal\StructType\TelephonyNumberCityForZoneListResponse|\PayPal\StructType\TelephonyNumberCleanResponse|\PayPal\StructType\TelephonyNumberCustomListResponse|\PayPal\StructType\TelephonyNumberGetBillingAccountResponse|\PayPal\StructType\TelephonyNumberGetFrWayNamesFromInseeResponse|\PayPal\StructType\TelephonyNumberInfoResponse|\PayPal\StructType\TelephonyNumberModifyResponse|\PayPal\StructType\TelephonyNumberOrderResponse|\PayPal\StructType\TelephonyNumberZoneAndPrefixListResponse|\PayPal\StructType\TelephonyOfferInfoResponse|\PayPal\StructType\TelephonyOfferModifyNameResponse|\PayPal\StructType\TelephonyOfferModifyPasswordResponse|\PayPal\StructType\TelephonyOfferSimultaneousLinesModifyResponse|\PayPal\StructType\TelephonyOrdersFollowingUpResponse|\PayPal\StructType\TelephonyPhonebookAddResponse|\PayPal\StructType\TelephonyPhonebookContactAddResponse|\PayPal\StructType\TelephonyPhonebookContactDelResponse|\PayPal\StructType\TelephonyPhonebookContactListResponse|\PayPal\StructType\TelephonyPhonebookContactModifyResponse|\PayPal\StructType\TelephonyPhonebookDelResponse|\PayPal\StructType\TelephonyPhonebookGroupListResponse|\PayPal\StructType\TelephonyPhonebookListResponse|\PayPal\StructType\TelephonyPhonebookModifyResponse|\PayPal\StructType\TelephonyPhonebookOnGroupAddResponse|\PayPal\StructType\TelephonyPhonebookOnGroupContactAddResponse|\PayPal\StructType\TelephonyPhonebookOnGroupContactDelResponse|\PayPal\StructType\TelephonyPhonebookOnGroupContactListResponse|\PayPal\StructType\TelephonyPhonebookOnGroupContactModifyResponse|\PayPal\StructType\TelephonyPhonebookOnGroupDelResponse|\PayPal\StructType\TelephonyPhonebookOnGroupGroupListResponse|\PayPal\StructType\TelephonyPhonebookOnGroupListResponse|\PayPal\StructType\TelephonyPhonebookOnGroupModifyResponse|\PayPal\StructType\TelephonyPhonebookOnSmsAddResponse|\PayPal\StructType\TelephonyPhonebookOnSmsContactAddResponse|\PayPal\StructType\TelephonyPhonebookOnSmsContactDelResponse|\PayPal\StructType\TelephonyPhonebookOnSmsContactListResponse|\PayPal\StructType\TelephonyPhonebookOnSmsContactModifyResponse|\PayPal\StructType\TelephonyPhonebookOnSmsDelResponse|\PayPal\StructType\TelephonyPhonebookOnSmsListResponse|\PayPal\StructType\TelephonyPhonebookOnSmsModifyResponse|\PayPal\StructType\TelephonyPhonebookSharePeerListResponse|\PayPal\StructType\TelephonyPhonebookShareResponse|\PayPal\StructType\TelephonyPlugAndPhoneInfoResponse|\PayPal\StructType\TelephonyPlugAndPhoneOperationResponse|\PayPal\StructType\TelephonyPlugAndPhoneResetResponse|\PayPal\StructType\TelephonyPlugAndPhoneSkinModifyResponse|\PayPal\StructType\TelephonyPortabilityOrderResponse|\PayPal\StructType\TelephonyPortabilityOrderSpecialNumberResponse|\PayPal\StructType\TelephonyPortabilityStatusResponse|\PayPal\StructType\TelephonyRatesListCsvResponse|\PayPal\StructType\TelephonyRatesListResponse|\PayPal\StructType\TelephonyRedirectInfoResponse|\PayPal\StructType\TelephonyRedirectModifyResponse|\PayPal\StructType\TelephonyRestrictionListResponse|\PayPal\StructType\TelephonyRestrictionModifyResponse|\PayPal\StructType\TelephonyReversmentsRefundFromBillingAccountResponse|\PayPal\StructType\TelephonyReversmentsRefundIsPendingResponse|\PayPal\StructType\TelephonyScreenListBlackWhiteChoiceModifyResponse|\PayPal\StructType\TelephonyScreenListBlackWhiteChoiceResponse|\PayPal\StructType\TelephonyScreenListInfoModifyResponse|\PayPal\StructType\TelephonyScreenListInfoResponse|\PayPal\StructType\TelephonySecurityDepositCreditResponse|\PayPal\StructType\TelephonySecurityDepositInfoResponse|\PayPal\StructType\TelephonySetClosureEventsResponse|\PayPal\StructType\TelephonySetDefaultPrivateHolidaysEventsResponse|\PayPal\StructType\TelephonySetTimeZoneNumberResponse|\PayPal\StructType\TelephonySipToAliasOfferResponse|\PayPal\StructType\TelephonySmsAccountListResponse|\PayPal\StructType\TelephonySmsAddCsvAttachmentResponse|\PayPal\StructType\TelephonySmsBlacklistedSendersDeleteResponse|\PayPal\StructType\TelephonySmsBlacklistedSendersListResponse|\PayPal\StructType\TelephonySmsCancelSendingResponse|\PayPal\StructType\TelephonySmsCreditLeftResponse|\PayPal\StructType\TelephonySmsDeleteCsvAttachmentResponse|\PayPal\StructType\TelephonySmsDeleteResponse|\PayPal\StructType\TelephonySmsGetCallBackResponse|\PayPal\StructType\TelephonySmsGetCsvAttachmentResponse|\PayPal\StructType\TelephonySmsGetQuotaNotificationForUserResponse|\PayPal\StructType\TelephonySmsGetQuotaNotificationResponse|\PayPal\StructType\TelephonySmsGetUserQuotaForUserResponse|\PayPal\StructType\TelephonySmsGetUserQuotaResponse|\PayPal\StructType\TelephonySmsHistoryCsvResponse|\PayPal\StructType\TelephonySmsHistoryResponse|\PayPal\StructType\TelephonySmsListCsvAttachmentResponse|\PayPal\StructType\TelephonySmsMultiSendResponse|\PayPal\StructType\TelephonySmsplusIsFreeKeywordResponse|\PayPal\StructType\TelephonySmsplusSendSmsMtResponse|\PayPal\StructType\TelephonySmsplusServiceAddResponse|\PayPal\StructType\TelephonySmsplusServiceDeleteResponse|\PayPal\StructType\TelephonySmsplusServiceDetailsResponse|\PayPal\StructType\TelephonySmsplusServiceEditResponse|\PayPal\StructType\TelephonySmsplusServiceListResponse|\PayPal\StructType\TelephonySmsplusServiceReversableTicketsListResponse|\PayPal\StructType\TelephonySmsplusServiceReversableTicketsSummaryResponse|\PayPal\StructType\TelephonySmsplusShortCodesListResponse|\PayPal\StructType\TelephonySmsSenderAddResponse|\PayPal\StructType\TelephonySmsSenderDeleteResponse|\PayPal\StructType\TelephonySmsSenderDescriptionResponse|\PayPal\StructType\TelephonySmsSenderListResponse|\PayPal\StructType\TelephonySmsSenderValidateResponse|\PayPal\StructType\TelephonySmsSendResponse|\PayPal\StructType\TelephonySmsSetCallBackResponse|\PayPal\StructType\TelephonySmsSetQuotaNotificationResponse|\PayPal\StructType\TelephonySmsSetUserQuotaResponse|\PayPal\StructType\TelephonySmsUserAddCsvAttachmentResponse|\PayPal\StructType\TelephonySmsUserAddResponse|\PayPal\StructType\TelephonySmsUserCreditLeftResponse|\PayPal\StructType\TelephonySmsUserDeleteCsvAttachmentResponse|\PayPal\StructType\TelephonySmsUserDelResponse|\PayPal\StructType\TelephonySmsUserGetCallBackResponse|\PayPal\StructType\TelephonySmsUserGetCsvAttachmentResponse|\PayPal\StructType\TelephonySmsUserHistoryCsvResponse|\PayPal\StructType\TelephonySmsUserHistoryResponse|\PayPal\StructType\TelephonySmsUserListCsvAttachmentResponse|\PayPal\StructType\TelephonySmsUserListResponse|\PayPal\StructType\TelephonySmsUserMultiSendResponse|\PayPal\StructType\TelephonySmsUserPasswordResponse|\PayPal\StructType\TelephonySmsUserSendResponse|\PayPal\StructType\TelephonySmsUserSetCallBackResponse|\PayPal\StructType\TelephonySpareAddResponse|\PayPal\StructType\TelephonySpareCapabilitiesResponse|\PayPal\StructType\TelephonySpareCreateRMAResponse|\PayPal\StructType\TelephonySpareDelResponse|\PayPal\StructType\TelephonySpareInfoResponse|\PayPal\StructType\TelephonySpareListResponse|\PayPal\StructType\TelephonySparePurchaseResponse|\PayPal\StructType\TelephonySpareReplaceResponse|\PayPal\StructType\TelephonySpareServiceInfoResponse|\PayPal\StructType\TelephonySpareServiceListResponse|\PayPal\StructType\TelephonySpecialNumberCustomListResponse|\PayPal\StructType\TelephonySpecialNumberOrderResponse|\PayPal\StructType\TelephonySviInfoResponse|\PayPal\StructType\TelephonySviModifyResponse|\PayPal\StructType\TelephonyToneDeleteResponse|\PayPal\StructType\TelephonyToneRemoteUploadResponse|\PayPal\StructType\TelephonyTonesOptionsListResponse|\PayPal\StructType\TelephonyTonesOptionsModifyResponse|\PayPal\StructType\TelephonyToneStatusResponse|\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAddResponse|\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberCheckResponse|\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberDelResponse|\PayPal\StructType\TelephonyTrunkExternalDisplayedNumberListResponse|\PayPal\StructType\TelephonyVoicemailMailboxDeleteResponse|\PayPal\StructType\TelephonyVoicemailMailboxDownloadResponse|\PayPal\StructType\TelephonyVoicemailMailboxListResponse|\PayPal\StructType\TelephonyVoicemailMessageDeleteResponse|\PayPal\StructType\TelephonyVoicemailMessagesDownloadResponse|\PayPal\StructType\TelephonyVoicemailMessagesRemoteUploadResponse|\PayPal\StructType\TelephonyVoicemailMessagesStatusResponse|\PayPal\StructType\TelephonyVoicemailModifyPasswordResponse|\PayPal\StructType\TelephonyVoicemailOptionsListResponse|\PayPal\StructType\TelephonyVoicemailOptionsModifyResponse
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
