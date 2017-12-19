<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportThreadMessageDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportThreadMessageDetailStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The unread
     * @var int
     */
    public $unread;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The reportReason
     * @var string
     */
    public $reportReason;
    /**
     * Constructor method for supportThreadMessageDetailStruct
     * @uses SupportThreadMessageDetailStruct::setId()
     * @uses SupportThreadMessageDetailStruct::setDate()
     * @uses SupportThreadMessageDetailStruct::setUnread()
     * @uses SupportThreadMessageDetailStruct::setType()
     * @uses SupportThreadMessageDetailStruct::setReportReason()
     * @param int $id
     * @param string $date
     * @param int $unread
     * @param string $type
     * @param string $reportReason
     */
    public function __construct($id = null, $date = null, $unread = null, $type = null, $reportReason = null)
    {
        $this
            ->setId($id)
            ->setDate($date)
            ->setUnread($unread)
            ->setType($type)
            ->setReportReason($reportReason);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \PayPal\StructType\SupportThreadMessageDetailStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \PayPal\StructType\SupportThreadMessageDetailStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get unread value
     * @return int|null
     */
    public function getUnread()
    {
        return $this->unread;
    }
    /**
     * Set unread value
     * @param int $unread
     * @return \PayPal\StructType\SupportThreadMessageDetailStruct
     */
    public function setUnread($unread = null)
    {
        // validation for constraint: int
        if (!is_null($unread) && !is_numeric($unread)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unread)), __LINE__);
        }
        $this->unread = $unread;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\SupportThreadMessageDetailStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get reportReason value
     * @return string|null
     */
    public function getReportReason()
    {
        return $this->reportReason;
    }
    /**
     * Set reportReason value
     * @param string $reportReason
     * @return \PayPal\StructType\SupportThreadMessageDetailStruct
     */
    public function setReportReason($reportReason = null)
    {
        // validation for constraint: string
        if (!is_null($reportReason) && !is_string($reportReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reportReason)), __LINE__);
        }
        $this->reportReason = $reportReason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SupportThreadMessageDetailStruct
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
