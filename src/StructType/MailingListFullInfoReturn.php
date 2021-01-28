<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailingListFullInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MailingListFullInfoReturn extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The ml
     * @var string
     */
    public $ml;
    /**
     * The owner
     * @var string
     */
    public $owner;
    /**
     * The nbSubscribers
     * @var int
     */
    public $nbSubscribers;
    /**
     * The message_moderation
     * @var bool
     */
    public $message_moderation;
    /**
     * The users_post_only
     * @var bool
     */
    public $users_post_only;
    /**
     * The subscription_moderation
     * @var bool
     */
    public $subscription_moderation;
    /**
     * The replyto
     * @var string
     */
    public $replyto;
    /**
     * The lang
     * @var string
     */
    public $lang;
    /**
     * The moderators
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $moderators;
    /**
     * The subscribers
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $subscribers;
    /**
     * Constructor method for mailingListFullInfoReturn
     * @uses MailingListFullInfoReturn::setDomain()
     * @uses MailingListFullInfoReturn::setMl()
     * @uses MailingListFullInfoReturn::setOwner()
     * @uses MailingListFullInfoReturn::setNbSubscribers()
     * @uses MailingListFullInfoReturn::setMessage_moderation()
     * @uses MailingListFullInfoReturn::setUsers_post_only()
     * @uses MailingListFullInfoReturn::setSubscription_moderation()
     * @uses MailingListFullInfoReturn::setReplyto()
     * @uses MailingListFullInfoReturn::setLang()
     * @uses MailingListFullInfoReturn::setModerators()
     * @uses MailingListFullInfoReturn::setSubscribers()
     * @param string $domain
     * @param string $ml
     * @param string $owner
     * @param int $nbSubscribers
     * @param bool $message_moderation
     * @param bool $users_post_only
     * @param bool $subscription_moderation
     * @param string $replyto
     * @param string $lang
     * @param \Ovh\ArrayType\MyArrayOfStringType $moderators
     * @param \Ovh\ArrayType\MyArrayOfStringType $subscribers
     */
    public function __construct($domain = null, $ml = null, $owner = null, $nbSubscribers = null, $message_moderation = null, $users_post_only = null, $subscription_moderation = null, $replyto = null, $lang = null, \Ovh\ArrayType\MyArrayOfStringType $moderators = null, \Ovh\ArrayType\MyArrayOfStringType $subscribers = null)
    {
        $this
            ->setDomain($domain)
            ->setMl($ml)
            ->setOwner($owner)
            ->setNbSubscribers($nbSubscribers)
            ->setMessage_moderation($message_moderation)
            ->setUsers_post_only($users_post_only)
            ->setSubscription_moderation($subscription_moderation)
            ->setReplyto($replyto)
            ->setLang($lang)
            ->setModerators($moderators)
            ->setSubscribers($subscribers);
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get ml value
     * @return string|null
     */
    public function getMl()
    {
        return $this->ml;
    }
    /**
     * Set ml value
     * @param string $ml
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setMl($ml = null)
    {
        // validation for constraint: string
        if (!is_null($ml) && !is_string($ml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ml, true), gettype($ml)), __LINE__);
        }
        $this->ml = $ml;
        return $this;
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param string $owner
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setOwner($owner = null)
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
        return $this;
    }
    /**
     * Get nbSubscribers value
     * @return int|null
     */
    public function getNbSubscribers()
    {
        return $this->nbSubscribers;
    }
    /**
     * Set nbSubscribers value
     * @param int $nbSubscribers
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setNbSubscribers($nbSubscribers = null)
    {
        // validation for constraint: int
        if (!is_null($nbSubscribers) && !(is_int($nbSubscribers) || ctype_digit($nbSubscribers))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbSubscribers, true), gettype($nbSubscribers)), __LINE__);
        }
        $this->nbSubscribers = $nbSubscribers;
        return $this;
    }
    /**
     * Get message_moderation value
     * @return bool|null
     */
    public function getMessage_moderation()
    {
        return $this->message_moderation;
    }
    /**
     * Set message_moderation value
     * @param bool $message_moderation
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setMessage_moderation($message_moderation = null)
    {
        // validation for constraint: boolean
        if (!is_null($message_moderation) && !is_bool($message_moderation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($message_moderation, true), gettype($message_moderation)), __LINE__);
        }
        $this->message_moderation = $message_moderation;
        return $this;
    }
    /**
     * Get users_post_only value
     * @return bool|null
     */
    public function getUsers_post_only()
    {
        return $this->users_post_only;
    }
    /**
     * Set users_post_only value
     * @param bool $users_post_only
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setUsers_post_only($users_post_only = null)
    {
        // validation for constraint: boolean
        if (!is_null($users_post_only) && !is_bool($users_post_only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($users_post_only, true), gettype($users_post_only)), __LINE__);
        }
        $this->users_post_only = $users_post_only;
        return $this;
    }
    /**
     * Get subscription_moderation value
     * @return bool|null
     */
    public function getSubscription_moderation()
    {
        return $this->subscription_moderation;
    }
    /**
     * Set subscription_moderation value
     * @param bool $subscription_moderation
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setSubscription_moderation($subscription_moderation = null)
    {
        // validation for constraint: boolean
        if (!is_null($subscription_moderation) && !is_bool($subscription_moderation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscription_moderation, true), gettype($subscription_moderation)), __LINE__);
        }
        $this->subscription_moderation = $subscription_moderation;
        return $this;
    }
    /**
     * Get replyto value
     * @return string|null
     */
    public function getReplyto()
    {
        return $this->replyto;
    }
    /**
     * Set replyto value
     * @param string $replyto
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setReplyto($replyto = null)
    {
        // validation for constraint: string
        if (!is_null($replyto) && !is_string($replyto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replyto, true), gettype($replyto)), __LINE__);
        }
        $this->replyto = $replyto;
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lang, true), gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Get moderators value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getModerators()
    {
        return $this->moderators;
    }
    /**
     * Set moderators value
     * @param \Ovh\ArrayType\MyArrayOfStringType $moderators
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setModerators(\Ovh\ArrayType\MyArrayOfStringType $moderators = null)
    {
        $this->moderators = $moderators;
        return $this;
    }
    /**
     * Get subscribers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }
    /**
     * Set subscribers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $subscribers
     * @return \Ovh\StructType\MailingListFullInfoReturn
     */
    public function setSubscribers(\Ovh\ArrayType\MyArrayOfStringType $subscribers = null)
    {
        $this->subscribers = $subscribers;
        return $this;
    }
}
