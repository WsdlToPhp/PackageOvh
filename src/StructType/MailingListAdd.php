<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailingListAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MailingListAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The ml
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ml;
    /**
     * The owner
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $owner;
    /**
     * The lang
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lang;
    /**
     * The replyto
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $replyto;
    /**
     * The message_moderation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $message_moderation;
    /**
     * The users_post_only
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $users_post_only;
    /**
     * The subscription_moderation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $subscription_moderation;
    /**
     * Constructor method for mailingListAdd
     * @uses MailingListAdd::setSession()
     * @uses MailingListAdd::setDomain()
     * @uses MailingListAdd::setMl()
     * @uses MailingListAdd::setOwner()
     * @uses MailingListAdd::setLang()
     * @uses MailingListAdd::setReplyto()
     * @uses MailingListAdd::setMessage_moderation()
     * @uses MailingListAdd::setUsers_post_only()
     * @uses MailingListAdd::setSubscription_moderation()
     * @param string $session
     * @param string $domain
     * @param string $ml
     * @param string $owner
     * @param string $lang
     * @param string $replyto
     * @param bool $message_moderation
     * @param bool $users_post_only
     * @param bool $subscription_moderation
     */
    public function __construct($session = null, $domain = null, $ml = null, $owner = null, $lang = null, $replyto = null, $message_moderation = null, $users_post_only = null, $subscription_moderation = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setMl($ml)
            ->setOwner($owner)
            ->setLang($lang)
            ->setReplyto($replyto)
            ->setMessage_moderation($message_moderation)
            ->setUsers_post_only($users_post_only)
            ->setSubscription_moderation($subscription_moderation);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setMl($ml = null)
    {
        // validation for constraint: string
        if (!is_null($ml) && !is_string($ml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ml)), __LINE__);
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setOwner($owner = null)
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setReplyto($replyto = null)
    {
        // validation for constraint: string
        if (!is_null($replyto) && !is_string($replyto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($replyto)), __LINE__);
        }
        $this->replyto = $replyto;
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setMessage_moderation($message_moderation = null)
    {
        // validation for constraint: boolean
        if (!is_null($message_moderation) && !is_bool($message_moderation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($message_moderation)), __LINE__);
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setUsers_post_only($users_post_only = null)
    {
        // validation for constraint: boolean
        if (!is_null($users_post_only) && !is_bool($users_post_only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($users_post_only)), __LINE__);
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
     * @return \Ovh\StructType\MailingListAdd
     */
    public function setSubscription_moderation($subscription_moderation = null)
    {
        // validation for constraint: boolean
        if (!is_null($subscription_moderation) && !is_bool($subscription_moderation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($subscription_moderation)), __LINE__);
        }
        $this->subscription_moderation = $subscription_moderation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\MailingListAdd
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
