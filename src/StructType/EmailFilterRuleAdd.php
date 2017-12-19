<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailFilterRuleAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailFilterRuleAdd extends AbstractStructBase
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
     * The pop
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pop;
    /**
     * The filter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filter;
    /**
     * The header
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $header;
    /**
     * The rule
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rule;
    /**
     * The rule_param
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rule_param;
    /**
     * Constructor method for emailFilterRuleAdd
     * @uses EmailFilterRuleAdd::setSession()
     * @uses EmailFilterRuleAdd::setDomain()
     * @uses EmailFilterRuleAdd::setPop()
     * @uses EmailFilterRuleAdd::setFilter()
     * @uses EmailFilterRuleAdd::setHeader()
     * @uses EmailFilterRuleAdd::setRule()
     * @uses EmailFilterRuleAdd::setRule_param()
     * @param string $session
     * @param string $domain
     * @param string $pop
     * @param string $filter
     * @param string $header
     * @param string $rule
     * @param string $rule_param
     */
    public function __construct($session = null, $domain = null, $pop = null, $filter = null, $header = null, $rule = null, $rule_param = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setPop($pop)
            ->setFilter($filter)
            ->setHeader($header)
            ->setRule($rule)
            ->setRule_param($rule_param);
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
     * @return \PayPal\StructType\EmailFilterRuleAdd
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
     * @return \PayPal\StructType\EmailFilterRuleAdd
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
     * Get pop value
     * @return string|null
     */
    public function getPop()
    {
        return $this->pop;
    }
    /**
     * Set pop value
     * @param string $pop
     * @return \PayPal\StructType\EmailFilterRuleAdd
     */
    public function setPop($pop = null)
    {
        // validation for constraint: string
        if (!is_null($pop) && !is_string($pop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pop)), __LINE__);
        }
        $this->pop = $pop;
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \PayPal\StructType\EmailFilterRuleAdd
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        return $this;
    }
    /**
     * Get header value
     * @return string|null
     */
    public function getHeader()
    {
        return $this->header;
    }
    /**
     * Set header value
     * @param string $header
     * @return \PayPal\StructType\EmailFilterRuleAdd
     */
    public function setHeader($header = null)
    {
        // validation for constraint: string
        if (!is_null($header) && !is_string($header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($header)), __LINE__);
        }
        $this->header = $header;
        return $this;
    }
    /**
     * Get rule value
     * @return string|null
     */
    public function getRule()
    {
        return $this->rule;
    }
    /**
     * Set rule value
     * @param string $rule
     * @return \PayPal\StructType\EmailFilterRuleAdd
     */
    public function setRule($rule = null)
    {
        // validation for constraint: string
        if (!is_null($rule) && !is_string($rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rule)), __LINE__);
        }
        $this->rule = $rule;
        return $this;
    }
    /**
     * Get rule_param value
     * @return string|null
     */
    public function getRule_param()
    {
        return $this->rule_param;
    }
    /**
     * Set rule_param value
     * @param string $rule_param
     * @return \PayPal\StructType\EmailFilterRuleAdd
     */
    public function setRule_param($rule_param = null)
    {
        // validation for constraint: string
        if (!is_null($rule_param) && !is_string($rule_param)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rule_param)), __LINE__);
        }
        $this->rule_param = $rule_param;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\EmailFilterRuleAdd
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
