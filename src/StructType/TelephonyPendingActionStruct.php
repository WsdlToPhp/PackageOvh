<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPendingActionStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPendingActionStruct extends AbstractStructBase
{
    /**
     * The dateTodo
     * @var string
     */
    public $dateTodo;
    /**
     * The offer
     * @var string
     */
    public $offer;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * Constructor method for telephonyPendingActionStruct
     * @uses TelephonyPendingActionStruct::setDateTodo()
     * @uses TelephonyPendingActionStruct::setOffer()
     * @uses TelephonyPendingActionStruct::setAction()
     * @param string $dateTodo
     * @param string $offer
     * @param string $action
     */
    public function __construct($dateTodo = null, $offer = null, $action = null)
    {
        $this
            ->setDateTodo($dateTodo)
            ->setOffer($offer)
            ->setAction($action);
    }
    /**
     * Get dateTodo value
     * @return string|null
     */
    public function getDateTodo()
    {
        return $this->dateTodo;
    }
    /**
     * Set dateTodo value
     * @param string $dateTodo
     * @return \Ovh\StructType\TelephonyPendingActionStruct
     */
    public function setDateTodo($dateTodo = null)
    {
        // validation for constraint: string
        if (!is_null($dateTodo) && !is_string($dateTodo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTodo, true), gettype($dateTodo)), __LINE__);
        }
        $this->dateTodo = $dateTodo;
        return $this;
    }
    /**
     * Get offer value
     * @return string|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * Set offer value
     * @param string $offer
     * @return \Ovh\StructType\TelephonyPendingActionStruct
     */
    public function setOffer($offer = null)
    {
        // validation for constraint: string
        if (!is_null($offer) && !is_string($offer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offer, true), gettype($offer)), __LINE__);
        }
        $this->offer = $offer;
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
     * @return \Ovh\StructType\TelephonyPendingActionStruct
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
}
