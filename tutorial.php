<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://www.ovh.com/soapi/soapi-dlw-1.63.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://www.ovh.com/soapi/soapi-dlw-1.63.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \PayPal\ClassMap::get(),
);
/**
 * Samples for Mailing ServiceType
 */
$mailing = new \PayPal\ServiceType\Mailing($options);
/**
 * Sample call for mailingListModeratorDel operation/method
 */
if ($mailing->mailingListModeratorDel(new \PayPal\StructType\MailingListModeratorDel()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListModeratorList operation/method
 */
if ($mailing->mailingListModeratorList(new \PayPal\StructType\MailingListModeratorList()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListFullInfo operation/method
 */
if ($mailing->mailingListFullInfo(new \PayPal\StructType\MailingListFullInfo()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListDel operation/method
 */
if ($mailing->mailingListDel(new \PayPal\StructType\MailingListDel()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberAdd operation/method
 */
if ($mailing->mailingListSubscriberAdd(new \PayPal\StructType\MailingListSubscriberAdd()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListModeratorAdd operation/method
 */
if ($mailing->mailingListModeratorAdd(new \PayPal\StructType\MailingListModeratorAdd()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberList operation/method
 */
if ($mailing->mailingListSubscriberList(new \PayPal\StructType\MailingListSubscriberList()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberDel operation/method
 */
if ($mailing->mailingListSubscriberDel(new \PayPal\StructType\MailingListSubscriberDel()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListInfo operation/method
 */
if ($mailing->mailingListInfo(new \PayPal\StructType\MailingListInfo()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListModify operation/method
 */
if ($mailing->mailingListModify(new \PayPal\StructType\MailingListModify()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListAdd operation/method
 */
if ($mailing->mailingListAdd(new \PayPal\StructType\MailingListAdd()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListList operation/method
 */
if ($mailing->mailingListList(new \PayPal\StructType\MailingListList()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberListByEmail operation/method
 */
if ($mailing->mailingListSubscriberListByEmail(new \PayPal\StructType\MailingListSubscriberListByEmail()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Samples for Telephony ServiceType
 */
$telephony = new \PayPal\ServiceType\Telephony($options);
/**
 * Sample call for telephonyNumberInfo operation/method
 */
if ($telephony->telephonyNumberInfo(new \PayPal\StructType\TelephonyNumberInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailOptionsList operation/method
 */
if ($telephony->telephonyVoicemailOptionsList(new \PayPal\StructType\TelephonyVoicemailOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookSharePeerList operation/method
 */
if ($telephony->telephonyPhonebookSharePeerList(new \PayPal\StructType\TelephonyPhonebookSharePeerList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRedirectModify operation/method
 */
if ($telephony->telephonyRedirectModify(new \PayPal\StructType\TelephonyRedirectModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberModify operation/method
 */
if ($telephony->telephonyNumberModify(new \PayPal\StructType\TelephonyNumberModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetCitiesFromZip operation/method
 */
if ($telephony->telephonyGetCitiesFromZip(new \PayPal\StructType\TelephonyGetCitiesFromZip()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusSendSmsMt operation/method
 */
if ($telephony->telephonySmsplusSendSmsMt(new \PayPal\StructType\TelephonySmsplusSendSmsMt()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserGetCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserGetCsvAttachment(new \PayPal\StructType\TelephonySmsUserGetCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsList operation/method
 */
if ($telephony->telephonyPhonebookOnSmsList(new \PayPal\StructType\TelephonyPhonebookOnSmsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySetClosureEvents operation/method
 */
if ($telephony->telephonySetClosureEvents(new \PayPal\StructType\TelephonySetClosureEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicSetSipDomain operation/method
 */
if ($telephony->telephonyNicSetSipDomain(new \PayPal\StructType\TelephonyNicSetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsMultiSend operation/method
 */
if ($telephony->telephonySmsMultiSend(new \PayPal\StructType\TelephonySmsMultiSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserAddCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserAddCsvAttachment(new \PayPal\StructType\TelephonySmsUserAddCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareDel operation/method
 */
if ($telephony->telephonySpareDel(new \PayPal\StructType\TelephonySpareDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxHistory operation/method
 */
if ($telephony->telephonyFaxHistory(new \PayPal\StructType\TelephonyFaxHistory()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFreefaxToVoicefax operation/method
 */
if ($telephony->telephonyFreefaxToVoicefax(new \PayPal\StructType\TelephonyFreefaxToVoicefax()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxSend operation/method
 */
if ($telephony->telephonyFaxSend(new \PayPal\StructType\TelephonyFaxSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRestrictionList operation/method
 */
if ($telephony->telephonyRestrictionList(new \PayPal\StructType\TelephonyRestrictionList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillList operation/method
 */
if ($telephony->telephonyBillList(new \PayPal\StructType\TelephonyBillList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberCustomList operation/method
 */
if ($telephony->telephonyNumberCustomList(new \PayPal\StructType\TelephonyNumberCustomList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneSkinModify operation/method
 */
if ($telephony->telephonyPlugAndPhoneSkinModify(new \PayPal\StructType\TelephonyPlugAndPhoneSkinModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxOptionsModify operation/method
 */
if ($telephony->telephonyFaxOptionsModify(new \PayPal\StructType\TelephonyFaxOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountSummary operation/method
 */
if ($telephony->telephonyBillingAccountSummary(new \PayPal\StructType\TelephonyBillingAccountSummary()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceSetAnnounceFile operation/method
 */
if ($telephony->telephonyConferenceSetAnnounceFile(new \PayPal\StructType\TelephonyConferenceSetAnnounceFile()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsAdd operation/method
 */
if ($telephony->telephonyPhonebookOnSmsAdd(new \PayPal\StructType\TelephonyPhonebookOnSmsAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserDel operation/method
 */
if ($telephony->telephonyClick2CallUserDel(new \PayPal\StructType\TelephonyClick2CallUserDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsAccountList operation/method
 */
if ($telephony->telephonySmsAccountList(new \PayPal\StructType\TelephonySmsAccountList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountConsumptionCSVByMail operation/method
 */
if ($telephony->telephonyBillingAccountConsumptionCSVByMail(new \PayPal\StructType\TelephonyBillingAccountConsumptionCSVByMail()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationVoicemail operation/method
 */
if ($telephony->telephonyFMHuntingModificationVoicemail(new \PayPal\StructType\TelephonyFMHuntingModificationVoicemail()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOrdersFollowingUp operation/method
 */
if ($telephony->telephonyOrdersFollowingUp(new \PayPal\StructType\TelephonyOrdersFollowingUp()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactAdd operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactAdd(new \PayPal\StructType\TelephonyPhonebookOnGroupContactAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillDetailsCSV operation/method
 */
if ($telephony->telephonyBillDetailsCSV(new \PayPal\StructType\TelephonyBillDetailsCSV()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsCreditLeft operation/method
 */
if ($telephony->telephonySmsCreditLeft(new \PayPal\StructType\TelephonySmsCreditLeft()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryPJCode operation/method
 */
if ($telephony->telephonyDirectoryPJCode(new \PayPal\StructType\TelephonyDirectoryPJCode()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyListSummationCallsFromBillingAccount operation/method
 */
if ($telephony->telephonyListSummationCallsFromBillingAccount(new \PayPal\StructType\TelephonyListSummationCallsFromBillingAccount()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountDescriptionModify operation/method
 */
if ($telephony->telephonyBillingAccountDescriptionModify(new \PayPal\StructType\TelephonyBillingAccountDescriptionModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberDel operation/method
 */
if ($telephony->telephonyAbbreviatedNumberDel(new \PayPal\StructType\TelephonyAbbreviatedNumberDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxOptionsList operation/method
 */
if ($telephony->telephonyFaxOptionsList(new \PayPal\StructType\TelephonyFaxOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberAdd operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberAdd(new \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountSet operation/method
 */
if ($telephony->telephonyBillingAccountSet(new \PayPal\StructType\TelephonyBillingAccountSet()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDepositMovementModify operation/method
 */
if ($telephony->telephonyDepositMovementModify(new \PayPal\StructType\TelephonyDepositMovementModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallDo operation/method
 */
if ($telephony->telephonyClick2CallDo(new \PayPal\StructType\TelephonyClick2CallDo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpecialNumberOrder operation/method
 */
if ($telephony->telephonySpecialNumberOrder(new \PayPal\StructType\TelephonySpecialNumberOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailOptionsModify operation/method
 */
if ($telephony->telephonyVoicemailOptionsModify(new \PayPal\StructType\TelephonyVoicemailOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOldOffer operation/method
 */
if ($telephony->telephonyLineSwitchOldOffer(new \PayPal\StructType\TelephonyLineSwitchOldOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactDel operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactDel(new \PayPal\StructType\TelephonyPhonebookOnGroupContactDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareAdd operation/method
 */
if ($telephony->telephonySpareAdd(new \PayPal\StructType\TelephonySpareAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsAddCsvAttachment operation/method
 */
if ($telephony->telephonySmsAddCsvAttachment(new \PayPal\StructType\TelephonySmsAddCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDefaultPrivateHolidaysEvents operation/method
 */
if ($telephony->telephonyDefaultPrivateHolidaysEvents(new \PayPal\StructType\TelephonyDefaultPrivateHolidaysEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyToneRemoteUpload operation/method
 */
if ($telephony->telephonyToneRemoteUpload(new \PayPal\StructType\TelephonyToneRemoteUpload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberGetFrWayNamesFromInsee operation/method
 */
if ($telephony->telephonyNumberGetFrWayNamesFromInsee(new \PayPal\StructType\TelephonyNumberGetFrWayNamesFromInsee()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationMode operation/method
 */
if ($telephony->telephonyFMHuntingModificationMode(new \PayPal\StructType\TelephonyFMHuntingModificationMode()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAliasToSipOffer operation/method
 */
if ($telephony->telephonyAliasToSipOffer(new \PayPal\StructType\TelephonyAliasToSipOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserMultiSend operation/method
 */
if ($telephony->telephonySmsUserMultiSend(new \PayPal\StructType\TelephonySmsUserMultiSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetCsvAttachment operation/method
 */
if ($telephony->telephonySmsGetCsvAttachment(new \PayPal\StructType\TelephonySmsGetCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsHistory operation/method
 */
if ($telephony->telephonySmsHistory(new \PayPal\StructType\TelephonySmsHistory()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupModify operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupModify(new \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenList operation/method
 */
if ($telephony->telephonyHuntingGenericScreenList(new \PayPal\StructType\TelephonyHuntingGenericScreenList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenStatus operation/method
 */
if ($telephony->telephonyHuntingGenericScreenStatus(new \PayPal\StructType\TelephonyHuntingGenericScreenStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationMembers operation/method
 */
if ($telephony->telephonyHuntingModificationMembers(new \PayPal\StructType\TelephonyHuntingModificationMembers()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessagesDownload operation/method
 */
if ($telephony->telephonyVoicemailMessagesDownload(new \PayPal\StructType\TelephonyVoicemailMessagesDownload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignCreation operation/method
 */
if ($telephony->telephonyFaxCampaignCreation(new \PayPal\StructType\TelephonyFaxCampaignCreation()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogsNotificationOptions operation/method
 */
if ($telephony->telephonyLineLogsNotificationOptions(new \PayPal\StructType\TelephonyLineLogsNotificationOptions()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetIpRestriction operation/method
 */
if ($telephony->telephonyLineGetIpRestriction(new \PayPal\StructType\TelephonyLineGetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetTimeZoneNumber operation/method
 */
if ($telephony->telephonyGetTimeZoneNumber(new \PayPal\StructType\TelephonyGetTimeZoneNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationMembers operation/method
 */
if ($telephony->telephonyFMHuntingModificationMembers(new \PayPal\StructType\TelephonyFMHuntingModificationMembers()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookAdd operation/method
 */
if ($telephony->telephonyPhonebookAdd(new \PayPal\StructType\TelephonyPhonebookAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRestrictionModify operation/method
 */
if ($telephony->telephonyRestrictionModify(new \PayPal\StructType\TelephonyRestrictionModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRatesList operation/method
 */
if ($telephony->telephonyRatesList(new \PayPal\StructType\TelephonyRatesList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenOptions operation/method
 */
if ($telephony->telephonyHuntingGenericScreenOptions(new \PayPal\StructType\TelephonyHuntingGenericScreenOptions()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountAdd operation/method
 */
if ($telephony->telephonyBillingAccountAdd(new \PayPal\StructType\TelephonyBillingAccountAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusIsFreeKeyword operation/method
 */
if ($telephony->telephonySmsplusIsFreeKeyword(new \PayPal\StructType\TelephonySmsplusIsFreeKeyword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetCodecs operation/method
 */
if ($telephony->telephonyLineGetCodecs(new \PayPal\StructType\TelephonyLineGetCodecs()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderValidate operation/method
 */
if ($telephony->telephonySmsSenderValidate(new \PayPal\StructType\TelephonySmsSenderValidate()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationSimultaneousCalls operation/method
 */
if ($telephony->telephonyHuntingModificationSimultaneousCalls(new \PayPal\StructType\TelephonyHuntingModificationSimultaneousCalls()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryInfoGetSameSiret operation/method
 */
if ($telephony->telephonyDirectoryInfoGetSameSiret(new \PayPal\StructType\TelephonyDirectoryInfoGetSameSiret()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceSetParams operation/method
 */
if ($telephony->telephonyConferenceSetParams(new \PayPal\StructType\TelephonyConferenceSetParams()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySparePurchase operation/method
 */
if ($telephony->telephonySparePurchase(new \PayPal\StructType\TelephonySparePurchase()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignList operation/method
 */
if ($telephony->telephonyFaxCampaignList(new \PayPal\StructType\TelephonyFaxCampaignList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicGetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyNicGetMgcpIpRestriction(new \PayPal\StructType\TelephonyNicGetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetUserQuotaForUser operation/method
 */
if ($telephony->telephonySmsGetUserQuotaForUser(new \PayPal\StructType\TelephonySmsGetUserQuotaForUser()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryInfoGetSiret operation/method
 */
if ($telephony->telephonyDirectoryInfoGetSiret(new \PayPal\StructType\TelephonyDirectoryInfoGetSiret()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyModify operation/method
 */
if ($telephony->telephonyFunctionKeyModify(new \PayPal\StructType\TelephonyFunctionKeyModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberList operation/method
 */
if ($telephony->telephonyAbbreviatedNumberList(new \PayPal\StructType\TelephonyAbbreviatedNumberList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxModifyPassword operation/method
 */
if ($telephony->telephonyFaxModifyPassword(new \PayPal\StructType\TelephonyFaxModifyPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsDelete operation/method
 */
if ($telephony->telephonySmsDelete(new \PayPal\StructType\TelephonySmsDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryModifyPublication operation/method
 */
if ($telephony->telephonyDirectoryModifyPublication(new \PayPal\StructType\TelephonyDirectoryModifyPublication()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupAdd operation/method
 */
if ($telephony->telephonyPhonebookOnGroupAdd(new \PayPal\StructType\TelephonyPhonebookOnGroupAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOfferPossibility operation/method
 */
if ($telephony->telephonyLineSwitchOfferPossibility(new \PayPal\StructType\TelephonyLineSwitchOfferPossibility()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderList operation/method
 */
if ($telephony->telephonySmsSenderList(new \PayPal\StructType\TelephonySmsSenderList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySipToAliasOffer operation/method
 */
if ($telephony->telephonySipToAliasOffer(new \PayPal\StructType\TelephonySipToAliasOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyList operation/method
 */
if ($telephony->telephonyFunctionKeyList(new \PayPal\StructType\TelephonyFunctionKeyList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetCallBack operation/method
 */
if ($telephony->telephonySmsGetCallBack(new \PayPal\StructType\TelephonySmsGetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySviModify operation/method
 */
if ($telephony->telephonySviModify(new \PayPal\StructType\TelephonySviModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceDelete operation/method
 */
if ($telephony->telephonySmsplusServiceDelete(new \PayPal\StructType\TelephonySmsplusServiceDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOffer operation/method
 */
if ($telephony->telephonyLineSwitchOffer(new \PayPal\StructType\TelephonyLineSwitchOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberCheck operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberCheck(new \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberCheck()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDelClosureEvents operation/method
 */
if ($telephony->telephonyDelClosureEvents(new \PayPal\StructType\TelephonyDelClosureEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFreefaxToVoicefaxCheckList operation/method
 */
if ($telephony->telephonyFreefaxToVoicefaxCheckList(new \PayPal\StructType\TelephonyFreefaxToVoicefaxCheckList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailModifyPassword operation/method
 */
if ($telephony->telephonyVoicemailModifyPassword(new \PayPal\StructType\TelephonyVoicemailModifyPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareCapabilities operation/method
 */
if ($telephony->telephonySpareCapabilities(new \PayPal\StructType\TelephonySpareCapabilities()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsDel operation/method
 */
if ($telephony->telephonyPhonebookOnSmsDel(new \PayPal\StructType\TelephonyPhonebookOnSmsDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookShare operation/method
 */
if ($telephony->telephonyPhonebookShare(new \PayPal\StructType\TelephonyPhonebookShare()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSetUserQuota operation/method
 */
if ($telephony->telephonySmsSetUserQuota(new \PayPal\StructType\TelephonySmsSetUserQuota()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsHistoryCsv operation/method
 */
if ($telephony->telephonySmsHistoryCsv(new \PayPal\StructType\TelephonySmsHistoryCsv()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupList operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupList(new \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogs operation/method
 */
if ($telephony->telephonyLineLogs(new \PayPal\StructType\TelephonyLineLogs()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareReplace operation/method
 */
if ($telephony->telephonySpareReplace(new \PayPal\StructType\TelephonySpareReplace()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserList operation/method
 */
if ($telephony->telephonyClick2CallUserList(new \PayPal\StructType\TelephonyClick2CallUserList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMailboxList operation/method
 */
if ($telephony->telephonyVoicemailMailboxList(new \PayPal\StructType\TelephonyVoicemailMailboxList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignDetails operation/method
 */
if ($telephony->telephonyFaxCampaignDetails(new \PayPal\StructType\TelephonyFaxCampaignDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupDel operation/method
 */
if ($telephony->telephonyPhonebookOnGroupDel(new \PayPal\StructType\TelephonyPhonebookOnGroupDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupList operation/method
 */
if ($telephony->telephonyPhonebookOnGroupList(new \PayPal\StructType\TelephonyPhonebookOnGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpecialNumberCustomList operation/method
 */
if ($telephony->telephonySpecialNumberCustomList(new \PayPal\StructType\TelephonySpecialNumberCustomList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationSimultaneousCalls operation/method
 */
if ($telephony->telephonyFMHuntingModificationSimultaneousCalls(new \PayPal\StructType\TelephonyFMHuntingModificationSimultaneousCalls()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMailboxDownload operation/method
 */
if ($telephony->telephonyVoicemailMailboxDownload(new \PayPal\StructType\TelephonyVoicemailMailboxDownload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicGetIpRestriction operation/method
 */
if ($telephony->telephonyNicGetIpRestriction(new \PayPal\StructType\TelephonyNicGetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetClosureEventsAsArray operation/method
 */
if ($telephony->telephonyGetClosureEventsAsArray(new \PayPal\StructType\TelephonyGetClosureEventsAsArray()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactDel operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactDel(new \PayPal\StructType\TelephonyPhonebookOnSmsContactDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyReversmentsRefundIsPending operation/method
 */
if ($telephony->telephonyReversmentsRefundIsPending(new \PayPal\StructType\TelephonyReversmentsRefundIsPending()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListInfoModify operation/method
 */
if ($telephony->telephonyScreenListInfoModify(new \PayPal\StructType\TelephonyScreenListInfoModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceReversableTicketsList operation/method
 */
if ($telephony->telephonySmsplusServiceReversableTicketsList(new \PayPal\StructType\TelephonySmsplusServiceReversableTicketsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenStatusModify operation/method
 */
if ($telephony->telephonyHuntingGenericScreenStatusModify(new \PayPal\StructType\TelephonyHuntingGenericScreenStatusModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsBlacklistedSendersList operation/method
 */
if ($telephony->telephonySmsBlacklistedSendersList(new \PayPal\StructType\TelephonySmsBlacklistedSendersList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactAdd operation/method
 */
if ($telephony->telephonyPhonebookContactAdd(new \PayPal\StructType\TelephonyPhonebookContactAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPortabilityOrderSpecialNumber operation/method
 */
if ($telephony->telephonyPortabilityOrderSpecialNumber(new \PayPal\StructType\TelephonyPortabilityOrderSpecialNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserSetCallBack operation/method
 */
if ($telephony->telephonySmsUserSetCallBack(new \PayPal\StructType\TelephonySmsUserSetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupModify operation/method
 */
if ($telephony->telephonyPhonebookOnGroupModify(new \PayPal\StructType\TelephonyPhonebookOnGroupModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOldOfferPossibility operation/method
 */
if ($telephony->telephonyLineSwitchOldOfferPossibility(new \PayPal\StructType\TelephonyLineSwitchOldOfferPossibility()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceList operation/method
 */
if ($telephony->telephonySmsplusServiceList(new \PayPal\StructType\TelephonySmsplusServiceList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationAnonymousCallRejection
 * operation/method
 */
if ($telephony->telephonyHuntingModificationAnonymousCallRejection(new \PayPal\StructType\TelephonyHuntingModificationAnonymousCallRejection()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberGetBillingAccount operation/method
 */
if ($telephony->telephonyNumberGetBillingAccount(new \PayPal\StructType\TelephonyNumberGetBillingAccount()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTonesOptionsList operation/method
 */
if ($telephony->telephonyTonesOptionsList(new \PayPal\StructType\TelephonyTonesOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareList operation/method
 */
if ($telephony->telephonySpareList(new \PayPal\StructType\TelephonySpareList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyListSummationCallsFromNumber operation/method
 */
if ($telephony->telephonyListSummationCallsFromNumber(new \PayPal\StructType\TelephonyListSummationCallsFromNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceGetParams operation/method
 */
if ($telephony->telephonyConferenceGetParams(new \PayPal\StructType\TelephonyConferenceGetParams()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactModify operation/method
 */
if ($telephony->telephonyPhonebookContactModify(new \PayPal\StructType\TelephonyPhonebookContactModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineList operation/method
 */
if ($telephony->telephonyLineList(new \PayPal\StructType\TelephonyLineList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineOptionsModify operation/method
 */
if ($telephony->telephonyLineOptionsModify(new \PayPal\StructType\TelephonyLineOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenSet operation/method
 */
if ($telephony->telephonyHuntingGenericScreenSet(new \PayPal\StructType\TelephonyHuntingGenericScreenSet()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignStartStop operation/method
 */
if ($telephony->telephonyFaxCampaignStartStop(new \PayPal\StructType\TelephonyFaxCampaignStartStop()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryModifyAddress operation/method
 */
if ($telephony->telephonyDirectoryModifyAddress(new \PayPal\StructType\TelephonyDirectoryModifyAddress()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicSetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyNicSetMgcpIpRestriction(new \PayPal\StructType\TelephonyNicSetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySecurityDepositCredit operation/method
 */
if ($telephony->telephonySecurityDepositCredit(new \PayPal\StructType\TelephonySecurityDepositCredit()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineOrder operation/method
 */
if ($telephony->telephonyLineOrder(new \PayPal\StructType\TelephonyLineOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceAction operation/method
 */
if ($telephony->telephonyConferenceAction(new \PayPal\StructType\TelephonyConferenceAction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyDel operation/method
 */
if ($telephony->telephonyFunctionKeyDel(new \PayPal\StructType\TelephonyFunctionKeyDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicGetSipDomain operation/method
 */
if ($telephony->telephonyNicGetSipDomain(new \PayPal\StructType\TelephonyNicGetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetClosureEventsAsICS operation/method
 */
if ($telephony->telephonyGetClosureEventsAsICS(new \PayPal\StructType\TelephonyGetClosureEventsAsICS()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserCreditLeft operation/method
 */
if ($telephony->telephonySmsUserCreditLeft(new \PayPal\StructType\TelephonySmsUserCreditLeft()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPortabilityOrder operation/method
 */
if ($telephony->telephonyPortabilityOrder(new \PayPal\StructType\TelephonyPortabilityOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMailboxDelete operation/method
 */
if ($telephony->telephonyVoicemailMailboxDelete(new \PayPal\StructType\TelephonyVoicemailMailboxDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountDel operation/method
 */
if ($telephony->telephonyBillingAccountDel(new \PayPal\StructType\TelephonyBillingAccountDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberClean operation/method
 */
if ($telephony->telephonyNumberClean(new \PayPal\StructType\TelephonyNumberClean()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneOperation operation/method
 */
if ($telephony->telephonyPlugAndPhoneOperation(new \PayPal\StructType\TelephonyPlugAndPhoneOperation()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactModify operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactModify(new \PayPal\StructType\TelephonyPhonebookOnSmsContactModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsModify operation/method
 */
if ($telephony->telephonyPhonebookOnSmsModify(new \PayPal\StructType\TelephonyPhonebookOnSmsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSetQuotaNotification operation/method
 */
if ($telephony->telephonySmsSetQuotaNotification(new \PayPal\StructType\TelephonySmsSetQuotaNotification()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserList operation/method
 */
if ($telephony->telephonySmsUserList(new \PayPal\StructType\TelephonySmsUserList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingInfo operation/method
 */
if ($telephony->telephonyHuntingInfo(new \PayPal\StructType\TelephonyHuntingInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactList operation/method
 */
if ($telephony->telephonyPhonebookContactList(new \PayPal\StructType\TelephonyPhonebookContactList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserPassword operation/method
 */
if ($telephony->telephonySmsUserPassword(new \PayPal\StructType\TelephonySmsUserPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetOfferPrices operation/method
 */
if ($telephony->telephonyLineGetOfferPrices(new \PayPal\StructType\TelephonyLineGetOfferPrices()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetQuotaNotification operation/method
 */
if ($telephony->telephonySmsGetQuotaNotification(new \PayPal\StructType\TelephonySmsGetQuotaNotification()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationMode operation/method
 */
if ($telephony->telephonyHuntingModificationMode(new \PayPal\StructType\TelephonyHuntingModificationMode()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListBlackWhiteChoice operation/method
 */
if ($telephony->telephonyScreenListBlackWhiteChoice(new \PayPal\StructType\TelephonyScreenListBlackWhiteChoice()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsDeleteCsvAttachment operation/method
 */
if ($telephony->telephonySmsDeleteCsvAttachment(new \PayPal\StructType\TelephonySmsDeleteCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberZoneAndPrefixList operation/method
 */
if ($telephony->telephonyNumberZoneAndPrefixList(new \PayPal\StructType\TelephonyNumberZoneAndPrefixList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetSipDomain operation/method
 */
if ($telephony->telephonyLineSetSipDomain(new \PayPal\StructType\TelephonyLineSetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberDel operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberDel(new \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactList operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactList(new \PayPal\StructType\TelephonyPhonebookOnGroupContactList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceReversableTicketsSummary operation/method
 */
if ($telephony->telephonySmsplusServiceReversableTicketsSummary(new \PayPal\StructType\TelephonySmsplusServiceReversableTicketsSummary()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDeleteLine operation/method
 */
if ($telephony->telephonyDeleteLine(new \PayPal\StructType\TelephonyDeleteLine()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySetTimeZoneNumber operation/method
 */
if ($telephony->telephonySetTimeZoneNumber(new \PayPal\StructType\TelephonySetTimeZoneNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicSetIpRestriction operation/method
 */
if ($telephony->telephonyNicSetIpRestriction(new \PayPal\StructType\TelephonyNicSetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPortabilityStatus operation/method
 */
if ($telephony->telephonyPortabilityStatus(new \PayPal\StructType\TelephonyPortabilityStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySecurityDepositInfo operation/method
 */
if ($telephony->telephonySecurityDepositInfo(new \PayPal\StructType\TelephonySecurityDepositInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsListCsvAttachment operation/method
 */
if ($telephony->telephonySmsListCsvAttachment(new \PayPal\StructType\TelephonySmsListCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsCancelSending operation/method
 */
if ($telephony->telephonySmsCancelSending(new \PayPal\StructType\TelephonySmsCancelSending()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListInfo operation/method
 */
if ($telephony->telephonyScreenListInfo(new \PayPal\StructType\TelephonyScreenListInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogsOnGroup operation/method
 */
if ($telephony->telephonyLineLogsOnGroup(new \PayPal\StructType\TelephonyLineLogsOnGroup()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyLineGetMgcpIpRestriction(new \PayPal\StructType\TelephonyLineGetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineDetails operation/method
 */
if ($telephony->telephonyLineDetails(new \PayPal\StructType\TelephonyLineDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactDel operation/method
 */
if ($telephony->telephonyPhonebookContactDel(new \PayPal\StructType\TelephonyPhonebookContactDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRatesListCsv operation/method
 */
if ($telephony->telephonyRatesListCsv(new \PayPal\StructType\TelephonyRatesListCsv()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceGetInfos operation/method
 */
if ($telephony->telephonyConferenceGetInfos(new \PayPal\StructType\TelephonyConferenceGetInfos()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactList operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactList(new \PayPal\StructType\TelephonyPhonebookOnSmsContactList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactAdd operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactAdd(new \PayPal\StructType\TelephonyPhonebookOnSmsContactAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationAnonymousCallRejection
 * operation/method
 */
if ($telephony->telephonyFMHuntingModificationAnonymousCallRejection(new \PayPal\StructType\TelephonyFMHuntingModificationAnonymousCallRejection()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDdiModify operation/method
 */
if ($telephony->telephonyDdiModify(new \PayPal\StructType\TelephonyDdiModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRedirectInfo operation/method
 */
if ($telephony->telephonyRedirectInfo(new \PayPal\StructType\TelephonyRedirectInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSend operation/method
 */
if ($telephony->telephonySmsSend(new \PayPal\StructType\TelephonySmsSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetSipDomain operation/method
 */
if ($telephony->telephonyLineGetSipDomain(new \PayPal\StructType\TelephonyLineGetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyToneDelete operation/method
 */
if ($telephony->telephonyToneDelete(new \PayPal\StructType\TelephonyToneDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyLineSetMgcpIpRestriction(new \PayPal\StructType\TelephonyLineSetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactModify operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactModify(new \PayPal\StructType\TelephonyPhonebookOnGroupContactModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListBlackWhiteChoiceModify operation/method
 */
if ($telephony->telephonyScreenListBlackWhiteChoiceModify(new \PayPal\StructType\TelephonyScreenListBlackWhiteChoiceModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceDetails operation/method
 */
if ($telephony->telephonySmsplusServiceDetails(new \PayPal\StructType\TelephonySmsplusServiceDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupDel operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupDel(new \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderDescription operation/method
 */
if ($telephony->telephonySmsSenderDescription(new \PayPal\StructType\TelephonySmsSenderDescription()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberListPaginated operation/method
 */
if ($telephony->telephonyAbbreviatedNumberListPaginated(new \PayPal\StructType\TelephonyAbbreviatedNumberListPaginated()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySetDefaultPrivateHolidaysEvents operation/method
 */
if ($telephony->telephonySetDefaultPrivateHolidaysEvents(new \PayPal\StructType\TelephonySetDefaultPrivateHolidaysEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareServiceList operation/method
 */
if ($telephony->telephonySpareServiceList(new \PayPal\StructType\TelephonySpareServiceList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserListCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserListCsvAttachment(new \PayPal\StructType\TelephonySmsUserListCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCallList operation/method
 */
if ($telephony->telephonyFaxCallList(new \PayPal\StructType\TelephonyFaxCallList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserSend operation/method
 */
if ($telephony->telephonySmsUserSend(new \PayPal\StructType\TelephonySmsUserSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupGroupList operation/method
 */
if ($telephony->telephonyPhonebookOnGroupGroupList(new \PayPal\StructType\TelephonyPhonebookOnGroupGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserPassword operation/method
 */
if ($telephony->telephonyClick2CallUserPassword(new \PayPal\StructType\TelephonyClick2CallUserPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetUserQuota operation/method
 */
if ($telephony->telephonySmsGetUserQuota(new \PayPal\StructType\TelephonySmsGetUserQuota()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderDelete operation/method
 */
if ($telephony->telephonySmsSenderDelete(new \PayPal\StructType\TelephonySmsSenderDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyToneStatus operation/method
 */
if ($telephony->telephonyToneStatus(new \PayPal\StructType\TelephonyToneStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDdiInfo operation/method
 */
if ($telephony->telephonyDdiInfo(new \PayPal\StructType\TelephonyDdiInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGroupList operation/method
 */
if ($telephony->telephonyHuntingGroupList(new \PayPal\StructType\TelephonyHuntingGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberList operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberList(new \PayPal\StructType\TelephonyTrunkExternalDisplayedNumberList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryListWayType operation/method
 */
if ($telephony->telephonyDirectoryListWayType(new \PayPal\StructType\TelephonyDirectoryListWayType()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserHistoryCsv operation/method
 */
if ($telephony->telephonySmsUserHistoryCsv(new \PayPal\StructType\TelephonySmsUserHistoryCsv()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyCallList operation/method
 */
if ($telephony->telephonyCallList(new \PayPal\StructType\TelephonyCallList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetDefaultPrivateHolidaysEvents operation/method
 */
if ($telephony->telephonyGetDefaultPrivateHolidaysEvents(new \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusShortCodesList operation/method
 */
if ($telephony->telephonySmsplusShortCodesList(new \PayPal\StructType\TelephonySmsplusShortCodesList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAliasToSipPossibilities operation/method
 */
if ($telephony->telephonyAliasToSipPossibilities(new \PayPal\StructType\TelephonyAliasToSipPossibilities()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupAdd operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupAdd(new \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationQueue operation/method
 */
if ($telephony->telephonyHuntingModificationQueue(new \PayPal\StructType\TelephonyHuntingModificationQueue()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryInfo operation/method
 */
if ($telephony->telephonyDirectoryInfo(new \PayPal\StructType\TelephonyDirectoryInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillDetails operation/method
 */
if ($telephony->telephonyBillDetails(new \PayPal\StructType\TelephonyBillDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogsNotificationOptionsModify operation/method
 */
if ($telephony->telephonyLineLogsNotificationOptionsModify(new \PayPal\StructType\TelephonyLineLogsNotificationOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallDoBySession operation/method
 */
if ($telephony->telephonyClick2CallDoBySession(new \PayPal\StructType\TelephonyClick2CallDoBySession()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberAdd operation/method
 */
if ($telephony->telephonyAbbreviatedNumberAdd(new \PayPal\StructType\TelephonyAbbreviatedNumberAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberOrder operation/method
 */
if ($telephony->telephonyNumberOrder(new \PayPal\StructType\TelephonyNumberOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetIpRestriction operation/method
 */
if ($telephony->telephonyLineSetIpRestriction(new \PayPal\StructType\TelephonyLineSetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetCodecs operation/method
 */
if ($telephony->telephonyLineSetCodecs(new \PayPal\StructType\TelephonyLineSetCodecs()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberCityForZoneList operation/method
 */
if ($telephony->telephonyNumberCityForZoneList(new \PayPal\StructType\TelephonyNumberCityForZoneList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTonesOptionsModify operation/method
 */
if ($telephony->telephonyTonesOptionsModify(new \PayPal\StructType\TelephonyTonesOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessagesRemoteUpload operation/method
 */
if ($telephony->telephonyVoicemailMessagesRemoteUpload(new \PayPal\StructType\TelephonyVoicemailMessagesRemoteUpload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferInfo operation/method
 */
if ($telephony->telephonyOfferInfo(new \PayPal\StructType\TelephonyOfferInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookDel operation/method
 */
if ($telephony->telephonyPhonebookDel(new \PayPal\StructType\TelephonyPhonebookDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserAdd operation/method
 */
if ($telephony->telephonySmsUserAdd(new \PayPal\StructType\TelephonySmsUserAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserHistory operation/method
 */
if ($telephony->telephonySmsUserHistory(new \PayPal\StructType\TelephonySmsUserHistory()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserGetCallBack operation/method
 */
if ($telephony->telephonySmsUserGetCallBack(new \PayPal\StructType\TelephonySmsUserGetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferModifyPassword operation/method
 */
if ($telephony->telephonyOfferModifyPassword(new \PayPal\StructType\TelephonyOfferModifyPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyAdd operation/method
 */
if ($telephony->telephonyFunctionKeyAdd(new \PayPal\StructType\TelephonyFunctionKeyAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookList operation/method
 */
if ($telephony->telephonyPhonebookList(new \PayPal\StructType\TelephonyPhonebookList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneReset operation/method
 */
if ($telephony->telephonyPlugAndPhoneReset(new \PayPal\StructType\TelephonyPlugAndPhoneReset()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareInfo operation/method
 */
if ($telephony->telephonySpareInfo(new \PayPal\StructType\TelephonySpareInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserDel operation/method
 */
if ($telephony->telephonySmsUserDel(new \PayPal\StructType\TelephonySmsUserDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessagesStatus operation/method
 */
if ($telephony->telephonyVoicemailMessagesStatus(new \PayPal\StructType\TelephonyVoicemailMessagesStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookModify operation/method
 */
if ($telephony->telephonyPhonebookModify(new \PayPal\StructType\TelephonyPhonebookModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferModifyName operation/method
 */
if ($telephony->telephonyOfferModifyName(new \PayPal\StructType\TelephonyOfferModifyName()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSetCallBack operation/method
 */
if ($telephony->telephonySmsSetCallBack(new \PayPal\StructType\TelephonySmsSetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookGroupList operation/method
 */
if ($telephony->telephonyPhonebookGroupList(new \PayPal\StructType\TelephonyPhonebookGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountInfo operation/method
 */
if ($telephony->telephonyBillingAccountInfo(new \PayPal\StructType\TelephonyBillingAccountInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderAdd operation/method
 */
if ($telephony->telephonySmsSenderAdd(new \PayPal\StructType\TelephonySmsSenderAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineConsumptionCSVByMail operation/method
 */
if ($telephony->telephonyLineConsumptionCSVByMail(new \PayPal\StructType\TelephonyLineConsumptionCSVByMail()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserDeleteCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserDeleteCsvAttachment(new \PayPal\StructType\TelephonySmsUserDeleteCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyListReversableCallsFromNumber operation/method
 */
if ($telephony->telephonyListReversableCallsFromNumber(new \PayPal\StructType\TelephonyListReversableCallsFromNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountList operation/method
 */
if ($telephony->telephonyBillingAccountList(new \PayPal\StructType\TelephonyBillingAccountList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetQuotaNotificationForUser operation/method
 */
if ($telephony->telephonySmsGetQuotaNotificationForUser(new \PayPal\StructType\TelephonySmsGetQuotaNotificationForUser()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyChangeNicModify operation/method
 */
if ($telephony->telephonyChangeNicModify(new \PayPal\StructType\TelephonyChangeNicModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySviInfo operation/method
 */
if ($telephony->telephonySviInfo(new \PayPal\StructType\TelephonySviInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserAdd operation/method
 */
if ($telephony->telephonyClick2CallUserAdd(new \PayPal\StructType\TelephonyClick2CallUserAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsBlacklistedSendersDelete operation/method
 */
if ($telephony->telephonySmsBlacklistedSendersDelete(new \PayPal\StructType\TelephonySmsBlacklistedSendersDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceAdd operation/method
 */
if ($telephony->telephonySmsplusServiceAdd(new \PayPal\StructType\TelephonySmsplusServiceAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareCreateRMA operation/method
 */
if ($telephony->telephonySpareCreateRMA(new \PayPal\StructType\TelephonySpareCreateRMA()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceEdit operation/method
 */
if ($telephony->telephonySmsplusServiceEdit(new \PayPal\StructType\TelephonySmsplusServiceEdit()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenOptionsModify operation/method
 */
if ($telephony->telephonyHuntingGenericScreenOptionsModify(new \PayPal\StructType\TelephonyHuntingGenericScreenOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneInfo operation/method
 */
if ($telephony->telephonyPlugAndPhoneInfo(new \PayPal\StructType\TelephonyPlugAndPhoneInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignDelete operation/method
 */
if ($telephony->telephonyFaxCampaignDelete(new \PayPal\StructType\TelephonyFaxCampaignDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyReversmentsRefundFromBillingAccount operation/method
 */
if ($telephony->telephonyReversmentsRefundFromBillingAccount(new \PayPal\StructType\TelephonyReversmentsRefundFromBillingAccount()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessageDelete operation/method
 */
if ($telephony->telephonyVoicemailMessageDelete(new \PayPal\StructType\TelephonyVoicemailMessageDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineOptionsList operation/method
 */
if ($telephony->telephonyLineOptionsList(new \PayPal\StructType\TelephonyLineOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareServiceInfo operation/method
 */
if ($telephony->telephonySpareServiceInfo(new \PayPal\StructType\TelephonySpareServiceInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberModify operation/method
 */
if ($telephony->telephonyAbbreviatedNumberModify(new \PayPal\StructType\TelephonyAbbreviatedNumberModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferSimultaneousLinesModify operation/method
 */
if ($telephony->telephonyOfferSimultaneousLinesModify(new \PayPal\StructType\TelephonyOfferSimultaneousLinesModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Samples for Sqlprive ServiceType
 */
$sqlprive = new \PayPal\ServiceType\Sqlprive($options);
/**
 * Sample call for sqlpriveMysqlRestart operation/method
 */
if ($sqlprive->sqlpriveMysqlRestart(new \PayPal\StructType\SqlpriveMysqlRestart()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlVersion operation/method
 */
if ($sqlprive->sqlpriveMysqlVersion(new \PayPal\StructType\SqlpriveMysqlVersion()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseImportFromFile operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseImportFromFile(new \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlUserList operation/method
 */
if ($sqlprive->sqlpriveMysqlUserList(new \PayPal\StructType\SqlpriveMysqlUserList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlRamUsed operation/method
 */
if ($sqlprive->sqlpriveMysqlRamUsed(new \PayPal\StructType\SqlpriveMysqlRamUsed()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveAlertInfo operation/method
 */
if ($sqlprive->sqlpriveAlertInfo(new \PayPal\StructType\SqlpriveAlertInfo()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveList operation/method
 */
if ($sqlprive->sqlpriveList(new \PayPal\StructType\SqlpriveList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlLogs operation/method
 */
if ($sqlprive->sqlpriveMysqlLogs(new \PayPal\StructType\SqlpriveMysqlLogs()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveCronSet operation/method
 */
if ($sqlprive->sqlpriveCronSet(new \PayPal\StructType\SqlpriveCronSet()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabasePrivilegeList operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabasePrivilegeList(new \PayPal\StructType\SqlpriveMysqlDatabasePrivilegeList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveCronDel operation/method
 */
if ($sqlprive->sqlpriveCronDel(new \PayPal\StructType\SqlpriveCronDel()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseImportFromHost operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseImportFromHost(new \PayPal\StructType\SqlpriveMysqlDatabaseImportFromHost()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveAlertSet operation/method
 */
if ($sqlprive->sqlpriveAlertSet(new \PayPal\StructType\SqlpriveAlertSet()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlOvhMyAdmin operation/method
 */
if ($sqlprive->sqlpriveMysqlOvhMyAdmin(new \PayPal\StructType\SqlpriveMysqlOvhMyAdmin()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseList operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseList(new \PayPal\StructType\SqlpriveMysqlDatabaseList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlProcessList operation/method
 */
if ($sqlprive->sqlpriveMysqlProcessList(new \PayPal\StructType\SqlpriveMysqlProcessList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlActivateOvhManagement operation/method
 */
if ($sqlprive->sqlpriveMysqlActivateOvhManagement(new \PayPal\StructType\SqlpriveMysqlActivateOvhManagement()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlGetPossibleDump operation/method
 */
if ($sqlprive->sqlpriveMysqlGetPossibleDump(new \PayPal\StructType\SqlpriveMysqlGetPossibleDump()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveFtpPassword operation/method
 */
if ($sqlprive->sqlpriveFtpPassword(new \PayPal\StructType\SqlpriveFtpPassword()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlRootPassword operation/method
 */
if ($sqlprive->sqlpriveMysqlRootPassword(new \PayPal\StructType\SqlpriveMysqlRootPassword()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlProcessKill operation/method
 */
if ($sqlprive->sqlpriveMysqlProcessKill(new \PayPal\StructType\SqlpriveMysqlProcessKill()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseSave operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseSave(new \PayPal\StructType\SqlpriveMysqlDatabaseSave()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveCronGet operation/method
 */
if ($sqlprive->sqlpriveCronGet(new \PayPal\StructType\SqlpriveCronGet()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Samples for Logout ServiceType
 */
$logout = new \PayPal\ServiceType\Logout($options);
/**
 * Sample call for logout operation/method
 */
if ($logout->logout(new \PayPal\StructType\Logout()) !== false) {
    print_r($logout->getResult());
} else {
    print_r($logout->getLastError());
}
/**
 * Samples for Multi ServiceType
 */
$multi = new \PayPal\ServiceType\Multi($options);
/**
 * Sample call for multiFtpChangeDirectory operation/method
 */
if ($multi->multiFtpChangeDirectory(new \PayPal\StructType\MultiFtpChangeDirectory()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpChangePassword operation/method
 */
if ($multi->multiFtpChangePassword(new \PayPal\StructType\MultiFtpChangePassword()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpList operation/method
 */
if ($multi->multiFtpList(new \PayPal\StructType\MultiFtpList()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpAdd operation/method
 */
if ($multi->multiFtpAdd(new \PayPal\StructType\MultiFtpAdd()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainList operation/method
 */
if ($multi->multiDomainList(new \PayPal\StructType\MultiDomainList()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpDel operation/method
 */
if ($multi->multiFtpDel(new \PayPal\StructType\MultiFtpDel()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainAdd operation/method
 */
if ($multi->multiDomainAdd(new \PayPal\StructType\MultiDomainAdd()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainModify operation/method
 */
if ($multi->multiDomainModify(new \PayPal\StructType\MultiDomainModify()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainInfo operation/method
 */
if ($multi->multiDomainInfo(new \PayPal\StructType\MultiDomainInfo()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainDel operation/method
 */
if ($multi->multiDomainDel(new \PayPal\StructType\MultiDomainDel()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Samples for Dedicated ServiceType
 */
$dedicated = new \PayPal\ServiceType\Dedicated($options);
/**
 * Sample call for dedicatedReverseDel operation/method
 */
if ($dedicated->dedicatedReverseDel(new \PayPal\StructType\DedicatedReverseDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedDelServiceMonitoringAlert operation/method
 */
if ($dedicated->dedicatedDelServiceMonitoringAlert(new \PayPal\StructType\DedicatedDelServiceMonitoringAlert()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedAddServiceMonitoringAlertSMS operation/method
 */
if ($dedicated->dedicatedAddServiceMonitoringAlertSMS(new \PayPal\StructType\DedicatedAddServiceMonitoringAlertSMS()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingList operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingList(new \PayPal\StructType\DedicatedIpLoadBalancingList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupReinstallConfiguration operation/method
 */
if ($dedicated->dedicatedBackupReinstallConfiguration(new \PayPal\StructType\DedicatedBackupReinstallConfiguration()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetHisto operation/method
 */
if ($dedicated->dedicatedBackupGetHisto(new \PayPal\StructType\DedicatedBackupGetHisto()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupUpdate operation/method
 */
if ($dedicated->dedicatedBackupUpdate(new \PayPal\StructType\DedicatedBackupUpdate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootGetRescueEmail operation/method
 */
if ($dedicated->dedicatedNetbootGetRescueEmail(new \PayPal\StructType\DedicatedNetbootGetRescueEmail()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRtmListBackdoor operation/method
 */
if ($dedicated->dedicatedRtmListBackdoor(new \PayPal\StructType\DedicatedRtmListBackdoor()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringNotificationCreate operation/method
 */
if ($dedicated->dedicatedMonitoringNotificationCreate(new \PayPal\StructType\DedicatedMonitoringNotificationCreate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupList operation/method
 */
if ($dedicated->dedicatedBackupList(new \PayPal\StructType\DedicatedBackupList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootGetAll operation/method
 */
if ($dedicated->dedicatedNetbootGetAll(new \PayPal\StructType\DedicatedNetbootGetAll()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpAvailableGetList operation/method
 */
if ($dedicated->dedicatedVirtualMacIpAvailableGetList(new \PayPal\StructType\DedicatedVirtualMacIpAvailableGetList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringSMSCreate operation/method
 */
if ($dedicated->dedicatedMonitoringSMSCreate(new \PayPal\StructType\DedicatedMonitoringSMSCreate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeQuery operation/method
 */
if ($dedicated->dedicatedRipeQuery(new \PayPal\StructType\DedicatedRipeQuery()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupFtpPassword operation/method
 */
if ($dedicated->dedicatedBackupFtpPassword(new \PayPal\StructType\DedicatedBackupFtpPassword()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRtmBackdoorUpdateAlert operation/method
 */
if ($dedicated->dedicatedRtmBackdoorUpdateAlert(new \PayPal\StructType\DedicatedRtmBackdoorUpdateAlert()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSAdd operation/method
 */
if ($dedicated->dedicatedSecondaryDNSAdd(new \PayPal\StructType\DedicatedSecondaryDNSAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRtmGetStatus operation/method
 */
if ($dedicated->dedicatedRtmGetStatus(new \PayPal\StructType\DedicatedRtmGetStatus()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootGetAvailable operation/method
 */
if ($dedicated->dedicatedNetbootGetAvailable(new \PayPal\StructType\DedicatedNetbootGetAvailable()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMailinglistGetAllowed operation/method
 */
if ($dedicated->dedicatedMailinglistGetAllowed(new \PayPal\StructType\DedicatedMailinglistGetAllowed()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupInfo operation/method
 */
if ($dedicated->dedicatedBackupInfo(new \PayPal\StructType\DedicatedBackupInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeAdd operation/method
 */
if ($dedicated->dedicatedFailoverRipeAdd(new \PayPal\StructType\DedicatedFailoverRipeAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcClientRuleAdd operation/method
 */
if ($dedicated->dedicatedFilterIrcClientRuleAdd(new \PayPal\StructType\DedicatedFilterIrcClientRuleAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallationTemplateList operation/method
 */
if ($dedicated->dedicatedInstallationTemplateList(new \PayPal\StructType\DedicatedInstallationTemplateList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetCalendar operation/method
 */
if ($dedicated->dedicatedBackupGetCalendar(new \PayPal\StructType\DedicatedBackupGetCalendar()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingServerDel operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingServerDel(new \PayPal\StructType\DedicatedIpLoadBalancingServerDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedEditServiceMonitoringItem operation/method
 */
if ($dedicated->dedicatedEditServiceMonitoringItem(new \PayPal\StructType\DedicatedEditServiceMonitoringItem()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPServerList operation/method
 */
if ($dedicated->dedicatedIPForUDPServerList(new \PayPal\StructType\DedicatedIPForUDPServerList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupSet operation/method
 */
if ($dedicated->dedicatedBackupSet(new \PayPal\StructType\DedicatedBackupSet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpDelete operation/method
 */
if ($dedicated->dedicatedVirtualMacIpDelete(new \PayPal\StructType\DedicatedVirtualMacIpDelete()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeSplit operation/method
 */
if ($dedicated->dedicatedFailoverRipeSplit(new \PayPal\StructType\DedicatedFailoverRipeSplit()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseInfo operation/method
 */
if ($dedicated->dedicatedReverseInfo(new \PayPal\StructType\DedicatedReverseInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedCapabilitiesGetAll operation/method
 */
if ($dedicated->dedicatedCapabilitiesGetAll(new \PayPal\StructType\DedicatedCapabilitiesGetAll()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupIncludeAdd operation/method
 */
if ($dedicated->dedicatedBackupIncludeAdd(new \PayPal\StructType\DedicatedBackupIncludeAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeList operation/method
 */
if ($dedicated->dedicatedFailoverRipeList(new \PayPal\StructType\DedicatedFailoverRipeList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceAdd operation/method
 */
if ($dedicated->dedicatedMonitoringServiceAdd(new \PayPal\StructType\DedicatedMonitoringServiceAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedHardRebootDo operation/method
 */
if ($dedicated->dedicatedHardRebootDo(new \PayPal\StructType\DedicatedHardRebootDo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseList operation/method
 */
if ($dedicated->dedicatedReverseList(new \PayPal\StructType\DedicatedReverseList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupFtpAdd operation/method
 */
if ($dedicated->dedicatedBackupFtpAdd(new \PayPal\StructType\DedicatedBackupFtpAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpUsedGetList operation/method
 */
if ($dedicated->dedicatedVirtualMacIpUsedGetList(new \PayPal\StructType\DedicatedVirtualMacIpUsedGetList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootInfo operation/method
 */
if ($dedicated->dedicatedNetbootInfo(new \PayPal\StructType\DedicatedNetbootInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingAdd operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingAdd(new \PayPal\StructType\DedicatedIpLoadBalancingAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedAvailableNotificationNicsGet operation/method
 */
if ($dedicated->dedicatedAvailableNotificationNicsGet(new \PayPal\StructType\DedicatedAvailableNotificationNicsGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceDel operation/method
 */
if ($dedicated->dedicatedMonitoringServiceDel(new \PayPal\StructType\DedicatedMonitoringServiceDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingServerStateModify operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingServerStateModify(new \PayPal\StructType\DedicatedIpLoadBalancingServerStateModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseModify operation/method
 */
if ($dedicated->dedicatedReverseModify(new \PayPal\StructType\DedicatedReverseModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverList operation/method
 */
if ($dedicated->dedicatedFailoverList(new \PayPal\StructType\DedicatedFailoverList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSInfo operation/method
 */
if ($dedicated->dedicatedSecondaryDNSInfo(new \PayPal\StructType\DedicatedSecondaryDNSInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeUpdateInetnum operation/method
 */
if ($dedicated->dedicatedRipeUpdateInetnum(new \PayPal\StructType\DedicatedRipeUpdateInetnum()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetAvailableNetworkFromCountry operation/method
 */
if ($dedicated->dedicatedGetAvailableNetworkFromCountry(new \PayPal\StructType\DedicatedGetAvailableNetworkFromCountry()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverAdd operation/method
 */
if ($dedicated->dedicatedFailoverAdd(new \PayPal\StructType\DedicatedFailoverAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcServerRuleList operation/method
 */
if ($dedicated->dedicatedFilterIrcServerRuleList(new \PayPal\StructType\DedicatedFilterIrcServerRuleList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeCreateOrganisation operation/method
 */
if ($dedicated->dedicatedRipeCreateOrganisation(new \PayPal\StructType\DedicatedRipeCreateOrganisation()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupExcludeAdd operation/method
 */
if ($dedicated->dedicatedBackupExcludeAdd(new \PayPal\StructType\DedicatedBackupExcludeAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcServerRuleDel operation/method
 */
if ($dedicated->dedicatedFilterIrcServerRuleDel(new \PayPal\StructType\DedicatedFilterIrcServerRuleDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeModify operation/method
 */
if ($dedicated->dedicatedFailoverRipeModify(new \PayPal\StructType\DedicatedFailoverRipeModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringList operation/method
 */
if ($dedicated->dedicatedMonitoringList(new \PayPal\StructType\DedicatedMonitoringList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupExcludeDel operation/method
 */
if ($dedicated->dedicatedBackupExcludeDel(new \PayPal\StructType\DedicatedBackupExcludeDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedHardRebootStatus operation/method
 */
if ($dedicated->dedicatedHardRebootStatus(new \PayPal\StructType\DedicatedHardRebootStatus()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetServiceMonitoringItem operation/method
 */
if ($dedicated->dedicatedGetServiceMonitoringItem(new \PayPal\StructType\DedicatedGetServiceMonitoringItem()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseAdd operation/method
 */
if ($dedicated->dedicatedReverseAdd(new \PayPal\StructType\DedicatedReverseAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetFreePlanning operation/method
 */
if ($dedicated->dedicatedBackupGetFreePlanning(new \PayPal\StructType\DedicatedBackupGetFreePlanning()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallAllowedDistributionGet operation/method
 */
if ($dedicated->dedicatedInstallAllowedDistributionGet(new \PayPal\StructType\DedicatedInstallAllowedDistributionGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedCapabilitiesGet operation/method
 */
if ($dedicated->dedicatedCapabilitiesGet(new \PayPal\StructType\DedicatedCapabilitiesGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringSMSDel operation/method
 */
if ($dedicated->dedicatedMonitoringSMSDel(new \PayPal\StructType\DedicatedMonitoringSMSDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringAdd operation/method
 */
if ($dedicated->dedicatedMonitoringAdd(new \PayPal\StructType\DedicatedMonitoringAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedOperationList operation/method
 */
if ($dedicated->dedicatedOperationList(new \PayPal\StructType\DedicatedOperationList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupIncludeDel operation/method
 */
if ($dedicated->dedicatedBackupIncludeDel(new \PayPal\StructType\DedicatedBackupIncludeDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBandwidthSwitching operation/method
 */
if ($dedicated->dedicatedBandwidthSwitching(new \PayPal\StructType\DedicatedBandwidthSwitching()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingDel operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingDel(new \PayPal\StructType\DedicatedIpLoadBalancingDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallationTemplateUse operation/method
 */
if ($dedicated->dedicatedInstallationTemplateUse(new \PayPal\StructType\DedicatedInstallationTemplateUse()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingServerAdd operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingServerAdd(new \PayPal\StructType\DedicatedIpLoadBalancingServerAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeUpdateOrganisation operation/method
 */
if ($dedicated->dedicatedRipeUpdateOrganisation(new \PayPal\StructType\DedicatedRipeUpdateOrganisation()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootModifyById operation/method
 */
if ($dedicated->dedicatedNetbootModifyById(new \PayPal\StructType\DedicatedNetbootModifyById()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetDate operation/method
 */
if ($dedicated->dedicatedBackupGetDate(new \PayPal\StructType\DedicatedBackupGetDate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSDel operation/method
 */
if ($dedicated->dedicatedSecondaryDNSDel(new \PayPal\StructType\DedicatedSecondaryDNSDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSGetAll operation/method
 */
if ($dedicated->dedicatedSecondaryDNSGetAll(new \PayPal\StructType\DedicatedSecondaryDNSGetAll()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringNotificationDel operation/method
 */
if ($dedicated->dedicatedMonitoringNotificationDel(new \PayPal\StructType\DedicatedMonitoringNotificationDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBandwidthManagementGet operation/method
 */
if ($dedicated->dedicatedBandwidthManagementGet(new \PayPal\StructType\DedicatedBandwidthManagementGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringStatusUpdate operation/method
 */
if ($dedicated->dedicatedMonitoringStatusUpdate(new \PayPal\StructType\DedicatedMonitoringStatusUpdate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPMoveGetStatus operation/method
 */
if ($dedicated->dedicatedIPForUDPMoveGetStatus(new \PayPal\StructType\DedicatedIPForUDPMoveGetStatus()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeDeleteOrganisation operation/method
 */
if ($dedicated->dedicatedRipeDeleteOrganisation(new \PayPal\StructType\DedicatedRipeDeleteOrganisation()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeGetIp operation/method
 */
if ($dedicated->dedicatedFailoverRipeGetIp(new \PayPal\StructType\DedicatedFailoverRipeGetIp()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallBasic operation/method
 */
if ($dedicated->dedicatedInstallBasic(new \PayPal\StructType\DedicatedInstallBasic()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallReset operation/method
 */
if ($dedicated->dedicatedInstallReset(new \PayPal\StructType\DedicatedInstallReset()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceAddNotification operation/method
 */
if ($dedicated->dedicatedMonitoringServiceAddNotification(new \PayPal\StructType\DedicatedMonitoringServiceAddNotification()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcClientRuleDel operation/method
 */
if ($dedicated->dedicatedFilterIrcClientRuleDel(new \PayPal\StructType\DedicatedFilterIrcClientRuleDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMrtgInfo operation/method
 */
if ($dedicated->dedicatedMrtgInfo(new \PayPal\StructType\DedicatedMrtgInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupReinstallData operation/method
 */
if ($dedicated->dedicatedBackupReinstallData(new \PayPal\StructType\DedicatedBackupReinstallData()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupFtpInfo operation/method
 */
if ($dedicated->dedicatedBackupFtpInfo(new \PayPal\StructType\DedicatedBackupFtpInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringModify operation/method
 */
if ($dedicated->dedicatedMonitoringModify(new \PayPal\StructType\DedicatedMonitoringModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetRandomAvailableIpFromCountry operation/method
 */
if ($dedicated->dedicatedGetRandomAvailableIpFromCountry(new \PayPal\StructType\DedicatedGetRandomAvailableIpFromCountry()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallBasicProgress operation/method
 */
if ($dedicated->dedicatedInstallBasicProgress(new \PayPal\StructType\DedicatedInstallBasicProgress()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedAddServiceMonitoringAlertEmail operation/method
 */
if ($dedicated->dedicatedAddServiceMonitoringAlertEmail(new \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverUpdate operation/method
 */
if ($dedicated->dedicatedFailoverUpdate(new \PayPal\StructType\DedicatedFailoverUpdate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcServerRuleAdd operation/method
 */
if ($dedicated->dedicatedFilterIrcServerRuleAdd(new \PayPal\StructType\DedicatedFilterIrcServerRuleAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpAdd operation/method
 */
if ($dedicated->dedicatedVirtualMacIpAdd(new \PayPal\StructType\DedicatedVirtualMacIpAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeGetRipeIds operation/method
 */
if ($dedicated->dedicatedRipeGetRipeIds(new \PayPal\StructType\DedicatedRipeGetRipeIds()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInfo operation/method
 */
if ($dedicated->dedicatedInfo(new \PayPal\StructType\DedicatedInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupUpdateDate operation/method
 */
if ($dedicated->dedicatedBackupUpdateDate(new \PayPal\StructType\DedicatedBackupUpdateDate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringStatusGet operation/method
 */
if ($dedicated->dedicatedMonitoringStatusGet(new \PayPal\StructType\DedicatedMonitoringStatusGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootModify operation/method
 */
if ($dedicated->dedicatedNetbootModify(new \PayPal\StructType\DedicatedNetbootModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcClientRuleList operation/method
 */
if ($dedicated->dedicatedFilterIrcClientRuleList(new \PayPal\StructType\DedicatedFilterIrcClientRuleList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPMove operation/method
 */
if ($dedicated->dedicatedIPForUDPMove(new \PayPal\StructType\DedicatedIPForUDPMove()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringSMSModify operation/method
 */
if ($dedicated->dedicatedMonitoringSMSModify(new \PayPal\StructType\DedicatedMonitoringSMSModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringDel operation/method
 */
if ($dedicated->dedicatedMonitoringDel(new \PayPal\StructType\DedicatedMonitoringDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceAddSMS operation/method
 */
if ($dedicated->dedicatedMonitoringServiceAddSMS(new \PayPal\StructType\DedicatedMonitoringServiceAddSMS()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedList operation/method
 */
if ($dedicated->dedicatedList(new \PayPal\StructType\DedicatedList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPGet operation/method
 */
if ($dedicated->dedicatedIPForUDPGet(new \PayPal\StructType\DedicatedIPForUDPGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetAvailableIpFromNetwork operation/method
 */
if ($dedicated->dedicatedGetAvailableIpFromNetwork(new \PayPal\StructType\DedicatedGetAvailableIpFromNetwork()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMailinglistSubscribe operation/method
 */
if ($dedicated->dedicatedMailinglistSubscribe(new \PayPal\StructType\DedicatedMailinglistSubscribe()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingNameModify operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingNameModify(new \PayPal\StructType\DedicatedIpLoadBalancingNameModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceList operation/method
 */
if ($dedicated->dedicatedMonitoringServiceList(new \PayPal\StructType\DedicatedMonitoringServiceList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Samples for Service ServiceType
 */
$service = new \PayPal\ServiceType\Service($options);
/**
 * Sample call for serviceGroupGetAllInfo operation/method
 */
if ($service->serviceGroupGetAllInfo(new \PayPal\StructType\ServiceGroupGetAllInfo()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupList operation/method
 */
if ($service->serviceGroupList(new \PayPal\StructType\ServiceGroupList()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceListPaginated operation/method
 */
if ($service->serviceListPaginated(new \PayPal\StructType\ServiceListPaginated()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupCreate operation/method
 */
if ($service->serviceGroupCreate(new \PayPal\StructType\ServiceGroupCreate()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceModifyContact operation/method
 */
if ($service->serviceModifyContact(new \PayPal\StructType\ServiceModifyContact()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceModifyOwner operation/method
 */
if ($service->serviceModifyOwner(new \PayPal\StructType\ServiceModifyOwner()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceModifyOwnerInfos operation/method
 */
if ($service->serviceModifyOwnerInfos(new \PayPal\StructType\ServiceModifyOwnerInfos()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupDelete operation/method
 */
if ($service->serviceGroupDelete(new \PayPal\StructType\ServiceGroupDelete()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceList operation/method
 */
if ($service->serviceList(new \PayPal\StructType\ServiceList()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupSetComment operation/method
 */
if ($service->serviceGroupSetComment(new \PayPal\StructType\ServiceGroupSetComment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupRemoveService operation/method
 */
if ($service->serviceGroupRemoveService(new \PayPal\StructType\ServiceGroupRemoveService()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceFreedomList operation/method
 */
if ($service->serviceFreedomList(new \PayPal\StructType\ServiceFreedomList()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupSetName operation/method
 */
if ($service->serviceGroupSetName(new \PayPal\StructType\ServiceGroupSetName()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupInfo operation/method
 */
if ($service->serviceGroupInfo(new \PayPal\StructType\ServiceGroupInfo()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupAddService operation/method
 */
if ($service->serviceGroupAddService(new \PayPal\StructType\ServiceGroupAddService()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Samples for Redirected ServiceType
 */
$redirected = new \PayPal\ServiceType\Redirected($options);
/**
 * Sample call for redirectedEmailAdd operation/method
 */
if ($redirected->redirectedEmailAdd(new \PayPal\StructType\RedirectedEmailAdd()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Sample call for redirectedEmailModify operation/method
 */
if ($redirected->redirectedEmailModify(new \PayPal\StructType\RedirectedEmailModify()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Sample call for redirectedEmailDel operation/method
 */
if ($redirected->redirectedEmailDel(new \PayPal\StructType\RedirectedEmailDel()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Sample call for redirectedEmailList operation/method
 */
if ($redirected->redirectedEmailList(new \PayPal\StructType\RedirectedEmailList()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Samples for Nic ServiceType
 */
$nic = new \PayPal\ServiceType\Nic($options);
/**
 * Sample call for nicModifyInfos operation/method
 */
if ($nic->nicModifyInfos(new \PayPal\StructType\NicModifyInfos()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nic operation/method
 */
if ($nic->nic(new \PayPal\StructType\Nic()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicTldEligibility operation/method
 */
if ($nic->nicTldEligibility(new \PayPal\StructType\NicTldEligibility()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicModifyLanguage operation/method
 */
if ($nic->nicModifyLanguage(new \PayPal\StructType\NicModifyLanguage()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicCreate operation/method
 */
if ($nic->nicCreate(new \PayPal\StructType\NicCreate()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicInfo operation/method
 */
if ($nic->nicInfo(new \PayPal\StructType\NicInfo()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicModifyInfosIT operation/method
 */
if ($nic->nicModifyInfosIT(new \PayPal\StructType\NicModifyInfosIT()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicPublicInfo operation/method
 */
if ($nic->nicPublicInfo(new \PayPal\StructType\NicPublicInfo()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicCreateIT operation/method
 */
if ($nic->nicCreateIT(new \PayPal\StructType\NicCreateIT()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicModifyEmail operation/method
 */
if ($nic->nicModifyEmail(new \PayPal\StructType\NicModifyEmail()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicUpdateIT operation/method
 */
if ($nic->nicUpdateIT(new \PayPal\StructType\NicUpdateIT()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicUpdate operation/method
 */
if ($nic->nicUpdate(new \PayPal\StructType\NicUpdate()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Samples for Ripe ServiceType
 */
$ripe = new \PayPal\ServiceType\Ripe($options);
/**
 * Sample call for ripeGetRipeIds operation/method
 */
if ($ripe->ripeGetRipeIds(new \PayPal\StructType\RipeGetRipeIds()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeUpdateInetnum operation/method
 */
if ($ripe->ripeUpdateInetnum(new \PayPal\StructType\RipeUpdateInetnum()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeQuery operation/method
 */
if ($ripe->ripeQuery(new \PayPal\StructType\RipeQuery()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeDeleteOrganisation operation/method
 */
if ($ripe->ripeDeleteOrganisation(new \PayPal\StructType\RipeDeleteOrganisation()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeUpdateOrganisation operation/method
 */
if ($ripe->ripeUpdateOrganisation(new \PayPal\StructType\RipeUpdateOrganisation()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeCreateOrganisation operation/method
 */
if ($ripe->ripeCreateOrganisation(new \PayPal\StructType\RipeCreateOrganisation()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Samples for Automated ServiceType
 */
$automated = new \PayPal\ServiceType\Automated($options);
/**
 * Sample call for automatedMailGetVolumeHistory operation/method
 */
if ($automated->automatedMailGetVolumeHistory(new \PayPal\StructType\AutomatedMailGetVolumeHistory()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailGetTodo operation/method
 */
if ($automated->automatedMailGetTodo(new \PayPal\StructType\AutomatedMailGetTodo()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailGetErrors operation/method
 */
if ($automated->automatedMailGetErrors(new \PayPal\StructType\AutomatedMailGetErrors()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailGetState operation/method
 */
if ($automated->automatedMailGetState(new \PayPal\StructType\AutomatedMailGetState()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailUnlock operation/method
 */
if ($automated->automatedMailUnlock(new \PayPal\StructType\AutomatedMailUnlock()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailLock operation/method
 */
if ($automated->automatedMailLock(new \PayPal\StructType\AutomatedMailLock()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailReturnSet operation/method
 */
if ($automated->automatedMailReturnSet(new \PayPal\StructType\AutomatedMailReturnSet()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailFlush operation/method
 */
if ($automated->automatedMailFlush(new \PayPal\StructType\AutomatedMailFlush()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Samples for Domain ServiceType
 */
$domain = new \PayPal\ServiceType\Domain($options);
/**
 * Sample call for domainHostUpdate operation/method
 */
if ($domain->domainHostUpdate(new \PayPal\StructType\DomainHostUpdate()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainUnlock operation/method
 */
if ($domain->domainUnlock(new \PayPal\StructType\DomainUnlock()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorSetAll operation/method
 */
if ($domain->domainWhoisObfuscatorSetAll(new \PayPal\StructType\DomainWhoisObfuscatorSetAll()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainList operation/method
 */
if ($domain->domainList(new \PayPal\StructType\DomainList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorInfo operation/method
 */
if ($domain->domainWhoisObfuscatorInfo(new \PayPal\StructType\DomainWhoisObfuscatorInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainCheck operation/method
 */
if ($domain->domainCheck(new \PayPal\StructType\DomainCheck()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorSet operation/method
 */
if ($domain->domainWhoisObfuscatorSet(new \PayPal\StructType\DomainWhoisObfuscatorSet()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainResellerSet operation/method
 */
if ($domain->domainResellerSet(new \PayPal\StructType\DomainResellerSet()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationRelaunch operation/method
 */
if ($domain->domainOperationRelaunch(new \PayPal\StructType\DomainOperationRelaunch()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainCapabilities operation/method
 */
if ($domain->domainCapabilities(new \PayPal\StructType\DomainCapabilities()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainDnsList operation/method
 */
if ($domain->domainDnsList(new \PayPal\StructType\DomainDnsList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationInfo operation/method
 */
if ($domain->domainOperationInfo(new \PayPal\StructType\DomainOperationInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainDnsUpdate operation/method
 */
if ($domain->domainDnsUpdate(new \PayPal\StructType\DomainDnsUpdate()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainResellerDel operation/method
 */
if ($domain->domainResellerDel(new \PayPal\StructType\DomainResellerDel()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainDnsGetOvhDefault operation/method
 */
if ($domain->domainDnsGetOvhDefault(new \PayPal\StructType\DomainDnsGetOvhDefault()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorUnset operation/method
 */
if ($domain->domainWhoisObfuscatorUnset(new \PayPal\StructType\DomainWhoisObfuscatorUnset()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostDel operation/method
 */
if ($domain->domainHostDel(new \PayPal\StructType\DomainHostDel()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainInfo operation/method
 */
if ($domain->domainInfo(new \PayPal\StructType\DomainInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostList operation/method
 */
if ($domain->domainHostList(new \PayPal\StructType\DomainHostList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainLockStatus operation/method
 */
if ($domain->domainLockStatus(new \PayPal\StructType\DomainLockStatus()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainLock operation/method
 */
if ($domain->domainLock(new \PayPal\StructType\DomainLock()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationCancel operation/method
 */
if ($domain->domainOperationCancel(new \PayPal\StructType\DomainOperationCancel()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostAdd operation/method
 */
if ($domain->domainHostAdd(new \PayPal\StructType\DomainHostAdd()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorUnsetAll operation/method
 */
if ($domain->domainWhoisObfuscatorUnsetAll(new \PayPal\StructType\DomainWhoisObfuscatorUnsetAll()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationList operation/method
 */
if ($domain->domainOperationList(new \PayPal\StructType\DomainOperationList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorList operation/method
 */
if ($domain->domainWhoisObfuscatorList(new \PayPal\StructType\DomainWhoisObfuscatorList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostInfo operation/method
 */
if ($domain->domainHostInfo(new \PayPal\StructType\DomainHostInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Samples for Database ServiceType
 */
$database = new \PayPal\ServiceType\Database($options);
/**
 * Sample call for databaseChangePassword operation/method
 */
if ($database->databaseChangePassword(new \PayPal\StructType\DatabaseChangePassword()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseDump operation/method
 */
if ($database->databaseDump(new \PayPal\StructType\DatabaseDump()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseCreate operation/method
 */
if ($database->databaseCreate(new \PayPal\StructType\DatabaseCreate()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseList operation/method
 */
if ($database->databaseList(new \PayPal\StructType\DatabaseList()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseDelete operation/method
 */
if ($database->databaseDelete(new \PayPal\StructType\DatabaseDelete()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseRecreate operation/method
 */
if ($database->databaseRecreate(new \PayPal\StructType\DatabaseRecreate()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Samples for Billing ServiceType
 */
$billing = new \PayPal\ServiceType\Billing($options);
/**
 * Sample call for billingInvoiceList operation/method
 */
if ($billing->billingInvoiceList(new \PayPal\StructType\BillingInvoiceList()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingGetReferencesToExpired operation/method
 */
if ($billing->billingGetReferencesToExpired(new \PayPal\StructType\BillingGetReferencesToExpired()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingGetAccessByNic operation/method
 */
if ($billing->billingGetAccessByNic(new \PayPal\StructType\BillingGetAccessByNic()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingInvoiceInfo operation/method
 */
if ($billing->billingInvoiceInfo(new \PayPal\StructType\BillingInvoiceInfo()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Samples for Global ServiceType
 */
$global = new \PayPal\ServiceType\_Global($options);
/**
 * Sample call for globalAccessByNic operation/method
 */
if ($global->globalAccessByNic(new \PayPal\StructType\GlobalAccessByNic()) !== false) {
    print_r($global->getResult());
} else {
    print_r($global->getLastError());
}
/**
 * Samples for Ticket ServiceType
 */
$ticket = new \PayPal\ServiceType\Ticket($options);
/**
 * Sample call for ticketListIncidentsByDomain operation/method
 */
if ($ticket->ticketListIncidentsByDomain(new \PayPal\StructType\TicketListIncidentsByDomain()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketListIncidents operation/method
 */
if ($ticket->ticketListIncidents(new \PayPal\StructType\TicketListIncidents()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketReopen operation/method
 */
if ($ticket->ticketReopen(new \PayPal\StructType\TicketReopen()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketListContact operation/method
 */
if ($ticket->ticketListContact(new \PayPal\StructType\TicketListContact()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketGet operation/method
 */
if ($ticket->ticketGet(new \PayPal\StructType\TicketGet()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketAnswer operation/method
 */
if ($ticket->ticketAnswer(new \PayPal\StructType\TicketAnswer()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketClose operation/method
 */
if ($ticket->ticketClose(new \PayPal\StructType\TicketClose()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketCreate operation/method
 */
if ($ticket->ticketCreate(new \PayPal\StructType\TicketCreate()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Samples for Zone ServiceType
 */
$zone = new \PayPal\ServiceType\Zone($options);
/**
 * Sample call for zoneEntryList operation/method
 */
if ($zone->zoneEntryList(new \PayPal\StructType\ZoneEntryList()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryAddCustom operation/method
 */
if ($zone->zoneEntryAddCustom(new \PayPal\StructType\ZoneEntryAddCustom()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryModify operation/method
 */
if ($zone->zoneEntryModify(new \PayPal\StructType\ZoneEntryModify()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryDel operation/method
 */
if ($zone->zoneEntryDel(new \PayPal\StructType\ZoneEntryDel()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryAdd operation/method
 */
if ($zone->zoneEntryAdd(new \PayPal\StructType\ZoneEntryAdd()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneExport operation/method
 */
if ($zone->zoneExport(new \PayPal\StructType\ZoneExport()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneImport operation/method
 */
if ($zone->zoneImport(new \PayPal\StructType\ZoneImport()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Samples for Dns ServiceType
 */
$dns = new \PayPal\ServiceType\Dns($options);
/**
 * Sample call for dnsDefaultInstallCustom operation/method
 */
if ($dns->dnsDefaultInstallCustom(new \PayPal\StructType\DnsDefaultInstallCustom()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsInstall operation/method
 */
if ($dns->dnsInstall(new \PayPal\StructType\DnsInstall()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsReset operation/method
 */
if ($dns->dnsReset(new \PayPal\StructType\DnsReset()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsSoaModify operation/method
 */
if ($dns->dnsSoaModify(new \PayPal\StructType\DnsSoaModify()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsInstallCustom operation/method
 */
if ($dns->dnsInstallCustom(new \PayPal\StructType\DnsInstallCustom()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsUninstall operation/method
 */
if ($dns->dnsUninstall(new \PayPal\StructType\DnsUninstall()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsGeolocalizeHosting operation/method
 */
if ($dns->dnsGeolocalizeHosting(new \PayPal\StructType\DnsGeolocalizeHosting()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Samples for Pop ServiceType
 */
$pop = new \PayPal\ServiceType\Pop($options);
/**
 * Sample call for popDetachMasterNic operation/method
 */
if ($pop->popDetachMasterNic(new \PayPal\StructType\PopDetachMasterNic()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popList operation/method
 */
if ($pop->popList(new \PayPal\StructType\PopList()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popUpgradeQuota operation/method
 */
if ($pop->popUpgradeQuota(new \PayPal\StructType\PopUpgradeQuota()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popDel operation/method
 */
if ($pop->popDel(new \PayPal\StructType\PopDel()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popListByMasterNic operation/method
 */
if ($pop->popListByMasterNic(new \PayPal\StructType\PopListByMasterNic()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popModifyDescription operation/method
 */
if ($pop->popModifyDescription(new \PayPal\StructType\PopModifyDescription()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popInfo operation/method
 */
if ($pop->popInfo(new \PayPal\StructType\PopInfo()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popModifyPassword operation/method
 */
if ($pop->popModifyPassword(new \PayPal\StructType\PopModifyPassword()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popAttachMasterNic operation/method
 */
if ($pop->popAttachMasterNic(new \PayPal\StructType\PopAttachMasterNic()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popAdd operation/method
 */
if ($pop->popAdd(new \PayPal\StructType\PopAdd()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popGetQuota operation/method
 */
if ($pop->popGetQuota(new \PayPal\StructType\PopGetQuota()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Samples for Overquota ServiceType
 */
$overquota = new \PayPal\ServiceType\Overquota($options);
/**
 * Sample call for overquotaInfo operation/method
 */
if ($overquota->overquotaInfo(new \PayPal\StructType\OverquotaInfo()) !== false) {
    print_r($overquota->getResult());
} else {
    print_r($overquota->getLastError());
}
/**
 * Samples for Email ServiceType
 */
$email = new \PayPal\ServiceType\Email($options);
/**
 * Sample call for emailGetCapabilities operation/method
 */
if ($email->emailGetCapabilities(new \PayPal\StructType\EmailGetCapabilities()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDomainListByMasterNic operation/method
 */
if ($email->emailDomainListByMasterNic(new \PayPal\StructType\EmailDomainListByMasterNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDomainSummary operation/method
 */
if ($email->emailDomainSummary(new \PayPal\StructType\EmailDomainSummary()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterAdd operation/method
 */
if ($email->emailFilterAdd(new \PayPal\StructType\EmailFilterAdd()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailAccessByNic operation/method
 */
if ($email->emailAccessByNic(new \PayPal\StructType\EmailAccessByNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterRuleDel operation/method
 */
if ($email->emailFilterRuleDel(new \PayPal\StructType\EmailFilterRuleDel()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterPriority operation/method
 */
if ($email->emailFilterPriority(new \PayPal\StructType\EmailFilterPriority()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterDel operation/method
 */
if ($email->emailFilterDel(new \PayPal\StructType\EmailFilterDel()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailSetDomainCatchAll operation/method
 */
if ($email->emailSetDomainCatchAll(new \PayPal\StructType\EmailSetDomainCatchAll()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDomainMxList operation/method
 */
if ($email->emailDomainMxList(new \PayPal\StructType\EmailDomainMxList()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterRuleAdd operation/method
 */
if ($email->emailFilterRuleAdd(new \PayPal\StructType\EmailFilterRuleAdd()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterActive operation/method
 */
if ($email->emailFilterActive(new \PayPal\StructType\EmailFilterActive()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterList operation/method
 */
if ($email->emailFilterList(new \PayPal\StructType\EmailFilterList()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailGetDomainMxFiltering operation/method
 */
if ($email->emailGetDomainMxFiltering(new \PayPal\StructType\EmailGetDomainMxFiltering()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDelMasterNic operation/method
 */
if ($email->emailDelMasterNic(new \PayPal\StructType\EmailDelMasterNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailGetDomainCatchAll operation/method
 */
if ($email->emailGetDomainCatchAll(new \PayPal\StructType\EmailGetDomainCatchAll()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailSetMasterNic operation/method
 */
if ($email->emailSetMasterNic(new \PayPal\StructType\EmailSetMasterNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailSetDomainMxFiltering operation/method
 */
if ($email->emailSetDomainMxFiltering(new \PayPal\StructType\EmailSetDomainMxFiltering()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Samples for Ort ServiceType
 */
$ort = new \PayPal\ServiceType\Ort($options);
/**
 * Sample call for ortDomainDel operation/method
 */
if ($ort->ortDomainDel(new \PayPal\StructType\OrtDomainDel()) !== false) {
    print_r($ort->getResult());
} else {
    print_r($ort->getLastError());
}
/**
 * Sample call for ortDomainList operation/method
 */
if ($ort->ortDomainList(new \PayPal\StructType\OrtDomainList()) !== false) {
    print_r($ort->getResult());
} else {
    print_r($ort->getLastError());
}
/**
 * Sample call for ortDomainAdd operation/method
 */
if ($ort->ortDomainAdd(new \PayPal\StructType\OrtDomainAdd()) !== false) {
    print_r($ort->getResult());
} else {
    print_r($ort->getLastError());
}
/**
 * Samples for Prepaid ServiceType
 */
$prepaid = new \PayPal\ServiceType\Prepaid($options);
/**
 * Sample call for prepaidDomainCreate operation/method
 */
if ($prepaid->prepaidDomainCreate(new \PayPal\StructType\PrepaidDomainCreate()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidDomainTransfer operation/method
 */
if ($prepaid->prepaidDomainTransfer(new \PayPal\StructType\PrepaidDomainTransfer()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidSetThreshold operation/method
 */
if ($prepaid->prepaidSetThreshold(new \PayPal\StructType\PrepaidSetThreshold()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetSummary operation/method
 */
if ($prepaid->prepaidGetSummary(new \PayPal\StructType\PrepaidGetSummary()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidDomainRenew operation/method
 */
if ($prepaid->prepaidDomainRenew(new \PayPal\StructType\PrepaidDomainRenew()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetThreshold operation/method
 */
if ($prepaid->prepaidGetThreshold(new \PayPal\StructType\PrepaidGetThreshold()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetHistory operation/method
 */
if ($prepaid->prepaidGetHistory(new \PayPal\StructType\PrepaidGetHistory()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetBalance operation/method
 */
if ($prepaid->prepaidGetBalance(new \PayPal\StructType\PrepaidGetBalance()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Samples for Reseller ServiceType
 */
$reseller = new \PayPal\ServiceType\Reseller($options);
/**
 * Sample call for resellerDomainTransferIT operation/method
 */
if ($reseller->resellerDomainTransferIT(new \PayPal\StructType\ResellerDomainTransferIT()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainRestore operation/method
 */
if ($reseller->resellerDomainRestore(new \PayPal\StructType\ResellerDomainRestore()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainRenew operation/method
 */
if ($reseller->resellerDomainRenew(new \PayPal\StructType\ResellerDomainRenew()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreate operation/method
 */
if ($reseller->resellerDomainCreate(new \PayPal\StructType\ResellerDomainCreate()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreateIT operation/method
 */
if ($reseller->resellerDomainCreateIT(new \PayPal\StructType\ResellerDomainCreateIT()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainTransferASIA operation/method
 */
if ($reseller->resellerDomainTransferASIA(new \PayPal\StructType\ResellerDomainTransferASIA()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreateCAT operation/method
 */
if ($reseller->resellerDomainCreateCAT(new \PayPal\StructType\ResellerDomainCreateCAT()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreateASIA operation/method
 */
if ($reseller->resellerDomainCreateASIA(new \PayPal\StructType\ResellerDomainCreateASIA()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainTransfer operation/method
 */
if ($reseller->resellerDomainTransfer(new \PayPal\StructType\ResellerDomainTransfer()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Samples for Infrastructure ServiceType
 */
$infrastructure = new \PayPal\ServiceType\Infrastructure($options);
/**
 * Sample call for infrastructureReverseModify operation/method
 */
if ($infrastructure->infrastructureReverseModify(new \PayPal\StructType\InfrastructureReverseModify()) !== false) {
    print_r($infrastructure->getResult());
} else {
    print_r($infrastructure->getLastError());
}
/**
 * Sample call for infrastructureIpListGet operation/method
 */
if ($infrastructure->infrastructureIpListGet(new \PayPal\StructType\InfrastructureIpListGet()) !== false) {
    print_r($infrastructure->getResult());
} else {
    print_r($infrastructure->getLastError());
}
/**
 * Samples for Responder ServiceType
 */
$responder = new \PayPal\ServiceType\Responder($options);
/**
 * Sample call for responderEmailList operation/method
 */
if ($responder->responderEmailList(new \PayPal\StructType\ResponderEmailList()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailInfo operation/method
 */
if ($responder->responderEmailInfo(new \PayPal\StructType\ResponderEmailInfo()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailDel operation/method
 */
if ($responder->responderEmailDel(new \PayPal\StructType\ResponderEmailDel()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailModify operation/method
 */
if ($responder->responderEmailModify(new \PayPal\StructType\ResponderEmailModify()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailAdd operation/method
 */
if ($responder->responderEmailAdd(new \PayPal\StructType\ResponderEmailAdd()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Samples for Hosting ServiceType
 */
$hosting = new \PayPal\ServiceType\Hosting($options);
/**
 * Sample call for hostingAccessByNic operation/method
 */
if ($hosting->hostingAccessByNic(new \PayPal\StructType\HostingAccessByNic()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingSummary operation/method
 */
if ($hosting->hostingSummary(new \PayPal\StructType\HostingSummary()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingGetCapabilities operation/method
 */
if ($hosting->hostingGetCapabilities(new \PayPal\StructType\HostingGetCapabilities()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingChangeMainDomain operation/method
 */
if ($hosting->hostingChangeMainDomain(new \PayPal\StructType\HostingChangeMainDomain()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingList operation/method
 */
if ($hosting->hostingList(new \PayPal\StructType\HostingList()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Samples for Managed ServiceType
 */
$managed = new \PayPal\ServiceType\Managed($options);
/**
 * Sample call for managedServicesPartitionQuotaUsed operation/method
 */
if ($managed->managedServicesPartitionQuotaUsed(new \PayPal\StructType\ManagedServicesPartitionQuotaUsed()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesIpAccessChange operation/method
 */
if ($managed->managedServicesIpAccessChange(new \PayPal\StructType\ManagedServicesIpAccessChange()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesSnapshotUpdate operation/method
 */
if ($managed->managedServicesSnapshotUpdate(new \PayPal\StructType\ManagedServicesSnapshotUpdate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesHostMasterIpGet operation/method
 */
if ($managed->managedServicesHostMasterIpGet(new \PayPal\StructType\ManagedServicesHostMasterIpGet()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionDelete operation/method
 */
if ($managed->managedServicesPartitionDelete(new \PayPal\StructType\ManagedServicesPartitionDelete()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionStatusCheck operation/method
 */
if ($managed->managedServicesPartitionStatusCheck(new \PayPal\StructType\ManagedServicesPartitionStatusCheck()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionCreate operation/method
 */
if ($managed->managedServicesPartitionCreate(new \PayPal\StructType\ManagedServicesPartitionCreate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionGet operation/method
 */
if ($managed->managedServicesPartitionGet(new \PayPal\StructType\ManagedServicesPartitionGet()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionUpdate operation/method
 */
if ($managed->managedServicesPartitionUpdate(new \PayPal\StructType\ManagedServicesPartitionUpdate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesNameUpdate operation/method
 */
if ($managed->managedServicesNameUpdate(new \PayPal\StructType\ManagedServicesNameUpdate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Samples for Account ServiceType
 */
$account = new \PayPal\ServiceType\Account($options);
/**
 * Sample call for accountSummary operation/method
 */
if ($account->accountSummary(new \PayPal\StructType\AccountSummary()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountHistory operation/method
 */
if ($account->accountHistory(new \PayPal\StructType\AccountHistory()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountAlertThresholdSet operation/method
 */
if ($account->accountAlertThresholdSet(new \PayPal\StructType\AccountAlertThresholdSet()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Samples for Sub ServiceType
 */
$sub = new \PayPal\ServiceType\Sub($options);
/**
 * Sample call for subDomainDel operation/method
 */
if ($sub->subDomainDel(new \PayPal\StructType\SubDomainDel()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Sample call for subDomainModify operation/method
 */
if ($sub->subDomainModify(new \PayPal\StructType\SubDomainModify()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Sample call for subDomainAdd operation/method
 */
if ($sub->subDomainAdd(new \PayPal\StructType\SubDomainAdd()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Sample call for subDomainList operation/method
 */
if ($sub->subDomainList(new \PayPal\StructType\SubDomainList()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Samples for Support ServiceType
 */
$support = new \PayPal\ServiceType\Support($options);
/**
 * Sample call for supportGetNicDomains operation/method
 */
if ($support->supportGetNicDomains(new \PayPal\StructType\SupportGetNicDomains()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetThreads operation/method
 */
if ($support->supportGetThreads(new \PayPal\StructType\SupportGetThreads()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportSendMessage operation/method
 */
if ($support->supportSendMessage(new \PayPal\StructType\SupportSendMessage()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetAllVisibleCategories operation/method
 */
if ($support->supportGetAllVisibleCategories(new \PayPal\StructType\SupportGetAllVisibleCategories()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetThreadTree operation/method
 */
if ($support->supportGetThreadTree(new \PayPal\StructType\SupportGetThreadTree()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportReportAnswerProblem operation/method
 */
if ($support->supportReportAnswerProblem(new \PayPal\StructType\SupportReportAnswerProblem()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetFullMessage operation/method
 */
if ($support->supportGetFullMessage(new \PayPal\StructType\SupportGetFullMessage()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportCloseThreads operation/method
 */
if ($support->supportCloseThreads(new \PayPal\StructType\SupportCloseThreads()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportReactivateThread operation/method
 */
if ($support->supportReactivateThread(new \PayPal\StructType\SupportReactivateThread()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Samples for Crontab ServiceType
 */
$crontab = new \PayPal\ServiceType\Crontab($options);
/**
 * Sample call for crontabDel operation/method
 */
if ($crontab->crontabDel(new \PayPal\StructType\CrontabDel()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabList operation/method
 */
if ($crontab->crontabList(new \PayPal\StructType\CrontabList()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabAdd operation/method
 */
if ($crontab->crontabAdd(new \PayPal\StructType\CrontabAdd()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabInfo operation/method
 */
if ($crontab->crontabInfo(new \PayPal\StructType\CrontabInfo()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabModify operation/method
 */
if ($crontab->crontabModify(new \PayPal\StructType\CrontabModify()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Samples for Order ServiceType
 */
$order = new \PayPal\ServiceType\Order($options);
/**
 * Sample call for orderTelephonySmsCredit operation/method
 */
if ($order->orderTelephonySmsCredit(new \PayPal\StructType\OrderTelephonySmsCredit()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderAccountCredit operation/method
 */
if ($order->orderAccountCredit(new \PayPal\StructType\OrderAccountCredit()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderEmailMxPlan operation/method
 */
if ($order->orderEmailMxPlan(new \PayPal\StructType\OrderEmailMxPlan()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderEmailMxLarge operation/method
 */
if ($order->orderEmailMxLarge(new \PayPal\StructType\OrderEmailMxLarge()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderDedicatedFailover operation/method
 */
if ($order->orderDedicatedFailover(new \PayPal\StructType\OrderDedicatedFailover()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderDedicatedFailoverRipe operation/method
 */
if ($order->orderDedicatedFailoverRipe(new \PayPal\StructType\OrderDedicatedFailoverRipe()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Samples for Cms ServiceType
 */
$cms = new \PayPal\ServiceType\Cms($options);
/**
 * Sample call for cmsInstall operation/method
 */
if ($cms->cmsInstall(new \PayPal\StructType\CmsInstall()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsAvailableList operation/method
 */
if ($cms->cmsAvailableList(new \PayPal\StructType\CmsAvailableList()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsRemove operation/method
 */
if ($cms->cmsRemove(new \PayPal\StructType\CmsRemove()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsList operation/method
 */
if ($cms->cmsList(new \PayPal\StructType\CmsList()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsRenewAdminPassword operation/method
 */
if ($cms->cmsRenewAdminPassword(new \PayPal\StructType\CmsRenewAdminPassword()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Samples for Login ServiceType
 */
$login = new \PayPal\ServiceType\Login($options);
/**
 * Sample call for login operation/method
 */
if ($login->login(new \PayPal\StructType\Login()) !== false) {
    print_r($login->getResult());
} else {
    print_r($login->getLastError());
}
/**
 * Samples for Password ServiceType
 */
$password = new \PayPal\ServiceType\Password($options);
/**
 * Sample call for passwordSoapi operation/method
 */
if ($password->passwordSoapi(new \PayPal\StructType\PasswordSoapi()) !== false) {
    print_r($password->getResult());
} else {
    print_r($password->getLastError());
}
/**
 * Sample call for passwordManager operation/method
 */
if ($password->passwordManager(new \PayPal\StructType\PasswordManager()) !== false) {
    print_r($password->getResult());
} else {
    print_r($password->getLastError());
}
/**
 * Samples for Version ServiceType
 */
$version = new \PayPal\ServiceType\Version($options);
/**
 * Sample call for version operation/method
 */
if ($version->version(new \PayPal\StructType\Version()) !== false) {
    print_r($version->getResult());
} else {
    print_r($version->getLastError());
}
/**
 * Samples for Anonymous ServiceType
 */
$anonymous = new \PayPal\ServiceType\Anonymous($options);
/**
 * Sample call for anonymousFtpInfo operation/method
 */
if ($anonymous->anonymousFtpInfo(new \PayPal\StructType\AnonymousFtpInfo()) !== false) {
    print_r($anonymous->getResult());
} else {
    print_r($anonymous->getLastError());
}
/**
 * Sample call for anonymousFtpActivate operation/method
 */
if ($anonymous->anonymousFtpActivate(new \PayPal\StructType\AnonymousFtpActivate()) !== false) {
    print_r($anonymous->getResult());
} else {
    print_r($anonymous->getLastError());
}
/**
 * Sample call for anonymousFtpChangePassword operation/method
 */
if ($anonymous->anonymousFtpChangePassword(new \PayPal\StructType\AnonymousFtpChangePassword()) !== false) {
    print_r($anonymous->getResult());
} else {
    print_r($anonymous->getLastError());
}
/**
 * Samples for Logs ServiceType
 */
$logs = new \PayPal\ServiceType\Logs($options);
/**
 * Sample call for logsAccessList operation/method
 */
if ($logs->logsAccessList(new \PayPal\StructType\LogsAccessList()) !== false) {
    print_r($logs->getResult());
} else {
    print_r($logs->getLastError());
}
/**
 * Sample call for logsAccessDel operation/method
 */
if ($logs->logsAccessDel(new \PayPal\StructType\LogsAccessDel()) !== false) {
    print_r($logs->getResult());
} else {
    print_r($logs->getLastError());
}
/**
 * Sample call for logsAccessAdd operation/method
 */
if ($logs->logsAccessAdd(new \PayPal\StructType\LogsAccessAdd()) !== false) {
    print_r($logs->getResult());
} else {
    print_r($logs->getLastError());
}
/**
 * Samples for Ftp ServiceType
 */
$ftp = new \PayPal\ServiceType\Ftp($options);
/**
 * Sample call for ftpInfo operation/method
 */
if ($ftp->ftpInfo(new \PayPal\StructType\FtpInfo()) !== false) {
    print_r($ftp->getResult());
} else {
    print_r($ftp->getLastError());
}
/**
 * Sample call for ftpChangePassword operation/method
 */
if ($ftp->ftpChangePassword(new \PayPal\StructType\FtpChangePassword()) !== false) {
    print_r($ftp->getResult());
} else {
    print_r($ftp->getLastError());
}
/**
 * Samples for Language ServiceType
 */
$language = new \PayPal\ServiceType\Language($options);
/**
 * Sample call for language operation/method
 */
if ($language->language(new \PayPal\StructType\Language()) !== false) {
    print_r($language->getResult());
} else {
    print_r($language->getLastError());
}
