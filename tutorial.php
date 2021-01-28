<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://www.ovh.com/soapi/soapi-dlw-1.63.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://www.ovh.com/soapi/soapi-dlw-1.63.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Ovh\ClassMap::get(),
);
/**
 * Samples for Mailing ServiceType
 */
$mailing = new \Ovh\ServiceType\Mailing($options);
/**
 * Sample call for mailingListModeratorDel operation/method
 */
if ($mailing->mailingListModeratorDel(new \Ovh\StructType\MailingListModeratorDel()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListModeratorList operation/method
 */
if ($mailing->mailingListModeratorList(new \Ovh\StructType\MailingListModeratorList()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListFullInfo operation/method
 */
if ($mailing->mailingListFullInfo(new \Ovh\StructType\MailingListFullInfo()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListDel operation/method
 */
if ($mailing->mailingListDel(new \Ovh\StructType\MailingListDel()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberAdd operation/method
 */
if ($mailing->mailingListSubscriberAdd(new \Ovh\StructType\MailingListSubscriberAdd()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListModeratorAdd operation/method
 */
if ($mailing->mailingListModeratorAdd(new \Ovh\StructType\MailingListModeratorAdd()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberList operation/method
 */
if ($mailing->mailingListSubscriberList(new \Ovh\StructType\MailingListSubscriberList()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberDel operation/method
 */
if ($mailing->mailingListSubscriberDel(new \Ovh\StructType\MailingListSubscriberDel()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListInfo operation/method
 */
if ($mailing->mailingListInfo(new \Ovh\StructType\MailingListInfo()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListModify operation/method
 */
if ($mailing->mailingListModify(new \Ovh\StructType\MailingListModify()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListAdd operation/method
 */
if ($mailing->mailingListAdd(new \Ovh\StructType\MailingListAdd()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListList operation/method
 */
if ($mailing->mailingListList(new \Ovh\StructType\MailingListList()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Sample call for mailingListSubscriberListByEmail operation/method
 */
if ($mailing->mailingListSubscriberListByEmail(new \Ovh\StructType\MailingListSubscriberListByEmail()) !== false) {
    print_r($mailing->getResult());
} else {
    print_r($mailing->getLastError());
}
/**
 * Samples for Telephony ServiceType
 */
$telephony = new \Ovh\ServiceType\Telephony($options);
/**
 * Sample call for telephonyNumberInfo operation/method
 */
if ($telephony->telephonyNumberInfo(new \Ovh\StructType\TelephonyNumberInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailOptionsList operation/method
 */
if ($telephony->telephonyVoicemailOptionsList(new \Ovh\StructType\TelephonyVoicemailOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookSharePeerList operation/method
 */
if ($telephony->telephonyPhonebookSharePeerList(new \Ovh\StructType\TelephonyPhonebookSharePeerList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRedirectModify operation/method
 */
if ($telephony->telephonyRedirectModify(new \Ovh\StructType\TelephonyRedirectModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberModify operation/method
 */
if ($telephony->telephonyNumberModify(new \Ovh\StructType\TelephonyNumberModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetCitiesFromZip operation/method
 */
if ($telephony->telephonyGetCitiesFromZip(new \Ovh\StructType\TelephonyGetCitiesFromZip()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusSendSmsMt operation/method
 */
if ($telephony->telephonySmsplusSendSmsMt(new \Ovh\StructType\TelephonySmsplusSendSmsMt()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserGetCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserGetCsvAttachment(new \Ovh\StructType\TelephonySmsUserGetCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsList operation/method
 */
if ($telephony->telephonyPhonebookOnSmsList(new \Ovh\StructType\TelephonyPhonebookOnSmsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySetClosureEvents operation/method
 */
if ($telephony->telephonySetClosureEvents(new \Ovh\StructType\TelephonySetClosureEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicSetSipDomain operation/method
 */
if ($telephony->telephonyNicSetSipDomain(new \Ovh\StructType\TelephonyNicSetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsMultiSend operation/method
 */
if ($telephony->telephonySmsMultiSend(new \Ovh\StructType\TelephonySmsMultiSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserAddCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserAddCsvAttachment(new \Ovh\StructType\TelephonySmsUserAddCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareDel operation/method
 */
if ($telephony->telephonySpareDel(new \Ovh\StructType\TelephonySpareDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxHistory operation/method
 */
if ($telephony->telephonyFaxHistory(new \Ovh\StructType\TelephonyFaxHistory()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFreefaxToVoicefax operation/method
 */
if ($telephony->telephonyFreefaxToVoicefax(new \Ovh\StructType\TelephonyFreefaxToVoicefax()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxSend operation/method
 */
if ($telephony->telephonyFaxSend(new \Ovh\StructType\TelephonyFaxSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRestrictionList operation/method
 */
if ($telephony->telephonyRestrictionList(new \Ovh\StructType\TelephonyRestrictionList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillList operation/method
 */
if ($telephony->telephonyBillList(new \Ovh\StructType\TelephonyBillList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberCustomList operation/method
 */
if ($telephony->telephonyNumberCustomList(new \Ovh\StructType\TelephonyNumberCustomList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneSkinModify operation/method
 */
if ($telephony->telephonyPlugAndPhoneSkinModify(new \Ovh\StructType\TelephonyPlugAndPhoneSkinModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxOptionsModify operation/method
 */
if ($telephony->telephonyFaxOptionsModify(new \Ovh\StructType\TelephonyFaxOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountSummary operation/method
 */
if ($telephony->telephonyBillingAccountSummary(new \Ovh\StructType\TelephonyBillingAccountSummary()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceSetAnnounceFile operation/method
 */
if ($telephony->telephonyConferenceSetAnnounceFile(new \Ovh\StructType\TelephonyConferenceSetAnnounceFile()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsAdd operation/method
 */
if ($telephony->telephonyPhonebookOnSmsAdd(new \Ovh\StructType\TelephonyPhonebookOnSmsAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserDel operation/method
 */
if ($telephony->telephonyClick2CallUserDel(new \Ovh\StructType\TelephonyClick2CallUserDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsAccountList operation/method
 */
if ($telephony->telephonySmsAccountList(new \Ovh\StructType\TelephonySmsAccountList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountConsumptionCSVByMail operation/method
 */
if ($telephony->telephonyBillingAccountConsumptionCSVByMail(new \Ovh\StructType\TelephonyBillingAccountConsumptionCSVByMail()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationVoicemail operation/method
 */
if ($telephony->telephonyFMHuntingModificationVoicemail(new \Ovh\StructType\TelephonyFMHuntingModificationVoicemail()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOrdersFollowingUp operation/method
 */
if ($telephony->telephonyOrdersFollowingUp(new \Ovh\StructType\TelephonyOrdersFollowingUp()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactAdd operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactAdd(new \Ovh\StructType\TelephonyPhonebookOnGroupContactAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillDetailsCSV operation/method
 */
if ($telephony->telephonyBillDetailsCSV(new \Ovh\StructType\TelephonyBillDetailsCSV()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsCreditLeft operation/method
 */
if ($telephony->telephonySmsCreditLeft(new \Ovh\StructType\TelephonySmsCreditLeft()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryPJCode operation/method
 */
if ($telephony->telephonyDirectoryPJCode(new \Ovh\StructType\TelephonyDirectoryPJCode()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyListSummationCallsFromBillingAccount operation/method
 */
if ($telephony->telephonyListSummationCallsFromBillingAccount(new \Ovh\StructType\TelephonyListSummationCallsFromBillingAccount()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountDescriptionModify operation/method
 */
if ($telephony->telephonyBillingAccountDescriptionModify(new \Ovh\StructType\TelephonyBillingAccountDescriptionModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberDel operation/method
 */
if ($telephony->telephonyAbbreviatedNumberDel(new \Ovh\StructType\TelephonyAbbreviatedNumberDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxOptionsList operation/method
 */
if ($telephony->telephonyFaxOptionsList(new \Ovh\StructType\TelephonyFaxOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberAdd operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberAdd(new \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountSet operation/method
 */
if ($telephony->telephonyBillingAccountSet(new \Ovh\StructType\TelephonyBillingAccountSet()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDepositMovementModify operation/method
 */
if ($telephony->telephonyDepositMovementModify(new \Ovh\StructType\TelephonyDepositMovementModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallDo operation/method
 */
if ($telephony->telephonyClick2CallDo(new \Ovh\StructType\TelephonyClick2CallDo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpecialNumberOrder operation/method
 */
if ($telephony->telephonySpecialNumberOrder(new \Ovh\StructType\TelephonySpecialNumberOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailOptionsModify operation/method
 */
if ($telephony->telephonyVoicemailOptionsModify(new \Ovh\StructType\TelephonyVoicemailOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOldOffer operation/method
 */
if ($telephony->telephonyLineSwitchOldOffer(new \Ovh\StructType\TelephonyLineSwitchOldOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactDel operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactDel(new \Ovh\StructType\TelephonyPhonebookOnGroupContactDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareAdd operation/method
 */
if ($telephony->telephonySpareAdd(new \Ovh\StructType\TelephonySpareAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsAddCsvAttachment operation/method
 */
if ($telephony->telephonySmsAddCsvAttachment(new \Ovh\StructType\TelephonySmsAddCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDefaultPrivateHolidaysEvents operation/method
 */
if ($telephony->telephonyDefaultPrivateHolidaysEvents(new \Ovh\StructType\TelephonyDefaultPrivateHolidaysEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyToneRemoteUpload operation/method
 */
if ($telephony->telephonyToneRemoteUpload(new \Ovh\StructType\TelephonyToneRemoteUpload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberGetFrWayNamesFromInsee operation/method
 */
if ($telephony->telephonyNumberGetFrWayNamesFromInsee(new \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInsee()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationMode operation/method
 */
if ($telephony->telephonyFMHuntingModificationMode(new \Ovh\StructType\TelephonyFMHuntingModificationMode()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAliasToSipOffer operation/method
 */
if ($telephony->telephonyAliasToSipOffer(new \Ovh\StructType\TelephonyAliasToSipOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserMultiSend operation/method
 */
if ($telephony->telephonySmsUserMultiSend(new \Ovh\StructType\TelephonySmsUserMultiSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetCsvAttachment operation/method
 */
if ($telephony->telephonySmsGetCsvAttachment(new \Ovh\StructType\TelephonySmsGetCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsHistory operation/method
 */
if ($telephony->telephonySmsHistory(new \Ovh\StructType\TelephonySmsHistory()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupModify operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupModify(new \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenList operation/method
 */
if ($telephony->telephonyHuntingGenericScreenList(new \Ovh\StructType\TelephonyHuntingGenericScreenList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenStatus operation/method
 */
if ($telephony->telephonyHuntingGenericScreenStatus(new \Ovh\StructType\TelephonyHuntingGenericScreenStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationMembers operation/method
 */
if ($telephony->telephonyHuntingModificationMembers(new \Ovh\StructType\TelephonyHuntingModificationMembers()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessagesDownload operation/method
 */
if ($telephony->telephonyVoicemailMessagesDownload(new \Ovh\StructType\TelephonyVoicemailMessagesDownload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignCreation operation/method
 */
if ($telephony->telephonyFaxCampaignCreation(new \Ovh\StructType\TelephonyFaxCampaignCreation()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogsNotificationOptions operation/method
 */
if ($telephony->telephonyLineLogsNotificationOptions(new \Ovh\StructType\TelephonyLineLogsNotificationOptions()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetIpRestriction operation/method
 */
if ($telephony->telephonyLineGetIpRestriction(new \Ovh\StructType\TelephonyLineGetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetTimeZoneNumber operation/method
 */
if ($telephony->telephonyGetTimeZoneNumber(new \Ovh\StructType\TelephonyGetTimeZoneNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationMembers operation/method
 */
if ($telephony->telephonyFMHuntingModificationMembers(new \Ovh\StructType\TelephonyFMHuntingModificationMembers()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookAdd operation/method
 */
if ($telephony->telephonyPhonebookAdd(new \Ovh\StructType\TelephonyPhonebookAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRestrictionModify operation/method
 */
if ($telephony->telephonyRestrictionModify(new \Ovh\StructType\TelephonyRestrictionModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRatesList operation/method
 */
if ($telephony->telephonyRatesList(new \Ovh\StructType\TelephonyRatesList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenOptions operation/method
 */
if ($telephony->telephonyHuntingGenericScreenOptions(new \Ovh\StructType\TelephonyHuntingGenericScreenOptions()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountAdd operation/method
 */
if ($telephony->telephonyBillingAccountAdd(new \Ovh\StructType\TelephonyBillingAccountAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusIsFreeKeyword operation/method
 */
if ($telephony->telephonySmsplusIsFreeKeyword(new \Ovh\StructType\TelephonySmsplusIsFreeKeyword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetCodecs operation/method
 */
if ($telephony->telephonyLineGetCodecs(new \Ovh\StructType\TelephonyLineGetCodecs()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderValidate operation/method
 */
if ($telephony->telephonySmsSenderValidate(new \Ovh\StructType\TelephonySmsSenderValidate()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationSimultaneousCalls operation/method
 */
if ($telephony->telephonyHuntingModificationSimultaneousCalls(new \Ovh\StructType\TelephonyHuntingModificationSimultaneousCalls()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryInfoGetSameSiret operation/method
 */
if ($telephony->telephonyDirectoryInfoGetSameSiret(new \Ovh\StructType\TelephonyDirectoryInfoGetSameSiret()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceSetParams operation/method
 */
if ($telephony->telephonyConferenceSetParams(new \Ovh\StructType\TelephonyConferenceSetParams()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySparePurchase operation/method
 */
if ($telephony->telephonySparePurchase(new \Ovh\StructType\TelephonySparePurchase()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignList operation/method
 */
if ($telephony->telephonyFaxCampaignList(new \Ovh\StructType\TelephonyFaxCampaignList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicGetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyNicGetMgcpIpRestriction(new \Ovh\StructType\TelephonyNicGetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetUserQuotaForUser operation/method
 */
if ($telephony->telephonySmsGetUserQuotaForUser(new \Ovh\StructType\TelephonySmsGetUserQuotaForUser()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryInfoGetSiret operation/method
 */
if ($telephony->telephonyDirectoryInfoGetSiret(new \Ovh\StructType\TelephonyDirectoryInfoGetSiret()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyModify operation/method
 */
if ($telephony->telephonyFunctionKeyModify(new \Ovh\StructType\TelephonyFunctionKeyModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberList operation/method
 */
if ($telephony->telephonyAbbreviatedNumberList(new \Ovh\StructType\TelephonyAbbreviatedNumberList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxModifyPassword operation/method
 */
if ($telephony->telephonyFaxModifyPassword(new \Ovh\StructType\TelephonyFaxModifyPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsDelete operation/method
 */
if ($telephony->telephonySmsDelete(new \Ovh\StructType\TelephonySmsDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryModifyPublication operation/method
 */
if ($telephony->telephonyDirectoryModifyPublication(new \Ovh\StructType\TelephonyDirectoryModifyPublication()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupAdd operation/method
 */
if ($telephony->telephonyPhonebookOnGroupAdd(new \Ovh\StructType\TelephonyPhonebookOnGroupAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOfferPossibility operation/method
 */
if ($telephony->telephonyLineSwitchOfferPossibility(new \Ovh\StructType\TelephonyLineSwitchOfferPossibility()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderList operation/method
 */
if ($telephony->telephonySmsSenderList(new \Ovh\StructType\TelephonySmsSenderList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySipToAliasOffer operation/method
 */
if ($telephony->telephonySipToAliasOffer(new \Ovh\StructType\TelephonySipToAliasOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyList operation/method
 */
if ($telephony->telephonyFunctionKeyList(new \Ovh\StructType\TelephonyFunctionKeyList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetCallBack operation/method
 */
if ($telephony->telephonySmsGetCallBack(new \Ovh\StructType\TelephonySmsGetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySviModify operation/method
 */
if ($telephony->telephonySviModify(new \Ovh\StructType\TelephonySviModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceDelete operation/method
 */
if ($telephony->telephonySmsplusServiceDelete(new \Ovh\StructType\TelephonySmsplusServiceDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOffer operation/method
 */
if ($telephony->telephonyLineSwitchOffer(new \Ovh\StructType\TelephonyLineSwitchOffer()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberCheck operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberCheck(new \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberCheck()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDelClosureEvents operation/method
 */
if ($telephony->telephonyDelClosureEvents(new \Ovh\StructType\TelephonyDelClosureEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFreefaxToVoicefaxCheckList operation/method
 */
if ($telephony->telephonyFreefaxToVoicefaxCheckList(new \Ovh\StructType\TelephonyFreefaxToVoicefaxCheckList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailModifyPassword operation/method
 */
if ($telephony->telephonyVoicemailModifyPassword(new \Ovh\StructType\TelephonyVoicemailModifyPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareCapabilities operation/method
 */
if ($telephony->telephonySpareCapabilities(new \Ovh\StructType\TelephonySpareCapabilities()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsDel operation/method
 */
if ($telephony->telephonyPhonebookOnSmsDel(new \Ovh\StructType\TelephonyPhonebookOnSmsDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookShare operation/method
 */
if ($telephony->telephonyPhonebookShare(new \Ovh\StructType\TelephonyPhonebookShare()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSetUserQuota operation/method
 */
if ($telephony->telephonySmsSetUserQuota(new \Ovh\StructType\TelephonySmsSetUserQuota()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsHistoryCsv operation/method
 */
if ($telephony->telephonySmsHistoryCsv(new \Ovh\StructType\TelephonySmsHistoryCsv()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupList operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupList(new \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogs operation/method
 */
if ($telephony->telephonyLineLogs(new \Ovh\StructType\TelephonyLineLogs()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareReplace operation/method
 */
if ($telephony->telephonySpareReplace(new \Ovh\StructType\TelephonySpareReplace()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserList operation/method
 */
if ($telephony->telephonyClick2CallUserList(new \Ovh\StructType\TelephonyClick2CallUserList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMailboxList operation/method
 */
if ($telephony->telephonyVoicemailMailboxList(new \Ovh\StructType\TelephonyVoicemailMailboxList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignDetails operation/method
 */
if ($telephony->telephonyFaxCampaignDetails(new \Ovh\StructType\TelephonyFaxCampaignDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupDel operation/method
 */
if ($telephony->telephonyPhonebookOnGroupDel(new \Ovh\StructType\TelephonyPhonebookOnGroupDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupList operation/method
 */
if ($telephony->telephonyPhonebookOnGroupList(new \Ovh\StructType\TelephonyPhonebookOnGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpecialNumberCustomList operation/method
 */
if ($telephony->telephonySpecialNumberCustomList(new \Ovh\StructType\TelephonySpecialNumberCustomList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationSimultaneousCalls operation/method
 */
if ($telephony->telephonyFMHuntingModificationSimultaneousCalls(new \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMailboxDownload operation/method
 */
if ($telephony->telephonyVoicemailMailboxDownload(new \Ovh\StructType\TelephonyVoicemailMailboxDownload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicGetIpRestriction operation/method
 */
if ($telephony->telephonyNicGetIpRestriction(new \Ovh\StructType\TelephonyNicGetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetClosureEventsAsArray operation/method
 */
if ($telephony->telephonyGetClosureEventsAsArray(new \Ovh\StructType\TelephonyGetClosureEventsAsArray()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactDel operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactDel(new \Ovh\StructType\TelephonyPhonebookOnSmsContactDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyReversmentsRefundIsPending operation/method
 */
if ($telephony->telephonyReversmentsRefundIsPending(new \Ovh\StructType\TelephonyReversmentsRefundIsPending()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListInfoModify operation/method
 */
if ($telephony->telephonyScreenListInfoModify(new \Ovh\StructType\TelephonyScreenListInfoModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceReversableTicketsList operation/method
 */
if ($telephony->telephonySmsplusServiceReversableTicketsList(new \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenStatusModify operation/method
 */
if ($telephony->telephonyHuntingGenericScreenStatusModify(new \Ovh\StructType\TelephonyHuntingGenericScreenStatusModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsBlacklistedSendersList operation/method
 */
if ($telephony->telephonySmsBlacklistedSendersList(new \Ovh\StructType\TelephonySmsBlacklistedSendersList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactAdd operation/method
 */
if ($telephony->telephonyPhonebookContactAdd(new \Ovh\StructType\TelephonyPhonebookContactAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPortabilityOrderSpecialNumber operation/method
 */
if ($telephony->telephonyPortabilityOrderSpecialNumber(new \Ovh\StructType\TelephonyPortabilityOrderSpecialNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserSetCallBack operation/method
 */
if ($telephony->telephonySmsUserSetCallBack(new \Ovh\StructType\TelephonySmsUserSetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupModify operation/method
 */
if ($telephony->telephonyPhonebookOnGroupModify(new \Ovh\StructType\TelephonyPhonebookOnGroupModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSwitchOldOfferPossibility operation/method
 */
if ($telephony->telephonyLineSwitchOldOfferPossibility(new \Ovh\StructType\TelephonyLineSwitchOldOfferPossibility()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceList operation/method
 */
if ($telephony->telephonySmsplusServiceList(new \Ovh\StructType\TelephonySmsplusServiceList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationAnonymousCallRejection
 * operation/method
 */
if ($telephony->telephonyHuntingModificationAnonymousCallRejection(new \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberGetBillingAccount operation/method
 */
if ($telephony->telephonyNumberGetBillingAccount(new \Ovh\StructType\TelephonyNumberGetBillingAccount()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTonesOptionsList operation/method
 */
if ($telephony->telephonyTonesOptionsList(new \Ovh\StructType\TelephonyTonesOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareList operation/method
 */
if ($telephony->telephonySpareList(new \Ovh\StructType\TelephonySpareList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyListSummationCallsFromNumber operation/method
 */
if ($telephony->telephonyListSummationCallsFromNumber(new \Ovh\StructType\TelephonyListSummationCallsFromNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceGetParams operation/method
 */
if ($telephony->telephonyConferenceGetParams(new \Ovh\StructType\TelephonyConferenceGetParams()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactModify operation/method
 */
if ($telephony->telephonyPhonebookContactModify(new \Ovh\StructType\TelephonyPhonebookContactModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineList operation/method
 */
if ($telephony->telephonyLineList(new \Ovh\StructType\TelephonyLineList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineOptionsModify operation/method
 */
if ($telephony->telephonyLineOptionsModify(new \Ovh\StructType\TelephonyLineOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenSet operation/method
 */
if ($telephony->telephonyHuntingGenericScreenSet(new \Ovh\StructType\TelephonyHuntingGenericScreenSet()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignStartStop operation/method
 */
if ($telephony->telephonyFaxCampaignStartStop(new \Ovh\StructType\TelephonyFaxCampaignStartStop()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryModifyAddress operation/method
 */
if ($telephony->telephonyDirectoryModifyAddress(new \Ovh\StructType\TelephonyDirectoryModifyAddress()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicSetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyNicSetMgcpIpRestriction(new \Ovh\StructType\TelephonyNicSetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySecurityDepositCredit operation/method
 */
if ($telephony->telephonySecurityDepositCredit(new \Ovh\StructType\TelephonySecurityDepositCredit()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineOrder operation/method
 */
if ($telephony->telephonyLineOrder(new \Ovh\StructType\TelephonyLineOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceAction operation/method
 */
if ($telephony->telephonyConferenceAction(new \Ovh\StructType\TelephonyConferenceAction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyDel operation/method
 */
if ($telephony->telephonyFunctionKeyDel(new \Ovh\StructType\TelephonyFunctionKeyDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicGetSipDomain operation/method
 */
if ($telephony->telephonyNicGetSipDomain(new \Ovh\StructType\TelephonyNicGetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetClosureEventsAsICS operation/method
 */
if ($telephony->telephonyGetClosureEventsAsICS(new \Ovh\StructType\TelephonyGetClosureEventsAsICS()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserCreditLeft operation/method
 */
if ($telephony->telephonySmsUserCreditLeft(new \Ovh\StructType\TelephonySmsUserCreditLeft()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPortabilityOrder operation/method
 */
if ($telephony->telephonyPortabilityOrder(new \Ovh\StructType\TelephonyPortabilityOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMailboxDelete operation/method
 */
if ($telephony->telephonyVoicemailMailboxDelete(new \Ovh\StructType\TelephonyVoicemailMailboxDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountDel operation/method
 */
if ($telephony->telephonyBillingAccountDel(new \Ovh\StructType\TelephonyBillingAccountDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberClean operation/method
 */
if ($telephony->telephonyNumberClean(new \Ovh\StructType\TelephonyNumberClean()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneOperation operation/method
 */
if ($telephony->telephonyPlugAndPhoneOperation(new \Ovh\StructType\TelephonyPlugAndPhoneOperation()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactModify operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactModify(new \Ovh\StructType\TelephonyPhonebookOnSmsContactModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsModify operation/method
 */
if ($telephony->telephonyPhonebookOnSmsModify(new \Ovh\StructType\TelephonyPhonebookOnSmsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSetQuotaNotification operation/method
 */
if ($telephony->telephonySmsSetQuotaNotification(new \Ovh\StructType\TelephonySmsSetQuotaNotification()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserList operation/method
 */
if ($telephony->telephonySmsUserList(new \Ovh\StructType\TelephonySmsUserList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingInfo operation/method
 */
if ($telephony->telephonyHuntingInfo(new \Ovh\StructType\TelephonyHuntingInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactList operation/method
 */
if ($telephony->telephonyPhonebookContactList(new \Ovh\StructType\TelephonyPhonebookContactList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserPassword operation/method
 */
if ($telephony->telephonySmsUserPassword(new \Ovh\StructType\TelephonySmsUserPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetOfferPrices operation/method
 */
if ($telephony->telephonyLineGetOfferPrices(new \Ovh\StructType\TelephonyLineGetOfferPrices()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetQuotaNotification operation/method
 */
if ($telephony->telephonySmsGetQuotaNotification(new \Ovh\StructType\TelephonySmsGetQuotaNotification()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationMode operation/method
 */
if ($telephony->telephonyHuntingModificationMode(new \Ovh\StructType\TelephonyHuntingModificationMode()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListBlackWhiteChoice operation/method
 */
if ($telephony->telephonyScreenListBlackWhiteChoice(new \Ovh\StructType\TelephonyScreenListBlackWhiteChoice()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsDeleteCsvAttachment operation/method
 */
if ($telephony->telephonySmsDeleteCsvAttachment(new \Ovh\StructType\TelephonySmsDeleteCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberZoneAndPrefixList operation/method
 */
if ($telephony->telephonyNumberZoneAndPrefixList(new \Ovh\StructType\TelephonyNumberZoneAndPrefixList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetSipDomain operation/method
 */
if ($telephony->telephonyLineSetSipDomain(new \Ovh\StructType\TelephonyLineSetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberDel operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberDel(new \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactList operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactList(new \Ovh\StructType\TelephonyPhonebookOnGroupContactList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceReversableTicketsSummary operation/method
 */
if ($telephony->telephonySmsplusServiceReversableTicketsSummary(new \Ovh\StructType\TelephonySmsplusServiceReversableTicketsSummary()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDeleteLine operation/method
 */
if ($telephony->telephonyDeleteLine(new \Ovh\StructType\TelephonyDeleteLine()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySetTimeZoneNumber operation/method
 */
if ($telephony->telephonySetTimeZoneNumber(new \Ovh\StructType\TelephonySetTimeZoneNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNicSetIpRestriction operation/method
 */
if ($telephony->telephonyNicSetIpRestriction(new \Ovh\StructType\TelephonyNicSetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPortabilityStatus operation/method
 */
if ($telephony->telephonyPortabilityStatus(new \Ovh\StructType\TelephonyPortabilityStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySecurityDepositInfo operation/method
 */
if ($telephony->telephonySecurityDepositInfo(new \Ovh\StructType\TelephonySecurityDepositInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsListCsvAttachment operation/method
 */
if ($telephony->telephonySmsListCsvAttachment(new \Ovh\StructType\TelephonySmsListCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsCancelSending operation/method
 */
if ($telephony->telephonySmsCancelSending(new \Ovh\StructType\TelephonySmsCancelSending()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListInfo operation/method
 */
if ($telephony->telephonyScreenListInfo(new \Ovh\StructType\TelephonyScreenListInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogsOnGroup operation/method
 */
if ($telephony->telephonyLineLogsOnGroup(new \Ovh\StructType\TelephonyLineLogsOnGroup()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyLineGetMgcpIpRestriction(new \Ovh\StructType\TelephonyLineGetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineDetails operation/method
 */
if ($telephony->telephonyLineDetails(new \Ovh\StructType\TelephonyLineDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookContactDel operation/method
 */
if ($telephony->telephonyPhonebookContactDel(new \Ovh\StructType\TelephonyPhonebookContactDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRatesListCsv operation/method
 */
if ($telephony->telephonyRatesListCsv(new \Ovh\StructType\TelephonyRatesListCsv()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyConferenceGetInfos operation/method
 */
if ($telephony->telephonyConferenceGetInfos(new \Ovh\StructType\TelephonyConferenceGetInfos()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactList operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactList(new \Ovh\StructType\TelephonyPhonebookOnSmsContactList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnSmsContactAdd operation/method
 */
if ($telephony->telephonyPhonebookOnSmsContactAdd(new \Ovh\StructType\TelephonyPhonebookOnSmsContactAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFMHuntingModificationAnonymousCallRejection
 * operation/method
 */
if ($telephony->telephonyFMHuntingModificationAnonymousCallRejection(new \Ovh\StructType\TelephonyFMHuntingModificationAnonymousCallRejection()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDdiModify operation/method
 */
if ($telephony->telephonyDdiModify(new \Ovh\StructType\TelephonyDdiModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyRedirectInfo operation/method
 */
if ($telephony->telephonyRedirectInfo(new \Ovh\StructType\TelephonyRedirectInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSend operation/method
 */
if ($telephony->telephonySmsSend(new \Ovh\StructType\TelephonySmsSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineGetSipDomain operation/method
 */
if ($telephony->telephonyLineGetSipDomain(new \Ovh\StructType\TelephonyLineGetSipDomain()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyToneDelete operation/method
 */
if ($telephony->telephonyToneDelete(new \Ovh\StructType\TelephonyToneDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetMgcpIpRestriction operation/method
 */
if ($telephony->telephonyLineSetMgcpIpRestriction(new \Ovh\StructType\TelephonyLineSetMgcpIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupContactModify operation/method
 */
if ($telephony->telephonyPhonebookOnGroupContactModify(new \Ovh\StructType\TelephonyPhonebookOnGroupContactModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyScreenListBlackWhiteChoiceModify operation/method
 */
if ($telephony->telephonyScreenListBlackWhiteChoiceModify(new \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceDetails operation/method
 */
if ($telephony->telephonySmsplusServiceDetails(new \Ovh\StructType\TelephonySmsplusServiceDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupDel operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupDel(new \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderDescription operation/method
 */
if ($telephony->telephonySmsSenderDescription(new \Ovh\StructType\TelephonySmsSenderDescription()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberListPaginated operation/method
 */
if ($telephony->telephonyAbbreviatedNumberListPaginated(new \Ovh\StructType\TelephonyAbbreviatedNumberListPaginated()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySetDefaultPrivateHolidaysEvents operation/method
 */
if ($telephony->telephonySetDefaultPrivateHolidaysEvents(new \Ovh\StructType\TelephonySetDefaultPrivateHolidaysEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareServiceList operation/method
 */
if ($telephony->telephonySpareServiceList(new \Ovh\StructType\TelephonySpareServiceList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserListCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserListCsvAttachment(new \Ovh\StructType\TelephonySmsUserListCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCallList operation/method
 */
if ($telephony->telephonyFaxCallList(new \Ovh\StructType\TelephonyFaxCallList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserSend operation/method
 */
if ($telephony->telephonySmsUserSend(new \Ovh\StructType\TelephonySmsUserSend()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookOnGroupGroupList operation/method
 */
if ($telephony->telephonyPhonebookOnGroupGroupList(new \Ovh\StructType\TelephonyPhonebookOnGroupGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserPassword operation/method
 */
if ($telephony->telephonyClick2CallUserPassword(new \Ovh\StructType\TelephonyClick2CallUserPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetUserQuota operation/method
 */
if ($telephony->telephonySmsGetUserQuota(new \Ovh\StructType\TelephonySmsGetUserQuota()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderDelete operation/method
 */
if ($telephony->telephonySmsSenderDelete(new \Ovh\StructType\TelephonySmsSenderDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyToneStatus operation/method
 */
if ($telephony->telephonyToneStatus(new \Ovh\StructType\TelephonyToneStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDdiInfo operation/method
 */
if ($telephony->telephonyDdiInfo(new \Ovh\StructType\TelephonyDdiInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGroupList operation/method
 */
if ($telephony->telephonyHuntingGroupList(new \Ovh\StructType\TelephonyHuntingGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTrunkExternalDisplayedNumberList operation/method
 */
if ($telephony->telephonyTrunkExternalDisplayedNumberList(new \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryListWayType operation/method
 */
if ($telephony->telephonyDirectoryListWayType(new \Ovh\StructType\TelephonyDirectoryListWayType()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserHistoryCsv operation/method
 */
if ($telephony->telephonySmsUserHistoryCsv(new \Ovh\StructType\TelephonySmsUserHistoryCsv()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyCallList operation/method
 */
if ($telephony->telephonyCallList(new \Ovh\StructType\TelephonyCallList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyGetDefaultPrivateHolidaysEvents operation/method
 */
if ($telephony->telephonyGetDefaultPrivateHolidaysEvents(new \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEvents()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusShortCodesList operation/method
 */
if ($telephony->telephonySmsplusShortCodesList(new \Ovh\StructType\TelephonySmsplusShortCodesList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAliasToSipPossibilities operation/method
 */
if ($telephony->telephonyAliasToSipPossibilities(new \Ovh\StructType\TelephonyAliasToSipPossibilities()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberOnGroupAdd operation/method
 */
if ($telephony->telephonyAbbreviatedNumberOnGroupAdd(new \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingModificationQueue operation/method
 */
if ($telephony->telephonyHuntingModificationQueue(new \Ovh\StructType\TelephonyHuntingModificationQueue()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyDirectoryInfo operation/method
 */
if ($telephony->telephonyDirectoryInfo(new \Ovh\StructType\TelephonyDirectoryInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillDetails operation/method
 */
if ($telephony->telephonyBillDetails(new \Ovh\StructType\TelephonyBillDetails()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineLogsNotificationOptionsModify operation/method
 */
if ($telephony->telephonyLineLogsNotificationOptionsModify(new \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallDoBySession operation/method
 */
if ($telephony->telephonyClick2CallDoBySession(new \Ovh\StructType\TelephonyClick2CallDoBySession()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberAdd operation/method
 */
if ($telephony->telephonyAbbreviatedNumberAdd(new \Ovh\StructType\TelephonyAbbreviatedNumberAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberOrder operation/method
 */
if ($telephony->telephonyNumberOrder(new \Ovh\StructType\TelephonyNumberOrder()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetIpRestriction operation/method
 */
if ($telephony->telephonyLineSetIpRestriction(new \Ovh\StructType\TelephonyLineSetIpRestriction()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineSetCodecs operation/method
 */
if ($telephony->telephonyLineSetCodecs(new \Ovh\StructType\TelephonyLineSetCodecs()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyNumberCityForZoneList operation/method
 */
if ($telephony->telephonyNumberCityForZoneList(new \Ovh\StructType\TelephonyNumberCityForZoneList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyTonesOptionsModify operation/method
 */
if ($telephony->telephonyTonesOptionsModify(new \Ovh\StructType\TelephonyTonesOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessagesRemoteUpload operation/method
 */
if ($telephony->telephonyVoicemailMessagesRemoteUpload(new \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferInfo operation/method
 */
if ($telephony->telephonyOfferInfo(new \Ovh\StructType\TelephonyOfferInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookDel operation/method
 */
if ($telephony->telephonyPhonebookDel(new \Ovh\StructType\TelephonyPhonebookDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserAdd operation/method
 */
if ($telephony->telephonySmsUserAdd(new \Ovh\StructType\TelephonySmsUserAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserHistory operation/method
 */
if ($telephony->telephonySmsUserHistory(new \Ovh\StructType\TelephonySmsUserHistory()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserGetCallBack operation/method
 */
if ($telephony->telephonySmsUserGetCallBack(new \Ovh\StructType\TelephonySmsUserGetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferModifyPassword operation/method
 */
if ($telephony->telephonyOfferModifyPassword(new \Ovh\StructType\TelephonyOfferModifyPassword()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFunctionKeyAdd operation/method
 */
if ($telephony->telephonyFunctionKeyAdd(new \Ovh\StructType\TelephonyFunctionKeyAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookList operation/method
 */
if ($telephony->telephonyPhonebookList(new \Ovh\StructType\TelephonyPhonebookList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneReset operation/method
 */
if ($telephony->telephonyPlugAndPhoneReset(new \Ovh\StructType\TelephonyPlugAndPhoneReset()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareInfo operation/method
 */
if ($telephony->telephonySpareInfo(new \Ovh\StructType\TelephonySpareInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserDel operation/method
 */
if ($telephony->telephonySmsUserDel(new \Ovh\StructType\TelephonySmsUserDel()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessagesStatus operation/method
 */
if ($telephony->telephonyVoicemailMessagesStatus(new \Ovh\StructType\TelephonyVoicemailMessagesStatus()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookModify operation/method
 */
if ($telephony->telephonyPhonebookModify(new \Ovh\StructType\TelephonyPhonebookModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferModifyName operation/method
 */
if ($telephony->telephonyOfferModifyName(new \Ovh\StructType\TelephonyOfferModifyName()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSetCallBack operation/method
 */
if ($telephony->telephonySmsSetCallBack(new \Ovh\StructType\TelephonySmsSetCallBack()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPhonebookGroupList operation/method
 */
if ($telephony->telephonyPhonebookGroupList(new \Ovh\StructType\TelephonyPhonebookGroupList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountInfo operation/method
 */
if ($telephony->telephonyBillingAccountInfo(new \Ovh\StructType\TelephonyBillingAccountInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsSenderAdd operation/method
 */
if ($telephony->telephonySmsSenderAdd(new \Ovh\StructType\TelephonySmsSenderAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineConsumptionCSVByMail operation/method
 */
if ($telephony->telephonyLineConsumptionCSVByMail(new \Ovh\StructType\TelephonyLineConsumptionCSVByMail()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsUserDeleteCsvAttachment operation/method
 */
if ($telephony->telephonySmsUserDeleteCsvAttachment(new \Ovh\StructType\TelephonySmsUserDeleteCsvAttachment()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyListReversableCallsFromNumber operation/method
 */
if ($telephony->telephonyListReversableCallsFromNumber(new \Ovh\StructType\TelephonyListReversableCallsFromNumber()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyBillingAccountList operation/method
 */
if ($telephony->telephonyBillingAccountList(new \Ovh\StructType\TelephonyBillingAccountList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsGetQuotaNotificationForUser operation/method
 */
if ($telephony->telephonySmsGetQuotaNotificationForUser(new \Ovh\StructType\TelephonySmsGetQuotaNotificationForUser()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyChangeNicModify operation/method
 */
if ($telephony->telephonyChangeNicModify(new \Ovh\StructType\TelephonyChangeNicModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySviInfo operation/method
 */
if ($telephony->telephonySviInfo(new \Ovh\StructType\TelephonySviInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyClick2CallUserAdd operation/method
 */
if ($telephony->telephonyClick2CallUserAdd(new \Ovh\StructType\TelephonyClick2CallUserAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsBlacklistedSendersDelete operation/method
 */
if ($telephony->telephonySmsBlacklistedSendersDelete(new \Ovh\StructType\TelephonySmsBlacklistedSendersDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceAdd operation/method
 */
if ($telephony->telephonySmsplusServiceAdd(new \Ovh\StructType\TelephonySmsplusServiceAdd()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareCreateRMA operation/method
 */
if ($telephony->telephonySpareCreateRMA(new \Ovh\StructType\TelephonySpareCreateRMA()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySmsplusServiceEdit operation/method
 */
if ($telephony->telephonySmsplusServiceEdit(new \Ovh\StructType\TelephonySmsplusServiceEdit()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyHuntingGenericScreenOptionsModify operation/method
 */
if ($telephony->telephonyHuntingGenericScreenOptionsModify(new \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyPlugAndPhoneInfo operation/method
 */
if ($telephony->telephonyPlugAndPhoneInfo(new \Ovh\StructType\TelephonyPlugAndPhoneInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyFaxCampaignDelete operation/method
 */
if ($telephony->telephonyFaxCampaignDelete(new \Ovh\StructType\TelephonyFaxCampaignDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyReversmentsRefundFromBillingAccount operation/method
 */
if ($telephony->telephonyReversmentsRefundFromBillingAccount(new \Ovh\StructType\TelephonyReversmentsRefundFromBillingAccount()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyVoicemailMessageDelete operation/method
 */
if ($telephony->telephonyVoicemailMessageDelete(new \Ovh\StructType\TelephonyVoicemailMessageDelete()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyLineOptionsList operation/method
 */
if ($telephony->telephonyLineOptionsList(new \Ovh\StructType\TelephonyLineOptionsList()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonySpareServiceInfo operation/method
 */
if ($telephony->telephonySpareServiceInfo(new \Ovh\StructType\TelephonySpareServiceInfo()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyAbbreviatedNumberModify operation/method
 */
if ($telephony->telephonyAbbreviatedNumberModify(new \Ovh\StructType\TelephonyAbbreviatedNumberModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Sample call for telephonyOfferSimultaneousLinesModify operation/method
 */
if ($telephony->telephonyOfferSimultaneousLinesModify(new \Ovh\StructType\TelephonyOfferSimultaneousLinesModify()) !== false) {
    print_r($telephony->getResult());
} else {
    print_r($telephony->getLastError());
}
/**
 * Samples for Sqlprive ServiceType
 */
$sqlprive = new \Ovh\ServiceType\Sqlprive($options);
/**
 * Sample call for sqlpriveMysqlRestart operation/method
 */
if ($sqlprive->sqlpriveMysqlRestart(new \Ovh\StructType\SqlpriveMysqlRestart()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlVersion operation/method
 */
if ($sqlprive->sqlpriveMysqlVersion(new \Ovh\StructType\SqlpriveMysqlVersion()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseImportFromFile operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseImportFromFile(new \Ovh\StructType\SqlpriveMysqlDatabaseImportFromFile()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlUserList operation/method
 */
if ($sqlprive->sqlpriveMysqlUserList(new \Ovh\StructType\SqlpriveMysqlUserList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlRamUsed operation/method
 */
if ($sqlprive->sqlpriveMysqlRamUsed(new \Ovh\StructType\SqlpriveMysqlRamUsed()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveAlertInfo operation/method
 */
if ($sqlprive->sqlpriveAlertInfo(new \Ovh\StructType\SqlpriveAlertInfo()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveList operation/method
 */
if ($sqlprive->sqlpriveList(new \Ovh\StructType\SqlpriveList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlLogs operation/method
 */
if ($sqlprive->sqlpriveMysqlLogs(new \Ovh\StructType\SqlpriveMysqlLogs()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveCronSet operation/method
 */
if ($sqlprive->sqlpriveCronSet(new \Ovh\StructType\SqlpriveCronSet()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabasePrivilegeList operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabasePrivilegeList(new \Ovh\StructType\SqlpriveMysqlDatabasePrivilegeList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveCronDel operation/method
 */
if ($sqlprive->sqlpriveCronDel(new \Ovh\StructType\SqlpriveCronDel()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseImportFromHost operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseImportFromHost(new \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveAlertSet operation/method
 */
if ($sqlprive->sqlpriveAlertSet(new \Ovh\StructType\SqlpriveAlertSet()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlOvhMyAdmin operation/method
 */
if ($sqlprive->sqlpriveMysqlOvhMyAdmin(new \Ovh\StructType\SqlpriveMysqlOvhMyAdmin()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseList operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseList(new \Ovh\StructType\SqlpriveMysqlDatabaseList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlProcessList operation/method
 */
if ($sqlprive->sqlpriveMysqlProcessList(new \Ovh\StructType\SqlpriveMysqlProcessList()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlActivateOvhManagement operation/method
 */
if ($sqlprive->sqlpriveMysqlActivateOvhManagement(new \Ovh\StructType\SqlpriveMysqlActivateOvhManagement()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlGetPossibleDump operation/method
 */
if ($sqlprive->sqlpriveMysqlGetPossibleDump(new \Ovh\StructType\SqlpriveMysqlGetPossibleDump()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveFtpPassword operation/method
 */
if ($sqlprive->sqlpriveFtpPassword(new \Ovh\StructType\SqlpriveFtpPassword()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlRootPassword operation/method
 */
if ($sqlprive->sqlpriveMysqlRootPassword(new \Ovh\StructType\SqlpriveMysqlRootPassword()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlProcessKill operation/method
 */
if ($sqlprive->sqlpriveMysqlProcessKill(new \Ovh\StructType\SqlpriveMysqlProcessKill()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveMysqlDatabaseSave operation/method
 */
if ($sqlprive->sqlpriveMysqlDatabaseSave(new \Ovh\StructType\SqlpriveMysqlDatabaseSave()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Sample call for sqlpriveCronGet operation/method
 */
if ($sqlprive->sqlpriveCronGet(new \Ovh\StructType\SqlpriveCronGet()) !== false) {
    print_r($sqlprive->getResult());
} else {
    print_r($sqlprive->getLastError());
}
/**
 * Samples for Logout ServiceType
 */
$logout = new \Ovh\ServiceType\Logout($options);
/**
 * Sample call for logout operation/method
 */
if ($logout->logout(new \Ovh\StructType\Logout()) !== false) {
    print_r($logout->getResult());
} else {
    print_r($logout->getLastError());
}
/**
 * Samples for Multi ServiceType
 */
$multi = new \Ovh\ServiceType\Multi($options);
/**
 * Sample call for multiFtpChangeDirectory operation/method
 */
if ($multi->multiFtpChangeDirectory(new \Ovh\StructType\MultiFtpChangeDirectory()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpChangePassword operation/method
 */
if ($multi->multiFtpChangePassword(new \Ovh\StructType\MultiFtpChangePassword()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpList operation/method
 */
if ($multi->multiFtpList(new \Ovh\StructType\MultiFtpList()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpAdd operation/method
 */
if ($multi->multiFtpAdd(new \Ovh\StructType\MultiFtpAdd()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainList operation/method
 */
if ($multi->multiDomainList(new \Ovh\StructType\MultiDomainList()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiFtpDel operation/method
 */
if ($multi->multiFtpDel(new \Ovh\StructType\MultiFtpDel()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainAdd operation/method
 */
if ($multi->multiDomainAdd(new \Ovh\StructType\MultiDomainAdd()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainModify operation/method
 */
if ($multi->multiDomainModify(new \Ovh\StructType\MultiDomainModify()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainInfo operation/method
 */
if ($multi->multiDomainInfo(new \Ovh\StructType\MultiDomainInfo()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Sample call for multiDomainDel operation/method
 */
if ($multi->multiDomainDel(new \Ovh\StructType\MultiDomainDel()) !== false) {
    print_r($multi->getResult());
} else {
    print_r($multi->getLastError());
}
/**
 * Samples for Dedicated ServiceType
 */
$dedicated = new \Ovh\ServiceType\Dedicated($options);
/**
 * Sample call for dedicatedReverseDel operation/method
 */
if ($dedicated->dedicatedReverseDel(new \Ovh\StructType\DedicatedReverseDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedDelServiceMonitoringAlert operation/method
 */
if ($dedicated->dedicatedDelServiceMonitoringAlert(new \Ovh\StructType\DedicatedDelServiceMonitoringAlert()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedAddServiceMonitoringAlertSMS operation/method
 */
if ($dedicated->dedicatedAddServiceMonitoringAlertSMS(new \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingList operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingList(new \Ovh\StructType\DedicatedIpLoadBalancingList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupReinstallConfiguration operation/method
 */
if ($dedicated->dedicatedBackupReinstallConfiguration(new \Ovh\StructType\DedicatedBackupReinstallConfiguration()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetHisto operation/method
 */
if ($dedicated->dedicatedBackupGetHisto(new \Ovh\StructType\DedicatedBackupGetHisto()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupUpdate operation/method
 */
if ($dedicated->dedicatedBackupUpdate(new \Ovh\StructType\DedicatedBackupUpdate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootGetRescueEmail operation/method
 */
if ($dedicated->dedicatedNetbootGetRescueEmail(new \Ovh\StructType\DedicatedNetbootGetRescueEmail()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRtmListBackdoor operation/method
 */
if ($dedicated->dedicatedRtmListBackdoor(new \Ovh\StructType\DedicatedRtmListBackdoor()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringNotificationCreate operation/method
 */
if ($dedicated->dedicatedMonitoringNotificationCreate(new \Ovh\StructType\DedicatedMonitoringNotificationCreate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupList operation/method
 */
if ($dedicated->dedicatedBackupList(new \Ovh\StructType\DedicatedBackupList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootGetAll operation/method
 */
if ($dedicated->dedicatedNetbootGetAll(new \Ovh\StructType\DedicatedNetbootGetAll()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpAvailableGetList operation/method
 */
if ($dedicated->dedicatedVirtualMacIpAvailableGetList(new \Ovh\StructType\DedicatedVirtualMacIpAvailableGetList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringSMSCreate operation/method
 */
if ($dedicated->dedicatedMonitoringSMSCreate(new \Ovh\StructType\DedicatedMonitoringSMSCreate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeQuery operation/method
 */
if ($dedicated->dedicatedRipeQuery(new \Ovh\StructType\DedicatedRipeQuery()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupFtpPassword operation/method
 */
if ($dedicated->dedicatedBackupFtpPassword(new \Ovh\StructType\DedicatedBackupFtpPassword()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRtmBackdoorUpdateAlert operation/method
 */
if ($dedicated->dedicatedRtmBackdoorUpdateAlert(new \Ovh\StructType\DedicatedRtmBackdoorUpdateAlert()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSAdd operation/method
 */
if ($dedicated->dedicatedSecondaryDNSAdd(new \Ovh\StructType\DedicatedSecondaryDNSAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRtmGetStatus operation/method
 */
if ($dedicated->dedicatedRtmGetStatus(new \Ovh\StructType\DedicatedRtmGetStatus()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootGetAvailable operation/method
 */
if ($dedicated->dedicatedNetbootGetAvailable(new \Ovh\StructType\DedicatedNetbootGetAvailable()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMailinglistGetAllowed operation/method
 */
if ($dedicated->dedicatedMailinglistGetAllowed(new \Ovh\StructType\DedicatedMailinglistGetAllowed()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupInfo operation/method
 */
if ($dedicated->dedicatedBackupInfo(new \Ovh\StructType\DedicatedBackupInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeAdd operation/method
 */
if ($dedicated->dedicatedFailoverRipeAdd(new \Ovh\StructType\DedicatedFailoverRipeAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcClientRuleAdd operation/method
 */
if ($dedicated->dedicatedFilterIrcClientRuleAdd(new \Ovh\StructType\DedicatedFilterIrcClientRuleAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallationTemplateList operation/method
 */
if ($dedicated->dedicatedInstallationTemplateList(new \Ovh\StructType\DedicatedInstallationTemplateList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetCalendar operation/method
 */
if ($dedicated->dedicatedBackupGetCalendar(new \Ovh\StructType\DedicatedBackupGetCalendar()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingServerDel operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingServerDel(new \Ovh\StructType\DedicatedIpLoadBalancingServerDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedEditServiceMonitoringItem operation/method
 */
if ($dedicated->dedicatedEditServiceMonitoringItem(new \Ovh\StructType\DedicatedEditServiceMonitoringItem()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPServerList operation/method
 */
if ($dedicated->dedicatedIPForUDPServerList(new \Ovh\StructType\DedicatedIPForUDPServerList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupSet operation/method
 */
if ($dedicated->dedicatedBackupSet(new \Ovh\StructType\DedicatedBackupSet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpDelete operation/method
 */
if ($dedicated->dedicatedVirtualMacIpDelete(new \Ovh\StructType\DedicatedVirtualMacIpDelete()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeSplit operation/method
 */
if ($dedicated->dedicatedFailoverRipeSplit(new \Ovh\StructType\DedicatedFailoverRipeSplit()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseInfo operation/method
 */
if ($dedicated->dedicatedReverseInfo(new \Ovh\StructType\DedicatedReverseInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedCapabilitiesGetAll operation/method
 */
if ($dedicated->dedicatedCapabilitiesGetAll(new \Ovh\StructType\DedicatedCapabilitiesGetAll()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupIncludeAdd operation/method
 */
if ($dedicated->dedicatedBackupIncludeAdd(new \Ovh\StructType\DedicatedBackupIncludeAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeList operation/method
 */
if ($dedicated->dedicatedFailoverRipeList(new \Ovh\StructType\DedicatedFailoverRipeList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceAdd operation/method
 */
if ($dedicated->dedicatedMonitoringServiceAdd(new \Ovh\StructType\DedicatedMonitoringServiceAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedHardRebootDo operation/method
 */
if ($dedicated->dedicatedHardRebootDo(new \Ovh\StructType\DedicatedHardRebootDo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseList operation/method
 */
if ($dedicated->dedicatedReverseList(new \Ovh\StructType\DedicatedReverseList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupFtpAdd operation/method
 */
if ($dedicated->dedicatedBackupFtpAdd(new \Ovh\StructType\DedicatedBackupFtpAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpUsedGetList operation/method
 */
if ($dedicated->dedicatedVirtualMacIpUsedGetList(new \Ovh\StructType\DedicatedVirtualMacIpUsedGetList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootInfo operation/method
 */
if ($dedicated->dedicatedNetbootInfo(new \Ovh\StructType\DedicatedNetbootInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingAdd operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingAdd(new \Ovh\StructType\DedicatedIpLoadBalancingAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedAvailableNotificationNicsGet operation/method
 */
if ($dedicated->dedicatedAvailableNotificationNicsGet(new \Ovh\StructType\DedicatedAvailableNotificationNicsGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceDel operation/method
 */
if ($dedicated->dedicatedMonitoringServiceDel(new \Ovh\StructType\DedicatedMonitoringServiceDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingServerStateModify operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingServerStateModify(new \Ovh\StructType\DedicatedIpLoadBalancingServerStateModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseModify operation/method
 */
if ($dedicated->dedicatedReverseModify(new \Ovh\StructType\DedicatedReverseModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverList operation/method
 */
if ($dedicated->dedicatedFailoverList(new \Ovh\StructType\DedicatedFailoverList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSInfo operation/method
 */
if ($dedicated->dedicatedSecondaryDNSInfo(new \Ovh\StructType\DedicatedSecondaryDNSInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeUpdateInetnum operation/method
 */
if ($dedicated->dedicatedRipeUpdateInetnum(new \Ovh\StructType\DedicatedRipeUpdateInetnum()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetAvailableNetworkFromCountry operation/method
 */
if ($dedicated->dedicatedGetAvailableNetworkFromCountry(new \Ovh\StructType\DedicatedGetAvailableNetworkFromCountry()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverAdd operation/method
 */
if ($dedicated->dedicatedFailoverAdd(new \Ovh\StructType\DedicatedFailoverAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcServerRuleList operation/method
 */
if ($dedicated->dedicatedFilterIrcServerRuleList(new \Ovh\StructType\DedicatedFilterIrcServerRuleList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeCreateOrganisation operation/method
 */
if ($dedicated->dedicatedRipeCreateOrganisation(new \Ovh\StructType\DedicatedRipeCreateOrganisation()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupExcludeAdd operation/method
 */
if ($dedicated->dedicatedBackupExcludeAdd(new \Ovh\StructType\DedicatedBackupExcludeAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcServerRuleDel operation/method
 */
if ($dedicated->dedicatedFilterIrcServerRuleDel(new \Ovh\StructType\DedicatedFilterIrcServerRuleDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeModify operation/method
 */
if ($dedicated->dedicatedFailoverRipeModify(new \Ovh\StructType\DedicatedFailoverRipeModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringList operation/method
 */
if ($dedicated->dedicatedMonitoringList(new \Ovh\StructType\DedicatedMonitoringList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupExcludeDel operation/method
 */
if ($dedicated->dedicatedBackupExcludeDel(new \Ovh\StructType\DedicatedBackupExcludeDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedHardRebootStatus operation/method
 */
if ($dedicated->dedicatedHardRebootStatus(new \Ovh\StructType\DedicatedHardRebootStatus()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetServiceMonitoringItem operation/method
 */
if ($dedicated->dedicatedGetServiceMonitoringItem(new \Ovh\StructType\DedicatedGetServiceMonitoringItem()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedReverseAdd operation/method
 */
if ($dedicated->dedicatedReverseAdd(new \Ovh\StructType\DedicatedReverseAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetFreePlanning operation/method
 */
if ($dedicated->dedicatedBackupGetFreePlanning(new \Ovh\StructType\DedicatedBackupGetFreePlanning()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallAllowedDistributionGet operation/method
 */
if ($dedicated->dedicatedInstallAllowedDistributionGet(new \Ovh\StructType\DedicatedInstallAllowedDistributionGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedCapabilitiesGet operation/method
 */
if ($dedicated->dedicatedCapabilitiesGet(new \Ovh\StructType\DedicatedCapabilitiesGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringSMSDel operation/method
 */
if ($dedicated->dedicatedMonitoringSMSDel(new \Ovh\StructType\DedicatedMonitoringSMSDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringAdd operation/method
 */
if ($dedicated->dedicatedMonitoringAdd(new \Ovh\StructType\DedicatedMonitoringAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedOperationList operation/method
 */
if ($dedicated->dedicatedOperationList(new \Ovh\StructType\DedicatedOperationList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupIncludeDel operation/method
 */
if ($dedicated->dedicatedBackupIncludeDel(new \Ovh\StructType\DedicatedBackupIncludeDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBandwidthSwitching operation/method
 */
if ($dedicated->dedicatedBandwidthSwitching(new \Ovh\StructType\DedicatedBandwidthSwitching()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingDel operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingDel(new \Ovh\StructType\DedicatedIpLoadBalancingDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallationTemplateUse operation/method
 */
if ($dedicated->dedicatedInstallationTemplateUse(new \Ovh\StructType\DedicatedInstallationTemplateUse()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingServerAdd operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingServerAdd(new \Ovh\StructType\DedicatedIpLoadBalancingServerAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeUpdateOrganisation operation/method
 */
if ($dedicated->dedicatedRipeUpdateOrganisation(new \Ovh\StructType\DedicatedRipeUpdateOrganisation()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootModifyById operation/method
 */
if ($dedicated->dedicatedNetbootModifyById(new \Ovh\StructType\DedicatedNetbootModifyById()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupGetDate operation/method
 */
if ($dedicated->dedicatedBackupGetDate(new \Ovh\StructType\DedicatedBackupGetDate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSDel operation/method
 */
if ($dedicated->dedicatedSecondaryDNSDel(new \Ovh\StructType\DedicatedSecondaryDNSDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedSecondaryDNSGetAll operation/method
 */
if ($dedicated->dedicatedSecondaryDNSGetAll(new \Ovh\StructType\DedicatedSecondaryDNSGetAll()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringNotificationDel operation/method
 */
if ($dedicated->dedicatedMonitoringNotificationDel(new \Ovh\StructType\DedicatedMonitoringNotificationDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBandwidthManagementGet operation/method
 */
if ($dedicated->dedicatedBandwidthManagementGet(new \Ovh\StructType\DedicatedBandwidthManagementGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringStatusUpdate operation/method
 */
if ($dedicated->dedicatedMonitoringStatusUpdate(new \Ovh\StructType\DedicatedMonitoringStatusUpdate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPMoveGetStatus operation/method
 */
if ($dedicated->dedicatedIPForUDPMoveGetStatus(new \Ovh\StructType\DedicatedIPForUDPMoveGetStatus()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeDeleteOrganisation operation/method
 */
if ($dedicated->dedicatedRipeDeleteOrganisation(new \Ovh\StructType\DedicatedRipeDeleteOrganisation()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverRipeGetIp operation/method
 */
if ($dedicated->dedicatedFailoverRipeGetIp(new \Ovh\StructType\DedicatedFailoverRipeGetIp()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallBasic operation/method
 */
if ($dedicated->dedicatedInstallBasic(new \Ovh\StructType\DedicatedInstallBasic()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallReset operation/method
 */
if ($dedicated->dedicatedInstallReset(new \Ovh\StructType\DedicatedInstallReset()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceAddNotification operation/method
 */
if ($dedicated->dedicatedMonitoringServiceAddNotification(new \Ovh\StructType\DedicatedMonitoringServiceAddNotification()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcClientRuleDel operation/method
 */
if ($dedicated->dedicatedFilterIrcClientRuleDel(new \Ovh\StructType\DedicatedFilterIrcClientRuleDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMrtgInfo operation/method
 */
if ($dedicated->dedicatedMrtgInfo(new \Ovh\StructType\DedicatedMrtgInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupReinstallData operation/method
 */
if ($dedicated->dedicatedBackupReinstallData(new \Ovh\StructType\DedicatedBackupReinstallData()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupFtpInfo operation/method
 */
if ($dedicated->dedicatedBackupFtpInfo(new \Ovh\StructType\DedicatedBackupFtpInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringModify operation/method
 */
if ($dedicated->dedicatedMonitoringModify(new \Ovh\StructType\DedicatedMonitoringModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetRandomAvailableIpFromCountry operation/method
 */
if ($dedicated->dedicatedGetRandomAvailableIpFromCountry(new \Ovh\StructType\DedicatedGetRandomAvailableIpFromCountry()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInstallBasicProgress operation/method
 */
if ($dedicated->dedicatedInstallBasicProgress(new \Ovh\StructType\DedicatedInstallBasicProgress()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedAddServiceMonitoringAlertEmail operation/method
 */
if ($dedicated->dedicatedAddServiceMonitoringAlertEmail(new \Ovh\StructType\DedicatedAddServiceMonitoringAlertEmail()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFailoverUpdate operation/method
 */
if ($dedicated->dedicatedFailoverUpdate(new \Ovh\StructType\DedicatedFailoverUpdate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcServerRuleAdd operation/method
 */
if ($dedicated->dedicatedFilterIrcServerRuleAdd(new \Ovh\StructType\DedicatedFilterIrcServerRuleAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedVirtualMacIpAdd operation/method
 */
if ($dedicated->dedicatedVirtualMacIpAdd(new \Ovh\StructType\DedicatedVirtualMacIpAdd()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedRipeGetRipeIds operation/method
 */
if ($dedicated->dedicatedRipeGetRipeIds(new \Ovh\StructType\DedicatedRipeGetRipeIds()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedInfo operation/method
 */
if ($dedicated->dedicatedInfo(new \Ovh\StructType\DedicatedInfo()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedBackupUpdateDate operation/method
 */
if ($dedicated->dedicatedBackupUpdateDate(new \Ovh\StructType\DedicatedBackupUpdateDate()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringStatusGet operation/method
 */
if ($dedicated->dedicatedMonitoringStatusGet(new \Ovh\StructType\DedicatedMonitoringStatusGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedNetbootModify operation/method
 */
if ($dedicated->dedicatedNetbootModify(new \Ovh\StructType\DedicatedNetbootModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedFilterIrcClientRuleList operation/method
 */
if ($dedicated->dedicatedFilterIrcClientRuleList(new \Ovh\StructType\DedicatedFilterIrcClientRuleList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPMove operation/method
 */
if ($dedicated->dedicatedIPForUDPMove(new \Ovh\StructType\DedicatedIPForUDPMove()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringSMSModify operation/method
 */
if ($dedicated->dedicatedMonitoringSMSModify(new \Ovh\StructType\DedicatedMonitoringSMSModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringDel operation/method
 */
if ($dedicated->dedicatedMonitoringDel(new \Ovh\StructType\DedicatedMonitoringDel()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceAddSMS operation/method
 */
if ($dedicated->dedicatedMonitoringServiceAddSMS(new \Ovh\StructType\DedicatedMonitoringServiceAddSMS()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedList operation/method
 */
if ($dedicated->dedicatedList(new \Ovh\StructType\DedicatedList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIPForUDPGet operation/method
 */
if ($dedicated->dedicatedIPForUDPGet(new \Ovh\StructType\DedicatedIPForUDPGet()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedGetAvailableIpFromNetwork operation/method
 */
if ($dedicated->dedicatedGetAvailableIpFromNetwork(new \Ovh\StructType\DedicatedGetAvailableIpFromNetwork()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMailinglistSubscribe operation/method
 */
if ($dedicated->dedicatedMailinglistSubscribe(new \Ovh\StructType\DedicatedMailinglistSubscribe()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedIpLoadBalancingNameModify operation/method
 */
if ($dedicated->dedicatedIpLoadBalancingNameModify(new \Ovh\StructType\DedicatedIpLoadBalancingNameModify()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Sample call for dedicatedMonitoringServiceList operation/method
 */
if ($dedicated->dedicatedMonitoringServiceList(new \Ovh\StructType\DedicatedMonitoringServiceList()) !== false) {
    print_r($dedicated->getResult());
} else {
    print_r($dedicated->getLastError());
}
/**
 * Samples for Service ServiceType
 */
$service = new \Ovh\ServiceType\Service($options);
/**
 * Sample call for serviceGroupGetAllInfo operation/method
 */
if ($service->serviceGroupGetAllInfo(new \Ovh\StructType\ServiceGroupGetAllInfo()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupList operation/method
 */
if ($service->serviceGroupList(new \Ovh\StructType\ServiceGroupList()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceListPaginated operation/method
 */
if ($service->serviceListPaginated(new \Ovh\StructType\ServiceListPaginated()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupCreate operation/method
 */
if ($service->serviceGroupCreate(new \Ovh\StructType\ServiceGroupCreate()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceModifyContact operation/method
 */
if ($service->serviceModifyContact(new \Ovh\StructType\ServiceModifyContact()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceModifyOwner operation/method
 */
if ($service->serviceModifyOwner(new \Ovh\StructType\ServiceModifyOwner()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceModifyOwnerInfos operation/method
 */
if ($service->serviceModifyOwnerInfos(new \Ovh\StructType\ServiceModifyOwnerInfos()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupDelete operation/method
 */
if ($service->serviceGroupDelete(new \Ovh\StructType\ServiceGroupDelete()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceList operation/method
 */
if ($service->serviceList(new \Ovh\StructType\ServiceList()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupSetComment operation/method
 */
if ($service->serviceGroupSetComment(new \Ovh\StructType\ServiceGroupSetComment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupRemoveService operation/method
 */
if ($service->serviceGroupRemoveService(new \Ovh\StructType\ServiceGroupRemoveService()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceFreedomList operation/method
 */
if ($service->serviceFreedomList(new \Ovh\StructType\ServiceFreedomList()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupSetName operation/method
 */
if ($service->serviceGroupSetName(new \Ovh\StructType\ServiceGroupSetName()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupInfo operation/method
 */
if ($service->serviceGroupInfo(new \Ovh\StructType\ServiceGroupInfo()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for serviceGroupAddService operation/method
 */
if ($service->serviceGroupAddService(new \Ovh\StructType\ServiceGroupAddService()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Samples for Redirected ServiceType
 */
$redirected = new \Ovh\ServiceType\Redirected($options);
/**
 * Sample call for redirectedEmailAdd operation/method
 */
if ($redirected->redirectedEmailAdd(new \Ovh\StructType\RedirectedEmailAdd()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Sample call for redirectedEmailModify operation/method
 */
if ($redirected->redirectedEmailModify(new \Ovh\StructType\RedirectedEmailModify()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Sample call for redirectedEmailDel operation/method
 */
if ($redirected->redirectedEmailDel(new \Ovh\StructType\RedirectedEmailDel()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Sample call for redirectedEmailList operation/method
 */
if ($redirected->redirectedEmailList(new \Ovh\StructType\RedirectedEmailList()) !== false) {
    print_r($redirected->getResult());
} else {
    print_r($redirected->getLastError());
}
/**
 * Samples for Nic ServiceType
 */
$nic = new \Ovh\ServiceType\Nic($options);
/**
 * Sample call for nicModifyInfos operation/method
 */
if ($nic->nicModifyInfos(new \Ovh\StructType\NicModifyInfos()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nic operation/method
 */
if ($nic->nic(new \Ovh\StructType\Nic()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicTldEligibility operation/method
 */
if ($nic->nicTldEligibility(new \Ovh\StructType\NicTldEligibility()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicModifyLanguage operation/method
 */
if ($nic->nicModifyLanguage(new \Ovh\StructType\NicModifyLanguage()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicCreate operation/method
 */
if ($nic->nicCreate(new \Ovh\StructType\NicCreate()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicInfo operation/method
 */
if ($nic->nicInfo(new \Ovh\StructType\NicInfo()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicModifyInfosIT operation/method
 */
if ($nic->nicModifyInfosIT(new \Ovh\StructType\NicModifyInfosIT()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicPublicInfo operation/method
 */
if ($nic->nicPublicInfo(new \Ovh\StructType\NicPublicInfo()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicCreateIT operation/method
 */
if ($nic->nicCreateIT(new \Ovh\StructType\NicCreateIT()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicModifyEmail operation/method
 */
if ($nic->nicModifyEmail(new \Ovh\StructType\NicModifyEmail()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicUpdateIT operation/method
 */
if ($nic->nicUpdateIT(new \Ovh\StructType\NicUpdateIT()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Sample call for nicUpdate operation/method
 */
if ($nic->nicUpdate(new \Ovh\StructType\NicUpdate()) !== false) {
    print_r($nic->getResult());
} else {
    print_r($nic->getLastError());
}
/**
 * Samples for Ripe ServiceType
 */
$ripe = new \Ovh\ServiceType\Ripe($options);
/**
 * Sample call for ripeGetRipeIds operation/method
 */
if ($ripe->ripeGetRipeIds(new \Ovh\StructType\RipeGetRipeIds()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeUpdateInetnum operation/method
 */
if ($ripe->ripeUpdateInetnum(new \Ovh\StructType\RipeUpdateInetnum()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeQuery operation/method
 */
if ($ripe->ripeQuery(new \Ovh\StructType\RipeQuery()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeDeleteOrganisation operation/method
 */
if ($ripe->ripeDeleteOrganisation(new \Ovh\StructType\RipeDeleteOrganisation()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeUpdateOrganisation operation/method
 */
if ($ripe->ripeUpdateOrganisation(new \Ovh\StructType\RipeUpdateOrganisation()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Sample call for ripeCreateOrganisation operation/method
 */
if ($ripe->ripeCreateOrganisation(new \Ovh\StructType\RipeCreateOrganisation()) !== false) {
    print_r($ripe->getResult());
} else {
    print_r($ripe->getLastError());
}
/**
 * Samples for Automated ServiceType
 */
$automated = new \Ovh\ServiceType\Automated($options);
/**
 * Sample call for automatedMailGetVolumeHistory operation/method
 */
if ($automated->automatedMailGetVolumeHistory(new \Ovh\StructType\AutomatedMailGetVolumeHistory()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailGetTodo operation/method
 */
if ($automated->automatedMailGetTodo(new \Ovh\StructType\AutomatedMailGetTodo()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailGetErrors operation/method
 */
if ($automated->automatedMailGetErrors(new \Ovh\StructType\AutomatedMailGetErrors()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailGetState operation/method
 */
if ($automated->automatedMailGetState(new \Ovh\StructType\AutomatedMailGetState()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailUnlock operation/method
 */
if ($automated->automatedMailUnlock(new \Ovh\StructType\AutomatedMailUnlock()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailLock operation/method
 */
if ($automated->automatedMailLock(new \Ovh\StructType\AutomatedMailLock()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailReturnSet operation/method
 */
if ($automated->automatedMailReturnSet(new \Ovh\StructType\AutomatedMailReturnSet()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Sample call for automatedMailFlush operation/method
 */
if ($automated->automatedMailFlush(new \Ovh\StructType\AutomatedMailFlush()) !== false) {
    print_r($automated->getResult());
} else {
    print_r($automated->getLastError());
}
/**
 * Samples for Domain ServiceType
 */
$domain = new \Ovh\ServiceType\Domain($options);
/**
 * Sample call for domainHostUpdate operation/method
 */
if ($domain->domainHostUpdate(new \Ovh\StructType\DomainHostUpdate()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainUnlock operation/method
 */
if ($domain->domainUnlock(new \Ovh\StructType\DomainUnlock()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorSetAll operation/method
 */
if ($domain->domainWhoisObfuscatorSetAll(new \Ovh\StructType\DomainWhoisObfuscatorSetAll()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainList operation/method
 */
if ($domain->domainList(new \Ovh\StructType\DomainList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorInfo operation/method
 */
if ($domain->domainWhoisObfuscatorInfo(new \Ovh\StructType\DomainWhoisObfuscatorInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainCheck operation/method
 */
if ($domain->domainCheck(new \Ovh\StructType\DomainCheck()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorSet operation/method
 */
if ($domain->domainWhoisObfuscatorSet(new \Ovh\StructType\DomainWhoisObfuscatorSet()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainResellerSet operation/method
 */
if ($domain->domainResellerSet(new \Ovh\StructType\DomainResellerSet()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationRelaunch operation/method
 */
if ($domain->domainOperationRelaunch(new \Ovh\StructType\DomainOperationRelaunch()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainCapabilities operation/method
 */
if ($domain->domainCapabilities(new \Ovh\StructType\DomainCapabilities()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainDnsList operation/method
 */
if ($domain->domainDnsList(new \Ovh\StructType\DomainDnsList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationInfo operation/method
 */
if ($domain->domainOperationInfo(new \Ovh\StructType\DomainOperationInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainDnsUpdate operation/method
 */
if ($domain->domainDnsUpdate(new \Ovh\StructType\DomainDnsUpdate()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainResellerDel operation/method
 */
if ($domain->domainResellerDel(new \Ovh\StructType\DomainResellerDel()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainDnsGetOvhDefault operation/method
 */
if ($domain->domainDnsGetOvhDefault(new \Ovh\StructType\DomainDnsGetOvhDefault()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorUnset operation/method
 */
if ($domain->domainWhoisObfuscatorUnset(new \Ovh\StructType\DomainWhoisObfuscatorUnset()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostDel operation/method
 */
if ($domain->domainHostDel(new \Ovh\StructType\DomainHostDel()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainInfo operation/method
 */
if ($domain->domainInfo(new \Ovh\StructType\DomainInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostList operation/method
 */
if ($domain->domainHostList(new \Ovh\StructType\DomainHostList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainLockStatus operation/method
 */
if ($domain->domainLockStatus(new \Ovh\StructType\DomainLockStatus()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainLock operation/method
 */
if ($domain->domainLock(new \Ovh\StructType\DomainLock()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationCancel operation/method
 */
if ($domain->domainOperationCancel(new \Ovh\StructType\DomainOperationCancel()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostAdd operation/method
 */
if ($domain->domainHostAdd(new \Ovh\StructType\DomainHostAdd()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorUnsetAll operation/method
 */
if ($domain->domainWhoisObfuscatorUnsetAll(new \Ovh\StructType\DomainWhoisObfuscatorUnsetAll()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainOperationList operation/method
 */
if ($domain->domainOperationList(new \Ovh\StructType\DomainOperationList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainWhoisObfuscatorList operation/method
 */
if ($domain->domainWhoisObfuscatorList(new \Ovh\StructType\DomainWhoisObfuscatorList()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Sample call for domainHostInfo operation/method
 */
if ($domain->domainHostInfo(new \Ovh\StructType\DomainHostInfo()) !== false) {
    print_r($domain->getResult());
} else {
    print_r($domain->getLastError());
}
/**
 * Samples for Database ServiceType
 */
$database = new \Ovh\ServiceType\Database($options);
/**
 * Sample call for databaseChangePassword operation/method
 */
if ($database->databaseChangePassword(new \Ovh\StructType\DatabaseChangePassword()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseDump operation/method
 */
if ($database->databaseDump(new \Ovh\StructType\DatabaseDump()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseCreate operation/method
 */
if ($database->databaseCreate(new \Ovh\StructType\DatabaseCreate()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseList operation/method
 */
if ($database->databaseList(new \Ovh\StructType\DatabaseList()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseDelete operation/method
 */
if ($database->databaseDelete(new \Ovh\StructType\DatabaseDelete()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Sample call for databaseRecreate operation/method
 */
if ($database->databaseRecreate(new \Ovh\StructType\DatabaseRecreate()) !== false) {
    print_r($database->getResult());
} else {
    print_r($database->getLastError());
}
/**
 * Samples for Billing ServiceType
 */
$billing = new \Ovh\ServiceType\Billing($options);
/**
 * Sample call for billingInvoiceList operation/method
 */
if ($billing->billingInvoiceList(new \Ovh\StructType\BillingInvoiceList()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingGetReferencesToExpired operation/method
 */
if ($billing->billingGetReferencesToExpired(new \Ovh\StructType\BillingGetReferencesToExpired()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingGetAccessByNic operation/method
 */
if ($billing->billingGetAccessByNic(new \Ovh\StructType\BillingGetAccessByNic()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingInvoiceInfo operation/method
 */
if ($billing->billingInvoiceInfo(new \Ovh\StructType\BillingInvoiceInfo()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Samples for Global ServiceType
 */
$global = new \Ovh\ServiceType\_Global($options);
/**
 * Sample call for globalAccessByNic operation/method
 */
if ($global->globalAccessByNic(new \Ovh\StructType\GlobalAccessByNic()) !== false) {
    print_r($global->getResult());
} else {
    print_r($global->getLastError());
}
/**
 * Samples for Ticket ServiceType
 */
$ticket = new \Ovh\ServiceType\Ticket($options);
/**
 * Sample call for ticketListIncidentsByDomain operation/method
 */
if ($ticket->ticketListIncidentsByDomain(new \Ovh\StructType\TicketListIncidentsByDomain()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketListIncidents operation/method
 */
if ($ticket->ticketListIncidents(new \Ovh\StructType\TicketListIncidents()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketReopen operation/method
 */
if ($ticket->ticketReopen(new \Ovh\StructType\TicketReopen()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketListContact operation/method
 */
if ($ticket->ticketListContact(new \Ovh\StructType\TicketListContact()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketGet operation/method
 */
if ($ticket->ticketGet(new \Ovh\StructType\TicketGet()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketAnswer operation/method
 */
if ($ticket->ticketAnswer(new \Ovh\StructType\TicketAnswer()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketClose operation/method
 */
if ($ticket->ticketClose(new \Ovh\StructType\TicketClose()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Sample call for ticketCreate operation/method
 */
if ($ticket->ticketCreate(new \Ovh\StructType\TicketCreate()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Samples for Zone ServiceType
 */
$zone = new \Ovh\ServiceType\Zone($options);
/**
 * Sample call for zoneEntryList operation/method
 */
if ($zone->zoneEntryList(new \Ovh\StructType\ZoneEntryList()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryAddCustom operation/method
 */
if ($zone->zoneEntryAddCustom(new \Ovh\StructType\ZoneEntryAddCustom()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryModify operation/method
 */
if ($zone->zoneEntryModify(new \Ovh\StructType\ZoneEntryModify()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryDel operation/method
 */
if ($zone->zoneEntryDel(new \Ovh\StructType\ZoneEntryDel()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneEntryAdd operation/method
 */
if ($zone->zoneEntryAdd(new \Ovh\StructType\ZoneEntryAdd()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneExport operation/method
 */
if ($zone->zoneExport(new \Ovh\StructType\ZoneExport()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Sample call for zoneImport operation/method
 */
if ($zone->zoneImport(new \Ovh\StructType\ZoneImport()) !== false) {
    print_r($zone->getResult());
} else {
    print_r($zone->getLastError());
}
/**
 * Samples for Dns ServiceType
 */
$dns = new \Ovh\ServiceType\Dns($options);
/**
 * Sample call for dnsDefaultInstallCustom operation/method
 */
if ($dns->dnsDefaultInstallCustom(new \Ovh\StructType\DnsDefaultInstallCustom()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsInstall operation/method
 */
if ($dns->dnsInstall(new \Ovh\StructType\DnsInstall()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsReset operation/method
 */
if ($dns->dnsReset(new \Ovh\StructType\DnsReset()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsSoaModify operation/method
 */
if ($dns->dnsSoaModify(new \Ovh\StructType\DnsSoaModify()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsInstallCustom operation/method
 */
if ($dns->dnsInstallCustom(new \Ovh\StructType\DnsInstallCustom()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsUninstall operation/method
 */
if ($dns->dnsUninstall(new \Ovh\StructType\DnsUninstall()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Sample call for dnsGeolocalizeHosting operation/method
 */
if ($dns->dnsGeolocalizeHosting(new \Ovh\StructType\DnsGeolocalizeHosting()) !== false) {
    print_r($dns->getResult());
} else {
    print_r($dns->getLastError());
}
/**
 * Samples for Pop ServiceType
 */
$pop = new \Ovh\ServiceType\Pop($options);
/**
 * Sample call for popDetachMasterNic operation/method
 */
if ($pop->popDetachMasterNic(new \Ovh\StructType\PopDetachMasterNic()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popList operation/method
 */
if ($pop->popList(new \Ovh\StructType\PopList()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popUpgradeQuota operation/method
 */
if ($pop->popUpgradeQuota(new \Ovh\StructType\PopUpgradeQuota()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popDel operation/method
 */
if ($pop->popDel(new \Ovh\StructType\PopDel()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popListByMasterNic operation/method
 */
if ($pop->popListByMasterNic(new \Ovh\StructType\PopListByMasterNic()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popModifyDescription operation/method
 */
if ($pop->popModifyDescription(new \Ovh\StructType\PopModifyDescription()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popInfo operation/method
 */
if ($pop->popInfo(new \Ovh\StructType\PopInfo()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popModifyPassword operation/method
 */
if ($pop->popModifyPassword(new \Ovh\StructType\PopModifyPassword()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popAttachMasterNic operation/method
 */
if ($pop->popAttachMasterNic(new \Ovh\StructType\PopAttachMasterNic()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popAdd operation/method
 */
if ($pop->popAdd(new \Ovh\StructType\PopAdd()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Sample call for popGetQuota operation/method
 */
if ($pop->popGetQuota(new \Ovh\StructType\PopGetQuota()) !== false) {
    print_r($pop->getResult());
} else {
    print_r($pop->getLastError());
}
/**
 * Samples for Overquota ServiceType
 */
$overquota = new \Ovh\ServiceType\Overquota($options);
/**
 * Sample call for overquotaInfo operation/method
 */
if ($overquota->overquotaInfo(new \Ovh\StructType\OverquotaInfo()) !== false) {
    print_r($overquota->getResult());
} else {
    print_r($overquota->getLastError());
}
/**
 * Samples for Email ServiceType
 */
$email = new \Ovh\ServiceType\Email($options);
/**
 * Sample call for emailGetCapabilities operation/method
 */
if ($email->emailGetCapabilities(new \Ovh\StructType\EmailGetCapabilities()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDomainListByMasterNic operation/method
 */
if ($email->emailDomainListByMasterNic(new \Ovh\StructType\EmailDomainListByMasterNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDomainSummary operation/method
 */
if ($email->emailDomainSummary(new \Ovh\StructType\EmailDomainSummary()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterAdd operation/method
 */
if ($email->emailFilterAdd(new \Ovh\StructType\EmailFilterAdd()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailAccessByNic operation/method
 */
if ($email->emailAccessByNic(new \Ovh\StructType\EmailAccessByNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterRuleDel operation/method
 */
if ($email->emailFilterRuleDel(new \Ovh\StructType\EmailFilterRuleDel()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterPriority operation/method
 */
if ($email->emailFilterPriority(new \Ovh\StructType\EmailFilterPriority()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterDel operation/method
 */
if ($email->emailFilterDel(new \Ovh\StructType\EmailFilterDel()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailSetDomainCatchAll operation/method
 */
if ($email->emailSetDomainCatchAll(new \Ovh\StructType\EmailSetDomainCatchAll()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDomainMxList operation/method
 */
if ($email->emailDomainMxList(new \Ovh\StructType\EmailDomainMxList()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterRuleAdd operation/method
 */
if ($email->emailFilterRuleAdd(new \Ovh\StructType\EmailFilterRuleAdd()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterActive operation/method
 */
if ($email->emailFilterActive(new \Ovh\StructType\EmailFilterActive()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailFilterList operation/method
 */
if ($email->emailFilterList(new \Ovh\StructType\EmailFilterList()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailGetDomainMxFiltering operation/method
 */
if ($email->emailGetDomainMxFiltering(new \Ovh\StructType\EmailGetDomainMxFiltering()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailDelMasterNic operation/method
 */
if ($email->emailDelMasterNic(new \Ovh\StructType\EmailDelMasterNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailGetDomainCatchAll operation/method
 */
if ($email->emailGetDomainCatchAll(new \Ovh\StructType\EmailGetDomainCatchAll()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailSetMasterNic operation/method
 */
if ($email->emailSetMasterNic(new \Ovh\StructType\EmailSetMasterNic()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Sample call for emailSetDomainMxFiltering operation/method
 */
if ($email->emailSetDomainMxFiltering(new \Ovh\StructType\EmailSetDomainMxFiltering()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Samples for Ort ServiceType
 */
$ort = new \Ovh\ServiceType\Ort($options);
/**
 * Sample call for ortDomainDel operation/method
 */
if ($ort->ortDomainDel(new \Ovh\StructType\OrtDomainDel()) !== false) {
    print_r($ort->getResult());
} else {
    print_r($ort->getLastError());
}
/**
 * Sample call for ortDomainList operation/method
 */
if ($ort->ortDomainList(new \Ovh\StructType\OrtDomainList()) !== false) {
    print_r($ort->getResult());
} else {
    print_r($ort->getLastError());
}
/**
 * Sample call for ortDomainAdd operation/method
 */
if ($ort->ortDomainAdd(new \Ovh\StructType\OrtDomainAdd()) !== false) {
    print_r($ort->getResult());
} else {
    print_r($ort->getLastError());
}
/**
 * Samples for Prepaid ServiceType
 */
$prepaid = new \Ovh\ServiceType\Prepaid($options);
/**
 * Sample call for prepaidDomainCreate operation/method
 */
if ($prepaid->prepaidDomainCreate(new \Ovh\StructType\PrepaidDomainCreate()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidDomainTransfer operation/method
 */
if ($prepaid->prepaidDomainTransfer(new \Ovh\StructType\PrepaidDomainTransfer()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidSetThreshold operation/method
 */
if ($prepaid->prepaidSetThreshold(new \Ovh\StructType\PrepaidSetThreshold()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetSummary operation/method
 */
if ($prepaid->prepaidGetSummary(new \Ovh\StructType\PrepaidGetSummary()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidDomainRenew operation/method
 */
if ($prepaid->prepaidDomainRenew(new \Ovh\StructType\PrepaidDomainRenew()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetThreshold operation/method
 */
if ($prepaid->prepaidGetThreshold(new \Ovh\StructType\PrepaidGetThreshold()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetHistory operation/method
 */
if ($prepaid->prepaidGetHistory(new \Ovh\StructType\PrepaidGetHistory()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Sample call for prepaidGetBalance operation/method
 */
if ($prepaid->prepaidGetBalance(new \Ovh\StructType\PrepaidGetBalance()) !== false) {
    print_r($prepaid->getResult());
} else {
    print_r($prepaid->getLastError());
}
/**
 * Samples for Reseller ServiceType
 */
$reseller = new \Ovh\ServiceType\Reseller($options);
/**
 * Sample call for resellerDomainTransferIT operation/method
 */
if ($reseller->resellerDomainTransferIT(new \Ovh\StructType\ResellerDomainTransferIT()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainRestore operation/method
 */
if ($reseller->resellerDomainRestore(new \Ovh\StructType\ResellerDomainRestore()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainRenew operation/method
 */
if ($reseller->resellerDomainRenew(new \Ovh\StructType\ResellerDomainRenew()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreate operation/method
 */
if ($reseller->resellerDomainCreate(new \Ovh\StructType\ResellerDomainCreate()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreateIT operation/method
 */
if ($reseller->resellerDomainCreateIT(new \Ovh\StructType\ResellerDomainCreateIT()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainTransferASIA operation/method
 */
if ($reseller->resellerDomainTransferASIA(new \Ovh\StructType\ResellerDomainTransferASIA()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreateCAT operation/method
 */
if ($reseller->resellerDomainCreateCAT(new \Ovh\StructType\ResellerDomainCreateCAT()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainCreateASIA operation/method
 */
if ($reseller->resellerDomainCreateASIA(new \Ovh\StructType\ResellerDomainCreateASIA()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Sample call for resellerDomainTransfer operation/method
 */
if ($reseller->resellerDomainTransfer(new \Ovh\StructType\ResellerDomainTransfer()) !== false) {
    print_r($reseller->getResult());
} else {
    print_r($reseller->getLastError());
}
/**
 * Samples for Infrastructure ServiceType
 */
$infrastructure = new \Ovh\ServiceType\Infrastructure($options);
/**
 * Sample call for infrastructureReverseModify operation/method
 */
if ($infrastructure->infrastructureReverseModify(new \Ovh\StructType\InfrastructureReverseModify()) !== false) {
    print_r($infrastructure->getResult());
} else {
    print_r($infrastructure->getLastError());
}
/**
 * Sample call for infrastructureIpListGet operation/method
 */
if ($infrastructure->infrastructureIpListGet(new \Ovh\StructType\InfrastructureIpListGet()) !== false) {
    print_r($infrastructure->getResult());
} else {
    print_r($infrastructure->getLastError());
}
/**
 * Samples for Responder ServiceType
 */
$responder = new \Ovh\ServiceType\Responder($options);
/**
 * Sample call for responderEmailList operation/method
 */
if ($responder->responderEmailList(new \Ovh\StructType\ResponderEmailList()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailInfo operation/method
 */
if ($responder->responderEmailInfo(new \Ovh\StructType\ResponderEmailInfo()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailDel operation/method
 */
if ($responder->responderEmailDel(new \Ovh\StructType\ResponderEmailDel()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailModify operation/method
 */
if ($responder->responderEmailModify(new \Ovh\StructType\ResponderEmailModify()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Sample call for responderEmailAdd operation/method
 */
if ($responder->responderEmailAdd(new \Ovh\StructType\ResponderEmailAdd()) !== false) {
    print_r($responder->getResult());
} else {
    print_r($responder->getLastError());
}
/**
 * Samples for Hosting ServiceType
 */
$hosting = new \Ovh\ServiceType\Hosting($options);
/**
 * Sample call for hostingAccessByNic operation/method
 */
if ($hosting->hostingAccessByNic(new \Ovh\StructType\HostingAccessByNic()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingSummary operation/method
 */
if ($hosting->hostingSummary(new \Ovh\StructType\HostingSummary()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingGetCapabilities operation/method
 */
if ($hosting->hostingGetCapabilities(new \Ovh\StructType\HostingGetCapabilities()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingChangeMainDomain operation/method
 */
if ($hosting->hostingChangeMainDomain(new \Ovh\StructType\HostingChangeMainDomain()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Sample call for hostingList operation/method
 */
if ($hosting->hostingList(new \Ovh\StructType\HostingList()) !== false) {
    print_r($hosting->getResult());
} else {
    print_r($hosting->getLastError());
}
/**
 * Samples for Managed ServiceType
 */
$managed = new \Ovh\ServiceType\Managed($options);
/**
 * Sample call for managedServicesPartitionQuotaUsed operation/method
 */
if ($managed->managedServicesPartitionQuotaUsed(new \Ovh\StructType\ManagedServicesPartitionQuotaUsed()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesIpAccessChange operation/method
 */
if ($managed->managedServicesIpAccessChange(new \Ovh\StructType\ManagedServicesIpAccessChange()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesSnapshotUpdate operation/method
 */
if ($managed->managedServicesSnapshotUpdate(new \Ovh\StructType\ManagedServicesSnapshotUpdate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesHostMasterIpGet operation/method
 */
if ($managed->managedServicesHostMasterIpGet(new \Ovh\StructType\ManagedServicesHostMasterIpGet()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionDelete operation/method
 */
if ($managed->managedServicesPartitionDelete(new \Ovh\StructType\ManagedServicesPartitionDelete()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionStatusCheck operation/method
 */
if ($managed->managedServicesPartitionStatusCheck(new \Ovh\StructType\ManagedServicesPartitionStatusCheck()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionCreate operation/method
 */
if ($managed->managedServicesPartitionCreate(new \Ovh\StructType\ManagedServicesPartitionCreate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionGet operation/method
 */
if ($managed->managedServicesPartitionGet(new \Ovh\StructType\ManagedServicesPartitionGet()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesPartitionUpdate operation/method
 */
if ($managed->managedServicesPartitionUpdate(new \Ovh\StructType\ManagedServicesPartitionUpdate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Sample call for managedServicesNameUpdate operation/method
 */
if ($managed->managedServicesNameUpdate(new \Ovh\StructType\ManagedServicesNameUpdate()) !== false) {
    print_r($managed->getResult());
} else {
    print_r($managed->getLastError());
}
/**
 * Samples for Account ServiceType
 */
$account = new \Ovh\ServiceType\Account($options);
/**
 * Sample call for accountSummary operation/method
 */
if ($account->accountSummary(new \Ovh\StructType\AccountSummary()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountHistory operation/method
 */
if ($account->accountHistory(new \Ovh\StructType\AccountHistory()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountAlertThresholdSet operation/method
 */
if ($account->accountAlertThresholdSet(new \Ovh\StructType\AccountAlertThresholdSet()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Samples for Sub ServiceType
 */
$sub = new \Ovh\ServiceType\Sub($options);
/**
 * Sample call for subDomainDel operation/method
 */
if ($sub->subDomainDel(new \Ovh\StructType\SubDomainDel()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Sample call for subDomainModify operation/method
 */
if ($sub->subDomainModify(new \Ovh\StructType\SubDomainModify()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Sample call for subDomainAdd operation/method
 */
if ($sub->subDomainAdd(new \Ovh\StructType\SubDomainAdd()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Sample call for subDomainList operation/method
 */
if ($sub->subDomainList(new \Ovh\StructType\SubDomainList()) !== false) {
    print_r($sub->getResult());
} else {
    print_r($sub->getLastError());
}
/**
 * Samples for Support ServiceType
 */
$support = new \Ovh\ServiceType\Support($options);
/**
 * Sample call for supportGetNicDomains operation/method
 */
if ($support->supportGetNicDomains(new \Ovh\StructType\SupportGetNicDomains()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetThreads operation/method
 */
if ($support->supportGetThreads(new \Ovh\StructType\SupportGetThreads()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportSendMessage operation/method
 */
if ($support->supportSendMessage(new \Ovh\StructType\SupportSendMessage()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetAllVisibleCategories operation/method
 */
if ($support->supportGetAllVisibleCategories(new \Ovh\StructType\SupportGetAllVisibleCategories()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetThreadTree operation/method
 */
if ($support->supportGetThreadTree(new \Ovh\StructType\SupportGetThreadTree()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportReportAnswerProblem operation/method
 */
if ($support->supportReportAnswerProblem(new \Ovh\StructType\SupportReportAnswerProblem()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportGetFullMessage operation/method
 */
if ($support->supportGetFullMessage(new \Ovh\StructType\SupportGetFullMessage()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportCloseThreads operation/method
 */
if ($support->supportCloseThreads(new \Ovh\StructType\SupportCloseThreads()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Sample call for supportReactivateThread operation/method
 */
if ($support->supportReactivateThread(new \Ovh\StructType\SupportReactivateThread()) !== false) {
    print_r($support->getResult());
} else {
    print_r($support->getLastError());
}
/**
 * Samples for Crontab ServiceType
 */
$crontab = new \Ovh\ServiceType\Crontab($options);
/**
 * Sample call for crontabDel operation/method
 */
if ($crontab->crontabDel(new \Ovh\StructType\CrontabDel()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabList operation/method
 */
if ($crontab->crontabList(new \Ovh\StructType\CrontabList()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabAdd operation/method
 */
if ($crontab->crontabAdd(new \Ovh\StructType\CrontabAdd()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabInfo operation/method
 */
if ($crontab->crontabInfo(new \Ovh\StructType\CrontabInfo()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Sample call for crontabModify operation/method
 */
if ($crontab->crontabModify(new \Ovh\StructType\CrontabModify()) !== false) {
    print_r($crontab->getResult());
} else {
    print_r($crontab->getLastError());
}
/**
 * Samples for Order ServiceType
 */
$order = new \Ovh\ServiceType\Order($options);
/**
 * Sample call for orderTelephonySmsCredit operation/method
 */
if ($order->orderTelephonySmsCredit(new \Ovh\StructType\OrderTelephonySmsCredit()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderAccountCredit operation/method
 */
if ($order->orderAccountCredit(new \Ovh\StructType\OrderAccountCredit()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderEmailMxPlan operation/method
 */
if ($order->orderEmailMxPlan(new \Ovh\StructType\OrderEmailMxPlan()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderEmailMxLarge operation/method
 */
if ($order->orderEmailMxLarge(new \Ovh\StructType\OrderEmailMxLarge()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderDedicatedFailover operation/method
 */
if ($order->orderDedicatedFailover(new \Ovh\StructType\OrderDedicatedFailover()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Sample call for orderDedicatedFailoverRipe operation/method
 */
if ($order->orderDedicatedFailoverRipe(new \Ovh\StructType\OrderDedicatedFailoverRipe()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Samples for Cms ServiceType
 */
$cms = new \Ovh\ServiceType\Cms($options);
/**
 * Sample call for cmsInstall operation/method
 */
if ($cms->cmsInstall(new \Ovh\StructType\CmsInstall()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsAvailableList operation/method
 */
if ($cms->cmsAvailableList(new \Ovh\StructType\CmsAvailableList()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsRemove operation/method
 */
if ($cms->cmsRemove(new \Ovh\StructType\CmsRemove()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsList operation/method
 */
if ($cms->cmsList(new \Ovh\StructType\CmsList()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Sample call for cmsRenewAdminPassword operation/method
 */
if ($cms->cmsRenewAdminPassword(new \Ovh\StructType\CmsRenewAdminPassword()) !== false) {
    print_r($cms->getResult());
} else {
    print_r($cms->getLastError());
}
/**
 * Samples for Login ServiceType
 */
$login = new \Ovh\ServiceType\Login($options);
/**
 * Sample call for login operation/method
 */
if ($login->login(new \Ovh\StructType\Login()) !== false) {
    print_r($login->getResult());
} else {
    print_r($login->getLastError());
}
/**
 * Samples for Password ServiceType
 */
$password = new \Ovh\ServiceType\Password($options);
/**
 * Sample call for passwordSoapi operation/method
 */
if ($password->passwordSoapi(new \Ovh\StructType\PasswordSoapi()) !== false) {
    print_r($password->getResult());
} else {
    print_r($password->getLastError());
}
/**
 * Sample call for passwordManager operation/method
 */
if ($password->passwordManager(new \Ovh\StructType\PasswordManager()) !== false) {
    print_r($password->getResult());
} else {
    print_r($password->getLastError());
}
/**
 * Samples for Version ServiceType
 */
$version = new \Ovh\ServiceType\Version($options);
/**
 * Sample call for version operation/method
 */
if ($version->version(new \Ovh\StructType\Version()) !== false) {
    print_r($version->getResult());
} else {
    print_r($version->getLastError());
}
/**
 * Samples for Anonymous ServiceType
 */
$anonymous = new \Ovh\ServiceType\Anonymous($options);
/**
 * Sample call for anonymousFtpInfo operation/method
 */
if ($anonymous->anonymousFtpInfo(new \Ovh\StructType\AnonymousFtpInfo()) !== false) {
    print_r($anonymous->getResult());
} else {
    print_r($anonymous->getLastError());
}
/**
 * Sample call for anonymousFtpActivate operation/method
 */
if ($anonymous->anonymousFtpActivate(new \Ovh\StructType\AnonymousFtpActivate()) !== false) {
    print_r($anonymous->getResult());
} else {
    print_r($anonymous->getLastError());
}
/**
 * Sample call for anonymousFtpChangePassword operation/method
 */
if ($anonymous->anonymousFtpChangePassword(new \Ovh\StructType\AnonymousFtpChangePassword()) !== false) {
    print_r($anonymous->getResult());
} else {
    print_r($anonymous->getLastError());
}
/**
 * Samples for Logs ServiceType
 */
$logs = new \Ovh\ServiceType\Logs($options);
/**
 * Sample call for logsAccessList operation/method
 */
if ($logs->logsAccessList(new \Ovh\StructType\LogsAccessList()) !== false) {
    print_r($logs->getResult());
} else {
    print_r($logs->getLastError());
}
/**
 * Sample call for logsAccessDel operation/method
 */
if ($logs->logsAccessDel(new \Ovh\StructType\LogsAccessDel()) !== false) {
    print_r($logs->getResult());
} else {
    print_r($logs->getLastError());
}
/**
 * Sample call for logsAccessAdd operation/method
 */
if ($logs->logsAccessAdd(new \Ovh\StructType\LogsAccessAdd()) !== false) {
    print_r($logs->getResult());
} else {
    print_r($logs->getLastError());
}
/**
 * Samples for Ftp ServiceType
 */
$ftp = new \Ovh\ServiceType\Ftp($options);
/**
 * Sample call for ftpInfo operation/method
 */
if ($ftp->ftpInfo(new \Ovh\StructType\FtpInfo()) !== false) {
    print_r($ftp->getResult());
} else {
    print_r($ftp->getLastError());
}
/**
 * Sample call for ftpChangePassword operation/method
 */
if ($ftp->ftpChangePassword(new \Ovh\StructType\FtpChangePassword()) !== false) {
    print_r($ftp->getResult());
} else {
    print_r($ftp->getLastError());
}
/**
 * Samples for Language ServiceType
 */
$language = new \Ovh\ServiceType\Language($options);
/**
 * Sample call for language operation/method
 */
if ($language->language(new \Ovh\StructType\Language()) !== false) {
    print_r($language->getResult());
} else {
    print_r($language->getLastError());
}
