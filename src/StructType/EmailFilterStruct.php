<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailFilterStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailFilterStruct extends AbstractStructBase
{
    /**
     * The filter
     * @var string
     */
    public $filter;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * The action_param
     * @var string
     */
    public $action_param;
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The priority
     * @var string
     */
    public $priority;
    /**
     * The nbRules
     * @var int
     */
    public $nbRules;
    /**
     * The rules
     * @var \Ovh\ArrayType\MyArrayOfEmailFilterRuleStructType
     */
    public $rules;
    /**
     * Constructor method for emailFilterStruct
     * @uses EmailFilterStruct::setFilter()
     * @uses EmailFilterStruct::setAction()
     * @uses EmailFilterStruct::setAction_param()
     * @uses EmailFilterStruct::setActive()
     * @uses EmailFilterStruct::setPriority()
     * @uses EmailFilterStruct::setNbRules()
     * @uses EmailFilterStruct::setRules()
     * @param string $filter
     * @param string $action
     * @param string $action_param
     * @param bool $active
     * @param string $priority
     * @param int $nbRules
     * @param \Ovh\ArrayType\MyArrayOfEmailFilterRuleStructType $rules
     */
    public function __construct($filter = null, $action = null, $action_param = null, $active = null, $priority = null, $nbRules = null, \Ovh\ArrayType\MyArrayOfEmailFilterRuleStructType $rules = null)
    {
        $this
            ->setFilter($filter)
            ->setAction($action)
            ->setAction_param($action_param)
            ->setActive($active)
            ->setPriority($priority)
            ->setNbRules($nbRules)
            ->setRules($rules);
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
     * @return \Ovh\StructType\EmailFilterStruct
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
     * Get action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Ovh\StructType\EmailFilterStruct
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        return $this;
    }
    /**
     * Get action_param value
     * @return string|null
     */
    public function getAction_param()
    {
        return $this->action_param;
    }
    /**
     * Set action_param value
     * @param string $action_param
     * @return \Ovh\StructType\EmailFilterStruct
     */
    public function setAction_param($action_param = null)
    {
        // validation for constraint: string
        if (!is_null($action_param) && !is_string($action_param)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action_param, true), gettype($action_param)), __LINE__);
        }
        $this->action_param = $action_param;
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Ovh\StructType\EmailFilterStruct
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get priority value
     * @return string|null
     */
    public function getPriority()
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param string $priority
     * @return \Ovh\StructType\EmailFilterStruct
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: string
        if (!is_null($priority) && !is_string($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        return $this;
    }
    /**
     * Get nbRules value
     * @return int|null
     */
    public function getNbRules()
    {
        return $this->nbRules;
    }
    /**
     * Set nbRules value
     * @param int $nbRules
     * @return \Ovh\StructType\EmailFilterStruct
     */
    public function setNbRules($nbRules = null)
    {
        // validation for constraint: int
        if (!is_null($nbRules) && !(is_int($nbRules) || ctype_digit($nbRules))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbRules, true), gettype($nbRules)), __LINE__);
        }
        $this->nbRules = $nbRules;
        return $this;
    }
    /**
     * Get rules value
     * @return \Ovh\ArrayType\MyArrayOfEmailFilterRuleStructType|null
     */
    public function getRules()
    {
        return $this->rules;
    }
    /**
     * Set rules value
     * @param \Ovh\ArrayType\MyArrayOfEmailFilterRuleStructType $rules
     * @return \Ovh\StructType\EmailFilterStruct
     */
    public function setRules(\Ovh\ArrayType\MyArrayOfEmailFilterRuleStructType $rules = null)
    {
        $this->rules = $rules;
        return $this;
    }
}
