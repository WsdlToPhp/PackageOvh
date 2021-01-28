<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The pop
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pop;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filter;
    /**
     * The header
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $header;
    /**
     * The rule
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rule;
    /**
     * The rule_param
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\EmailFilterRuleAdd
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\EmailFilterRuleAdd
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
     * @return \Ovh\StructType\EmailFilterRuleAdd
     */
    public function setPop($pop = null)
    {
        // validation for constraint: string
        if (!is_null($pop) && !is_string($pop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pop, true), gettype($pop)), __LINE__);
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
     * @return \Ovh\StructType\EmailFilterRuleAdd
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
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
     * @return \Ovh\StructType\EmailFilterRuleAdd
     */
    public function setHeader($header = null)
    {
        // validation for constraint: string
        if (!is_null($header) && !is_string($header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header, true), gettype($header)), __LINE__);
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
     * @return \Ovh\StructType\EmailFilterRuleAdd
     */
    public function setRule($rule = null)
    {
        // validation for constraint: string
        if (!is_null($rule) && !is_string($rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rule, true), gettype($rule)), __LINE__);
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
     * @return \Ovh\StructType\EmailFilterRuleAdd
     */
    public function setRule_param($rule_param = null)
    {
        // validation for constraint: string
        if (!is_null($rule_param) && !is_string($rule_param)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rule_param, true), gettype($rule_param)), __LINE__);
        }
        $this->rule_param = $rule_param;
        return $this;
    }
}
